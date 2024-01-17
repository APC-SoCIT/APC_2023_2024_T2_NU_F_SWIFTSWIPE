<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css.css">
     <link rel="icon" type="image/x-icon" href="../image/slogo1.png">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: white;">

<nav class="navbar fixed-top " style="background-color: white; box-shadow: 0 0 10px 5px rgba(0,0,0,0.1);">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="../image/slogo1.png"
        class="me-2"
        height="50"
        alt="nu logo"
        loading="lazy"
      />
      <large>Swiftswipe</large>
</div>
  </div>
</nav>

          <div class="d-flex min-vh-90 justify-content-center align-items-center m-5">
          <div class="p-3" style="background-color: white;">
          <form action="signup-check.php" method="post">


          <h1 class="text-center bluetext mt-4">REGISTER</h1>
          
          <div class="p-1 bd-highlight">
          <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
          <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
     </div>
   

     <div class="d-flex flex-row bd-highlight mb-1">
     <div class="p-2 bd-highlight">
          <label>First Name</label>
          <?php if (isset($_GET['fname'])) { ?>
          <input type="text" 
          name="fname" 
          required
          class="inputtext2"
          placeholder="Last Name"
          value="<?php echo $_GET['fname']; ?>"><br>
          <?php }else{ ?>
          <input type="text" 
          required
          name="fname" 
          class="inputtext2"
          placeholder="First Name">
          <?php }?>
     </div>
     <div class="p-2 bd-highlight">
          <label>Last Name</label>
          <?php if (isset($_GET['lname'])) { ?>
          <input type="text" 
          class="inputtext2"
          required
          name="lname" 
          placeholder="Last Name"
          value="<?php echo $_GET['lname']; ?>"><br>
          <?php }else{ ?>
          <input type="text" 
          required
          name="lname" 
          class="inputtext2"
          placeholder="Last Name">
          <?php }?>
     </div>
     </div>
     <div class="d-flex flex-column bd-highlight mb-3">          
     <div class="p-2 bd-highlight">
          <label>Email</label>
          <?php if (isset($_GET['uname'])) { ?>
          <input type="email" 
               name="uname" 
               required
               class="inputtext2"
               placeholder="Email"
               value="<?php echo $_GET['uname']; ?>">
               <?php }else{ ?>
               <input type="text" 
               name="uname" 
               required
               class="inputtext2"
               placeholder="Email">
               <?php }?>
          </div>
          <div class="p-2 bd-highlight">
               <label>Password</label>
               <input type="password" 
               required
               class="inputtext2"
               name="password" 
               placeholder="Password">
          </div>
          <div class="p-2 bd-highlight">
               <label>Confirm Password</label>
               <input type="password" 
               class="inputtext2"
               name="re_password" 
               required 
               placeholder="Confirm Password">
          </div>
          </div>
          <div class="p-2 bd-highlight">
               <button class="button1" type="submit">Sign Up</button>
               </div>
               <div class="p-2 bd-highlight text-center">
              <p>Already have an Account? <a href="../index.php" class="ablue">Login</a></p>
               </div>

          </form>
          </div>
               </div>


               <nav class="fixed-bottom text-center text-lg-start">

<div class="text-center p-3 gray" style="background-color: white; color:#D4D6DC;" >
  <p>This is not an official website of National University © Swiftswipe 2024 Copyright </p>
</div>

</nav>
</body>
</html>