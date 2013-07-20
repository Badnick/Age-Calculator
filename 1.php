<?php
date_default_timezone_set('Europe/London');
if(isset($_POST['Submit']))
{
$d1=$_POST['dob1'];
$d2=$_POST['dob2'];
if($d1 == "" ) {
//unset($exp);
$error= "You did not enter the date.";

}
elseif($d2 == "" ) {
$error= "You did not enter the date.";
//unset($exp);
}
else
{
 $a=explode("/",$d1);
$month=$a[0];
$date=$a[1];
$year=$a[2];
$date1="$year/$month/$date";
//echo"$date1";
 
 $b=explode("/",$d2);
$month1=$b[0];
$dat1=$b[1];
$year1=$b[2];   
$date2="$year1/$month1/$dat1";
//echo"$date2";
if(isset($_POST['dob2']) && isset($_POST['dob1']) )
$date1 = new DateTime("$date1");
$date2 = new DateTime("$date2");
$interval = $date1->diff($date2);
   

	//$interval="$years $months $days";


	 
}
}
?>


<html>
<H1>AGE CALCULATION USING PHP</H1>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	
	<script type="text/javascript"> 
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
	<script>
    $(function() {
        $( "#datepicker1" ).datepicker();
    });
    </script>
	<script type="text/javascript"> 
$(document).ready(function(){
 $("#1").hide();
 $("#datepicker").change(function()
 {
  var hasError = false;
  if($("#datepicker").val().length ==0)
  {
       hasError = true;
	    $("#1").hide();
        document.getElementById("date").innerHTML=" please fill the date".fontcolor("red");
  
        }
		else
		{
		document.getElementById("date").innerHTML=" ";
		 //$("#1").show();
		}
	});
	
	$("#datepicker1").change(function()
 {
  var hasError1 = false;
  if($("#datepicker1").val().length ==0)
  {
       hasError1 = true;
	    $("#1").hide();
        document.getElementById("date1").innerHTML=" please fill the date".fontcolor("red");
  
        }
		else
		{
		document.getElementById("date1").innerHTML=" ";
		 $("#1").show();
		}
		var hasError = false;
  if($("#datepicker").val().length ==0)
  {
       hasError = true;
	    $("#1").hide();
        document.getElementById("date").innerHTML=" please fill the date".fontcolor("red");
  
        }
		else
		{
		document.getElementById("date").innerHTML=" ";
		 //$("#1").show();
		}
		


	});
		});
	    </script>
</head>
<body>
<form action="" method="post">
<font color="green">Your Date Of Birth Date:</font><input type="text" Placeholder="Select date" name="dob1" id="datepicker" value="<?php if(isset($d1)){echo $d1;} ?>">
<span id="date"></span>
<font color="green">Current Date:</font><input type="text" name="dob2" Placeholder="Select date"id="datepicker1" value="<?php if(isset($d2)){echo $d2;} ?>">
<span id="date1"></span>
<input type="submit"  name= "Submit" id="1" value="submit">
<br><br>
<span><font color="Red">
<?php 
if(isset($_POST['Submit']))

	 if(($interval->d==0)&&($interval->d==0)&& ($interval->d==0))
	 {echo"You have just born";}
 // echo"Your Age is:$exp";
 else{
echo "Your Age is" . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
	 }
	 ?></font></span>
</body>
</html>
