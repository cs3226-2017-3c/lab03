$(document).ready(function() 
{ 
    $("#myTable").tablesorter(); 
} 
); 


$(document).ready(function () {
    //Setting row height according to difference between SUMs

    setAllDifferentHeight();
}); 


function setAllSameHeight()
{
    tablerows = document.getElementById("myTable").rows;
    for(i=0;i<tablerows.length;i++){
        tablerows[i].style.height = "30px"; 
    }
    
}

function setAllDifferentHeight()
{
    var t = document.getElementById("myTable");

    for(var i=2; i < t.rows.length; i++) {
        var sumi = t.rows[i].cells[11].innerHTML;
        var sumiminus1 = t.rows[i-1].cells[11].innerHTML;
        t.rows[i].style.height = 30+20*(Math.abs(sumi-sumiminus1)).toString()+"px";

    }    
}

