<?php

$db_user    = 'root';
$db_pass    = "";
$db         = 'test';//test

$conn = mysqli_connect('localhost',$db_user,$db_pass) or die('Unable to connect database');

mysqli_select_db($conn,$db)or die("cannot connect database practice");


   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    $sql = 'SELECT uname, pwd FROM login';

   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) 
      die('Could not get data: ' . mysql_error());{

   echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Username</th>"; 
        echo "<th>Password</th>"; 

        echo "</tr>"; 
   while($row = mysqli_fetch_array($retval)) {
	echo "<tr>"; 
                echo "<td>" . $row[0] . "</td>"; 
                echo "<td>" . $row[1] . "</td>"; 

            echo "</tr>"; 
			}
			echo "</table>"; 
	
	  }


?>