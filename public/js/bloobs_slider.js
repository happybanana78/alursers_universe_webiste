var counter = 0;
var bloobs = document.getElementsByClassName("bloobs-img");
var bloobsLen = bloobs.length;

Slide();

function Slide() {
    for(i = 0; i < bloobsLen; i++) {
        bloobs[i].style.display = "none";
    }
    bloobs[counter].style.display = "block";
    counter++;
    if(counter >= bloobsLen) {
        counter = 0;
    }
    setTimeout(Slide, 2000);
}

