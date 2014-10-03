<?php

$username = 'root';
$host     = 'localhost';
$database = 'publications';

# connect to the localhost or die
$conn = mysql_connect($host, $username) or die('Could not connect: ' . mysql_error());

# connect to the database or die
mysql_select_db($database) or die('Error connecting to DB: '.mysql_error());

#query for classics table
$query_select_data = 'SELECT * FROM classics';

$retval = mysql_query($query_select_data, $conn) or die('Could not get data: ' . mysql_error());

echo ('<h4> CLASSICS TABLE </h4><br>');
while($row = mysql_fetch_array($retval))
{
    echo "Author :{$row['author']}  <br> ".
         "Title : {$row['title']} <br> ".
         "Category : {$row['category']} <br> ".
		 "Year : {$row['year']} <br> ".
		 "ISBN : {$row['isbn']} <br> ".
         "-------------------------------------<br>";
} 

?>