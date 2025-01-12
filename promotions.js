// Fetch promotions from the PHP backend
async function fetchPromotions() {
    try {
        const response = await fetch('http://localhost:8080/project/promotions.php');
        const promotions = await response.json();

        const promoContainer = document.querySelector('.right-nav');
        promoContainer.innerHTML = '<h3>Promotions</h3>';

        promotions.forEach(promo => {
            const promoBanner = document.createElement('div');
            promoBanner.classList.add('promo-banner');
            promoBanner.innerHTML = `
                <img src="${promo.image}" alt="Promotion">
                <p>${promo.text}</p>
            `;
            promoContainer.appendChild(promoBanner);
        });
    } catch (error) {
        console.error('Error fetching promotions:', error);
    }
}

// Call fetchPromotions on page load
document.addEventListener('DOMContentLoaded', fetchPromotions);
