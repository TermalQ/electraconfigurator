document.addEventListener('DOMContentLoaded', function () {
    const colorItems = document.querySelectorAll('#packColor li a');
    const frontPanel = document.getElementById('front-panel');
    const leftPanel = document.getElementById('left-panel');
    const selectedColorPack = document.getElementById('selectedColorPack');
    const glitterLayer = document.getElementById('glitter-layer'); // warstwa brokatu w SVG

    // Ustawienie koloru i widoczności brokatu
    function applyColorAndGlitter(item) {
        const color = item.getAttribute('data-color');
        const filterMode = item.getAttribute('data-panel-mode');

        const isBrocate = item.getAttribute('data-category') === 'brocate';

        // Ustaw kolor
        if (frontPanel) {
            frontPanel.setAttribute('fill', color);
            frontPanel.setAttribute('style', filterMode);
        }

        if (leftPanel) leftPanel.setAttribute('fill', color);
        if (selectedColorPack) selectedColorPack.style.backgroundColor = color;

        // Pokaż lub ukryj brokat
        if (glitterLayer) {
            glitterLayer.style.display = isBrocate ? 'block' : 'none';
        }
    }

    // Ustaw kolor domyślny (jeśli istnieje)
    const defaultColorItem = document.querySelector('#packColor li a[data-default="1"]');
    if (defaultColorItem) {
        applyColorAndGlitter(defaultColorItem);
    }

    // Obsługa kliknięcia w kolor
    colorItems.forEach(item => {
        item.addEventListener('click', function (event) {
            event.preventDefault();
            applyColorAndGlitter(this);
        });
    });
});
