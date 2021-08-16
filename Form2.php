<!DOCTYPE html>
<html>
<head>
	
	<title>Form2</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
	.A{
		border-style: hidden;
  
      }
   </style>
</head>

<body>
<center><h2>Customer Details:</h2></center>
<br>
<hr>
<div class="container">
	<h4>Full Name:</h4>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			
		    <input type="text"  class="form-control" id="Fname" >
		    <small class="form-text text-muted">First Name</small>
		    </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
		    <input type="text"  class="form-control" id="Fname" >
		    <small class="form-text text-muted">Last Name</small>
		    </div>
	    </div>
	</div>
    
    <h4>Address:</h4>
	<div class="form-group">
	    <input type="text"  class="form-control" id="Fname" >
	     <small class="form-text text-muted">Street Address</small>
	</div>
	 
	<div class="form-group">
	    <input type="text"  class="form-control" id="Fname" >
	     <small class="form-text text-muted">Street Address Line 2</small>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			
		    <input type="text"  class="form-control" id="Fname" >
		    <small class="form-text text-muted">City</small>
		    </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
		    <input type="text"  class="form-control" id="Fname" >
		    <small class="form-text text-muted">State/Province</small>
		    </div>
	    </div>
	</div>
	<div class="form-group">
	    <input type="text"  class="form-control" id="Fname" >
	    <small class="form-text text-muted">Postal zip code</small>
	</div>

	<h4>Phone Number:</h4>

	<div class="form-group">
	   <input class="form-control" type="tel" id="phone" name="phone" placeholder="(000) 000-0000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
    </div>

    <h4>Email:</h4>

	<div class="form-group">
	   <input class="form-control" type="email"  placeholder="ex :email@yahoo.com" required>
	   <small class="form-text text-muted">example@example.com</small><br><br>
    </div>
     
    <div class="form-group">
      <h4>How Did You Hear About Us : </h4>
      <select class="form-control" id="sel1">
        <option>Please Select</option>
        <option>Newspaper</option>
        <option>Magzine</option>
        <option>Internet</option>
         <option>Other</option>
      </select>
    </div>

     
   <h4>Feedback About Us : </h4>
   <textarea class="form-control" rows="8" ></textarea>

   <h4>Suggestion If Any :</h4>
   <textarea class="form-control" rows="8" ></textarea><br><br>


   <h4>Will You Be Willing To Recommend Us : </h4>
    <div class="checkbox">
      <label><input type="checkbox" value="">Yes</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Maybe</label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" value="">No</label>
    </div><br>

    <h4>Please Give Reference Fro Any Two People From You Feel : </h4>
    <table class="table table-bordered" style="width: 100%">
    <thead>
      <tr >
      	<th style="border-style: hidden;"></th>
        <th class="active">Fullname</th>
        <th class="active">Address</th>
        <th class="active">ContactNo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class= "active" >1</td>
        <td><input type="text"  class="form-control A"></td>
        <td><input type="text"  class="form-control A"></td>
        <td><input type="text"  class="form-control A"></td>
      </tr>
      <tr>
        <td class= "active">2</td>
        <td><input type="text"  class="form-control A"></td>
        <td><input type="text"  class="form-control A"></td>
        <td><input type="text"  class="form-control A"></td>
      </tr>
      
    </tbody>
  </table>
   
  <button type="button" class="btn btn-success" style="width: 100%"><h4>Submit</h4></button>
  <br><br>

</div>
</body>
</html>