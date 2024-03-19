<nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="aas">
                <!-- <form action="" class="ff">
                <input type="submit">
                <input type="submit">
                </form> -->
                <div class="img">
                    <img src="images/admin.jpg" alt="">
                </div>
                <div class="cor-data">
                    <!-- <h2>User name</h2> -->
                    <h2><?= $_SESSION['username'] ?></h2>
                    <h2>Admin<i class="fa-solid fa-caret-down"></i></h2>
                </div>
               
            </div>
        </nav>|