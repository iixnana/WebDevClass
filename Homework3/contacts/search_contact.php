<?php include('core/init.php');?>

<?php
if(!empty($_POST['search']))
{
	$search = $_POST['search'];
	$db = new Database;
	$query = "SELECT * FROM contacts WHERE first_name LIKE '%".$search.
				"%' OR last_name LIKE '%".$search."%'";
	$db->query($query);
	$contacts = $db->resultset();
	$count = $db->rowCount();
}
else
{
	$count = 0;
}
?>

<div class="row">
		<div class="large-12 columns">
		<h4>Search Results</h4>
			<table>
				<thead>
					<tr>
						<th width="250">Name</th>
						<th width="180">Phone</th>
						<th width="250">Email</th>
						<th width="150">Group</th>
						<th width="200">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php if($count != 0) {
					foreach($contacts as $contact) :?>
					<tr>
						<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name;?></a></td>
						<td><?php echo $contact->phone;?></td>
						<td><?php echo $contact->email;?></td>
						<td><?php echo $contact->contact_group;?></td>
						<td><ul class="button-group">
							<li>
								<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
								<div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
									<h2>Edit Contact</h2>
									<form id="editContact" action="#" method="post">
										<div class="row">
											<div class="large-6 columns">
												<label>First Name
													<input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name;?>"/>
												</label>
											</div>
											<div class="large-6 columns">
												<label>Last Name
													<input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name;?>"/>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="large-4 columns">
												<label>Email
													<input name="email" type="email" placeholder="Enter Email" value="<?php echo $contact->email;?>"/>
												</label>
											</div>
											<div class="large-4 columns">
												<label>Phone Number
													<input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone;?>"/>
												</label>
											</div>
											<div class="large-4 columns">
												<label>Contact Group
													<select name="contact_group">
														<option value="family" <?php if($contact->contact_group == 'family'){echo 'selected';}?>>Family</option>
														<option value="friends" <?php if($contact->contact_group == 'friends'){echo 'selected';}?>>Friends</option>
														<option value="business" <?php if($contact->contact_group == 'business'){echo 'selected';}?>>Business</option>
													</select>
												</label>
											</div>
										</div>
										<input type="hidden" name="id" value="<?php echo $contact->id;?>"/>
										<input name="submit" type="submit" class="add-btn button right small" value="Submit" />
										<a class="close-reveal-modal">&#215;</a>
									</form>
								</div>
							</li>
							<li>
								<form id="deleteContact" action="#" method="post">
									<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
									<input type="submit" class="delete-btn button tiny secondary alert" value="Delete"/>
								</form>
							</li>
						</ul></td>
					</tr>
					<?php endforeach;
				} else { ?>
					<tr>
						<td colspan="6">No contact found</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
</div>