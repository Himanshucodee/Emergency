<?php
$connect = mysqli_connect("localhost", "root", "", "emergency");
 
$result = mysqli_query($connect, "SELECT * FROM edata");
 
$data = array();
 
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);

?>
