<?php
/* @var $this yii\web\View */
?>
<h1> Registered Students</h1>

<p>
<table border=1>
	<tr>
	<th>Student Number</th>
	<th>Last Name</th>
	<th>First Name</th>
	<th>M. I.</th>
	<th>Email Address</th>
	<th>Enrolled?</th>
	</tr>
	<?php
	foreach($student as $student){
		echo "<tr><td>".$student->student_num."</td>";
		echo "<td>".$student->lastname."</td>";
		echo "<td>".$student->firstname."</td>";
		echo "<td>".$student->initial."</td>";
		echo "<td><a href='mailto:".$student->email."'>".$student->email."</td>";
		if($student->enrolled == 1){
			echo "<td>Yes</td></tr>";
		}else{
			echo "<td>No</td></tr>";
		}
	}
	?>
</table>
</p>
