<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src= "logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/vertical-logo.svg" alt="prontonet logo">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3></h3>
      </li>
      <li>
        <a href="">
          <span>User Profile</span>
        </a>
      </li>
      <li>
        <a href="">
          <span>Current Bundle</span>
        </a>
      </li>
      <li>
        <a href="#0">
          <span>Make Payments</span>
        </a>
      </li>
      <li class="menu-heading">
        <h3></h3>
      </li>
         <li>
        <a href="#0">
          <span>Data Usage</span>
        </a>
              <li>
        <a href="#0">
          <span>Faq</span>
        </a>
      </li>
            <li>
        <a href="#0">
          <span>Contact Us</span>
        </a>
      </li>
      </li>
      <li>
      
      <li>
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
      <span class="greeting"><?php echo $_SESSION['username']?></span>
      
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
</section>
