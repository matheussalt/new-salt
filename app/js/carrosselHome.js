export default function carrosselHome() {
  const carrosselWrapper = document.querySelector('.gallery-wrapper');
  const carrosselItems = document.querySelectorAll('.gallery img');
  const buttonLeft = document.querySelector('.gallery-left');
  const buttonRight = document.querySelector('.gallery-right');
  let position = 0;

  setSize(carrosselItems, carrosselWrapper.getBoundingClientRect().width);

  window.addEventListener('resize', () =>
    setSize(carrosselItems, carrosselWrapper.getBoundingClientRect().width)
  );

  buttonLeft.addEventListener('click', e => {
    e.preventDefault();

    if (position > 0) {
      position--;

      setTranslate(carrosselItems, position, 10);
    }
  });

  buttonRight.addEventListener('click', e => {
    e.preventDefault();

    if (position < carrosselItems.length - 1 && window.innerWidth <= 600) {
      position++;

      setTranslate(carrosselItems, position, 10);
    } else if (
      position < carrosselItems.length - 3 &&
      window.innerWidth <= 1050
    ) {
      position++;

      setTranslate(carrosselItems, position, 10);
    } else if (position < carrosselItems.length - 4) {
      position++;

      setTranslate(carrosselItems, position, 10);
    }
  });
}

function setSize(targets, size) {
  if (window.innerWidth <= 600) {
    return targets.forEach(item => {
      item.style.setProperty('width', `${size}px`);
    });
  } else if (window.innerWidth <= 1050) {
    return targets.forEach(item => {
      item.style.setProperty('width', `${size / 3}px`);
    });
  } else {
    return targets.forEach(item => {
      item.style.setProperty('width', `${size / 4}px`);
    });
  }
}

function setTranslate(targets, atualPosition, distance = 0) {
  targets.forEach(item =>
    item.style.setProperty(
      'transform',
      `translate3d(calc(-${100 * atualPosition}% - ${distance *
        atualPosition}px), 0, 0)`
    )
  );
}
