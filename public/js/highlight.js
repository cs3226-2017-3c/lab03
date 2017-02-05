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

    
    //Make max bold
    var sum = $('.sum');
    var arr = sum.map(function(_,x) { return +$(x).text()}).get();
    var max = Math.max.apply(Math, arr);
    var out = arr.filter(function(x) { return x != max});
    var nxt = Math.max.apply(Math, out);

    sum.filter(function() {
        var numb = +$(this).text();
        return numb == max;
    }).css('font-weight', 'italic');

    
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
