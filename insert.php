<?php  

$servername="localhost";
$database="task";
$username="root";
$password="";
$connection=mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['submit']) ){
    if(!empty($_POST['name']) &&!empty($_POST['pass']) &&!empty($_POST['lang']))
    {
        $username=$_POST['name'];
        $pass=$_POST['pass'];
        $lang=$_POST['lang'];

        $q= " insert into user values('$username','$pass','$lang')";
        $run=mysqli_query($connection,$q) or die(' query failed ');
        if($run)
        {
            echo 'Data Inserted!';
        }
        else{
            echo 'Data Not Inserted';
        }


    }
    else
    {
        echo 'all fields required';

     }
}

?>