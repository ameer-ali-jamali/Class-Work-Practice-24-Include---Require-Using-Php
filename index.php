Include & Require
The include & require statements take all the contents of a specified file and puts in into another file that uses the include statement. The include and require statements are almost the same but they have different error messages.



include will produce an error and stop the program (E_COMPILE_ERROR).
require will only produce a warning and continue running the program (E_WARNING)


Using Include and require saves a lot of time and work. We can create a standard file like a navbar.php or footer.php and use it on the whole site without rewriting the code over and over again.



Syntax:

include 'filename';

or

require 'filename';


Include:
The include statement is used when we need to include one PHP file in another PHP file. If the file does not exist on the server, then the PHP script will produce a warning and then show us the output.

Let's assume we have a file "example1.php", and we want to include that file inside "example2.php". This is how we will do it:



example1.php:

<?php
echo "Wohooo Thanks for Including";
?>


example2.php:

<html>

<body>

    <h1>Welcome!</h1>
    <p>Let's get started</p>
    <?php include 'example1.php'; ?>

</body>

</html>


Require:
We can also use the require statement to include a file into a PHP program. There is only one big difference between include and require which makes require unique; when a file is included using the require statement and if the server cannot find the file then the script will produce an error and stop executing the script.



example1.php:

<?php
$name = 'Srinath';
$job = 'Podcaster';
?>


example2.php:

<html>

<body>

    <h1>Welcome!</h1>
    <?php include 'example1.php';
    echo "I am $name and I am a $job.";
    ?>

</body>

</html>


Output:

I am Srinath and I am a Podcaster.