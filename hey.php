<?php


 error_reporting(E_ALL);

include('connect.php');
?>
<?php
$connection = mysql_connect("localhost", "root", "admin"); // Establishing Connection with Server
$db = mysql_select_db("test", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name_i = $_POST['name_inst'];
$name_h = $_POST['name_head_inst'];
$des = $_POST['designation'];
$campus=$_POST['c1'];
$ph = $_POST['phno'];
$mob = $_POST['mobno'];
$email = $_POST['email'];
$a_email = $_POST['alt_email'];
$add = $_POST['address'];
$c = $_POST['city'];
$s = $_POST['state'];
$p = $_POST['pin'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into data_inst(name,head_inst, des , own_campus,ph_no,mob_no,email,alt_email,address,city,state,pin) values ('$name_i', '$name_h', '$des','$campus','$ph','$mob','$email','$a_email','$add','$c','$s','$p)");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>	

<!DOCTYPE html>
<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kramah Software India Private Limited</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  
      <link rel="stylesheet" href="css/style.css">
	  
	    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type ="text/css">

body{background-color:hsla(120,60%,70%,0.3);
             }
 form{
				 max-width:1000px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
	 margin-left:100px;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
   
			 }
			 
			 table{
				 max-width:700px;
    padding: 10px 20px;
    
    border-radius: 8px;
   
			 }

</style>
  
</head><script>
    function captitalize(obj)
    {
     obj.value=obj.value.charAt(0).toUpperCase()+obj.value.slice(1);
    }
    </script>
<script>
$this->load->library('form_validation');

    $this->form_validation->set_rules('gender', 'Gender', 'required'); // This will check if gender is selected.

    if ($this->form_validation->run()) {
      $gender = $this->input->post('gender'); // This will contain "male" or "female"
    }
    else {
      $error = validation_errors();
    }
	</script><script>
    function ValidatePAN(Obj) {  

        if (Obj.value != "") {
            ObjVal = Obj.value;
            var panPat = /^\d{4}\s\d{4}\s\d{4}$/;
            if (ObjVal.search(panPat) == -1) {
                alert("Invalid Aadhar No");
               // Obj.focus();
                return false;
            }
  
  }
</script>


   
  <img src ="logo.png" height="150"  style="margin-left:50px;margin-top:-100px;" alt ="  " /></a>
<body>
      <form>
	  The Annual Quality Assurance Report (AQAR) of the IQAC<br>
                (For Universities)
Institutions Accredited by NAAC need to submit an Annual self-reviewed progress report i.e. Annual Quality Assurance Report (AQAR) to NAAC, through its IQAC. The report is to detail the tangible results achieved in key areas, specifically identified by the IQAC at the beginning of the Academic year. The AQAR period would be the Academic Year. (For example, July 1, 2017 to June 30, 2018) 

Part – A

Data of the Institution 
(data may be captured from IIQA)
	 
		 
		 <div>
		 <fieldset>
          <legend><span class="number">1</span> Data of the Institution</legend>
		  <label for="1. Name of the Institution">1. Name of the Institution
        <input type="text"  name="name_inst"   onkeyup="captitalize(this)" required >
		<label for="•	Name of the Head of the institution :">•	Name of the Head of the institution :
        <input type="text"  name="name_head_inst"   onkeyup="captitalize(this)" required >
		<label for="Designation">•Designation:
        <input type="text"  name="name_head_inst"   onkeyup="captitalize(this)" required >
		
	<div>	<label for="•	Does the institution function from own campus:">•	Does the institution function from own campus:</label>
         <label class="container"> Yes
          
         <input type="checkbox" align="left">
         <span class="checkmark"></span>
         <label class="container" align="left">No
      
        <input type="checkbox" align="left">
        <span class="checkmark" align="left"></span>
</label></label></div>

         <label for="•	Phone no./Alternate phone no. ">•	Phone no./Alternate phone no:</label>
        <input type="text"  name="phno"   onkeyup="captitalize(this)" required >
		<label for="•	Mobile no. ">•	Mobile no.:</label>
        <input type="text"  name="mobno"   onkeyup="captitalize(this)" required >
		<label for="•	Registered Email ">•	Registered Email:</label>
        <input type="text"  name="email"   onkeyup="captitalize(this)" required >
		<label for="•	Alternate Email ">•	Alternate Email:</label>
        <input type="text"  name="alt_email"   onkeyup="captitalize(this)" required >
		<label for="•	Address  :">•Address:</label>
        <input type="text"  name="address"   onkeyup="captitalize(this)" required >
		<label for="•	City/Town ">•	City/Town :</label>
        <input type="text"  name="city"   onkeyup="captitalize(this)" required >
		<label for="•	State/UT    ">•		State/UT    :</label>
        <input type="text"  name="state"   onkeyup="captitalize(this)" required >
		<label for="•	Pin Code  ">•	Pin Code      :</label>
        <input type="text"  name="pin"   onkeyup="captitalize(this)" required >
		
		</fieldset>
		<fieldset>
		<div align="left">
		<legend><span class="number">2</span> Institutional status</legend>
		<label for="•	University: State/Central/Deemed/Private:">•   University: State/Central/Deemed/Private: 
        <label class="container">State
        <input type="checkbox">
		<span class="checkmark"></span>
        <label class="container">Central
        <input type="checkbox" align="left">
        <span class="checkmark"></span>
	    <label class="container">Deemed
        <input type="checkbox"align="left">
        <span class="checkmark"></span>	
	    <label class="container">Private
        <input type="checkbox"align="left">
        <span class="checkmark"></span>(Tick  appropriative)<br>
		
	<label for="Type of Institution: Co-education/Men/Women">•   Type of Institution: Co-education/Men/Women:
	
  <label class="container">Co-education
  <input type="checkbox">
  <span class="checkmark"></span>
	<label class="container">Men
  <input type="checkbox">
  <span class="checkmark"></span>	
	<label class="container">Women
  <input type="checkbox">
  <span class="checkmark"></span><br>
  
		
	<div style="text-align:left"><label for="•	Location : Rural/Semi-urban/Urban:">•	Location : Rural/Semi-urban/Urban:
		
  
  <label class="container">Rural
  <input type="checkbox">
  <span class="checkmark"></span>
	<label class="container">Semi-urban
  <input type="checkbox">
  <span class="checkmark"></span>	
	<label class="container">Urban
  <input type="checkbox">
  <span class="checkmark"></span></label>	</div>
	
		 Note: Some Quality Assurance initiatives of the institution are:
(Indicative list) 
       <br>  •Regular meeting of Internal Quality Assurance Cell (IQAC); timely submission of Annual Quality Assurance Report (AQAR) to NAAC; Feedback from all stakeholders collected, analysed and used for improvements
       <br>  •Academic Administrative Audit (AAA) conducted and its follow up action
       <br>  •Participation in NIRF
       <br>  •ISO Certification 
       <br>  •NBA etc.
       <br>  •Any other Quality Audit 
       <br><b>8.Provide the list of Special Status conferred by Central/ State Government-UGC/CSIR/DST/DBT/ICMR/TEQIP/World Bank/CPE of UGC etc. </b>
		<center>
		<table cellspacing=0 border="3" width="1200" height="260" text-align="center">
		<tr>
		<th><center>Institution/ Department/Faculty</center></th>
		<th><center>Scheme</center></th>
		<th><center>Funding agency</center></th>
		<th><center>Year of award with duration</center></th>
		<th><center>Amount</center></th>
		</tr>
		<tr>
		<td><center><input type="text" ></center></td>
		<td><center><input type="text" ></center></td>
		<td><center><input type="text" ></center></td>
		<td><center><input type="text" ></center></td>
		<td><center><input type="text" ></center></td>
		</tr>
		</table>
		</center>
		<label for="Whether composition of IQAC as per latest NAAC guidelines:">9.Whether composition of IQAC as per latest NAAC guidelines:</label> <label class="container">Yes<input type="checkbox"> <span class="checkmark"></span><label class="container">No<input type="checkbox"><span class="checkmark"></span></label>
		 <label for="*upload latest notification of formation of IQAC  ">*upload latest notification of formation of IQAC  :</label>
		 <input type="text"  name="upload"  onkeyup="captitalize(this)"  required >
		 <label for="No. of IQAC meetings held during the year">10.No. of IQAC meetings held during the year:</label>
		 <input type="text"  name="no_iqac_meet"  onkeyup="captitalize(this)"  required >
		  <label for="The minutes of IQAC meeting and compliance to the decisions have been  uploaded on the institutional website:"> The minutes of IQAC meeting and compliance to the decisions have been  uploaded on the institutional website:</label>
		 <input type="text"  name="min_iqac_meets"  onkeyup="captitalize(this)"  required > Please upload, minutes of meetings and action taken report
		 		  <label class="container">Yes
                  <div>
		 <label class="container">Yes 
         <input type ="checkbox" align="left">
         <span class="checkmark" align="left"></span>
		 
           <label class="conatainer">No 
         <input type="checkbox" align="left">
         <span class="checkmark" align="left"></span>
         </label>
		 </label>
		 </div>
		<div><label for="Whether IQAC received funding from any of the funding agency to support its activities during the year?">11.Whether IQAC received funding from any of the funding agency to support its activities during the year?:</label>
		 <label class="container">Yes 
         <input type ="checkbox" align="left">
         <span class="checkmark" align="left"></span>
		 
           <label class="conatainer">No 
         <input type="checkbox" align="left">
         <span class="checkmark" align="left"></span>
         </label>
		 </label>
		 </div>
        </label><br>If yes, mention the amount:	<input type="text" name="amount">year:<input type="text" name="year">	
		 <label for="12. Significant contributions made by IQAC during the current year (maximum five bullets)">12. Significant contributions made by IQAC during the current year (maximum five bullets)</la>
		 <li> <input type="text"  name=""</li>
		 <li><input type="text"  name=""  </li>
		 <li> <input type="text"  name="" </li>
		 <li><input type="text"  name=""  </li>
		 <li> <input type="text"  name="" </li>
		 

		 
		 
        <label for="Plan of action chalked out by the IQAC in the beginning of the Academic year towards Quality Enhancement and the outcome achieved by the end of the Academic year:"> 13.Plan of action chalked out by the IQAC in the beginning of the Academic year towards Quality Enhancement and the outcome achieved by the end of the Academic year:</label> 
		<textarea rows="4" cols="50">Plan of action:</textarea>
		<textarea rows="4" cols="50">Achivements/Outcomes:</textarea>
        <label for="Whether NAAC/or any other accredited body(s) visited IQAC or interacted with it to Assess the functioning?">14.Whether NAAC/or any other accredited body(s) visited IQAC or interacted with it to Assess the functioning?</label>
		 
<div>
		 <label class="container">Yes 
         <input type ="checkbox" align="left">
         <span class="checkmark" align="left"></span>
		 
           <label class="conatainer">No 
         <input type="checkbox" align="left">
         <span class="checkmark" align="left"></span>
         </label>
		 </label>
		 </div>
		
		 
         <label for="Enter date":>Date </label>
          <input type="date" >
		   <label for="Whether institutional data submitted to AISHE: ">15.Whether institutional data submitted to AISHE: </label>
		<div>
		 <label class="container">Yes 
         <input type ="checkbox" align="left">
         <span class="checkmark" align="left"></span>
		 
           <label class="conatainer">No 
         <input type="checkbox" align="left">
         <span class="checkmark" align="left"></span>
         </label>
		 </label>
		 </div>
         <label for="Enter date of submission":>16.Date of Submission: </label>
          <input type="date" >
		    <label for="17.Does the Institution have Management Information System?">17.Does the Institution have Management Information System? </label>
		 <div>
		 <label class="container">Yes 
         <input type ="checkbox" align="left">
         <span class="checkmark" align="left"></span>
		 
           <label class="conatainer">No 
         <input type="checkbox" align="left">
         <span class="checkmark" align="left"></span>
         </label>
		 </label>
		 </div>
		  <label for="If yes, give a brief description and a list of modules currently operational(Maximum 500 words)">If yes, give a brief description and a list of modules currently operational(Maximum 500 words)</label> 
		<textarea rows="10" cols="50"></textarea>




	   </fieldset>
       <!-- <button type="submit" name="btn-upload">Save</button>-->
	<button type="submit" name="submit_val" >DOWNLOAD PDF</button>
    
        
	
      </form>
      
   
</html>
<br><br>
   <div id="footer">
	Copyrights &copy 2018| Kramah Software India Private Limited | All Rights Reserved
        <!--  &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP--></a>
    </div>
  

</body>

</html>
