<?php
// session_start();


// $_SESSION["user"]="";
// $_SESSION["usertype"]="";


// // Set the new timezone
// date_default_timezone_set('Asia/Kolkata');
// $date = date('Y-m-d');

// $_SESSION["date"]=$date;


// //import database
// include("connection.php");


// header('Content-Type: application/json; charset=utf-8');


// if($_POST){

//     $result= $database->query("select * from webuser");

//     $fname=$_SESSION['personal']['fname'];
//     $lname=$_SESSION['personal']['lname'];
//     $name=$fname." ".$lname;
//     $address=$_SESSION['personal']['address'];
//     $nic=$_SESSION['personal']['nic'];
//     $dob=$_SESSION['personal']['dob'];
//     $email=$_POST['newemail'];
//     $tele=$_POST['tele'];
//     $newpassword=$_POST['newpassword'];
//     $cpassword=$_POST['cpassword'];
    
//     if ($newpassword==$cpassword){
//         $result= $database->query("select * from webuser where email='$email';");
//         if($result->num_rows==1){
//             $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Already have an account for this Email address.</label>';
//         }else{
            
//             $database->query("INSERT INTO patient(pemail,pname,ppassword, paddress, pnic,pdob,ptel) values('$email','$name','$newpassword','$address','$nic','$dob','$tele');");
//             $database->query("insert into webuser values('$email','p')");

//             //print_r("insert into patient values($pid,'$email','$fname','$lname','$newpassword','$address','$nic','$dob','$tele');");
//             $_SESSION["user"]=$email;
//             $_SESSION["usertype"]="p";
//             $_SESSION["username"]=$fname;

//             header('Location: patient/index.php');
//             $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;"></label>';
//         }
        
//     }else{
//         $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Password Conformation Error! Reconform Password</label>';
//     }



    
// }else{
//     //header('location: signup.php');
//     $error='<label for="promter" class="form-label"></label>';
// }



session_start();

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"] = $date;

// Import database
include("connection.php");

header('Content-Type: application/json; charset=utf-8');

$response = array();

if ($_POST) {
    $result = $database->query("SELECT * FROM webuser");

    $fname = $_SESSION['personal']['fname'];
    $lname = $_SESSION['personal']['lname'];
    $name = $fname . " " . $lname;
    $address = $_SESSION['personal']['address'];
    $nic = $_SESSION['personal']['nic'];
    $dob = $_SESSION['personal']['dob'];
    $email = $_POST['newemail'];
    $tele = $_POST['tele'];
    $newpassword = $_POST['newpassword'];
    $cpassword = $_POST['cpassword'];

    if ($newpassword == $cpassword) {
        $result = $database->query("SELECT * FROM webuser WHERE email='$email';");
        if ($result->num_rows == 1) {
            $response['status'] = 'error';
            $response['message'] = 'Already have an account for this Email address.';
        } else {
            $database->query("INSERT INTO patient(pemail,pname,ppassword, paddress, pnic,pdob,ptel) VALUES('$email','$name','$newpassword','$address','$nic','$dob','$tele');");
            $database->query("INSERT INTO webuser VALUES('$email','p')");

            $_SESSION["user"] = $email;
            $_SESSION["usertype"] = "p";
            $_SESSION["username"] = $fname;

            $response['status'] = 'success';
            $response['redirect'] = 'patient/index.php';
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Password Confirmation Error! Please reconfirm your password.';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request.';
}

echo json_encode($response);

