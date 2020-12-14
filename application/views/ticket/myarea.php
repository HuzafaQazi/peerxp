<?php
if(empty($_SESSION['USER_ID'])){
	header('Location:index');
}
$page="myarea";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="assets/dist/css/style.min.css" rel="stylesheet">
  <script src="assets/node_modules/bootstrap/dist/css/bootstrap.min.css"></script>
   <link rel="stylesheet" href="assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
  <link rel="stylesheet" type="text/css" href="assets/dist/css/styles.css">
  
<?PHP 
include_once("api_call_function.php");
	

	   $make_call = callAPI('GET','https://desk.zoho.in/api/v1/tickets',false);
 
 $data = json_decode($make_call,true);
// print_r($data);


 ?>
  
  <link rel="icon" type="image/png" sizes="16x16" href="images/pwslab-gear-white.png">
<title>My Area</title>
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
span a,p a{
	color:#512dab;
	font-weight:600;
}
.mainview{
	    width: 100%;
    display: flex;
    justify-content: space-between;
}

.TicketListItem__box, .TicketListItem__footerBox {
    flex: 1;
    min-width: 0;
    padding-right: 1.25rem;
    font-size: 1.125rem;
    line-height: inherit;
    column-rule: #000;
   margin: 0.625rem 0 0.625rem 0;
    word-break: break-word;
}
.List__postdet {
    align-items: center;
}
.commonStyle__flexWrapRow {
    display: flex;
    flex-wrap: wrap;
}
.commonStyle__ulAlign {
    margin: 0;
    padding: 0;
    list-style: none;
}
.List__postdet>li:first-child {
    padding-left: 0;
    margin: 0;
}
.List__postdet li {
    position: relative;
    color: #666;
    font-size: 0.8125rem;
    font-weight: 500;
}
.commonStyle__inlineBlock {
    display: inline-block;
}
.AvatarText__circle {
    border: 0.0625rem solid #dadada;
    border-radius: 50%;
    background-color: #fff;
}
.AvatarText__small {
    height: 2.1875rem;
    width: 2.1875rem;
}
.AvatarText__avatarText {
    overflow: hidden;
    text-transform: uppercase;
    color: #666;
}
.commonStyle__dFlexJcAc {
    display: flex;
    align-items: center;
    justify-content: center;
}
.TicketListItem__footerWrapper {
    align-items: center;
}
.TicketListItem__wrapper, .TicketListItem__footerWrapper {
    flex-flow: wrap;
    justify-content: space-between;
}
.Icon__xSmall {
    width: 0.9375rem;
    height: 0.9375rem;
}
.List__postdet li+li:before {
    content: "";
    height: 0.1875rem;
    width: 0.1875rem;
    background: #bdbdbd;
    border-radius: 50%;
    display: inline-block;
    margin: 0px 10px;
    vertical-align: middle;
}
.TicketListItem__container {
    padding: 0 0.625rem;
    width: 100%;
    border-bottom: 0.0625rem solid #f2f2f2;
    margin-bottom: 0.625rem;
}


.TicketListRightContainer1__wrapper {
    padding: 4.1rem 0 0;
}
.commonStyle__positionRel {
    position: relative;
}
.Menu__MenuTitle {
    color: #000;
    margin: 0 0 0.9375rem;
}
.commonStyle__alignCenter {
    align-items: center;
}
.commonStyle__dFlex {
    display: flex;
}
.commonStyle__fweight600 {
    font-weight: 600;
}
.Menu__heading {
    letter-spacing: .03125rem;
    padding: 0 0 .5rem;
    padding: 0;
    color: #333;
    font-size: 1rem;
    word-wrap: break-word;
    word-break: break-word;
    margin: 0;
}
.commonStyle__fweight600 {
    font-weight: 600;
}
.commonStyle__overflowDotted {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.commonStyle__ulAlign {
    margin: 0;
    padding: 0;
    list-style: none;
}
.Menu__menuItemBefore, .Menu__menuItem, .Menu__menuItemBeforeHide {
    color: #333;
    font-size: 0.875rem;
    padding: 0.35rem 1.5625rem;
}
.commonStyle__active, .commonStyle__active:hover, .Icon__activeBlue {
    color: #512dab;
}
.commonStyle__link, .themeLink {
    color: #512dab;
}
.Link__link {
    max-width: 100%;
}
.commonStyle__displayBlock {
    display: block;
}
.commonStyle__overflowDotted {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
</head>
<body style="background: #f3f5f7;margin:0px;">
   <?php
   
   include('includes/header.php');
   include($css_path);
   ?>


<!-- add ticket end--> 


<div class="container-fluid" style="padding: 20px 60px;">
<p></p>
<div class="row">
<div class="col-md-8">
<!--<div class="row">
<div class="col-md-6">
<h6>Status:
<span style="padding:10px;"><a href="#">Open (2)‎</a></span>
<span style="padding:10px;"><a href="#">Closed (2)‎‎</a></span>
<span style="padding:10px;"><a href="#">On Hold‎</a></span>
</h6>
</div>
<div class="col-md-6">
<h6>Created By:
<span style="padding:10px;"><a href="#">You‎</a></span>
<span style="padding:10px;"><a href="#">Team‎‎</a></span>
<span style="padding:5px;"><a href="#">My CC'ed tickets‎‎</a></span>
</h6>
</div>
</div>-->
<div class="Signin__details" style="padding:30px 20px;">
<div style="width:100%;">

<?php foreach($data['data'] as $key=>$row) { //$i++; 
if($row['departmentId']=='7189000000010772'){
	$department='iSupport';
}
else if($row['departmentId']=='7189000000051431'){
		$department='PWSLab DevOps Support';
}
?>
<div style="border-bottom: 0.0625rem solid #f2f2f2;">
<div class="mainview">
<p><a href="ticket?id=<?php echo $row['id'];  ?>"><?php echo $row['subject'];  ?></a></p>
<p>#<?php echo $row['ticketNumber'];  ?></p>
</div>

<div class="TicketListItem__footerWrapper commonStyle__dFlex" data-id="ticket_list_view1336">
<div class="TicketListItem__footerBox">
<ul class="List__postdet List__list commonStyle__ulAlign commonStyle__flexWrapRow">
<li class="List__listItems commonStyle__inlineBlock TicketListItem_assignee"><span title="unassigned" name="TicketListItem_assignee">
<div data-id="assignee_1336" class="AvatarText__avatarText commonStyle__dFlexJcAc AvatarText__small AvatarText__circle">UN</div></span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_channel"><span name="TicketListItem_channel" title="<?php echo $row['channel'];  ?>">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall"><use xlink:href="#chWeb"></use>
</svg></span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_departmentName">
<span name="TicketListItem_departmentName" data-id="ticket_department_name"><?php echo $department;?></span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_createdTime">
<span data-id="createdTime_1336" name="TicketListItem_createdTime" title="<?php echo date('d M Y g:i a',strtotime($row['createdTime']));  ?>">
<span><?php $todaydate = date("Y-m-d H:i:s");

$ago = strtotime($todaydate) - strtotime($row['createdTime']);
  if ($ago >= 86400) {
    $diff = floor($ago/86400).' days ago';
  } elseif ($ago >= 3600) {
    $diff = floor($ago/3600).' hours ago';
  } elseif ($ago >= 60) {
    $diff = floor($ago/60).' minutes ago';
  } else {
    $diff = $ago.' seconds ago';
  }
  echo $diff;
  ?>


</span></span></li></ul></div></div>
</div>

<?php } ?>

<!--<div style="border-bottom:0.0625rem solid #f2f2f2;">
<div class="mainview">
<p><a href="#">name</a></p>
<p>#1156</p>
</div>

<div class="TicketListItem__footerWrapper commonStyle__dFlex" data-id="ticket_list_view1336">
<div class="TicketListItem__footerBox">
<ul class="List__postdet List__list commonStyle__ulAlign commonStyle__flexWrapRow">
<li class="List__listItems commonStyle__inlineBlock TicketListItem_assignee"><span title="unassigned" name="TicketListItem_assignee">
<div data-id="assignee_1336" class="AvatarText__avatarText commonStyle__dFlexJcAc AvatarText__small AvatarText__circle">UN</div></span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_channel"><span name="TicketListItem_channel" title="Web">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall"><use xlink:href="#chWeb"></use>
</svg></span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_departmentName">
<span name="TicketListItem_departmentName" data-id="ticket_department_name">PWSLab DevOps Support</span></li>
<li class="List__listItems commonStyle__inlineBlock TicketListItem_createdTime">
<span data-id="createdTime_1336" name="TicketListItem_createdTime" title="13 Dec 2020 01:00 PM">
<span>2 hours ago</span></span></li></ul></div></div>
</div>-->

</div>



</div>
</div>
<div class="col-md-4">

<div class="TicketListRightContainer1__wrapper">
<div class="widgetItem"><div class="Menu__container commonStyle__positionRel">
<div class="Menu__MenuTitle commonStyle__fweight600 commonStyle__dFlex commonStyle__alignCenter">
<div class="Menu__heading commonStyle__fweight600 commonStyle__overflowDotted">
<!-- react-text: 1878 -->Department(s)<!-- /react-text --><!-- react-text: 1879 -->&lrm;<!-- /react-text --></div></div>
<ul class="Menu__menu commonStyle__ulAlign"><li class="Menu__menuItemBefore commonStyle__positionRel commonStyle__overflowDotted">
<a rel="noopener" data-id="department_All Departments_title" class="Link__link commonStyle__link commonStyle__cursor commonStyle__verticalMiddle Link__active commonStyle__active " href="#">
<span class="Menu__partlabel commonStyle__overflowDotted commonStyle__displayBlock">All Departments</span></a></li>
<li class="Menu__menuItemBefore commonStyle__positionRel commonStyle__overflowDotted">
<a rel="noopener" data-id="department_PWSLab DevOps Support_title" class="Link__link commonStyle__link commonStyle__cursor commonStyle__verticalMiddle " href="#">
<span class="Menu__partlabel commonStyle__overflowDotted commonStyle__displayBlock">PWSLab DevOps Support</span></a></li>
<li class="Menu__menuItemBefore commonStyle__positionRel commonStyle__overflowDotted">
<a rel="noopener" data-id="department_iSupport_title" class="Link__link commonStyle__link commonStyle__cursor commonStyle__verticalMiddle " href="#">
<span class="Menu__partlabel commonStyle__overflowDotted commonStyle__displayBlock">iSupport</span></a></li></ul></div></div><div class="widgetItem"><!-- react-empty: 1891 --></div></div>
</div>
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
                 form.submit();
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
	$('#txttxt').html('My Area');
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
</html>