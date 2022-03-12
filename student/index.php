<?php
    session_start();
    $page="Home";
    include '../includes/db_connection.php';
    $user_id = $_SESSION['id'];
    
$sql = "select * from users where id = $user_id; ";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student</title>

    <script src="./script/sidebar.js"></script>
    <script src="../tailwind/tailwind-cdn.js"></script>

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <?php include './components/sidebar.php'; ?>

    <div class="main h-full">
      <div class="pt">


      <?php
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {

                if($row['status'] == 'info') {
                  include './components/details-form.php';
                } else if($row['status'] == 'application'){
                  include './components/app-form.php';
                } else {
                  include './components/waiting.php';
                }
              }
            }
      ?>
      </div>
    </div>
  </body>
</html>
