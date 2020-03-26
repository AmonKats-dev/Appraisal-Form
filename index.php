<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <style type="text/css">
 	.seperator {
  padding-right: 20px;
  border-right: 2px solid #cfc7c0;
}
 </style>

</head>
<body class="bg-dark">
<div class="container" style="margin-top: 30px; border: 3px solid #669999; border-radius: 7px;">   
  <div class="row" style="background-color: white;">
    <div class="col-sm-6 seperator" style="background-color:white; text-align: center;">
      <img style="margin-top: 5px;" src="images/uganda-court-of-arms.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/finance_logo.jpg">
      <!-- <h6 style="font-family: Arial-BoldItalic MT;"><b>THE REPUBLIC OF UGANDA</b></h6> -->
      <p style="font-family: Arial-BoldItalic MT; font-size: 15px;"><br><b>STAFF PERFORMANCE APPRAISAL FORM FOR THE PUBLIC SERVICE</b><br>Uganda Government Standing Orders Section A-e</p>
      <h5 style="font-size: 23px;">Preamble</h5>
	      <p style="text-align: justify; font-family: Arial-BoldItalic MT;">Staff Performance Appraisal is part of the Performance Management System for the Public Service of Uganda. It is
	used as a management tool for establishing the extent to which set targets within overall goals of the organization are achieved. Through staff performance appraisal, performance gaps and development needs of an individual employee are identified. The appraisal process offers an opportunity to the Appraisee and Appraiser to dialogue and obtain a feedback on performance. This therefore, calls for a participatory approach to the appraisal process and consistence in the use of guidelines by all Public Officers in filling the form.</p> <p style="text-align: justify; font-family: Arial-BoldItalic MT;">The Appraiser and Appraisee are therefore, advised to read the detailed guidelines before filling this form.</p> </div>

	    <div class="col-sm-6" style="background-color:white; margin-top: 150px;">
    	<form action="form-filling.php"><h4>Login</h4><br>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" placeholder="Enter email" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
		  </div>
		  <div class="form-group form-check">
		    <label class="form-check-label">
		      <input class="form-check-input" type="checkbox"> Remember me
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary" style="width: 540px;">LogIn</button>
		</form> 
    </div>
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>
