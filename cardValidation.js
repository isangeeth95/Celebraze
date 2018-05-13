    function validateDetails() {

        var namePattern=/^[a-zA-Z]+$/;
        var name=document.getElementById("cardDetailsForm").elements.namedItem("name").value;


        var visaPattern=/^(?:4[0-9]{15})$/;
        //var visaPattern=/^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
        var masterPattern=/^(?:5[1-5][0-9]{14})$/;
        var ccNum= document.getElementById("cardDetailsForm").elements.namedItem("cNo").value;


        var d=new Date();


        var monthPattern=/^[0-9]+$/;
        var yearPattern=/^[0-9]{4}$/;
        var gMonth=document.getElementById("cardDetailsForm").elements.namedItem("month").value;
        var month=gMonth.trim();
        var year=document.getElementById("cardDetailsForm").elements.namedItem("year").value;


        var cvcPattern=/^[0-9]{3}$/;
        var cvc=document.getElementById("cardDetailsForm").elements.namedItem("cvc").value;


        if(name.match(namePattern) && (ccNum.match(visaPattern) || ccNum.match(masterPattern)) &&
            ((month.match(monthPattern) && year.match(yearPattern)) &&
            (year>d.getFullYear() || (year==d.getFullYear() && month>(d.getMonth()+1))) && month<=12) && cvc.match(cvcPattern))

        {
            window.location.href="billingInformation.php";
        }

        //name check
        if(!name.match(namePattern))
        {
            alert("Recheck name");
        }



        //card number check
        if(ccNum.match(visaPattern))
        {
            alert("Valid Visa Card Number");
        }

        else if(ccNum.match(masterPattern))
        {
            alert("Valid Master Card Number");
        }

        else
        {
            alert("Enter a Valid Card Number");
        }



        //month and year check
        if (month.match(monthPattern) && year.match(yearPattern))
        {
            if(year<d.getFullYear() || (year==d.getFullYear() && month<=(d.getMonth()+1)) || month>12)
              alert("INVALID or EXPIRED! This is "+(d.getMonth()+1)+"th month in "+d.getFullYear());
        }

        else
        {
            alert("Invalid month and year");
        }



        //card validation check
        if (!cvc.match(cvcPattern))
        {
            alert("Recheck CVC number");
        }

    }


    function validateBillingInformation() {

    var postcodePattern=/^[0-9]+$/;
    var postcode=document.getElementById("billingInformationForm").elements.namedItem("postcode").value;


    var pNoPattern=/^[0-9]+$/;
    var pNo=document.getElementById("billingInformationForm").elements.namedItem("pNo").value;


    if(postcode.match(postcodePattern) && pNo.match(pNoPattern))
    {
        window.location.href("finalBillingDetails.php");
    }

    if(!postcode.match(postcodePattern))
    {
        alert("Invalid postcode");
    }

    if (!pNo.match(pNoPattern))
    {
        alert("Invalid Telephone number");
    }

    }

