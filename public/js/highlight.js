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
    //color code rank group
    //Class gold and pink
    cols.forEach(function(col, index){
        var max = Math.max.apply(null, col);
        var min = Math.min.apply(null, col)
        $('#myTable tr').find('td:nth-child(12)').each(function(i, td){
            if($(td).text() == max){
                $(this).parent("tr").css("background-color", "gold")
            }
            if($(td).text() == min){
                $(this).parent("tr").css("background-color", "pink")
            }
        })
    })
    //highlight highest value
    cols.forEach(function(col, index){
        var max = Math.max.apply(null, col);
        $('#myTable tr').find('td:eq('+(index+1)+')').each(function(i, td){
            $(this).toggleClass('highlighted', +$(td).text() == max)
        })
    })
    //Class silver and brown
    cols.forEach(function(col, index){
        var max = Math.max.apply(null, col);
        var scol = col.filter(function(x){return x != max});
        var smax = Math.max.apply(null, scol);
        
        var tcol = scol.filter(function(x){return x != smax});
        var tmax = Math.max.apply(null, tcol);
        $('#myTable tr').find('td:nth-child(12)').each(function(i, td){
            if($(td).text() == smax){
                $(this).parent("tr").css("background-color", "silver")
            }
            if($(td).text() == tmax){
                $(this).parent("tr").css("background-color", "#cd7f32")
            }
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