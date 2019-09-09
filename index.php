<html>
<head>
<title >Hello World</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php 

/*Exercise 1*/

$names =  'Alexander, Jessica, Christoph';
echo "<h1>Our names again $names</h1>";


/*Exercise 2*/

$d=date("D");
if ($d=="Mon" )
echo "Happy monday!";
else
echo "Have a nice day!" ;
echo '<br>';


/*Exercise 3*/


$d=date("D");
switch ($d)
{
case "Mon":
echo "Today is Monday";
break ;
case "Tue":
echo "Today is Tuesday";
break;
case "Wed":
echo "Today is Wednesday" ;
break;
case "Thu":
echo "Today is Thursday";
break;
case "Fri" :
echo "Today is Friday";
break;
case  "Sat":
echo "Today is Saturday";
break ;
case "Sun":
echo "Today is Sunday" ;
break;
default:
echo "Wonder which day is this ?" ;
}


// for( $i=0; $i<50; $i++ ){
// echo ($names.'<br>');
// } 


$i = 0;
do
{
echo ($names);
$i++;
} while( $i < 50 );


?>
</body>
</html>