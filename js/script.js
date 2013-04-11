function setupPlaceholder(inputid) {
    if ($.browser.webkit) return false;
 
    var target = $('#'+inputid);
    if (target.length==0) {
        target = $('input[type="text"], input[type="email"], input[type="search"], textarea');
    }
 
    target.each( function(i, el) {
        el = $(el);
        var ph = el.attr('placeholder');
        if (!ph) return true;
 
        el.addClass('placeholder');
        el.attr('value', ph);
 
        el.focus( function(e) {
            if( el.val()==ph ) {
                el.removeClass('placeholder');
                el.attr('value', '');
            }
        });
 
        el.blur( function(e) {
            if( $.trim(el.val())=='' ) {
                el.addClass('placeholder');
                el.attr('value', ph);
            }
        });
    });
}
function tv(){
    $("#hiddenVideo").youtubeRss({username: "StrategyExecutionTv", video: function(){videos()}});
    
    function videos(){
        $("#hiddenVideo table").each(function(i){
            img = $(this).find('img');
            a = $(this).find('a:eq(1)');
            p = $(this).find('span:eq(0)');
            
            container = $('#video').append('<div></div>');
            $(container).append($(img));
            console.log(a);
        });
    }
    // $.ajax({
    //     url: 'http://gdata.youtube.com/feeds/base/users/StrategyExecutionTv/uploads',
    //     dataType: "jsonp",
    //     data: {
    //         orderby: 'updated',
    //         alt: "json",
    //         v: 2,
    //         "max-results": '25',
    //         "start-index": '1'
    //     },
    //     success: function(data){
    //         console.log(data)
            
    //         if(data.feed){
    //             var len = data.feed.entry.length;
    //             for(var i=0; i<len; i++){
    //                 var entry = data.feed.entry[i];
                    
    //                 var t = options.template;
                    
    //                 t = applyTemplate(t, entry, 'entry');
                    
    //                 output += t;
    //             }//end for
                
    //             options.context.html(output);
    //         }//end if
    //     }//end success()
    // });
}
$('document').ready(function(){
	setupPlaceholder();
	
	$("#contato").validate({
		errorPlacement: function(error, element) {

			
		},
		success: function(label) {
			//label.text("ok!").addClass("success");
		},
		rules: {
				nome: {required:true},
				email: {
					required:true,
					email:true
				}
				
		}


    });

    tv();
});






