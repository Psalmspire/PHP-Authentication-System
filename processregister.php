<?php session_start();

//Collecting data from form

//$errorArray =[];



//verification/data validation
$_SESSION['first_name']=$first_name;
$_SESSION['last_name']=$last_name;
$_SESSION['email']=$email;
$_SESSION['gender']=$gender;
$_SESSION['designation']=$designation;
$_SESSION['department']=$department;

$errorCount = 0;
 
$first_name = $_POST['first_name'] != ""? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != ""? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != ""? $_POST['email'] : $errorCount++;
$gender = $_POST['gender'] != ""? $_POST['gender'] : $errorCount++;
$designation = $_POST['designation'] != ""? $_POST['designation'] : $errorCount++;
$department = $_POST['department'] != ""? $_POST['department'] : $errorCount++;
$password = $_POST['password'] != ""? $_POST['password'] : $errorCount++;



if($errorCount > 0){
    //redirect back and display error
    $_SESSION['error'] = "You have ".$errorCount ." errors in your form submission";
    header("Location: register.php");
}
else{

//count all users
$allUsers = scandir("db/users/");
$countAllusers = count($allUsers);
$newuserId = ($countAllusers-2) +1; 

//saving data in db

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$department= $_POST['department'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];

$UserData =[
    'ID' => $newuserId, 
    'first_name'=> $first_name,
    'last_name'=> $last_name,
    'password'=> $password,
    'email'=> $email,
    'department'=> $department,
    'designation'=> $designation,
    'gender'=> $gender
  ];

echo file_put_contents("db/users/".$first_name.$last_name.".json", json_encode($UserData));
//return to page with status message
$_SESSION['message'] = "Registration successful! You can now login";
header("Location: login.php");//redirect to login page

    //continue to database
    echo "Successfully signed up";
}




/*
$errorArray = [];
if($first_name == ""){
    $errorArray = "First name cannot be blank"; //print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($last_name == ""){
    $errorArray = "Last name cannot be blank";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($email == ""){
    $errorArray = "Valid email address must be provided";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

if($gender == ""){
    $errorArray = "You must select a gender";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}
if($department == ""){
    $errorArray = "Please select a department";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}
if($designation == ""){
    $errorArray = "Please select a role";//print the error in $errorArray if the data returns empty
    print_r($errorArray);
}

*/




?>