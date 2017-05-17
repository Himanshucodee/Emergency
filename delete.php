<?php
$conn = new PDO("mysql:host=localhost;dbname=emergency", "root", "");   
$_POST = json_decode(file_get_contents('php://input'), true);

       $ins_query=$conn->prepare("DELETE  FROM edata WHERE phone =  :phone");
       $ins_query->bindParam(':phone', $_POST['phone']);

        $chk_ins=$ins_query->execute();
        echo "New record created successfully";

       
?>
