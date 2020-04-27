<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container-fluid">
      <div class="media" >
  <img src="https://gec-chamarajanagara.ac.in/wp-content/themes/Gecc_Umbrella/assets/images/Kar-Logo.png"  class="mr-3" alt="..." height="70px" width="85px">
  <div class="media-body">
    <h5 class="mt-0">Department of Computer Science</h5>
<p><a href="https://gec-chamarajanagara.ac.in/" style="text-decoration:none">GEC Chamarajanagar</a></p>
<p style="font-size:10pt;">Affiliated to VTU Belagavi-59001</p>
  </div>
</div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Conatct Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding:0;background-color:black;">
          <a class="dropdown-item" style="margin-top:0.3cm;" href="#">Notes</a>
          <a class="dropdown-item"  style="margin-top:0.3cm;" href="#">Staff</a>
          <a class="dropdown-item" style="margin-top:0.3cm;" href="#">Softwares</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>











<form action="index.php" method="post" style="width:60%;margin:auto;margin-top:2cm;border:2px solid lightgrey;padding:1.5cm;">

  <div class="form-group">
      <h3 style="color:red;margin-bottom:1cm" class="text-center"><b>Login </b></h3>
    <label for="user">Username</label>
    <input type="text" name="username" id="user" class="form-control" autocomplete="off"><br>
    <label for="pass">Password</label>
    <input type="text" name="password" class="form-control" id="pass" autocomplete="off"><br>
    <input type="submit" name="submit" value="Login" class="btn btn-success">
    <br><br>
    <p><a href="register.php">Click here to register </a></p>
    <p><a href="#">Forgot password..? </a></p>

  </div>

</form>
<br><br>
<footer>
<div class="container-fluid footer text-white" style="background:linear-gradient(to left,blue,black)">
  <div class="row">
    <div class="col-lg-6 mt-4">
      <h3>Department of Comp.Science</h3>
      <p>GEC Chamarajanagar-571313</p>
      <hr style="border:2px solid lightgrey;margin-right:5cm">
      <br>
      <h5 style="color:green">Important Links</h5>
      <ul>
        <li> <a href="https://gec-chamarajanagara.ac.in/">GEC Chamarajanagara </a></li>
          <li> <a href="https://vtu.ac.in/en/">VTU-Belagavi </a></li>
            <li> <a href="http://dte.kar.nic.in/index.shtml">DTE </a></li>
              <li> <a href="https://www.aicte-india.org/">AICTE </a></li>
                <li> <a href="admin.php">Admin </a></li>
      </ul>

    </div>

    <div class="col-lg-6 mt-4 sid">
      <h5>Online learning sites</h5><br>
      <ul>
        <li><a href="https://www.w3schools.com/">W3Schools</a></li>
        <li><a href="https://www.tutorialspoint.com/index.htm">Tutorialspoint</a></li>
        <li><a href="https://www.codecademy.com/">Codeacademy</a></li>
        <li><a href="https://stackoverflow.com/">StackOverflow</a></li>
        <li><a href="https://github.com/">GitHub</a></li>
      </ul><br>
      <p>&copy; Copyright 2020,All Rights Reserved.</p>
      <p style="font-size:0.8rem;line-height:12px;">This site is developed by- <span>Siddarudh Jagadal</span></p>
      <p class="ml-4"><a href="tel:+919742242268"><i class="fa fa-phone-square " aria-hidden="true"></i></a>
        <a href="mailto:siddarudhj@gmail.com"><i class="fa fa-envelope " aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/sjagadal"><i class="fa fa-facebook-square " aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/siddarth_jagadl/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </p>

    </div>

  </div>

</div>

</footer>


  </body>
</html>
