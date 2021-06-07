<?php
include "../config/config.php";

// session for making same data when users choose both of question
$session  = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
$session  = str_shuffle($session);
$session  = substr($session, 0, 10);

// get data from survey
$q1 = $mysqli->real_escape_string($_POST['q1']);
$q2 = $mysqli->real_escape_string($_POST['q2']);

// Check users have sertificate ?
if ($q2 === "Ya") {
    // question 3 will combine to array

    // Check q3a is set ?
    if (isset($_POST["q3a"])) {
        $q3a = $mysqli->real_escape_string($_POST["q3a"]);
    } else {
        $q3a = 0;
    }

    // Check q3b is set ?
    if (isset($_POST["q3b"])) {
        $q3b = $mysqli->real_escape_string($_POST['q3b']);
    } else {
        $q3b = 0;
    }

    // Check q3c is set ?
    if (isset($_POST["q3c"])) {
        $q3c = $mysqli->real_escape_string($_POST['q3c']);
    } else {
        $q3c = 0;
    }

    // combine q3 to array
    $array_q3 = ["$q3a", "$q3b", "$q3c"];
    $q3 = implode(",", $array_q3);
} else {
    $q3 = NULL;
}

$q4 = $mysqli->real_escape_string($_POST['q4']);
// question for decission from user
$q5 = $mysqli->real_escape_string($_POST['q5']);

$q16 = $mysqli->real_escape_string($_POST['q16']);
$q17 = $mysqli->real_escape_string($_POST['q17']);
$q18 = $mysqli->real_escape_string($_POST['q18']);
$q19 = $mysqli->real_escape_string($_POST['q19']);
$q20 = $mysqli->real_escape_string($_POST['q20']);
$q21 = $mysqli->real_escape_string($_POST['q21']);
$q22 = $mysqli->real_escape_string($_POST['q22']);
$q23 = $mysqli->real_escape_string($_POST['q23']);
$q24 = $mysqli->real_escape_string($_POST['q24']);
$q25 = $mysqli->real_escape_string($_POST['q25']);
$q26 = $mysqli->real_escape_string($_POST['q26']);
$q27 = $mysqli->real_escape_string($_POST['q27']);
$q28 = $mysqli->real_escape_string($_POST['q28']);
$q29 = $mysqli->real_escape_string($_POST['q29']);
$q30 = $mysqli->real_escape_string($_POST['q30']);
$q31 = $mysqli->real_escape_string($_POST['q31']);

// check what user choose for question 5 or $q5

/* 
     READ THIS IF YOU CONFUSED FOR THIS CODE
     To make it easier to connect between 2 tables, there are data input sessions and dates.
     If you want to know whether the data is the choice of the user's part (both study and work) 
     then you only need to compare the data session and data input date in the questions1 and question2 tables, 
     if the data is the same it can be concluded that the user chose the (second) part of question 5 in index.php page
    */

// IF user choose study
if ($q5 === "Studi Lanjut") {
    /*
        /  Get data from studi lanjut
        /
        */
    $q6 = $mysqli->real_escape_string($_POST['q6']);
    $q7a = $mysqli->real_escape_string($_POST['q7a']);
    $q7b = $mysqli->real_escape_string($_POST['q7b']);
    $q8 = $mysqli->real_escape_string($_POST['q8']);

    // query insert to tables question 1
    $query = "INSERT INTO `questions1` VALUES (" .
        $values .= " NULL, '$q1', '$q2', '$q3','$q4','$q5','$q6','$q7a','$q7b','$q8', '$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31' , '$session', NOW())";
}
// IF user choose work
else if ($q5 === "Bekerja") {
    /*
        /  Get data from bekerja
        /
        */
    $q9 = $mysqli->real_escape_string($_POST['q9']);
    $q10a = $mysqli->real_escape_string($_POST['q10a']);
    $q10b = $mysqli->real_escape_string($_POST['q10b']);
    $q11 = $mysqli->real_escape_string($_POST['q11']);
    $q12a = $mysqli->real_escape_string($_POST['q12a']);
    $q12b = $mysqli->real_escape_string($_POST['q12b']);
    $q13 = $mysqli->real_escape_string($_POST['q13']);
    $q14 = $mysqli->real_escape_string($_POST['q14']);
    $q15 = $mysqli->real_escape_string($_POST['q15']);

    // Check error q12
    if (empty($q12b)) {
        $q12 = $mysqli->real_escape_string($_POST['q12a']);
    } else {
        $q12 = $mysqli->real_escape_string($_POST['q12b']);
    }

    // query insert to tables question 2
    $query = "INSERT INTO `questions2` VALUES (" .
        $values .= " NULL, '$q1', '$q2', '$q3','$q4','$q5','$q9', '$q10a','$q10b','$q11','$q12','$q13','$q14','$q15', '$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31', '$session', NOW())";
} else {
    // do this
    // if user select both (Study and Work) on question 5
    // Data will save in to 2 tables, table questions1 and questions2
    // Different about 2 tables is, table question1 if users choose study, tables questions2 if users choose work
    /*
        /  Get data from studi lanjut
        /
        */
    $q6 = $mysqli->real_escape_string($_POST['q6']);
    $q7a = $mysqli->real_escape_string($_POST['q7a']);
    $q7b = $mysqli->real_escape_string($_POST['q7b']);
    $q8 = $mysqli->real_escape_string($_POST['q8']);

    // query insert to tables question 1
    $query1 = "INSERT INTO `questions1` VALUES (" .
        $values1 .= " NULL, '$q1', '$q2', '$q3','$q4','$q5','$q6','$q7a','$q7b','$q8', '$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31' , '$session', NOW())";

    // insert data to database;
    if ($mysqli->query($query1)) {
        echo "success insert data";
    } else {
        echo "failed insert data with error (" . $mysqli->error . ")";
        exit(); // stop execution code
    }


    /*
        /  Get data from bekerja
        /
        */
    $q9 = $mysqli->real_escape_string($_POST['q9']);
    $q10a = $mysqli->real_escape_string($_POST['q10a']);
    $q10b = $mysqli->real_escape_string($_POST['q10b']);
    $q11 = $mysqli->real_escape_string($_POST['q11']);
    $q12a = $mysqli->real_escape_string($_POST['q12a']);
    $q12b = $mysqli->real_escape_string($_POST['q12b']);
    $q13 = $mysqli->real_escape_string($_POST['q13']);
    $q14 = $mysqli->real_escape_string($_POST['q14']);
    $q15 = $mysqli->real_escape_string($_POST['q15']);

    // Check error q12
    if (empty($q12b)) {
        $q12 = $mysqli->real_escape_string($_POST['q12a']);
    } else {
        $q12 = $mysqli->real_escape_string($_POST['q12b']);
    }

    // query insert to tables question 2
    $query2 = "INSERT INTO `questions2` VALUES (" .
        $values2 .= " NULL, '$q1', '$q2', '$q3','$q4','$q5','$q9', '$q10a','$q10b','$q11','$q12','$q13','$q14','$q15', '$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31', '$session', NOW())";

    // insert data to database;
    if ($mysqli->query($query2)) {
        echo "success insert data";
    } else {
        echo "failed insert data with error (" . $mysqli->error . ")";
        exit(); // stop execution code
    }

    exit(); // stop execution code
    // END execution bellow this coment!
}


// insert data to database;
if ($mysqli->query($query)) {
    header('location: ../index.php');
} else {
    echo "failed insert data with error (" . $mysqli->error . ")";
}
