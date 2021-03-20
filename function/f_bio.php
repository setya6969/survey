<?php 
    include_once "../config/config.php";
    if(isset($_POST['submit']))
    {
        //redirect back
        header("location: " . BASE_URL);
        exit(); // Stop code
    }

    // Create Token
    $user_id  = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
    $user_id  = str_shuffle($user_id);
    $user_id  = "alumni-".substr($user_id,0,5);

    $name  = $mysqli->real_escape_string($_POST['name']);
    $email  = $mysqli->real_escape_string($_POST['email']);
    $prodi = $mysqli->real_escape_string($_POST['prodi']);
    $gender = $mysqli->real_escape_string($_POST['gender']);
    $angkatan = $mysqli->real_escape_string($_POST['angkatan']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $ipk = $mysqli->real_escape_string($_POST['ipk']);

    $query = "INSERT INTO biodata_mahasiswa (`user_id`, `name`,`email`,`prodi`,`gender`,`angkatan`,`phone`, `ipk`) VALUES(".
    $values .= "'$user_id', '$name', '$email', '$prodi', '$gender', '$angkatan', '$phone', '$ipk')";

    if($mysqli->query($query))
    {
        header("location : ".BASE_URL."angket");
        exit();
    }
    else
    {
        echo "failed " . $mysqli->error;
    }
?>