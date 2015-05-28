<html>

<head>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<title>AJAX TUTORIAL</title>
<script type="text/javascript">

   $(document).ready( function(){
            $("#call_back_btn").click(function(){
                   $.post("teachers/ajax.php", {}, function(data){
                           
  							$("#responsetext").val(data);
                       });
                });
         

	   });   



</script>
</head>



<div class="wrapper">
	<h3>Ajax call back</h3>
	<div>
		<h4>Dtat to send back to server</h4>
		<input type="text" size="50" id="iput_text" />
		<br /><br />
		 <input type="button" value="ajax call back" id="call_back_btn" />
		 <br /><br />
	</div>
	<div class="response_wrappper">
		<textarea rows="" cols="" id="responsetext"></textarea>
	</div>
</div>




</html>
