<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lilla lampan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/colpick.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
</head>
<body>
	# <input type="text" id="picker"></input>

	<script>
$('#picker').colpick({
	layout:'hex',
	submit:0,
	colorScheme:'dark',
	onChange:function(hsb,hex,rgb,el,bySetColor) {
		document.body.style.background = '#'+hex;
		$.ajax({
			method: "POST",
			url: "send.php",
			data: { color: '#'+hex }
		});
		$(el).css('border-color','#'+hex);
		// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
		if(!bySetColor) $(el).val(hex);
	}
}).keyup(function(){
	$(this).colpickSetColor(this.value);

});

	</script>

	<style>
#picker {
	margin:0;
	padding:0;
	border:0;
	width:70px;
	height:20px;
	border-right:20px solid green;
	line-height:20px;
}



	</style>
</body>
</html>
