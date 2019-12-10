function modal() {
  const imgArray = document.querySelectorAll('[data-modal]');
  const modal = document.querySelector('#modal');
  const body = document.querySelector('body');

  if (!imgArray) return null;

  imgArray.forEach(img => {
    img.addEventListener('click', e => {
      e.preventDefault();

      body.style.setProperty('overflow-y', 'hidden');

      modal.classList.add('ativo');

      const modalWrapper = document.createElement('div');
      s;
      modalWrapper.innerHTML = `
        <img src="${img.getAttribute('src')}" alt="${img.getAttribute(
        'alt'
      )}" />
      `;

      const closeModal = document.createElement('button');
      closeModal.innerText = 'x';
      closeModal.addEventListener('click', e => {
        e.preventDefault();

        body.style.setProperty('overflow-y', 'scroll');

        modal.classList.remove('ativo');
        modal.innerHTML = '';
      });

      modalWrapper.appendChild(closeModal);
      modal.appendChild(modalWrapper);

      modal.addEventListener('click', e => {
        if (e.target === e.currentTarget) {
          body.style.setProperty('overflow-y', 'scroll');

          modal.classList.remove('ativo');
          modal.innerHTML = '';
        }
      });
    });
  });
}
modal();
