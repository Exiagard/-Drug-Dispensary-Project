<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Prescriptions</h2>
	<a href = "create.php">Create</a>
	<table class = "table">
		<thread>
			<tr>
				<th>PrescriptionID</th>
				<th>TradeID</th>
				<th>DoctorID</th>
				<th>PatientID</th>
				<th>Prescription</th>
			</tr>
		</thread>
		<tbody>
			<?php
			include('../connect.php');
			

			$sql = "SELECT * FROM prescriptions";
			$result = $conn->query($sql);

			if(!$result){
				die("Invalid query: " . $conn->error);
			}

			while($row = $result ->fetch_assoc()){
				echo "
				<tr>
					<td>$row[PrescriptionID]</td>
					<td>$row[TradeID]</td>
					<td>$row[DoctorID]</td>
					<td>$row[PatientID]</td>
					<td>$row[Prescription]</td>
					<td>
						<a href='edit.php?PrescriptionID=$row[PrescriptionID]'>Edit</a>
						<a href='delete.php?PrescriptionID=$row[PrescriptionID]'>Delete</a>
					</td>
				</tr>
				";
			}
			?>
			
		</tbody>
	</table>
</body>
</html>