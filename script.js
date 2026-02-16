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

// Načtení dat z externího JSON souboru
fetch('profile.json')
    .then(response => response.json()) // Převedení odpovědi na JSON objekt
    .then(data => {
        // 1. Vyplnění jména do <h1>
        document.getElementById('name').textContent = data.name;

        // 2. Vyplnění dovedností (skills) do <ul>
        const skillsUl = document.getElementById('skills');
        data.skill.forEach(skillName => {
            const li = document.createElement('li');
            li.textContent = skillName;
            skillsUl.appendChild(li);
        });

        // 3. Vyplnění zájmů (interests) do <section>
        const interestsSection = document.getElementById('interests');
        // Vytvoříme odstavce nebo seznam pro zájmy
        data.interests.forEach(interest => {
            const p = document.createElement('p');
            p.textContent = interest;
            interestsSection.appendChild(p);
        });
    })
    .catch(error => {
        console.error('Chyba při načítání JSONu:', error);
    });