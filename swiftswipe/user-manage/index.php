<?php

include '../config.php';
session_start();
$id = $_SESSION['id'];

if(!isset($id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($id);
   session_destroy();
   header('location:login.php');
}

?>
<html>
<head>
<link rel="icon" href="../logo/logosystem.png">
<meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>



   
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
            <img src="../logo/admin.png" style="width: 160px; height: 45px;">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">

                    </div>
                     </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">

                                        <?php
                                                $select = mysqli_query($conn, "SELECT * FROM `admint` WHERE id = '$id'") or die('query failed');
                                                if(mysqli_num_rows($select) > 0){
                                                    $fetch = mysqli_fetch_assoc($select);
                                                }
                                                if($fetch['image'] == ''){
                                                    echo '<img width="42" style="border-radius:50%;" src="../images/default-avatar.png">';
                                                }else{
                                                    echo '<img width="42" style="border-radius:50%;" src="../uploaded_img/'.$fetch['image'].'">';
                                                }
                                            ?>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a type="button" href="../admin/update_profile.php" tabindex="0" class="dropdown-item">Profile</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a  href="../admin/home.php?logout=<?php echo $id; ?>" type="button" tabindex="0" class="dropdown-item">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                                            <?php
                                $select = mysqli_query($conn, "SELECT * FROM `admint` WHERE id = '$id'") or die('query failed');
                                if(mysqli_num_rows($select) > 0){
                                    $fetch = mysqli_fetch_assoc($select);
                                }
                            ?>
                                    <?php echo $fetch['email']; ?>
                                    </div>
                                    <div class="widget-subheading">
                                    Administrator
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">

                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>          <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">

                            <li class="app-sidebar__heading">Home</li>
                                <li>
                                    <a href="../admin/home.php">
                                    <i class="fa-solid fa-table-columns"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">School</li>
                                <li >
                                <li >
                                    <a href="../studentl/index.php">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                        Student
                                    </a>
                                </li>
                                <li >
                                <a href="../section/index.php">
                                    <i class="fa-solid fa-school"></i>
                                        Section
                                    </a>
                                </li>
                                <li >
                                <a href="../strand/index.php">
                                    <i class="fa-solid fa-book"></i>
                                        Strand
                                    </a>
                                </li>
                                <li >
                                    <a href="../admin/archive.php">
                                    <i class='fa-solid fa-box-archive'></i>
                                        Archive
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Accounts</li>
                                <li>
                                  <a href="../admin-manage/index.php">
                                    <i class="fa-solid fa-user-tie"></i>
                                        Admin
                                    </a>
                                </li>
                                <li>
                                <a href="index.php" class="mm-active">
                                    <i class="fa-solid fa-user"></i>
                                        User
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Tap System</li>
                                <li>
                                <a href="../admin/time-in.php">
                                    <i class="fa-solid fa-circle-check"></i>
                                        </i>Time In
                                    </a>
                                </li>
                                <li>
                                <a href="../admin/time-out.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                                        </i>Time Out
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                    <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>Manage User Account
                                        <div class="page-title-subheading">Today is <?php echo date('F d, Y '); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
      
                                </div>    </div>
                        </div>           
        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header"><a class='btn btn-success btn-xl'  href="register.php"><i class="fa-solid fa-plus"></i> Add New User</a>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Username</th>
                                                <th>Email</th>
                                                <th class="text-center">Department</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>

                                            <tr>
                                            <?php
                                                        // Create database connection using config file
                                                        include_once("../config.php");

                                                        // Fetch all users data from database
                                                        $result = mysqli_query($conn, "SELECT * FROM users");
                                                        ?>


                                                        <?php
                                                    while($user_data = mysqli_fetch_array($result)) {


                                            echo"<tbody>";
                                            echo"<tr>";
                                            echo "<td class='text-center text-muted'>$user_data[username]</td>";
                                            echo "<td>";
                                            echo "<div class='widget-content p-0'>";
                                            echo "<div class='widget-content-wrapper'>";
                                            echo "<div class='widget-content-left mr-3'>";
                                            echo "<div class='widget-content-left'>";
                                          
                           
                                            if($user_data['image'] == ''){
                                                echo '<img width="40" style="border-radius:50%;" src="../images/default-avatar.png">';
                                            }else{
                                                echo '<img width="40" style="border-radius:50%;" src="../uploaded_img/'.$user_data['image'].'">';
                                            }
                               
                                            echo "</div>";
                                            echo "</div>";
                                            echo "<div class='widget-content-left flex2'>";
                                            echo "<div class='widget-heading'>$user_data[email]";
                                            echo "<div class='widget-subheading opacity-7'>Teacher</div>";
                                            
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</td>";
                                            echo "<td class='text-center'>";
                                            echo "<div class='widget-heading'>$user_data[department]";
                                            echo "</td>";
                                            echo "<td class='text-center'>";
                                            echo "<a class='btn btn-success btn-sm m-1' href='edit.php?id=$user_data[id]'><i class='fa-solid fa-pen-to-square fa-xl'></i> Edit</a>";
                                            echo "<a href='delete.php?id=$user_data[id]' class='btn btn-danger btn-sm m-1'><i class='fa-solid fa-trash'></i> Delete</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "</tr>";
                                            echo "</tbody>";

                                        }

                                        ?>       

                                        </table>

                                    </div>
                                    <div class="d-block text-center card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>


<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>



</body>
</html>