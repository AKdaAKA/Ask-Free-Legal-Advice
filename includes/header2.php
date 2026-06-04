<?php

function ValidateNumber($str)
{
$trimmed = str_replace(' ','',trim($str));
$regex = "/^[()\/0-9-+]{0,11}$/i";
if (preg_match($regex,$trimmed))
  return 1;
else
  return 0;
}


function strReplace($phrase)
{
$phr=str_replace(',',' ',trim($phrase));
return $phr;
}


$errorText = "";

try
{
if ($_POST['submit'] == 'Submit')
{
define('TO_RECIPIENT', 'info@askfreelegaladvice.com');
define('CC_RECIPIENT', 'patric.ravi@gmail.com, roubla@gmail.com');

$my_t=getdate(date("U"));
$todaysdate = "$my_t[month] $my_t[mday], $my_t[year]";
define('TODAYS_DATE', $todaysdate);


$errorText = "";
$body="";
$name = '';
$name = $_POST['fname'];
$body .= "Full Name : ";
$body .= $name;
$body .= "\nEmail : ";
$email = $_POST['femail'];
$body .= $email;
$feedback = $_POST['feedback'];
$body .= "\nFeedback : ";
$body .= $feedback ;

 if ($errorText == "") 
 {

   
//Mail
  $to = TO_RECIPIENT;
  $from = stripslashes($_POST['fname'])."<".stripslashes($_POST['femail']).">";
  $subject = "Feedback from askfreelegaladvice.com - ".TODAYS_DATE;
              $headers = "From:". $from;
            $headers .= "\nCC:". CC_RECIPIENT;
            $headers .= "\nReply-to:". $from;
          
                 if( mail( $to, $subject, $body, $headers) ) ; 
                else
                {
                    $errorText = 'Message delivery failed';
                    //echo("<p>Message delivery failed...</p>");
                }
 }   
    
   else {
        $errorText = 'An error occured trying to attach your photo. Pls attach and try submitting again.';
    }




if ($errorText == "") header("Location: thankyouf.html");

}

}
catch (Exception $e)
{
echo $e;
header("Location: error.php");
}
?>