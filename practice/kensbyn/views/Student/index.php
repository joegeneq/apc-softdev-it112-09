<?php
/* @var $this yii\web\View */
?>
<h1> Registered Students</h1>

<p>
<table>
    <?php
	foreach($student as $student){
		echo "<tr><td>".$student->student_num."</td>";
		echo "<td>".$student->lastname."</td>";
		echo "<td>".$student->firstname."</td>";
		echo "<td>".$student->initial."</td>";
		echo "<td>".$student->email."</td></tr>";
	}
	?>
</table>
</p>
