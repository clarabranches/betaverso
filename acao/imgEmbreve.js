const imagens = [
    "./img/anya.png",
    "./img/gato.png",
    "./img/pato.webp",
    "./img/mike.png",
    "./img/doidao.webp",
];

const imagem = document.getElementById("personagem");

const numeroAleatorio = Math.floor(Math.random() * imagens.length);

imagem.src = imagens[numeroAleatorio];