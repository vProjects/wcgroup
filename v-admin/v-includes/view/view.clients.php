<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	
	$clients = $manageUsers->showClients('all');
/*	$clientName = $manageUsers->showClients('firstName');   This section will be used to sort the client in alphabetical order
	sort($clientName);
*/
?>

<div id="dashboard">
	<div id="newsletter">
    	<blockquote>
        	<p>Manage Clients of your business</p>
        	<small>It will help <cite title="Source Title">you in managing the clients of your business</cite></small>
    <div id="addnewsletter">
     </blockquote>
    
<!--	<form action="v-includes/functions/function.newsletter.php" method="post">
    <div id="abc"><input type="text" name="search" placeholder="Enter Name or Customer No to search" /></div>
    <input type="submit" value="submit" class="btn btn-success btn-primary nbutton"/>
    </form>
-->	
		<div id="managePageContent">
        		<form class="polls" action="" name="clientSearchForm" method="post">
                  <fieldset>
                    <div class="form-group">
                      <input type="hidden" name="firstbox" value="firstbox" />
                      <label for="exampleInputEmail" class="polllabel" >Search Clients</label>
                      <input type="text" class="form-control" name="searchElement" id="exampleInputEmail" placeholder="Enter Client name or Customer ID" style="width:400px">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail" class="polllabel">Search Method</label>
                        <select class="input" name="search_method" >
                          <option value="byCustomerId">By Customer ID</option>
                          <option value="byCustomerName">By first name</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="searchClient()" style="margin-left:220px;">Submit</button>
                  </fieldset>
                </form>  
                





		</div>



<div id="search_results">
    <table class="table table-hover table-bordered newslettertable">
<caption><h4>Clients</h4></caption>
	<thead>
    	<tr>

  <td><h4>Clients Basic Info</h4></td>

   </tr>

    <tr>

      <th>Name</th>

	  <th>Delete</th>
      <th>Activate</th>
      <th>De-activate</th>
      <th>Edit</th>
      <th>BirthDay</th>
    </tr>

  </thead>

  <tbody>
	<?php 
		foreach($clients as $client)
		{  ?>
    <tr>
	<form action="v-includes/functions/function.newsletter.php" method="post">
    	<input type="hidden" value="<?php echo $client['user_id'] ?>" name="id" />
      <td><?php echo $client['title'].'&nbsp;'.$client['f_name'].'&nbsp;'.$client['s_name'] ?></td>

      <td><button type="submit" class="btn btn-danger" value="delete" name="delete"><i class="icon-trash"></i></button></td>
      <td><button type="submit" class="btn btn-success" value="activate" name="activate"><i class="icon-ok-sign"></i></button></td>
      <td><button type="submit" class="btn btn-success" value="deactivate" name="deactivate"><i class="icon-off"></i></button></td>
      <td><button type="button" class="btn btn-success" value="" onclick="editValue(this.value)" name="edit"><i class="icon-edit"></i></button></td>
       <td><button type="button" class="btn btn-success" value="status" name="edit"><i class="<?php 
																									if($client['activated']==1)
																										echo 'icon-ok';
																									else
																										echo 'icon-remove';
																									?>"></i><?php echo $client['dob'] ?></button></td>

      </form>
		<?php  } ?>
    </tr>


  </tbody>

</table>
</div>
<div class="clearfix"></div>

	</div>
</div>