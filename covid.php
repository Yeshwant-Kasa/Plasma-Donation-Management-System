
<!DOCTYPE html>

<html>
<head>
<style>
.topheader{
display:inline-block;
position:fixed;
background-color:#181818;
height:50px;
top: 0;
left:0;
right:0;
padding-top:2px;
padding-right:80px;
padding-bottom:12px;
z-index: 9999;
}
.submitbutton{
position:relative;
top:300pt;
border:1px solid white;
border-radius:5px;
width:240px;
height:50px;
background-color:#0066FF;
color:white;
font-size:20px;
opacity: 0.9;
}
.submitbutton:hover
{
border:3px solid black;
border-radius:5px;
opacity:1;
}
.topmargin{
margin-top:60px;
}
.projectname{
display:inline-block;
color:#A9A9A9;
text-align:left;
padding-right:150px;
padding-left:150px;
color:white;
font-size:25px;
}
.php
{
position:absolute;
top:80pt;
border:0 solid white;
border-radius:4px;
text-align:left;
background-color:#F0F0F0;
width:1000px;
padding-top:10px;
padding-bottom:10px;
padding-left:10px;
font-size:20px;

}
.text
{	height:50pt;
	position:absolute;
	top:80pt;
	font-size:25px;
}
</style>
</head>
<body>
<div class="topheader">
<ul>
<li class="projectname">PLASMA DONATION FOR COVID-19</li>
</ul>
</div>
<div class="text">
<h3>You are not eligible to give your plasma due to the following reasons:</h3>
<div>
<div class="php">
<?php

$e=array();
$a=0;
$b=0;

$covid= $_POST['covid-19'];
$cage= $_POST['age'];
$cweight= $_POST['weight'];
$conform=$_POST['c1'];
$symptoms= $_POST['c2'];
$cdays= $_POST['c3'];
$negitive= $_POST['c4'];
if($covid!="Yes")
{
$e[$a]="You are not eligible to donate plasma because you are not get effected by covid<br>";
$a=$a+1;
}

if($cage!="More than 18")
{
	$e[$a]="Your age is not between 18 and 55<br>";
$a=$a+1;
}
if($cweight!="More than 110lbs")
{
	$e[$a]="Your weight is less than 50<br>";
$a=$a+1;
}
if($conform!="Yes")
{
	$e[$a]="Your covid-19 diagnosis is not confirmed by lab test<br>";
	$a=$a+1;
}
if($symptoms!="No")
{
	$e[$a]="You have covid symptoms<br>";
$a=$a+1;
}
if($cdays!="Yes")
{
	$e[$a]="You should stay atleast for 14 after you got cured by covid-19<br>";
$a=$a+1;
}
if($negitive!="Yes")
{
	$e[$a]="You current have covid-19<br>";
$a=$a+1;
}
if($a==0)
{
	header("Location:becomeadonor.html");
}
if($a!=0)
{

	
	
	echo "<br>";
	echo "<br>";
	
	foreach($e as $value){
    echo $value . "<br>";}
    echo "<br>";






	
}

?>
</div>
<br>
<div class="button">
<form action="home.html">
<button type="submit" name="submit_form" class="submitbutton" >RETURN TO HOME</button>
</form>
</div>



</body>
</html>



