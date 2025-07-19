// Catalog Tab Switcher
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.catalog-tabs button');
    const categories = document.querySelectorAll('.catalog-category');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Deactivate all buttons and hide all categories
            buttons.forEach(btn => btn.classList.remove('active'));
            categories.forEach(category => category.style.display = 'none');

            // Activate clicked button and show the corresponding category
            button.classList.add('active');
            const tab = button.getAttribute('data-tab');
            const activeCategory = document.getElementById(tab);
            activeCategory.style.display = 'flex';
        });
    });
});
