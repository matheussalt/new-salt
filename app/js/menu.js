export default function openMenu() {
  const menuHamb = document.querySelector('[data-menu="button"]');
  const menu = document.querySelector('[data-menu="menu"]');

  if (!menuHamb || !menu) return null;

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.toggle('ativo');
    menuHamb.classList.toggle('ativo');
  });
}
