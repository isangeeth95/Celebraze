function plus(n) {
    showslide(Index +=n);
    }

function showslide(n){
    var i;
    var x= document.getElementsByClassName("slideshow");

    if(n > x.length){Index=1}
    if(n < 1 ){Index=x.length}

    for(i=0; i<x.length; i++){
        x[i].style.display="none";
    }
    x[Index-1].style.display="block"
}

