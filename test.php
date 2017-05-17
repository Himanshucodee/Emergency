<?php
// mysql_connect("localhost", "root", ""); 
// mysql_select_db("emergency");
// mysql_query("INSERT INTO edata ('name', 'phone', 'address', 'landmark','pincode') VALUES('qwe','123123','qwe','qwead','123123')");

// Create connection
// $conn = new mysqli("localhost", "root", "","emergency");
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "INSERT INTO edata (name, phone, address, landmark,pincode)
// -- VALUES ('qwe','123123','qwe','qwead','123123')";

// // if ($conn->query($sql) === TRUE) {
// //     echo "New record created successfully";
// // } else {
// //     echo "Error: " . $sql . "<br>" . $conn->error;
// // }

// // $conn->close();

    // error_reporting(0);
    $conn = new PDO("mysql:host=localhost;dbname=emergency", "root", "");   
    $_POST = json_decode(file_get_contents('php://input'), true);
    // if(!empty($_POST['name'])&& !empty($_POST['phone'])&& !empty($_POST['address'])&& !empty($_POST['landmark'])&& !empty($_POST['pincode']))
    // {
       $ins_query=$conn->prepare("insert into edata (name, phone, address, landmark, pincode)
        values('qwe','123123','qwe','qwead','123123')");
    //    $ins_query->bindParam(':name', $_POST['name']);
    //    $ins_query->bindParam(':mobile', $_POST['mobile']);
    //    $ins_query->bindParam(':email', $_POST['email']);
       $chk_ins=$ins_query->execute();
        echo "New record created successfully";
    // }
    // $result = $conn->prepare("select * from tbl_name order by id ");
    // $sel_query->execute();
    // echo json_encode($sel_query->fetchAll());
?> 

