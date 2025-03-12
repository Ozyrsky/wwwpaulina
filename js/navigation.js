function initNavigation() {
    const header = document.querySelector('header');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const navLinks = document.querySelectorAll('nav ul li a, .mobile-menu ul li a');

    // Scroll handler
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        setActiveLink();
    });

    // Mobile menu toggle
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        const icon = mobileMenuToggle.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });

    // Smooth scroll
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
                mobileMenu.classList.remove('active');
            }
        });
    });

    function setActiveLink() {
        const scrollPosition = window.scrollY;
        document.querySelectorAll('section').forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && 
                scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => link.classList.remove('active'));
                document.querySelectorAll(`a[href="#${sectionId}"]`)
                    .forEach(link => link.classList.add('active'));
            }
        });
    }
}
