
<div id="dashboard">
	<div id="newsletter">
    	<blockquote>
        	<p>Manage Newsletter of your site</p>
        	<small>It will help <cite title="Source Title">you in managing the contents of your news letter</cite></small>
     </blockquote>
 	
            
		
		
		<div class="contact-us">
            <div class="row">
                <div class="contact-form span7">
                     <h3>WC Client Upload Form </h3>
                    
                    <form method="post" action="v-includes/functions/function.manageclient.php">
                    <h4>BASIC INFORMATION</h4>
                    <input type="hidden" value="1" name="1st_part" />
                             <label for="name" class="nameLabel"><b>Title</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio" name="title" value="Mr.">
                            <label for="name" class="nameLabel mynamelabel">Mr.</label>
                            <input type="radio" class="radio" name="title" value="Mrs.">
                            <label for="name" class="nameLabel mynamelabel">Mrs.</label>
                            <input type="radio" class="radio" name="title" value="Ms.">
                            <label for="name" class="nameLabel mynamelabel">Ms.</label>
                            <input type="radio" class="radio" name="title" value="Dr.">
                            <label for="name" class="nameLabel mynamelabel">Dr.</label>
        
                            </div>
                            <label for="name" class="nameLabel">FirstName</label>
                              <input id="name" type="text" name="f_name" placeholder="Enter your firstname...">
                            <label for="email" class="emailLabel">MiddleName</label>
                              <input id="email" type="text" name="m_name" placeholder="Enter your middlename...">
                            <label for="subject">LastName</label>
                              <input id="subject" type="text" name="l_name" placeholder="Enter your lastname...">
                            
                            <label for="name" class="nameLabel">Date Of Birth</label>
                              <input id="name" type="text" name="dob" placeholder="Enter DOB...">
                            <label for="email" class="emailLabel">Father/Spouse's Name </label>
                              <input id="email" type="text" name="father_name" placeholder="Enter your Father/Spouse's Name ...">
                             <label for="name" class="nameLabel"><b>Gender</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio" name="gender" value="male">
                            <label for="name" class="nameLabel mynamelabel">Male</label>
                            <input type="radio" class="radio" name="gender" value="female">
                            <label for="name" class="nameLabel mynamelabel">Female</label>
                            </div>
                           <label for="name" class="nameLabel"><b>Marital Status</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio" name="mar_status" value="single">
                            <label for="name" class="nameLabel mynamelabel">Single</label>
                            <input type="radio" class="radio" name="mar_status" value="married">
                            <label for="name" class="nameLabel mynamelabel">Married</label>
                            <input type="radio" class="radio" name="mar_status" value="widow">
                            <label for="name" class="nameLabel mynamelabel">Widow</label>
                            <input type="radio" class="radio" name="mar_status" value="divorce">
                            <label for="name" class="nameLabel mynamelabel">Divorce</label>
                            </div> 
                           <label for="name" class="nameLabel"><b>Occupation</b></label>
                            <div class="radio_section_occupation">
                            <input type="radio" class="radio" name="occupation" value="business">
                            <label for="name" class="nameLabel mynamelabel">Business</label>
                            <input type="radio" class="radio" name="occupation" value="service">
                            <label for="name" class="nameLabel mynamelabel">Service</label>
                            <input type="radio" class="radio" name="occupation" value="professional">
                            <label for="name" class="nameLabel mynamelabel" style="width:75px;">Professional</label>
                            <input type="radio" class="radio" name="occupation" value="retired">
                            <label for="name" class="nameLabel mynamelabel">Retired</label>
                            <input type="radio" class="radio" name="occupation" value="student">
                            <label for="name" class="nameLabel mynamelabel">Student</label>
                            <input type="radio" class="radio" name="occupation" value="housewife">
                            <label for="name" class="nameLabel mynamelabel">Houswife</label>
                            <input type="radio" class="radio" name="occupation" value="agriculture">
                            <label for="name" class="nameLabel mynamelabel">Agriculture</label>
                            <input type="radio" class="radio" name="occupation" value="driver">
                            <label for="name" class="nameLabel mynamelabel">Driver</label>
                            <input type="radio" class="radio" name="occupation" value="armed_force">
                            <label for="name" class="nameLabel mynamelabel" style="width:100px;">Armed Forces</label>
                            <input type="radio" class="radio" name="occupation" value="police">
                            <label for="name" class="nameLabel mynamelabel">Police</label>
                            <input type="radio" class="radio" name="occupation" value="others">
                            <label for="name" class="nameLabel mynamelabel">Others</label>
                            </div>    
                            <label for="subject">Name of Employer / Business </label>
                              <input id="subject" type="text" name="employer_name" placeholder="Your Name of Employer / Business ...">
                            <label for="name" class="nameLabel">Nature Of Business</label>
                              <input id="name" type="text" name="business_name" placeholder="Enter your name...">
                            <label for="email" class="emailLabel">Designation</label>
                              <input id="email" type="text" name="designation" placeholder="Enter your designation...">
                            <label for="subject">Nature Of Duties</label>
                              <input id="subject" type="text" name="duties" placeholder="Your duties...">
                            <label for="name" class="nameLabel">PAN Number</label>
                              <input id="name" type="text" name="pan_no" placeholder="Enter your PAN No...">
                       <h4> ADDRESS for COMMUNICATION with PROPOSER </h4>   
                         
                        <label for="email" class="emailLabel">House / Plot No.</label>
                          <input id="email" type="text" name="house_no" placeholder="Enter your House / Plot No....">
                          <label for="email" class="emailLabel">Building Name</label>
                          <input id="email" type="text" name="bldng_name" placeholder="Enter your Building Name...">
                          <label for="email" class="emailLabel">Road</label>
                          <input id="email" type="text" name="road_name" placeholder="Enter your road...">
                          <label for="email" class="emailLabel">Area</label>
                          <input id="email" type="text" name="area" placeholder="Enter your area...">
                          <label for="email" class="emailLabel">Landmark</label>
                          <input id="email" type="text" name="landmark" placeholder="Enter your landmark...">
                          <label for="email" class="emailLabel">City / Town / Village</label>
                          <input id="email" type="text" name="city" placeholder="Enter your city/town/village...">
                          <label for="email" class="emailLabel">State</label>
                          <input id="email" type="text" name="state" placeholder="Enter your state...">
                          <label for="email" class="emailLabel">PinCode</label>
                          <input id="email" type="text" name="pincode" placeholder="Enter your pincode...">
                          <label for="email" class="emailLabel">Tel. No. Res. / Office </label>
                          <input id="email" type="text" name="tel_no" placeholder="Enter your Tel. No. ...">
                          <label for="email" class="emailLabel">Mobile</label>
                          <input id="email" type="text" name="mobile" placeholder="Enter your mobile...">
                          <label for="email" class="emailLabel">Email Id</label>
                          <input id="email" type="text" name="email_id" placeholder="Enter your email id...">
                                                         
                              <button class="btn btn-primary" onclick="" type="submit" name="1st_form">Submit</button>   
                         </form>
                         
                         
                         
                         
                         
                         <form method="post" action="v-includes/functions/function.manageclient.php">       
                        <h4>NOMINEE</h4>
                        <input type="hidden" name="2nd_part" value="2" />
                        <h6>Nominee (if Life to be lnsured and Proposer are the same person)</h6>
                          <label for="email" class="emailLabel">FirstName</label>
                          <input id="email" type="text" name="nominee_name" placeholder="Enter your firstname....">
                          <label for="email" class="emailLabel">Date Of Birth</label>
                          <input id="email" type="text" name="nominee_dob" placeholder="Enter your dob....">
                          <label for="email" class="emailLabel">Relationship with Life to be lnsured </label>
                          <input id="email" type="text" name="nominee_rltn" placeholder="Enter relationship....">
                        <h6> Appointee (if Nominee is a minor---Appointee cannot be Life to be Insured) </h6>  
                        	<label for="email" class="emailLabel">Name</label>
                              <input id="email" type="text" name="appointee_name" placeholder="Enter your name....">
                              <label for="email" class="emailLabel">Relationship with Nominee </label>
                              <input id="email" type="text" name="appointee_rltn" placeholder="Enter relationship....">
                              
                               <button class="btn btn-primary" onclick="" type="submit" name="2nd_form">Submit</button>
						
                            </form>
                            
                            
                            
                            
                            
                            <form method="post" action="v-includes/functions/function.manageclient.php">
                        <h4> PLAN DETAILS</h4>
                        <input type="hidden" name="3rd_part" value="3" />
                        	<select  for="email" class="emailLabel" name="plan">
                            	<option id="email" value="life_insurance"> Life Insurance</option>
                                <option id="email" value="health_insurance"> Health Insurance</option>
                                <option id="email" value="mutual_fund"> Mutual Fund</option>
                                <option id="email" value="renewal_business"> Renewal Buisness</option>
                                <option id="email" value="fixed_deposit"> Fixed Deposits</option>
                            </select>
                       <h4> PAYMENT DETAILS</h4>
                       		 <label for="name" class="nameLabel"><b>Payment Method</b></label>
                               <div class="radio_section">
                                <input type="radio" class="radio" name="payment_method" value="direct_debit">
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">ECS/Direct Debit</label>
                                <input type="radio" class="radio" name="payment_method" value="single_premium">
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">Single Premium</label>
                                <input type="radio" class="radio" name="payment_method" value="others">
                                <label for="name" class="nameLabel mynamelabel">Others</label>
                                </div>
                               <label for="email" class="emailLabel">Initial Premium</label> 
                               <input id="email" type="text" name="initial_premium" placeholder="Enter premium amount....">
                                <label for="name" class="nameLabel"><b>Policy Duration</b></label>
                                  <div class="radio_section">
                                  <input type="radio" class="radio" name="policy_time" value="5_10_year">
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">5-10 years</label>
                                    <input type="radio" class="radio" name="policy_time" value="15_year">
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">15years</label>
                                       </div>
                                    <label for="name" class="nameLabel"><b>Amount Details</b></label>
                                <div class="radio_section">
                                <input type="radio" class="radio" name="amount_details" value="cash">
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;">Cash(upto 50,000)</label>
                                <input type="radio" class="radio" name="amount_details" value="check">
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;"> Check/ DD No.</label>
                                  </div>
                               <input id="email" type="text" name="check_no" placeholder="Enter DD No...."> 
                                <label for="name" class="nameLabel"><b>Do You Have Existing Policy With WC</b></label>
                                <div class="radio_section">
                                 <input type="radio" class="radio" name="exist_policy" value="yes">
                                <label for="name" class="nameLabel mynamelabel">Yes</label>
                                <input type="radio" class="radio" name="exist_policy" value="no">
                                <label for="name" class="nameLabel mynamelabel">No</label>
                                </div>
                                <label for="email" class="emailLabel">If Yes Previous Application No.</label>
                          		<input id="email" type="text" name="previous_policyno" placeholder="Enter your application no...">
                                 <label for="email" class="emailLabel">Issuing Bank</label>
                          		<input id="email" type="text" name="bank_name" placeholder="Enter your Bank name...">
                                <label for="email" class="emailLabel">Date</label>
                          		<input id="email" type="text" name="date" placeholder="Enter your date...">
                                <label for="email" class="emailLabel">Payable at(Branch)</label>
                          		<input id="email" type="text" name="branch_name" placeholder="Enter your branch name...">
                                <label for="email" class="emailLabel">9 Digit MICR code no.</label>
                          		<input id="email" type="text" name="micr_no" placeholder="Enter your MICR code...">
                               
                        	
                        <button class="btn btn-primary" onclick="" type="submit" name="3rd_form">Submit</button>
                    </form>
                </div>
			</div>
			</div>
	</div>
</div>