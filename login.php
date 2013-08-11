<?php
	$pagetitle = 'login';
	include('v-template/class.utility.php');
	$utility = new utility();
	$metaTags =  $utility->getMetatags('login');   //function for meta tags

	include "v-template/header.php";
?>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-comments page-title-icon"></i>
                        <h2>Login /</h2>
                        <p>This is the place where you can login for connct to us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login -->
        <div class="login_page container">
            <div class="row">
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <a class="all" id="active-imgs" href="#"></a> 
                    </h4>
                </div>
                
                <div class="left_text span13">
                	<h4> COMPANY</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                
                <div class="login_form span5">
                	<h4> LOGIN</h4>
                    <form method="post" action="#">
                    	<label for="name" class="nameLabel">Category</label>
                          	<select name="category">
                            	<option id="name" value="client"> Client</option>
                                <option id="name" value="advisor"> Advisor</option>
                            </select>
                        <label for="name" class="nameLabel">Username</label>
                          <input id="name" type="text" name="username" placeholder="Enter your username...">
                        <label for="email" class="emailLabel">Password</label>
                          <input id="email" type="text" name="password" placeholder="Enter your password...">
                        
                        <button type="submit">LOGIN</button>
                    </form>
                </div>
            </div>

        </div>

<?php include "v-template/footer.php"; ?>