<?php 
/*
Written By:Er Vivek Gupta
Whatsapp Number:+917054874357
Email:playerofcode@gmail.com
Website:playerofcode.com
Please Subscribe my channal. If you facing any problem. Contact me. Or if you want to make any videos on any topics, You can tell me I will make.
*/
//Send Email Using PHPMailer
/*
Gmail Account Setting
2 Step Verification must be off
Less secure app access must be ON
*/
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->Host='mail.resotek.co.id';
$mail->Port=587;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='admin@resotek.co.id';//Your Email Address
$mail->Password='skywave1234';//Your Email Password
$mail->setFrom('admin@resotek.co.id','Notification');
$mail->addAddress('yopiandikaputra15@gmail.com');
 $mail->addAddress($_POST['email'], $_POST['nama']); //email penerima

$mail->addReplyTo('yopiandikaputra15@gmail.com');
$mail->isHTML(true);
	$mail->Subject = $_POST['subjek']; //subject
    $mail->Body    = $_POST['pesan']; //isi email
if(!$mail->send())
{
echo "Something went wrong";
echo $mail->ErrorInfo;
}
else
{
	echo '<script>alert("Email sent successfully, Please check your email!!")</script>';
	 echo '<script type="text/javascript">'; 
        echo 'window.location= "index.html"';
        echo '</script>'; 
	//echo "<a href=\"javascript:history.go(-1)\">Please Check Your Email!</a>";
	//echo "Email sent successfully";
	
	
}
?>
