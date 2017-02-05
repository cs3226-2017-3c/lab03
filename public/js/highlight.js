$(document).ready(function() 
{ 
    $("#myTable").tablesorter(); 
} 
); 


$(document).ready(function () {
    var cols = []
    var trs = $('#myTable tr')
    var data =$.each(trs , function(index, tr){
        $.each($(tr).find("td").not(":first"), function(index, td){
            cols[index] = cols[index] || [];
            cols[index].push($(td).text())
        })
    });

    
    //Coloring
    var sum = $('.sum');
    var arr = sum.map(function(_,x) { return +$(x).text()}).get();
    var first = Math.max.apply(Math, arr);
    var out = arr.filter(function(x) { return x != first});
    
    var second = Math.max.apply(Math, out);
    var out = arr.filter(function(x) { return x != second});

    var third = Math.max.apply(Math, out);
    var out = arr.filter(function(x) { return x != third});

    var last = Math.min.apply(Math, out);

    var t = document.getElementByClassName("sum");
    for(var i = 0;i<t.rows.length;i++) {
        if(t.rows[i].cells.getElementByClassName("sum") == first){
            t.rows[i].style.backgroundColor="gold";
        }
        else if(t.rows[i].cells.getElementByClassName("sum") == second){
            t.rows[i].style.backgroundColor="silver";
        }
        else if(t.rows[i].cells.getElementByClassName("sum") == third){
            t.rows[i].style.backgroundColor="sienna";
        }
        else if(t.rows[i].cells.getElementByClassName("sum") == last) {
            t.rows[i].style.backgroundColor="pink";
        }
    }


    
    //highlight highest value
    cols.forEach(function(col, index){
        var max = Math.max.apply(null, col);
        $('#myTable tr').find('td:eq('+(index+1)+')').each(function(i, td){
            $(this).toggleClass('highlighted', +$(td).text() == max)
        })
    })

    //Setting row height according to difference between SUMs

    var t = document.getElementById("myTable");

    for(var i=2; i < t.rows.length; i++) {
        var sumi = t.rows[i].cells[11].innerHTML;
        var sumiminus1 = t.rows[i-1].cells[11].innerHTML;
        t.rows[i].style.height = 30+20*(Math.abs(sumi-sumiminus1)).toString()+"px";

    }
}); 


function setAllSameHeight()
{
    tablerows = document.getElementById("myTable").rows;
    for(i=0;i<tablerows.length;i++){
        tablerows[i].style.height = "30px"; 
    }
    
}
