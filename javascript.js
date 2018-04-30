function mySlide() {
    var x = document.getElementsByClassName("slideShow");



    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        x[i].style.opacity="o";
    }

    myIndex++;
    if (myIndex <= x.length) {
        x[myIndex - 1].style.display = "block";

    }

    if (myIndex > x.length)
    {
        myIndex=1;
        x[myIndex - 1].style.display = "block";
    }

        setTimeout(mySlide, 4000);

}



function navBarScrolled() {

    var nv=document.getElementById("nav1");
    //var value=nv.offsetTop;

    if(pageYOffset>800)
    {
        nv.classList.add("sticky");
    }

    else{
        nv.classList.remove("sticky");
    }

}


