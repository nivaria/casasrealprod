/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(function($){
    //alert('fgc');   

    var txt1=$(".form-item-name label").text();
    var txt2=$(".form-type-password label").text();
    //alert(txt1);
    $('#user-login-form #edit-name').each(function(){
        var default_text=$(this).val(txt1);
        $(this).focus(function(){
            $(this).val('');
   
        })
        $(this).blur(function(){

            $(this).val();
 
        })

    });
    //default input pass
    $('#user-login-form #edit-pass').each(function(){
        var default_text=$(this).val(txt2);
        $(this).focus(function(){
            $(this).val('');
   
        })
        $(this).blur(function(){

            $(this).val();
 
        })

    });
    //select
    //$(".form-item-adults-count #edit-adults-count").fgcSelect();
    //$(".form-item-children-count #edit-children-count").fgcSelect();
    //string
    var tx=$("#block-nodeblock-39 h2").text();
    var tx1=$("#block-nodeblock-32 h2").text();
   var myArray = tx.split(",");
   
   var st1=myArray[0];
   var st2=myArray[1];
     var str_array = tx1.split(" ");
   var st3=str_array[0];
   var st4=str_array[1];
    var st5=str_array[2];
     var st6=str_array[3];
      var st7=str_array[4];
    $("#block-nodeblock-39 h2").html(st1+"<span style='color: #333;  padding-top: 8px; display: block; font-weight: normal; padding-bottom: 8px;font-size: 12px;text-transform: uppercase;'>"+st2+"</span>")
    //$("#block-nodeblock-32 h2").html("<span style='color: #666'>"+st3+" "+st4+"</span></br>"+st5+" "+st6+ " "+st7);
//or
            var n=Math.round((str_array.length)/2);
                $("#block-nodeblock-32 h2").html("");//xoa bo dl cũ
                for(var j = 0; j < n-1; j++){
                $("#block-nodeblock-32 h2").append("<span style='color:#666'>"+str_array[j]+" "+"</span>");
                }
                $("#block-nodeblock-32 h2").append("</br>");
                for(var i = n-1; i < str_array.length; i++)
                {
                   $("#block-nodeblock-32 h2").append("<span>"+str_array[i]+" "+"</span>");
                }
})
jQuery(document).ready(function($){
    var sidebar_first = $("#sidebar-first").height();
    var content = $("#content").height();
    var sidebar_second = $("#sidebar-second").height();
    if(sidebar_first > content){
        $("#content").css({
            height: sidebar_first - 22 + "px"
        })
    }else{
        $("#sidebar-first").css({
            height: content + "px"
        })
    }
    $("#rooms-booking-availability-search-form #edit-rooms-start-date-datepicker-popup-0").attr("value","ENTRADA");
    $("#rooms-booking-availability-search-form #edit-rooms-end-date-datepicker-popup-0").attr("value","SALIDA");
    $("#rooms-booking-availability-search-form #edit-adults-count").find('option')
    .removeAttr('selected')
    .eq(0).attr('selected', 'selected')
    .prepend("<option value=''>ADULTOS</option>");
    $("#rooms-booking-availability-search-form #edit-children-count").find('option')
    .removeAttr('selected')
    .eq(0).attr('selected', 'selected').prepend("<option value=''>NIÑOS*</option>");
    $("#rooms-booking-availability-search-form SELECT").selectBox();
})
jQuery(document).ready(function($){
    $('.node-type-casas #main-wrapper #main #content .section .group-left .field-items p:first').next().addClass('position1');
    $('.node-type-casas #main-wrapper #main #content .section .group-left .field-items p:first').next().next().addClass('position2');
    $('.node-type-casas #main-wrapper #main #content .section .group-left .field-items p:first').next().next().next().addClass('position3');
    $('.node-type-casas #main-wrapper #main #content .section .group-left .field-items p:first').next().next().next().next().addClass('position4');
    $('.node-type-casas #main-wrapper #main #content .section .group-left .field-items .field-item div:first').addClass('position6');
    $('.node-type-casas #main-wrapper #main #content .section .group-right .field-items p:first').next().next().css('display','none');
    $('.node-type-casas #main-wrapper #main #content .section .group-right .field-items p:first').next().addClass('position7');
    $('.node-type-casas #main-wrapper #main #content .section .group-right .field-items p:first').next().next().next().addClass('position8');
    
    
})



