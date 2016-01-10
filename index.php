<?php


include('includes/config.inc.php');

//require('includes/mysql_connect.php');

require(MYSQL);
require(MYSQL_FORUM);

include('views/index.inc.html');

//checking to see if github working correctly
/*

$e="david@ajaxtransport.com";
$e = trim($e);
$a ="activate1";
$url=BASE_URL;
						$body ="Thank you for registering at $url .\n To activate your account, please click on this link:\n\n";
					    //$body .= BASE_URL."/utilities/activate.php?x=".urlencode($e)."&y=$a";
					   //$body .= "http://www.ajaxforums.com/utilities/activate.php?x=".urlencode($e)."&y=$a";
					    //$body .= "http://www.ajaxforums.com/utilities/activate.php?x=david@ajaxtransport.com&y=$a";
					   //  $body .= "\n\n Thank you";
						//$body .= "\n AjaxForums";
                        //$email = $trimmed['email'];
						//mail(EMAIL,"Registration Confirmation",'$body', "FROM:".EMAIL);
						//$e = trim($e);
						mail("david@ajaxtransport.com","AjaxForums Registration Confirmation",$body,"FROM:".CONTACT_EMAIL);
							//mail($e,"AjaxForums Registration Confirmation",$body,"FROM:".CONTACT_EMAIL);
						
		//echo $email;
	//	echo $body;			
	*/	
		
?>

