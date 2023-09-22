const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const botaotema = document.querySelector(".botaotema");

menuBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'none';
});

botaotema.addEventListener('click', () =>{
    document.body.classList.toggle('variaveis-tema-claro');

    botaotema.querySelector('i:nth-child(1)').classList.toggle('active');
    botaotema.querySelector('i:nth-child(2)').classList.toggle('active');
});

closeBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'none';
});