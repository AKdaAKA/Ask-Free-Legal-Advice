<?php include("includes/header1.php"); 

    

    //$file = 'file.txt';

    //if ($_SERVER['REQUEST_METHOD'] === 'POST')
    //{

$myfile1 = fopen("dates.txt", "w") or die("Unable to open file!");
$now = time();
$datetxt = $now;
//$datediff = ;
$days = floor($datetxt/(60*60*24));
fwrite($myfile1, $days);
fclose($myfile1);


$myfile = fopen("count.txt", "w") or die("Unable to open file!");
$txt = "11111";
fwrite($myfile, $txt);
fclose($myfile);

    //}
    //exit();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="Ask Free Legal Advice India - This site is intended to provide FREE legal guidance on all aspects of Laws in India.Your advisors are - a retired District Judge and an experienced lawyer - 40 years of standing at the bar."/>
<meta name="keywords" content="ask free legal advice, free legal advice, ask legal advice, legal advice, indian laws, laws of india, law of india, lawyer, judge, legal help, accident law, how to get damages in, motor accident, construction accident, electrocution, business law, bank guarantees, company law, contract, debt recovery, guarantee, insurance to life, property, negotiable instruments, partnership, registration, sale of goods, sale of lands, constructed property, stamp duty, criminal law, arrest, bail, charge, defence, prosecution, remand, search and seizure, trial, family law, child custody, divorce, dowry harassment, dowry death, ill-treatment, marriage, maintenance,partition, restitution of conjugal rights, succession, changing your name, power of attorney "/> 
<title>ASK Legal Advice :: Free legal advice on Indian Laws - Ask Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/formvalidation.js" language="JavaScript" type="text/JavaScript" ></script>
</head>
<body>
<div id="main">
<div id="left"></div>
<div id="main_container">
	<div id="header" style="border:0px solid">
    	<div id="logo" style="border:0px solid"><a href="index.html"><img src="images/logo5.gif" alt="ASK Legal Advice India" title=""  border="0" width="380" height="100" /></a></div>
    	<!--<div>FREE LEGAL ADVICE ON INDIAN LAWS</div>-->
        <div class="top_phone">
         <form method="get" action="/search/search.php" class="zoom_searchform"><input type="hidden" name="zoom_sort" value="0" />
            <div class="phone_text">            
              <input type="text" tabindex="2" size="10"  onfocus="if (this.value == 'Search ...') {this.value = '';}" class="searchintextt" onblur="if (this.value == '') {this.value = 'Search ...';}" name="zoom_query" id="zoom_searchbox" value="Search ..." /><input class="subbutton" type="submit" name="Click to Search"  value="Go"  />  
            </div>
            </form>
        </div>        
        <div id="menu_tab">  
                <ul class="menu">                         
                     <li><a href="index.html" class="nav"> home </a></li>
                     <li><a href="about.html" class="nav"> about</a></li>
                     <li><a href="ask.php" class="nav_selected"> ask </a></li>
<li><a href="articles.html" class="nav"> articles</a></li>
<li><a href="bare_acts.html" class="nav"> bare acts</a></li>
<li><a href="judgements.html" class="nav"> judgements</a></li>
                     <li><a href="faqs.html" class="nav"> faq</a></li> 
                     <li><a href="feedback.php" class="nav"> feedback</a></li> 
                </ul>
        </div>
    </div>
<center>  

<!--Place ads here-->
</center>
    <div id="main_content">
    <div style="width:800px;margin-left:100px;height:400px;margin:auto;border:0px solid;" class="aboutlink">
<div style="float:left;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form2" >
        <input type="hidden" name="act" value="" />
            <table width="600" border="0" cellpadding="0" cellspacing="0">
                <tr><td colspan="2">Please fill in and send us your query here : </td></tr>
                <tr><td colspan="2" class="form_field"><font color="red">* Required</font></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td width="170"><font color="red">*</font>Full Name</td>
                    <td width="300"><input type="text" name="aname" class="text_box" value = "" />&nbsp;<span class="check_box">(last name - first name )</span></td>   
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
                <tr><td>&nbsp;</td></tr>
                <tr>
                     <td ><font color="red">*</font>Fill in your query here:</td>
                     <td>  <textarea name="query" class="text_area" rows="10" cols="50"  value = ""></textarea></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
               <tr>
                    <td colspan="2" align="center"  >
             <input type="submit" name="submit1" value="Submit" onClick="return getValue1(this.form, this.value)"><input type="reset" name="reset" value="Reset">

  <!--<span style="color:red"> We are temporarily disabling this feature. We are undergoing some maintenance. We will be back in a month.</span>--></td>
                </tr>
  
            </table>
        </form>
   </div>
   <div style="border:0px solid;float:left;"><!--Place ads here--></div>
   </div>    
     <div class="clear"></div>
<center>

</center>
    </div><!-- main_content-->  
    
    <div id="footer" >  
        <div class="left_footer">ask free legal advice 2009. All Rights Reserved</div>
        <div class="right_footer">
            <a href="index.html">home</a>
            <a href="about.html">about</a>
            <a href="ask.php">ask</a>
            <a href="articles.html">articles</a>
            <a href="bare_acts.html">bare acts</a>
            <a href="judgements.html">judgements</a>
            <a href="faqs.html">faq</a>
            <a href="feedback.php">feedback</a>
            <a href="sitemap.html">sitemap</a>
            <a href="#" onclick="javascript:window.open('disclaimer.html', '_blank', 'scrollbars=yes,width=600, height=500')">disclaimer</a> 
        </div>
    </div>

</div>
<div id="right"></div>
</div>
</body>
</html>