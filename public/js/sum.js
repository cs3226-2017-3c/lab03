$(function(){
    sum();
    $('input[name="mc"]').change(sum());
    $('input[name="tc"]').change(sum());
    $('input[name="hw"]').change(sum());
    $('input[name="bs"]').change(sum());
    $('input[name="ks"]').change(sum());
    $('input[name="ac"]').change(sum());
})

function sum(){
    $('input[name="sum"]').attr('disabled','disabled');

    var s = [];
    s = s.concat($('input[name="mc"]').val().split(","));
    s = s.concat($('input[name="tc"]').val().split(","));
    s = s.concat($('input[name="hw"]').val().split(","));
    s = s.concat($('input[name="bs"]').val().split(","));
    s = s.concat($('input[name="ks"]').val().split(","));
    s = s.concat($('input[name="ac"]').val().split(","));

    var sum = s.reduce((pv,cv)=>{
       return pv + (parseFloat(cv)||0);
    },0);

    $('input[name="sum"]').val(sum);    
}