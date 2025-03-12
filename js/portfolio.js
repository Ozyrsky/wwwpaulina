function initPortfolio() {
    const portfolioGrid = document.querySelector('.portfolio-grid');
    const filterBtns = document.querySelectorAll('.portfolio-filter .filter-btn');
    const totalImages = 38;
    let currentFilter = 'all';
    
    // Create portfolio items
    for (let i = 1; i <= totalImages; i++) {
        const item = document.createElement('div');
        item.className = 'portfolio-item';
        item.dataset.index = i - 1;
        
        const img = document.createElement('img');
        img.src = `assets/images/portfolio/${i}.png`;
        img.alt = `Portfolio ${i}`;
        
        const overlay = document.createElement('div');
        overlay.className = 'portfolio-overlay';
        
        const title = document.createElement('h3');
        title.textContent = getCategoryTitle(currentFilter);
        
        overlay.appendChild(title);
        item.appendChild(img);
        item.appendChild(overlay);
        portfolioGrid.appendChild(item);
        
        item.addEventListener('click', () => openLightbox(i - 1));
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.filter;
            filterPortfolio(category);
            
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    function filterPortfolio(category) {
        currentFilter = category;
        const items = document.querySelectorAll('.portfolio-item');
        items.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function getCategoryTitle(category) {
        switch(category) {
            case 'brwi': return 'Stylizacja brwi';
            case 'rzesy': return 'Stylizacja rzęs';
            case 'zabiegi': return 'Zabiegi pielęgnacyjne';
            default: return 'Stylizacja';
        }
    }
}
