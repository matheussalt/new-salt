function openMenu() {
  const menuHamb = document.querySelector('[data-menu="button"]');
  const menu = document.querySelector('[data-menu="menu"]');

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.toggle('ativo');
    menuHamb.classList.toggle('ativo');
  });
}
openMenu();
