<!DOCTYPE html>
<html>
<head>
	<title>Form3</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js.bootstrap.min.js"></script>
</head>
<body>

<h2><center>Address Information</center></h2>
<hr>

<div class="container">
	<h4>Current Address</h4>
	<div class="row">
		<div class="col-md-6">
			<label>State</label>
			<select class="form-control" id="st1" name="st1">
				 <option>Select</option>
		        <option> Andaman Nikobar</option>
		        <option>Andhra Pradesh</option>
		        <option>Assam</option>
		        <option>Bihar</option>
		        <option>Chandigarh</option>
		       
		    </select>
		</div>
		<div class="col-md-6">
			<label>District</label>
			<select class="form-control" id="d1" name="d1">
				<option>Select</option>
		        <option> Amravati</option>
		        <option>Akola</option>
		        <option>Tivsa</option>
		        <option>Bhandara</option>
		        <option>Buldhana</option>
		    </select>
		</div>
	</div>
	<br><br>
    <div class="row">
    	<div class="col-md-6">
    		<label>City</label>
    		<select class="form-control" id="c1" name="c1">
				<option>Select</option>
		        <option value="Amravati"> Amravati</option>
		        <option>Akola</option>
		        <option>Tivsa</option>
		        <option>Bhandara</option>
		        <option>Buldhana</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>Village</label>
    		<input type="text"  class="form-control" placeholder="Please Insert Village" id="v1" name="v1">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>Pin Code</label>
    		<select class="form-control" id="p1" name="p1">
				<option>Select</option>
		        <option>444601</option>
		        <option>444602</option>
		        <option>444605</option>
		        <option>444607</option>
                <option>444608</option> <option>OTHER</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>House No.</label>
    		<input type="text"  class="form-control" placeholder="Please Insert House No." id="h1" name="h1">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>Landmark 1 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l11" name="l11">
    	</div>
    	<div class="col-md-6">
    		<label>Landmark 2 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l12" name="l12">
    	</div>
    </div>
    <br><br>
    

    <div class="row">
    	<div class="col-md-6">
    		<label>Landmark 3 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l13" name="l13">
    	</div>
    	<div class="col-md-6">
    		<label>Landmark 4 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l14" name="l14">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>House Type</label>
    		<select class="form-control" id="ht1" name="ht1">
				<option>Select</option>
		        <option>Owned</option>
		        <option>Rent</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>Map Link</label>
    		<input type="text"  class="form-control" placeholder="Please Insert Map Link" id="m1" name="m1">
    	</div>
    </div>
    <br><br>
  
 
   <center><label>Set Current Address As Permanent : <input type="checkbox" value="" name="check1" id="check1"></label></center>
   <hr>
   
   <label> Show Parmanent Address Tab : </label>
   <select class="form-control" onchange="toggle()" name="showhide" id="showhide">
				<option >Select</option>
		        <option value="1">Hide</option>
		        <option value="2">Show</option>
		        
    </select>
    <br>
   



   <div class="container" id="Parmanent" style="display: none;">
	<h4>Parmanent Address</h4>
	<div class="row">
		<div class="col-md-6">
			<label>State</label>
			<select class="form-control" id="st2" name="st2">
				 <option>Select</option>
		        <option value="Andaman Nikobar"> Andaman Nikobar</option>
		        <option value="Andhra Pradesh">Andhra Pradesh</option>
		        <option value="Assam">Assam</option>
		        <option value="Bihar">Bihar</option>
		        <option value="Chandigarh">Chandigarh</option>
		        <option value="Delhi">Delhi</option>
		        
		    </select>
		</div>
		<div class="col-md-6">
			<label>District</label>
			<select class="form-control" id="d2" name="d2">
				<option>Select</option>
		        <option value="Amravati"> Amravati</option>
		        <option value="Akola">Akola</option>
		        <option value="Tivsa">Tivsa</option>
		        <option value="Bhandara">Bhandara</option>
		        <option value="Buldhana">Buldhana</option>
		    </select>
		</div>
	</div>
	<br><br>
    <div class="row">
    	<div class="col-md-6">
    		<label>City</label>
    		<select class="form-control" id="c2" name="c2">
				<option>Select</option>
		        <option value="Amravati"> Amravati</option>
		        <option value="Akola">Akola</option>
		        <option value="Tivsa">Tivsa</option>
		        <option value="Bhandara">Bhandara</option>
		        <option value="Buldhan">Buldhana</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>Village</label>
    		<input type="text"  class="form-control" placeholder="Please Insert Village" id="v2" name="v2">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>Pin Code</label>
    		<select class="form-control" id="p2" name="p2">
				<option value="">Select</option>
		        <option value="444601">444601</option>
		        <option value="444602">444602</option>
		        <option value="444605">444605</option>
		        <option value="444607">444607</option>
		        <option value="OTHER ">OTHER</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>House No.</label>
    		<input type="text"  class="form-control" placeholder="Please Insert House No." id="h2" name="h2">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>Landmark 1 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l21" name="l21">
    	</div>
    	<div class="col-md-6">
    		<label>Landmark 2 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l22" id="l22">
    	</div>
    </div>
    <br><br>
    

    <div class="row">
    	<div class="col-md-6">
    		<label>Landmark 3 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l23" name="l23">
    	</div>
    	<div class="col-md-6">
    		<label>Landmark 4 : </label>
    		<input type="text"  class="form-control" placeholder="Please Insert Landmark" id="l24" name="l24">
    	</div>
    </div>
    <br><br>

    <div class="row">
    	<div class="col-md-6">
    		<label>House Type</label>
    		<select class="form-control" id="ht2" name="ht2">
				<option value="">Select</option>
		        <option value="Owned">Owned</option>
		        <option value="Rent">Rent</option>
		    </select>
    	</div>
    	<div class="col-md-6">
    		<label>Map Link</label>
    		<input type="text"  class="form-control" placeholder="Please Insert Map Link" id="m2" name="m2">
    	</div>
    </div>
    <br><br>
    		
    	
    	

</div>

<script >
function setaddress(){
  if ($("#check1").is(":checked")) {
    $('#st2').val($('#st1').val());
    $('#c2').val($('#c1').val());
    $('#d2').val($('#d1').val());
    $('#v2').val($('#v1').val());
    $('#p2').val($('#p1').val());
    $('#h2').val($('#h1').val());
    $('#l21').val($('#l11').val());
    $('#l22').val($('#l12').val());
    $('#l23').val($('#l13').val());
    $('#l24').val($('#l14').val());
    $('#ht2').val($('#ht1').val());
    $('#m2').val($('#m1').val());

  } else {
  	 $('#st2').val("Select");
  	 $('#c2').val("Select");
  	 $('#d2').val("Select");
  	 $('#v2').val("Select");
  	 $('#p2').val("Select");
  	 $('#h2').val("Select");
  	 $('#l12').val("Select");
  	 $('#l22').val("Select");
  	 $('#l23').val("Select");
  	 $('#l24').val("Select");
  	 $('#ht2').val("Select");
  	 $('#m2').val("Select");
   
  }
}

$('#check1').click(function(){
  setaddress();
})

</script>
<script>
   $(document).ready(function(){
    $('#showhide').change(function(){
        var asd = this.value;
        if (asd==1){
            $('#Parmanent').hide();
        }else{
            $('#Parmanent').show();
        }
     })
});

</script>

</body>
</html>