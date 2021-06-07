<?php
include_once "../config/config.php";
if (isset($_POST['submit'])) {

    $q1  = $connect->real_escape_string($_POST['q1']);
    $q2  = $connect->real_escape_string($_POST['q2']);
    $q3  = $connect->real_escape_string($_POST['q3']);
    $q4 = $connect->real_escape_string($_POST['q4']);
    $q5 = $connect->real_escape_string($_POST['q5']);
    $q6 = $connect->real_escape_string($_POST['q6']);
    $q7  = $connect->real_escape_string($_POST['q7']);
    $q8 = $connect->real_escape_string($_POST['q8']);
    $q9 = $connect->real_escape_string($_POST['q9']);
    $q10 = $connect->real_escape_string($_POST['q10']);
    $q11 = $connect->real_escape_string($_POST['q11']);
    $q12 = $connect->real_escape_string($_POST['q12']);
    $q13 = $connect->real_escape_string($_POST['q13']);
    $q14 = $connect->real_escape_string($_POST['q14']);
    $q15 = $connect->real_escape_string($_POST['q15']);
    $q16 = $connect->real_escape_string($_POST['q16']);
    $q17 = $connect->real_escape_string($_POST['q17']);
    $q18 = $connect->real_escape_string($_POST['q18']);
    $q19 = $connect->real_escape_string($_POST['q19']);
    $q20 = $connect->real_escape_string($_POST['q20']);
    $q21 = $connect->real_escape_string($_POST['q21']);
    $q22 = $connect->real_escape_string($_POST['q22']);
    $q23 = $connect->real_escape_string($_POST['q23']);
    $q24 = $connect->real_escape_string($_POST['q24']);
    $q25 = $connect->real_escape_string($_POST['q25']);
    $q26 = $connect->real_escape_string($_POST['q26']);
    $q27 = $connect->real_escape_string($_POST['q27']);
    $q28 = $connect->real_escape_string($_POST['q28']);
    $q29 = $connect->real_escape_string($_POST['q29']);
    $q30 = $connect->real_escape_string($_POST['q30']);
    $q31 = $connect->real_escape_string($_POST['q31']);

    $sql = "INSERT INTO questions (`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`,`q11`,`q12`,`q14`,`q15`,`q16`,`q17`,`q18`,`q19`,`q20`,`q21`,`q22`,`q23`,`q24`,`q25`,`q26`,`q27`,`q28`,`q29`,`q30`,`q31`) 
    VALUES('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', $q9, '$q10', $q11, $q12, '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20','$q21', '$q22', '$q23', '$q24', '$q25', '$q26', '$q27', '$q28', '$q29', '$q30', '$q31')";

    if ($connect->query($sql)) {
        // echo "<script>alert('Terima Kasih atas Vote nya'); window.location.href='index.php';</script>";
        echo "Berhasil";
    } else {
        echo "failed " . $connect->error;
    }
} else {
    echo "Error di file ini";
}
