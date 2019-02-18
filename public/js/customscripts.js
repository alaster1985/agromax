$(document).ready(function () {
    var exclusivenName = $("#exclusive-name");
    var otherName = $("#other-name");
    var navigation = $(".site-nav__list");
    var languageCode;
    if (window.location.href.split('lang=').pop() === window.location.href) {
        languageCode = 'en_GB';
    } else {
        languageCode = window.location.href.split('lang=').pop().substr(0, 5);
    }
    var languages = {};


    $("select").niceSelect();//decorate selects via the plagin

    $.post('getLanguagesForSelect', {
        _token: $('meta[name="csrf-token"]').attr('content')
    }, function (response) {
        $.each(response, function (key, val) {
            languages[val.code] = val.name;
        });
        fillLanguageDropDown()
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

    function fillLanguageDropDown() {
        $('#selectLanguageDropdown').localizationTool({//generete languages via the plagin
            'defaultLanguage': languageCode,
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
                let asd = window.location.href;
                asd = asd.replace('?lang=' + languageCode, 'uuuuu');
                languageCode = e;
                // if (e === "ar_TN") {
                //     navigation.addClass("site-nav__list--reverse");
                // } else {
                //     navigation.removeClass("site-nav__list--reverse");
                // }
                if (asd === window.location.href) {
                    asd += '?lang=' + languageCode;
                } else {
                    asd = asd.replace('uuuuu', '?lang=' + languageCode);
                }
                window.location.replace(asd);
            }
        });
    }


    $('.products__btn , .products__img-wr').click(function () {
        let href = $(this).attr('href');
        href = href.replace('?lang=en_GB', '?lang=' + languageCode)
        $(this).attr('href', href);
    });

    $('.site-nav__link').click(function () {
        let href = $(this).attr('href');
        // if (href === 'exclusive') {
        //     $(this).attr('href', href + '?lang=en_GB');
        // } else {
        //     $(this).attr('href', href + '?lang=' + languageCode);
        // }
        $(this).attr('href', href + '?lang=' + languageCode);
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

    $("#confirmationForm").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
                maxlength: 100,
            },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 100,
            },
            linkedin: {
                required: true,
                regexp: '^https?://((www|\\w\\w)\\.)?linkedin.com/((in/[^/]+/?)|(pub/[^/]+/((\\w|\\d)+/?){3}))$',
            },
            email: {
                required: true,
                email: true,
                maxlength: 100,
            },
            phone: {
                required: true,
                regexp: '^(\\+)*[0-9]*$',
                minlength: 6,
                maxlength: 20,
            },
            company: {
                minlength: 3,
                maxlength: 100,
            },
        },

        messages: {
            first_name: {
                required: 'Please, set your first name',
                minlength: 'Shorter please, max 100 characters',
                maxlength: 'Very short name. At least 2 characters',
            },
            last_name: {
                required: 'Please, set your last name',
                minlength: 'Shorter please, max 100 characters',
                maxlength: 'Very short name. At least 2 characters',
            },
            linkedin: {
                required: 'Please, set your linkedIn personal page',
                regexp: 'Please, set your current existing linkedIn personal page',
            },
            email: {
                required: 'Please, set your email',
                email: 'Please, follow to the format email',
                maxlength: 'Shorter please, max 100 characters',
            },
            phone: {
                required: 'Please, set your phone number',
                regexp: 'Please, use only numbers fot phone',
                minlength: 'Very short phone number',
                maxlength: 'It is too much numbers for phone',
            },
            company: {
                minlength: 'Very short company name',
                maxlength: 'Shorter please, max 100 characters',
            },
        }
    });

    $("#exclusiveForm").validate({
        rules: {
            product: {
                required: true,
            },
            delivery: {
                required: true,
            },
            amount: {
                required: true,
                digits: true,
                max: 10000,
                min: 10,
            },
            optional: {
                required: true,
                digits: true,
                max: 100000,
                min: 100,
            },
            max: {
                required: true,
                digits: true,
                max: 1000000,
                min: 100,
            },
            otherName: {
                required: function () {
                    return $("#exclusive-name").val() == 1;
                },
                minlength: 3,
                maxlength: 25,
            },
            port: {
                required: true,
                minlength: 5,
                maxlength: 100,
            },
            condition: {
                required: true,
            },
        },

        messages: {
            product: {
                required: 'Please, select the product',
            },
            delivery: {
                required: 'Please, select the Incoterms',
            },
            amount: {
                required: 'Please, set amount',
                digits: 'Please, use only numbers for amount',
                max: 'Seriously, over 10000 tons?',
                min: 'It\'s not enough, set at least 10 tons',
            },
            optional: {
                required: 'Please, set optional price',
                digits: 'Please, use only numbers for optional price',
                max: 'Seriously, over 100000 $$?',
                min: 'It\'s not enough, set at least 100 $$ for this product',
            },
            max: {
                required: 'Please, set max price',
                digits: 'Please, use only numbers max price',
                max: 'Seriously, over 1000000 $$?',
                min: 'It\'s not enough, set at least 100 $$ for this product',
            },
            otherName: {
                minlength: 'Very short other name of product. At least 3 characters',
                maxlength: 'Shorter please, max 25 characters',
            },
            port: {
                required: 'Please, set port',
                minlength: 'Shorter please, max 100 characters',
                maxlength: 'Very short port name. At least 5 characters',
            },
            condition: {
                required: 'Please, select the Condition',
            },
        }
    });

});

