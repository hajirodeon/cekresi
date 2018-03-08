<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<title>CEK RESI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.js"></script>
 



<script type="text/javascript">
$(document).ready(function() {
	$('#loading').ajaxStart(function(){
			$(this).show();
		}).ajaxStop(function(){
			$(this).hide();
		});




	
});
</script>






<script type="text/javascript">
$(document).ready(function() {
	$('#loading').ajaxStart(function(){
			$(this).show();
		}).ajaxStop(function(){
			$(this).hide();
		});







$("#cek").on('click', function(){

	
	$("#iloading").show();
				
	$("#formku2").submit(function(){
		
		$.ajax({
			url: "i_tracking.php",
			type:"POST",
			data:$(this).serialize(),
			success:function(data){			
				$("#ihasil").html(data);
				$("#iloading").hide();
				}
			});
		return false;
	});

});	





$("#iloading").hide();


});

</script>

      
      
</head>
<body>



<h1>CEK RESI</h1>


<form class="search" method="POST" name="formku2" id="formku2">
<input class="search-input" type="search" name="resi" id="resi" placeholder="Nomor Resi..." value="" autofocus="" required="">
<select name="jasa" id="jasa" class="search-select" required>
		<option value="jne">JNE</option>
		<option value="pos">POS</option>
		<option value="tiki">TIKI</option>

</select>
<button class="search-submit" type="submit" name="cek" id="cek">Cek Resi</button>
</form>
				


<div id="iloading">
	<img src="progress-bar.gif" width="100" height="16">loading...
</div>


<div id="ihasil"></div>




</body></html>
