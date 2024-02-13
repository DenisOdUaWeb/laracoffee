<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        //this file_list array temporary - its should come from config file !!!!!!!!! 
        $file_list = ['main.blade.php', 'index.blade.php', 'header.blade.php','footer.blade.php', 'welcome.blade.php']; //////////////////////////////////////  

        function find_all_files($dir, $file_list){

            $root = scandir($dir);

            foreach($root as $value){
                if($value === '.' || $value === '..') {
                    continue;
                }

                if(is_file("$dir/$value")) {
                    $result[] = "$dir/$value";
                    continue;
                }

                foreach(find_all_files("$dir/$value", $file_list) as $value){
                    $result[] = $value;
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

                preg_match($patern3, $value, $matches, PREG_OFFSET_CAPTURE);

                $file_name = $matches[0][0];

                if (in_array($file_name, $file_list, false)){ ///// ! ???????? 

                    echo '<a 
                    style="underline: none; color: black; font-family: Arial; font-size: 20px; margin: 5px; line-height: 1.3;"
                    href="/text-edit/'.$value.'">'.preg_replace($patern, '', $value).'</a></br>';
                }
            }
    }

    public function show($pagename)
    {
        $text_array = $this->textParticlesArrayCreating($pagename);

	    for ($j=0; $j< count($text_array); $j++){ 
		    echo('<a href="'.$pagename.'\\'.$j.'"
            style="display: block;
            border:1px solid #000;
            border-radius: 5px;
            padding: 10px; padding-left: 20px; padding-right: 20px;
            margin: 20px;
            background: #989898;
            color: black;">'.$text_array[$j].'</a>');
	    }
    }

    public function edit($pagename, $particle_index)
    {
        $text_array = $this->textParticlesArrayCreating($pagename);
        $particle_index;
        $tektekst = $text_array[$particle_index];
        $count = 1;
        $csrf_token = csrf_token();

        for ($j=0; $j<$particle_index; $j++) { 
            $count = $count + substr_count($text_array[$j],$tektekst);
        }
        
        echo('<div style="margin: 0 auto; text-align: center;"><form method="POST" action="">
            
            <input type="hidden" name="_token" value="'.$csrf_token.'" />
            
            <br><br><h2>Editing a text fragment</h2><br><br><textarea style="width:300px;height:300px;" name="mytext">'.$tektekst.'</textarea><br><input style="width: 300px;
            padding-top: 19px;
            padding-bottom: 22px;
            background-color: #005bff;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 20px 18px -10px rgba(0, 91, 255, 0.43);
            font-size: 20px;
            color: white;
            margin-top: 20px;" type="submit" value="Replace text" title="Replace text"></form></div>');
    }

    public function update($pagename, $particle_index)
    {

        $_pagename = str_replace("+", "\\", $pagename);
        $pagefullname = resource_path("views\\$_pagename");
        $text_array = $this->textParticlesArrayCreating($pagename);
        $particle_index;
        $tektekst=$text_array[$particle_index];
	    $count = 1;

        for ($j=0; $j<$particle_index; $j++) { 
            $count=$count + substr_count($text_array[$j],$tektekst);
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
        $res = str_replace_nth($tektekst, $_POST['mytext'], $subject, $count-1);
        file_put_contents($pagefullname, $res);

        echo "<br><br><center>The text was successfully changed.<p><a href='../'>Return to files list</a><p>To see changes on the site, refresh the page (not this one (this is the admin panel), but the page of your site)";

    }

    private function textParticlesArrayCreating($pagename)
    {
        $_pagename = str_replace("+", "\\", $pagename);
        $pagefullname = resource_path("views\\$_pagename");
        $template=file_get_contents($pagefullname);
        $text_array=array(); 
        $content=preg_replace('/<[^>]+>/', '^', $template);
        $teksta = explode('^', $content);

        for ($j=0; $j< count($teksta); $j++) {
             if(strlen(trim($teksta[$j]))>1) $ff[]=(trim($teksta[$j])); 
        }
        
        $final_text_arry = array();
        foreach($ff as $value){
            if (!preg_match('/(@\w+|\<\?php|{{|\$\w+|\w+\()/', $value) ){
                $final_text_arry[] = $value;
                //print_r($value);
            }
        }
        return $final_text_arry;
    }

}


//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})
//(<[^>]+>)|(@\w+ \(.+\))|(@\w+)(\{\{.+\}\})

// (<[^>]+>)|(@\w+ \(.+\))|(@\w+)|({{[^}}]+}})|(@\w+|\<\?php|\$\w+|\w+\()
// (<[^>]+>)|(@\w+ \(.+\))|(@\w+)|({{[^}}]+}})|(@\w+|\<\?php|\$\w+|\w+\()
// (<[^>]+>)|(@\w+.+\(.+\))|({{[^}}]+}})|(@\w+|\<\?php|\$\w+|\w+\()

// (<[^>]+>)|(@\w+.+[\(.+\)]*)|({{[^}}]+}})|(\<\?php|\$\w+|\w+\()

// (<[^>]+>)|(@\w+.+[\(.+\){}]+)|({+[^}}]+}+)|(\$\w+)|(\w+[\s]\(.*\).)
// (<[^>]+>)|(@\w+.+[\(.+\){}]+)|({+[^}}]+}+)|(\$\w+)|(\w+[\s]\(.*\).)

//(<[^>]+>)|(@\w+.+[\(.+\){}]+)|({+[^}}]+}+)|(\$\w+)|(\w+[\s]\(.*\).)|(@php[\s\S]*?@endphp)

// (<[^>]+>)|({+[^}}]+}+)|(\$\w+)|(\w+[\s]\(.*\).+[?!}][?!\}])|(@php[\s\S]*?@endphp)|(@\w.+\([^)]*\))
// (<[^>]+>)|({{[^}}][\s\S]*}})|(@php[\s\S]*?@endphp)|(@\w.+\([^)]*\)+)

// <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -> PROBLEM

/*
@if (Route::has('register'))
RegExr was created by gskinner.com.<?php 
sdfgsdfg
?> 
<?php

<div>  asdasd </div> t the Expression & Text to see matches. Roll over matches or the expression for details. PCRE & JavaScript flavors of RegEx are supported. Validate your expression with Tests mode.
{{ $asd }}
{{
The side bar includes a Cheatsheet, full Reference, and Help. You can also Save & Share with the Community and view patterns you create or favorite in My Patterns.function (zsdf  !) {
asdasd
}
{ asd  }
}};
functioon ( asd dsfg()){                    LOOOK HERE FUNCTION PROBLEM WITH { THIS BRACKETS}

}
asd }}
as }
{}
@if ($asd asd ) 
@foreach ( $sasd as $value) 
	<li>Id: {{ $user['id'] }},Name: {{ $user['name'] }}</li>
@endforeach  ($)'asd asd{  asdasd
@endif(asd )
Explore results with the Tools below. Replace & List output custom results. Details lists capture groups. Explain describes your expression in plain English.
@if 
@php
   if($_POST["submit"]){
        $name = $_POST["name"];
        $email = $_POST["email"];

        $missingName = "<p><strong>Please eneter your name.</strong></p>";
        $invalidEmail = "<p><strong>Invalid Email.</strong></p>";


        if($name){
            $name = filter_var($name, FILTER_SANITIZE_STRING);
        }else{

            $errors .= $missingName;
        }


          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
          $email = filter_var($email, FILTER_VALIDATE_EMAIL);
         if(filter_var($email, FILTER_VALIDATE_EMAIL)){

          }else{
              $errors .= $invalidEmail;
          }
        if($errors){
            $resultMessage = '<div  class="alert alert-danger">' . $errors .'</div>';
        }else{

            $to = "leads@relevant.systems";
            $subject = "DijiJock update request form.";
            $message = "<html>
                         <body>
                         <h2 style='color:black'>DijiJock update request form.</h2>
                <p style='color:green'>Name: $name</p>
                <p style='color:green'>Email: $email</p>
                <p style='color:black'>$name has requested DijiJock updates, please forward all updates to $email.</p>
                         </body>
                       </html>";
            $headers = "Content-type: text/html";

sdf            
            if(mail($to, $subject, $message, $headers)){
                $resultMessage = '<div  class="alert alert-success">Thank you for the meesage!</div>';

            }else{
                $resultMessage = '<div  class="alert alert-warning">Email not sent! Please try again later.</div>';
            }
        }
        echo $resultMessage;
    }             
@endphp

*/