welcome to French support
<?php

// echo ' hello world';

// $arr1=[1=>"A",2=>"B"];
// $arr2=[3=>"C",4=>"D"];
// echo '<pre>';
// print_r($arr1 + $arr2);
// echo'</pre>';

// read the text on file as array of string
// $f=file("info.txt");

// echo '<pre>';
// print_r($f);
// echo'</pre>';
// include("info.txt");
echo '<br>';
if($_SERVER['REQUEST_METHOD']==='POST')
    if($_POST['lang']=='ar')
   {
    echo 'username is:'. $_POST['name'];
    echo '<br>';
    echo 'username is:'.$_POST['pass'];
    echo '<br>';
    header("location:ar.php");
    exit();
   }
    else if($_POST['lang']=='en')
    {
     echo 'username is:'. $_POST['name'];
    echo '<br>';
    echo 'username is:'.$_POST['pass'];
    echo '<br>';
    header("location:en.php");
    exit();
    }
    else if($_POST['lang']=='fr')
    {
    echo 'username is:'. $_POST['name'];
    echo '<br>';
    echo 'username is:'.$_POST['pass'];
    echo '<br>';
    header("location:fr.php");
    exit();
    }
 



?>