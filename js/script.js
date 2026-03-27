document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.qty-input');

    inputs.forEach(input => {
        input.addEventListener('input', () => {
            console.log("Quantity changed");
        });
    });
});