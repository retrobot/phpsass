<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<title>Info blog</title>
</head>
<body>

<h1> Infashion Online Blog</h1>
<?php echo('<h1>Latest shoe styles</h1>'); ?>
<!-- Next thing <div class="main"> Hello <br /> Helloo </div> -->

<?php echo 'php start<br/><br />';

// $fruits = array('red' => 'aplle', 'yellow' => 'banana', 'purple' => 'plum', 'green' => 'grape');
// print_r($fruits);
?>

<?php

// define an array
// $zmienna = 'cs2';
// $pizza = array('top'=>'onion', 'bo'=>'tomato', 'cheese', 'bu'=>'anchovies', 'ham', 'bi'=>'pepperoni');

// print_r($pizza);
// print('<br/><br/>');

// $pizza[0] = 'MNIAM';
// array_push($pizza, 'rozrzedza');

// print_r($pizza);
// print('<br/><br/>');
// array_unshift($pizza, 'BEGIN');
// print_r($pizza);

// define CSV string
// $str = 'red, blue, green, yellow';

// // split into individual words

// $colors = explode(', ', $str);

// print_r($colors);

// $pol = implode('---', $colors);
// print_r($pol);

// // define an array
// $pasta = array('spaghetti', 'penne', 'macaroni', '5', '100');

// // returns the array sorted alphabetically
// print_r($pasta);
// print "<br />";

// sort($pasta);

// print_r(sizeof($pasta));

// print "<br />";

// // returns the array sorted alphabetically in reverse

// rsort($pasta);

// print_r($pasta);

// $artists = array('one'=>'info', 'two'=>'shio', 'three'=>'online', 'four'=>'hi');

// // loop over it and print array elements
// $keyz=array_keys($artists);
// print_r($keyz);
// print('<br />');
// print_r(array_values($artists));
// // foreach ($x = sizeof($artists)-1; $x >= 0; $x--) {
// print('<br />');

// foreach ($artists as $value) {
	
// 	    echo '<li class="bands">Hi'.$value.'</li>';

// }

?>
<!-- 
<?php

// check for submit
print_r($_GET); 

if (!isset($_POST['submit'])) {

    // and display form

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="checkbox" name="artist[]" value="First">Cos1

    <input type="checkbox" name="artist[]" value="N'Sync">Somet2
    <input type="checkbox" name="artist[]" value="Boyzone">Boe
    <input type="checkbox" name="artist[]" value="Britney Spears">Kimb
    <input type="checkbox" name="artist[]" value="Jethro Tull">ull
    <input type="checkbox" name="artist[]" value="Crosby, Stills & Nash">Crosby, Stills & Nash
    <input type="submit" name="submit" value="Select">

    </form>

<?php

    }

else {

    // or display the selected artists

    // use a foreach loop to read and display array elements

    if (is_array($_POST['artist'])) {

        echo 'You selected: <br />';

        foreach ($_POST['artist'] as $a) {

           echo "<i>$a</i><br />";

            }

        }

    else {

        echo 'Nothing selected';

    }

}

?>
 -->

<?php

echo getcwd().'<br /><br />';

// set file to read
$file = 'other/tfile.txt' or die('Could not open file!');

// open file

$fh = fopen($file, 'r') or die('Could not open file!');

// read file contents
echo filesize($file).'<br/>';

$data = fread($fh, filesize($file)) or die('Could not read file!');
$sdata = file($file) or die("coudlnt");
$gdata = file_get_contents($file) or die('Could not read file!');

// close file
echo 'beginG'.$gdata.'endG';
fclose($fh);

// print file contents
foreach ($sdata as $value) {
	echo $value.'<br/>';
}


?>



</body>
</html>