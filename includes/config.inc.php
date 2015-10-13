<?php

//*********************************Don not delete used for ajax folder***********************

   session_start();
   
   //define error handling function
   function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars)
      {
      	//detailed error message
      	$message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";
		
		//add backtrace info
		$message .="<pre>" .print_r(debug_backtrace(), 1). "</ore>\n";
		
		
		//if site not live show error in browser
		//  nl2br($message)  turns \n into HTML break tags
		if(!LIVE)
		{
			echo '<div class="alert alert-danger">' . nl2br($message) .'</div>';
		}else{
			error_log($message, 1, CONTACT_EMAIL, 'FROM:hello@thecentraldispatch.com');
			if($e_number !=E_NOTICE)
			{
				echo '<div class="alert alert-danger">A system error occurred.
				      we apologize for the inconvenience.</div>';
			}//end if !LIVE
		}//end of my_error_handler() definition
			return true; //so that PHP does'nt try to handle the error , too
}//end error handler definition

//use error handler
set_error_handler('my_error_handler');


//I added this if !headers from page 75
if(!headers_sent())
      {
	//create redirect function 
function redirect_invalid_user($check = 'user_id', $destination = '../index.php', $protocol = 'http://')
    {
    	if(!isset($_SESSION[$check]))
		   {
		   	$url = $protocol.BASE_URL . $destination;
			header("Location: $url");
			exit();
		   }	
    }
	////
	  }else{
	  	include_once('header.html');
		trigger_error('You do not have permission to access this page.
		              Please log in and try again.');
		include_once('footer.html');
	  }
