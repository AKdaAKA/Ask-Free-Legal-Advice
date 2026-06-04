<?php include("includes/header1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Ask Free Legal Advice India - offers free legal advice with a mission to help people who cannot afford present day costly legal services.">
 <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
 <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
 <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
 <link rel="stylesheet" type="text/css" href="resources/css/style.css">
 <link rel="stylesheet" type="text/css"  href="resources/css/queries.css">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
<script src="js/formvalidation.js" language="JavaScript" type="text/JavaScript" ></script>
    <title>Ask Free Legal Advice India</title>
    
        </head>
<body>
 <header>
     <nav>
        <div class="row">
            <img src="resources/img/flag5.png" alt="AFLA logo" class="logo">
            <img src="resources/img/logoC.png" alt="AFLA logo" class="logo-black">
            <ul class="main-nav js--main-nav">
                <li><a href="#overview">Overview</a></li>
                <li><a href="#advice-fields">Advice Fields</a></li>
                <li><a href="#legal-updates">Legal Updates</a></li>
                <!--<li><a class="btn btn-mobile js--scroll-to-form" href="#askform">Give me Advice</a></li>-->
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
     </nav>
     <div class="law-text-box">
          <h1>Free Legal Advice (India).</h1>
         <h2> Free advice on your legal problems.</h2>
		 <div style="padding: 10px;">
		 Brought to you by Aakash Bhagavathi
		 </div>
         <a class="btn js--scroll-to-form" href="#askform">Give me advice</a>
     </div>
</header>
  <section class="section-overview js--section-overview" id="overview">
    <div class="row">
        <h3>Get advice &mdash; reliable and free!</h3>
         <p class="long-copy">
Expensive litigation, exorbitant lawyer fees coupled with an almost non-existent legal aid system have made one of the world's strongest judiciary systems inaccessible to the common man.<br>
“India has acquired a reputation of an expensive legal system. In part, this is because of delays but there is also a question of affordability of fees. The idea is that a relatively poor person cannot reach the doors of justice for a fair hearing only because of financial or similar constraints while it is in our constitutional values and republic ethics. It is a burden on our collective conscience."<br>  President Ram Nath Kovind, on November 25, 2017 - The National Law Day</p>
    </div>
     <div class="row">
        <div class="col span-1-of-4 box">
            <i class="ion-ios-person-outline icon-big"></i>
            <h4>who is this?</h4>
			<p>My grandfather and I were concerned about the issue of unaffordable lawyers in India, particularly given the country's high poverty rate. Drawing on his experience as a former judge, and with my mother providing guidance, we decided to create a website that offers completely free legal advice to anyone in India who needs it. Our goal is to support and sustain this platform to help those who might not have access to legal resources otherwise.</p>
            <!--<p>This site is run by an individual - a retired Judge, with an insatiable urge to help people in need of basic legal help. This way he chose to engage his retired life in an useful way.
            
			</p>--> 
			  
        </div>  
        
        <div class="col span-1-of-4 box">
           <i class="ion-pinpoint icon-big"></i>
           <h4>Aim and scope</h4>
           <p>Our aim is to help people in need of legal advice for their problems. <br> Drafting documents or giving citation of judgments is beyond the scope of this website.We do not entertain any third party queries (questions related to persons not directly affected).
            </p>   
        </div>
        
        <div class="col span-1-of-4 box">
           <i class="ion-ios-gear-outline icon-big"></i>
           <h4>how it works?</h4>
            <p>Many litigation could be avoided if opposing parties get proper legal advice. Any person in need of any legal advice before going to the court of law can post his query in this website. He will receive the advice within a week or ten days in his email inbox.
            </p>   
        </div> 
        
        <div class="col span-1-of-4 box">
           <i class="ion-ios-locked-outline icon-big"></i>
           <h4>privacy</h4>
            <p>Your query will reach us in our email and the reply will be posted to you email. No one else except you and the adviser would know the nature and substance of your query. Thus it is totally confidential, safe and secure.
            </p>   
        </div>  
         
     </div>
    </section>   
  <section class="advice-fields" id="advice-fields">
    <div class="row">
        <h3 >Advice fields</h3>
    </div>
        <div class="row field-photos">
            <div class="col span-1-of-5 box">
                <img src="resources/img/family.jpeg" alt="Family silouette">
                <h4>Family</h4>
                <p>Marriage<br>Divorce<br>Child custody<br>Maintenance</p>
            </div>
            
            <div class="col span-1-of-5 box">
                <img src="resources/img/contract.jpg" alt="I agree">
                <h4>Business</h4>
                <p>Contracts<br>Sale of goods<br>properties<br>Partnership<br>Cheque dishonour<br>Power of attorney</p>
            </div>
            
                <div class="col span-1-of-5 box">
                <img src="resources/img/accident.jpg" alt="Accident">
                <h4>Accident</h4>
                <p>Insurance<br>Damages<br>Criminal negligence<br>Compensation</p>
            </div>
            
            <div class="col span-1-of-5 box">
                <img src="resources/img/property.jpg" alt="Buildings">
                <h4>Property</h4>
                <p>Gift<br>Settlement<br>Sale<br>Trespass/<br>encroachment<br>Easements<br>Registration</p>
            </div>
            
            <div class="col span-1-of-5 box">
                <img src="resources/img/handcuffs.jpg" alt="Handcuffs">
                <h4>Criminal</h4>
                <p>Arrest<br>Bail<br>Trial<br>Prosecution<br>Defence<br>Domestic Violence<br>Dowry Harassment</p>
            </div>
        </div>
    
</section>
<section class="section-form" id="form">
   <a name="askform"></a><div class="row" id="form">
        <h3>Please fill in and send your query</h3>     
   </div>
    
   <div class="row">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form2" >
        <input type="hidden" name="act" value="" />
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr><td colspan="2">Please fill in and send us your query here : </td></tr>
                <tr><td colspan="2" class="form_field"><font color="red">* Required</font></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="30%"><font color="red">*</font>Full Name</td>
                    <td width="70%"><input type="text" name="aname" class="text_box" value = "" />&nbsp;<span class="check_box">(last name - first name )</span></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                     <td ><font color="red">*</font>Email ID </td>
													
				
									 
                     <td><input type="text" name="aemail" class="text_box" value = "" /></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                     <td ><font color="red">*</font>Location</td>
                     <td><input type="text" name="location" class="text_box" value = "" />&nbsp;<span class="check_box">(city, state, country )</span></td>
				
									 
																																				   
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr>
                     <td ><font color="red">*</font>Fill in your query here:</td>
                     <td style="height: 180px; vertical-align: top;">  <textarea name="query" class="text_area" rows="10" cols="50"  value = ""></textarea></td>
                </tr>
                <tr>
                     <td>If you're a human being, please leave this field blank</td>
                     <td> 
                     <input id="check" type="text" name="check" class="text_box" style="width:150px;"> <!-- no bots! -->
                     </td>
                </tr>
					
									 
                <tr><td>&nbsp;</td></tr>
               <tr>
                    <td colspan="2" align="center"  >
     <input type="submit" name="submit1" value="Submit" onClick="return getValue1(this.form, this.value)"><input type="reset" name="reset" value="Reset">

 <span style="color:red"> In case you did not find our reply in your inbox, please verify your spam folder.</span></td>
                </tr>

            </table>
        </form>
    </div>
        
    </section>
   
<section class="legal-updates" id="legal-updates">
		<div class="row">
		<h3>Legal Updates</h3>
		</div>
<div class="row">
<div class="col span-1-of-3 box">				
				
        <img src="resources/img/IndianWomanB.jpg" alt="indianwoman">
        <h4>Is daughter a coparcenar?</h4>
        <p><b>Daughters, like sons, have an equal right to inherit ancestral property.</b></p>
        <p>In a civil appeal, The Hon'ble Supreme Court of India observed as follows:</p>
        <p>The legislation that conferred coparcenary status on women dates back to 2005, when the Hindu Succession Act, 1956 was amended.</p>
        <p>The verdict answers the question whether the coparcenary right of daughters comes into effect only if the father — through whom the right is claimed — was alive on the day the amendment came into force. The top court ruled that a daughter’s right flows from her birth and not by any other factor. <br><br>
        <i>CIVIL APPEAL NO.DIARY NO.32601 OF 2018 
        Vineeta Sharma vs Rakesh Sharma & others (Hon'ble Arun Mishra, Hon'ble S Abdul Nazeer and Hon'ble M R Shah,JJ.) Date : August 11, 2020.</i></p>  	  
</div>
				
    <div class="col span-1-of-3 box">
        <h4>Can a Court award compensation exceeding the claim amount?</h4>
        <p><b>Yes. There is no restriction in law</b></p>
        <p>In a civil appeal (11495 of 2018) The Supreme Court has observed : "Though the claimants had claimed a total compensation of R.25,00,00/ in their claim petition filed before the Tribunal, we feel that the compensation which the claimants are entitled to is higher than the same as mentioned supra."</p>
        
    <p> And further held “There is no restriction that the court cannot award compensation exceeding the claimed amount, since the function of the Tribunal or Court under section 168 of the Motor Vehicles Act, 1988 is to award “Just Compensation”. The Motor Vehicles Act is a beneficial and welfare legislation.</p>
    <p> And further observed “A ‘Just Compensation’ is one which is reasonable on the basisi of evidence produced on record. It cannot be said to have become time barred. Further, there is no need for a new casue of action to claim an enhanced amount. The courts are duty bound to award the “Just Compensation”.</p>
    <p><i>Cases referred:Judgments of this Court in cases of (a) Nagappa Vs Gurudayal Singh1 (b) Magma General Insurance Vs Nanu Ram 2 (C) Ibrahim Vs. Raju 3.
    1 (2003) 2 SCC 274. 2 (2018) SCC Online SC 1546 <br>(Civil Appeal No. 9581 of 2018 decided on 18.09.2018). 
    3 (2011) 10 SCC 634.</i></p>
</div> 
<div class="col span-1-of-3 box">
        <h4>Is a teacher is an “employee” under the Payment of Gratuity Act 1972?</h4>
        <p><b>"No" said the Supreme court.</b></p>
        <p>In a civil appeal (No.2530 OF 2012) The Supreme Court observed: "The legislature was alive to various kinds of definitions of the word “employee” contained in various previous labour enactments when the Act was passed in 1972.  If it intended to cover in the definition of “employee” all kinds of employees, it could have as well used such wide language as is contained in Section 2(f) of the Employees’  Provident Funds Act, 1952 which defines “employee” to mean “any person who is employed for wages in any kind of work, manual or otherwise, in or in connection with the work of an establishment …”. Non use of such wide language in the definition of “employee” in Section 2(e) of the Act of 1972 reinforces our conclusion that teachers are clearly not covered in the definition."</p>
        <p>And concluded " It is for the legislature to take cognizance of situation of such teachers in various establishments where gratuity benefits are not available and think of a separate legislation for them in this regard. That is the subject matter solely of the legislature to consider and decide.” </p>
        <p><i>Birla Institute of Technology  vs  The State of Jharkhand & Ors.(Hon'ble Abhay Manohar Sapre, J. and Indu Malhotra.J -judgment dt-Jan 7, 2019)</i></p>

</div>
    </div>
</section>



    <footer>
    <div class="row">
        <div class="col span-1-of-2">
            <ul class="footer-nav">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Advice fields</a></li>
                <li><a href="#">Legal updates</a></li>
                <li><a href=#>Disclaimer</a></li>               
            </ul>
    
        </div>
         <div class="col span-1-of-2">
            <ul class="social-links">
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>                                  
            </ul>
        </div>
    
    </div>
    <div class="row">
        <p>
            Ask Legal Advice India 2009. All rights reserved.
        </p>
    </div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script> 
<script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
			<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154573205-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154573205-1');
</script>																																														  

</body>
</html>