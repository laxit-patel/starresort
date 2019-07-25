<?php
ob_start();
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$arrive_date = $_POST['arrive_date'];
$depart_date = $_POST['depart_date'];
$rooms = $_POST['rooms'];
$person = $_POST['persons'];




$subject="Inquiry From Website Star Resort";
$from="info@hariomtoursandtravels.com";
if($email!=""){
    $from=$email;
}
$to="hariomtoursandtravels74@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers.="From: ".$from;

$body="";
$table = "<table class='table table-dark table-borderless ' style='-webkit-border-radius: 22px;
-moz-border-radius: 22px;
border-radius: 22px;'>
<tr>
    <td> Name :</td>
    <td> $name</td>
</tr>
<tr>
    <td> Email :</td>
    <td> $email</td>
</tr>
<tr>
    <td> Phone :</td>
    <td> $phone</td>
</tr>
<tr>
    <td> Address :</td>
    <td> $country / $state / $city</td>
</tr>
<tr>
    <td> Arrival :</td>
    <td> $arrive_date</td>
</tr>
<tr>
    <td> Depatrure :</td>
    <td> $depart_date</td>
</tr>
<tr>
    <td> Rooms :</td>
    <td> $rooms</td>
</tr>
<tr>
    <td> Persons :</td>
    <td> $person</td>
</tr>
<tr>
    <td> Message :</td>
    <td> $message </td>
</tr>
</table>";

$body.="
<html lang='en'>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" >
<title>Star Resort Enquiry</title>
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<style type=\"text/css\">
html { -webkit-text-size-adjust: none; -ms-text-size-adjust: none;}

	@media only screen and (min-device-width: 750px) {
		.table750 {width: 750px !important;}
	}
	@media only screen and (max-device-width: 750px), only screen and (max-width: 750px){
      table[class=\"table750\"] {width: 100% !important;}
      .mob_b {width: 93% !important; max-width: 93% !important; min-width: 93% !important;}
      .mob_b1 {width: 100% !important; max-width: 100% !important; min-width: 100% !important;}
      .mob_left {text-align: left !important;}
      .mob_soc {width: 50% !important; max-width: 50% !important; min-width: 50% !important;}
      .mob_menu {width: 50% !important; max-width: 50% !important; min-width: 50% !important; box-shadow: inset -1px -1px 0 0 rgba(255, 255, 255, 0.2); }
      .mob_center {text-align: center !important;}
      .top_pad {height: 15px !important; max-height: 15px !important; min-height: 15px !important;}
      .mob_pad {width: 15px !important; max-width: 15px !important; min-width: 15px !important;}
      .mob_div {display: block !important;}
 	}
   @media only screen and (max-device-width: 550px), only screen and (max-width: 550px){
      .mod_div {display: block !important;}
   }
	.table750 {width: 750px;}
</style>
</head>
<body style=\"margin: 0; padding: 0;\">

<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"background: #f3f3f3; min-width: 350px; font-size: 1px; line-height: normal;\">
 	<tr>
   	<td align=\"center\" valign=\"top\">   			
   		<!--[if (gte mso 9)|(IE)]>
         <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
         <tr><td align=\"center\" valign=\"top\" width=\"750\"><![endif]-->
   		<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"750\" class=\"table750\" style=\"width: 100%; max-width: 750px; min-width: 350px; background: #f3f3f3;\">
   			<tr>
               <td class=\"mob_pad\" width=\"25\" style=\"width: 25px; max-width: 25px; min-width: 25px;\">&nbsp;</td>
   				<td align=\"center\" valign=\"top\" style=\"background: #ffffff;\">

                  <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"width: 100% !important; min-width: 100%; max-width: 100%; background: #f3f3f3;\">
                     <tr>
                        <td align=\"right\" valign=\"top\">
                           <div class=\"top_pad\" style=\"height: 25px; line-height: 25px; font-size: 23px;\">&nbsp;</div>
                        </td>
                     </tr>
                  </table>

                   <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"88%\" style=\"width: 88% !important; min-width: 88%; max-width: 88%;\">
                      <tr>
                         <td align=\"left\" valign=\"top\">
                            <div style=\"height: 30px; line-height: 30px; font-size: 28px;\">&nbsp;</div>
                            <!--[if (gte mso 9)|(IE)]>
                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                               <tr><td align=\"center\" valign=\"top\" width=\"460\"><![endif]-->
                            <div style=\"display: inline-block; vertical-align: top; width: 74%; min-width: 270px;\">
                               <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"width: 100% !important; min-width: 100%; max-width: 100%;\">
                                  <tr>
                                     <td align=\"left\" valign=\"top\">
                                        <div style=\"height: 10px; line-height: 10px; font-size: 8px;\">&nbsp;</div>
                                        <a href=\"https://www.starresort.com/index.php\" target=\"_blank\" style=\"display: block; max-width: 128px;\">
                                           <img src=\"http://starresortkutch.com/assets/img/brand/wide.png\" alt=\"img\" width=\"128\" border=\"0\" style=\"display: block; width: 128px;\" />
                                        </a>
                                     </td>
                                  </tr>
                               </table>
                            </div><!--[if (gte mso 9)|(IE)]></td><td align=\"center\" valign=\"top\" width=\"150\"><![endif]--><div style=\"display: inline-block; vertical-align: top; width: 150px;\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"width: 100% !important; min-width: 100%; max-width: 100%;\">
                               <tr>
                                  <td class=\"mob_left\" align=\"right\" valign=\"top\">
                                     <div style=\"height: 15px; line-height: 15px; font-size: 13px;\">&nbsp;</div>
                                     <font face=\"'Source Sans Pro', sans-serif\" color=\"#949494\" style=\"font-size: 14px; line-height: 18px; font-weight: 700;\">
                                          <span style=\"font-family: 'Source Sans Pro', Arial, Tahoma, Geneva, sans-serif; color: #949494; font-size: 20px; line-height: 18px; font-weight: 700;\" ><script> document.write(new Date().toLocaleDateString()); </script><span>
                                     </font>
                                  </td>
                               </tr>
                            </table>
                         </div>
                            <!--[if (gte mso 9)|(IE)]>
                            </td></tr>
                            </table><![endif]-->
                            <div class=\"top_pad2\" style=\"height: 10px; line-height: 70px; font-size: 68px;\">&nbsp;</div>
                         </td>
                      </tr>
                   </table>


                  <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"88%\" style=\"width: 88% !important; min-width: 88%; max-width: 88%;\">
                     <tr>
                        <td align=\"left\" valign=\"top\">
                           <font face=\"'Source Sans Pro', sans-serif\" color=\"#1a1a1a\" style=\"font-size: 52px; line-height: 60px; font-weight: 300; letter-spacing: -1.5px;\">
                              <span style=\"font-family: 'Source Sans Pro', Arial, Tahoma, Geneva, sans-serif; color: #1a1a1a; font-size: 32px; line-height: 60px; font-weight: 300; letter-spacing: -1.5px;\">$subject,</span>
                           </font>
                           <div style=\"height: 25px; line-height: 25px; font-size: 25px;\">&nbsp;</div>
                           
                           <hr>
                           <div style=\"height: 33px; line-height: 33px; font-size: 31px;\">&nbsp;</div>
                           <font face=\"'Source Sans Pro', sans-serif\" color=\"#585858\" style=\"font-size: 24px; line-height: 32px;\">
                              <span style=\"font-family: 'Source Sans Pro', Arial, Tahoma, Geneva, sans-serif; color: #585858; font-size: 24px; line-height: 32px;\">$table</span>
                           </font>
                           <div style=\"height: 20px; line-height: 20px; font-size: 18px;\">&nbsp;</div>

                           <div style=\"height: 33px; line-height: 33px; font-size: 31px;\">&nbsp;</div>


                        </td>
                     </tr>
                  </table>

                    

                  <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"88%\" style=\"width: 88% !important; min-width: 88%; max-width: 88%;\">
                  <hr>
                     <tr>
                        <td align=\"center\" valign=\"top\">
                           <!--[if (gte mso 9)|(IE)]>
                           <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                           <tr><td align=\"center\" valign=\"top\" width=\"50\"><![endif]-->
                           <div style=\"display: inline-block; vertical-align: top; width: 50px;\">
                              <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"width: 100% !important; min-width: 100%; max-width: 100%;\">
                                 <tr>
                                    <td align=\"center\" valign=\"top\">
                                       <div style=\"height: 13px; line-height: 13px; font-size: 11px;\">&nbsp;</div>
                                       <div style=\"display: block; max-width: 50px;\">
                                          <img src=\"https://img.icons8.com/color/48/000000/user-male-circle.png\">
                                       </div>
                                    </td>
                                 </tr>
                              </table>
                           </div><!--[if (gte mso 9)|(IE)]></td><td align=\"left\" valign=\"top\" width=\"390\"><![endif]--><div class=\"mob_div\" style=\"display: inline-block; vertical-align: top; width: 62%; min-width: 260px;\">
                              <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"width: 100% !important; min-width: 100%; max-width: 100%;\">
                                 <tr>
                                    <td width=\"18\" style=\"width: 18px; max-width: 18px; min-width: 18px;\">&nbsp;</td>
                                    <td class=\"mob_center\" align=\"left\" valign=\"top\">
                                       <div style=\"height: 13px; line-height: 13px; font-size: 11px;\">&nbsp;</div>
                                       <font face=\"'Source Sans Pro', sans-serif\" color=\"#000000\" style=\"font-size: 19px; line-height: 23px; font-weight: 600;\">
                                          <span style=\"font-family: 'Source Sans Pro', Arial, Tahoma, Geneva, sans-serif; color: #000000; font-size: 19px; line-height: 23px; font-weight: 600;\">Sokat Bayad</span>
                                       </font>
                                       <div style=\"height: 1px; line-height: 1px; font-size: 1px;\">&nbsp;</div>
                                       <font face=\"'Source Sans Pro', sans-serif\" color=\"#7f7f7f\" style=\"font-size: 19px; line-height: 23px;\">
                                          <span style=\"font-family: 'Source Sans Pro', Arial, Tahoma, Geneva, sans-serif; color: #7f7f7f; font-size: 19px; line-height: 23px;\">Admin - star resort</span>
                                       </font>
                                    </td>
                                    <td width=\"18\" style=\"width: 18px; max-width: 18px; min-width: 18px;\">&nbsp;</td>
                                 </tr>
                              </table>
                           </div><!--[if (gte mso 9)|(IE)]></td><td align=\"left\" valign=\"top\" width=\"177\"><![endif]--><div style=\"display: inline-block; vertical-align: top; width: 177px;\">

                           </div>
                           <!--[if (gte mso 9)|(IE)]>
                           </td></tr>
                           </table><![endif]-->
                           <div style=\"height: 30px; line-height: 30px; font-size: 28px;\">&nbsp;</div>
                        </td>
                     </tr>
                  </table>
                
                 
                   

                </td>
               <td class=\"mob_pad\" width=\"25\" style=\"width: 25px; max-width: 25px; min-width: 25px;\">&nbsp;</td>
            </tr>
        </table>
       <div style=\"height: 20px; line-height: 24px; font-size: 6px;\">&nbsp;</div>
         <!--[if (gte mso 9)|(IE)]>
         </td></tr>
         </table><![endif]-->
      </td>
   </tr>
</table>
</body>
</html>";


if($name != "" && ($email != "" || $mobile!="")){
    $success=mail($to,$subject,$body,$headers);
    if($success){
        $_SESSION['success']="Thank You For Your Inquiry. We will get back to you soon.";
        header("location:http://starresortkutch.com/index.php#book-now");
    }
    else{
        $_SESSION['error']="Some Error Occurs While Submitting Inquiry. Please Try Again.";
        header("location:http://starresortkutch.com/index.php#book-now");
    }

}
?>

<?php
