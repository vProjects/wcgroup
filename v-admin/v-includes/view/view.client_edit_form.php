	
    <?php
		include ("../class/class.manageusers.php");
		$manageusers = new manageusers();
		
		$user_value = $manageusers->selectuserid();
		 
		
	?>	
   	<div class="contact-us container">
            <div class="row">
                <div class="contact-form span10">
            
                <select name="user_id">
                
                <?php
				foreach($user_value as $value){ ?>
                	<option value="<?php echo $value['user_id']?>"><?php echo $value['user_id']?> </option>
                 
				<?php }?>	
                </select>
                
                <!-- selecting values of row of selected usser_id --->
                <?php $form_value = $manageusers->selectvalues("basic_information","user_id",$value['user_id']);
						//print_r($form_value);
		
                ?>
                 <form method="post" action="v-includes/functions/function.update_1st_form.php">
                    <h4>BASIC INFORMATION</h4>
                    <input type="hidden" value="1" name="1st_part" />
                     <input type="hidden" name="user_id" value="<?php echo $user_value[0]['user_id']; ?>" />
                             <label for="name" class="nameLabel"><b>Title</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio" name="title" <?php if($form_value[0]['title']=='Mr.') echo 'checked="checked"'; ?>  value="Mr.">
                            <label for="name" class="nameLabel mynamelabel">Mr.</label>
                            <input type="radio" class="radio" name="title" <?php if($form_value[0]['title']=='Mrs.') echo 'checked="checked"'; ?> value="Mrs.">
                            <label for="name" class="nameLabel mynamelabel">Mrs.</label>
                            <input type="radio" class="radio" name="title" <?php if($form_value[0]['title']=='Ms.') echo 'checked="checked"'; ?> value="Ms.">
                            <label for="name" class="nameLabel mynamelabel">Ms.</label>
                            <input type="radio" class="radio" name="title" <?php if($form_value[0]['title']=='Dr.') echo 'checked="checked"'; ?> value="Dr.">
                            <label for="name" class="nameLabel mynamelabel">Dr.</label>
        
                            </div>
                            <label for="name" class="nameLabel">FirstName</label>
                              <input id="name" type="text" name="f_name" value="<?php echo $form_value[0]['f_name']; ?>">
                            <label for="email" class="emailLabel">MiddleName</label>
                              <input id="email" type="text" name="m_name" placeholder="Enter your middlename..." value="<?php echo $form_value[0]['m_name']; ?>">
                            <label for="subject">LastName</label>
                              <input id="subject" type="text" name="l_name" placeholder="Enter your lastname..." value="<?php echo $form_value[0]['s_name']; ?>">
                            
                            <label for="name" class="nameLabel">Date Of Birth</label>
                              <input id="name" type="text" name="dob" placeholder="Enter DOB in YYYY-MM-DD..." value="<?php echo $form_value[0]['dob']; ?>">
                            <label for="email" class="emailLabel">Father/Spouse's Name </label>
                              <input id="email" type="text" name="father_name" placeholder="Enter your Father/Spouse's Name ..." value="<?php echo $form_value[0]['father_name']; ?>">
                             <label for="name" class="nameLabel"><b>Gender</b></label>
                            <div class="radio_section">
                            <input type="radio" class="radio" name="gender" <?php if($form_value[0]['gender']=='male') echo 'checked="checked"'; ?> value="male">
                            <label for="name" class="nameLabel mynamelabel">Male</label>
                            <input type="radio" class="radio" name="gender" <?php if($form_value[0]['gender']=='female') echo 'checked="checked"'; ?> value="female">
                            <label for="name" class="nameLabel mynamelabel">Female</label>
                            </div>
                           
                           <label for="name" class="nameLabel"><b>Marital Status</b></label>
                           
                            <div class="radio_section">
                            <input type="radio" class="radio" name="mar_status" <?php if($form_value[0]['mar_status']=='single') echo 'checked="checked"'; ?> value="single">
                            <label for="name" class="nameLabel mynamelabel">Single</label>
                            <input type="radio" class="radio" name="mar_status" <?php if($form_value[0]['mar_status']=='married') echo 'checked="checked"'; ?> value="married">
                            <label for="name" class="nameLabel mynamelabel">Married</label>
                            <input type="radio" class="radio" name="mar_status" <?php if($form_value[0]['mar_status']=='widow') echo 'checked="checked"'; ?> value="widow">
                            <label for="name" class="nameLabel mynamelabel">Widow</label>
                            <input type="radio" class="radio" name="mar_status" <?php if($form_value[0]['mar_status']=='divorce') echo 'checked="checked"'; ?> value="divorce">
                            <label for="name" class="nameLabel mynamelabel">Divorce</label>
                            </div> 
                          
                           <label for="name" class="nameLabel"><b>Occupation</b></label>
                           
                            <div class="radio_section_occupation">
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='business') echo 'checked="checked"'; ?> value="business">
                            <label for="name" class="nameLabel mynamelabel">Business</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='service') echo 'checked="checked"'; ?> value="service">
                            <label for="name" class="nameLabel mynamelabel">Service</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='professional') echo 'checked="checked"'; ?> value="professional">
                            <label for="name" class="nameLabel mynamelabel" style="width:75px;">Professional</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='retired') echo 'checked="checked"'; ?> value="retired">
                            <label for="name" class="nameLabel mynamelabel">Retired</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='student') echo 'checked="checked"'; ?> value="student">
                            <label for="name" class="nameLabel mynamelabel">Student</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='housewife') echo 'checked="checked"'; ?> value="housewife">
                            <label for="name" class="nameLabel mynamelabel">Houswife</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='agriculture') echo 'checked="checked"'; ?> value="agriculture">
                            <label for="name" class="nameLabel mynamelabel">Agriculture</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='driver') echo 'checked="checked"'; ?> value="driver">
                            <label for="name" class="nameLabel mynamelabel">Driver</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='armed_force') echo 'checked="checked"'; ?> value="armed_force">
                            <label for="name" class="nameLabel mynamelabel" style="width:100px;">Armed Forces</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='police') echo 'checked="checked"'; ?> value="police">
                            <label for="name" class="nameLabel mynamelabel">Police</label>
                            <input type="radio" class="radio" name="occupation" <?php if($form_value[0]['occupation']=='others') echo 'checked="checked"'; ?> value="others">
                            <label for="name" class="nameLabel mynamelabel">Others</label>
                            </div>    
                            <label for="subject">Name of Employer / Business </label>
                              <input id="subject" type="text" name="employer_name" placeholder="Your Name of Employer / Business ..." value="<?php echo $form_value[0]['emp_name']; ?>">
                            <label for="name" class="nameLabel">Nature Of Business</label>
                              <input id="name" type="text" name="business_name" placeholder="Enter your name..." value="<?php echo $form_value[0]['business_name']; ?>">
                            <label for="email" class="emailLabel">Designation</label>
                              <input id="email" type="text" name="designation" placeholder="Enter your designation..." value="<?php echo $form_value[0]['designation']; ?>">
                            <label for="subject">Nature Of Duties</label>
                              <input id="subject" type="text" name="duties" placeholder="Your duties..." value="<?php echo $form_value[0]['duties']; ?>">
                            <label for="name" class="nameLabel">PAN Number</label>
                              <input id="name" type="text" name="pan_no" placeholder="Enter your PAN No..." value="<?php echo $form_value[0]['pan_no']; ?>">
                       <h4> ADDRESS for COMMUNICATION with PROPOSER </h4>   
                         
                        <label for="email" class="emailLabel">House / Plot No.</label>
                          <input id="email" type="text" name="house_no" placeholder="Enter your House / Plot No...." value="<?php echo $form_value[0]['house_no']; ?>">
                          <label for="email" class="emailLabel">Building Name</label>
                          <input id="email" type="text" name="bldng_name" placeholder="Enter your Building Name..." value="<?php echo $form_value[0]['building_name']; ?>">
                          <label for="email" class="emailLabel">Road</label>
                          <input id="email" type="text" name="road_name" placeholder="Enter your road..." value="<?php echo $form_value[0]['road_name']; ?>">
                          <label for="email" class="emailLabel">Area</label>
                          <input id="email" type="text" name="area" placeholder="Enter your area..." value="<?php echo $form_value[0]['area']; ?>">
                          <label for="email" class="emailLabel">Landmark</label>
                          <input id="email" type="text" name="landmark" placeholder="Enter your landmark..." value="<?php echo $form_value[0]['landmark']; ?>">
                          <label for="email" class="emailLabel">City / Town / Village</label>
                          <input id="email" type="text" name="city" placeholder="Enter your city/town/village..." value="<?php echo $form_value[0]['city']; ?>">
                          <label for="email" class="emailLabel">State</label>
                          <input id="email" type="text" name="state" placeholder="Enter your state..." value="<?php echo $form_value[0]['state']; ?>">
                          <label for="email" class="emailLabel">PinCode</label>
                          <input id="email" type="text" name="pincode" placeholder="Enter your pincode..." value="<?php echo $form_value[0]['pincode']; ?>">
                          <label for="email" class="emailLabel">Tel. No. Res. / Office </label>
                          <input id="email" type="text" name="tel_no" placeholder="Enter your Tel. No. ..." value="<?php echo $form_value[0]['tel_no']; ?>">
                          <label for="email" class="emailLabel">Mobile</label>
                          <input id="email" type="text" name="mobile" placeholder="Enter your mobile..." value="<?php echo $form_value[0]['mobile']; ?>">
                          <label for="email" class="emailLabel">Email Id</label>
                          <input id="email" type="text" name="email_id" placeholder="Enter your email id..." value="<?php echo $form_value[0]['email_id']; ?>">
                          
                          <h4 class="heading"> STATUS</h4> 
                                <label for="email" class="emailLabel">Upload</label>
								<input type="file" name="data">
                                
                              <button class="btn btn-primary" onclick="" type="submit" name="1st_form">Submit</button>   
                         </form>
                     <!-- end of 1st form-->    
                     
                      <!-- selecting values of row of selected usser_id --->
                     <?php 
					 $formValue = $manageusers->selectvalues("nominee","user_id",$value['user_id']);
						//print_r($form_value);
		
                	?>
                         
                      <?php if(count($formValue)<1){?> 
                	 <form method="post" action="v-includes/functions/function.edit_client_form.php">
                        <h4>NOMINEE</h4>
                        <input type="hidden" name="2nd_part" value="2" />
                        <input type="hidden" name="user_id" value="<?php echo $user_value[0]['user_id']; ?>" />
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
                            
                        <?php } else{ ?>
									<form method="post" action="v-includes/functions/function.update_1st_form.php">
                        <h4>NOMINEE</h4>
                        <input type="hidden" name="2nd_part" value="2" />
                        <input type="hidden" name="user_id" value="<?php echo $user_value[0]['user_id']; ?>" />
                        <h6>Nominee (if Life to be lnsured and Proposer are the same person)</h6>
                          <label for="email" class="emailLabel">FirstName</label>
                          <input id="email" type="text" name="nominee_name" placeholder="Enter your firstname...." value="<?php echo $formValue[0]['nominee_name']; ?>">
                          <label for="email" class="emailLabel">Date Of Birth</label>
                          <input id="email" type="text" name="nominee_dob" placeholder="Enter your dob...." value="<?php echo $formValue[0]['nominee_dob']; ?>" >
                          <label for="email" class="emailLabel">Relationship with Life to be lnsured </label>
                          <input id="email" type="text" name="nominee_rltn" placeholder="Enter relationship...." value="<?php echo $formValue[0]['nominee_relatn']; ?>">
                        <h6> Appointee (if Nominee is a minor---Appointee cannot be Life to be Insured) </h6>  
                        	<label for="email" class="emailLabel">Name</label>
                              <input id="email" type="text" name="appointee_name" placeholder="Enter your name...." value="<?php echo $formValue[0]['appointee_name']; ?>">
                              <label for="email" class="emailLabel">Relationship with Nominee </label>
                              <input id="email" type="text" name="appointee_rltn" placeholder="Enter relationship...." value="<?php echo $formValue[0]['appointee_relatn']; ?>">
                              
                              <button class="btn btn-primary" onclick="" type="submit" name="2nd_form">Submit</button>
						
                            </form>
							
							<?php } ?>						  
                            
                            
                  <!----- end of 2nd form-------->          
                            
                   <!------------ selecting values of row of selected usser_id ----------->  
                   
                    <?php 
					 $formValue = $manageusers->selectvalues("insurance_details","user_id",$value['user_id']);
						//print_r($form_value);
		
                	?>     
                    
                    
                     <?php if(count($formValue)<1){?>         
         		 	<form method="post" action="v-includes/functions/function.edit_client_form.php">
                
                        <h4> PLAN DETAILS</h4>
                        <input type="hidden" name="3rd_part" value="3" />
                        <input type="hidden" name="user_id" value="<?php echo $user_value[0]['user_id']; ?>" />
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
                    <?php } else{ ?>
                    
                    
                    <form method="post" action="v-includes/functions/function.update_1st_form.php">
                
                        <h4> PLAN DETAILS</h4>
                        <input type="hidden" name="3rd_part" value="3" />
                        <input type="hidden" name="user_id" value="<?php echo $user_value[0]['user_id']; ?>" />
                        	<select  for="email" class="emailLabel" name="plan">
                            	<option id="email" value="life_insurance"  <?php if($formValue[0]['plane_name']=='life_insurance') echo 'selected="selected"'; ?>> Life Insurance</option>
                                <option id="email" value="health_insurance" <?php if($formValue[0]['plane_name']=='health_insurance') echo 'selected="selected"'; ?>> Health Insurance</option>
                                <option id="email" value="mutual_fund" <?php if($formValue[0]['plane_name']=='mutual_fund') echo 'selected="selected"'; ?>> Mutual Fund</option>
                                <option id="email" value="renewal_business" <?php if($formValue[0]['plane_name']=='renewal_business') echo 'selected="selected"'; ?>> Renewal Buisness</option>
                                <option id="email" value="fixed_deposit" <?php if($formValue[0]['plane_name']=='fixed_deposit') echo 'selected="selected"'; ?>> Fixed Deposits</option>
                            </select>
                       <h4> PAYMENT DETAILS</h4>
                       		 <label for="name" class="nameLabel"><b>Payment Method</b></label>
                               <div class="radio_section">
                                <input type="radio" class="radio" name="payment_method" <?php if($formValue[0]['payment_method']=='direct_debit') echo 'checked="checked"'; ?> value="direct_debit">
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">ECS/Direct Debit</label>
                                <input type="radio" class="radio" name="payment_method" <?php if($formValue[0]['payment_method']=='single_premium') echo 'checked="checked"'; ?> value="single_premium">
                                <label for="name" class="nameLabel mynamelabel" style="width:100px;">Single Premium</label>
                                <input type="radio" class="radio" name="payment_method" <?php if($formValue[0]['payment_method']=='others') echo 'checked="checked"'; ?> value="others">
                                <label for="name" class="nameLabel mynamelabel">Others</label>
                                </div>
                               <label for="email" class="emailLabel">Initial Premium</label> 
                               <input id="email" type="text" name="initial_premium" placeholder="Enter premium amount...." value="<?php echo $formValue[0]['initial_prem']; ?>">
                                <label for="name" class="nameLabel"><b>Policy Duration</b></label>
                                  <div class="radio_section">
                                  <input type="radio" class="radio" name="policy_time" <?php if($formValue[0]['policy_duration']=='5_10_year') echo 'checked="checked"'; ?> value="5_10_year">
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">5-10 years</label>
                                    <input type="radio" class="radio" name="policy_time" <?php if($formValue[0]['policy_duration']=='15_year') echo 'checked="checked"'; ?> value="15_year">
                                    <label for="name" class="nameLabel mynamelabel" style="width:100px;">15years</label>
                                       </div>
                                    <label for="name" class="nameLabel"><b>Amount Details</b></label>
                                <div class="radio_section">
                                <input type="radio" class="radio" name="amount_details" <?php if($formValue[0]['amount_details']=='cash') echo 'checked="checked"'; ?> value="cash">
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;">Cash(upto 50,000)</label>
                                <input type="radio" class="radio" name="amount_details" <?php if($formValue[0]['amount_details']=='check') echo 'checked="checked"'; ?> value="check">
                                <label for="name" class="nameLabel mynamelabel" style="width:150px;"> Check/ DD No.</label>
                                  </div>
                               <input id="email" type="text" name="check_no" placeholder="Enter DD No...." value="<?php echo $formValue[0]['check_no']; ?>"> 
                                <label for="name" class="nameLabel"><b>Do You Have Existing Policy With WC</b></label>
                                <div class="radio_section">
                                 <input type="radio" class="radio" name="exist_policy" <?php if($formValue[0]['exsist_policy']=='yes') echo 'checked="checked"'; ?> value="yes">
                                <label for="name" class="nameLabel mynamelabel">Yes</label>
                                <input type="radio" class="radio" name="exist_policy" <?php if($formValue[0]['exsist_policy']=='no') echo 'checked="checked"'; ?> value="no">
                                <label for="name" class="nameLabel mynamelabel">No</label>
                                </div>
                                <label for="email" class="emailLabel">If Yes Previous Application No.</label>
                          		<input id="email" type="text" name="previous_policyno" placeholder="Enter your application no..."<?php echo $formValue[0]['exist_policy_no']; ?>">
                                 <label for="email" class="emailLabel">Issuing Bank</label>
                          		<input id="email" type="text" name="bank_name" placeholder="Enter your Bank name..."<?php echo $formValue[0]['issue_bank']; ?>">
                                <label for="email" class="emailLabel">Date</label>
                          		<input id="email" type="text" name="date" placeholder="Enter your date..."<?php echo $formValue[0]['date']; ?>">
                                <label for="email" class="emailLabel">Payable at(Branch)</label>
                          		<input id="email" type="text" name="branch_name" placeholder="Enter your branch name..."<?php echo $formValue[0]['branch_name']; ?>">
                                <label for="email" class="emailLabel">9 Digit MICR code no.</label>
                          		<input id="email" type="text" name="micr_no" placeholder="Enter your MICR code..."<?php echo $formValue[0]['micr_no']; ?>">
                               
                        	
                    	    <button class="btn btn-primary" onclick="" type="submit" name="3rd_form">Submit</button>
                    	</form>
                         <?php } ?>
                    
	

				
                </div>
            </div>
        </div>        
	
	
