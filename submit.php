<?php
$conn = new PDO("mysql:host=localhost;dbname=emergency", "root", "");   
$_POST = json_decode(file_get_contents('php://input'), true);

       $ins_query=$conn->prepare("INSERT INTO edata (status,name, phone, address, landmark, pincode,ambulance,police,fire,wtime)
       values(:status, :name, :phone , :address , :landmark , :pincode, :ambulance, :police, :fire, :wtime)");
       $ins_query->bindParam(':status', $_POST['status']);
       $ins_query->bindParam(':name', $_POST['name']);
       $ins_query->bindParam(':phone', $_POST['phone']);
       $ins_query->bindParam(':address', $_POST['address']);
       $ins_query->bindParam(':landmark', $_POST['landmark']);
       $ins_query->bindParam(':pincode', $_POST['pincode']);
       $ins_query->bindParam(':ambulance', $_POST['ambulance']);
       $ins_query->bindParam(':police', $_POST['police']);
       $ins_query->bindParam(':fire', $_POST['fire']);
       $ins_query->bindParam(':wtime', $_POST['wtime']);
      
        $chk_ins=$ins_query->execute();
        echo "New record created successfully";

       
?>
