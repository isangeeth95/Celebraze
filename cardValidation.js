    function validateDetails() {

        var namePattern=/^[a-zA-Z]+$/;
        var name=document.getElementById("cardDetailsForm").elements.namedItem("name").value;


        var visaPattern=/^(?:4[0-9]{15})$/;
        //var visaPattern=/^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
        var masterPattern=/^(?:5[1-5][0-9]{14})$/;
        var ccNum= document.getElementById("cardDetailsForm").elements.namedItem("cNo").value;


        var d=new Date();


        var monthPattern=/^[0-1][0-9]$/;
        var yearPattern=/^[0-9]{4}$/;
        var month=document.getElementById("cardDetailsForm").elements.namedItem("month").value;
        var year=document.getElementById("cardDetailsForm").elements.namedItem("year").value;


        var cvcPattern=/^[0-9]{3}$/;
        var cvc=document.getElementById("cardDetailsForm").elements.namedItem("cvc").value;


        if(name.match(namePattern) && (ccNum.match(visaPattern) || ccNum.match(masterPattern)) &&
            (month.match(monthPattern) && year.match(yearPattern)) && (year>d.getFullYear() ||
                (year==d.getFullYear() && month>(d.getMonth()+1))) && cvc.match(cvcPattern))
        {
            window.location.href="billingInformation.php";
        }

        //name check
        if(name.match(namePattern))
        {
            alert("Correct name");
        }

        else
        {
            alert("Recheck name");
        }


        //card number check
        if(ccNum.match(visaPattern))
        {
            //return "correct";
            //document.getElementById("demo").innerHTML="correct";
            alert("You entered a Valid Visa Card Number");
        }

        else if(ccNum.match(masterPattern))
        {
            alert("You entered a Valid Master Card Number");
        }

        else
        {
            alert("Enter a Valid Card Number");
        }

        //month and year check
        if (month.match(monthPattern) && year.match(yearPattern))
        {
            if(year>d.getFullYear())
                alert("Valid month and year");

            else if (year==d.getFullYear() && month>(d.getMonth()+1))
                alert("Valid month and year");

            else
                alert("EXPIRED! This is "+(d.getMonth()+1)+"th month in "+d.getFullYear());
        }

        else
        {
            alert("Invalid month and year");
        }


        //card validation check
        if (cvc.match(cvcPattern))
        {
            alert("Valid CVC number");
        }

        else
        {
            alert("Recheck CVC number");
        }




    }

