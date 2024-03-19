<div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Admin Pannel</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user-list.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Manage Users</span>
                </a>
            </li>
            <li>
                <a href="country-list.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Country list</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name"> Data Analytics</span>
                </a>
            </li> -->
            <li>
                <a href="state-list.php">
                    <!-- <i class='bx bx-coin-stack'></i> -->
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">State List</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Total Data</span>
                </a>
            </li> -->
            <li>
                <a href="city-list.php">
                    <!-- <i class='bx bx-user'></i> -->
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">City List</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Favrorites</span>
                </a>
            </li> -->
            <li>
                <a href="category-list.php">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Manage Category</span>
                </a>
            </li>
            <li>
                <a href="block-list.php">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Manage Blocks</span>
                </a>
            </li>
            <li>
                <a href="enquiry-list.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Enquiry List</span>
                </a>
            </li>
            <li>
                <a href="page-list.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Manage Slider</span>
                </a>
            </li>
            <li>
                <a href="page-list.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Manage Pages</span>
                </a>
            </li>
            <li class="log_out">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>


    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>