<?php
include 'connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$designation = $_POST['designation'];
$permanent_address = $_POST['permanent_address'];
$email = $_POST['email'];
$contactnumber = $_POST['contactnumber'];
$skill = $_POST['skill'];
$skillList = '';
foreach ($skill as $ski) {
    $skillList .= $ski . ',';
}
$language = $_POST['language'];
$languageList = '';
foreach ($language as $lang) {
    $languageList .= $lang . ',';
}
$institution = $_POST['institution'];
$institutionList = '';
foreach ($institution as $insti) {
    $institutionList .= $insti . ',';
}
$yearsofstudy = $_POST['yearsofstudy'];
$yearsofstudyList = '';
foreach ($yearsofstudy as $yos) {
    $yearsofstudyList .= $yos . ',';
}
$course = $_POST['course'];
$courseList = '';
foreach ($course as $cou) {
    $courseList .= $cou . ',';
}
$organisation = $_POST['organisation'];
$organisationList = '';
foreach ($organisation as $organi) {
    $organisationList .= $organi . ',';
}
$yearsofwork = $_POST['yearsofwork'];
$yearsofworkList = '';
foreach ($yearsofwork as $yow) {
    $yearsofworkList .= $yow . ',';
}
$role_of_work = $_POST['role_of_work'];
$role_of_workList = '';
foreach ($role_of_work as $rowork) {
    $role_of_workList .= $rowork . ',';
}
$sql = "INSERT INTO resumeForm (fname,lname,designation,permanent_address,email,contactnumber,skills,languages,institution,yearsofstudy,course,organisation,yearsofwork,role_of_work) VALUES('$fname','$lname','$designation','$permanent_address','$email','$contactnumber','$skillList','$languageList','$institutionList','$yearsofstudyList','$courseList','$organisationList','$yearsofworkList','$role_of_workList')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
