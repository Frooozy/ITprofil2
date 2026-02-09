// Přepínač tmavého a světlého režimu
const toggleBtn = document.getElementById('theme-toggle');
const body = document.body;

toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    // Změna textu tlačítka podle režimu
    if (body.classList.contains('dark-mode')) {
        toggleBtn.textContent = 'Přepnout na světlý režim';
    } else {
        toggleBtn.textContent = 'Přepnout na tmavý režim';
    }
});

// Malý bonus: Pozdrav v konzoli
console.log("Vítejte v mém IT profilu!");