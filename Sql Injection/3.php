<html>
<body>
<?php
error_reporting(0);
$marks=array(40,60,90,64,82);
$total=0;
$avg=0;
$grade=" ";
foreach($marks as $value)
{
$total+=$value;
}
$avg=$total/count($marks);
if($avg<=100){
if($avg>=90){
$grade=O;
}
}
if($avg>=70){
if($avg<=89){
$grade=A;
}
}
if($avg>=60){
if($avg<=69){
$grade=B;
}
}
if($avg>=50){
if($avg<=59){
$grade=C;
}
}
else
$grade=F;
echo "The average marks of student is:".$avg. " and grade:".$grade;
?>
</body>
</html>
