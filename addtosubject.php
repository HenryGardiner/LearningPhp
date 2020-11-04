<?php 
header('Location:pupildoessubject.php');
try{
	include_once("connection.php");
	array_map("htmlspecialchars", $_POST);
	$stmt = $conn->prepare("INSERT INTO TblPupilStudies (SubjectID,UserID,Classposition,Classgrade,Exammark,Comment)VALUES (null,null,null,null,null)");
	$stmt->bindParam(':subjectid', $_POST['subjectid']);
	$stmt->bindParam(':userid', $_POST['userid']);
	$stmt->execute();
	$conn=null;
	echo $_POST["subjectid"]."<br>";
	echo $_POST["userid"]."<br>";
	}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;
?>