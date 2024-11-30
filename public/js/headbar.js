document.addEventListener('DOMContentLoaded', function () {

    const navbar = document.querySelector('.navbar');
    const sections = document.querySelectorAll('section');

    const navbarColors = {
        main: { background: 'transparent', font: 'white' }, // home
        main2: { background: 'transparent', font: 'black' }, // home
        main3: { background: 'white', font: 'red' }, // home
        main4: {
            background: 'rgba(255, 255, 255, 0.3)',
            font: 'white',
            backdropFilter: 'blur(10px)', // Blur effect for glassmorphism
            borderRadius: '15px', // Rounded corners
            padding: '20px', // Padding for the element
            boxShadow: '0 4px 6px rgba(0, 0, 0, 0.1)', // Subtle shadow for depth
            width: '80%', // Width of the element
            margin: '30px auto', // Center the element
        }, // lawu
        weather1: { background: 'transparent', font: 'transparent' },
        weather2: { background: 'transparent', font: 'transparent' },
    };

    window.addEventListener('scroll', function () {
        let currentSection = null;

        // Check the section currently in view
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 0 && rect.bottom > 0) {
                currentSection = section;
            }
        });

        if (currentSection) {
            const sectionId = currentSection.id;
            const newStyle = navbarColors[sectionId];

            navbar.style.backgroundColor = newStyle.background;
            navbar.style.color = newStyle.font;

            // If on main5, hide the navbar
            if (sectionId === 'weather1') {
                navbar.style.display = 'none';
            } else {
                navbar.style.display = 'block';
            }
        }
    });
});
