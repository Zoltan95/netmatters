const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
}

const storageType = cookieStorage;
const consentPropertyName = 'netmatters_cookie_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const body = document.getElementById('body');
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
        body.classList.remove('cookie-active');
    }

    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
        consentPopup.classList.remove('hidden');
        body.classList.add('cookie-active');
    }

    $("#consent-continue").on( "click tap", function() { 
        $('.cookie-settings').css("display", "none");
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
        body.classList.remove('cookie-active');
    });

    $(".btn--cookie-settings").on( "click tap", function() { 
        $('#consent-popup').removeClass('hidden');
        body.classList.add('cookie-active');
    });

    $("#consent-cancel").on( "click tap", function() { 
        $('.cookie-settings').css("display", "none");
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
        body.classList.remove('cookie-active');
    });
}

$("#cookiewindow").on( "click tap", function() { 
    $('.cookie-settings').css("display", "block");
});

$(".pointer").on( "click tap", function() { 
    if ($(".pointer span").first().text() === "+") {
        $(".pointer span").first().text("-");
        $(this).parent().parent(".no-hover").next().css('display', 'table-row');
    } else {
        $(".pointer span").first().text("+");
        $(this).parent().parent(".no-hover").next().css('display', 'none');
    }
});

$("#detailedpref").on( "click tap", function() { 
    if ($("#detailedpref").text() === "Show detailed preferences") {
        $("#detailedpref").text("Hide detailed preferences");
        $(".table table").css('display', 'table');
    } else {
        $("#detailedpref").text("Show detailed preferences");
        $(".table table").css('display', 'none');
    }
});



//Local Storage
/*
const storageType = localStorage;
const consentPropertyName = 'netmatters_cookie_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    if (shouldShowPopup()) {
        const consent = confirm('Blaablabla')
        if (consent) {
            saveToStorage();
        }
    }
}
*/