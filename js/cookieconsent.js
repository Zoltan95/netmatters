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
}



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