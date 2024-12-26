function showInfo(gunung) {
    const popup = document.getElementById('popup');
    const popupText = document.getElementById('popup-text');

    popupText.textContent = `Informasi tentang ${gunung}`;
    popup.style.display = 'block';
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
}

