
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

<!doctype html>
<html lang="en">

<head>
<link rel="icon" href="../logo/logosystem.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet"></head>
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
                                            <a type="button" href="update_profile.php" tabindex="0" class="dropdown-item">Profile</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a  href="home.php?logout=<?php echo $id; ?>" type="button" tabindex="0" class="dropdown-item">Logout</a>
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
                                    <a href="home.php" class="mm-active">
                                    <i class="fa-solid fa-table-columns"></i>
                                        Dashboard
                                    </a>
                                </li>
                            
                                <li class="app-sidebar__heading">School</li>
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
                                    <a href="archive.php">
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
                                <a href="../user-manage/index.php">
                                    <i class="fa-solid fa-user"></i>
                                        User
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Tap System</li>
                                <li>
                                <a href="time-in.php">
                                    <i class="fa-solid fa-circle-check"></i>
                                        </i>Time In
                                    </a>
                                </li>
                                <li>
                                <a href="time-out.php">
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
                                    <i class="fa-solid fa-user-tie"></i>
                                    </div>
                                    <div>Welcome, <?php echo $fetch['username']; ?>
                                        <div class="page-title-subheading">Today is <?php echo date('F d, Y '); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
      
                                </div>    </div>
                        </div>            <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            
                                            <div class="widget-heading">Admin</div>
                                            <div class="widget-subheading">Total Admin</div>
                                        </div>
                                        <div class="widget-content-right">
                                        <?php
                                            include_once("../config.php");
                                            $result = mysqli_query($conn, "SELECT id FROM admint ORDER BY id");
                                            $row = mysqli_num_rows($result);
                                            echo '
                                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                            ';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                        <div class="widget-heading">Students</div>
                                            <div class="widget-subheading">Total students of Senior High School</div>
                                        </div>
                                        <div class="widget-content-right">
                                        <?php
                                            include_once("../config.php");
                                            $result = mysqli_query($conn, "SELECT id FROM student ORDER BY id");
                                            $row = mysqli_num_rows($result);
                                            echo '
                                            <div class="widget-numbers text-white"><span>'.$row.'</span></div>
                                            ';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                        <div class="widget-heading">User</div>
                                            <div class="widget-subheading">Total User Registered</div>
                                        </div>
                                        <div class="widget-content-right">
                                        <?php
                                        include_once("../config.php");
                                        $result = mysqli_query($conn, "SELECT id FROM users ORDER BY id");
                                        $row = mysqli_num_rows($result);
                                        echo '<div class="widget-numbers text-white"><span>'.$row.'</span></div>';
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
         
                        </div>
        




                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Student Time In
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Student Number</th>
                                                <th>Name</th>
                                                <th class="text-center">Strand</th>
                                                <th class="text-center">Section</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                            </thead>

                                            <tr>
                                            <?php
                                                        // Create database connection using config file
                                                        include_once("../config.php");

                                                        // Fetch all users data from database
                                                        $result = mysqli_query($conn, "SELECT * FROM attendance_in ORDER BY id DESC LIMIT 3");
                                                        ?>


                                                        <?php
                                                    while($user_data = mysqli_fetch_array($result)) {


                                            echo"<tbody>";
                                            echo"<tr>";
                                                        echo "<td class='text-center text-muted'>$user_data[student_no]</td>";
                                                        echo "<td>";
                                                        echo "<div class='widget-content p-0'>";
                                                        echo "<div class='widget-content-wrapper'>";
                                                        echo "<div class='widget-content-left mr-3'>";
                                                        echo "<div class='widget-content-left'>";
                                                        if($user_data['pp'] == ''){
                                                            echo '<img width="40" style="border-radius:50%;" src="../images/default-avatar.png">';
                                                        }else{
                                                            echo '<img width="40" style="border-radius:50%;" src="../uploaded_img/'.$user_data['pp'].'">';
                                                        }
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "<div class='widget-content-left flex2'>";
                                                        echo "<div class='widget-heading'>$user_data[fname] $user_data[lname]</div>";
                                                        echo "<div class='widget-subheading opacity-7'>Grade $user_data[grade]</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</td>";
                                                        echo "<td class='text-center'>$user_data[strand]</td>";
                                                        echo "<td class='text-center'>$user_data[section]</td>";
                                                        echo "<td class='text-center'>";
                                                        echo "<div class='badge badge-success'>Time Out</div>";
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



                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Student Time Out
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Student Number</th>
                                                <th>Name</th>
                                                <th class="text-center">Strand</th>
                                                <th class="text-center">Section</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                            </thead>

                                            <tr>
                                            <?php
                                                        // Create database connection using config file
                                                        include_once("../config.php");

                                                        // Fetch all users data from database
                                                        $result = mysqli_query($conn, "SELECT * FROM attendance_out ORDER BY id DESC LIMIT 3");
                                                        ?>


                                                        <?php
                                                    while($user_data = mysqli_fetch_array($result)) {


                                            echo"<tbody>";
                                            echo"<tr>";
                                                        echo "<td class='text-center text-muted'>$user_data[student_no]</td>";
                                                        echo "<td>";
                                                        echo "<div class='widget-content p-0'>";
                                                        echo "<div class='widget-content-wrapper'>";
                                                        echo "<div class='widget-content-left mr-3'>";
                                                        echo "<div class='widget-content-left'>";
                                                        if($user_data['pp'] == ''){
                                                            echo '<img width="40" style="border-radius:50%;" src="../images/default-avatar.png">';
                                                        }else{
                                                            echo '<img width="40" style="border-radius:50%;" src="../uploaded_img/'.$user_data['pp'].'">';
                                                        }
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "<div class='widget-content-left flex2'>";
                                                        echo "<div class='widget-heading'>$user_data[fname] $user_data[lname]</div>";
                                                        echo "<div class='widget-subheading opacity-7'>Grade $user_data[grade]</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</td>";
                                                        echo "<td class='text-center'>$user_data[strand]</td>";
                                                        echo "<td class='text-center'>$user_data[section]</td>";
                                                        echo "<td class='text-center'>";
                                                        echo "<div class='badge badge-danger'>Time Out</div>";
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

                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">ABM</div>
                                                <div class="widget-subheading">Total Students</div>
                                            </div>
                                            <div class="widget-content-right">
                                            <?php
                                        include_once("../config.php");
                                        $result = mysqli_query($conn, "SELECT id FROM student WHERE strand = 'ABM'");
                                        $row = mysqli_num_rows($result);
                                        echo '<div class="widget-numbers text-success">'.$row.'</div>';
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">STEM</div>
                                                <div class="widget-subheading">Total Students</div>
                                            </div>
                                            <div class="widget-content-right">
                                            <?php
                                        include_once("../config.php");
                                        $result = mysqli_query($conn, "SELECT id FROM student WHERE strand = 'STEM'");
                                        $row = mysqli_num_rows($result);
                                        echo '<div class="widget-numbers text-warning">'.$row.'</div>';
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">HUMMS</div>
                                                <div class="widget-subheading">Total Students</div>
                                            </div>
                                            <div class="widget-content-right">
                                            <?php
                                        include_once("../config.php");
                                        $result = mysqli_query($conn, "SELECT id FROM student WHERE strand = 'HUMSS'");
                                        $row = mysqli_num_rows($result);
                                        echo '<div class="widget-numbers text-danger">'.$row.'</div>';
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
</body>
</html>
