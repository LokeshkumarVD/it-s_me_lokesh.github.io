<html>
<head>
<title>My Daily Routine</title>
</head>
<body bgcolor="YELLOW">
<?php
$Days=getdate();
switch ($Days['weekday'])
{
case 'Sunday':
echo"<h2>Routine on sunday</h2>";
echo"<h3>An morning with my Favourite Workout</h3>";
echo"<h3>Enjoying the day with Friends<h3>";
echo"<h3>Meal plan and preparation for the weak Ahead</h3>";
echo"<h3>Tempted to sleep as early as possible</h3>";
break;
case 'Monday':
echo"<h2>Routine on MOnday</h2>";
echo"<h3>Early morning Exercise</h3>";
echo"<h3>Getting Ready to the college</h3>";
echo"<h3>Attending the class(Lectures)</h3>";
echo"<h3>Back to home</h3>";
echo"<h3>Recalling the day's event</h3>";
break;
case 'Tuesday':
echo"<h2>Routine on Tuesday</h2>";
echo"<h3>Jocking</h3>";
echo"<h3>Attending the Regular classes</h3>";
echo"<h3>Back home</h3>";
echo"<h3>Working with the Assignments</h3>";
break;
case 'Wednesday':
echo"<h2>Routine on Wednesday</h2>";
echo"<h3>Workout</h3>";
echo"<h3>Attending the Regular classes</h3>";
echo"<h3>Playing football with friends</h3>";
echo"<h3>Back to home</h3>";
echo"<h3>Learning new technology</h3>";
break;
case 'Thursday':
echo"<h2>Routine on Thursday</h2>"; 
echo"<h3>Wakes up early in the morning</h3>";
echo"<h3>An internship Program</h3>";
echo"<h3>Back to home<h3>";
break;
case 'Friday':
echo"<h2>Routine on Friday<h2>";
echo"<h3>Casual visit to Temple</h2>";
echo"<h3>Visit to Granny House</h3>";
echo"<h3>Playing with siblings<?h3>";
echo"<h3>Back to bed</h3>";
break;
case 'Saturday':
echo"<h2>Routine on Saturday</h2>";
echo"<h3>Visit to Farm land</h3>";
echo"<h3>Breakfast time with Siblings</h3>";
echo"<h3>Checks for mails</h3>";
echo"<h3>Back to home</h3>";
break;
default:
echo"<h2>Enjoy the Weekend!</h2>";
break;
}
?>
</body>
</html>