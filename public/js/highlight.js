$(document).ready(function() 
{ 
    $("#myTable").tablesorter(); 
    setAllDifferentHeight();
} 
); 

function setAllSameHeight()
{
    var t = document.getElementById("myTable");
    for(var i=0; i<t.rows.length; i++){
        t.rows[i].style.height = "30px"; 
    }
    
}

function setAllDifferentHeight()
{
    var t = document.getElementById("myTable");
    for(var i=2; i < t.rows.length; i++) {
        var sumi = t.rows[i].cells[11].innerHTML;
        var sumiminus1 = t.rows[i-1].cells[11].innerHTML;
        t.rows[i].style.height = 30+30*(Math.abs(sumi-sumiminus1)).toString()+"px";

    }    
}

function highlight()
{
    var t = document.getElementById("myTable");

    var firsts = document.getElementsByClassName("first");
    for(var i=0; i<firsts.length; i++){
        firsts[i].style.backgroundColor = "gold";
    }
    var seconds = document.getElementsByClassName("second");
    for(var i=0; i<seconds.length; i++){
        seconds[i].style.backgroundColor = "silver";
    }
    var thirds = document.getElementsByClassName("third");
    for(var i=0; i<thirds.length; i++){
        thirds[i].style.backgroundColor = "brown";
    }
    var lasts = document.getElementsByClassName("last");
    for (var i = lasts.length - 1; i >= 0; i--) {
        lasts[i].style.backgroundColor = "pink";
    };.

}
