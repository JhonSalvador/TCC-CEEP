let search = document.querySelector('#iconperfil');

document.querySelector('#iconperfil').onclick = () => {
    perfil_box.classList.toggle('active');
    perfil_box.classList.remove('active');
}

window.onscroll = () => {
    perfil_box.classList.toggle('active');
    perfil_box.classList.remove('active');
}