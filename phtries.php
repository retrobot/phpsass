<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<title>Info blog</title>
</head>
<body>
<div class="centeros">
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
echo 'type is:'.filetype($file).'FILE TYPE IS';

$data = fread($fh, filesize($file)) or die('Could not read file!');
$sdata = file($file) or die("coudlnt");
$gdata = file_get_contents($file) or die('Could not read file!');

// close file
echo 'beginG'.$gdata.'endG';
fclose($fh);
$fw = fopen($file, 'a') or die("couldny opet to write");
// $wdata = fwrite($fw, "Bla Bla Somit \n");
fclose($fw);
// file_put_contents($file, "daeta", FILE_APPEND);
// print file contents
// foreach ($sdata as $value) {
// 	echo $value.'<br/>';
// }


?>

<?php

// if form has not yet been submitted

// display input box

if (!isset($_POST['file'])) {

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Enter file path <input type="text" name="file">

    </form>

<?php

}

// else process form input

else {

    // check if file exists

    // display appropriate message

    if (file_exists($_POST['file'])) {

        echo 'File exists!';

        }

    else {

        echo 'File does not exist!';

    }

}

?>

<?php

/* if form has not yet been submitted, display input box */

if (!isset($_POST['file'])) {

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Enter file path <input type="text" name="file">

    </form>

<?php

}

// else process form input

else {

    echo 'File name: <b>'.$_POST['file']  .'</b><br />';

    /* check if file exists and display appropriate message */

    if (file_exists($_POST['file'])) {

        // print file size

        echo 'File size: '.filesize($_POST['file']).' bytes<br />';

        // print file owner

        echo 'File owner: '.fileowner($_POST['file']).'<br />';

        // print file group

        echo 'File group: '.filegroup($_POST['file']).'<br />';

        // print file permissions

        echo 'File permissions: '.fileperms($_POST['file']).'<br />';

        // print file type

        echo 'File type: '.filetype($_POST['file']).'<br />';

        // print file last access time

        echo 'File last accessed on: '.date('Y-m-d', fileatime($_POST['file'])).'<br />';

        // print file last modification time

        echo 'File last modified on: '.date('Y-m-d', filemtime($_POST['file'])).'<br />';

        // is it a directory?

        if (is_dir($_POST['file'])) {

            echo 'File is a directory <br />';

        }

        // is it a file?

        if (is_file($_POST['file'])) {

            echo 'File is a regular file <br />';

        }

        // is it a link?

        if (is_link($_POST['file'])) {

            echo 'File is a symbolic link <br />';

        }

        // is it executable?

        if (is_executable($_POST['file'])) {

            echo 'File is executable <br />';

        }

        // is it readable?

        if (is_readable($_POST['file'])) {

            echo 'File is readable <br />';

        }

        // is it writable?

        if (is_writable($_POST['file'])) {

            echo 'File is writable <br />';

        }

    }

    else {

        echo 'File does not exist! <br />';

    }

}

?>

</div> <!-- centeros -->
</body>
</html>