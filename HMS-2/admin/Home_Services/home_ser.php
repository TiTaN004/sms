<?php 
  require_once("../../Includes/config.php"); 
  require_once("../../Includes/session.php"); 
  if ($logged==false) {
       header("Location:../../login.php");
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="home_ser.css">
    <link rel="shortcut icon" href="Logo3.jpg">

    <script>
        vard = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>


    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include '../sidebar.php'; ?>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="neighbourhood">Home Services</span>
            </div>
            
            <div class="profile-details">

                <span class="admin_name"><?php echo $_SESSION["username"]; ?></span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
        <div class="home-content">

            <div class=" loca-box">
                <div class="title1">Security</div> 
                
                <div class=" staff-security">
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Bahadur</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                </div>
                <div class="title1">Packers and Movers</div> 
                <div class=" staff-security">
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Bahadur</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                    <div class=" security-box">
                        <div class="sec-man-img">
                            <img src="21104.png" alt="image" height="200px">
                        </div>
                        <div class="sec-man-det">
                            <div class="sec-man-name">Rajesh</div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>



    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>