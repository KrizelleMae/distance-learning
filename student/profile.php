<?php

$page = "profile";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./script/sidebar.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="./script/sidebar.js"></script>
    <script src="../tailwind/tailwind-cdn.js"></script>

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="./css/main.css" />
</head>
<body>

<?php include './components/sidebar.php'; ?>
  <!-- Box -->
<div class="bg-white block sm:mt-20">
    <div class="max-w-2xl mx-auto shadow-lg font-sans">

       <!--Profile Picture-->
        <div class="w-full">
            <div class="w-full bg-dark-blue h-28 rounded-t-lg">
                <h3 class="text-2xl font-bold text-right text-white mr-9 pt-9">Profile</h3>
            </div>
            <div class="absolute -mt-24 ml-5">
                <img src="./image/adrian.jpg" alt="" class="bg-gray-500 border h-40 w-40 rounded-lg shadow-lg border-b">
            </div>
        </div>

        <!--User Details-->
        <div class="bg-primary border border-primary rounded-b-lg p-5 pt-20 flex flex-col">
            <div class="text-sm mt-2 text-gray-800 ">
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg">
                    <span class="font-bold">Name:</span>
                    <!-- <div class="w-20"></div> -->
                    <span class="font-normal">Adrian A. Agcaoili</span>
                </div>
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg mt-2">
                    <span class="font-bold">Contact No:</span>
                    <!-- <div class="w-8"></div> -->
                    <span class="">09605075322</span>
                </div>
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg mt-2">
                    <span class="font-bold">Email:</span>
                    <!-- <div class="w-20"></div> -->
                    <span class="">adrianagcaoili20@gmail.com</span>
                </div>
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg mt-2">
                    <span class="font-bold">Address:</span>
                    <!-- <div class="w-14"></div> -->
                    <span class="">Zamboanga City, Philippines</span>
                </div>
                <div class="bg-gray-200 h-1 w-m-2xl mt-7 rounded-full"></div>
            </div>

            <div class="text-sm mt-8 text-gray-800">
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg">
                    <span class="font-bold">Program Enrolled:</span>
                    <!-- <div class="w-14"></div> -->
                    <span class="font-normal">Masters in Nursing</span>
                </div>
                <div class="flex flex-row ml-auto space-x-2 items-center text-lg mt-2">
                    <span class="font-bold">Department:</span>
                    <!-- <div class="w-14"></div> -->
                    <span class="font-normal">Distance Education</span>
                </div>
            </div>         
        </div>
    </div>
</body>
</html>