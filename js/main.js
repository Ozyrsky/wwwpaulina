document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    const components = [
        'carousel',
        'portfolio', 
        'reviews',
        'navigation'
    ];

    components.forEach(component => {
        if (window[`init${component.charAt(0).toUpperCase() + component.slice(1)}`]) {
            window[`init${component.charAt(0).toUpperCase() + component.slice(1)}`]();
        }
    });
});
