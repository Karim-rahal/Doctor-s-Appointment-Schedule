
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<header>
        <nav>
            <div class="NavBar">
                
            <ul class="Nav-Ul">
                <li class="Nav-List list-right"><img src="images/logo-pic-2.png" class="logo-pic" alt="logo" height="30px" width="30px"></li>
                <li class="Nav-List Home">
                    <a href="Home.php" class="Home">HOME</a>
                    
                </li>
                <li class="Nav-List Nav-Content">
                    <a href="OurServices.php" class="Nav-Content">OUR SERVICES</a>
                    
                </li>
                <li class="Nav-List Nav-Content">
                    <a href="Doctors.php" class="Nav-Content">DOCTORS</a>
                    
                </li>
                <li class="Nav-List More" id="MoreMenu">
                   <p style="margin:0;" class="Nav-List Nav-Content">MORE</p> 
                    <ul id="DropdownMenu-More" class="dropdown-menu-more">
                        <li><a href="Pricing.php">PRICING</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contactUs.php">CONTACT US</a></li>
                        <li><a href="aboutUs.php">ABOUT US</a></li>
                        <li><a href="PatientsReviews.php">Patients Reviews</a></li>
                        <?php if (isset($_SESSION["email"])) {
                            echo"<li><a href='myAppointments.php'>My Appointments</a></li>";
                        }
                        ?>
                        
                    </ul></li> 
                </li >
                <li class="Nav-List Info">
                    <p class="Number-text">+961 71 168 748</p>
                    <a href="mailto:karim.rahal.2017@gmail.com" class="contact-text">jointheal@info</a>
                </li>
                <li class="Nav-List Menu"><img src="images/menu.svg" id="MenuImage"alt="Menu">
                 </li> 
                 
            </ul>
            
        </div>
        </nav>
        </header>
        <div id="Right-Menu" class="right-menu">
        <ul id="Right-Menu-List" class="right-menu-list">

                <li class="Menu-List x-circle"><img src="images/x.svg" id="X-Circle" alt="x-circle"></li>
                <?php if (isset($_SESSION["email"])) {
                    $name=$_SESSION["FullName"];
                    echo"
                    <div class='account'>
                    <img src='images/person.svg' class='person-logo' alt='person-pic'> 
                    <h3><a href='profile.php'>$name</a></h3>
                    </div>
                    <div class='account'>
                    <img src='images/box-arrow-left.svg' class='person-logo' alt='logout-pic'>
                    <h3><a href='Logout.php'> Log Out</a></h3>
                    </div>";


                }
                else {
                    echo"
                    <div class='account'>
                    <img src='images/box-arrow-right.svg' class='person-logo' alt='login-pic'> 
                    <h3><a href='Login.php'> Log In</a></h3>
                    </div>
                    <div class='account'>
                    <img src='images/person-add.svg' class='person-logo' alt='signup-pic'>
                    <h3><a href='Signup.php'> Sign Up</a></h3>
                    </div> 
                    ";
                }
                
                
                ?>
                  

                  
                
                <li class="Menu List"><img src="" alt=""></li>
                <li class="Menu-List"><img src="images/logo-pic-2.png" class="logo-pic-menu" alt="logo-pic"></li>
                <li class="Menu-List"><p>Physiotherapy unlocks your body's full potential—relieving pain, restoring movement, and empowering you to move stronger, feel better, and live without limits!</p></li>
                <li class="Menu-List"><h2 class="noExtraSpace">+961 71 168 748</h2></li>
                <li class="Menu-List"> <p class="noExtraSpace">Email us:</p> <a href="mailto:karim.rahal.2017@gmail.com" class="contact-text">jointheal@info</a></li>
                <br>
                <li class="Menu-List"><h2 class="noExtraSpace">Working hour</h2>
                    <p class="noExtraSpace">Mon – Fri: 9 a.m. – 5 p.m.</p>
                    <br>
                    <p class="noExtraSpace">Sat – Sun: Closed</p>
                    <br><br>
                    <p class="noExtraSpace">650 Hamra St,</p>
                    <br>
                    <p class="noExtraSpace">Beirut 1103, Lebanon</p>
                    <br><br>
                    <p >Follow us:
                        <a href="" class="logo-links"> <img src="images/instagram.svg" alt="instagram-logo"></a>
                        <a href="" class="logo-links"> <img src="images/linkedin.svg" alt="linkedin-logo"></a>
                       </p>
                </li>
            </ul>
               
    </div>
        