
<?php 
 /* 
    - to print somthing use:
        echo or print 
    
 */
# Include, Require, Include_ones, Require_ones
    include("info.txt"); #  بتستدعي المحتوي المكتوب في ملف ما في الملف الحالي  ولو الملف ده مش موجود او حصل فيه اي خطأ هيكمل عمل الاسكربت 
    echo '<br>';

    require("info.txt"); # زي ال انكلود بالظبط ولكن لو حصل اي خطأ في الملف مش هيكمل عمل الاسكربت 
    echo '<br>';
    # require_once() , include_once() نفس فكره الانكلود والريكواير العاديين ولكن بتستدعي الملف مره واحده

# variables 
    $myName = 'Ahmed';
    $myID = 1;
    $Is_Student = true;
    $grade = 'A';
# Variable Variable
    $v1 = "name";
    $$v1 = "ahmed"; // meaning that name = ahmed
    $$$v1 = "Ayman";// meaning that ahmed = ayman

    echo $v1.'<br>'; #name
    echo $$v1.'<br>';#ahmed
    echo $$$v1.'<br>';#ayman

    # the same output
    echo $v1.'<br>'; #name
    echo $name.'<br>';#ahmed
    echo $ahmed.'<br>';#ayman


#Array
    $names = ['Ahmed',"Ali","Amin",'Hassan']; 
    $info = ["ID" => 1, "Name" => "Ahmed", "Age"=>22 , "Salary"=>5000]; # key => value
    $grades = array([20,30,40,50]);

    // print Array using print_r() 
    echo '<pre>';
     print_r($grades);
    echo'</pre>';

# Constants
    define("DB_NAME",'Hospital');
    define("PI",3.14);
# Arithmetic operators
    /*  > , < , <= ,>= != , == */
    $a = 5;
    $b = 3;

    echo $a < $b.'<br>'; 
    echo $a > $b.'<br>'; 
    echo $a == $b.'<br>'; 

# If statement and Comparison
    
    if($a > $b){
        echo "$a is greater than $b".'<br>';
    }
    else if($b > $a)
    {
            echo "$b is greater than $a".'<br>';
    }
    else 
    {
        echo "$b is equal to $a".'<br>';

    }
 

# ternary operator sysntax
    echo 5>10?"good":"bad"."<br>";

# php_uname() Returns information about the operating system PHP is running on
    echo php_uname()."<br>";

# Here Docs -> parse the sentences
    $myname = "ahmed";
    echo <<< "Here"
    Hello $myname  special chars $$$ '''' "" "" \\\\\\\\
    Here;
    echo '<br>';

# Now Docs -> Don't parse the sentences
    echo <<< 'Now'
    Hello $myname  special chars $$$ '''' "" "" \\\\\\\\
    Now;
    echo '<br>';


# For Each Loop ->   foreach(array as value)
    /* $names = ['Ahmed',"Ali","Amin",'Hassan']; */
    foreach($names as $name){
        echo $name.'<br>';
    }

    $arr=["EG"=>1,"US"=>1,"EGY"=>3,"MOR"=>4,"KSA"=>5,"SYR"=>6,];  
    foreach($arr as $key=>$val ){ // foreach(array as key=>value)
        echo $key." ".$val.'<br>';
    }

/* Functions follow concept DRY -> Don't Repeat Yourself. means write one code, use it many times */
#default values of function
    function Get_Data($name='private',$country='private',$age='private',$address='private'){
    $lineone="hi $name you live in $country ,your age is $age and your address is $address ";
    return $lineone.'<br>';
    }

    #Pass a Specific value -> argument:value
        echo Get_Data(age:'22');

    # calculate the sum of unknown parameters numbers   

    function calc1(){
    echo 'number of arguments is '.func_num_args().'<br>';
    $result=0;
    // func_get_args() => return array of arguments
    foreach(func_get_args() as $items):
        $result += $items;
    endforeach;
    return $result;
    }
    echo '<br>';
    echo 'the total from calc1 is '.calc1(10,20,60,84,800,74,85,62,25,25,23,322,55,215,588).'<br>';


# spread syntax 
    #variadic functions    ... -> splat operator
    function calc2(...$nums){

        $result=0;
        foreach( $nums as $num):
            $result += $num;
        endforeach;
        return $result;
    }
    echo '<br>';
    echo 'the total from calc2 is '.calc2(10,20,60,84,800,74,85,62,25,25,23,322,55,215,588);
    echo '<br>';

    # unpacking arguments of array
    $group_of_skills=['HTML','CSS','JS','PHP'];

    function data($name,$age,...$skills)
    {
        echo "name is $name and age is $age skills are  ";
        foreach ($skills as $skill):
            echo  $skill.'  ';
        endforeach;

    }


    if(function_exists("data")){
        echo 'function exists<br>';
        data('ahmed',20,...$group_of_skills);
    }else{
        echo'function dont exist';
    }
    echo'<br>';



#Anonymous Function -> function without name
    $msg='hi';
                             #i used use() because $msg is out of the function scope
    $say_hi=function($someone) use($msg) {

        return "$msg $someone";
    };

    echo $say_hi('ahmed');

#array map(function,Array) -> apply the function on each element in the array

    $nums=[10,20,30,40,50,60,70,80,90];
    function add_five($item){
        return $item + 5;
    }   

    $nums_after_adding_five= array_map("add_five",$nums);

    echo '<pre>';
    print_r($nums_after_adding_five);
    echo '</pre>';

#use Anonymous func with array_map()
    $nums_after_adding_ten=array_map(function($item){ return $item + 10;},$nums);

    echo '<pre>';
    print_r($nums_after_adding_ten);
    echo '</pre>';


# Arrow Function
                /* convert Anonymous function to Arrow func : 
                    - replace function with fn
                    - no need {}
                    - replace the return with =>
                */

                $nums_after_adding_6=array_map(fn($item)=>$item + 6 ,$nums);
                echo '<pre>';
                print_r($nums_after_adding_6);
                echo '</pre>';

# String Functions
                /*
                    * strlen(string) => return the length of string
                    * lcfirst(string[required]) => (lower case first) convert first letter in the string into small character
                    * ucfirst(string[required]) => (upper case first) convert first letter in the string into capital character
                    *strtolower(string[required])=> convert all string into small character
                    *strtoupper(string[required])=> convert all string into capital character
                    *ucwords(string[required])=> (upper case words)convert every first character of word in the string into capital letter
                    * str_repeat(string,count) => repeat the string count times 
                    * implode(separator[optional] , array) => join() is Alias -> convert array to a single string
                    * explode(separator[required] , string) => convert single string to array of string
                    * strrev(string) => reverse the text
                    * trim(string) => remove the space from string and return the string only
                    * nl2br(string)
                    * strpos(string[required],value[required],start position[optional]) => return first position of string  case sensitive
                    * strrpos(string[required],value[required],start position[optional]) => (string right position) return last position of string  case sensitive
                    * stripos(string[required],value[required],start position[optional]) => return first position of string  case insensitive
                    * strripos(string[required],value[required],start position[optional]) => (string right position) return last position of string  case insensitive
                    * substr_count(string[required],value[required],start position[optional]) => return the count of value that appear in the string;

                                       -------- important functions --------

                    * parse_str(string[required],array) => used in form  get method when sending data
                         parse_str('name=ahmed&email=O@gmail.com&os=windows',$query); 
                            these data 'name=ahmed&email=O@gmail.com&os=windows' stored in $query
                    * quotemeta(string[required]) => escape illegale characters
                    * ord(char) => return ASCII code
                    * chr(bytevalue)=> return char
                    * similar_text(string_one[required], string_two[required], percentage[optional]) => num of similar char


                                           ***** search function ***** 
                    * strstr(string[required],search string[required],before_search[optional]=false) 
                            -> alias strchr(string[required],search string[required],before_search[optional]=false) case sensitive
                                            
                    * stristr(string[required],search string[required],before_search[optional]=false) case insensitive

                    */
                    

            $str='ahmed ayman abdelnaby';
            echo ucwords($str).'<br>'; // Ahmed Ayman Abdelnaby
            echo str_repeat($str,5).'<br>';
            echo '<pre>';
            print_r(explode(" ",$str));
            echo '</pre>';
            var_dump(strpos('Hello World Here','W')); // index 6
            var_dump(strrpos('Hello World Here','H')); // index 12
            var_dump(substr_count('Hello World Here','He')); // 2
            echo '<br>';
            parse_str('name=ahmed&email=O@gmail.com&os=windows',$query); 
            echo '<pre>';
            print_r($query);
            echo '</pre>';
            echo quotemeta('hello () {} * + - ');

            echo '<br>';
            echo -200 <=> 100;
            echo '<br>';
            echo ord('a');
            echo '<br>';
            echo chr(97);
            echo '<br>';
            echo similar_text("ahmed",'ahmed',$percent);
            echo '<br>';
            echo $percent;
            echo '<br>';
            echo strstr("hello world web","e").'<br>'; // ello world web
            echo stristr("hello world web","W").'<br>'; // world web
            echo strchr("hello world web","w").'<br>'; // world web
            echo strchr("hello world web","r").'<br>'; // rld web
            echo '<br>';
            echo number_format(10000.23587,3);
            echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="name">Name </label>
        <input type="text" name="name" id=""><br>
        <label for="pass">Password </label>
        <input type="password" name="pass" id=""><br>
        <select name="lang" id="">
            <option value="arabic">Arabic</option>
            <option value="english">English</option>
            <option value="french">French</option>
        </select> <br>
        <input type="submit" name="submit" value="Go">
    </form>
</body>
</html>