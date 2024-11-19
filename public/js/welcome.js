document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel');
    const items = Array.from(document.querySelectorAll('.carousel-item'));
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;

    // Clone the first and last items to create an infinite loop effect
    const firstClone = items[0].cloneNode(true);
    const lastClone = items[items.length - 1].cloneNode(true);

    carousel.appendChild(firstClone);
    carousel.insertBefore(lastClone, items[0]);

    // Adjust index and position for the initial setup
    let currentTranslate = -200;
    carousel.style.transform = `translateX(${currentTranslate}px)`;

    // Event listeners for buttons
    nextBtn.addEventListener('click', () => {
        moveToNextItem();
    });

    prevBtn.addEventListener('click', () => {
        moveToPrevItem();
    });

    // Automatically move to the next item every 1 second (1000 ms)
    setInterval(() => {
        moveToNextItem();
    }, 1000);

    function moveToNextItem() {
        if (currentIndex >= items.length - 1) {
            currentIndex = 0;
            currentTranslate = -200;
            carousel.style.transition = 'none';
            carousel.style.transform = `translateX(${currentTranslate}px)`;
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease';
                currentTranslate -= 200;
                carousel.style.transform = `translateX(${currentTranslate}px)`;
                currentIndex++;
            }, 20);
        } else {
            currentIndex++;
            currentTranslate -= 220;
            carousel.style.transform = `translateX(${currentTranslate}px)`;
        }
    }

    function moveToPrevItem() {
        if (currentIndex <= 0) {
            currentIndex = items.length - 1;
            currentTranslate = -(220 * items.length);
            carousel.style.transition = 'none';
            carousel.style.transform = `translateX(${currentTranslate}px)`;
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease';
                currentTranslate += 220;
                carousel.style.transform = `translateX(${currentTranslate}px)`;
                currentIndex--;
            }, 20);
        } else {
            currentIndex--;
            currentTranslate += 220;
            carousel.style.transform = `translateX(${currentTranslate}px)`;
        }
    }
});
