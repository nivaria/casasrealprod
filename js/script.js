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
    $("#block-nodeblock-39 h2").html("José Luís <span style='color: #333333;  padding-top: 8px; display: block; font-weight: normal; padding-bottom: 8px;font-size: 12px;text-transform: uppercase;'> 12 Abril 2012</span>")
    $("#block-nodeblock-32 h2").html("<span style='color: #999'>Las casas</span></br>del camino real");
//   alert(tx);
//    var myArray = tx.split(",");
//    var st1=myArray[0];
//    var st1=myArray[1];
//    st1.append("<span>st1</span>")
//    $("#block-nodeblock-39 h2").text(st1.css({'color','red'}));
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



