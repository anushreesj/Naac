<?php


 error_reporting(E_ALL);

$connection = mysql_connect("localhost", "root", "admin"); // Establishing Connection with Server
$db = mysql_select_db("part_a", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$name_i = $_POST['name'];
$name_h = $_POST['head_inst'];
$des = $_POST['des'];
$campus=$_POST['own_campus'];
$ph = $_POST['ph_no'];
$mob = $_POST['mob_no'];

$email = $_POST['email'];
$a_email = $_POST['alt_email'];
$add = $_POST['address'];
$city1 = $_POST['city'];
$state1 = $_POST['state'];
$pin1 = $_POST['pin'];
if(($name_i !=''||$email !='')&&(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $ph)&&(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $mob)))){
//Insert Query of SQL
$query = mysql_query("insert into data_inst(name,head_inst,des,own_campus,ph_no,mob_no,email,alt_email,address,city,state,pin) values ('$name_i','$name_h','$des','$campus','$ph','$mob','$email','$a_email','$add','$c','$s','$p')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank enter valid phone number....!!</p>";
}

$univ = $_POST['a'];
$type = $_POST['b'];
$loc = $_POST['c'];
$fin_status = $_POST['ch4'];
$i_coord = $_POST['name_iqac'];
$phno = $_POST['phone'];
$mobno = $_POST['mobile'];
$email = $_POST['email'];
$alt_email = $_POST['alt_mail'];
$mis = $_POST['h'];
$desc = $_POST['desc'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into inst_status(university,type,location,fin_status,iqac_coordinator,phno,mobno,email,alt_email,mis,description) values ('$univ','$type','$loc','$fin_status','$i_coord','$phno','$mobno','$email','$alt_email','$mis','$desc')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
} // Fetching variables of the form which travels in URL

$poa = $_POST['pa'];
$achive = $_POST['ach'];

$query = mysql_query("insert into awards(plan_of_action,achivements) values ('$poa','$achive ')");
$sig1=$_POST['a1'];
$sig2=$_POST['a2'];
$sig3=$_POST['a3'];
$sig4=$_POST['a4'];
$sig5=$_POST['a5'];
$query = mysql_query("insert into contributions(contrib1,contrib2,contrib3,contrib4,contrib5)values('$sig1','$sig2','$sig3','$sig4','$sig5')");
$inst=$_POST['idf'];
$scheme=$_POST['sch'];
$funds=$_POST['fa'];
$dur=$_POST['yoad'];
$amtt=$_POST['amt'];
$query=mysql_query("insert into special_status(inst_dep_fac,scheme,funding_agency,year_and_duration,amount)values('$inst','$scheme','$funds','$dur','$amtt')");

$webad= $_POST['website_addr'];
$weblink= $_POST['web_link'];
$file = $_FILES["file"]["name"];
move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$file);
$yesno1= $_POST['yesno'];
$d1= $_POST['weblink'];
$e1= $_POST['date_e'];
$f1= $_POST['d'];

$h1= $_POST['no_iqac_meet'];

$i1= $_POST['report'];
$j1= $_POST['fund'];
$k1= $_POST['amount'];
$l1= $_POST['year'];
$m1= $_POST['placed'];
$n1= $_POST['st_name'];

$o1= $_POST['dat'];
$p1= $_POST['visit'];
$q1= $_POST['visit_date'];
$r1= $_POST['submit_1'];

$s1= $_POST['year_sub'];
$t1= $_POST['dat2'];


//if($name !=''||$email !=''){

$query = mysql_query("insert into aqar(web_addr,web_link_aqar,upl_inst_web,web_link,date_estd,fol_naac_guide,upload_iqac_notif,no_of_iqua_meet,upload_iqua_dec,received_fund,amount,year,aqar_placed,name_of_st,date_of_meet,naac_visited_iqac,visit_date,data_submitted,year_of_submit,date_of_submit)values('$a1','$b1','$c1','$d1','$e1','$f1','$file','$h1','$i1','$j1','$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1')");
echo "<br/><br/><span>Data Inserted successfully(3)...!!</span>";
$we=$_POST['itq'];
$our=$_POST['dd'];
$us=$_POST['nop'];
$query=mysql_query("insert into iqas(item,date_dur,no_of_participants)values('$we','$our','$us')");
echo "<br/><br/><span>Data Inserted successfully(5)...!!</span>";


$grade = $_POST['grade1'];
$cgpa = $_POST['cgpa1'];
$year = $_POST['year1'];
$valid_from = $_POST['val_from1'];
$valid_to = $_POST['val_to1'];


//if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into accr_details(cycle,grade,cgpa,year,val_from,val_to) values ('1st','$grade','$cgpa','$year','$valid_from','$valid_to')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";
$grade2 = $_POST['grade2'];
$cgpa2 = $_POST['cgpa2'];
$year2 = $_POST['year2'];
$valid_from2 = $_POST['val_from2'];
$valid_to2 = $_POST['val_to2'];

$query = mysql_query("insert into accr_details(cycle,grade,cgpa,year,val_from,val_to) values ('2nd','$grade2','$cgpa2','$year2','$valid_from2','$valid_to2')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";

$grade3 = $_POST['grade3'];
$cgpa3 = $_POST['cgpa3'];
$year3 = $_POST['year3'];
$valid_from3 = $_POST['val_from3'];
$valid_to3 = $_POST['val_to3'];

$query = mysql_query("insert into accr_details(cycle,grade,cgpa,year,val_from,val_to) values ('3rd','$grade3','$cgpa3','$year3','$valid_from3','$valid_to3')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";

$grade4 = $_POST['grade4'];
$cgpa4 = $_POST['cgpa4'];
$year4 = $_POST['year4'];
$valid_from4 = $_POST['val_from4'];
$valid_to4 = $_POST['val_to4'];

$query = mysql_query("insert into accr_details(cycle,grade,cgpa,year,val_from,val_to) values ('4th','$grade4','$cgpa4','$year4','$valid_from4','$valid_to4')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";

$grade5 = $_POST['grade5'];
$cgpa5 = $_POST['cgpa5'];
$year5 = $_POST['year5'];
$valid_from5 = $_POST['val_from5'];
$valid_to5 = $_POST['val_to5'];

$query = mysql_query("insert into accr_details(cycle,grade,cgpa,year,val_from,val_to) values ('5th','$grade5','$cgpa5','$year5','$valid_from5','$valid_to5')");
echo "<br/><br/><span>Data Inserted successfully(2)...!!</span>";


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

body{background-color:rgb( 102,153,255,0.4);
             }
 form{
				 max-width:100%;
    padding: 10px 20px;
    background:   #f4f7f8;
    margin: 10px auto;
	 margin-left:250px;
    padding: 20px;
    ;
    border-radius: 8px;
   
			 }
			 
			 table{
				 max-width:700px;
    padding: 10px 20px;
    
    border-radius: 8px;
   
			 }
	#box{ width:125%;}
	
	.btn-primary{
		width:200px;
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


   
  <img src ="logo.png" height="50"  style="margin-left:10px;margin-top:-50px;" alt ="  " /></a>
<body>
<div id="box">
	    <form action="nqwe.php" method="post" enctype="multipart/form-data">
      
     



Part – A

Data of the Institution 
(data may be captured from IIQA)
	 
	 
	 
		 <fieldset>
          <legend><span class="number">1</span> Data of the Institution</legend>
		  <label for="1. Name of the Institution">1. Name of the Institution
        <input type="text"  name="name"    onkeyup="captitalize(this)" value="" required >
		<label for="•	Name of the Head of the institution :">•	Name of the Head of the institution :
        <input type="text"  name="head_inst"  onkeyup="captitalize(this)" value=""required >
		<label for="Designation">•Designation:
        <input type="text"  name="des"   onkeyup="captitalize(this)" value="" required >
		
	<div>	<label>•	Does the institution function from own campus:</label>
         <label class="container"> Yes
          
         <input type="radio" name="own_campus" value="Yes" align="left" checked>
         <span class="checkmark"></span>
         <class="container" align="left">No
      
        <input type="radio" name="own_campus" value="No" align="left">
        <span class="checkmark" align="left"></span>
    </div></label>

         <label for="•	Phone no./Alternate phone no. ">•	Phone no./Alternate phone no:</label>
        <input type="number"  name="ph_no"   onkeyup="captitalize(this)"  required >
		<label for="•	Mobile no. ">•	Mobile no.:</label>
        <input type="text"  name="mob_no" value=""  required >
		<label for="•	Registered Email ">•	Registered Email:</label>
        <input type="text"  name="email"  onkeyup="captitalize(this)" value="" required >
		<label for="•	Alternate Email ">•	Alternate Email:</label>
        <input type="text"  name="alt_email"   value=" " required >
		<label for="•	Address  :">•Address:</label>
        <input type="text"  name="address" value="" required >
		<label for="•	City/Town ">•	City/Town :</label>
        <input type="text"  name="city"    value="" required >
		<label for="•	State/UT    ">•		State/UT    :</label>
        <input type="text"  name="state"   value=" " required >
		<label for="•	Pin Code  ">•	Pin Code      :</label>
        <input type="text"  name="pin"   onkeyup="captitalize(this)" value=""required >
		                       
	<div>
		     <label>•	University: State/Central/Deemed/Private:•   University: State/Central/Deemed/Private: </label>
             <label class="container" >State
             <input type="radio" name="a" value="State">
             <class="container">Central
             <input type="radio" align="left" name="a" value="Central">
	         <class="container">Deemed
             <input type="radio"align="left" name="a" value="Deemed">
	         <class="container">Private
		     <input type="radio"align="left" name="a" value="Private"> Select Appropriate
        </div></label>
		<div>
		     <label>•	Type of Institution: Co-education/Men/Women </label>
             <label class="container" >Co-education
             <input type="radio" name="b" value="Co-education">
             <class="container">Men
             <input type="radio" align="left"name="b" value="Men">
	         <class="container">Women
             <input type="radio"align="left"name="b" value="Women">
	         
        </div></label>
		<div>
		     <label>•	Location : Rural/Semi-urban/Urban: </label>
             <label class="container" >Rural
             <input type="radio" name="c" value="Rural">
             <class="container">Semi-urban
             <input type="radio" align="left" name="c" value="Semi-urban">
	         <class="container">Urban
             <input type="radio" align="left"name="c" value="Urban">
	         
        </div></label>
		<label>•   Financial status: Centrally funded/State funded/Private:
		<div>
		    
             <label class="container" >Centrally funded
             <input type="radio" name="ch4" value="Centrally funded">
             <class="container">State funded
             <input type="radio" align="left" name="ch4" value="State funded">
	         <class="container">Private
             <input type="radio" align="left"name="ch4" value="Private">
	         
        </div></label>
	
          <label for="Name of the IQAC Co-ordinator/Director:">Name of the IQAC Co-ordinator/Director:</label>
          <input type="text"  name="name_iqac" value="" onkeyup="captitalize(this)" required><br>
	  
	   <label for="Phone no. /Alternate phone no.">Phone no./Alternate phone no</label>
          <input type="number"  name="phone"  onkeyup="captitalize(this)" required><br>
	  
	   <label for= "Mobile" >Mobile:</label>
          <input type="number" name="mobile" onkeyup="captitalize(this)" required><br>
	  
	    <label for="IQAC e-mail address:">IQAC e-mail address:</label>
          <input type="text"  name="email" value=""  required>
	  
	   <label for="Alternate Email address" >Alternate Email address</label>
          <input type="text"  name="alt_mail"   required><br>
	  </fieldset>
	  <fieldset>
          <legend><span class="number">3</span> </legend>
	  
          <label for="Website Address">Website Address</label>
	 <input type="text"  name="website_addr"  ><br>
	 
	<label for="Web-link of the AQAR: (Previous Academic Year):">Web-link of the AQAR: (Previous Academic Year):</label>
	 <input type="text"  name="web_link" > <br>
	
	 
	</fieldset>
	<fieldset>
<div><legend> <span class = "number">4</span>Whether Academic Calendar prepared during the year?  </legend>
	 <label class="container" >Yes
             <input type="radio" align="left" name="o">
             <class="container">No
             <input type="radio" align="left" name="o">
	</div></label>        
	         
	<label for="if yes, whether it is uploaded in the Institutional website">If yes, whether it is uploaded in the Institutional website</label>
	<input type = "text" name = "yesno" > <br>
	
	<label for = "weblink">Weblink</label>
	<input type = "text" name ="weblink" > <br>
	</fieldset>
	<fieldset> 
	<legend><span class = "number">5</span> Date of Establishment of IQAC </legend>
	<label for = "Date">Date </label>
	<input type = "Date" name = "date_e" > <br>
	</fieldset>

	   <fieldset>
		
		<legend><span class="number">6</span> Accreditation Details</legend>
		
		<center>
		
		<table cellspacing=0 border="2" width="430" height="1" test-align="center">
		
		<tr>
		<th><center>Cycle </center></th>
		<th><center>Grade</center></th>
		<th><center>CGPA</center></th>
		<th><center>YEAR OF ACCREDATION</center></th>
		<th><center>VALIDITY PERIOD</center></th>
        </tr>
		<tr>
		<td><center>1st</center></td>
		<td><center><input type="text" name = "grade1"  value = ""></center></td>
		<td><center><input type="text" name = "cgpa1" value = ""></center></td>
		<td><center><input type="text"name = "year1" value = ""></center></td>
		<td>From:<input type="date" name = "val_from1" value = ""> To: <input type = "date" name = "val_to1" value = ""></td>
    </tr>

	<tr>
		<td>2nd</td>
		<td><center><input type="text" name = "grade2" value = ""></center></td>
		<td><center><input type="text" name = "cgpa2" value = ""></center></td>
		<td><center><input type="text" name = "year2" value = ""></center></td>
		<td>From:<input type="date" name = "val_from2" value = ""> To: <input type = "date" name = "val_to2" value = ""></td>
    </tr>
	
	<tr>
		<td><center>3rd</center></td>
		<td><center><input type="text" name = "grade3" value = ""></center></td>
		<td><center><input type="text" name = "cgpa3" value = ""></center></td>
		<td><center><input type="text" name = "year3" value = ""></center></td>
		<td>From:<input type="date" name = "val_from3" value = ""> To: <input type = "date" name = "val_to3" value = ""></td>
    </tr>
	
	<tr>
		<td><center>4th</center></td>
		<td><center><input type="text" name = "grade4" value = ""></center></td>
		<td><center><input type="text" name = "cgpa4" value = ""></center></td>
		<td><center><input type="text" name = "year4" value = ""></center></td>
		<td>From:<input type="date" name = "val_from4" value = ""> To: <input type = "date" name = "val_to4" value = ""></td>
    </tr>
	
	<tr>
		<td><center>5th</center</td>
		<td><center><input type="text" name ="grade5"value = ""></center></td>
		<td><center><input type="text" name ="cgpa5" value = ""></center></td>
		<td><center><input type="text" name = "year5" value = ""></center></td>
		<td>From:<input type="date" name = "val_from5" value = ""> To: <input type = "date" name = "val_to5" value = ""></td>
    </tr>
	</center>
	</table>
	</fieldset> 
	    <fieldset>

 <legend><span class = "number">7</span> Internal Quality Assurance System </legend>
	<table style="width:100%">
	<table cellspacing=0 border="3" width="1400" height="260">
		
      <h4><align="left">Quality initiatives by IQAC during the  year  for promoting quality culture </h4>
		 <tr> 
		    <th><center> Item /Title of the quality initiative by IQAC </center></th>
			<th><center>Date & duration </center></th>
			<th><center> Number of participants/beneficiaries</center></th>
		</tr>
		<tr>
		<td><center><input type="text" name="itq"></center></td>
		<td><center><input type="text" name="dd"></center></td>
		<td><center><input type="text" name="nop"></center></td>
		</tr></table>
	</fieldset>
	<fieldset>
	<legend><span class = "number">8</span>Provide the list of Special Status conferred by Central/ State Government-UGC/CSIR/DST/DBT/ICMR/TEQIP/World Bank/CPE of UGC etc. </legend>
	<table style="width:100%">
     
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
		<td><center><input type="text" name="idf"></center></td>
		<td><center><input type="text" name="sch"></center></td>
		<td><center><input type="text" name="fa"></center></td>
		<td><center><input type="text" name="yoad"></center></td>
		<td><center><input type="text" name="amt"></center></td>
		</tr>
		</table>
		</center>
		<div>
	   <legend><span class = "number">9</span>Whether composition of IQAC as per latest NAAC guidelines:</span></legend>
             <label class="container" >Yes
             <input type="radio" align="left" name="d">
             <class="container">No
             <input type="radio" align="left" name="d">
	        
	         
        </div></label>
		
        <label>*upload latest notification of formation of IQAC <br> <input type="file" name="file" align="left"/></label>
		
		
         
	    
        
		<br><legend><span class = "number">10</span>No. of IQAC meetings held during the year:</legend>
		 <input type="text"  name="no_iqac_meet" align="left"  required >
		  <label for="The minutes of IQAC meeting and compliance to the decisions have been  uploaded on the institutional website:"> The minutes of IQAC meeting and compliance to the decisions have been  uploaded on the institutional website:
          <div>		 
		 <label class="container">Yes
          <input type="radio" name="report" value="Yes">
          <span class="checkmark"></span>
          <class="container">No
          <input type="radio" name="report" value="No">
          <span class="checkmark"></span>
		 </div></label>
		
		 
		  <label>Please upload, minutes of meetings and action taken report<br> <input type="file" name="file1" align="left"/></label>
		
		
		<legend><span class="number">11</span>Whether IQAC received funding from any of the funding agency to support its activities during the year?</legend>
		<div>
		  <label class="container" >Yes
             <input type="radio" align="left" name="fund" value="Yes">
             <class="container">No
             <input type="radio" align="left" name="fund" value="No">
	        
	         
        </div></label>
        </label><br>If yes, mention the amount:	<input type="text" name="amount">Year:<input type="text" name="year">	
		 <legend><span class="number">12</span>Significant contributions made by IQAC during the current year (maximum five bullets)</legend>
		 <li> <input type="text"  name="a1" </li>
		 <li><input type="text"  name="a2" value=" " </li>
		 <li> <input type="text"  name="a3" value=" " </li>
		 <li><input type="text"  name="a4" value=" " </li>
		 <li> <input type="text"  name="a5" value=" " </li> 
		 

		 
		 
       <legend><span class="number">13</span>Plan of action chalked out by the IQAC in the beginning of the Academic year towards Quality Enhancement and the outcome achieved by the end of the Academic year:</legend> 
		<br><label>PLAN OF ACTION:
		<textarea rows="4" cols="50" name="pa"></textarea></label>
		<label>Achievements/Outcomes:
	    <textarea rows="4" cols="50" name="ach"></textarea></label>
        <legend><span class="number">14</span>Whether NAAC/or any other accredited body(s) visited IQAC or interacted with it to Assess the functioning?</legend>
		 <div>
             <label class="container" >Yes
             <input type="radio" align="left" name="placed" value="Yes">
             <class="container">No
             <input type="radio" align="left" name="placed">
			 <label for="Name of the statuatury body"> Name of the statuatury body:</label>
          <input type="text" name="st_name" value="No" >
	        
	         
        </div></label>
		 
         <label for="Enter date":>Date </label>
          <input type="date" name="dat">
		<div>   <legend><span class="number">15</span>Whether institutional data submitted to AISHE: </legend>
		
             <label class="container" >Yes
             <input type="radio" align="left" name="visit" value="Yes">
             <class="container">No
             <input type="radio" align="left" name="visit" value="No">
			 <br>
			  <label for="Enter date":>Date </label>
            <input type="date" name="visit_date">
	        
	         
        </div></label> 
         <div><legend><span class="number"> 16</span>  Whether institutional data submitted to AISHE: </legend>
		 
		 <label class="container" >Yes
             <input type="radio" align="left" name="submit_1" value="Yes">
             <class="container">No
             <input type="radio" align="left" name="submit_1" value="No">
			 <br>
			  <label for="Enter date":>Year</label>
			  <input type="date" name="year_sub">
         </div></label>
		 
		 
		 <label>Date of submission: </label>
          <input type="date" name="dat2" >
		 <div><label>17.Does the Institution have Management Information System? </label>
		
		  <label class="container" >Yes
             <input type="radio" align="left" name="h" value="Yes">
             <class="container">No
             <input type="radio" align="left" name="h" value="No">
	        
         </div></label>
		  <label>If yes, give a brief description and a list of modules currently operational(Maximum 500 words)
		<textarea rows="10" cols="50"  name="desc">
      </textarea></label>



	   </fieldset>
        <input type="submit" name="save" value="SAVE" class="btn-lg">
	   <input type="submit" name="submit" value="SUBMIT" class="btn-lg">
	<input type="submit" name="submit_val" value="DOWNLOAD" class="btn-lg">
        
	 </form>
     
      </div>
  
<br><br>
   <div id="footer">
	Copyrights &copy 2018| Kramah Software India Private Limited | All Rights Reserved
         &copy 2014 kramahsoftware.com | All Rights Reserved |  <a href="http://Kramahsoftwares.com" style="color: #fff" target="_blank">Design by : SSP</a>
    </div>
  


</body>
</html>
