$(document).ready(function() {
//Show loader images
$('#loaderImage').show();
//Show contacts
showContacts();


$(document).on('submit', '#searchContact', function(){
	$('#searchModal').foundation('reveal','close');
	console.log('Search');
	var searchValue = document.getElementById('searchBox').value;
	$('#searchResult').load('search_contact.php', {search: searchValue});
	return false;
});
//Add contacts
$(document).on('submit','#addContact', function(){
	//Show loader
	$('#loaderImage').show();
	//Post data from form
	$.post('add_contact.php',$(this).serialize())
	.done(function(data){
		console.log('Add');
		$('#addModal').foundation('reveal','close');
		showContacts();
	});
	return false;
	});
	
	//Edit contact
	$(document).on('submit','#editContact', function(){
	//Show loader
	$('#loaderImage').show();
	
	//Post data from form
	$.post('edit_contact.php',$(this).serialize())
	.done(function(data){
		console.log('Edit');
		$('.editModal').foundation('reveal','close');
		showContacts();
	});
	return false;
	});
	
	//Delete Contact
		$(document).on('submit','#deleteContact', function(){
	//Show loader
	$('#loaderImage').show();
	
	//Post data from form
	$.post('delete_contact.php',$(this).serialize())
	.done(function(data){
		console.log('Delete');
		showContacts();
	});
	return false;
	});
});

//Show Contacts
function showContacts(){
	console.log('Showing contacts');
	setTimeout("$('#pageContent').load('contacts.php', function(){$('#loaderImage').hide();})", 1000);
}

$(document).on('click', '.close-reveal-modal', function(){
	$('.reveal-modal').foundation('reveal','close');
});