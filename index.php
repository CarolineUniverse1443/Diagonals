<?php
$x1 = 2;
$x2 = 6;
$y1 = 4;
$y2 = 2;

$w1 = 1;//x
$w2 = 7;
$z1 = 1;//y
$z2 = 6;

$v2x = min($x1,$x2)+(max($x1,$x2)-min($x1,$x2));
if($x1<$x2)
{
	$v2y = $y1;
}
else {
	$v2y = $y2;
}

$v3x = $v2x;
$d1Height = max($y1,$y2)-min($y1,$y2);
if(($x1<$x2 && $y1>$y2) || ($x1>$x2 && $y1<$y2))// main diagonal - \, we're up, moving down
{
	$v3y = $v2y-$d1Height;
}
else if(($x1<$x2 && $y1<$y2) || ($x1>$x2 && $y1>$y2))//side diagonal - /, we're down, moving up
{
	$v3y = $v2y+$d1Height;
}

switch(true)
{
	case(($x1>=min($w1,$w2) && $x1<=max($w1,$w2)) && ($y1>=min($z1,$z2) && $y1<=max($z1,$z2))):
	case(($x2>=min($w1,$w2) && $x2<=max($w1,$w2)) && ($y2>=min($z1,$z2) && $y2<=max($z1,$z2))):
	case(($v2x>=min($w1,$w2) && $v2x<=max($w1,$w2)) && ($v2y>=min($z1,$z2) && $v2y<=max($z1,$z2))):
	case(($v3x>=min($w1,$w2) && $v3x<=max($w1,$w2)) && ($v3y>=min($z1,$z2) && $v3y<=max($z1,$z2))):
	{
		echo "Rectangles intersect <br/>";
		break;
	}
	default:
	{
		echo "Rectangles don't intersect <br/>";
	}
}
//end of main program

//checking conditions, finding rectangles coordinates
echo "A:";
if(($x1>=min($w1,$w2) && $x1<=max($w1,$w2)) && ($y1>=min($z1,$z2) && $y1<=max($z1,$z2)))
{
	echo "true <br/>";
}
else
{
	echo "false <br/>";
}
echo "B:";
if(($v2x>=min($w1,$w2) && $v2x<=max($w1,$w2)) && ($v2y>=min($z1,$z2) && $v2y<=max($z1,$z2)))
{
	echo "true <br/>";
}
else
{
	echo "false <br/>";
}
echo "C:";
if(($x2>=min($w1,$w2) && $x2<=max($w1,$w2)) && ($y2>=min($z1,$z2) && $y2<=max($z1,$z2)))
{
	echo "true <br/>";
}
else
{
	echo "false <br/>";
}
echo "D:";
if(($v3x>=min($w1,$w2) && $v3x<=max($w1,$w2)) && ($v3y>=min($z1,$z2) && $v3y<=max($z1,$z2)))
{
	echo "true <br/>";
}
else
{
	echo "false <br/>";
}

//===================================
echo "<br/>";

$d1Width = max($x1,$x2)-min($x1,$x2);
echo "Rect 1 width:".$d1Width."<br/>";
$d1Height = max($y1,$y2)-min($y1,$y2);
echo "Rect 1 height:".$d1Height."<br/>";
echo "<br/>";
$d2Width = max($w1,$w2)-min($w1,$w2);
echo "Rect 2 width:".$d2Width."<br/>";
$d2Height = max($z1,$z2)-min($z1,$z2);
echo "Rect 2 height:".$d2Height."<br/>";
echo "<br/>";

//drawing rectangles

//rect 1
echo "Rect 1 coordinates: <br/>";
$d1v1x = $x1;
$d1v1y = $y1;
echo "A($d1v1x,$d1v1y) <br/>";

$d1v2x = min($x1,$x2)+$d1Width;
$d1v2y = 0;
if($x1<$x2)
{
	$d1v2y = $y1;
}
else {
	$d1v2y = $y2;
}
echo "B($d1v2x,$d1v2y) <br/>";

$d1v3x = $d1v2x;
$d1v3y = 0;
if(($x1<$x2 && $y1>$y2) || ($x1>$x2 && $y1<$y2))// main diagonal - \, мы наверху, движемся вниз
{
	$d1v3y = $d1v2y-$d1Height;
}
else if(($x1<$x2 && $y1<$y2) || ($x1>$x2 && $y1>$y2))//side diagonal - /, мы внизу, движемся вверх
{
	$d1v3y = $d1v2y+$d1Height;
}
echo "C($d1v3x,$d1v3y) <br/>";

$d1v4x = $d1v3x-$d1Width;
$d1v4y = $d1v3y;
echo "D($d1v4x,$d1v4y) <br/>";
echo "<br/>";
//========================================

echo "Rect 2 coordinates: <br/>";
$d2v1x = $w1;
$d2v1y = $z1;
echo "E($d2v1x,$d2v1y) <br/>";

$d2v2x = min($w1,$w2)+$d2Width;
$d2v2y = 0;
if($w1<$w2)
{
	$d2v2y = $z1;
}
else {
	$d2v2y = $z2;
}
echo "F($d2v2x,$d2v2y) <br/>";

$d2v3x = $d2v2x;
$d2v3y = 0;
if(($w1<$w2 && $z1>$z2) || ($w1>$w2 && $z1<$z2))
{
	$d2v3y = $d2v2y-$d2Height;
}
else if(($w1<$w2 && $z1<$z2) || ($w1>$w2 && $z1>$z2))
{
	$d2v3y = $d2v2y+$d2Height;
}
echo "G($d2v3x,$d2v3y) <br/>";

$d2v4x = $d2v3x-$d2Width;
$d2v4y = $d2v3y;
echo "H($d2v4x,$d2v4y) <br/>";
echo "<br/>";
?>