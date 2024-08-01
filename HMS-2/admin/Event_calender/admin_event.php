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

    <link rel="stylesheet" href="admin_event.css">
    <link rel="shortcut icon" href="Logo3.jpg">

    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php 
        include "../sidebar.php";
    ?>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="Announcement">Events</span>
            </div>
            
            <div class="profile-details">

                <span class="admin_name"><?php echo $_SESSION["username"]; ?></span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
        <div class="home-content">
            <div class="year-box">
                <div class="year">2022</div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">13</div>
                            <div class="event-month">Jan</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Lohri</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">8:00 pm</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">14</div>
                            <div class="event-month">Jan</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Makar Sankranti</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">10:00 am</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">26</div>
                            <div class="event-month">Jan</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Republic Day</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">9:00 am</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">1</div>
                            <div class="event-month">Mar</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Maha Shivratri</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">9:00 pm</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">17</div>
                            <div class="event-month">Mar</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Holika Dahana</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">9:00 pm</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="event">
                    <div class="event-left">
                        <div class="event-day">
                            <div class="event-date">18</div>
                            <div class="event-month">Mar</div>
                        </div>
                    </div>
                    <div class="event-right">
                        <h3 class="event-title">Holi</h3> 
                        <div class="event-time">
                            <i class="bx bxs-time" ></i>
                            <span class="time-text">9:00 am</span>
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