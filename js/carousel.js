function initCarousel() {
    const carousel = document.querySelector('.carousel');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const totalImages = 31;
    let currentIndex = 0;
    
    // Create carousel items
    for (let i = 1; i <= totalImages; i++) {
        const item = document.createElement('div');
        item.className = 'carousel-item';
        item.dataset.index = i - 1;
        
        const img = document.createElement('img');
        img.src = `assets/images/polecaja/${i}.png`;
        img.alt = `Opinia klienta ${i}`;
        
        item.appendChild(img);
        carousel.appendChild(item);
        
        item.addEventListener('click', function() {
            if (this.classList.contains('active')) {
                openLightbox(i - 1);
            } else {
                currentIndex = parseInt(this.dataset.index);
                updateCarousel();
            }
        });
    }

    function updateCarousel() {
        const items = document.querySelectorAll('.carousel-item');
        items.forEach((item, index) => {
            item.className = 'carousel-item';
            const position = calculatePosition(index);
            if (position === 0) {
                item.classList.add('active');
            } else if (position >= -2 && position <= 2) {
                item.classList.add(`position-${position}`);
            } else {
                item.classList.add('hidden');
            }
        });
    }

    function calculatePosition(index) {
        let position = index - currentIndex;
        if (position < -2) position += totalImages;
        if (position > 2) position -= totalImages;
        return position;
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });

    updateCarousel();
    
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    }, 5000);
}
