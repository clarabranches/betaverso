// EXPANDIR CARD
document.querySelectorAll(".comando-card").forEach(card => {
    card.addEventListener("click", (e) => {

        // Evita conflito com botão copiar
        if (e.target.classList.contains("copy-btn")) return;

        card.classList.toggle("active");
    });
});


// COPIAR COMANDO
document.querySelectorAll(".copy-btn").forEach(btn => {
    btn.addEventListener("click", (e) => {
        e.stopPropagation();

        const texto = btn.getAttribute("data-copy");

        navigator.clipboard.writeText(texto).then(() => {
            btn.innerText = "✅";

            setTimeout(() => {
                btn.innerText = "📋";
            }, 1500);
        });
    });
});