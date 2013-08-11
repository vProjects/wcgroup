<?php
	$pagetitle = 'about-us';
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
                    <h4>1 . LIFE to be INSURED</h4>
                     <label for="name" class="nameLabel"><b>Title</b></label>
                    <div class="radio_section">
                    <input type="radio" class="radio">
                    <label for="name" class="nameLabel mynamelabel">Mr.</label>
                    <input type="radio" class="radio" >
                    <label for="name" class="nameLabel mynamelabel">Mrs.</label>
                    <input type="radio" class="radio" >
                    <label for="name" class="nameLabel mynamelabel">Ms.</label>
                    <input type="radio" class="radio" >
                    <label for="name" class="nameLabel mynamelabel">Dr.</label>

                    </div>
                        <label for="name" class="nameLabel">FirstName</label>
                          <input id="name" type="text" name="name" placeholder="Enter your firstname...">
                        <label for="email" class="emailLabel">MiddleName</label>
                          <input id="email" type="text" name="email" placeholder="Enter your middlename...">
                        <label for="subject">LastName</label>
                          <input id="subject" type="text" name="subject" placeholder="Enter your lastname...">
                       	
                        <label for="name" class="nameLabel">Date Of Birth</label>
                          <input id="name" type="text" name="name" placeholder="Enter DOB...">
                        <label for="email" class="emailLabel">Father/Spouse's Name </label>
                          <input id="email" type="text" name="email" placeholder="Enter your Father/Spouse's Name ...">
                         <label for="name" class="nameLabel"><b>Gender</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Male</label>
                            <input type="radio" class="radio" >
                            <label for="name" class="nameLabel mynamelabel">Female</label>
                            </div>
                           <label for="name" class="nameLabel"><b>Marital Status</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Single</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Married</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Widow</label>
                            <input type="radio" class="radio" >
                            <label for="name" class="nameLabel mynamelabel">Divorce</label>
                            </div> 
                           <label for="name" class="nameLabel"><b>Occupation</b></label>
                            <div class="radio_section_occupation">
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Business</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Service</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel" style="width:75px;">Professional</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Retired</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Student</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Houswife</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Agriculture</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Driver</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel" style="width:100px;">Armed Forces</label>
                            <input type="radio" class="radio">
                            <label for="name" class="nameLabel mynamelabel">Police</label>
                            <input type="radio" class="radio" >
                            <label for="name" class="nameLabel mynamelabel">Others</label>
                            </div>    
                        <label for="subject">Name of Employer / Business </label>
                          <input id="subject" type="text" name="subject" placeholder="Your Name of Employer / Business ...">
                        <label for="name" class="nameLabel">Nature Of Business</label>
                          <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Designation</label>
                          <input id="email" type="text" name="email" placeholder="Enter your designation...">
                        <label for="subject">Nature Of Duties</label>
                          <input id="subject" type="text" name="subject" placeholder="Your duties...">
                        <label for="name" class="nameLabel">PAN Number</label>
                          <input id="name" type="text" name="name" placeholder="Enter your PAN No...">
                       <h4> 2 . ADDRESS for COMMUNICATION with PROPOSER </h4>   
                         
                        <label for="email" class="emailLabel">House / Plot No.</label>
                          <input id="email" type="text" name="email" placeholder="Enter your House / Plot No....">
                          <label for="email" class="emailLabel">Building Name</label>
                          <input id="email" type="text" name="email" placeholder="Enter your Building Name...">
                          <label for="email" class="emailLabel">Road</label>
                          <input id="email" type="text" name="email" placeholder="Enter your road...">
                          <label for="email" class="emailLabel">Area</label>
                          <input id="email" type="text" name="email" placeholder="Enter your area...">
                          <label for="email" class="emailLabel">Landmark</label>
                          <input id="email" type="text" name="email" placeholder="Enter your landmark...">
                          <label for="email" class="emailLabel">City / Town / Village</label>
                          <input id="email" type="text" name="email" placeholder="Enter your city/town/village...">
                          <label for="email" class="emailLabel">State</label>
                          <input id="email" type="text" name="email" placeholder="Enter your state...">
                          <label for="email" class="emailLabel">PinCode</label>
                          <input id="email" type="text" name="email" placeholder="Enter your pincode...">
                          <label for="email" class="emailLabel">Tel. No. Res. / Office </label>
                          <input id="email" type="text" name="email" placeholder="Enter your Tel. No. ...">
                          <label for="email" class="emailLabel">Mobile</label>
                          <input id="email" type="text" name="email" placeholder="Enter your mobile...">
                          <label for="email" class="emailLabel">Email Id</label>
                          <input id="email" type="text" name="email" placeholder="Enter your email id...">
                        <h4>3 . NOMINEE</h4>
                        <h6>Nominee (if Life to be lnsured and Proposer are the same person)</h6>
                          <label for="email" class="emailLabel">FirstName</label>
                          <input id="email" type="text" name="email" placeholder="Enter your firstname....">
                          <label for="email" class="emailLabel">Date Of Birth</label>
                          <input id="email" type="text" name="email" placeholder="Enter your dob....">
                          <label for="email" class="emailLabel">Relationship with Life to be lnsured </label>
                          <input id="email" type="text" name="email" placeholder="Enter relationship....">
                        <h6> Appointee (if Nominee is a minor---Appointee cannot be Life to be Insured) </h6>  
                        	<label for="email" class="emailLabel">Name</label>
                              <input id="email" type="text" name="email" placeholder="Enter your name....">
                              <label for="email" class="emailLabel">Relationship with Nominee </label>
                              <input id="email" type="text" name="email" placeholder="Enter relationship....">
						
                        <h4>4 . PLAN DETAILS</h4>
                        	<select  for="email" class="emailLabel" name="#">
                            	<option id="email" value="#"> Life Insurance</option>
                                <option id="email" value="#"> Health Insurance</option>
                                <option id="email" value="#"> Mutual Fund</option>
                                <option id="email" value="#"> Renewal Buisness</option>
                                <option id="email" value="#"> Fixed Deposits</option>
                            </select>
                       <h4>5 . PAYMENT DETAILS</h4>
                       		 <label for="name" class="nameLabel"><b>Payment Method</b></label>
                               <div class="radio_section">
                                <input type="radio" class="radio">
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">ECS/Direct Debit</label>
                                <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">Single Premium</label>
                                <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel">Others</label>
                                </div>
                               <label for="email" class="emailLabel">Initial Premium</label> 
                               <input id="email" type="text" name="email" placeholder="Enter premium amount....">
                                <label for="name" class="nameLabel"><b>Policy Duration</b></label>
                                  <div class="radio_section">
                                  <input type="radio" class="radio">
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">5-10 years</label>
                                    <input type="radio" class="radio" >
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">15years</label>
                                       </div>
                                    <label for="name" class="nameLabel"><b>Amount Details</b></label>
                                <div class="radio_section">
                                <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;">Cash(upto 50,000)</label>
                                <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;"> Check/ DD No.</label>
                                  </div>
                               <input id="email" type="text" name="email" placeholder="Enter DD No...."> 
                                <label for="name" class="nameLabel"><b>Do You Have Existing Policy With WC</b></label>
                                <div class="radio_section">
                                 <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel">Yes</label>
                                <input type="radio" class="radio" >
                                <label for="name" class="nameLabel mynamelabel">No</label>
                                </div>
                                <label for="email" class="emailLabel">If Yes Previous Application No.</label>
                          		<input id="email" type="text" name="email" placeholder="Enter your application no...">
                                 <label for="email" class="emailLabel">Issuing Bank</label>
                          		<input id="email" type="text" name="email" placeholder="Enter your Bank name...">
                                <label for="email" class="emailLabel">Date</label>
                          		<input id="email" type="text" name="email" placeholder="Enter your date...">
                                <label for="email" class="emailLabel">Payable at(Branch)</label>
                          		<input id="email" type="text" name="email" placeholder="Enter your branch name...">
                                <label for="email" class="emailLabel">9 Digit MICR code no.</label>
                          		<input id="email" type="text" name="email" placeholder="Enter your MICR code...">
                               <h4 class="heading"> 6. STATUS</h4> 
                                <label for="email" class="emailLabel">Upload</label>
								<input type="file" name="#">
                        	
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>We Are Here</h4>
                    	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kolkata,+West+Bengal,+India&amp;aq=0&amp;oq=kolkata&amp;sll=37.0625,-95.677068&amp;sspn=54.928982,79.013672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Kolkata,+West+Bengal,+India&amp;aq=0&amp;oq=kolkata&amp;sll=37.0625,-95.677068&amp;sspn=54.928982,79.013672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Kolkata,+West+Bengal,+India&amp;t=m&amp;z=10&amp;ll=22.572646,88.363895" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    <h4>Address</h4>
                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                    <p>Phone: 0039 333 12 68 347</p>
                </div>
            </div>
        </div>









<?php include "v-template/footer.php";  ?>