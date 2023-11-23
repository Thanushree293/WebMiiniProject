<html>
<body>
<?php
$con = mysqli_connect("localhost","root","thanu@123")or die(mysql_error());
mysqli_select_db($con,"student_sign-in")or die(mysql_error());
$sql = "insert into studentSign(Name,Age,Branch,Phone,Mail,Linked_In,Password,Confirm_Password) values ('$_POST[Name]','$_POST[Age]','$_POST[Branch]','$_POST[Phone]','$_POST[Mail]','$_POST[Linked_In]','$_POST[Password]','$_POST[Confirm_Password]')";
if(!mysqli_query($con,$sql)){
die("error:".mysqli_error());
}
echo "1 record add";
mysqli_close($con);
?>
<form action="sign_student_result.php" method="post">
Name:<input type="text" name="Name">
<input type="submit">
</form>
</body>
</html>