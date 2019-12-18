<?php 

include('PHPMailer.php');
	
	
// fetching form data	

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];

$htmlString = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="margin:0">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" widtd="100%">
<tr valign="top">
<td height="30" align="center" bgcolor="#eeeeee" >&nbsp;</td>
</tr>
<tr valign="top">
<td align="center" bgcolor="#eeeeee" ><table width="600" border="0" align="center" cellpadding="0" cellspacing="0" widtd="600">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;" widtd="500">
<tr>
<td align="center" bgcolor="#333333" style="padding:15px 0"><h1 style="color:#fff; font-size:24px; font-weight:bold; margin:0;">Contact Information</h1></td>
</tr>
<tr>
<td align="left"><p style="font-size:14px; color:#555; font-weight:normal; line-height:20px;"> <strong>Dear Admin</strong><br>
Someone has send a request for feed back, here are the details.</p></td>
</tr>
<tr>
<td height="20"></td>
</tr>
<tr>
		<td><table width="500" border="0" cellspacing="0" cellpadding="5" style="font-size:14px; color:#888;">
		
		<tr>
		<td>Name</td>
		<td><strong>'.$name.'</strong></td>
		</tr>
		<tr>
		<td>Email</td>
		<td><strong>'.$email.'</strong></td>
		</tr>
		<tr>
		<td>Phone</td>
		<td><strong>'.$phone.'</strong></td>
		</tr>
		<tr>
		<td>Address</td>
		<td><strong>'.$address.'</strong></td>
		</tr>
		<tr>
		<td>Message</td>
		<td><strong>'.$message.'</strong></td>
		</tr>
		</table></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" bgcolor="#FFFFFF">&nbsp;</td>
</tr>
<tr>
<td height="30" bgcolor="#F8C807">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#F8C807"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif;" widtd="350">
<tr>
<td align="center" ><h1 style="color:#fff; font-size:24px; font-weight:bold; margin:0 0 15px 0;">Car Rentals</h1></td>
</tr>
<tr>
<td align="center"><p style="font-size:14px; color:#fff; margin:0; font-weight:normal; line-height:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non enim ut nulla pulvinar sagittis. Duis varius sagittis pulvinar.</p></td>
</tr>
</table></td>
</tr>
<tr>
<td height="30" bgcolor="#F8C807">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF" style="color:#b1b1b1; font-size:13px; font-family:Arial, Helvetica, sans-serif; font-weight:normal;">&copy; 2018 Car Rentals | All Rights Reserved.</td>
</tr>
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr valign="top">
<td height="30" align="center" bgcolor="#eeeeee" >&nbsp;</td>
</tr>
</table>
</body>
</html>';
		
		
	

		
		// Email Configuartion

		$emlObject = new PHPMailer(true);
		$emlObject->IsHTML(true);

		$emlObject->AddAddress('yourname@domain.com' , 'Quote Form' );
		
		
		$emlObject->SetFrom( $_POST['email'],'');
		$emlObject->Subject = "Quote Information";
		$emlObject->MsgHTML($htmlString);

	//echo $htmlString;exit;
	
		if($emlObject->Send()){
		
		$_SESSION['msg']='Email Sent Successfully';	
		header('location:thankyou.html');	
			
		}
		else{
			$_SESSION['msg']='Error For Server Please! Try-again';	
		}
		
			
			?>