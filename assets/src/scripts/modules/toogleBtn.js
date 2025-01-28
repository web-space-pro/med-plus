
const toggleButtons = document.querySelectorAll("[data-toggle]");
toggleButtons.forEach(button => {
    const originalText = button.textContent;
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const targetSelector = button.getAttribute("data-toggle");
        const targetElement = document.querySelectorAll(`.${targetSelector}`);

        if (targetElement.length > 0) {
            targetElement.forEach(element => {
                element.classList.toggle("hidden");
            });
        }

        if (button.textContent === originalText) {
            button.textContent = "Скрыть";
        } else {
            button.textContent = originalText;
        }
    });
});