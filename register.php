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
        <a class="nav-link" href="login.php">Login</a>
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
<br><br><br><br>




<form class="" action="index.html" method="post" style="width:60%;margin:auto;margin-top:2cm;border:2px solid lightgrey;padding:1.5cm;">
  <div class="form-group">
    <h3 style="color:red;margin-bottom:1cm" class="text-center"><b>Register</b></h3>
      <label>Full Name</label>
      <input type="text" name="fname" class="form-control" autocomplete="off">
      <br>
      <label>USN</label>
      <input type="text" name="usn" class="form-control" autocomplete="off">
      <br>
      <label>Email</label>
      <input type="email" name="email" class="form-control" autocomplete="off"><br>
      <label>Phone</label>
      <input type="text" name="phone" class="form-control" autocomplete="off">
      <br>
      <label>Blood group</label>
      <input type="text" name="bgroup" class="form-control" autocomplete="off">
      <br>
      <label>Password</label>
      <input type="password" name="password" class="form-control" autocomplete="off"><br>
      <label>Confirm password</label>
      <input type="password" name="password2" class="form-control autocomplete="off"">
      <br>

      <label>City</label>
      <input type="text" name="city" class="form-control" autocomplete="off"><br>
      <label>Pincode</label>
      <input type="text" name="pincode" class="form-control" autocomplete="off"><br>
      <br>
      <input type="submit" name="register"  value="Register" class="btn btn-success">
      <br><br>
      <p><a href="login.php">Alraedy registered.?<br>Click here to login </a></p>

  </div>

</form>
