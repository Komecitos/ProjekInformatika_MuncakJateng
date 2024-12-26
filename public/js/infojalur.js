const buttons = document.querySelectorAll('.info-button');
const popup = document.createElement('div');
popup.classList.add('popup');
popup.innerHTML = `
  <h3>Informasi Jalur</h3>
  <p id="popup-content"></p>
  <a id="popup-link" href="#" target="_blank" style="display: none;">Lihat Lokasi di Google Maps</a>
  <button id="close-popup">Tutup</button>
`;
document.body.appendChild(popup);

buttons.forEach(button => {
  button.addEventListener('click', () => {
    const info = button.getAttribute('data-info').replace(/\n/g, '<br>'); // Ganti \n dengan <br> untuk line break
    const link = button.getAttribute('data-link');

    document.getElementById('popup-content').innerHTML = info;
    const popupLink = document.getElementById('popup-link');
    
    if (link) {
      popupLink.style.display = 'block';
      popupLink.href = link;
    } else {
      popupLink.style.display = 'none';
    }

    popup.style.display = 'block';
  });
});

document.getElementById('close-popup').addEventListener('click', () => {
  popup.style.display = 'none';
});
