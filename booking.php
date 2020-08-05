<?php
$id=$_POST['id'];
$name=$_POST["name"];
$email=$_POST["email"];                                                
$sourceplace=$_POST["place"];
$destination=$_POST["destination"];
$no_of_days=$_POST["days"];
$type_of_travels=$_POST["vechical"];
$date=$_POST["pdate"];


//create connection
$conn= mysqli_connect("localhost:3306","root","N@veen","itprofound");



//check  connection
if(mysqli_connect_errno())
{
echo "failed to connect to MySQL:" .mysqli_connect_error();
}

$sql = "insert into booking values('".$id."','".$name."','".$email."','".$sourceplace."','".$destination."','".$no_of_days."','".$type_of_travels."','".$date."');";


if(mysqli_query($conn,$sql))
{
//echo " your booking is successfully ";
    
header("location:bill.php");
}
else
{
echo "Error:".$sql."<br>".mysqli_error($conn);
//header("location:register.html");
}
?>


