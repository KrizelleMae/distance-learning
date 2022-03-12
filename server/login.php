<?php
   include ("../includes/db_connection.php");
   session_start();
   echo $_POST['username'];

   if(isset($_POST['email'])){
       $email = $_POST['email'];
       $password = $_POST['password'];
     

       $sql = mysqli_query($con, "select * from users where email = '$email' AND  password = '$password' limit 1");
      

        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
            
                $email = $row["email"];

                if($row["role"] == "admin"){
                    $_SESSION['admin_user'] = $row["email"];
                    $_SESSION['admin_pass'] = $row["password"];
                    $_SESSION['role'] = $row["role"];
                    header("location: ../admin/");
                } else if ($row["role"] == "student"){
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['id'] = $row["id"];
                    
                    header("location: ../student/");
                }else{
                   echo "<br/> Not admin";
                }
            }
        } else {
              echo "<br/> Invalid account";
        }

       
    }   

?>

