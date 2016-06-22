<!doctype html>
<html>
<head>
    <title>Weather Scaper</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
   
   <style>
   html,body{
	   height:100%;
	   
   }
   .container{
	   background-image:url("https://images.unsplash.com/photo-1460500063983-994d4c27756c?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=27c2758e7f3aa5b8b3a4a1d1f1812310");
		width:100%;
		 height:100%;
		background-size:cover;
		background-position:center;
		color:white;
   }
   
   #backgroundColor{
	   border:0px solid grey;
	   border-radius:5px;
	   margin-top:100px;
	   background: rgba(161, 123, 90,0.5);
   }
   #findMyWeather{
	  
	   margin-bottom:20px;
	   
   }
   .alert{
		display:none;
		margin-bottom:10px;
	   
   }
   </style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 text-center " id="backgroundColor">
	<h1>Weather Predictor</h1>
	<p class="lead"> Enter your city name to predict the weather...</p>
	<form>	
		<div class="form-group">
			<!--<span class="input-group-addon">City</span>-->
			<input type="text" placeholder="Enter your City" class="form-control" id="city"/>
		</div>
			<input type="submit" value="Predict Weather" name="submit" class="btn btn-success" id="findMyWeather"/>
	</form>
	
	<div id="success" class="alert alert-success">
	</div>
	<div id="fail"class="alert alert-danger">
	Please enter a valid city
	</div>
	<div id="noCity" class="alert alert-danger">
	Please Enter your city
	</div>
</div> 

</div>

    
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files
as needed -->
<script src="bootstrap.min.js"></script>
 
<script>
	$("#findMyWeather").click(function(event){
		event.preventDefault();
		$(".alert").hide();
		if($("#city").val()!=""){
		$.get("scraper.php?city="+$("#city").val(),function(data){
		if(data !=""){
			$("#success").html("3-Day weather forcast for "+$("#city").val()+" is "+data).fadeIn();
		}else{
			$("#fail").html($("#city").val()+" is not a valid city name.Please make sure you have entered the correct name").fadeIn();
		}
		});
		}else{
			$("#noCity").fadeIn();
		}
	});
	
</script>
</body>
</html>
</body>
</html>



