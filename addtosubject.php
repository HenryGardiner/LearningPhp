<?php 
header('Location: pupildoessubject.php');
try{
	include_once("connection.php");
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO TblPupilStudies (SubjectID,Subjectname,Teacher)VALUES (null,:subjectname,:teacher)");
	$stmt->bindParam(':subjectname', $_POST['subjectname']);
	$stmt->bindParam(':teacher', $_POST['teacher']);
	$stmt->execute();
	$conn=null;
	echo $_POST["subjectname"]."<br>";
	echo $_POST["teacher"]."<br>";
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;
?>