<?php
include "db.php";

if(isset($_POST['submit'])){

$roll=$_POST['roll'];
$name=$_POST['name'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];

$total=$s1+$s2+$s3;
$percentage=$total/3;

$sql="INSERT INTO results(rollno,name,subject1,subject2,subject3,total,percentage)
VALUES('$roll','$name','$s1','$s2','$s3','$total','$percentage')";

$conn->query($sql);
echo "Result Added Successfully";
}
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Add Student Result</h2>

<form method="post">

<input type="text" name="roll" placeholder="Roll Number" required>

<input type="text" name="name" placeholder="Student Name" required>

<input type="number" name="s1" placeholder="Subject 1 Marks" required>

<input type="number" name="s2" placeholder="Subject 2 Marks" required>

<input type="number" name="s3" placeholder="Subject 3 Marks" required>

<input type="submit" name="submit" value="Add Result">

</form>

</body>
</html>