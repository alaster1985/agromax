$(document).ready(function(){
	var exclusivenName = $("#exclusive-name");
	var otherName = $("#other-name");
    var navigation = $(".site-nav__list");

    $("select").niceSelect();

	exclusivenName.on("change",function(){
		if(exclusivenName.val() === "Other"){
			otherName.css("display" , "table");
			otherName.find('.other').prop('required',true);
		}else{
			otherName.css("display" , "none");
            otherName.find('.other').prop('required',false);
		}
	});

    $('#selectLanguageDropdown').localizationTool({
        'defaultLanguage' : 'en_GB', 
        'showFlag': true,            
        'showCountry': false,        
        'showLanguage': true,       
        'languages' : {      
        },
        'strings' : {
            '#selectLanguageDropdown' : {
                'ar_TN' : 'نائب عينة',
                'de_DE' : 'Germany',
                'tr_TR' : 'Turkey',
                'it_IT' : 'Italy' 
            }
        },
        onLanguageSelected: function(e){
            if (e === "ar_TN"){
                navigation.addClass("site-nav__list--reverse"); 
             }else{
                navigation.removeClass("site-nav__list--reverse"); 
             }
        }
    });

});

