<html>
<body>

English=<?php echo $_GET['English'];?>
<br>
Maths=<?php echo $_GET['Maths'];?>
<br>

Science=<?php echo $_GET['Science'];?>
<br>

History=<?php echo $_GET['History'];?>
<br>

Hindi=<?php echo $_GET['Hindi'];?>
<br>
 <br>

<?php 


$English=$_GET['English'];
$Maths=$_GET['Maths'];
$Science=$_GET['Science'];
$History=$_GET['History'];
$Hindi=$_GET['Hindi'];

$Total= $English+$Maths+$Science+$History+$Hindi;
echo "Your Total marks =".$Total;
?>
<br>
<br>
<?php
$percentage=($Total/500)*100;
echo "your percentage=".$percentage;
?>
<?php
if($percentage>=75)
{
	echo "<body bgcolor='green'><H1>You are passed with distiction";
}
else 
{
	if($percentage>=50)
	{
	echo "<body bgcolor ='yellow'><H1>You are passed";
	}
	else
	{
		echo "<body bgcolor ='red'><H1>Better luck next time";
	}
}
	?>
</body>
</html>