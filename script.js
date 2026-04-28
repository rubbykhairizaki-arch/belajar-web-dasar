function scrollToProduk() {
    document.getElementById("produk").scrollIntoView({
        behavior: "smooth"
    });
}

// Animasi muncul saat scroll
window.addEventListener("scroll", function() {
    const cards = document.querySelectorAll(".card");

    cards.forEach(card => {
        const position = card.getBoundingClientRect().top;
        const screen = window.innerHeight;

        if(position < screen - 100) {
            card.style.opacity = 1;
            card.style.transform = "translateY(0)";
        }
    });
});
