<?php

// Create connection to Oracle
$conn = oci_connect('girisha', 'girisha47', 'localhost/XE');

$query = 'select * from all_users';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

// Fetch each row in an associative array
print '<table border="2" align="center" style="color: blue; font-family: Courier New,Courier;">';
print '<tr style="background: lightblue; color: black;"><td>USERNAME</td><td>USER ID</td><td> CREATED</td></tr>';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>';
   foreach ($row as $item) {
       print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   print '</tr>';
}
print '</table>';

?>