<header class="page-header">
  <nav>
    <a href="#0">
      <img class="logo" src="">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      </li>
      <li>
        <a href="createcustomer.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>Create User</span>
        </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#users"></use>
          </svg>
          <span>View User</span>
        </a>
      </li>
      <li>
        <a href="createbundle.php">
            <svg>
              <use xlink:href="#trends"></use>
            </svg>
            <span>Create Bundle</span>
          </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#collection"></use>
          </svg>
          <span>Edit Bundle</span>
        </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#comments"></use>
          </svg>
          <span>View Reports</span>
        </a>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#appearance"></use>
          </svg>
          <span>Edit Profile</span>
        </a>
      </li>
      <li class="menu-heading">
        <h3>Settings</h3>
      </li>
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#settings"></use>
          </svg>
          <span>Settings</span>
        </a>
      </li>
         <li>
        <a href="#0">
          <svg>
            <use xlink:href="#charts"></use>
          </svg>
          <span>User Charts</span>
        </a>
      </li>
      <li>
      
      <li>
        <a href="#0">
          <svg>
            <use xlink:href="#options"></use>
          </svg>
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
