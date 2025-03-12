function initReviews() {
    const reviewsGrid = document.querySelector('.reviews-grid');
    const reviewsFilter = document.querySelectorAll('.reviews-filter .filter-btn');
    const reviewsPerPage = 6;
    let currentPage = 1;

    // Generate sample reviews
    const totalReviews = 987;
    const reviewsData = generateReviewsData(totalReviews);

    function generateReviewsData(count) {
        const reviews = [];
        const services = [
            'Stylizacja brwi', 'Stylizacja rzęs', 'Stymulatory tkankowe',
            'Mezoterapia', 'Depilacja woskiem', 'Piercing'
        ];
        
        for (let i = 1; i <= count; i++) {
            reviews.push({
                id: i,
                rating: Math.floor(Math.random() * 2) + 4,
                service: services[Math.floor(Math.random() * services.length)],
                content: generateLoremIpsum()
            });
        }
        return reviews;
    }

    function displayReviews(page, filter = 'all') {
        const start = (page - 1) * reviewsPerPage;
        const end = start + reviewsPerPage;
        const filteredReviews = filterReviews(reviewsData, filter);
        
        reviewsGrid.innerHTML = '';
        filteredReviews.slice(start, end).forEach(review => {
            const reviewElement = createReviewElement(review);
            reviewsGrid.appendChild(reviewElement);
        });

        updatePagination(Math.ceil(filteredReviews.length / reviewsPerPage));
    }

    reviewsFilter.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            currentPage = 1;
            displayReviews(currentPage, filter);
            
            reviewsFilter.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Initial display
    displayReviews(currentPage);
}

function generateLoremIpsum() {
    const texts = [
        "Świetna obsługa i profesjonalne podejście.",
        "Jestem bardzo zadowolona z efektu.",
        "Polecam serdecznie, najlepszy salon w okolicy!",
        "Wspaniała atmosfera i świetne wykonanie.",
        "Na pewno wrócę!"
    ];
    return texts[Math.floor(Math.random() * texts.length)];
}
