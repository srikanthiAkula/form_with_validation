<?php
if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["phone"])){
$mail_to = 'srikanthi.a@hallmarklearninglabs.com';
$subject = 'Demo request from a site visitor '.$_POST["fullname"];

$body_message = '<div style="background:#d9eefa; padding:10px; width:620px; margin:0 auto; font-family:Arial, Helvetica, sans-serif; line-height:24px">
    <div style="overflow:hidden;">
    	<div style="background:#fff; width:600px; margin:0 auto; border:1px solid #ddd; overflow:hidden; padding:10px;">
<table style="font-size:13px; color:#333; margin:0 auto">
        	<tr>
<td><div style="background:#ffffff;"><img src="http://staffing.nimbleaccounting.com/images/logo.png" /></div></td>
            </tr>
        </table>
	<div>
    </div>
    <div style="clear:both"></div>
    <div style="width:100%; padding:0px; margin-top:20px; float:left">
    	<h2 style="text-transform:uppercase; font-family:Arial, Helvetica, sans-serif; font-size:18px; margin:0px 0;color:#C03234;margin-bottom:15px">DEMO REQUEST</h2>
        
  <table width="100%" cellpadding="2px" cellspacing="1px" style="font-size:15px;border:1px solid #d5d5d5">
  <tr>
  <td bgcolor="#f2f2f2" width="200px">Name</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["fullname"].'</td>
  </tr>
  <tr>
  <td bgcolor="#f2f2f2" width="200px">Corporation</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["corporation"].'</td>
  </tr>
  <tr>
  <td bgcolor="#f2f2f2" width="200px">No of Business Units</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["business_units"].'</td>
  </tr>
  <tr>
  <td bgcolor="#f2f2f2" width="200px">Email</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["email"].'</td>
  </tr>
   <tr>
  <td bgcolor="#f2f2f2" width="200px">Contact Number</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["phone"].'</td>
  </tr>';
  if(isset($_POST["demo_time"]) || isset($_POST["demo_date"])){
    $body_message .=  '<tr>
  <td bgcolor="#f2f2f2" width="200px">Best time to contact</td>
  <td style="border-bottom:1px solid #d5d5d5">'.$_POST["demo_date"].' '.$_POST["demo_time"].'</td>
  </tr>';
  }
  
  $body_message .=  '</table>  
    </div>
    </div>
</div>
</div>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$_POST["fullname"]."<".$_POST["email"].">\r\n";
$headers .= 'Reply-To: noreply@gmail.com'."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { 

$mail_to1 = $_POST["email"];
$subject1 = 'Demo request from a site visitor '.$_POST["fullname"];
$message1 = '<div style="background:#d9eefa; padding:10px; width:620px; margin:0 auto; font-family:Arial, Helvetica, sans-serif; line-height:24px">
    
    <div style="overflow:hidden;">
    	
<div style="background:#fff; width:600px; margin:0 auto; border:1px solid #ddd; overflow:hidden; padding:10px;">
<table style="font-size:13px; color:#333; margin:0 auto">
        	<tr>
<td><div style="background:#ffffff;"><img src="http://staffing.nimbleaccounting.com/images/logo.png" /></div></td>
            </tr>
        </table>
	<div>
    </div>
    <div style="clear:both"></div>
    <div style="width:100%; padding:0px; margin-top:20px; float:left;">
    	<h2 style="text-transform:uppercase; font-family:Arial, Helvetica, sans-serif; font-size:18px; margin:0px 0;color:#C03234;margin-bottom:15px">DEMO REQUEST</h2>

  <table width="100%" cellpadding="2px" cellspacing="1px" style=" font-size:13px">
  <tr>
  <td>Dear : <strong>'.$_POST["fullname"].'</strong></td>
  </tr>
  <tr>
  <td >
 <p style="text-align:left; font-size:14px; line-height:26px">Thank you for your interest in Nimble. Our customer support team will contact you soon to set up a demo, based on your convenience. Thank you.</p>
   </td>
 </tr>
 <tr>
 <td>
 Best Regards,
  </td>
 </tr>
 <tr>  <td><strong>Nimble Team</strong></td></tr>
  </table>
    </div>
    <div style="clear:both"></div>
    </div>
</div>
</div>';
$headers1  = 'MIME-Version: 1.0' . "\r\n";
$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers1 .= 'From: Nimble Staffing'."<sales@nimbleaccounting.com>\r\n";
$headers1 .= 'Reply-To: sales@nimbleaccounting.com'.$_POST["email"]."\r\n";
$mail_status1 = mail($mail_to1, $subject1, $message1, $headers1);
if ($mail_status1) { 
	echo "1";
}
else {
	echo "2"; }
}
else {
	echo "3"; }
}
else{
	echo "0"; 
}
?>
