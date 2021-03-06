<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CSi</title>
    <?php
        session_start();
        require_once "config.php";
    ?>
</head>

<body>
    <!-- navbar -->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#" style="color: aliceblue;">CSI SAKEC</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">HOME</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#events">EVENTS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#team">OUR TEAM</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#gallery">GALLERY</a>
                            </li>
                            <!-- <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Membership
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item active">
                                <a class="nav-link active" href="#contact">CONTACT</a>
                            </li>
                        </ul>
                        <a class="btn main_btn">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navbar ends -->


    <!-- Landing -->
    <section class="home">

        <div class="container text-center">
            <div class="home-heading">
                <h2>Building Technical skills professionally</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt beatae hic harum placeat
                    perferendis totam consectetur dolore alias</p>
            </div>
        </div>
    </section>
    <!-- Landing ends -->

    <!-- Event Timer -->
    <section class="event_time_area">
        <div class="container">
            <div class="event_time_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event_text">
                            <h3>Next Event will Start in</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="timer_inner">
                            <div id="timer" class="timer">
                                <div class="timer__section days">
                                    <div class="timer__number" id="days"></div>
                                    <div class="timer__label">days</div>
                                </div>
                                <div class="timer__section hours">
                                    <div class="timer__number" id="hours"></div>
                                    <div class="timer__label">hours</div>
                                </div>
                                <div class="timer__section minutes">
                                    <div class="timer__number" id="minutes"></div>
                                    <div class="timer__label">Minutes</div>
                                </div>
                                <div class="timer__section seconds">
                                    <div class="timer__number" id="seconds"></div>
                                    <div class="timer__label">seconds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--event timer ends -->

    <!-- about us  -->
    <section id="about" class="p_120">
        <div class="container">
            <div class="welcome row">
                <?php
                    // query for image and description in about us section 
                    $sqlaboutus = "SELECT * FROM `aboutus`";
                    $queryaboutus = mysqli_query($conn, $sqlaboutus);
                    $rowaboutus = mysqli_fetch_assoc($queryaboutus);
                ?>
                <div class="col-lg-5">
                    <div class="about_img">
                        <img src="AboutUs/<?php echo $rowaboutus['photo'];?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="welcome_text">
                        <h3>Welcome to CSI SAKEC</h3>
                        <p><?php echo $rowaboutus['description'];?></p>
                        <a class="btn main_btn_welcome" href="#">View More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about ends -->

    <!-- Our Team  -->
		<section id="team" class="team_area p_120">
        	<div class="container">
				<div class="main_title">
					<h2>OUR CSI SAKEC TEAM</h2>
					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
						price. You may see some for as low as $.17 each.</p>
				</div>
				<div class="spacer" style="height:45px;"></div>
				<?php
					$sqlcoordinator = "SELECT * FROM `coordinator`";
					$querycoordinator = mysqli_query($conn, $sqlcoordinator);
					$number_of_coordinator = mysqli_num_rows($querycoordinator);
                    // Will execute for no of coordinators
					while ($number_of_coordinator > 0) { 
				?>
            	<div class="row team_inner">
				<?php
                        // Will show 4 coordinators in same line for large
                        // TODO: change col-lg-3 and col-sm-6 if you need to change from 4 members in one row
						for ($count = 0;$count<4;$count++,$number_of_coordinator--) {
							if($number_of_coordinator==0){ break;}
							$rowcoordinator = mysqli_fetch_assoc($querycoordinator);
				?>
                	<div class="col-lg-3 col-sm-6">
						<div class="team_item">
							<div class="team_img"><img src="<?php echo "Coordinator_Images/" . trim($rowcoordinator['image']); ?>" alt=""></div>
							<div class="team_name">
								<h4><?php echo $rowcoordinator['name'];?></h4>
							</div>
							<p class="text-uppercase grey-text mb-3"><?php  echo $rowcoordinator['duty'];?></p>
						</div>
                	</div>
				<?php						
						}
				?>
				</div>
				<div class="spacer" style="height:45px;"></div>			
				<?php					
					}
				?>
			</div>
		</section>
    <!-- team ends -->

    <!-- Events -->
    <section id="events" class="p_120">
        <div class="container">
            <div class="main_title">
                <h2>Event Schedule</h2>
                <!-- <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                    price. You may see some for as low as $.17 each.</p> -->
            </div>
            <div class="event_schedule_inner">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'London')">Upcoming AND RECENT
                        events</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">All Events</button>
                </div>

                <div id="London" class="tabcontent" style="display:block;">
                    <div class="row ">
                        <?php
                            // This is for Upcoming AND Recent Events
                            // TODO: change $sqlevent according to your needs
                            date_default_timezone_set('Asia/Kolkata');
                            $currentdate = date("Y-m-d");
                            $sqlevent = "SELECT * FROM `event` WHERE `e_from_date` >= '$currentdate'";
                            $queryevent = mysqli_query($conn, $sqlevent);
                            if (mysqli_num_rows($queryevent) > 0) {
                                while ($rowevent = mysqli_fetch_assoc($queryevent)) {
                                    if($rowevent['live']==1){
                                        $eventdate = date("d F Y", strtotime($rowevent['e_from_date']));
                        ?>
                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                            <div class="posts">
                                                <img src="<?php echo "Banner/".trim($rowevent['banner']);?>" alt="" class="img-fluid">
                                                <div class="blog-inner">
                                                    <h2><a href="#"><?php echo $rowevent['title']; ?></a></h2>
                                                    <div class="mh-blog-post-info">
                                                        <p>
                                                            <strong>Event on </strong>
                                                            <!-- <span class="event_date"> 24 </span>
                                                            <span class="event_date">April 2021</span> -->
                                                            <span class="event_date"><?php echo $eventdate;?></span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <?php echo $rowevent['e_description']; ?>
                                                    </p>
                                                    <a class="btn main_btn" type="submit">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>

                <div id="Paris" class="tabcontent">
                    <div class="row">
                        <?php
                            // TODO: change $sqlevent according to requirement
                            $sqlevent = "SELECT * FROM `event` WHERE `e_from_date`<'$currentdate'";
                            $queryevent = mysqli_query($conn, $sqlevent);
                            if (mysqli_num_rows($queryevent) > 0) {
                                while ($rowevent = mysqli_fetch_assoc($queryevent)) {
                                    if($rowevent['live']==1){
                                        $eventdate = date("d F Y", strtotime($rowevent['e_from_date']));
                        ?>
                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                            <div class="posts">
                                                <img src="<?php echo "Banner/".trim($rowevent['banner']);?>" alt="" class="img-fluid">
                                                <div class="blog-inner">
                                                    <h2><a href="#"><?php echo $rowevent['title']; ?></a></h2>
                                                    <div class="mh-blog-post-info">
                                                        <p>
                                                            <strong>Event on </strong>
                                                            <span class="event_date"><?php echo $eventdate;?></span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <?php echo $rowevent['e_description']; ?>
                                                    </p>
                                                    <a class="btn main_btn" type="submit">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event ends -->

    <!-- gallery starts -->
    <section id="gallery" class="p_120">
        <div class="container">
            <div class="main_title">
                <h2>Gallery</h2>
                <!-- <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                    price. You may see some for as low as $.17 each.</p> -->
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
						$sqlgallery = "SELECT `image` FROM `gallery` WHERE `status`=1";
						$querygallery = mysqli_query($conn, $sqlgallery);
						$number_of_images_gallery = mysqli_num_rows($querygallery);
						for($i = 0;$i < $number_of_images_gallery; $i++) {
					?>
						    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" <?php if($i==0)echo 'class="active"';?>></li>
					<?php
						}
					?>
                </ol>
                <div class="carousel-inner">
                    <?php
						for($i = 0;$i < $number_of_images_gallery; $i++) {
							$rowgallery = mysqli_fetch_assoc($querygallery);
					?>
                            <div class="carousel-item<?php if($i==0) echo ' active';?>" <?php if($i==0) echo 'data-interval="10000"';?>>
                                <img src="Gallery_Images/<?php echo $rowgallery['image'];?>" class="d-block w-100" alt="...">
                            </div>
					<?php
						}
					?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- gallery ends -->

    <!-- Footer -->
    <section id="contact">
        <footer class="footer-area p_120 p_60">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_footer_section tp_widgets">
                            <h6 class="footer_title">Page Links</h6>
                            <ul class="list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single_footer_section tp_widgets">
                            <h6 class="footer_title">Contact Us</h6>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div class="guery">
                                <form action="">
                                    <div class="input-group d-flex flex-row">
                                        <input type="text" name="name" placeholder="Your Name"
                                            onfocus="this.placeholder=''" onblur="this.placeholder='Name'"
                                            autocomplete="off" required>
                                        <input type="email" name="name" placeholder="Your Email"
                                            onfocus="this.placeholder=''" onblur="this.placeholder='Email'"
                                            autocomplete="off" required>
                                        <textarea type="email" name="name" placeholder="Message"
                                            onfocus="this.placeholder=''" onblur="this.placeholder='Message'"
                                            autocomplete="off" required></textarea>
                                        <button class="btn sub-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                        <div class="single_footer_section tp_widgets">
                            <h6 class="footer_title">Top Products</h6>
                            <ul class="list">
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Managed Website</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0">
                        Copyright ?? <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with ??? by Israil
                    </p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a><a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </footer>
    </section>
    <!-- footer ends -->

    <!-- ??? -->
    <script src="plugins/fontawesome-free-5.15.3-web/js/all.min.js"></script>
    <script src="plugins/jquery-3.4.1.min.js"></script>
    <script src="plugins/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>