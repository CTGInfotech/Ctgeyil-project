<?php 
//if(isset($_POST['submit'])){    
//     $to = "cktrajesh@gmail.com"; // this is your Email address
    $name = $_POST['name']; // this is the sender's Email address
    $email = $_POST['email'];
    $phone = $_POST['phone'];  
   
    $msg = $_POST['message'];  
//   	//$textareamessage = $_POST['message'];
//     $subject = "www.cashewgoa.com - Copy of your form submission";
//     $message = "www.cashewgoa.com - Enquiry \n\n Name: " . $name . "\n\n Email: " . $email . "\n\n Phone:" . $phone;
//     $headers = "From:" . $name;
//     if (mail($to, $subject, $message, $headers)){
// 		echo "Thank-you for contacting Mansarover Industry, Your request has been submitted. Our team will get in touch with you shortly.";
// 	}else{
// 		$success = "Message Sending Failed, try again";
// 	}
//     // You cannot use header and echo together. It's one or the other.
//     }
	
?>


<?php
if(isset($_POST['submit'])){ 
    // Multiple recipients
    $to = 'contactus@ctgeyil.com'; // note the comma
     $subject = "www.ctgeyil.com - Copy of your form submission";
    // Message
    $message = '
    <html>
    <head>
      <title>Enquiry From www.ctgeyil.com</title>
    </head>
    <body>
      <p>Here are the customer details</p>
      <table width="70%">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
         
          <th>Message</th>
        </tr>
        <tr>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          
          <td>'.$msg.'</td>
        </tr>
      </table>
    </body>
    </html>
    ';
    
    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    
    // Additional headers
    $headers[] = 'To: CTG Eyil <contactus@ctgeyil.com>';
    $headers[] = 'From: CTG Eyil <'.$email.'>';
    $headers[] = 'Cc: cktrajesh@gmail.com, sathiyamoorthy.c@ctgeyil.com';
    // $headers[] = 'Bcc: birthdaycheck@example.com';
    

    if(mail($to, $subject, $message, implode("\r\n", $headers))){
        echo "Thank-you for contacting  CTG Eyil, Your request has been submitted. Our team will get in touch with you shortly.";
    }else{
        echo "Message Sending Failed, try again";
    }
}
?>