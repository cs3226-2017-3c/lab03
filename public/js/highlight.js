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
    var out = out.filter(function(x) { return x != second});

    var third = Math.max.apply(Math, out);

    var last = Math.min.apply(Math, out);

    var t = document.getElementById("myTable");

    for(var i = 0; i < t.rows.length; i++) {
        if(t.rows[i].cells[11].innerHTML == first){ /* how to  use getElementsByClassName("sum") instead?*/
            t.rows[i].classList.add("gold");
        }
        else if(t.rows[i].cells[11].innerHTML == second){
            t.rows[i].classList.add("silver");
        }
        else if(t.rows[i].cells[11].innerHTML == third){
            t.rows[i].classList.add("bronze");
        }
        else if(t.rows[i].cells[11].innerHTML == last) {
            t.rows[i].classList.add("pink");
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

$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})
