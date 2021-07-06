<?php
    $address = $_POST['address'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];


    if(!empty($address) || !empty($name) || !empty($phone)){
        $host = 'sql208.epizy.com';
        $dbUsername = 'epiz_28468903';
        $dbPassword = 'wAkTt06LbPmNs';
        $dbname = 'epiz_28468903_hospital';

        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $INSERT = "INSERT INTO `Hospital` (`address`, `name`, `phone`)
                    VALUES ('$address', '$name', '$phone')";

            $rs = mysqli_query($conn, $INSERT);

            if($rs){
                header('Location: display.php');
                exit;
            } else {
                echo "Hospital data must be unique";
            }
        }
    } else {
        echo "All fields are required";
        die();
    }
?>