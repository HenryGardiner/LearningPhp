<form action="addtosubject.php" method = "post">
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
	$stmt = $conn->prepare("SELECT * FROM TblSubjects");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo('<option value='.$row["SubjectID"].'>'.$row["Subjectname"].' - '.$row["Teacher"].'</option>');
	}
	?>
	</select>
	<br>
	<input onclick="alertfunction()" type="submit" value="Add to Subject">
	<script>
	function alertfunction(){
		alert("Updated")
	}
	</script>
</form>
