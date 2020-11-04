<!DOCTYPE html>
<html>
<body>
<select name = "student">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUser WHERE Role = 0 ORDER BY Surname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
}
?>
</select>
<br>
<select name = "subject">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblSubjects ORDER BY Subjectname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["SubjectId"].'>'.$row["Subjectname"].' - '.$row["Teacher"].'</option>');
}
?>
</select>

<form action="addtosubject.php" method = "post">
  <input type="submit" value="Add to Subject">
</form>
</body>
</html>