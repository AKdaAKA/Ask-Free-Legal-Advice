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
if ($_POST['submit1'] == 'Submit')
{
define('TO_RECIPIENT', 'askme@asklegaladviceindia.com');
define('BCC_RECIPIENT', 'roubla@gmail.com, patric.ravi@gmail.com');

$my_t=getdate(date("U"));
$todaysdate = "$my_t[month] $my_t[mday], $my_t[year]";
define('TODAYS_DATE', $todaysdate);


$errorText = "";
$body="";
$name = '';
$name = $_POST['aname'];
$body .= "Full Name : ";
$body .= $name;
$body .= "\nEmail : ";
$email = $_POST['aemail'];
$body .= $email;
$location = $_POST['location'];
$body .= "\nLocation : ";
$body .= $location;
$query = $_POST['query'];
$body .= "\nQuery : ";
$body .= $query;

 if ($errorText == "") 
 {

   if (file_exists('count.txt')) {

    $content = file('count.txt'); // reading all lines into array
    $upvotes = intval($content[0]) + 1; // getting first line 
    
if ($upvotes > 5) {
   $upvotes = 0;
}
file_put_contents('count.txt', $upvotes); // writing data
}
//Mail
  $to = TO_RECIPIENT;
  $from = stripslashes($_POST['aname'])."<".stripslashes($_POST['aemail']).">";
  $subject = "Legal Advice Needed - ".TODAYS_DATE;
              $headers = "From:". $from;
            $headers .= "\r\nBCC:". BCC_RECIPIENT;
            $headers .= "\r\nReply-to:". $from;
          
          if (empty($_POST['check'])) { 
                  mail( $to, $subject, $body, $headers);
                  }
                else
                {
                    $errorText = 'Message delivery failed';
                    //echo("<p>Message delivery failed...</p>");
                }
 }   
    
   else {
        $errorText = 'An error occured trying to attach your photo. Pls attach and try submitting again.';
    }





 if ($errorText == "") header("Location: thankyou.html");

}


}
catch (Exception $e)
{
echo $e;
header("Location: error.php");
}
?>