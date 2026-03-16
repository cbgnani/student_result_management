<?php
include "db.php";

$sql="SELECT * FROM results";
$result=$conn->query($sql);
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Student Results</h2>

<table border="1" align="center">

<tr>
<th>Roll No</th>
<th>Name</th>
<th>Subject1</th>
<th>Subject2</th>
<th>Subject3</th>
<th>Total</th>
<th>Percentage</th>
</tr>

<?php
while($row=$result->fetch_assoc()){
?>

<tr>
<td><?php echo $row['rollno']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['subject1']; ?></td>
<td><?php echo $row['subject2']; ?></td>
<td><?php echo $row['subject3']; ?></td>
<td><?php echo $row['total']; ?></td>
<td><?php echo $row['percentage']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>