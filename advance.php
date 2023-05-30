<?php
// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("l"). "<br>";
// echo "Year " . date("Y"). "<br>";
// echo "Today time is " . date("h:i:sa"). "<br>";
// echo "Today time is " . date("H:i:s"). "<br>";

// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";

// $d=strtotime("10:30pm April 15 2014");
// echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";

// $d=strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d=strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);

// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }


// The fread() function reads from an open file.
// The fclose() function is used to close an open file.
// The fgets() function is used to read a single line from a file.
// The feof() function checks if the "end-of-file" (EOF) has been reached.
// The fgetc() function is used to read a single character from a file.
// The fopen() function is also used to create and open a file.
// The fwrite() function is used to write to a file.
// You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.

// setcookie(name, value, expire, path, domain, secure, httponly);
// isset() function to find out if the cookie is set
// To delete a cookie, use the setcookie() function with an expiration date in the past.
// A session is a way to store information (in variables) to be used across multiple pages.Unlike a cookie, the information is not stored on the users computer.Session variables hold information about one single user, and are available to all pages in one application.
// A session is started with the session_start() function.
// To remove all global session variables and destroy the session, use session_unset() and session_destroy().

// The filter_list() function can be used to list what the PHP filter extension offers.
// The filter_var() function both validate and sanitize data.
// Sanitize a String
// $str = "<h1>Hello World!</h1>";
// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newstr;

// Validate an Integer
// $int = 100;
// if (filter_var($int, FILTER_VALIDATE_INT)) {
//   echo("Integer is valid");
// } else {
//   echo("Integer is not valid");
// }

// The json_encode() function is used to encode a value to JSON format.
// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

?>