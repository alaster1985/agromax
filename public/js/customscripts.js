$(document).ready(function () {
    var exclusivenName = $("#exclusive-name");
    var otherName = $("#other-name");
    var navigation = $(".site-nav__list");
    var languageCode = 'en_GB';
    var languages = {};


    $("select").niceSelect();//decorate selects via the plagin

    $.post('getLanguagesForSelect', {
        _token: $('meta[name="csrf-token"]').attr('content')
    }, function (response) {
        $.each(response, function (key, val) {
            languages[val.code] = val.name;
        });
        fillLanguageSelect()
    });

    exclusivenName.on("change", function () {//show extra  input for other culture
        if (exclusivenName.val() == 1) {
            otherName.css("display", "table");
            // otherName.find('.other').prop('required',true);
        } else {
            otherName.css("display", "none");
            // otherName.find('.other').prop('required',false);
        }
    });

    // languages.ar_TN = 'نائب عينة';
    // languages.de_DE = 'Germany';
    // languages.tr_TR = 'Turkey';
    // languages.it_IT = 'Italy';
    // languages.fr_FR = 'France';

    function fillLanguageSelect() {
        $('#selectLanguageDropdown').localizationTool({//generete languages via the plagin
            'defaultLanguage': 'en_GB',
            'showFlag': true,
            'showCountry': false,
            'showLanguage': true,
            'languages': {},
            'strings': {
                '#selectLanguageDropdown': languages
                // '#selectLanguageDropdown': {
                //     'ar_TN': 'نائب عينة',
                //     'de_DE': 'Germany',
                //     'tr_TR': 'Turkey',
                //     'it_IT': 'Italy',
                //     'fr_FR': 'France',
                // }
            },
            onLanguageSelected: function (e) {
                languageCode = e;
                if (e === "ar_TN") {
                    navigation.addClass("site-nav__list--reverse");
                } else {
                    navigation.removeClass("site-nav__list--reverse");
                }
            }
        });
    }

    $('.products__btn , .products__img-wr').click(function () {
        var href = $(this).attr('href');
        $(this).attr('href', href + '&lang=' + languageCode + '&');
    });

    var modalOverlay = $(".modal-overlay");
    var modalConfirm = $(".modal__confirm");
    var modalCloseBTn = $(".modal__confirm-close");

    var showModals = function () {//show modal
        modalConfirm.addClass("active");
        modalOverlay.addClass("active");
    };

    // showModals();// use it to show modal
    modalOverlay.on("click", function () {
        modalConfirm.removeClass("active");
        modalOverlay.removeClass("active");
    });
    modalCloseBTn.on("click", function () {
        modalOverlay.removeClass("active");
        modalConfirm.removeClass("active");
    });

});

