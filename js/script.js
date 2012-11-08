/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery(function($){
    //alert('fgc');   
    //change price
          setTimeout(function(){
        
        $('.nivaria-rooms-availability-field-calendar').find(".fc-event-title").append("<span>€</span>");;
        },8000)
    ///
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
    /*$("#rooms-booking-availability-search-form #edit-rooms-start-date-datepicker-popup-0").attr("value","ENTRADA");
    $("#rooms-booking-availability-search-form #edit-rooms-end-date-datepicker-popup-0").attr("value","SALIDA");*/
    //$("#rooms-booking-availability-search-form #edit-adults-count").find('option')
    //.removeAttr('selected')
    //.eq(0).attr('selected', 'selected')
    //.prepend("<option value=''>ADULTOS</option>");
    //$("#rooms-booking-availability-search-form #edit-children-count").find('option')
    //.removeAttr('selected')
    //.eq(0).attr('selected', 'selected')
    //.prepend("<option value=''>NIÑOS*</option>");
    //add select
    jQuery("#edit-field-fecha-de-la-estancia-und-0-value-year").selectBox();
    jQuery("#edit-field-fecha-de-la-estancia-und-0-value-month").selectBox();
    $("#rooms-booking-availability-search-form SELECT").selectBox();
    $("#nivaria-rooms-booking-display-unit-availability-search-form SELECT").selectBox();
    $("#rooms-booking-availability-search-form #edit-children-count").next().after('<div class="description"><12 ' + Drupal.t('years') + '</div>');
})
jQuery(document).ready(function($){
})



