<body>

<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Donate the blood</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    
    <ul class="navbar-nav form-inline my-2 my-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="user/index.php">Home</a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donors<!-- Donor Name -->
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <!--user/index.php user/update.php fa fa-edit -->
          <a class="dropdown-item" href="user/viewdonors.php"><i class="fa fa-user" aria-hidden="true"></i>View donors</a>

          <a class="dropdown-item" href="user/searchdonors.php"><i class="fa fa-user" aria-hidden="true"></i>
          Search donors</a>

          </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Receivers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <!--user/index.php user/update.php fa fa-edit -->
          <a class="dropdown-item" href="user/viewreceivers.php"><i class="fa fa-user" aria-hidden="true"></i>View receivers</a>

          <a class="dropdown-item" href="user/bloodrequired.php"><i class="fa fa-user" aria-hidden="true"></i>
          Add receivers</a>

          </div>
      </li>
      <li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($_SESSION['name'])) echo $_SESSION['name']?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="user/view.php"><i class="fa fa-user" aria-hidden="true"></i>View profile</a>
        <a class="dropdown-item" href="user/update.php"><i class="fa fa-user" aria-hidden="true"></i>Update profile</a>
        <a class="dropdown-item" href="user/logout.php"><i class="fa fa-user" aria-hidden="true"></i>Log out</a>
    </div>
  </li>

    </ul>
  </div>
</nav>
</body>