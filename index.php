<?php
	$pagetitle = 'home';
	include('v-template/class.utility.php');
	$utility = new utility();
	$metaTags =  $utility->getMetatags('index');   //function for meta tags

	include "v-template/header.php";
	include "v-template/slider.php";
	
?>

        <!-- Site Description -->
        <div class="presentation container">
            <h2>We are <span class="violet">Company name</span>,a real state business agency.</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <!-- Services -->
        <div class="what-we-do container">
            <div class="row">
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-eye-open"></i>
                    </div>
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.php">Read more</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-table"></i>
                    </div>
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.php">Read more</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-magic"></i>
                    </div>
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.php">Read more</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-print"></i>
                    </div>
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.php">Read more</a>
                </div>
            </div>
        </div>

        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
                <h3>Services</h3>
            </div>
            <div class="row">
                <div class="work span3">
                    <img src="assets/img/portfolio/images (1).jpg" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.php"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="assets/img/portfolio/l1.jpg" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="assets/img/portfolio/work2.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.php"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="assets/img/portfolio/mutual-funds-brokerage-accounts.jpg" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.php"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="assets/img/portfolio/images (1).jpg" alt="">
                    <h4>Sit Lorem Ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="assets/img/portfolio/work4.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.php"><i class="icon-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials container">
            <div class="testimonials-title">
                <h3>Testimonials</h3>
            </div>
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                        <div class="tab-content">
                            <div class="tab-pane active" id="A">
                                <img src="assets/img/testimonials/1.jpg" title="" alt="">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                            </div>
                            <div class="tab-pane" id="B">
                                <img src="assets/img/testimonials/2.jpg" title="" alt="">
                                <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                            </div>
                            <div class="tab-pane" id="C">
                                <img src="assets/img/testimonials/3.jpg" title="" alt="">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                            </div>
                            <div class="tab-pane" id="D">
                                <img src="assets/img/testimonials/1.jpg" title="" alt="">
                                <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                            </div>
                        </div>
                       <ul class="nav nav-tabs">
                           <li class="active"><a href="#A" data-toggle="tab"></a></li>
                           <li class=""><a href="#B" data-toggle="tab"></a></li>
                           <li class=""><a href="#C" data-toggle="tab"></a></li>
                           <li class=""><a href="#D" data-toggle="tab"></a></li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>


<?php include "v-template/footer.php"; ?>