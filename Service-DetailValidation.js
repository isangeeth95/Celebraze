function validateEmail()
{


    if(service.CompanyMail.value=="")
    {
        alert("Enter the email");
        service.CompanyMail.focus();
        return false;

    }


    var re = /\S+@\S+/;

    if (re.test(service.CompanyMail.value)==false)
    {
        alert ("Invalid email address")
        service.CompanyMail.focus();
        return false;
    }

    return true;
}




/*function is_valid_url(url)
{
    return url.match(/^(ht|f)tps?:\/\/[a-z0-9-\.]+\.[a-z]{2,4}\/?([^\s<>\#%"\,\{\}\\|\\\^\[\]`]+)?$/);
}*/