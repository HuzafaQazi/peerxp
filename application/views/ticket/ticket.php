<!DOCTYPE html>
<?php $id= $_GET['id']; ?>
<?PHP 
include_once("api_call_function.php");
	

	   $make_call = callAPI('GET','https://desk.zoho.in/api/v1/tickets/'.$id,false); 
 
 $data = json_decode($make_call,true);
// print_r($data);


 ?>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="assets/dist/css/style.min.css" rel="stylesheet">
  <script src="assets/node_modules/bootstrap/dist/css/bootstrap.min.css"></script>
   <link rel="stylesheet" href="assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
  <link rel="stylesheet" type="text/css" href="assets/dist/css/styles.css">
  <link href="assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
  	    <script src="assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
  
  

  
  <link rel="icon" type="image/png" sizes="16x16" href="images/pwslab-gear-white.png">
<title>Ticket</title>
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
  
  
  
.ConversationForm__conversationForm {
    justify-content: flex-end;
}

.commonStyle__alignCenter {
    align-items: center;
}
.commonStyle__dFlex {
    display: flex;
}
.ConversationForm__conversationTarea {
    padding-bottom: .5rem;
    border-bottom: 0.0625rem solid #f2f2f2;
}
.commonStyle__flex1 {
    min-width: 0;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.commonStyle__justifySb {
    justify-content: space-between;
}
.commonStyle__alignCenter {
    align-items: center;
}
.commonStyle__dFlex {
    display: flex;
}
.ConversationForm__creatoTime {
    color: #666;
    font-size: 0.9rem;
    font-weight: 500;
}

.commonStyle__link, .themeLink {
    color: #512dab;
}
.ConversationForm__openThreadForm {
    padding-left: 1.5625rem;
}
.commonStyle__link {
    text-decoration: none;
    color: #000;
    transition: .2s all;
}
.commonStyle__cursor {
    cursor: pointer;
}

.commonStyle__link, .themeLink {
    color: #512dab;
}
.ConversationForm__openThreadForm {
    padding-left: 1.5625rem;
}
.commonStyle__link {
    text-decoration: none;
    color: #000;
    transition: .2s all;
}
.commonStyle__cursor {
    cursor: pointer;
}
.Attachments__attachment, .Attachments__w100 {
    box-shadow: 0 0.1875rem 0.5rem 0 rgba(0,0,0,0.03);
    width: 30.5%;
    background: #fff;
    margin: 0 0.625rem 0.625rem 0;
    padding: 0.625rem;
    border: 0.0625rem solid lightgrey;
    border-radius: 0.1875rem;
    transition: all .2s;
}

.TicketDetailRightContainer2__wrapper {
    padding: 2.5rem 0;
}
.TicketDetailRightContainer2__property {
    padding: 0.9375rem 0;
    justify-content: space-between;
}
.commonStyle__dFlex {
    display: flex;
}
.Info__infoList {
    padding: 0.3125rem 0 0.625rem;
    font-size: 0.875rem;
    font-weight: 600;
}
.commonStyle__flexColumn {
    display: flex;
    flex-direction: column;
}

.Info__infoLabel {
    color: #555;
    text-transform: capitalize;
}
.Info__infoLabel, .Info__infoContent {
    padding: 0.3625rem 0 0;
}

.commonStyle__wordBreak {
    word-break: break-word;
}

.Info__labelText {
    line-height: initial;
}
.commonStyle__verticalMiddle {
    display: inline-block;
    vertical-align: middle;
}
.Info__infoContent {
    word-break: break-word;
    max-width: 100%;
}
.Info__infoLabel, .Info__infoContent {
    padding: 0.3625rem 0 0;
}

.Info__infoList {
    padding: 0.3125rem 0 0.625rem;
    font-size: 0.875rem;
    font-weight: 600;
}
.commonStyle__flexColumn {
    display: flex;
    flex-direction: column;
}
.Info__infoContent {
    word-break: break-word;
    max-width: 100%;
}
.Info__infoList {
    padding: 0.3125rem 0 0.625rem;
    font-size: 0.875rem;
    font-weight: 600;
}
.commonStyle__flexColumn {
    display: flex;
    flex-direction: column;
}
.Info__infoLabel, .Info__infoContent {
    padding: 0.3625rem 0 0;
}
.commonStyle__wordBreak {
    word-break: break-word;
}
.Info__labelText {
    line-height: initial;
}
.commonStyle__verticalMiddle {
    display: inline-block;
    vertical-align: middle;
}
.TicketClosePopup__container {
    position: relative;
    display: inline-block;
}
.Button__basic:last-child {
    margin-bottom: 0;
}
.Button__basic:last-child {
    margin-right: 0;
}
.Button__btnlarge {
    padding: 0.1875rem 0.625rem;
    font-size: 1rem;
}
.Button__neutral {
    border: 0.0625rem solid #3e7af7;
    color: #000;
    transition: all .2s ease;
}
.SecondaryEmailField__usrTag {
    background: #fff;
    border-radius: 1.5625rem;
    padding-left: 0.125rem;
    position: relative;
    max-width: 100%;
    margin: 0.3125rem 0.3125rem 0 0;
    word-wrap: break-word;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: flex;
    align-items: center;
    max-height: 1.375rem;
}

.SecondaryEmailField__secondartext {
    flex-wrap: wrap;
}
.commonStyle__dFlex {
    display: flex;
}

.commonStyle__positionRel {
    position: relative;
}



.AvatarText__ccsmall {
    width: 1.3333333333rem;
    height: 1.3333333333rem;
    font-size: 0.625rem;
}

.AvatarText__circle {
    border: 0.0625rem solid #dadada;
    border-radius: 50%;
    background-color: #fff;
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
<div style="width:100%;">
<div style="border-bottom: 0.0625rem solid #f2f2f2;">
<h1 data-id="ticket_title" class="TicketDetailLeftContainer__tickeTitle commonStyle__fweight600 commonStyle__wordBreak"><?php echo $data['subject'];   ?></h1>

<div>
<div class="ConversationForm__conversationForm commonStyle__dFlex commonStyle__alignCenter">
<div class="ConversationForm__conversationTarea commonStyle__dFlex commonStyle__justifySb commonStyle__alignCenter commonStyle__flex1">
<div class="ConversationForm__creatoTime">
<span><?php echo date('d M Y g:i a',strtotime($data['createdTime']));  ?></span>
</div>
<!--<div>
<span data-id="newReply" class="ConversationForm__openThreadForm commonStyle__link commonStyle__cursor">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall undefined">
<use xlink:href="#reply"></use></svg>
<span class="ConversationForm__rcLabels commonStyle__verticalMiddle">Reply</span>
</span>

<span data-id="newComment" class="ConversationForm__openThreadForm commonStyle__link commonStyle__cursor">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall undefined">
<use xlink:href="#comment"></use></svg>
<span class="ConversationForm__rcLabels commonStyle__verticalMiddle">Comment</span>
</span>
</div>-->
</div>
</div>
</div>

<div id="7189000003203245thread" class="TicketThreadContainer__threadCont borderLineTop enduser_thread">
<div class="Post__container" data-id="thread_details_7189000003203245">
<div class="Post__wrapper commonStyle__dFlexSb commonStyle__alignCenter" data-id="thread_detail_view_7189000003203245">
<div class="Post__box commonStyle__dFlexSb commonStyle__flex1">
<div>
<ul class="List__postdet List__list commonStyle__ulAlign commonStyle__flexWrapRow">
<li class="List__listItems commonStyle__inlineBlock">
<span>
<div class="AvatarText__avatarText commonStyle__dFlexJcAc AvatarText__small AvatarText__circle enduser_avatar"><?php echo $user_name;  ?></div>
</span>
</li>

<li class="List__listItems commonStyle__inlineBlock">
<span data-id="thread_username_7189000003203245" class="undefined enduser_name"><?php echo $_SESSION['FULL_NAME'];  ?></span>
</li>

<li class="List__listItems commonStyle__inlineBlock">
<span><!-- react-text: 1926 --><!-- /react-text -->
<span><?php $todaydate = date("Y-m-d H:i:s");

$ago = strtotime($todaydate) - strtotime($data['createdTime']);
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
  ?></span>
</span>
</li>

<li class="List__listItems commonStyle__inlineBlock">
<span title="Web" data-id="thread_channel_7189000003203245">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock">
<use xlink:href="#chWeb"></use>
</svg>
</span>
</li>
</ul>
</div>

<div class="Post__clickPost commonStyle__flex1 commonStyle__cursor">
</div>
</div>
<div>
<span class="Post__attachIcon commonStyle__cursor" data-id="thread_hasAttachment_7189000003203245" title="View Attachments">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall">
<use xlink:href="#fileAttach"></use>
</svg>
</span>
<div class="DottedMenu__container commonStyle__inlineBlock commonStyle__positionRel">
<div class="DottedMenu__dottedIcon commonStyle__cursor" data-id="thread_moreoption_7189000003203245">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall undefined">
<use xlink:href="#threedot"></use>
</svg>
</div>
<div class="DottedMenu__content Popup__hide ">
<span class="Popup__arrow Popup__arrowbottom"></span>
<div class="DottedMenu__children">
<div class="Post__container">
<div class="Post__topicEd commonStyle__dFlex commonStyle__alignCenter Post__reply commonStyle__link commonStyle__cursor" data-id="reply_7189000003203245">
<span class="Post__labelIcon">

<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall">
<use xlink:href="#reply"></use>
</svg>
</span>
<span class="Post__labelED commonStyle__verticalMiddle commonStyle__flex1">Reply</span>
</div>
<div class="Post__topicEd commonStyle__dFlex commonStyle__alignCenter Post__showOriginal commonStyle__link commonStyle__cursor" data-id="thread_show_original_7189000003203245">
<span class="Post__labelIcon">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall">
<use xlink:href="#ticketChat"></use>
</svg>
</span>
<span class="Post__labelED commonStyle__verticalMiddle commonStyle__flex1">Show Original</span>
</div>

<div class="Post__topicEd commonStyle__dFlex commonStyle__alignCenter Post__print commonStyle__link commonStyle__cursor" data-id="thread_print_7189000003203245">
<span class="Post__labelIcon">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall">
<use xlink:href="#print"></use>
</svg>
</span>

<span class="Post__labelED commonStyle__verticalMiddle commonStyle__flex1">Print</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="Post__postContent">
<p class="description" data-id="thread_description_7189000003203245">
<div><?php echo $data['description'];   ?></div>
</p>

<div data-id="thread_7189000003203245">
<div class="Attachments__attachments commonStyle__flexWrapRow">
<div class="Attachments__attachment commonStyle__cursor commonStyle__positionRel commonStyle__dFlex commonStyle__alignCenter undefined" data-id="thread_attachment_view_7189000003203160">
<!-- react-text: 2109 --><!-- /react-text -->
<span class="Attachments__down commonStyle__positionRel">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__large">
<use xlink:href="#png"></use>
</svg>
<div class="Attachments__imgViewer" data-id="imgPopup_7189000003203160">
<div class="Attachments__imgviewerContent">
<!--<img class="Attachments__attachViewImg" src="images/home1_bg.jpg" width="20" height="20">-->
<div class="col-md-2 zoom-gallery"> 
<a href="images/home1_bg.jpg" title=""><img src="images/home1_bg.jpg" height='20' width='20' style="border-radius:10px;"/></a></div>
</div>
</div>
</span>
<div class="Attachments__detail commonStyle__flexColumn" data-id="attachName_7189000003203160">
<span title="qet3a-neww.png" class="Attachments__name commonStyle__overflowDotted commonStyle__cursor">qet3a-neww.png</span>
<span class="Attachments__size commonStyle__displayBlock">37 KB</span>
</div>

<div class="Attachments__attachAction">
<span class="Attachments__close commonStyle__cursor commonStyle__link commonStyle__cursor" title="Download" data-id="attach_download_7189000003203160">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall undefined">
<use xlink:href="#download"></use>
</svg>
</span>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>



</div>



</div>
</div>

<div class="col-md-4">

<div class="TicketDetailRightContainer2__wrapper Open_right">
<div class="TicketDetailRightContainer2__property commonStyle__dFlex">
<h4><div class="TicketDetailRightContainer2__title commonStyle__fweight600 commonStyle__fweight600 commonStyle__displayBlock">
Properties
</div></h4>
<div data-id="edit_open" class="TicketDetailRightContainer2__edit commonStyle__positionRel commonStyle__cursor" style="position:relative;right:150px;color:blue;" id="btnedit">Edit</div>
<div data-id="edit_open" class="TicketDetailRightContainer2__edit commonStyle__positionRel commonStyle__cursor" style="position:relative;right:150px;color:blue;" id="btnclose">Cancel</div>
</div>

<div data-id="ticketdetail_id1336" class="Info__infoList commonStyle__flexColumn ticketId">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticketdetail_id1336_label" class="Info__labelText commonStyle__verticalMiddle">Ticket Id</span>
</span>
<span data-id="ticketdetail_id1336_value" class="Info__infoContent undefined  ">
<!-- react-text: 1851 --> <!-- /react-text --><!-- react-text: 1852 -->#<?php  echo $data['ticketNumber']; ?><!-- /react-text --><!-- react-text: 1853 --> <!-- /react-text -->
</span>
</div>

<div data-id="ticket_created_on" class="Info__infoList commonStyle__flexColumn ticketCreatedOn">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_created_on_label" class="Info__labelText commonStyle__verticalMiddle">Created on</span>
</span>
<div class="Info__infoContent"><span><?php echo date('d M Y g:i a',strtotime($data['createdTime']));  ?></span></div>
</div>


<div id="hiderow">
<div>
<div data-id="ticket_status" class="Info__infoList commonStyle__flexColumn ticket_status">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_status_label" class="Info__labelText commonStyle__verticalMiddle">Status</span>
</span>

<div class="Info__infoContent">
<div data-id="ticket_status_Open"><?php echo $data['status']; ?></div>
</div>
</div>
<!-- react-empty: 1878 --><!-- react-empty: 1879 -->
<div data-id="ticket_channel" class="Info__infoList commonStyle__flexColumn ticket_channel">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_channel_label" class="Info__labelText commonStyle__verticalMiddle">Channel</span>
</span>
<span data-id="ticket_channel_value" class="Info__infoContent undefined  ">
<!-- react-text: 1884 --> <!-- /react-text --><!-- react-text: 1885 --><?php echo $data['channel']; ?><!-- /react-text --><!-- react-text: 1886 --> <!-- /react-text -->
</span>
</div>
</div>
<div>
<br>


<h4><div class="TicketDetailRightContainer2__sectionName commonStyle__fweight600" style="font-weight:bold"><b> Ticket Information</b></div></h4>


<div data-id="ticket_department" class="Info__infoList commonStyle__flexColumn ticket_departmentid">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_department_label" class="Info__labelText commonStyle__verticalMiddle">Department</span>
</span>

<span data-id="ticket_department_value" class="Info__infoContent undefined  ">
<?php
if($data['departmentId']=='7189000000010772'){
	$department='iSupport';
}
else if($data['departmentId']=='7189000000051431'){
		$department='PWSLab DevOps Support';
}
?>
<!-- react-text: 1893 --> <!-- /react-text --><!-- react-text: 1894 --><?php echo $department;  ?>
<!-- /react-text --><!-- react-text: 1895 --> <!-- /react-text -->
</span>
</div>
<div data-id="ticket_category" class="Info__infoList commonStyle__flexColumn ticket_category">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_category_label" class="Info__labelText commonStyle__verticalMiddle">Category</span>
</span>
<span data-id="ticket_category_value" class="Info__infoContent undefined  ">
<!-- react-text: 1900 --> <!-- /react-text --><!-- react-text: 1901 --><?php echo $data['category'];  ?><!-- /react-text --><!-- react-text: 1902 --> <!-- /react-text -->
</span>
</div>

<div data-id="" class="Info__infoList commonStyle__flexColumn ticket_pwslabprojecturl">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="_label" class="Info__labelText commonStyle__verticalMiddle">PWSLab Project URL</span>
<span class="Info__tooltipIcon commonStyle__verticalMiddle" data-tip="Enter your project URL like https://company.pwslab.net/johndoe/my-project/" currentitem="false">
<svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall Icon__HexGray35">
<use xlink:href="#tooltip"></use>
</svg>
</span>
</span>

<div class="Info__infoContent">
<div class="Fields__container commonStyle__Wd100">
<div data-id="ticket_cf_pwslab_project_url_value" class="Fields__field">
<a class="Fields__urlText commonStyle__active commonStyle__wordBreak" title="<?php echo $data['webUrl'];  ?>" href="<?php echo $data['webUrl'];  ?>" target="_blank" rel="noopener"><?php echo $data['webUrl'];  ?></a>
</div>
</div>
</div>
</div>
</div>
<div><br>

<h4><div class="TicketDetailRightContainer2__sectionName commonStyle__fweight600">Contact Details</div></h4>
<div data-id="ticket_phone" class="Info__infoList commonStyle__flexColumn ticket_phone">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_phone_label" class="Info__labelText commonStyle__verticalMiddle">Phone</span>
</span>
<span data-id="ticket_phone_value" class="Info__infoContent undefined  ">
<!-- react-text: 1919 --> <!-- /react-text --><!-- react-text: 1920 --><?php echo $data['phone'];  ?><!-- /react-text --><!-- react-text: 1921 --> <!-- /react-text -->
</span>
</div>
</div>
<div><br>

<h4><div class="TicketDetailRightContainer2__sectionName commonStyle__fweight600"> Additional Information</div></h4>
<div data-id="" class="Info__infoList commonStyle__flexColumn ticket_priority">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="_label" class="Info__labelText commonStyle__verticalMiddle">Priority</span>
</span>

<div class="Info__infoContent">
<div class="PickListField__picklistField">
<div data-id="ticket_priority_value"><?php echo $data['priority'];  ?></div>
</div>
</div>
</div>
</div>
<div>


<div data-id="" class="Info__infoList commonStyle__flexColumn ticket_secondarycontacts">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="_label" class="Info__labelText commonStyle__verticalMiddle">Department</span>
</span>

<?php if(!empty($data['secondaryContacts'])){ ?>
<div class="Info__infoContent">
<div class="SecondaryEmailField__showEditView">
<div data-id="" class="Info__infoList commonStyle__flexColumn">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="_label" class="Info__labelText commonStyle__verticalMiddle">CCs</span>
</span>

<div class="Info__infoContent">
<div class="SecondaryEmailField__secondartext commonStyle__dFlex commonStyle__positionRel">
<div class="SecondaryEmailField__usrTag undefined">
<div class="AvatarText__avatarText commonStyle__dFlexJcAc AvatarText__ccsmall AvatarText__circle">TA</div>
<span class="SecondaryEmailField__usrName commonStyle__overflowDotted commonStyle__flex1" data-tip="&quot;tanveeryya&quot;<tanveeryya@gmail.com>" currentitem="false">tanveeryya</span>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
<div>


<div data-id="ticket_email" class="Info__infoList commonStyle__flexColumn ticket_">
<span class="Info__infoLabel commonStyle__wordBreak">
<span data-id="ticket_email_label" class="Info__labelText commonStyle__verticalMiddle">Email</span>
</span>
<span data-id="ticket_email_value" class="Info__infoContent undefined  ">
<!-- react-text: 1947 --> <!-- /react-text --><!-- react-text: 1948 --><?php echo $data['email'];   ?><!-- /react-text --><!-- react-text: 1949 --> <!-- /react-text -->
</span>
</div>
</div>
</div>
<br>
<form  name="signinform" id="signinform" method="post" class="form"  autocomplete="off" enctype="multipart/form-data">
<div class="row" id="showrow">
<br>
<h5  style="margin-bottom:20px;font-weight:700">Ticket Information</h5>

		
					<br>
					<br>
					<div class="col-md-8" style="position:relative;right:10px">
	<dl>
					<dd>
	<label for="cars">Category*</label><br>
	<select name="category"  id="category" class="select2 form-control custom-select" style="width:100%;">
   <option value="">-None-</option>
   <option value="New Project" <?php if($data['category']=='New Project'){ echo 'selected'; }  ?>>New Project</option>
  <option value="Update Ci/Cd Pipeline" <?php if($data['category']=='Update Ci/Cd Pipeline'){ echo 'selected'; }  ?>>Update Ci/Cd Pipeline</option>
  <option value="Dev Secops" <?php if($data['category']=='Dev Secops'){ echo 'selected'; }  ?>>Dev Secops</option>
  <option value="Git Source Control" <?php if($data['category']=='Git Source Control'){ echo 'selected'; }  ?>>Git Source Control </option>
  <option value="Kubernetes Deployments (like EKS/GCP)" <?php if($data['category']=='Kubernetes Deployments (like EKS/GCP)'){ echo 'selected'; }  ?>>Kubernetes Deployments (like EKS/GCP)</option>
                                                 
  </select> 
</dd>
				</dl>
 </div>
					
				<br>
				<dl>
					<dd>
						<label for="cars">PWSLab Project URL*</label><br>
						<input class="inputBox" type="text" name="" value="<?php echo $data['webUrl']; ?>" placeholder="Project URL" autofocus="">
					</dd>
				</dl>
				<dl style="position:relative;top:100px;right:200px;">
				
				
				
	<h5  style="margin-bottom:20px;font-weight:700">Contact Details</h5>
	
	<dl>
					<dd>
						<label for="cars">Phone</label><br>
						<input class="inputBox" type="text" name="phone" value="<?php echo $data['phone']; ?>" placeholder="Phone" autofocus="" onkeypress="return isNumberKey(event)">
					</dd>
				</dl>
				
				<h5  style="margin-bottom:20px;font-weight:700">Additional Information</h5>
					<dl>
					<dd>
				<label for="cars">Priority*</label><br>

<select name="priority"  id="priority" class="select2 form-control custom-select" style="width:100%;">
  <option value="">-None</option>
  <option value="High" <?php  if($data['priority']=='High'){ echo 'selected'; } ?>>High - Production System Down</option>
  <option value="Medium" <?php  if($data['priority']=='Medium'){ echo 'selected'; } ?>>Medium - System Impaired</option>
  <option value="Low" <?php  if($data['priority']=='Low'){ echo 'selected'; } ?>>Low - General Guidance</option>
                                                 
  </select> 
					</dd>
				</dl>
				
				<dl> 
					<dd>
						<label for="cars">Email*</label><br>
						<input class="inputBox" type="text" name="email" value="<?php echo $data['email'];  ?>" placeholder="Email Address" autofocus="">
					</dd>
				</dl>
				<br>
							<div class="form-actions" style="position:relative;bottom:20px;right:-30px;">			 
				<button type="submit" class="btn btn-info" >Save</button>
			<span type="" class="btn btn-secondry" id="btnclose1">Cancel</span>
			<input type="hidden" name="id" id="id" value="<?php echo $id;  ?>">
			

</div>
				
</div>
</form>



<?php if($data['status']=='Open'){  ?>
<div id="closeticket">


<div class="TicketClosePopup__container" id="ticketClose">
<div data-id="clost_ticket">
<span class="Button__neutral Button__basic commonStyle__inlineBlock commonStyle__cursor commonStyle__overflowDotted Button__btnlarge" onclick="ChangeTicket(3);" id="">Close ticket</span>
</div>

<!--<div class="TicketClosePopup__content commonStyle__fweight600 Popup__hide ">
<span class="Popup__arrow Popup__arrowbottom"></span>
<div class="TicketClosePopup__description">Are you sure you want to close the Ticket?</div>
<div class="TicketClosePopup__footerBtn">
<span data-id="clost_ticket_yes" class="Button__primary Button__basic commonStyle__inlineBlock commonStyle__cursor commonStyle__overflowDotted Button__btnmedium">Yes</span>
<span data-id="clost_ticket_no" class="Button__secondary Button__basic commonStyle__inlineBlock commonStyle__cursor commonStyle__overflowDotted Button__btnmedium">No</span>
</div>
</div>-->
</div>
</div>
<?php } ?>


<div class="TicketDetailRightContainer2__widget"><!-- react-empty: 1871 --></div></div> 
</div>
</div>


</div>
</div>
</div>


  <?php
				  include('includes/footer.php');
				  ?>
				    <!--<script src="assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>-->
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
                  var formData = new FormData(form);
                             var form = $(signinform);
         					var url = 'AJAX_updateTicket';
         
         					$.ajax({
         					type: "POST",
         					url: url,
         					data: formData, // serializes the form's elements.
         					processData:false,
                            contentType: false,
         					cache:false,
         					success: function(data)
                            {
								
												$( "#submit" ).prop( "disabled", false );
													//$('#description').data("wysihtml5").editor.clear();
					      if(data){ 
							    $('.dropify-clear').click();	 
							  //document.getElementById("signinform").reset();
         	 Swal.fire({
                          text:  " Ticket Updated Successfully",
                         type: 'success',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                          
                         }else{
         					  return false;
         				}
                     })
					 setTimeout(function(){ location.reload(); }, 1500);
         				  }
         				  else{
         					Swal.fire({
                          text:  data,
                         type: 'Failed to Update Ticket',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                          
                         }else{
         					  return false;
         				}
                     })  
         				  }
         			
                            }
                               });
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
function ChangeTicket(val){
	
	       Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Close it!'
            }).then((result) => {
                if (result.value) {
							 var postdata = {"id":<?php echo $id; ?>,"status":"Close"};		
		$.ajax({
		
       type: "POST",
      url: "AJAX_updateStatus",
      data: postdata,
      cache: false,
      success: function(result){
		 		
		Swal.fire({
                position: 'top-center',
                type: 'success',
                title: 'Ticket Updated Successfully',
                showConfirmButton: false,
                timer: 2500
            })
			setTimeout(function(){ location.reload(); }, 1500);
      }
	 
	   
      });
	
    
								
                  
                }else{
					  return false;
				}
           })
 }
</script>


<script>
$('#showrow').hide();
$('#btnclose').hide();
$(document).ready(function(){
  $("#btnedit").click(function(){
	//alert(1);
	$('#showrow').show();
	$('#btnedit').hide();
	$('#btnclose').show();
	$('#hiderow').hide();
	$( "#closeticket" ).hide();
});
});
$(document).ready(function(){
  $("#btnclose").click(function(){
	  $('#btnclose').hide();
	  $('#btnedit').show();
	  $('#showrow').hide();
	  $('#hiderow').show();
	  $('#closeticket').show();
	  
	  });
});
$(document).ready(function(){
  $("#btnclose1").click(function(){
	  $('#btnclose').hide();
	  $('#btnedit').show();
	  $('#showrow').hide();
	  $('#hiderow').show();
	  $('#closeticket').show();
	  
	  });
});
</script>
</html>