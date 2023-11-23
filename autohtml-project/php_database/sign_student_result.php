<html>
<body>
<?php
$con = mysqli_connect("localhost","root","thanu@123")or die(mysql_error());
mysqli_select_db($con,"student_sign-in")or die(mysql_error());
$sql = "select * from studentsign where Name = '$_POST[Name]'";
if($res= mysqli_query($con,$sql)){
echo "successfully connected to db";
}
else{
die("error:".mysqli_error());
}


echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Branch</th>
<th>Phone</th>
<th>Mail</th>
<th>Linked_In</th>
<th>Password</th>
<th>Confirm_Password</th>

</tr>";

while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td >".$row["Name"]."</td>";
echo "<td>".$row["Age"]."</td>";
echo "<td>".$row["Branch"]."</td>";
echo "<td>".$row["Phone"]."</td>";
echo "<td>".$row["Mail"]."</td>";
echo "<td>".$row["Linked_In"]."</td>";
echo "<td>".$row["Password"]."</td>";
echo "<td>".$row["Confirm_Password"]."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
