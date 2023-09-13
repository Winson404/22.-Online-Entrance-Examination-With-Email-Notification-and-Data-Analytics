<?php 
	include '../config.php';
	date_default_timezone_set('Asia/Manila');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../vendor/PHPMailer/src/Exception.php';
	require '../vendor/PHPMailer/src/PHPMailer.php';
	require '../vendor/PHPMailer/src/SMTP.php';


	// SEND CONTACT EMAIL - CONTACT-US.PHP
	if(isset($_POST['sendEmail'])) {

		$name    = mysqli_real_escape_string($conn, $_POST['name']);
		$email	 = mysqli_real_escape_string($conn, $_POST['email']);
		$subject = mysqli_real_escape_string($conn, $_POST['subject']);
		$msg     = mysqli_real_escape_string($conn, $_POST['message']);

	    $message = '<h3>'.$subject.'</h3>
					<p>
						Good day!<br>
						'.$msg.'
					</p>
					<p>
						Name of Sender: '.$name.'<br>
						Email: '.$email.'
					</p>
					<p><b>Note:</b> This is a system generated email please do not reply.</p>';
					//Load composer's autoloader

	    $mail = new PHPMailer(true);                            
	    try {
	        //Server settings
	        $mail->isSMTP();                                     
	        $mail->Host = 'smtp.gmail.com';                      
	        $mail->SMTPAuth = true;                             
	        $mail->Username = 'nhsmedellin@gmail.com';     
			$mail->Password = 'fgzyhjjhjxdikkjp';                
	        $mail->SMTPOptions = array(
	            'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	            )
	        );                         
	        $mail->SMTPSecure = 'ssl';                           
	        $mail->Port = 465;                                   

	        //Send Email
	        $mail->setFrom('nhsmedellin@gmail.com');
	        
	        //Recipients
	        $mail->addAddress('sonerwin12@gmail.com');              
	        $mail->addReplyTo('sonesrwin12@gmail.com');
	        
	        //Content
	        $mail->isHTML(true);                                  
	        $mail->Subject = $subject;
	        $mail->Body    = $message;

	        $mail->send();
			$_SESSION['success'] = "Email sent successfully!";
			header("Location: contact-us.php");

	    } catch (Exception $e) {
	    	$_SESSION['success'] = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
			header("Location: contact-us.php");
	    }
    }







    // SAVE SCHEDULE - BOOKEXAMSCHEDULE.PHP
    if(isset($_POST['confirm_booking'])) {
    	$user_Id     = mysqli_real_escape_string($conn, $_POST['user_Id']);
		$schedID     = mysqli_real_escape_string($conn, $_POST['schedID']);
		$date_booked = date('Y-m-d');

		$fetch = mysqli_query($conn, "SELECT * FROM exam_bookings WHERE bookingsUserId='$user_Id' ");
		if(mysqli_num_rows($fetch) > 0) {
			$_SESSION['message'] = "You have already booked a schedule";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: bookExam.php");
		} else {
		  $save = mysqli_query($conn, "INSERT INTO exam_bookings (bookingsUserId, bookingsSchedID, date_booked) VALUES ('$user_Id', '$schedID', '$date_booked')");
	      if($save) {
	      	$_SESSION['message'] = "You have successfully booked your examination schedule.";
	        $_SESSION['text'] = "Saved successfully!";
	        $_SESSION['status'] = "success";
			header("Location: bookExam.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while saving the information.";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: bookExam.php");
	      } 
		}
    }







	if(isset($_POST['exam'])) {

		$user_Id = $_POST['user_Id'];
		$date_registered = date('Y-m-d');

// ENGLISH **************************************************************************************
$one   = $_POST['one'];   $correct_one    =	$_POST['correct_one'];   $ans_q1  = mysqli_real_escape_string($conn, $_POST['ans_q1']);
$two   = $_POST['two'];   $correct_two	  =	$_POST['correct_two'];   $ans_q2  = mysqli_real_escape_string($conn, $_POST['ans_q2']);
$three = $_POST['three']; $correct_three  =	$_POST['correct_three']; $ans_q3  = mysqli_real_escape_string($conn, $_POST['ans_q3']);
$four  = $_POST['four'];  $correct_four	  =	$_POST['correct_four'];  $ans_q4  = mysqli_real_escape_string($conn, $_POST['ans_q4']);
$five  = $_POST['five'];  $correct_five   =	$_POST['correct_five'];  $ans_q5  = mysqli_real_escape_string($conn, $_POST['ans_q5']);
$six   = $_POST['six'];   $correct_six	  =	$_POST['correct_six'];   $ans_q6  = mysqli_real_escape_string($conn, $_POST['ans_q6']);
$seven = $_POST['seven']; $correct_seven  =	$_POST['correct_seven']; $ans_q7  = mysqli_real_escape_string($conn, $_POST['ans_q7']);
$eight = $_POST['eight']; $correct_eight  =	$_POST['correct_eight']; $ans_q8  = mysqli_real_escape_string($conn, $_POST['ans_q8']);
$nine  = $_POST['nine'];  $correct_nine	  =	$_POST['correct_nine'];  $ans_q9  = mysqli_real_escape_string($conn, $_POST['ans_q9']);
$ten   = $_POST['ten'];   $correct_ten	  =	$_POST['correct_ten'];   $ans_q10 = mysqli_real_escape_string($conn, $_POST['ans_q10']);

$eleven    = $_POST['eleven'];    $correct_eleven    = $_POST['correct_eleven'];    $ans_q11 = mysqli_real_escape_string($conn, $_POST['ans_q11']);
$twelve    = $_POST['twelve'];    $correct_twelve    = $_POST['correct_twelve'];    $ans_q12 = mysqli_real_escape_string($conn, $_POST['ans_q12']);
$thirteen  = $_POST['thirteen'];  $correct_thirteen  = $_POST['correct_thirteen'];  $ans_q13 = mysqli_real_escape_string($conn, $_POST['ans_q13']);
$fourteen  = $_POST['fourteen'];  $correct_fourteen  = $_POST['correct_fourteen'];  $ans_q14 = mysqli_real_escape_string($conn, $_POST['ans_q14']);
$fifteen   = $_POST['fifteen'];   $correct_fifteen   = $_POST['correct_fifteen'];   $ans_q15 = mysqli_real_escape_string($conn, $_POST['ans_q15']);
$sixteen   = $_POST['sixteen'];   $correct_sixteen   = $_POST['correct_sixteen'];   $ans_q16 = mysqli_real_escape_string($conn, $_POST['ans_q16']);
$seventeen = $_POST['seventeen']; $correct_seventeen = $_POST['correct_seventeen']; $ans_q17 = mysqli_real_escape_string($conn, $_POST['ans_q17']);
$eighteen  = $_POST['eighteen'];  $correct_eighteen  = $_POST['correct_eighteen'];  $ans_q18 = mysqli_real_escape_string($conn, $_POST['ans_q18']);
$nineteen  = $_POST['nineteen'];  $correct_nineteen  = $_POST['correct_nineteen'];  $ans_q19 = mysqli_real_escape_string($conn, $_POST['ans_q19']);
$twenty	   = $_POST['twenty'];    $correct_twenty    =	$_POST['correct_twenty'];   $ans_q20 = mysqli_real_escape_string($conn, $_POST['ans_q20']);

$remark_one       = ""; if($correct_one       != $ans_q1 ) { $remark_one       = 0; } else { $remark_one       = 1; }
$remark_two       = ""; if($correct_two       != $ans_q2 ) { $remark_two       = 0; } else { $remark_two       = 1; }
$remark_three     = ""; if($correct_three     != $ans_q3 ) { $remark_three     = 0; } else { $remark_three     = 1; }
$remark_four      = ""; if($correct_four      != $ans_q4 ) { $remark_four      = 0; } else { $remark_four      = 1; }
$remark_five      = ""; if($correct_five      != $ans_q5 ) { $remark_five      = 0; } else { $remark_five      = 1; }
$remark_six       = ""; if($correct_six       != $ans_q6 ) { $remark_six       = 0; } else { $remark_six       = 1; }
$remark_seven     = ""; if($correct_seven     != $ans_q7 ) { $remark_seven     = 0; } else { $remark_seven     = 1; }
$remark_eight     = ""; if($correct_eight     != $ans_q8 ) { $remark_eight     = 0; } else { $remark_eight     = 1; }
$remark_nine      = ""; if($correct_nine      != $ans_q9 ) { $remark_nine      = 0; } else { $remark_nine      = 1; }
$remark_ten       = ""; if($correct_ten       != $ans_q10) { $remark_ten       = 0; } else { $remark_ten       = 1; }
$remark_eleven    = ""; if($correct_eleven    != $ans_q11) { $remark_eleven    = 0; } else { $remark_eleven    = 1; }
$remark_twelve    = ""; if($correct_twelve    != $ans_q12) { $remark_twelve    = 0; } else { $remark_twelve    = 1; }
$remark_thirteen  = ""; if($correct_thirteen  != $ans_q13) { $remark_thirteen  = 0; } else { $remark_thirteen  = 1; }
$remark_fourteen  = ""; if($correct_fourteen  != $ans_q14) { $remark_fourteen  = 0; } else { $remark_fourteen  = 1; }
$remark_fifteen   = ""; if($correct_fifteen   != $ans_q15) { $remark_fifteen   = 0; } else { $remark_fifteen   = 1; }
$remark_sixteen   = ""; if($correct_sixteen   != $ans_q16) { $remark_sixteen   = 0; } else { $remark_sixteen   = 1; }
$remark_seventeen = ""; if($correct_seventeen != $ans_q17) { $remark_seventeen = 0; } else { $remark_seventeen = 1; }
$remark_eighteen  = ""; if($correct_eighteen  != $ans_q18) { $remark_eighteen  = 0; } else { $remark_eighteen  = 1; }
$remark_nineteen  = ""; if($correct_nineteen  != $ans_q19) { $remark_nineteen  = 0; } else { $remark_nineteen  = 1; }
$remark_twenty    = ""; if($correct_twenty    != $ans_q20) { $remark_twenty    = 0; } else { $remark_twenty    = 1; }



$twenty_one   = $_POST['twenty_one'];   $correct_twenty_one    = $_POST['correct_twenty_one'];      $ans_q21 = mysqli_real_escape_string($conn, $_POST['ans_q21']);
$twenty_two   = $_POST['twenty_two'];   $correct_twenty_two	   = $_POST['correct_twenty_two'];      $ans_q22 = mysqli_real_escape_string($conn, $_POST['ans_q22']);
$twenty_three = $_POST['twenty_three']; $correct_twenty_three  = $_POST['correct_twenty_three'];    $ans_q23 = mysqli_real_escape_string($conn, $_POST['ans_q23']);
$twenty_four  = $_POST['twenty_four'];  $correct_twenty_four   = $_POST['correct_twenty_four'];     $ans_q24 = mysqli_real_escape_string($conn, $_POST['ans_q24']);
$twenty_five  = $_POST['twenty_five'];  $correct_twenty_five   = $_POST['correct_twenty_five'];     $ans_q25 = mysqli_real_escape_string($conn, $_POST['ans_q25']);
$twenty_six	  = $_POST['twenty_six'];   $correct_twenty_six	   = $_POST['correct_twenty_six'];      $ans_q26 = mysqli_real_escape_string($conn, $_POST['ans_q26']);
$twenty_seven = $_POST['twenty_seven']; $correct_twenty_seven  = $_POST['correct_twenty_seven'];    $ans_q27 = mysqli_real_escape_string($conn, $_POST['ans_q27']);
$twenty_eight = $_POST['twenty_eight'];  $correct_twenty_eight = $_POST['correct_twenty_eight'];    $ans_q28 = mysqli_real_escape_string($conn, $_POST['ans_q28']);
$twenty_nine  = $_POST['twenty_nine'];   $correct_twenty_nine  = $_POST['correct_twenty_nine'];     $ans_q29 = mysqli_real_escape_string($conn, $_POST['ans_q29']);
$thirty	      = $_POST['thirty'];        $correct_thirty	   = $_POST['correct_thirty'];          $ans_q30 = mysqli_real_escape_string($conn, $_POST['ans_q30']);
$three_one    =	$_POST['three_one'];     $correct_three_one    = $_POST['correct_three_one'];       $ans_q31 = mysqli_real_escape_string($conn, $_POST['ans_q31']);
$three_two    =	$_POST['three_two'];     $correct_three_two    = $_POST['correct_three_two'];       $ans_q32 = mysqli_real_escape_string($conn, $_POST['ans_q32']);
$three_three  =	$_POST['three_three'];   $correct_three_three  = $_POST['correct_three_three'];     $ans_q33 = mysqli_real_escape_string($conn, $_POST['ans_q33']);
$three_four	  =	$_POST['three_four'];    $correct_three_four   = $_POST['correct_three_four'];      $ans_q34 = mysqli_real_escape_string($conn, $_POST['ans_q34']);
$three_five	  =	$_POST['three_five'];    $correct_three_five   = $_POST['correct_three_five'];      $ans_q35 = mysqli_real_escape_string($conn, $_POST['ans_q35']);
$three_six	  =	$_POST['three_six'];     $correct_three_six	   = $_POST['correct_three_six'];       $ans_q36 = mysqli_real_escape_string($conn, $_POST['ans_q36']);
$three_seven  =	$_POST['three_seven'];   $correct_three_seven  = $_POST['correct_three_seven'];     $ans_q37 = mysqli_real_escape_string($conn, $_POST['ans_q37']);
$three_eight  =	$_POST['three_eight'];   $correct_three_eight  = $_POST['correct_three_eight'];     $ans_q38 = mysqli_real_escape_string($conn, $_POST['ans_q38']);
$three_nine	  =	$_POST['three_nine'];    $correct_three_nine   = $_POST['correct_three_nine'];      $ans_q39 = mysqli_real_escape_string($conn, $_POST['ans_q39']);
$fourty	      =	$_POST['fourty'];        $correct_fourty	   = $_POST['correct_fourty'];          $ans_q40 = mysqli_real_escape_string($conn, $_POST['ans_q40']);

$remark_twenty_one   = ""; if($correct_twenty_one   != $ans_q21) { $remark_twenty_one   = 0; } else { $remark_twenty_one   = 1; }
$remark_twenty_two   = ""; if($correct_twenty_two   != $ans_q22) { $remark_twenty_two   = 0; } else { $remark_twenty_two   = 1; }
$remark_twenty_three = ""; if($correct_twenty_three != $ans_q23) { $remark_twenty_three = 0; } else { $remark_twenty_three = 1; }
$remark_twenty_four  = ""; if($correct_twenty_four  != $ans_q24) { $remark_twenty_four  = 0; } else { $remark_twenty_four  = 1; }
$remark_twenty_five  = ""; if($correct_twenty_five  != $ans_q25) { $remark_twenty_five  = 0; } else { $remark_twenty_five  = 1; }
$remark_twenty_six   = ""; if($correct_twenty_six   != $ans_q26) { $remark_twenty_six   = 0; } else { $remark_twenty_six   = 1; }
$remark_twenty_seven = ""; if($correct_twenty_seven != $ans_q27) { $remark_twenty_seven = 0; } else { $remark_twenty_seven = 1; }
$remark_twenty_eight = ""; if($correct_twenty_eight != $ans_q28) { $remark_twenty_eight = 0; } else { $remark_twenty_eight = 1; }
$remark_twenty_nine  = ""; if($correct_twenty_nine  != $ans_q29) { $remark_twenty_nine  = 0; } else { $remark_twenty_nine  = 1; }
$remark_thirty       = ""; if($correct_thirty       != $ans_q30) { $remark_thirty       = 0; } else { $remark_thirty       = 1; }
$remark_three_one    = ""; if($correct_three_one    != $ans_q31) { $remark_three_one    = 0; } else { $remark_three_one    = 1; }
$remark_three_two    = ""; if($correct_three_two    != $ans_q32) { $remark_three_two    = 0; } else { $remark_three_two    = 1; }
$remark_three_three  = ""; if($correct_three_three  != $ans_q33) { $remark_three_three  = 0; } else { $remark_three_three  = 1; }
$remark_three_four   = ""; if($correct_three_four   != $ans_q34) { $remark_three_four   = 0; } else { $remark_three_four   = 1; }
$remark_three_five   = ""; if($correct_three_five   != $ans_q35) { $remark_three_five   = 0; } else { $remark_three_five   = 1; }
$remark_three_six    = ""; if($correct_three_six    != $ans_q36) { $remark_three_six    = 0; } else { $remark_three_six    = 1; }
$remark_three_seven  = ""; if($correct_three_seven  != $ans_q37) { $remark_three_seven  = 0; } else { $remark_three_seven  = 1; }
$remark_three_eight  = ""; if($correct_three_eight  != $ans_q38) { $remark_three_eight  = 0; } else { $remark_three_eight  = 1; }
$remark_three_nine   = ""; if($correct_three_nine   != $ans_q39) { $remark_three_nine   = 0; } else { $remark_three_nine   = 1; }
$remark_fourty       = ""; if($correct_fourty       != $ans_q40) { $remark_fourty       = 0; } else { $remark_fourty       = 1; }


$four_one   = $_POST['four_one'];    $correct_four_one   = $_POST['correct_four_one'];     $ans_q41  = mysqli_real_escape_string($conn, $_POST['ans_q41']);
$four_two   = $_POST['four_two'];    $correct_four_two	 = $_POST['correct_four_two'];     $ans_q42  = mysqli_real_escape_string($conn, $_POST['ans_q42']);
$four_three = $_POST['four_three'];  $correct_four_three = $_POST['correct_four_three'];   $ans_q43  = mysqli_real_escape_string($conn, $_POST['ans_q43']);
$four_four	= $_POST['four_four'];   $correct_four_four	 = $_POST['correct_four_four'];    $ans_q44	 = mysqli_real_escape_string($conn, $_POST['ans_q44']);
$four_five  = $_POST['four_five'];   $correct_four_five  = $_POST['correct_four_five'];    $ans_q45	 = mysqli_real_escape_string($conn, $_POST['ans_q45']);
$four_six   = $_POST['four_six'];    $correct_four_six	 = $_POST['correct_four_six'];     $ans_q46  = mysqli_real_escape_string($conn, $_POST['ans_q46']);
$four_seven = $_POST['four_seven'];  $correct_four_seven = $_POST['correct_four_seven'];   $ans_q47	 = mysqli_real_escape_string($conn, $_POST['ans_q47']);
$four_eight = $_POST['four_eight'];  $correct_four_eight = $_POST['correct_four_eight'];   $ans_q48	 = mysqli_real_escape_string($conn, $_POST['ans_q48']);
$four_nine  = $_POST['four_nine'];   $correct_four_nine	 = $_POST['correct_four_nine'];    $ans_q49  = mysqli_real_escape_string($conn, $_POST['ans_q49']);
$fifty	    = $_POST['fifty'];       $correct_fifty	     = $_POST['correct_fifty'];        $ans_q50  = mysqli_real_escape_string($conn, $_POST['ans_q50']);
$five_one   = $_POST['five_one'];    $correct_five_one   = $_POST['correct_five_one'];     $ans_q51  = mysqli_real_escape_string($conn, $_POST['ans_q51']);
$five_two   = $_POST['five_two'];    $correct_five_two   = $_POST['correct_five_two'];     $ans_q52  = mysqli_real_escape_string($conn, $_POST['ans_q52']);
$five_three = $_POST['five_three'];  $correct_five_three = $_POST['correct_five_three'];   $ans_q53	 = mysqli_real_escape_string($conn, $_POST['ans_q53']);
$five_four	= $_POST['five_four'];   $correct_five_four	 = $_POST['correct_five_four'];    $ans_q54	 = mysqli_real_escape_string($conn, $_POST['ans_q54']);
$five_five	= $_POST['five_five'];   $correct_five_five	 = $_POST['correct_five_five'];    $ans_q55	 = mysqli_real_escape_string($conn, $_POST['ans_q55']);
$five_six   = $_POST['five_six'];    $correct_five_six	 = $_POST['correct_five_six'];     $ans_q56	 = mysqli_real_escape_string($conn, $_POST['ans_q56']);
$five_seven = $_POST['five_seven'];  $correct_five_seven = $_POST['correct_five_seven'];   $ans_q57	 = mysqli_real_escape_string($conn, $_POST['ans_q57']);
$five_eight	= $_POST['five_eight'];  $correct_five_eight = $_POST['correct_five_eight'];   $ans_q58	 = mysqli_real_escape_string($conn, $_POST['ans_q58']);
$five_nine	= $_POST['five_nine'];   $correct_five_nine	 = $_POST['correct_five_nine'];    $ans_q59	 = mysqli_real_escape_string($conn, $_POST['ans_q59']);
$sixty	    = $_POST['sixty'];       $correct_sixty	     = $_POST['correct_sixty'];        $ans_q60	 = mysqli_real_escape_string($conn, $_POST['ans_q60']);

$remark_four_one   = ""; if($correct_four_one   != $ans_q41) { $remark_four_one   = 0; } else { $remark_four_one   = 1; }
$remark_four_two   = ""; if($correct_four_two   != $ans_q42) { $remark_four_two   = 0; } else { $remark_four_two   = 1; }
$remark_four_three = ""; if($correct_four_three != $ans_q43) { $remark_four_three = 0; } else { $remark_four_three = 1; }
$remark_four_four  = ""; if($correct_four_four  != $ans_q44) { $remark_four_four  = 0; } else { $remark_four_four  = 1; }
$remark_four_five  = ""; if($correct_four_five  != $ans_q45) { $remark_four_five  = 0; } else { $remark_four_five  = 1; }
$remark_four_six   = ""; if($correct_four_six   != $ans_q46) { $remark_four_six   = 0; } else { $remark_four_six   = 1; }
$remark_four_seven = ""; if($correct_four_seven != $ans_q47) { $remark_four_seven = 0; } else { $remark_four_seven = 1; }
$remark_four_eight = ""; if($correct_four_eight != $ans_q48) { $remark_four_eight = 0; } else { $remark_four_eight = 1; }
$remark_four_nine  = ""; if($correct_four_nine  != $ans_q49) { $remark_four_nine  = 0; } else { $remark_four_nine  = 1; }
$remark_fifty      = ""; if($correct_fifty      != $ans_q50) { $remark_fifty      = 0; } else { $remark_fifty      = 1; }
$remark_five_one   = ""; if($correct_five_one   != $ans_q51) { $remark_five_one   = 0; } else { $remark_five_one   = 1; }
$remark_five_two   = ""; if($correct_five_two   != $ans_q52) { $remark_five_two   = 0; } else { $remark_five_two   = 1; }
$remark_five_three = ""; if($correct_five_three != $ans_q53) { $remark_five_three = 0; } else { $remark_five_three = 1; }
$remark_five_four  = ""; if($correct_five_four  != $ans_q54) { $remark_five_four  = 0; } else { $remark_five_four  = 1; }
$remark_five_five  = ""; if($correct_five_five  != $ans_q55) { $remark_five_five  = 0; } else { $remark_five_five  = 1; }
$remark_five_six   = ""; if($correct_five_six   != $ans_q56) { $remark_five_six   = 0; } else { $remark_five_six   = 1; }
$remark_five_seven = ""; if($correct_five_seven != $ans_q57) { $remark_five_seven = 0; } else { $remark_five_seven = 1; }
$remark_five_eight = ""; if($correct_five_eight != $ans_q58) { $remark_five_eight = 0; } else { $remark_five_eight = 1; }
$remark_five_nine  = ""; if($correct_five_nine  != $ans_q59) { $remark_five_nine  = 0; } else { $remark_five_nine  = 1; }
$remark_sixty      = ""; if($correct_sixty      != $ans_q60) { $remark_sixty      = 0; } else { $remark_sixty      = 1; }


// SCIENCE **************************************************************************************
$six_one     = $_POST['six_one'];      $correct_six_one	    =	$_POST['correct_six_one'];     $ans_q61 = mysqli_real_escape_string($conn, $_POST['ans_q61']);
$six_two     = $_POST['six_two'];      $correct_six_two     =	$_POST['correct_six_two'];     $ans_q62 = mysqli_real_escape_string($conn, $_POST['ans_q62']);
$six_three   = $_POST['six_three'];    $correct_six_three   =	$_POST['correct_six_three'];   $ans_q63 = mysqli_real_escape_string($conn, $_POST['ans_q63']);
$six_four    = $_POST['six_four'];     $correct_six_four    =	$_POST['correct_six_four'];    $ans_q64	= mysqli_real_escape_string($conn, $_POST['ans_q64']);
$six_five    = $_POST['six_five'];     $correct_six_five    =	$_POST['correct_six_five'];    $ans_q65	= mysqli_real_escape_string($conn, $_POST['ans_q65']);
$six_six     = $_POST['six_six'];      $correct_six_six     =	$_POST['correct_six_six'];     $ans_q66 = mysqli_real_escape_string($conn, $_POST['ans_q66']);
$six_seven   = $_POST['six_seven'];    $correct_six_seven   =	$_POST['correct_six_seven'];   $ans_q67	= mysqli_real_escape_string($conn, $_POST['ans_q67']);
$six_eight   = $_POST['six_eight'];    $correct_six_eight   =	$_POST['correct_six_eight'];   $ans_q68	= mysqli_real_escape_string($conn, $_POST['ans_q68']);
$six_nine    = $_POST['six_nine'];     $correct_six_nine    =	$_POST['correct_six_nine'];    $ans_q69 = mysqli_real_escape_string($conn, $_POST['ans_q69']);
$seventy     = $_POST['seventy'];      $correct_seventy     =	$_POST['correct_seventy'];     $ans_q70 = mysqli_real_escape_string($conn, $_POST['ans_q70']);
$seven_one   = $_POST['seven_one'];    $correct_seven_one   =	$_POST['correct_seven_one'];   $ans_q71 = mysqli_real_escape_string($conn, $_POST['ans_q71']);
$seven_two   = $_POST['seven_two'];    $correct_seven_two   =	$_POST['correct_seven_two'];   $ans_q72 = mysqli_real_escape_string($conn, $_POST['ans_q72']);
$seven_three = $_POST['seven_three'];  $correct_seven_three	=	$_POST['correct_seven_three']; $ans_q73	= mysqli_real_escape_string($conn, $_POST['ans_q73']);
$seven_four  = $_POST['seven_four'];   $correct_seven_four  =	$_POST['correct_seven_four'];  $ans_q74	= mysqli_real_escape_string($conn, $_POST['ans_q74']);
$seven_five  = $_POST['seven_five'];   $correct_seven_five  =	$_POST['correct_seven_five'];  $ans_q75	= mysqli_real_escape_string($conn, $_POST['ans_q75']);
$seven_six   = $_POST['seven_six'];    $correct_seven_six   =	$_POST['correct_seven_six'];   $ans_q76	= mysqli_real_escape_string($conn, $_POST['ans_q76']);
$seven_seven = $_POST['seven_seven'];  $correct_seven_seven =	$_POST['correct_seven_seven']; $ans_q77	= mysqli_real_escape_string($conn, $_POST['ans_q77']);
$seven_eight = $_POST['seven_eight'];  $correct_seven_eight	=	$_POST['correct_seven_eight']; $ans_q78	= mysqli_real_escape_string($conn, $_POST['ans_q78']);
$seven_nine  = $_POST['seven_nine'];   $correct_seven_nine  =	$_POST['correct_seven_nine'];  $ans_q79	= mysqli_real_escape_string($conn, $_POST['ans_q79']);
$eighty      = $_POST['eighty'];       $correct_eighty      =	$_POST['correct_eighty'];      $ans_q80	= mysqli_real_escape_string($conn, $_POST['ans_q80']);

$remark_six_one     = ""; if($correct_six_one	  != $ans_q61) { $remark_six_one     = 0; } else { $remark_six_one      = 1; }
$remark_six_two     = ""; if($correct_six_two     != $ans_q62) { $remark_six_two     = 0; } else { $remark_six_two      = 1; }
$remark_six_three   = ""; if($correct_six_three   != $ans_q63) { $remark_six_three   = 0; } else { $remark_six_three    = 1; }
$remark_six_four    = ""; if($correct_six_four    != $ans_q64) { $remark_six_four    = 0; } else { $remark_six_four     = 1; }
$remark_six_five    = ""; if($correct_six_five    != $ans_q65) { $remark_six_five    = 0; } else { $remark_six_five     = 1; }
$remark_six_six     = ""; if($correct_six_six     != $ans_q66) { $remark_six_six     = 0; } else { $remark_six_six      = 1; }
$remark_six_seven   = ""; if($correct_six_seven   != $ans_q67) { $remark_six_seven   = 0; } else { $remark_six_seven    = 1; }
$remark_six_eight   = ""; if($correct_six_eight   != $ans_q68) { $remark_six_eight   = 0; } else { $remark_six_eight    = 1; }
$remark_six_nine    = ""; if($correct_six_nine    != $ans_q69) { $remark_six_nine    = 0; } else { $remark_six_nine     = 1; }
$remark_seventy     = ""; if($correct_seventy     != $ans_q70) { $remark_seventy     = 0; } else { $remark_seventy      = 1; }
$remark_seven_one   = ""; if($correct_seven_one   != $ans_q71) { $remark_seven_one   = 0; } else { $remark_seven_one    = 1; }
$remark_seven_two   = ""; if($correct_seven_two   != $ans_q72) { $remark_seven_two   = 0; } else { $remark_seven_two    = 1; }
$remark_seven_three = ""; if($correct_seven_three != $ans_q73) { $remark_seven_three = 0; } else { $remark_seven_three  = 1; }
$remark_seven_four  = ""; if($correct_seven_four  != $ans_q74) { $remark_seven_four  = 0; } else { $remark_seven_four   = 1; }
$remark_seven_five  = ""; if($correct_seven_five  != $ans_q75) { $remark_seven_five  = 0; } else { $remark_seven_five   = 1; }
$remark_seven_six   = ""; if($correct_seven_six   != $ans_q76) { $remark_seven_six   = 0; } else { $remark_seven_six    = 1; }
$remark_seven_seven = ""; if($correct_seven_seven != $ans_q77) { $remark_seven_seven = 0; } else { $remark_seven_seven  = 1; }
$remark_seven_eight = ""; if($correct_seven_eight != $ans_q78) { $remark_seven_eight = 0; } else { $remark_seven_eight  = 1; }
$remark_seven_nine  = ""; if($correct_seven_nine  != $ans_q79) { $remark_seven_nine  = 0; } else { $remark_seven_nine   = 1; }
$remark_eighty      = ""; if($correct_eighty      != $ans_q80) { $remark_eighty      = 0; } else { $remark_eighty       = 1; }



$eight_one   = $_POST['eight_one'];   $correct_eight_one   = $_POST['correct_eight_one'];    $ans_q81  = mysqli_real_escape_string($conn, $_POST['ans_q81']);
$eight_two   = $_POST['eight_two'];   $correct_eight_two   = $_POST['correct_eight_two'];    $ans_q82  = mysqli_real_escape_string($conn, $_POST['ans_q82']);
$eight_three = $_POST['eight_three']; $correct_eight_three = $_POST['correct_eight_three'];  $ans_q83  = mysqli_real_escape_string($conn, $_POST['ans_q83']);
$eight_four  = $_POST['eight_four'];  $correct_eight_four  = $_POST['correct_eight_four'];   $ans_q84  = mysqli_real_escape_string($conn, $_POST['ans_q84']);
$eight_five  = $_POST['eight_five'];  $correct_eight_five  = $_POST['correct_eight_five'];   $ans_q85  = mysqli_real_escape_string($conn, $_POST['ans_q85']);
$eight_six   = $_POST['eight_six'];   $correct_eight_six   = $_POST['correct_eight_six'];    $ans_q86  = mysqli_real_escape_string($conn, $_POST['ans_q86']);
$eight_seven = $_POST['eight_seven']; $correct_eight_seven = $_POST['correct_eight_seven'];  $ans_q87  = mysqli_real_escape_string($conn, $_POST['ans_q87']);
$eight_eight = $_POST['eight_eight']; $correct_eight_eight = $_POST['correct_eight_eight'];  $ans_q88  = mysqli_real_escape_string($conn, $_POST['ans_q88']);
$eight_nine  = $_POST['eight_nine'];  $correct_eight_nine  = $_POST['correct_eight_nine'];   $ans_q89  = mysqli_real_escape_string($conn, $_POST['ans_q89']);
$ninety      = $_POST['ninety'];      $correct_ninety      = $_POST['correct_ninety'];       $ans_q90  = mysqli_real_escape_string($conn, $_POST['ans_q90']);
$nine_one    = $_POST['nine_one'];    $correct_nine_one    = $_POST['correct_nine_one'];     $ans_q91  = mysqli_real_escape_string($conn, $_POST['ans_q91']);
$nine_two    = $_POST['nine_two'];    $correct_nine_two    = $_POST['correct_nine_two'];     $ans_q92  = mysqli_real_escape_string($conn, $_POST['ans_q92']);
$nine_three  = $_POST['nine_three'];  $correct_nine_three  = $_POST['correct_nine_three'];   $ans_q93  = mysqli_real_escape_string($conn, $_POST['ans_q93']);
$nine_four   = $_POST['nine_four'];   $correct_nine_four   = $_POST['correct_nine_four'];    $ans_q94  = mysqli_real_escape_string($conn, $_POST['ans_q94']);
$nine_five   = $_POST['nine_five'];   $correct_nine_five   = $_POST['correct_nine_five'];    $ans_q95  = mysqli_real_escape_string($conn, $_POST['ans_q95']);
$nine_six    = $_POST['nine_six'];    $correct_nine_six    = $_POST['correct_nine_six'];     $ans_q96  = mysqli_real_escape_string($conn, $_POST['ans_q96']);
$nine_seven  = $_POST['nine_seven'];  $correct_nine_seven  = $_POST['correct_nine_seven'];   $ans_q97  = mysqli_real_escape_string($conn, $_POST['ans_q97']);
$nine_eight  = $_POST['nine_eight'];  $correct_nine_eight  = $_POST['correct_nine_eight'];   $ans_q98  = mysqli_real_escape_string($conn, $_POST['ans_q98']);
$nine_nine   = $_POST['nine_nine'];   $correct_nine_nine   = $_POST['correct_nine_nine'];    $ans_q99  = mysqli_real_escape_string($conn, $_POST['ans_q99']);
$hundred     = $_POST['hundred'];     $correct_hundred     = $_POST['correct_hundred'];      $ans_q100 = mysqli_real_escape_string($conn, $_POST['ans_q100']);

$remark_eight_one    = ""; if($correct_eight_one   != $ans_q81 ) { $remark_eight_one   = 0; } else { $remark_eight_one   = 1; }
$remark_eight_two    = ""; if($correct_eight_two   != $ans_q82 ) { $remark_eight_two   = 0; } else { $remark_eight_two   = 1; }
$remark_eight_three  = ""; if($correct_eight_three != $ans_q83 ) { $remark_eight_three = 0; } else { $remark_eight_three = 1; }
$remark_eight_four   = ""; if($correct_eight_four  != $ans_q84 ) { $remark_eight_four  = 0; } else { $remark_eight_four  = 1; }
$remark_eight_five   = ""; if($correct_eight_five  != $ans_q85 ) { $remark_eight_five  = 0; } else { $remark_eight_five  = 1; }
$remark_eight_six    = ""; if($correct_eight_six   != $ans_q86 ) { $remark_eight_six   = 0; } else { $remark_eight_six   = 1; }
$remark_eight_seven  = ""; if($correct_eight_seven != $ans_q87 ) { $remark_eight_seven = 0; } else { $remark_eight_seven = 1; }
$remark_eight_eight  = ""; if($correct_eight_eight != $ans_q88 ) { $remark_eight_eight = 0; } else { $remark_eight_eight = 1; }
$remark_eight_nine   = ""; if($correct_eight_nine  != $ans_q89 ) { $remark_eight_nine  = 0; } else { $remark_eight_nine  = 1; }
$remark_ninety       = ""; if($correct_ninety      != $ans_q90 ) { $remark_ninety      = 0; } else { $remark_ninety      = 1; }
$remark_nine_one     = ""; if($correct_nine_one    != $ans_q91 ) { $remark_nine_one    = 0; } else { $remark_nine_one    = 1; }
$remark_nine_two     = ""; if($correct_nine_two    != $ans_q92 ) { $remark_nine_two    = 0; } else { $remark_nine_two    = 1; }
$remark_nine_three   = ""; if($correct_nine_three  != $ans_q93 ) { $remark_nine_three  = 0; } else { $remark_nine_three  = 1; }
$remark_nine_four    = ""; if($correct_nine_four   != $ans_q94 ) { $remark_nine_four   = 0; } else { $remark_nine_four   = 1; }
$remark_nine_five    = ""; if($correct_nine_five   != $ans_q95 ) { $remark_nine_five   = 0; } else { $remark_nine_five   = 1; }
$remark_nine_six     = ""; if($correct_nine_six    != $ans_q96 ) { $remark_nine_six    = 0; } else { $remark_nine_six    = 1; }
$remark_nine_seven   = ""; if($correct_nine_seven  != $ans_q97 ) { $remark_nine_seven  = 0; } else { $remark_nine_seven  = 1; }
$remark_nine_eight   = ""; if($correct_nine_eight  != $ans_q98 ) { $remark_nine_eight  = 0; } else { $remark_nine_eight  = 1; }
$remark_nine_nine    = ""; if($correct_nine_nine   != $ans_q99 ) { $remark_nine_nine   = 0; } else { $remark_nine_nine   = 1; }
$remark_hundred      = ""; if($correct_hundred     != $ans_q100) { $remark_hundred     = 0; } else { $remark_hundred     = 1; }




$hundred_one = $_POST['hundred_one'];   $correct_hundred_one   = $_POST['correct_hundred_one'];   $ans_q101  = mysqli_real_escape_string($conn, $_POST['ans_q101']);
$hundred_two = $_POST['hundred_two'];   $correct_hundred_two   = $_POST['correct_hundred_two'];   $ans_q102  = mysqli_real_escape_string($conn, $_POST['ans_q102']);
$hundred_three = $_POST['hundred_three']; $correct_hundred_three = $_POST['correct_hundred_three']; $ans_q103  = mysqli_real_escape_string($conn, $_POST['ans_q103']);
$hundred_four  = $_POST['hundred_four'];  $correct_hundred_four  = $_POST['correct_hundred_four'];  $ans_q104  = mysqli_real_escape_string($conn, $_POST['ans_q104']);
$hundred_five  = $_POST['hundred_five'];  $correct_hundred_five  = $_POST['correct_hundred_five'];  $ans_q105  = mysqli_real_escape_string($conn, $_POST['ans_q105']);
$hundred_six   = $_POST['hundred_six'];   $correct_hundred_six   = $_POST['correct_hundred_six'];   $ans_q106  = mysqli_real_escape_string($conn, $_POST['ans_q106']);
$hundred_seven = $_POST['hundred_seven']; $correct_hundred_seven = $_POST['correct_hundred_seven']; $ans_q107  = mysqli_real_escape_string($conn, $_POST['ans_q107']);
$hundred_eight = $_POST['hundred_eight']; $correct_hundred_eight = $_POST['correct_hundred_eight']; $ans_q108  = mysqli_real_escape_string($conn, $_POST['ans_q108']);
$hundred_nine  = $_POST['hundred_nine'];  $correct_hundred_nine  = $_POST['correct_hundred_nine'];  $ans_q109  = mysqli_real_escape_string($conn, $_POST['ans_q109']);
$hundredten       = $_POST['hundredten'];       $correct_hundredten      = $_POST['correct_hundredten'];       $ans_q110  = mysqli_real_escape_string($conn, $_POST['ans_q110']);
$hundred_eleven   = $_POST['hundred_eleven'];   $correct_hundred_eleven    = $_POST['correct_hundred_eleven'];     $ans_q111  = mysqli_real_escape_string($conn, $_POST['ans_q111']);
$hundred_twelve   = $_POST['hundred_twelve'];   $correct_hundred_twelve    = $_POST['correct_hundred_twelve'];     $ans_q112  = mysqli_real_escape_string($conn, $_POST['ans_q112']);
$hundred_thirteen = $_POST['hundred_thirteen']; $correct_hundred_thirteen  = $_POST['correct_hundred_thirteen'];   $ans_q113  = mysqli_real_escape_string($conn, $_POST['ans_q113']);
$hundredfourteen  = $_POST['hundredfourteen'];  $correct_hundredfourteen   = $_POST['correct_hundredfourteen'];    $ans_q114  = mysqli_real_escape_string($conn, $_POST['ans_q114']);
$hundredfifteen   = $_POST['hundredfifteen'];   $correct_hundredfifteen   = $_POST['correct_hundredfifteen'];    $ans_q115  = mysqli_real_escape_string($conn, $_POST['ans_q115']);
$hundredsixteen   = $_POST['hundredsixteen'];   $correct_hundredsixteen    = $_POST['correct_hundredsixteen'];     $ans_q116  = mysqli_real_escape_string($conn, $_POST['ans_q116']);
$hundredseventeen = $_POST['hundredseventeen']; $correct_hundredseventeen  = $_POST['correct_hundredseventeen'];   $ans_q117  = mysqli_real_escape_string($conn, $_POST['ans_q117']);
$hundredeighteen  = $_POST['hundredeighteen'];  $correct_hundredeighteen  = $_POST['correct_hundredeighteen'];   $ans_q118  = mysqli_real_escape_string($conn, $_POST['ans_q118']);
$hundrednineteen  = $_POST['hundrednineteen'];  $correct_hundrednineteen   = $_POST['correct_hundrednineteen'];    $ans_q119  = mysqli_real_escape_string($conn, $_POST['ans_q119']);
$hundredtwenty    = $_POST['hundredtwenty'];    $correct_hundredtwenty     = $_POST['correct_hundredtwenty'];      $ans_q120 = mysqli_real_escape_string($conn, $_POST['ans_q120']);


$remark_hundred_one       = ""; if($correct_hundred_one      != $ans_q101 ) { $remark_hundred_one       = 0; } else { $remark_hundred_one       = 1; }
$remark_hundred_two       = ""; if($correct_hundred_two      != $ans_q102 ) { $remark_hundred_two       = 0; } else { $remark_hundred_two       = 1; }
$remark_hundred_three     = ""; if($correct_hundred_three    != $ans_q103 ) { $remark_hundred_three     = 0; } else { $remark_hundred_three     = 1; }
$remark_hundred_four      = ""; if($correct_hundred_four     != $ans_q104 ) { $remark_hundred_four      = 0; } else { $remark_hundred_four      = 1; }
$remark_hundred_five      = ""; if($correct_hundred_five     != $ans_q105 ) { $remark_hundred_five      = 0; } else { $remark_hundred_five      = 1; }
$remark_hundred_six       = ""; if($correct_hundred_six      != $ans_q106 ) { $remark_hundred_six       = 0; } else { $remark_hundred_six       = 1; }
$remark_hundred_seven     = ""; if($correct_hundred_seven    != $ans_q107 ) { $remark_hundred_seven     = 0; } else { $remark_hundred_seven     = 1; }
$remark_hundred_eight     = ""; if($correct_hundred_eight    != $ans_q108 ) { $remark_hundred_eight     = 0; } else { $remark_hundred_eight     = 1; }
$remark_hundred_nine      = ""; if($correct_hundred_nine     != $ans_q109 ) { $remark_hundred_nine      = 0; } else { $remark_hundred_nine      = 1; }
$remark_hundred_ten       = ""; if($correct_hundredten       != $ans_q110 ) { $remark_hundred_ten       = 0; } else { $remark_hundred_ten       = 1; }
$remark_hundred_eleven    = ""; if($correct_hundred_eleven   != $ans_q111)  { $remark_hundred_eleven    = 0; } else { $remark_hundred_eleven    = 1; }
$remark_hundred_twelve    = ""; if($correct_hundred_twelve   != $ans_q112)  { $remark_hundred_twelve    = 0; } else { $remark_hundred_twelve    = 1; }
$remark_hundred_thirteen  = ""; if($correct_hundred_thirteen != $ans_q113)  { $remark_hundred_thirteen  = 0; } else { $remark_hundred_thirteen  = 1; }
$remark_hundred_fourteen  = ""; if($correct_hundredfourteen  != $ans_q114)  { $remark_hundred_fourteen  = 0; } else { $remark_hundred_fourteen  = 1; }
$remark_hundred_fifteen   = ""; if($correct_hundredfifteen   != $ans_q115)  { $remark_hundred_fifteen   = 0; } else { $remark_hundred_fifteen   = 1; }
$remark_hundred_sixteen   = ""; if($correct_hundredsixteen   != $ans_q116)  { $remark_hundred_sixteen   = 0; } else { $remark_hundred_sixteen   = 1; }
$remark_hundred_seventeen = ""; if($correct_hundredseventeen != $ans_q117)  { $remark_hundred_seventeen = 0; } else { $remark_hundred_seventeen = 1; }
$remark_hundred_eightteen = ""; if($correct_hundredeighteen  != $ans_q118)  { $remark_hundred_eightteen = 0; } else { $remark_hundred_eightteen = 1; }
$remark_hundred_nineteen  = ""; if($correct_hundrednineteen  != $ans_q119)  { $remark_hundred_nineteen  = 0; } else { $remark_hundred_nineteen  = 1; }
$remark_hundred_twenty    = ""; if($correct_hundredtwenty    != $ans_q120)  { $remark_hundred_twenty    = 0; } else { $remark_hundred_twenty    = 1; }


// MATHEMATICS ************************************************************************************

$hundredtwenty_one = $_POST['hundredtwenty_one'];   $correct_hundredtwenty_one   = $_POST['correct_hundredtwenty_one'];   $ans_q121  = mysqli_real_escape_string($conn, $_POST['ans_q121']);
$hundredTwentytwo = $_POST['hundredTwentytwo'];   $correct_hundredTwentytwo   = $_POST['correct_hundredTwentytwo'];   $ans_q122  = mysqli_real_escape_string($conn, $_POST['ans_q122']);
$hundred_Twentythree = $_POST['hundred_Twentythree']; $correct_hundred_Twentythree = $_POST['correct_hundred_Twentythree']; $ans_q123  = mysqli_real_escape_string($conn, $_POST['ans_q123']);
$hundred_Twentyfour  = $_POST['hundred_Twentyfour'];  $correct_hundred_Twentyfour  = $_POST['correct_hundred_Twentyfour'];  $ans_q124  = mysqli_real_escape_string($conn, $_POST['ans_q124']);
$hundred_Twentyfive  = $_POST['hundred_Twentyfive'];  $correct_hundred_Twentyfive  = $_POST['correct_hundred_Twentyfive'];  $ans_q125  = mysqli_real_escape_string($conn, $_POST['ans_q125']);
$hundred_Twentysix   = $_POST['hundred_Twentysix'];   $correct_hundred_Twentysix   = $_POST['correct_hundred_Twentysix'];   $ans_q126  = mysqli_real_escape_string($conn, $_POST['ans_q126']);
$hundred_Twentyseven = $_POST['hundred_Twentyseven']; $correct_hundred_Twentyseven = $_POST['correct_hundred_Twentyseven']; $ans_q127  = mysqli_real_escape_string($conn, $_POST['ans_q127']);
$hundred_Twentyeight = $_POST['hundred_Twentyeight']; $correct_hundred_Twentyeight = $_POST['correct_hundred_Twentyeight']; $ans_q128  = mysqli_real_escape_string($conn, $_POST['ans_q128']);
$hundred_Twentynine  = $_POST['hundred_Twentynine'];  $correct_hundred_Twentynine  = $_POST['correct_hundred_Twentynine'];  $ans_q129  = mysqli_real_escape_string($conn, $_POST['ans_q129']);
$hundredThirty       = $_POST['hundredThirty'];       $correct_hundredThirty      = $_POST['correct_hundredThirty'];       $ans_q130  = mysqli_real_escape_string($conn, $_POST['ans_q130']);
$hundred_Thirtyone   = $_POST['hundred_Thirtyone'];   $correct_hundred_Thirtyone    = $_POST['correct_hundred_Thirtyone'];     $ans_q131  = mysqli_real_escape_string($conn, $_POST['ans_q131']);
$hundred_thirtytwo   = $_POST['hundred_thirtytwo'];   $correct_hundred_thirtytwo    = $_POST['correct_hundred_thirtytwo'];     $ans_q132  = mysqli_real_escape_string($conn, $_POST['ans_q132']);
$hundred_Thirtythree = $_POST['hundred_Thirtythree']; $correct_hundred_Thirtythree  = $_POST['correct_hundred_Thirtythree'];   $ans_q133  = mysqli_real_escape_string($conn, $_POST['ans_q133']);
$hundredThirtyfour  = $_POST['hundredThirtyfour'];  $correct_hundredThirtyfour   = $_POST['correct_hundredThirtyfour'];    $ans_q134  = mysqli_real_escape_string($conn, $_POST['ans_q134']);
$hundredThirtyfive   = $_POST['hundredThirtyfive'];   $correct_hundredThirtyfive   = $_POST['correct_hundredThirtyfive'];    $ans_q135  = mysqli_real_escape_string($conn, $_POST['ans_q135']);
$hundredThirtysix   = $_POST['hundredThirtysix'];   $correct_hundredThirtysix    = $_POST['correct_hundredThirtysix'];     $ans_q136  = mysqli_real_escape_string($conn, $_POST['ans_q136']);
$hundredThirtyseven = $_POST['hundredThirtyseven']; $correct_hundredThirtyseven  = $_POST['correct_hundredThirtyseven'];   $ans_q137  = mysqli_real_escape_string($conn, $_POST['ans_q137']);
$hundredThirtyeight  = $_POST['hundredThirtyeight'];  $correct_hundredThirtyeight  = $_POST['correct_hundredThirtyeight'];   $ans_q138  = mysqli_real_escape_string($conn, $_POST['ans_q138']);
$hundredThirtynine  = $_POST['hundredThirtynine'];  $correct_hundredThirtynine   = $_POST['correct_hundredThirtynine'];    $ans_q139  = mysqli_real_escape_string($conn, $_POST['ans_q139']);
$hundredFourty    = $_POST['hundredFourty'];    $correct_hundredFourty     = $_POST['correct_hundredFourty'];      $ans_q140 = mysqli_real_escape_string($conn, $_POST['ans_q140']);


$remark_hundredtwenty_one    = ""; if($correct_hundredtwenty_one   != $ans_q121)  { $remark_hundredtwenty_one    = 0; } else { $remark_hundredtwenty_one    = 1; }
$remark_hundredtwenty_two    = ""; if($correct_hundredTwentytwo    != $ans_q122)  { $remark_hundredtwenty_two    = 0; } else { $remark_hundredtwenty_two    = 1; }
$remark_hundredtwenty_three  = ""; if($correct_hundred_Twentythree != $ans_q123)  { $remark_hundredtwenty_three  = 0; } else { $remark_hundredtwenty_three  = 1; }
$remark_hundredtwenty_four   = ""; if($correct_hundred_Twentyfour  != $ans_q124)  { $remark_hundredtwenty_four   = 0; } else { $remark_hundredtwenty_four   = 1; }
$remark_hundredtwenty_five   = ""; if($correct_hundred_Twentyfive  != $ans_q125)  { $remark_hundredtwenty_five   = 0; } else { $remark_hundredtwenty_five   = 1; }
$remark_hundredtwenty_six    = ""; if($correct_hundred_Twentysix   != $ans_q126)  { $remark_hundredtwenty_six    = 0; } else { $remark_hundredtwenty_six    = 1; }
$remark_hundredtwenty_seven  = ""; if($correct_hundred_Twentyseven != $ans_q127)  { $remark_hundredtwenty_seven  = 0; } else { $remark_hundredtwenty_seven  = 1; }
$remark_hundredtwenty_eight  = ""; if($correct_hundred_Twentyeight != $ans_q128)  { $remark_hundredtwenty_eight  = 0; } else { $remark_hundredtwenty_eight  = 1; }
$remark_hundredtwenty_nine   = ""; if($correct_hundred_Twentynine  != $ans_q129)  { $remark_hundredtwenty_nine   = 0; } else { $remark_hundredtwenty_nine   = 1; }
$remark_hundred_thirty       = ""; if($correct_hundredThirty       != $ans_q130)  { $remark_hundred_thirty       = 0; } else { $remark_hundred_thirty       = 1; }
$remark_hundred_twenty_one   = ""; if($correct_hundred_Thirtyone   != $ans_q131)  { $remark_hundred_twenty_one   = 0; } else { $remark_hundred_twenty_one   = 1; }
$remark_hundred_twenty_two   = ""; if($correct_hundred_thirtytwo   != $ans_q132)  { $remark_hundred_twenty_two   = 0; } else { $remark_hundred_twenty_two   = 1; }
$remark_hundred_twenty_three = ""; if($correct_hundred_Thirtythree != $ans_q133)  { $remark_hundred_twenty_three = 0; } else { $remark_hundred_twenty_three = 1; }
$remark_hundred_twenty_four  = ""; if($correct_hundredThirtyfour   != $ans_q134)  { $remark_hundred_twenty_four  = 0; } else { $remark_hundred_twenty_four  = 1; }
$remark_hundred_twenty_five  = ""; if($correct_hundredThirtyfive   != $ans_q135)  { $remark_hundred_twenty_five  = 0; } else { $remark_hundred_twenty_five  = 1; }
$remark_hundred_twenty_six   = ""; if($correct_hundredThirtysix    != $ans_q136)  { $remark_hundred_twenty_six   = 0; } else { $remark_hundred_twenty_six   = 1; }
$remark_hundred_twenty_seven = ""; if($correct_hundredThirtyseven  != $ans_q137)  { $remark_hundred_twenty_seven = 0; } else { $remark_hundred_twenty_seven = 1; }
$remark_hundred_twenty_eight = ""; if($correct_hundredThirtyeight  != $ans_q138)  { $remark_hundred_twenty_eight = 0; } else { $remark_hundred_twenty_eight = 1; }
$remark_hundred_twenty_nine  = ""; if($correct_hundredThirtynine   != $ans_q139)  { $remark_hundred_twenty_nine  = 0; } else { $remark_hundred_twenty_nine  = 1; }
$remark_hundred_fourty       = ""; if($correct_hundredFourty       != $ans_q140)  { $remark_hundred_fourty       = 0; } else { $remark_hundred_fourty       = 1; }


$hundredFourone = $_POST['hundredFourone'];   $correct_hundredFourone   = $_POST['correct_hundredFourone'];   $ans_q141  = mysqli_real_escape_string($conn, $_POST['ans_q141']);
$hundredFourtwo = $_POST['hundredFourtwo'];   $correct_hundredFourtwo   = $_POST['correct_hundredFourtwo'];   $ans_q142  = mysqli_real_escape_string($conn, $_POST['ans_q142']);
$hundred_Fourthree = $_POST['hundred_Fourthree']; $correct_hundred_Fourthree = $_POST['correct_hundred_Fourthree']; $ans_q143  = mysqli_real_escape_string($conn, $_POST['ans_q143']);
$hundred_Fourfour  = $_POST['hundred_Fourfour'];  $correct_hundred_Fourfour  = $_POST['correct_hundred_Fourfour'];  $ans_q144  = mysqli_real_escape_string($conn, $_POST['ans_q144']);
$hundred_Fourfive  = $_POST['hundred_Fourfive'];  $correct_hundred_Fourfive  = $_POST['correct_hundred_Fourfive'];  $ans_q145  = mysqli_real_escape_string($conn, $_POST['ans_q145']);
$hundred_Foursix   = $_POST['hundred_Foursix'];   $correct_hundred_Foursix   = $_POST['correct_hundred_Foursix'];   $ans_q146  = mysqli_real_escape_string($conn, $_POST['ans_q146']);
$hundred_Fourseven = $_POST['hundred_Fourseven']; $correct_hundred_Fourseven = $_POST['correct_hundred_Fourseven']; $ans_q147  = mysqli_real_escape_string($conn, $_POST['ans_q147']);
$hundred_Foureight = $_POST['hundred_Foureight']; $correct_hundred_Foureight = $_POST['correct_hundred_Foureight']; $ans_q148  = mysqli_real_escape_string($conn, $_POST['ans_q148']);
$hundred_Fournine  = $_POST['hundred_Fournine'];  $correct_hundred_Fournine  = $_POST['correct_hundred_Fournine'];  $ans_q149  = mysqli_real_escape_string($conn, $_POST['ans_q149']);
$hundredFivezero       = $_POST['hundredFivezero'];       $correct_hundredFivezero      = $_POST['correct_hundredFivezero'];       $ans_q150  = mysqli_real_escape_string($conn, $_POST['ans_q150']);
$hundred_Fiveone   = $_POST['hundred_Fiveone'];   $correct_hundred_Fiveone    = $_POST['correct_hundred_Fiveone'];     $ans_q151  = mysqli_real_escape_string($conn, $_POST['ans_q151']);
$hundred_FiveTwo   = $_POST['hundred_FiveTwo'];   $correct_hundred_FiveTwo    = $_POST['correct_hundred_FiveTwo'];     $ans_q152  = mysqli_real_escape_string($conn, $_POST['ans_q152']);
$hundred_Fivethree = $_POST['hundred_Fivethree']; $correct_hundred_Fivethree  = $_POST['correct_hundred_Fivethree'];   $ans_q153  = mysqli_real_escape_string($conn, $_POST['ans_q153']);
$hundredTFivefour  = $_POST['hundredTFivefour'];  $correct_hundredTFivefour   = $_POST['correct_hundredTFivefour'];    $ans_q154  = mysqli_real_escape_string($conn, $_POST['ans_q154']);
$hundredFivefive   = $_POST['hundredFivefive'];   $correct_hundredFivefive   = $_POST['correct_hundredFivefive'];    $ans_q155  = mysqli_real_escape_string($conn, $_POST['ans_q155']);
$hundredTFivesix   = $_POST['hundredTFivesix'];   $correct_hundredTFivesix    = $_POST['correct_hundredTFivesix'];     $ans_q156  = mysqli_real_escape_string($conn, $_POST['ans_q156']);
$hundredTFiveseven = $_POST['hundredTFiveseven']; $correct_hundredTFiveseven  = $_POST['correct_hundredTFiveseven'];   $ans_q157  = mysqli_real_escape_string($conn, $_POST['ans_q157']);
$hundredTFiveeight  = $_POST['hundredTFiveeight'];  $correct_hundredTFiveeight  = $_POST['correct_hundredTFiveeight'];   $ans_q158  = mysqli_real_escape_string($conn, $_POST['ans_q158']);
$hundredFivenine  = $_POST['hundredFivenine'];  $correct_hundredFivenine   = $_POST['correct_hundredFivenine'];    $ans_q159  = mysqli_real_escape_string($conn, $_POST['ans_q159']);
$hundredSixzero    = $_POST['hundredSixzero'];    $correct_hundredSixzero     = $_POST['correct_hundredSixzero'];      $ans_q160 = mysqli_real_escape_string($conn, $_POST['ans_q160']);


$remark_hundredfour_one     = ""; if($correct_hundredFourone    != $ans_q141)  { $remark_hundredfour_one     = 0; } else { $remark_hundredfour_one     = 1; }
$remark_hundredfour_two     = ""; if($correct_hundredFourtwo    != $ans_q142)  { $remark_hundredfour_two     = 0; } else { $remark_hundredfour_two     = 1; }
$remark_hundredfour_three   = ""; if($correct_hundred_Fourthree != $ans_q143)  { $remark_hundredfour_three   = 0; } else { $remark_hundredfour_three   = 1; }
$remark_hundredfour_four    = ""; if($correct_hundred_Fourfour  != $ans_q144)  { $remark_hundredfour_four    = 0; } else { $remark_hundredfour_four    = 1; }
$remark_hundredfour_five    = ""; if($correct_hundred_Fourfive  != $ans_q145)  { $remark_hundredfour_five    = 0; } else { $remark_hundredfour_five    = 1; }
$remark_hundredfour_six     = ""; if($correct_hundred_Foursix   != $ans_q146)  { $remark_hundredfour_six     = 0; } else { $remark_hundredfour_six     = 1; }
$remark_hundredfour_seven   = ""; if($correct_hundred_Fourseven != $ans_q147)  { $remark_hundredfour_seven   = 0; } else { $remark_hundredfour_seven   = 1; }
$remark_hundredfour_eight   = ""; if($correct_hundred_Foureight != $ans_q148)  { $remark_hundredfour_eight   = 0; } else { $remark_hundredfour_eight   = 1; }
$remark_hundredfour_nine    = ""; if($correct_hundred_Fournine  != $ans_q149)  { $remark_hundredfour_nine    = 0; } else { $remark_hundredfour_nine    = 1; }
$remark_hundred_fifty       = ""; if($correct_hundredFivezero   != $ans_q150)  { $remark_hundred_fifty       = 0; } else { $remark_hundred_fifty       = 1; }
$remark_hundred_fifty_one   = ""; if($correct_hundred_Fiveone   != $ans_q151)  { $remark_hundred_fifty_one   = 0; } else { $remark_hundred_fifty_one   = 1; }
$remark_hundred_fifty_two   = ""; if($correct_hundred_FiveTwo   != $ans_q152)  { $remark_hundred_fifty_two   = 0; } else { $remark_hundred_fifty_two   = 1; }
$remark_hundred_fifty_three = ""; if($correct_hundred_Fivethree != $ans_q153)  { $remark_hundred_fifty_three = 0; } else { $remark_hundred_fifty_three = 1; }
$remark_hundred_fifty_four  = ""; if($correct_hundredTFivefour  != $ans_q154)  { $remark_hundred_fifty_four  = 0; } else { $remark_hundred_fifty_four  = 1; }
$remark_hundred_fifty_five  = ""; if($correct_hundredFivefive   != $ans_q155)  { $remark_hundred_fifty_five  = 0; } else { $remark_hundred_fifty_five  = 1; }
$remark_hundred_fifty_six   = ""; if($correct_hundredTFivesix   != $ans_q156)  { $remark_hundred_fifty_six   = 0; } else { $remark_hundred_fifty_six   = 1; }
$remark_hundred_fifty_seven = ""; if($correct_hundredTFiveseven != $ans_q157)  { $remark_hundred_fifty_seven = 0; } else { $remark_hundred_fifty_seven = 1; }
$remark_hundred_fifty_eight = ""; if($correct_hundredTFiveeight != $ans_q158)  { $remark_hundred_fifty_eight = 0; } else { $remark_hundred_fifty_eight = 1; }
$remark_hundred_fifty_nine  = ""; if($correct_hundredFivenine   != $ans_q159)  { $remark_hundred_fifty_nine  = 0; } else { $remark_hundred_fifty_nine  = 1; }
$remark_hundred_sixty       = ""; if($correct_hundredSixzero    != $ans_q160)  { $remark_hundred_sixty       = 0; } else { $remark_hundred_sixty       = 1; }



$hundredSixone = $_POST['hundredSixone'];   $correct_hundredSixone   = $_POST['correct_hundredSixone'];   $ans_q161  = mysqli_real_escape_string($conn, $_POST['ans_q161']);
$hundredSixtwo = $_POST['hundredSixtwo'];   $correct_hundredSixtwo   = $_POST['correct_hundredSixtwo'];   $ans_q162  = mysqli_real_escape_string($conn, $_POST['ans_q162']);
$hundred_Sixthree = $_POST['hundred_Sixthree']; $correct_hundred_Sixthree = $_POST['correct_hundred_Sixthree']; $ans_q163  = mysqli_real_escape_string($conn, $_POST['ans_q163']);
$hundred_Sixfour  = $_POST['hundred_Sixfour'];  $correct_hundred_Sixfour  = $_POST['correct_hundred_Sixfour'];  $ans_q164  = mysqli_real_escape_string($conn, $_POST['ans_q164']);
$hundred_Sixfive  = $_POST['hundred_Sixfive'];  $correct_hundred_Sixfive  = $_POST['correct_hundred_Sixfive'];  $ans_q165  = mysqli_real_escape_string($conn, $_POST['ans_q165']);
$hundred_Sixsix   = $_POST['hundred_Sixsix'];   $correct_hundred_Sixsix   = $_POST['correct_hundred_Sixsix'];   $ans_q166  = mysqli_real_escape_string($conn, $_POST['ans_q166']);
$hundred_Sixseven = $_POST['hundred_Sixseven']; $correct_hundred_Sixseven = $_POST['correct_hundred_Sixseven']; $ans_q167  = mysqli_real_escape_string($conn, $_POST['ans_q167']);
$hundred_Sixeight = $_POST['hundred_Sixeight']; $correct_hundred_Sixeight = $_POST['correct_hundred_Sixeight']; $ans_q168  = mysqli_real_escape_string($conn, $_POST['ans_q168']);
$hundred_Sixnine  = $_POST['hundred_Sixnine'];  $correct_hundred_Sixnine  = $_POST['correct_hundred_Sixnine'];  $ans_q169  = mysqli_real_escape_string($conn, $_POST['ans_q169']);
$hundredSevenzero       = $_POST['hundredSevenzero'];       $correct_hundredSevenzero      = $_POST['correct_hundredSevenzero'];       $ans_q170  = mysqli_real_escape_string($conn, $_POST['ans_q170']);
$hundred_Sevenone   = $_POST['hundred_Sevenone'];   $correct_hundred_Sevenone    = $_POST['correct_hundred_Sevenone'];     $ans_q171  = mysqli_real_escape_string($conn, $_POST['ans_q171']);
$hundred_SevenTwo   = $_POST['hundred_SevenTwo'];   $correct_hundred_SevenTwo    = $_POST['correct_hundred_SevenTwo'];     $ans_q172  = mysqli_real_escape_string($conn, $_POST['ans_q172']);
$hundred_Seventhree = $_POST['hundred_Seventhree']; $correct_hundred_Seventhree  = $_POST['correct_hundred_Seventhree'];   $ans_q173  = mysqli_real_escape_string($conn, $_POST['ans_q173']);
$hundredTSevenfour  = $_POST['hundredTSevenfour'];  $correct_hundredTSevenfour   = $_POST['correct_hundredTSevenfour'];    $ans_q174  = mysqli_real_escape_string($conn, $_POST['ans_q174']);
$hundredSevenfive   = $_POST['hundredSevenfive'];   $correct_hundredSevenfive   = $_POST['correct_hundredSevenfive'];    $ans_q175  = mysqli_real_escape_string($conn, $_POST['ans_q175']);
$hundredSevensix   = $_POST['hundredSevensix'];   $correct_hundredSevensix    = $_POST['correct_hundredSevensix'];     $ans_q176  = mysqli_real_escape_string($conn, $_POST['ans_q176']);
$hundredSevenseven = $_POST['hundredSevenseven']; $correct_hundredSevenseven  = $_POST['correct_hundredSevenseven'];   $ans_q177  = mysqli_real_escape_string($conn, $_POST['ans_q177']);
$hundredSeveneight  = $_POST['hundredSeveneight'];  $correct_hundredSeveneight  = $_POST['correct_hundredSeveneight'];   $ans_q178  = mysqli_real_escape_string($conn, $_POST['ans_q178']);
$hundredSevennine  = $_POST['hundredSevennine'];  $correct_hundredSevennine   = $_POST['correct_hundredSevennine'];    $ans_q179  = mysqli_real_escape_string($conn, $_POST['ans_q179']);
$hundredEightzero    = $_POST['hundredEightzero'];    $correct_hundredEightzero     = $_POST['correct_hundredEightzero'];      $ans_q180 = mysqli_real_escape_string($conn, $_POST['ans_q180']);


$remark_hundredsix_one        = ""; if($correct_hundredSixone      != $ans_q161)  { $remark_hundredsix_one        = 0; } else { $remark_hundredsix_one        = 1; }
$remark_hundredsix_two        = ""; if($correct_hundredSixtwo      != $ans_q162)  { $remark_hundredsix_two        = 0; } else { $remark_hundredsix_two        = 1; }
$remark_hundredsix_three      = ""; if($correct_hundred_Sixthree   != $ans_q163)  { $remark_hundredsix_three      = 0; } else { $remark_hundredsix_three      = 1; }
$remark_hundredsix_four       = ""; if($correct_hundred_Sixfour    != $ans_q164)  { $remark_hundredsix_four       = 0; } else { $remark_hundredsix_four       = 1; }
$remark_hundredsix_five       = ""; if($correct_hundred_Sixfive    != $ans_q165)  { $remark_hundredsix_five       = 0; } else { $remark_hundredsix_five       = 1; }
$remark_hundredsix_six        = ""; if($correct_hundred_Sixsix     != $ans_q166)  { $remark_hundredsix_six        = 0; } else { $remark_hundredsix_six        = 1; }
$remark_hundredsix_seven      = ""; if($correct_hundred_Sixseven   != $ans_q167)  { $remark_hundredsix_seven      = 0; } else { $remark_hundredsix_seven      = 1; }
$remark_hundredsix_eight      = ""; if($correct_hundred_Sixeight   != $ans_q168)  { $remark_hundredsix_eight      = 0; } else { $remark_hundredsix_eight      = 1; }
$remark_hundredsix_nine       = ""; if($correct_hundred_Sixnine    != $ans_q169)  { $remark_hundredsix_nine      = 0; } else { $remark_hundredsix_nine       = 1; }
$remark_hundred_seventy       = ""; if($correct_hundredSevenzero   != $ans_q170)  { $remark_hundred_seventy       = 0; } else { $remark_hundred_seventy       = 1; }
$remark_hundred_seventy_one   = ""; if($correct_hundred_Sevenone   != $ans_q171)  { $remark_hundred_seventy_one   = 0; } else { $remark_hundred_seventy_one   = 1; }
$remark_hundred_seventy_two   = ""; if($correct_hundred_SevenTwo   != $ans_q172)  { $remark_hundred_seventy_two   = 0; } else { $remark_hundred_seventy_two   = 1; }
$remark_hundred_seventy_three = ""; if($correct_hundred_Seventhree != $ans_q173)  { $remark_hundred_seventy_three = 0; } else { $remark_hundred_seventy_three = 1; }
$remark_hundred_seventy_four  = ""; if($correct_hundredTSevenfour  != $ans_q174)  { $remark_hundred_seventy_four  = 0; } else { $remark_hundred_seventy_four  = 1; }
$remark_hundred_seventy_five  = ""; if($correct_hundredSevenfive   != $ans_q175)  { $remark_hundred_seventy_five  = 0; } else { $remark_hundred_seventy_five  = 1; }
$remark_hundred_seventy_six   = ""; if($correct_hundredSevensix    != $ans_q176)  { $remark_hundred_seventy_six   = 0; } else { $remark_hundred_seventy_six   = 1; }
$remark_hundred_seventy_seven = ""; if($correct_hundredSevenseven  != $ans_q177)  { $remark_hundred_seventy_seven = 0; } else { $remark_hundred_seventy_seven = 1; }
$remark_hundred_seventy_eight = ""; if($correct_hundredSeveneight  != $ans_q178)  { $remark_hundred_seventy_eight = 0; } else { $remark_hundred_seventy_eight = 1; }
$remark_hundred_seventy_nine  = ""; if($correct_hundredSevennine   != $ans_q179)  { $remark_hundred_seventy_nine  = 0; } else { $remark_hundred_seventy_nine  = 1; }
$remark_hundred_eighty        = ""; if($correct_hundredEightzero   != $ans_q180)  { $remark_hundred_eighty        = 0; } else { $remark_hundred_eighty        = 1; }





		$exists = mysqli_query($conn, "SELECT * FROM exam WHERE user_Id='$user_Id' AND date_of_exam='$date_registered'");
		if(mysqli_num_rows($exists) > 0 ) {
			  $_SESSION['message'] = "You have already taken the exam today.";
		      $_SESSION['text'] = "Error";
		      $_SESSION['status'] = "error";
			  header("Location: exam_result.php");
		} else {

		// ALL SCORE IN ENGLISH
		$english = $remark_one + $remark_two + $remark_three + $remark_four + $remark_five + $remark_six + $remark_seven + $remark_eight + $remark_nine + $remark_ten       + $remark_eleven    + $remark_twelve    + $remark_thirteen  + $remark_fourteen  + $remark_fifteen   + $remark_sixteen   + $remark_seventeen + $remark_eighteen  + $remark_nineteen  + $remark_twenty + $remark_twenty_one   + $remark_twenty_two   + $remark_twenty_three + $remark_twenty_four  + $remark_twenty_five  + $remark_twenty_six   + $remark_twenty_seven + $remark_twenty_eight + $remark_twenty_nine  + $remark_thirty       + $remark_three_one    + $remark_three_two    + $remark_three_three  + $remark_three_four   + $remark_three_five   + $remark_three_six    + $remark_three_seven  + $remark_three_eight  + $remark_three_nine   + $remark_fourty + $remark_four_one  + $remark_four_two  + $remark_four_three+ $remark_four_four + $remark_four_five + $remark_four_six  + $remark_four_seven+ $remark_four_eight+ $remark_four_nine + $remark_fifty     + $remark_five_one  + $remark_five_two  + $remark_five_three+ $remark_five_four + $remark_five_five + $remark_five_six  + $remark_five_seven+ $remark_five_eight+ $remark_five_nine + $remark_sixty; 


		// ALL SCORE IN SCIENCE
		$science = $remark_six_one     + $remark_six_two     + $remark_six_three   + $remark_six_four    + $remark_six_five    + $remark_six_six     + $remark_six_seven   + $remark_six_eight   + $remark_six_nine    + $remark_seventy     + $remark_seven_one   + $remark_seven_two   + $remark_seven_three + $remark_seven_four  + $remark_seven_five  + $remark_seven_six   + $remark_seven_seven + $remark_seven_eight + $remark_seven_nine  + $remark_eighty + $remark_eight_one    + $remark_eight_two    + $remark_eight_three  + $remark_eight_four   + $remark_eight_five   + $remark_eight_six    + $remark_eight_seven  + $remark_eight_eight  + $remark_eight_nine   + $remark_ninety       + $remark_nine_one     + $remark_nine_two     + $remark_nine_three   + $remark_nine_four    + $remark_nine_five    + $remark_nine_six     + $remark_nine_seven   + $remark_nine_eight   + $remark_nine_nine    + $remark_hundred + $remark_hundred_one + $remark_hundred_two + $remark_hundred_three + $remark_hundred_four + $remark_hundred_five + $remark_hundred_six + $remark_hundred_seven + $remark_hundred_eight + $remark_hundred_nine + $remark_hundred_ten + $remark_hundred_eleven   + $remark_hundred_twelve + $remark_hundred_thirteen + $remark_hundred_fourteen + $remark_hundred_fifteen + $remark_hundred_sixteen  + $remark_hundred_seventeen + $remark_hundred_eightteen + $remark_hundred_nineteen + $remark_hundred_twenty;

		// ALL SCORE IN MATH
		$math = $remark_hundredtwenty_one + $remark_hundredtwenty_two + $remark_hundredtwenty_three + $remark_hundredtwenty_four + $remark_hundredtwenty_five + $remark_hundredtwenty_six + $remark_hundredtwenty_seven + $remark_hundredtwenty_eight + $remark_hundredtwenty_nine  + $remark_hundred_thirty + $remark_hundred_twenty_one + $remark_hundred_twenty_two + $remark_hundred_twenty_three + $remark_hundred_twenty_four + $remark_hundred_twenty_five + $remark_hundred_twenty_six + $remark_hundred_twenty_seven + $remark_hundred_twenty_eight + $remark_hundred_twenty_nine + $remark_hundred_fourty + $remark_hundredfour_one + $remark_hundredfour_two + $remark_hundredfour_three + $remark_hundredfour_four + $remark_hundredfour_five + $remark_hundredfour_six + $remark_hundredfour_seven  + $remark_hundredfour_eight + $remark_hundredfour_nine + $remark_hundred_fifty + $remark_hundred_fifty_one + $remark_hundred_fifty_two  + $remark_hundred_fifty_three + $remark_hundred_fifty_four + $remark_hundred_fifty_five + $remark_hundred_fifty_six + $remark_hundred_fifty_seven + $remark_hundred_fifty_eight + $remark_hundred_fifty_nine + $remark_hundred_sixty + $remark_hundredsix_one + $remark_hundredsix_two + $remark_hundredsix_three + $remark_hundredsix_four + $remark_hundredsix_five + $remark_hundredsix_six + $remark_hundredsix_seven + $remark_hundredsix_eight + $remark_hundredsix_nine + $remark_hundred_seventy + $remark_hundred_seventy_one + $remark_hundred_seventy_two + $remark_hundred_seventy_three+ $remark_hundred_seventy_four + $remark_hundred_seventy_five + $remark_hundred_seventy_six + $remark_hundred_seventy_seven + $remark_hundred_seventy_eight+ $remark_hundred_seventy_nine + $remark_hundred_eighty;                

	 // TOTAL
	 $total = $english + $science + $math ;
	 // $total = $remark_one + $remark_two + $remark_three + $remark_four + $remark_five + $remark_six + $remark_seven + $remark_eight + $remark_nine + $remark_ten + $remark_eleven + $remark_twelve + $remark_thirteen + $remark_fourteen + $remark_fifteen   + $remark_sixteen   + $remark_seventeen + $remark_eighteen  + $remark_nineteen + $remark_twenty + $remark_twenty_one + $remark_twenty_two + $remark_twenty_three + $remark_twenty_four  + $remark_twenty_five  + $remark_twenty_six + $remark_twenty_seven + $remark_twenty_eight + $remark_twenty_nine  + $remark_thirty       + $remark_three_one    + $remark_three_two    + $remark_three_three + $remark_three_four + $remark_three_five + $remark_three_six + $remark_three_seven  + $remark_three_eight  + $remark_three_nine   + $remark_fourty + $remark_four_one + $remark_four_two + $remark_four_three + $remark_four_four  + $remark_four_five  + $remark_four_six   + $remark_four_seven + $remark_four_eight + $remark_four_nine + $remark_fifty  + $remark_five_one + $remark_five_two   + $remark_five_three + $remark_five_four  + $remark_five_five + $remark_five_six + $remark_five_seven + $remark_five_eight + $remark_five_nine + $remark_sixty + $remark_six_one     + $remark_six_two + $remark_six_three + $remark_six_four + $remark_six_five    + $remark_six_six + $remark_six_seven + $remark_six_eight + $remark_six_nine    + $remark_seventy + $remark_seven_one + $remark_seven_two   + $remark_seven_three + $remark_seven_four + $remark_seven_five + $remark_seven_six   + $remark_seven_seven + $remark_seven_eight + $remark_seven_nine  + $remark_eighty      + $remark_eight_one + $remark_eight_two + $remark_eight_three  + $remark_eight_four + $remark_eight_five + $remark_eight_six    + $remark_eight_seven  + $remark_eight_eight + $remark_eight_nine + $remark_ninety       + $remark_nine_one + $remark_nine_two + $remark_nine_three   + $remark_nine_four    + $remark_nine_five  + $remark_nine_six + $remark_nine_seven   + $remark_nine_eight + $remark_nine_nine + $remark_hundred;

			$save = mysqli_query($conn, "INSERT INTO exam (user_Id, q1, q1_remarks, q2, q2_remarks,  q3, q3_remarks,  q4, q4_remarks, q5, q5_remarks, q6, q6_remarks,  q7, q7_remarks,  q8, q8_remarks,  q9, q9_remarks, q10, q10_remarks, q11, q11_remarks,  q12, q12_remarks,  q13, q13_remarks,  q14, q14_remarks, q15, q15_remarks, q16, q16_remarks,  q17, q17_remarks,  q18, q18_remarks,  q19, q19_remarks, q20, q20_remarks, q21, q21_remarks,  q22, q22_remarks,  q23, q23_remarks,  q24, q24_remarks, q25, q25_remarks, q26, q26_remarks,  q27, q27_remarks,  q28, q28_remarks, q29, q29_remarks, q30, q30_remarks,  q31, q31_remarks,  q32, q32_remarks,  q33, q33_remarks, q34, q34_remarks, q35, q35_remarks,  q36, q36_remarks,  q37, q37_remarks,  q38, q38_remarks, q39, q39_remarks, q40, q40_remarks,  q41, q41_remarks,  q42, q42_remarks,  q43, q43_remarks, q44, q44_remarks, q45, q45_remarks,  q46, q46_remarks,  q47, q47_remarks,  q48, q48_remarks, q49, q49_remarks, q50, q50_remarks,  q51, q51_remarks,  q52, q52_remarks,  q53, q53_remarks, q54, q54_remarks, q55, q55_remarks,  q56, q56_remarks,  q57, q57_remarks,  q58, q58_remarks, q59, q59_remarks, q60, q60_remarks,  q61, q61_remarks,  q62, q62_remarks,  q63, q63_remarks, q64, q64_remarks, q65, q65_remarks,  q66, q66_remarks,  q67, q67_remarks,  q68, q68_remarks, q69, q69_remarks, q70, q70_remarks,  q71, q71_remarks,  q72, q72_remarks,  q73, q73_remarks, q74, q74_remarks, q75, q75_remarks,  q76, q76_remarks,  q77, q77_remarks,  q78, q78_remarks, q79, q79_remarks, q80, q80_remarks,  q81, q81_remarks,  q82, q82_remarks,  q83, q83_remarks, q84, q84_remarks, q85, q85_remarks,  q86, q86_remarks,  q87, q87_remarks,  q88, q88_remarks, q89, q89_remarks, q90, q90_remarks,  q91, q91_remarks,  q92, q92_remarks,  q93, q93_remarks, q94, q94_remarks, q95, q95_remarks,  q96, q96_remarks,  q97, q97_remarks,  q98, q98_remarks, q99, q99_remarks, q100, q100_remarks, q101, q101_remarks, q102, q102_remarks, q103, q103_remarks, q104, q104_remarks, q105, q105_remarks, q106, q106_remarks, q107, q107_remarks, q108, q108_remarks, q109, q109_remarks, q110, q110_remarks, q111, q111_remarks, q112, q112_remarks, q113, q113_remarks, q114, q114_remarks, q115, q115_remarks, q116, q116_remarks, q117, q117_remarks, q118, q118_remarks, q119, q119_remarks, q120, q120_remarks, q121, q121_remarks, q122, q122_remarks, q123, q123_remarks, q124, q124_remarks, q125, q125_remarks, q126, q126_remarks, q127, q127_remarks, q128, q128_remarks, q129, q129_remarks, q130, q130_remarks, q131, q131_remarks, q132, q132_remarks, q133, q133_remarks, q134, q134_remarks, q135, q135_remarks, q136, q136_remarks, q137, q137_remarks, q138, q138_remarks, q139, q139_remarks, q140, q140_remarks, q141, q141_remarks, q142, q142_remarks, q143, q143_remarks, q144, q144_remarks, q145, q145_remarks, q146, q146_remarks, q147, q147_remarks, q148, q148_remarks, q149, q149_remarks, q150, q150_remarks, q151, q151_remarks, q152, q152_remarks, q153, q153_remarks, q154, q154_remarks, q155, q155_remarks, q156, q156_remarks, q157, q157_remarks, q158, q158_remarks, q159, q159_remarks, q160, q160_remarks, q161, q161_remarks, q162, q162_remarks, q163, q163_remarks, q164, q164_remarks, q165, q165_remarks, q166, q166_remarks, q167, q167_remarks, q168, q168_remarks, q169, q169_remarks, q170, q170_remarks, q171, q171_remarks, q172, q172_remarks, q173, q173_remarks, q174, q174_remarks, q175, q175_remarks, q176, q176_remarks, q177, q177_remarks, q178, q178_remarks, q179, q179_remarks, q180, q180_remarks, total, english, math, science, date_of_exam) 
			
			VALUES (
			'$user_Id',
			'$one', '$remark_one', 
			'$two', '$remark_two', 
			'$three', '$remark_three', 
			'$four',	'$remark_four', 
			'$five', '$remark_five', 
			'$six', '$remark_six', 
			'$seven', '$remark_seven', 
			'$eight', '$remark_eight', 
			'$nine', '$remark_nine', 
			'$ten', '$remark_ten', 
			'$eleven', '$remark_eleven', 
			'$twelve', '$remark_twelve', 
			'$thirteen', '$remark_thirteen', 
			'$fourteen',	'$remark_fourteen', 
			'$fifteen',	'$remark_fifteen', 
			'$sixteen', '$remark_sixteen', 
			'$seventeen', '$remark_seventeen', 
			'$eighteen',	'$remark_eighteen', 
			'$nineteen', '$remark_nineteen', 
			'$twenty',	'$remark_twenty', 
			'$twenty_one', '$remark_twenty_one', 
			'$twenty_two', '$remark_twenty_two', 
			'$twenty_three', '$remark_twenty_three', 
			'$twenty_four', '$remark_twenty_four', 
			'$twenty_five', '$remark_twenty_five', 
			'$twenty_six', '$remark_twenty_six', 
			'$twenty_seven', '$remark_twenty_seven', 
			'$twenty_eight', '$remark_twenty_eight', 
			'$twenty_nine', '$remark_twenty_nine', 
			'$thirty', '$remark_thirty', 
			'$three_one', '$remark_three_one', 
			'$three_two', '$remark_three_two', 
			'$three_three', '$remark_three_three', 
			'$three_four', '$remark_three_four', 
			'$three_five', '$remark_three_five', 
			'$three_six', '$remark_three_six', 
			'$three_seven', '$remark_three_seven', 
			'$three_eight', '$remark_three_eight', 
			'$three_nine', '$remark_three_nine', 
			'$fourty', '$remark_fourty', 
			'$four_one', '$remark_four_one', 
			'$four_two', '$remark_four_two', 
			'$four_three', '$remark_four_three', 
			'$four_four',	'$remark_four_four', 
			'$four_five', '$remark_four_five', 
			'$four_six', '$remark_four_six', 
			'$four_seven', '$remark_four_seven', 
			'$four_eight', '$remark_four_eight', 
			'$four_nine', '$remark_four_nine', 
			'$fifty',	'$remark_fifty', 
			'$five_one', '$remark_five_one', 
			'$five_two', '$remark_five_two', 
			'$five_three', '$remark_five_three', 
			'$five_four',	'$remark_five_four', 
			'$five_five', '$remark_five_five', 
			'$five_six', '$remark_five_six', 
			'$five_seven', '$remark_five_seven', 
			'$five_eight', '$remark_five_eight', 
			'$five_nine', '$remark_five_nine', 
			'$sixty',	'$remark_sixty', 
			'$six_one', '$remark_six_one',  
			'$six_two', '$remark_six_two', 
			'$six_three', '$remark_six_three', 
			'$six_four',  '$remark_six_four', 
			'$six_five', '$remark_six_five', 
			'$six_six', '$remark_six_six', 
			'$six_seven', '$remark_six_seven', 
			'$six_eight', '$remark_six_eight', 
			'$six_nine', '$remark_six_nine', 
			'$seventy', '$remark_seventy', 
			'$seven_one', '$remark_seven_one', 
			'$seven_two', '$remark_seven_two', 
			'$seven_three', '$remark_seven_three', 
			'$seven_four', '$remark_seven_four', 
			'$seven_five', '$remark_seven_five', 
			'$seven_six', '$remark_seven_six', 
			'$seven_seven', '$remark_seven_seven', 
			'$seven_eight', '$remark_seven_eight', 
			'$seven_nine', '$remark_seven_nine', 
			'$eighty', '$remark_eighty', 
			'$eight_one', '$remark_eight_one', 
			'$eight_two', '$remark_eight_two', 
			'$eight_three', '$remark_eight_three', 
			'$eight_four', '$remark_eight_four', 
			'$eight_five', '$remark_eight_five', 
			'$eight_six', '$remark_eight_six', 
			'$eight_seven', '$remark_eight_seven', 
			'$eight_eight', '$remark_eight_eight', 
			'$eight_nine', '$remark_eight_nine', 
			'$ninety', '$remark_ninety', 
			'$nine_one', '$remark_nine_one', 
			'$nine_two', '$remark_nine_two', 
			'$nine_three', '$remark_nine_three', 
			'$nine_four', '$remark_nine_four', 
			'$nine_five', '$remark_nine_five', 
			'$nine_six', '$remark_nine_six', 
			'$nine_seven', '$remark_nine_seven', 
			'$nine_eight', '$remark_nine_eight', 
			'$nine_nine', '$remark_nine_nine', 
			'$hundred', '$remark_hundred',
			'$hundred_one', '$remark_hundred_one',       
			'$hundred_two', '$remark_hundred_two',       
			'$hundred_three', '$remark_hundred_three',     
			'$hundred_four', '$remark_hundred_four',      
			'$hundred_five', '$remark_hundred_five',      
			'$hundred_six', '$remark_hundred_six',       
			'$hundred_seven', '$remark_hundred_seven',     
			'$hundred_eight', '$remark_hundred_eight',     
			'$hundred_nine', '$remark_hundred_nine',      
			'$hundredten', '$remark_hundred_ten',       
			'$hundred_eleven', '$remark_hundred_eleven',    
			'$hundred_twelve', '$remark_hundred_twelve',    
			'$hundred_thirteen', '$remark_hundred_thirteen',  
			'$hundredfourteen', '$remark_hundred_fourteen',  
			'$hundredfifteen', '$remark_hundred_fifteen',   
			'$hundredsixteen', '$remark_hundred_sixteen',   
			'$hundredseventeen', '$remark_hundred_seventeen', 
			'$hundredeighteen', '$remark_hundred_eightteen', 
			'$hundrednineteen', '$remark_hundred_nineteen',  
			'$hundredtwenty', '$remark_hundred_twenty',    
			'$hundredtwenty_one', '$remark_hundredtwenty_one',   
			'$hundredTwentytwo', '$remark_hundredtwenty_two',   
			'$hundred_Twentythree', '$remark_hundredtwenty_three', 
			'$hundred_Twentyfour', '$remark_hundredtwenty_four',  
			'$hundred_Twentyfive', '$remark_hundredtwenty_five',  
			'$hundred_Twentysix', '$remark_hundredtwenty_six',   
			'$hundred_Twentyseven', '$remark_hundredtwenty_seven', 
			'$hundred_Twentyeight', '$remark_hundredtwenty_eight', 
			'$hundred_Twentynine', '$remark_hundredtwenty_nine',  
			'$hundredThirty', '$remark_hundred_thirty',      
			'$hundred_Thirtyone', '$remark_hundred_twenty_one',  
			'$hundred_thirtytwo', '$remark_hundred_twenty_two',  
			'$hundred_Thirtythree', '$remark_hundred_twenty_three',
			'$hundredThirtyfour', '$remark_hundred_twenty_four', 
			'$hundredThirtyfive', '$remark_hundred_twenty_five', 
			'$hundredThirtysix', '$remark_hundred_twenty_six', 
			'$hundredThirtyseven', '$remark_hundred_twenty_seven',
			'$hundredThirtyeight', '$remark_hundred_twenty_eight',
			'$hundredThirtynine', '$remark_hundred_twenty_nine', 
			'$hundredFourty', '$remark_hundred_fourty',      
			'$hundredFourone', '$remark_hundredfour_one',    
			'$hundredFourtwo', '$remark_hundredfour_two',    
			'$hundred_Fourthree', '$remark_hundredfour_three',  
			'$hundred_Fourfour', '$remark_hundredfour_four',   
			'$hundred_Fourfive', '$remark_hundredfour_five',   
			'$hundred_Foursix', '$remark_hundredfour_six',    
			'$hundred_Fourseven', '$remark_hundredfour_seven',  
			'$hundred_Foureight', '$remark_hundredfour_eight',  
			'$hundred_Fournine', '$remark_hundredfour_nine',   
			'$hundredFivezero', '$remark_hundred_fifty',      
			'$hundred_Fiveone', '$remark_hundred_fifty_one',  
			'$hundred_FiveTwo', '$remark_hundred_fifty_two',  
			'$hundred_Fivethree', '$remark_hundred_fifty_three',
			'$hundredTFivefour', '$remark_hundred_fifty_four', 
			'$hundredFivefive', '$remark_hundred_fifty_five', 
			'$hundredTFivesix', '$remark_hundred_fifty_six',  
			'$hundredTFiveseven', '$remark_hundred_fifty_seven',
			'$hundredTFiveeight', '$remark_hundred_fifty_eight',
			'$hundredFivenine', '$remark_hundred_fifty_nine', 
			'$hundredSixzero', '$remark_hundred_sixty',      
			'$hundredSixone', '$remark_hundredsix_one',       
			'$hundredSixtwo', '$remark_hundredsix_two',       
			'$hundred_Sixthree', '$remark_hundredsix_three',     
			'$hundred_Sixfour', '$remark_hundredsix_four',      
			'$hundred_Sixfive', '$remark_hundredsix_five',      
			'$hundred_Sixsix', '$remark_hundredsix_six',       
			'$hundred_Sixseven', '$remark_hundredsix_seven',     
			'$hundred_Sixeight', '$remark_hundredsix_eight',     
			'$hundred_Sixnine', '$remark_hundredsix_nine',      
			'$hundredSevenzero', '$remark_hundred_seventy',      
			'$hundred_Sevenone', '$remark_hundred_seventy_one',  
			'$hundred_SevenTwo', '$remark_hundred_seventy_two',  
			'$hundred_Seventhree', '$remark_hundred_seventy_three',
			'$hundredTSevenfour', '$remark_hundred_seventy_four', 
			'$hundredSevenfive', '$remark_hundred_seventy_five', 
			'$hundredSevensix', '$remark_hundred_seventy_six',  
			'$hundredSevenseven', '$remark_hundred_seventy_seven',
			'$hundredSeveneight', '$remark_hundred_seventy_eight',
			'$hundredSevennine', '$remark_hundred_seventy_nine', 
			'$hundredEightzero', '$remark_hundred_eighty',       
			'$total', '$english', '$math', '$science', '$date_registered')"	);

			if($save) {
				
				$save2 = mysqli_query($conn, "INSERT INTO user_answers (user_Id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, q6_answer, q7_answer, q8_answer, q9_answer, q10_answer, q11_answer, q12_answer, q13_answer, q14_answer, q15_answer, q16_answer, q17_answer, q18_answer, q19_answer, q20_answer, q21_answer, q22_answer, q23_answer, q24_answer, q25_answer, q26_answer, q27_answer, q28_answer, q29_answer, q30_answer, q31_answer, q32_answer, q33_answer, q34_answer, q35_answer, q36_answer, q37_answer, q38_answer, q39_answer,  q40_answer, q41_answer, q42_answer, q43_answer, q44_answer, q45_answer, q46_answer, q47_answer, q48_answer, q49_answer, q50_answer, q51_answer, q52_answer, q53_answer, q54_answer, q55_answer, q56_answer, q57_answer, q58_answer, q59_answer, q60_answer, q61_answer, q62_answer, q63_answer,  q64_answer, q65_answer, q66_answer, q67_answer, q68_answer, q69_answer, q70_answer, q71_answer, q72_answer, q73_answer, q74_answer, q75_answer, q76_answer, q77_answer, q78_answer, q79_answer, q80_answer, q81_answer, q82_answer, q83_answer, q84_answer, q85_answer, q86_answer, q87_answer, q88_answer,q89_answer, q90_answer, q91_answer, q92_answer, q93_answer, q94_answer, q95_answer, q96_answer, q97_answer, q98_answer, q99_answer, q100_answer, q101_answer, q102_answer, q103_answer, q104_answer, q105_answer, q106_answer, q107_answer, q108_answer, q109_answer, q110_answer, q111_answer, q112_answer, q113_answer, q114_answer, q115_answer, q116_answer, q117_answer, q118_answer, q119_answer, q120_answer, q121_answer, q122_answer, q123_answer, q124_answer, q125_answer, q126_answer, q127_answer, q128_answer, q129_answer, q130_answer, q131_answer, q132_answer, q133_answer, q134_answer, q135_answer, q136_answer, q137_answer, q138_answer, q139_answer, q140_answer, q141_answer, q142_answer, q143_answer, q144_answer, q145_answer, q146_answer, q147_answer, q148_answer, q149_answer, q150_answer, q151_answer, q152_answer, q153_answer, q154_answer, q155_answer, q156_answer, q157_answer, q158_answer, q159_answer, q160_answer, date_of_exam ) VALUES ('$user_Id', '$ans_q1',   '$ans_q2',   '$ans_q3',  '$ans_q4',	'$ans_q5',	'$ans_q6',  '$ans_q7',	'$ans_q8',	'$ans_q9',  '$ans_q10', '$ans_q11',  '$ans_q12',  '$ans_q13',	'$ans_q14',	'$ans_q15',	'$ans_q16',	'$ans_q17',	'$ans_q18',	'$ans_q19',	'$ans_q20',	'$ans_q21',  '$ans_q22',  '$ans_q23', '$ans_q24',	'$ans_q25',	'$ans_q26', '$ans_q27',	'$ans_q28',	'$ans_q29', '$ans_q30', '$ans_q31',  '$ans_q32',  '$ans_q33',	'$ans_q34',	'$ans_q35',	'$ans_q36',	'$ans_q37',	'$ans_q38',	'$ans_q39',	'$ans_q40',	'$ans_q41',  '$ans_q42',  '$ans_q43', '$ans_q44', '$ans_q45', '$ans_q46', '$ans_q47', '$ans_q48', '$ans_q49', '$ans_q50',  '$ans_q51',  '$ans_q52',  '$ans_q53',	'$ans_q54',	'$ans_q55',	'$ans_q56',	'$ans_q57',	'$ans_q58',	'$ans_q59',	'$ans_q60',	'$ans_q61',  '$ans_q62',  '$ans_q63', '$ans_q64',	'$ans_q65',	'$ans_q66', '$ans_q67',	'$ans_q68',	'$ans_q69', '$ans_q70', '$ans_q71',  '$ans_q72',  '$ans_q73',	'$ans_q74',	'$ans_q75',	'$ans_q76',	'$ans_q77',	'$ans_q78',	'$ans_q79',	'$ans_q80',	'$ans_q81',  '$ans_q82',  '$ans_q83', '$ans_q84',	'$ans_q85',	'$ans_q86', '$ans_q87',	'$ans_q88',	'$ans_q89', '$ans_q90',  '$ans_q91',  '$ans_q92',  '$ans_q93',	'$ans_q94',	'$ans_q95',	'$ans_q96',	'$ans_q97',	'$ans_q98',	'$ans_q99',	'$ans_q100', '$ans_q101', '$ans_q102', '$ans_q103', '$ans_q104', '$ans_q105', '$ans_q106', '$ans_q107', '$ans_q108', '$ans_q109', '$ans_q110', '$ans_q111', '$ans_q112', '$ans_q113', '$ans_q114', '$ans_q115', '$ans_q116', '$ans_q117', '$ans_q118', '$ans_q119', '$ans_q120', '$ans_q121', '$ans_q122', '$ans_q123', '$ans_q124', '$ans_q125', '$ans_q126', '$ans_q127', '$ans_q128', '$ans_q129', '$ans_q130', '$ans_q131', '$ans_q132', '$ans_q133', '$ans_q134', '$ans_q135', '$ans_q136', '$ans_q137', '$ans_q138', '$ans_q139', '$ans_q140', '$ans_q141', '$ans_q142', '$ans_q143', '$ans_q144', '$ans_q145', '$ans_q146', '$ans_q147', '$ans_q148', '$ans_q149', '$ans_q150', '$ans_q151', '$ans_q152', '$ans_q153', '$ans_q154', '$ans_q155', '$ans_q156', '$ans_q157', '$ans_q158', '$ans_q159', '$ans_q160', '$date_registered')");

					if($save2) {
			    		$_SESSION['message'] = "Submitted successfully.";
				        $_SESSION['text'] = "Submission success";
				        $_SESSION['status'] = "success";
						header("Location: exam_result.php");
				    } else {
				        $_SESSION['message'] = "Something went wrong while saving the information.";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header("Location: exam.php");
			    	}

	    } else {
	      $_SESSION['message'] = "Something went wrong while saving the information.";
	      $_SESSION['text'] = "Please try again.";
	      $_SESSION['status'] = "error";
		  header("Location: exam.php");
	    }
  }

}
	

?>



