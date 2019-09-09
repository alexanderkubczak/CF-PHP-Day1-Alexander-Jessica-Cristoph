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

// $d=date("D");
// if ($d=="Mon" )
// echo "Happy monday!";
// else
// echo "Have a nice day!" ;
// echo '<br>';


/*Exercise 3*/


// $d=date("D");
// switch ($d)
// {
// case "Mon":
// echo "Today is Monday";
// break ;
// case "Tue":
// echo "Today is Tuesday";
// break;
// case "Wed":
// echo "Today is Wednesday" ;
// break;
// case "Thu":
// echo "Today is Thursday";
// break;
// case "Fri" :
// echo "Today is Friday";
// break;
// case  "Sat":
// echo "Today is Saturday";
// break ;
// case "Sun":
// echo "Today is Sunday" ;
// break;
// default:
// echo "Wonder which day is this ?" ;
// }


// for( $i=0; $i<50; $i++ ){
// echo ($names.'<br>');
// } 


// $i = 0;
// do
// {
// echo ($names);
// $i++;
// } while( $i < 50 );




// $array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// foreach( $array as  $value )
// {
// echo "Value is $value <br />";
// }



$characters = array(
"sailormoon" => array
(
"age" => 14,
"hair" => "blonde",
"job"  => "sailor warrior"
),
"super mario" =>  array
(
"age" => 46,
"hair" => "black",
"job"  => "plumber"
),
"darko" =>  array
(
"age" => 24 ,
"hair" => "goldenbrown",
"job" => "drako the rebel"
)
);
/* Accessing multidimensional array values */
echo "Sailormoon's job is ";
echo $characters [ 'sailormoon']['job'] . "<br />" ;
echo "Super Mario is a ";
echo $characters [ 'super mario']['job'] . "<br />" ;
echo "Darko is also known as " ;
echo $characters ['darko']['job'] .  "<br />";


?>
</body>
</html>