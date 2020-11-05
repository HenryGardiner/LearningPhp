<?php 
header('Location:pupildoessubject.php');
include_once("connection.php");
try{
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO TblPupilStudies (SubjectID,UserID)VALUES (:userid,:subjectid)");
	$stmt->bindParam(':subjectid', $_POST['subjectid']);
	$stmt->bindParam(':userid', $_POST['userid']);
	$stmt->execute();
	}
catch(PDOException $e)
{
	echo "error".$e->getMessage();
}
$conn=null;
?>