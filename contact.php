<?php
	$pagetitle = 'contact-us';
	include('v-template/class.utility.php');
	$utility = new utility();
	$metaTags =  $utility->getMetatags('contact');   //function for meta tags

	include "v-template/header.php";
?>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a> nisl ut aliquip ex ea commodo consequat.</p>
                    <form method="post" action="assets/sendmail.php">
                        <label for="name" class="nameLabel">Name</label>
                          <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Email</label>
                          <input id="email" type="text" name="email" placeholder="Enter your email...">
                        <label for="subject">Subject</label>
                          <input id="subject" type="text" name="subject" placeholder="Your subject...">
                        <label for="message" class="messageLabel">Message</label>
                          <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>We Are Here</h4>
                    
                    	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kolkata,+West+Bengal,+India&amp;aq=0&amp;oq=kolkata&amp;sll=37.0625,-95.677068&amp;sspn=54.928982,79.013672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Kolkata,+West+Bengal,+India&amp;aq=0&amp;oq=kolkata&amp;sll=37.0625,-95.677068&amp;sspn=54.928982,79.013672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    
                    
                    <h4>Address</h4>
                    <p>Kolkata <br> 10100, Park Street</p>
                    <p>Phone: 1234567890</p>
                </div>
            </div>
        </div>


<?php include "v-template/footer.php"; ?>