<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "my_site";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
 function db_query($query)
 {
	 if (!strlen($query))
		return;
		$db= OpenCon();
		#echo "$db";
	
#remove this afterwardsprint
print "$query";

return mysql_query($query);
 }
function check_admin($email,$password)
{
	#$sql=db_query("Select count(email) from login where email=$email and password=$password");
	$result=db_query("Select xyz from dual");

		
$row=mysql_fetch_assoc($result)
		echo "$row";
	#}
	#return "Not Found";
}
check_admin("rohit.tamr","12345");
?>