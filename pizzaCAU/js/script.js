$(document).ready(function() {
	$.ajax({method: 'get', url: 'emptyTempCart.php'});
	$.ajax({method: 'get', url: 'prepareCart.php'});
	$('#sectionContent').load('items.php');
	$('#sectionContentSide').load('sideItems.php');
});

$(document).on('click', '.close-reveal-modal', function(){
	$('.reveal-modal').foundation('reveal','close');
	$.ajax({method: 'get', url: 'emptyTempCart.php'});
	console.log('Closed');
});

$(document).on('click', '.popNext', function(){
	$.ajax({method: 'get', url: 'saveToCart.php',
			success: function(data) {
				if(data != 0){
					$.ajax({method: 'get', url: 'emptyTempCart.php'});
					$('.reveal-modal').foundation('reveal','close');
					console.log('Saved');
				}
				else {
					alert('Something required is not selected');
				}
			}
	});
	
});