<?php 
session_start();
include '../includes/db_connection.php';

    $user_id = $_SESSION['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthdate = date($_POST['birthdate']);
    $gender = $_POST['gender'];
    $civil = $_POST['civil'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $tel = $_POST['tel'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $university = $_POST['university'];
    $degree = $_POST['degree'];

    $sql = mysqli_query($con, 
    "insert into user_details(user_id, first_name, last_name, birthdate, gender, civil_stat, email, mobile, tel, barangay, city, country, university, degree) 
    values('$user_id', '$first_name', '$last_name', '$birthdate', '$gender', '$civil', '$email', '$mobile', '$tel', '$barangay', '$city', '$country', '$university', '$degree');");


    if($sql){
        $query = mysqli_query($con, "update users set status = 'application' where id = $user_id;");
        if($query){
             echo '<script>alert("Success")</script>';
            header("location:../student/");
        }
       
    }else{
        echo "Failed: " . mysqli_connect_error();
    }


    

    
?>