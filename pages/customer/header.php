<!DOCTYPE html>
<html>
<head>
	<title>ProntoNet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="https://png.pngtree.com/png-clipart/20190904/original/pngtree-internet-icon-png-image_4467503.jpg"/>
</head>
<body>
<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src= "logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/vertical-logo.svg" alt="prontonet logo">
    </a>
    <button class="toggle-mob-menu"  style="background-image:linear-gradient(to right, purple, red);" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    
    <ul class="admin-menu" style="background-image:linear-gradient(to right, purple, red);">
    <li style="font-family:arial;">
        <a href="dashboard.php">
          <span>Home</span>
        </a>
      </li>
      <li style="font-family:arial;">
        <a href="">
          <span>User Profile</span>
        </a>
      </li>
      <li> <h6 style="font-family:arial;">
        <a href="subscribe.php">
          <span>SUBSCRIBE</span>
        </a>
        </h6>
      </li>
      <li> <h6 style="font-family:arial;">
        <a href="#0">
          <span>MAKE PAYMENTS</span>
        </a>
        </h6>
      </li>
      <li style="font-family:arial;">
        <a href="makereports.php">
          <span>Make Reports</span>
        </a>
      </li>
         <li style="font-family:arial;">
        <a href="#0">
          <span>Data Usage</span>
        </a>
      <li style="font-family:arial;">
        <a href="#0">
          <span>Faq</span>
        </a>
      </li>
      <li style="font-family:arial;">
        <a href="#0">
          <span>Contact Us</span>
        </a>
      </li>
      <li style="font-family:arial;">
        <a href="logout.php">
          <span>Log Out</span>
        </a>
      </li>  
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
        
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span></span>
        </button>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content">
<section class="search-and-user">
    <div class="admin-profile">
      <span class="greeting">Welcome <?php echo $_SESSION['username']?></span>
      
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
</section>
