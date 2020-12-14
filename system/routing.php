<?php
$request_url =$_GET['url']; 
if($request_url=='index.php'){$request_url='index';}
if($request_url==''){$request_url='index';}
if($request_url=='file_not_found' || $request_url=='file_not_found.php'){}
 
$login_array=array("dashboard","login","logout");
$ticket_array=array("add_ticket","myarea","ticket");





