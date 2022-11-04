    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
        nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 70px;
  width: 100%;
  display: flex;
  align-items: center;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
}
nav .logo {
  display: flex;
  align-items: center;
  margin: 0 24px;
}
.logo .menu-icon {
  color:black;
  font-size: 24px;
  margin-right: 14px;
  cursor: pointer;
}
.logo .logo-name {
  color:black;
  font-size: 22px;
  font-weight: 500;
}

.logo .logo-name2 {
  color:white;
  font-size: 22px;
  font-weight: 500;
}

.logo .menu-icon2{
    color:white;
  font-size: 22px;
  font-weight: 500;
}
nav .sidebar {
  position: fixed;
  top: 0;
  left: -100%;
  height: 100%;
  width: 260px;
  padding: 20px 0;
  background-color: #1B2942!important;
  box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}
nav.open .sidebar {
  left: 0;
}
    </style>

<div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 285px;">
       <nav>
 <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Shan Tailors</span>

      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon2"></i>
                  <span class="logo-name2">Shan Tailors </span>

        </div>

    
    <hr>
    
    <ul class="nav nav-pills flex-column mb-auto">
        
      <!-- <h5>Orders</h5>-->
      <!-- <hr>-->
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link active" aria-current="page">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="dashboard.php"></use></svg>
      Dashboard
      </a>
      </li>
       
      <!--<li>-->
      <!--  <a href="index.php" class="nav-link text-white">-->
      <!--    <svg class="bi me-2" width="16" height="16"><use xlink:href="index.php"></use></svg>-->
      <!--    Order-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="customer.php" class="nav-link text-white">-->
      <!--    <svg class="bi me-2" width="16" height="16"><use xlink:href="customer.php"></use></svg>-->
      <!--    Customers-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="vieworder.php" class="nav-link text-white">-->
      <!--    <svg class="bi me-2" width="16" height="16"><use xlink:href="vieworder.php"></use></svg>-->
      <!--     View Order-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="dueorder.php" class="nav-link text-white">-->
      <!--    <svg class="bi me-2" width="16" height="16"><use xlink:href="dueorder.php"></use></svg>-->
      <!--    Due Order-->
      <!--  </a>-->
      <!--</li>-->
      <!--<li>-->
      <!--  <a href="viewoutstand.php" class="nav-link text-white">-->
      <!--    <svg class="" width="16" height="16"><use xlink:href=""></use></svg>-->
      <!--     View Outstanding-->
      <!--  </a>-->
      <!--</li>-->
   
       <li>
        <a href="rentcoats.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="rentcoats.php"></use></svg>
           Products
        </a>
      </li>
      
      <!--<li>-->
      <!--  <a href="addorderr.php" class="nav-link text-white">-->
      <!--    <svg class="bi me-2" width="16" height="16"><use xlink:href="addorderr.php"></use></svg>-->
      <!--     Add Rent Order-->
      <!--  </a>-->
      <!--</li>-->
      
       
       <li>
        <a href="users.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="users.php"></use></svg>
           Users
        </a>
      </li>
       <li>
        <a href="viewrentorder.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="viewrentorder.php"></use></svg>
           Invoices
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#"></use></svg>
             Weddings
        </a>
      </li>
       <li>
        <a href="checkproduct.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="checkproduct.php"></use></svg>
           Check Product
        </a>
      </li>
       <li>
        <a href="pricelist.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="pricelist.php"></use></svg>
           Price List
        </a>
      </li>
      
       <li>
        <a href="reports.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="reports.php"></use></svg>
           Reports
        </a>
      </li>
      
       
      
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>   <?php echo htmlspecialchars($_SESSION["username"]); ?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>
  </nav>

   <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".menu-icon2");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>


