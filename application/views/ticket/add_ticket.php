<!DOCTYPE html>
<?php 
$page="add_ticket";
?>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="assets/dist/css/style.min.css" rel="stylesheet">
  <script src="assets/node_modules/bootstrap/dist/css/bootstrap.min.css"></script>
   <link rel="stylesheet" href="assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
  <link rel="stylesheet" type="text/css" href="assets/dist/css/styles.css">
  

  
  <link rel="icon" type="image/png" sizes="16x16" href="images/pwslab-gear-white.png">
<title>Add Ticket</title>
<style>

#Department option{
padding:20x;
}
.select2-container--default .select2-selection--single {
    border: 1px solid #e6e4e4;
}
.select2-container .select2-selection--single {
    height: 39px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #2d77dc;
    border: 1px solid #2d77dc;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 3px 6px;
}

</style>
</head>
<body style="background: #f3f5f7;margin:0px;">
   <?php
   
   include('includes/header.php');
   include($css_path);
   ?>


<!-- add ticket end--> 


<div class="container-fluid" style="margin:40px">
<p></p>
<div class="row">
<div class="col-md-8">
<div class="Signin__details" style="padding:30px 20px;">


	<form  name="signinform" id="signinform" method="post" class="form"  autocomplete="off" enctype="multipart/form-data">
	<h4 style="margin-bottom:20px;">Submit a ticket</h4><br>

<h5  style="margin-bottom:20px;font-weight:700">Ticket Information</h5>
				<dl>
					<dd>
			
	<div class="form-group">
    <label> Department* </label>
	<select name="departmentId"  id="department" class="select2 form-control custom-select" style="width:100%;" onchange="changeDepartment(this.value)">
   <option value="7189000000051431">PWSLab DevOps Support</option>
  <option value="7189000000010772">iSupport</option>
                                                 
  </select> 
 </div>
					</dd>
				</dl>
				<br>
				<dl>
					<dd id="pcat">
	<div class="form-group">
	<label for="cars">Category*</label><br>
	<select name="category"  id="category" class="select2 form-control custom-select" style="width:100%;">
   <option value="">-None-</option>
   <option value="New Project">New Project</option>
  <option value="Update Ci/Cd Pipeline">Update Ci/Cd Pipeline</option>
  <option value="Dev Secops">Dev Secops</option>
    <option value="Git Source Control" >Git Source Control </option>
  <option value="Kubernetes Deployments (like EKS/GCP)" >Kubernetes Deployments (like EKS/GCP)</option>
                                                 
  </select> 
 </div>
					</dd>
				</dl>
				<br>
				<dl id="purl">
					<dd>
						<label for="cars">PWSLab Project URL*</label><br>
						<input class="inputBox" type="text" name="" placeholder="Project URL" autofocus="">
					</dd>
				</dl>
				
				<dl id="pphone">
					<dd>
						<label for="cars">Phone</label><br>
						<input class="inputBox" type="text" name="phone" placeholder="Phone" autofocus="">
					</dd>
				</dl>
				<dl>
					<dd id="psub">
						<label for="cars">Subject*</label><br>
						<input class="inputBox" type="text" name="subject" placeholder="Subject" autofocus="">
					</dd>
				</dl>	
				
				
	<div class="col-md-12">
                                            <label for="description"> Description</label>
										 <div class="form-group">
                                        <textarea class="textarea_editor2 form-control" id="description" name="description" rows="10" cols="10" placeholder="Enter text ..." required style="width:100%;"></textarea>
                                    </div>
                                    </div>
									
									<dl id="pprod">
					<dd>
						<label for="cars">Product Name</label><br>
						<input class="inputBox" type="text" name="product" placeholder="" autofocus="">
					</dd>
				</dl>
					
			
<h5  style="margin-bottom:20px;font-weight:700" id="cdetails">Contact Details</h5>

		<dl id="pcname">
					<dd>
						<label for="cars">Contact Name*</label><br>
						<input class="inputBox" type="text" name="" placeholder="Contact Name" autofocus="">
					</dd>
				</dl>
				<dl id="pmail">
					<dd>
						<label for="cars">Email*</label><br>
						<input class="inputBox" type="text" name="email" placeholder="Email Address" autofocus="">
					</dd>
				</dl>
					<dl id="pphone2">
					<dd>
						<label for="cars">Phone</label><br>
						<input class="inputBox" type="text" name="phone" placeholder="Phone" autofocus="" onkeypress="return isNumberKey(event)">
					</dd>
				</dl>
				
				<h5  style="margin-bottom:20px;font-weight:700">Additional Information</h5>
					<dl>
					<dd>
				<label for="cars">Priority*</label><br>

<select name="priority"  id="priority" class="select2 form-control custom-select" style="width:100%;">
  <option value="">-None</option>
  <option value="High">High - Production System Down</option>
  <option value="Medium">Medium - System Impaired</option>
  <option value="Low">Low - General Guidance</option>
                                                 
  </select> 
					</dd>
				</dl>
					<dl>
					<dd>
					                                    <label >Attach a file
(Up to 20 MB )</label>
                                    <div class="card image">
                                       <div class="card-body">
                                          <input type="file" id="fileToUpload" name="fileToUpload" class="dropify" data-show-remove="true" data-allowed-file-extensions="png jpg jpeg" data-max-file-size="20M" />
										  <input type="hidden" name="file" id="image" />
														  <progress value="0" id="uploader" max="100" style="display:none" >0%</progress>
												  <div id='progressid' style="display:none"><?PHP ECHO 'Uploading';?></div> 
												 
                                       </div>
                                    </div>
					</dd>
				</dl>
					<div class="form-actions" style="position:relative;bottom:20px;right:-30px;">	
<input type="hidden" name="contactId" value="7189000003189162" />				
			
				<button type="submit" id="submit" name="" class="btn btn-info" >Submit</button>
				
			<button type="reset" class="btn btn-secondry" >Discard</button>
			</form>

</div>
</div>
<div class="col-md-4"></div>
</div>


</div>
</div>
</div>


  <?php
				  include('includes/footer.php');
				  ?>
</body>

 <?php 
	include($js_path);
	?>
	<?php include($firebase_path);?>
	<script src="assets/dist/js/jquery.validate.min.js"></script>
	<script>

$.validator.addMethod("regx", function(value, element, regexpr) {          
return regexpr.test(value);
}, "Letters only");

(function($,W,D)
{

    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#signinform").validate({
                rules: {
                      category: {
                          required:true
						  
                          
                      },  
                      url: {
                            required:true
                            
                       }, 
					   subject: {
                            required:true
                            
                       }, 
					   contact_name: {
                            required:true
                            
                       }, 
					   email: {
                            required:true,
							email:true
                            
                       },  
					   phone: {
                            required:true
                            
                       }, 
					   priority: {
                            required:true
                            
                       }, 
					  
                 },
                messages: {
                      category: {
                          required:"<font color='red' style='position:relative;top:58px'>Select Category </font>"
                          
                      },
                      url: {
                          required:"<font color='red'>Enter PWSLab Project URL </font>"
                          
                      },
					  subject: {
                          required:"<font color='red'>Enter Subject </font>"
                          
                      },
					  contact_name: {
                          required:"<font color='red'>Enter Contact Name </font>"
                          
                      },
					  email: {
                          required:"<font color='red'>Enter Email Id </font>",
                          email:"<font color='red'>Enter Valid Email Id </font>"
                          
                      },
					  phone: {
                          required:"<font color='red'>Enter Phone </font>"
                          
                      },
					  priority: {
                          required:"<font color='red' style='position:relative;top:58px'>Select Priority </font>"
                          
                      },
					  
                },
                          submitHandler: function(form) {
							 
							var selectedFile; 
var iurls=''; 
var arr=[];
var files = document.getElementById("fileToUpload").files;
var pic = document.getElementById("fileToUpload");     
if(files.length==0){ functionsumitform(form); }else{captureimageupload();}
function captureimageupload() 
{ 
for(i=0;i<files.length;i++){
          selectedFile = pic.files[i]; 
          var rtrn=myfunction(selectedFile); 
}  
}
function myfunction(selectedFile) 
{ 
document.getElementById("progressid").style.display="";
document.getElementById("uploader").style.display="";
document.getElementById("submit").style.display="none";
          var name="Admin"+Date.now()+selectedFile.name; 
          var storageRef = firebase.storage().ref('Ticket/'+name); 
          var uploadTask = storageRef.put(selectedFile); 
          uploadTask.on('state_changed', function(snapshot){ 
            var progress =  (snapshot.bytesTransferred / snapshot.totalBytes) * 100; 
              var uploader = document.getElementById('uploader'); 
              uploader.value=progress; 
          }, function(error) {console.log(error); 
          }, function() { 
               uploadTask.snapshot.ref.getDownloadURL().then( 
                function(downloadURL) { 
            arr.push(downloadURL); 
            iurls = iurls+downloadURL+','; 
			   if(files.length==arr.length){
				   document.getElementById("image").value=iurls.substring(0, iurls.length - 1);
				    // if(files2.length==0){ functionsumitform(form); }else{captureimageupload();}
				   functionsumitform(form);
			   }
            }); 
          }); 
}	

	
							function functionsumitform(form) 
{ 
							 
                             var formData = new FormData(form);
                             var form = $(signinform);
         					var url = 'AJAX_addTicket';
         
         					$.ajax({
         					type: "POST",
         					url: url,
         					data: formData, // serializes the form's elements.
         					processData:false,
                            contentType: false,
         					cache:false,
         					success: function(data)
                            {
									document.getElementById("progressid").style.display="none";
									document.getElementById("uploader").style.display="none";
									document.getElementById("submit").style.display="";
												$( "#submit" ).prop( "disabled", false );
													$('#description').data("wysihtml5").editor.clear();
					      if(data){ 
							    $('.dropify-clear').click();	 
							  document.getElementById("signinform").reset();
         	 Swal.fire({
                          text:  " Ticket Added Successfully",
                         type: 'success',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                           //location.href = 'edit_user?id='+<?php echo $res;?>
                         }else{
         					  return false;
         				}
                     })
         				  }
         				  else{
         					Swal.fire({
                          text:  data,
                         type: 'Failed to Add Ticket',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                           //location.href = 'edit_user?id='+<?php echo $res;?>
                         }else{
         					  return false;
         				}
                     })  
         				  }
         			
                            }
                               });
}				 
				 

				 
				 
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
		

    });
 
})(jQuery, window, document);

</script>

	

	<script>
	  $(".select2").select2();
	  $("select").on("select2:close", function (e) {  
        $(this).valid(); 
    });
	</script>
	
	
	<script>
	$('#btnaddticket').hide();
	$('#txttxt').html('<a href="myarea" style="color:white">My Area</a> / Submit a Ticket');
	</script>
	
		<script src="assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
	 <script>
    $(document).ready(function() {

        $('.textarea_editor2').wysihtml5();
       


    });
	
    </script>
		<script>
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}	
</script>


<script>
$('#pprod').hide();
$('#pphone').hide();
function changeDepartment(val){
	
}
</script>
</html>