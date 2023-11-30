<?php

$con=mysqli_connect("localhost","root","","codewithsadiq")or die("db connection fail");
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];

$query="INSERT INTO users(name,email,contact)value('$name','$email','$contact')";

$run = mysqli_query($con,$query);
if($run){
    echo "$name record inserted successfully <br>";
    echo "<a href='index.php'>go back</a>";
}
else{
    echo "something went wrong";
}
?> 



