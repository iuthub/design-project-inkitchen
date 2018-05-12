<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css.map')}}">
</head>
<body background="{{ asset('images_reg/backgr.jpg') }}">
          

<div class="container">
    <h1 class="well" >Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text" placeholder="Enter First Name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Enter Last Name Here.." class="form-control">
            
            </div>          
           </div>
          <div class="form-group">  
            <label>Email Address</label>
            <input type="text" placeholder="Enter Email Address Here.." class="form-control">
          </div>  
          <div class="form-group">
            <label>Password</label>
            <input type="text" placeholder="Enter Your Password Here.." class="form-control">
          </div>
          <button type="button" class="btn btn-lg btn-info">Register</button>         
          </div>
        </form> 
        </div>
  </div>
  </div>
  
</body>
</html>