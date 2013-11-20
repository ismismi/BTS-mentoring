<?php

# Connect
mysql_connect('localhost', 'root', 'root') or die('Could not connect: ' . mysql_error());
 
# Choose a database
mysql_select_db('beer_db') or die('Could not select database');
 
# Perform database query
$query = "SELECT * from beers";
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
 
echo "<ul>";
# Filter through rows and echo desired information
while ($row = mysql_fetch_object($result)) {
    echo '<li>';
    	 echo 'Name: ' . $row->name. ' style: ' . $row->style;
    echo '</li>';
}
echo "</ul>";
