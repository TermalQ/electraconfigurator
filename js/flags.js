document.addEventListener("DOMContentLoaded", function () {
    const flagCheckbox = document.getElementById("flag");
    const flagInputGroup = document.getElementById("flagInputGroup");

    // Funkcja, która ukrywa lub pokazuje input w zależności od stanu checkboxa
    function toggleInputVisibility() {
        if (flagCheckbox.checked) {
            flagInputGroup.classList.remove('d-none')
            flagInputGroup.classList.add('d-block') // Pokazuje pole tekstowe
        } else {
            flagInputGroup.classList.add('d-none'); // Ukrywa pole tekstowe
        }
    }

    // Sprawdzanie stanu checkboxa przy załadowaniu strony
    toggleInputVisibility();

    // Nasłuchuj zmian stanu checkboxa
    flagCheckbox.addEventListener("change", toggleInputVisibility);

    // ==================================================
    // Położenie i wyrównywanie flagi => radio => buttons
    // ==================================================
    const buttons = document.querySelectorAll('.flag');

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const sections = document.querySelectorAll('.accordion-label');
            // Usuń current ze wszystkich label
            sections.forEach(sec => sec.classList.remove('current'));
            
            
            const section = this.closest('.accordion-label');
            const inputFieldFlag = section.querySelector('.form-check-input[id^="flagLabel_"]');
            if (!inputFieldFlag) return;

            inputFieldFlag.checked = true;
            inputFieldFlag.setAttribute('aria-checked', 'true');
            inputFieldFlag.setAttribute('aria-pressed', 'true');
            inputFieldFlag.setAttribute('aria-selected', 'true');
            
            // Dodaj current do aktualnie klikniętego label (Panel, Door)
            section.classList.add('current');
            
            toggleRectAndButton(this);
        });
    });

    function toggleRectAndButton(clickedButton) {
        
        // Ukryj wszystkie flagi na SVG
        const rects = document.querySelectorAll('rect[id^="preview_flag"]');
        rects.forEach(rect => {
            rect.style.visibility = 'hidden';
        });

        // Remove active class from all buttons
        buttons.forEach(button => {
            button.classList.remove('current');
        });

        // Show the corresponding rect element
        const rectId = clickedButton.id.replace('buttonFlag_', 'preview_').replace('buttonText_', 'preview_');
        if (!rectId) return;

        const rect = document.getElementById(rectId);
        if (rect) {
            rect.style.visibility = 'visible';
        }

        
        // Add active class to the clicked button
        clickedButton.classList.add('current');

    }

});