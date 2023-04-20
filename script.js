const mainmenu = document.querySelector('.unordered');
const openmenu = document.querySelector('.openmenu');
const closemenu = document.querySelector('.closemenu');

openmenu.addEventListener('click', show);
closemenu.addEventListener('click', close);

function show(){
    mainmenu.style.display='flex';
    mainmenu.style.top = '0';
}

function close(){
    mainmenu.style.top= '-100%';
}