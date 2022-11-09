# Include & Require
The include & require statements take all the contents of a specified file and puts in into another file that uses the include statement. The include and require statements are almost the same but they have different error messages. 

 

include will produce an error and stop the program (E_COMPILE_ERROR).
require will only produce a warning and continue running the program (E_WARNING)
 

Using Include and require saves a lot of time and work. We can create a standard file like a navbar.php or footer.php and use it on the whole site without rewriting the code over and over again.
