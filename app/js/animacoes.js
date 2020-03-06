export default function animacoes() {
  const animaItem = document.querySelectorAll('[data-animar]');

  animaItem.forEach(item => {
    if (item.getBoundingClientRect().top < window.innerHeight)
      return item.classList.add('animar');

    window.addEventListener('scroll', e => {
      const distTop = window.innerHeight * 0.85;

      if (item.getBoundingClientRect().top < distTop)
        item.classList.add('animar');
    });
  });

  const animarComTempo = document.querySelectorAll('[data-anima-tempo]');

  window.setTimeout(() => {
    animarComTempo.forEach(item => {
      item.classList.add('animar');
    });
  }, 500);
}
