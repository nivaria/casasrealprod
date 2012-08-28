/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($){
    jQuery.fn.fgcSelect = function(options) {
        // define defaults and override with options, if available
        // by extending the default settings, we don't modify the argument
        settings = jQuery.extend({
            id: '',
            htmlClass: '',
            slideSpeed:''

        }, options);
        return this.each(function() {
            me=this;
            $(me).hide();
            //get attribute of select
            var source =me;
            var selected = $(source).find("option[selected]");
            var options = $("option", source);
            var dl=$('<dl></dl>').insertAfter(me);
            //create a instead list
            $(dl).attr('id',settings.id).addClass('dropdown '+settings.htmlClass);
            var dt=$('<dt><a href="#">' + selected.text() +
                '<span class="value">' + selected.val() +
                '</span></a></dt>').appendTo(dl);
            var dd= $('<dd></dd>').appendTo(dl);
            var ul=$('<ul></ul>').appendTo(dd);
            $(ul).hide();
            options.each(function(){
                $(ul).append('<li><a href="#">' +
                    $(this).text() + '<span class="value">' +
                    $(this).val() + '</span></a></li>');
            });

            //build action on the list to make them cause the same effect on the select
            $('a',dt).bind('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $(ul).toggle();
            });
            $(document).click(function(e) {               
                    $(ul).hide();
            })

            $("a", ul).click(function(e) {
                e.preventDefault();
                e.stopPropagation();
                var text = $(this).html();
                $('a',dt).html(text);
                $(ul).hide();

                var newVal=$(this).find("span.value").html();
                if ($(source).val() !=newVal) {
                    $(source).val(newVal);
                    $(source).trigger('change');
                }

            });

            $(dl).show();

            return this;


        })

    }

})(jQuery);