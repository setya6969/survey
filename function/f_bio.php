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
    $domisili = $mysqli->real_escape_string($_POST['domisili']);
    $activity = $mysqli->real_escape_string($_POST['activity']);

    // $query = "INSERT INTO biodata_mahasiswa (`user_id`, `name`,`email`,`prodi`,`gender`,`angkatan`,`phone`, `ipk`, `domisili`, `activity`) VALUES(".
    // $values .= "'$user_id', '$name', '$email', '$prodi', '$gender', '$angkatan', '$phone', '$ipk', '$domisili', '$activity')";

    $query = "INSERT INTO biodata_mahasiswa (`user_id`, `name`,`email`,`prodi`,`gender`,`angkatan`,`phone`, `ipk`, `domisili`, `activity`) 
    SELECT * FROM (SELECT '$user_id', '$name', '$email', '$prodi', '$gender', '$angkatan', $phone, $ipk, '$domisili', '$activity') 
    AS tmp WHERE NOT EXISTS (SELECT `name` from biodata_mahasiswa WHERE `name` = '$name') LIMIT 1";

    // Checking error mysql insert data
    if($mysqli->query($query))
    {
        // Check duplicated data message
        // this affected rows will show 1 or 0 for output
        // if affected rows 1, data was successfully entered into the database
        // if affected rows 0, there is duplicated data
        if($mysqli->affected_rows)
        {
            // Triger to another page
            header('location: ../angket.php');

        }
        else
        {
            echo "duplicate entry no need to insert into DB";
        }
    }
    else
    {
        echo "Insert failed with error (" .$mysqli->error.")";
    }
?>