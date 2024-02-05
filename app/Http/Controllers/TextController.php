<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        //this file_list array temporary - its should come from config file !!!!!!!!! 
        $file_list = ['index.blade.php', 'header.blade.php','footer.blade.php', 'welcome.blade.php']; //////////////////////////////////////  
        /*
        $files_list = scandir(resource_path('views'));
        
        foreach($files_list as $value){
            if($value === '.' || $value === '..' || $value === 'auth' || $value === 'layouts') {continue;}
            echo '<a href="/text-edit/'.$value.'">'.$value.'</a></br>';
        }
        echo "<br>";
        $files_list2 = scandir(resource_path('views\layouts'));
        foreach($files_list2 as $value){
            if($value === '.' || $value === '..'|| $value === 'app.blade.php') {continue;}
            echo '<a href="/text-edit/layouts+'.$value.'">'.$value.'</a></br>';
        }
        */
        function find_all_files($dir, $file_list)
        {
        $root = scandir($dir);
         //$editable = false; // editable file ??
            foreach($root as $value)
            {
                if($value === '.' || $value === '..') {continue;}

                /*if (in_array($value, $file_list)){
                    //echo"<br>", $value , "<br>";
                    //print_r($file_list);
                    //echo "<br>";
                    $editable = true;
                }*/

                if(is_file("$dir/$value")/* && in_array($value, $file_list, false)*/) {
                    $result[] = "$dir/$value";
                    //$result2[] = $value;
                    continue;
                }

                //if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}

                foreach(find_all_files("$dir/$value", $file_list) as $value)
                {
                    $result[] = $value;
                    //$result2[] = $value;
                }

            }

            return $result;

        }

        $all_files_arr = find_all_files(resource_path('views'), $file_list);
        foreach($all_files_arr as $value)
            {
                $patern = '/.*?views\//';
                $value = preg_replace($patern, '', $value);
                $patern2 = "/\//";
                $value = preg_replace($patern2, '+', $value);
                $patern3 = "/[^\/+]+blade.php/";

                //preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
                //print_r($matches);

                preg_match($patern3, $value, $matches, PREG_OFFSET_CAPTURE);
                //dd($matches);
                $file_name = $matches[0][0];
                if (in_array($file_name, $file_list, false)){ ///// ! ???????? 
                    //echo '<br>'.$value; 
                    //echo '<a href="/text-edit/'.$value.'">'.$value.'</a></br>';
                    echo '<a href="/text-edit/'.$value.'">'.preg_replace($patern, '', $value).'</a></br>';
                }
                //echo "<br>";
                //echo '<a href="/text-edit/'.$value.'">'.$value.'</a></br>';
                //echo "<br>". resource_path("views\\").$value;
                //nado obrezat vsyo do views i views toge s pomoshyu regEXXPPPPPPPPPPPPPPPPPP 
                
                //like this but
                //echo '<a href="/text-edit/'.preg_replace($patern, '', $value).'">'.preg_replace($patern, '', $value).'</a></br>';
            }
    }
    public function show($pagename)
    {
        $pagename2 = str_replace("+", "\\", $pagename);
        //dd($pagename2);



//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})


        $pagefullname = resource_path("views\\$pagename2");
        //dd($pagefullname);
        $template=file_get_contents($pagefullname);
        $ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template);/*dd($content)*/;$teksta = explode('^', $content);
        for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
        //dd($ff);
        $ff2 = array();
        foreach($ff as $value){
            if (!preg_match('/(@\w+|\<\?php|{{|\$\w+|\w+\()/', $value) ){ //(!preg_match('/.*@.*/', $value) ){
                $ff2[] = $value;
                //print_r($value);
            }
        }
	    for ($j=0; $j< count($ff2); $j++){ 
		    echo('<a href="'.$pagename.'\\'.$j.'"
            style="display: block;
            border:1px solid #000;
            border-radius: 5px;
            padding: 10px; padding-left: 20px; padding-right: 20px;
            margin: 20px;
            background: #989898;
            color: black;">'.$ff2[$j].'</a>');
	    };
    }
    public function edit($pagename, $particle_index)
    {
        $pagename2 = str_replace("+", "\\", $pagename);

        $pagefullname = resource_path("views\\$pagename2");

        //dd($pagefullname);

        $template=file_get_contents($pagefullname);
        $ff=array(); $content=preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
        for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
        $jj = $particle_index;

        $ff2 = array();
        foreach($ff as $value){
            if (!preg_match('/(@\w+|\<\?php|{{|\$\w+|\w+\()/', $value) ){
                $ff2[] = $value;
                //print_r($value);
            }
        }

        $tektekst = $ff2[$jj];
        $kol=1;
        for ($j=0; $j<$jj; $j++) { 
            $kol=$kol + substr_count($ff2[$j],$tektekst);
        };
        $csrf_token = csrf_token();
        echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="">
            
            <input type="hidden" name="_token" value="'.$csrf_token.'" />
            
            <br><br><h2>Редактирование текстового фрагмента</h2><br><br><textarea style="width:300px;height:300px;" name="mytext">'.$tektekst.'</textarea><br><input style="width: 300px;
            padding-top: 19px;
            padding-bottom: 22px;
            background-color: #005bff;
            box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
            font-size: 20px;
            color: white;
            margin-top: 20px;" type="submit" value="Заменить текст" title="Заменить текст"></form></div>');

    }
    public function update($pagename, $particle_index)
    {

        $pagename2 = str_replace("+", "\\", $pagename);

        $pagefullname = resource_path("views\\$pagename2");
        $template=file_get_contents($pagefullname);
        $ff=array(); $content = preg_replace('/<[^>]+>/', '^', $template); $teksta = explode('^', $content);
        for ($j=0; $j< count($teksta); $j++) { if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); };
        $jj=$particle_index;

        $ff2 = array();
        foreach($ff as $value){
            if (!preg_match('/(@\w+|\<\?php|{{|\$\w+|\w+\()/', $value) ){
                $ff2[] = $value;
                //print_r($value);
            }
        }


        $tektekst=$ff2[$jj];
	    $kol=1;
        for ($j=0; $j<$jj; $j++) { 
            $kol=$kol + substr_count($ff2[$j],$tektekst);
        };
        $subject = file_get_contents($pagefullname);
        function str_replace_nth($search, $replace, $subject, $nth)
        {
            $found = preg_match_all('/'.preg_quote($search).'/', $subject, $matches, PREG_OFFSET_CAPTURE);
            if (false !== $found && $found > $nth) {
                return substr_replace($subject, $replace, $matches[0][$nth][1], strlen($search));
            }
            return $subject;
        };
        $rez=str_replace_nth($tektekst, $_POST['mytext'], $subject, $kol-1);
        file_put_contents($pagefullname, $rez);
        echo "<br><br><center>Текст был успешно изменен.<p><a href='../'>Вернуться к списку files</a><p>Что бы увидеть изменения на сайте, обновите страницу (не эту (это админка), a страницу Вашего сайта)";

    }

}
