<!DOCTYPE html>
<html>

	<head>
		<title>MY TRAVELLING REPORT</title>
	</head>

	<body>

	<div class="container">
      <div class="row col-md-6 col-md-offset-3" >
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>MY TRAVELLING REPORT</h1>
		  </div>		
<?php 
include('MainClass.php');
$get_data =new DailyReportClass;
$get_data->Print("localhost","root","root00","tickets",$_POST['idnumber'],$_POST['paymentOption'],$_POST['destination']); 
?>
					<div class="panel-body">
            
      			</div>
			</div> 	
		</div> 
	</div>

			<link rel="stylesheet" type="text/css" href="bootstrap.css" />
			<form>
				<div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
       
                   <button class="btn btn-primary col-xs-4" onclick="window.print();">GET_PDF_FILE</button>
              </div>
			<a href="index.php" style="display:flex; justify-content: space-around;" >BACK</a>
			 
          	</form>  	

	</body>
</html>
