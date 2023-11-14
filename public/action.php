<?php
echo "Hi its me ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "WE HAVE POST HERE";
    print_r($_POST['fname']);
    var_dump($_POST['fname']);
    $name = $_POST['fname'];
    echo $name;
    
}else{
    echo 'else';
}
$name = $_POST['fname'];
?>