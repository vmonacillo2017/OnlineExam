<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Monacillo-Online Exam </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>
<div class="container">
<body>
<div class="body">
<div class="row">
<div class="col-lg-6">
<span class="text-success"><h2>Registration Form</h2></span></div>
<div class="col-md-2 col-md-offset-4">
<a href="./index.php" class="pull-right btn sub2" target="_blank"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Home</b></span></a></div>


</div><!--header row closed-->
</div>

<div class="bg2">
  <div class="row">

    <div class="col-md-3"></div>
      <div class="col-md-4 panel">
  <!-- registration form begins -->  
        <form class="form-horizontal" name="form" action="sign.php?q=myaccount.php" onSubmit="return validateForm()" method="POST">
        <fieldset>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="name"></label>  
            <div class="col-md-12">
            <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="gender"></label>
            <div class="col-md-12">
              <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
             <option value="Male">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option> </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="name"></label>  
            <div class="col-md-12">
            <input id="college" name="college" placeholder="Enter your previous school attended" class="form-control input-md" type="text">
              
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label title1" for="email"></label>
            <div class="col-md-12">
              <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="mob"></label>  
            <div class="col-md-12">
            <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
              
            </div>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-12 control-label" for="password"></label>
            <div class="col-md-12">
              <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
              
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12control-label" for="cpassword"></label>
            <div class="col-md-12">
              <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
              
            </div>
          </div>
          <?php if(@$_GET['q7'])
          { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
          <!-- Button -->
          <div class="form-group">
            <label class="col-md-12 control-label" for=""></label>
            <div class="col-md-12"> 
              <input  type="submit" class="sub" value="Register" class="btn btn-primary"/>
            </div>
          </div>

        </fieldset>
        </form>
      </div><!--col-md-6 end-->
    </div>
  </div>
</div><!--container end-->
</div>


</body>
</html>
