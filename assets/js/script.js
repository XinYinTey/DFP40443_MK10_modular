document.addEventListener('DOMContentLoaded', function () {

    const inputs = document.querySelectorAll('.qty-input');
    const totalEl = document.getElementById('total-price');

    function calculateTotal() {
        let total = 0;

        inputs.forEach(input => {
            let qty = parseInt(input.value) || 0;
            let price = parseFloat(input.dataset.price) || 0;
            total += qty * price;
        });

        if (totalEl) {
            totalEl.textContent = "RM " + total.toFixed(2);
        }
    }

    inputs.forEach(i => i.addEventListener('input', calculateTotal));
});