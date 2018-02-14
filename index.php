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
  function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
  var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
  </script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Online Entrance Examination</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Log in</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:blue">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
  <div class="container">

    <div style="background-color: rgba(255,255,255,0.8); text-align: center;"  class="col-2 text-truncate">
      
      <h1>Welcome</h1>
      <h2>CNU Online Entrance Examination Portal</h2>
      <p class="text-justify">  This portal is created in order to serve the pulic for easy access on the entrance examination of Cebu Normal University. 
      Please ensure that all your requirements are submitted to the "Testing Center". This exam will test your IQ to qualify for enrolment of the course you applied for.
      Be sure to provide correct information in the registration form because this will be the basis for enrolment if you qualify. This examination requires you to finish within thirty (30) minutes. Good Luck!   </p>
    </div>
      
    </div>
  </div>
</div><!--container end-->

<!--Footer start-->

<div class="row footer">
<div class="col-md-3 box">
<a href="http://cnu.edu.ph" target="_blank">About Us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#regs">Register</a>
</div>

<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/Vinz01.jpg" width=100 height=100 alt="Vincent Monacillo" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="https://www.facebook.com/vinz.monacillo" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Vincent F. Monacillo</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+63 9778898494</h4>
    <h4 stylDeveloperse="font-family:'typo' ">vmonacillo@gmail.com</h4>
    <h4 style="font-family:'typo' ">Cebu Normal University</h4></div></div>
    </p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Log in</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal For Developers-->
<div class="modal fade title1" id="regs">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Register Here!</span></h4>
      </div>
    
      <div class="modal-body">
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
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->



</body>
</html>
