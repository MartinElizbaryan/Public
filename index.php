<form method="post" action="index.php" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surname" placeholder="surname">
    <input type="number" name="age" placeholder="Age">
    <input type="file" name="file">
    <input type="submit" value="save">
</form>



<?php
$name=$_REQUEST['name'];
$surname=$_REQUEST['surname'];
$age=$_REQUEST['age'];

mkdir(__DIR__ . 'index.php/' .$name.'-'.$surname, 0777);
chmod(__DIR__ . 'index.php/' .$name.'-'.$surname, 0777);

$myfile = fopen(__DIR__ . '/' .$name.".txt", "w") ;
chmod(__DIR__ . '/' .$name.".txt", 0777);

fwrite($myfile, 'My name is '.$name.' '.$surname." . I'm ".$age." years old");
//fwrite($myfile,include 'test.php');

fclose($myfile);

$dir= __DIR__ . 'index.php/' .$name.'-'.$surname ;

move_uploaded_file($_FILES['file']['tmp_name'],$dir.'/'.$_FILES['file']['name']);
chmod($dir.'/'.$_FILES['file']['name'], 0777);



echo '<pre>';
print_r($_SERVER);
echo '</pre>';


/*function save ( $name, $surname, array $file)
{

    mkdir(__DIR__.'/'.$name.'-'.$surname, 0777);
    chmod(__DIR__.'/'.$name.'-'.$surname, 0777);

    $myFile = fopen(__DIR__.'/'.$name.'-'.$surname.'/'.$name.".txt", "w") ;
    chmod(__DIR__.'/'.$name.'-'.$surname.'/'.$name.".txt", 0777);

    fwrite($myFile, 'name '.$name.'    -------   '.'surname  '.$surname);

    fclose($myFile);

    $dir= __DIR__.'/'.$name.'-'.$surname ;

    move_uploaded_file($_FILES['tmp_name'],$dir.'/'.$_FILES['name']);
    chmod($dir.'/'.$_FILES['name'], 0777);


}

save('frfr','rfrf', $_FILES['file']);
*/

?>