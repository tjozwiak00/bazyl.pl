const banners = document.querySelectorAll('.banner');
const info = document.querySelectorAll('#info');

window.onload = function (){
    info.children[1].style.display = 'none';
}
banners.forEach((banner) => {
    banner.addEventListener('mouseover', () => {
        banner.style.height = '150px';
    });

    banner.addEventListener('mouseout', () => {
        banner.style.height = '50px';
    });
});

info.forEach((info) => {
    info.addEventListener('mouseover', () => {
        info.style.height = 'auto';
        info.children[1].style.display = 'block';
    });

    info.addEventListener('mouseout', () => {
        info.style.height = '50px';
        info.children[1].style.display = 'none';

    });
});

document.querySelectorAll('.menu-icon')[0].addEventListener('click', () => {
    document.querySelector('#naw').style.display = 'block';
})