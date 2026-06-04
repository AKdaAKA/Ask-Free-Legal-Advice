//check number
function IsNumeric(sText) {
    var ValidChars = "0123456789.";
    var IsNumber = true;
    var Char;
    for (i = 0; i < sText.length && IsNumber == true; i++) {
        Char = sText.charAt(i);
        if (ValidChars.indexOf(Char) == -1) {
            IsNumber = false;
        }
    }
    return IsNumber;
}

//Javascript Validation
function getValue(form,thisValue) {
    name = form.name;
    	
	if(thisValue =='Submit')
	{   
   
        //name
		var nametext = document.forms.form1.elements['fname'];
 		if(nametext.value.length<1)
 		{
 			alert("Please enter your name");
 			nametext.focus();
 			return false;
 		}


    
    	//email
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var emailtext = document.forms.form1.elements['femail'];
 		if(emailtext.value.length<1)
 		{
 			alert("Please fill a contact email");
 			emailtext.focus();
 			return false;
 		}
 		else if(!regex.test(emailtext.value))
 		{
 			alert("Please enter a Valid Email Address");
 			emailtext.focus();
 			return false;
 		}
 		//return true;
    
             //feedback
		var feedbacktext = document.forms.form1.elements['feedback'];
 		if(feedbacktext.value.length<1)
 		{
 			alert("Please enter your feedback");
 			feedbacktext.focus();
 			return false;
 		}



}

	form.act.value = thisValue;
}

function getValue1(form, thisValue) {
    name = form.name;
    
    if (thisValue == 'Submit') {



        //name
        var nametext1 = document.forms.form2.elements['aname'];
        if (nametext1.value.length < 1) {
            alert("Please enter your name");
            nametext1.focus();
            return false;
        }

        //email
        var regex1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var emailtext1 = document.forms.form2.elements['aemail'];
        if (emailtext1.value.length < 1) {
            alert("Please fill a contact email");
            emailtext1.focus();
            return false;
        }
        else if (!regex1.test(emailtext1.value)) {
            alert("Please enter a Valid Email Address");
            emailtext1.focus();
            return false;
        }
        //return true;

        //location
		var locationtext = document.forms.form2.elements['location'];
 		if(locationtext.value.length<1)
 		{
 			alert("Please enter your location");
 			locationtext.focus();
 			return false;
 		}

        //query
        var querytext1 = document.forms.form2.elements['query'];
        if (querytext1.value.length < 1) {
            alert("Please enter your query");
            querytext1.focus();
            return false;
        }

    }
    
    form.act.value = thisValue;
}