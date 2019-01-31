$(document).ready(function(){
	var exclusivenName = $("#exclusive-name");
	var otherName = $("#other-name");
    var navigation = $(".site-nav__list");

    $("select").niceSelect();//decorate selects via the plagin

	exclusivenName.on("change",function(){//show extra  input for other culture
		if(exclusivenName.val() === "Other"){
			otherName.css("display" , "table");
			otherName.find('.other').prop('required',true);
		}else{
			otherName.css("display" , "none");
            otherName.find('.other').prop('required',false);
		}
	});

    $('#selectLanguageDropdown').localizationTool({//generete languages via the plagin
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
                'it_IT' : 'Italy',
                'fr_FR' : "France"
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

    var modalOverlay = $(".modal-overlay");
    var modalConfirm = $(".modal__confirm");
    var modalCloseBTn = $(".modal__confirm-close");

    var showModals = function(){//show modal
        modalConfirm.addClass("active");
        modalOverlay.addClass("active");
    };

    // showModals();// use it to show modal
    modalOverlay.on("click",function(){
        modalConfirm.removeClass("active");
        modalOverlay.removeClass("active");
    });
    modalCloseBTn.on("click",function(){
        modalOverlay.removeClass("active");
        modalConfirm.removeClass("active");
    });

});
