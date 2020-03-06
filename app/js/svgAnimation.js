export default function svgAnimation(id) {
  const vector = document.querySelector(id);
  const circle1 = document.querySelector(`${id} .circle1`);
  const circle2 = document.querySelector(`${id} .circle2`);
  const circle3 = document.querySelector(`${id} .circle3`);

  const circle1Position = getInitialTransform(circle1, 'x');
  const circle2Position = getInitialTransform(circle2, 'x');
  const circle3Position = getInitialTransform(circle3, 'y');

  window.addEventListener('scroll', () => {
    const vectorDistance = vector.getBoundingClientRect().top;

    console.log();

    if (vectorDistance < 280) {
      setPosition(circle1, circle1Position, -(vectorDistance - 280), 'x', '-');
      setPosition(circle2, circle2Position, -(vectorDistance - 280), 'y', '+');
      setPosition(circle3, circle3Position, -(vectorDistance - 280), 'x', '+');
    }
  });
}

function getInitialTransform(target) {
  return target
    .getAttribute('transform')
    .replace('translate(', '')
    .replace(')', '')
    .split(' ');
}

function setPosition(target, initialValue, scrollValue, axis, direction) {
  const newScrollValue = direction === '+' ? scrollValue : -scrollValue;

  const xValue =
    axis === 'x' ? +initialValue[0] + newScrollValue : initialValue[0];
  const yValue =
    axis === 'y' ? +initialValue[1] + newScrollValue : initialValue[1];

  target.style.setProperty(
    'transform',
    `translate3d(${xValue}px, ${yValue}px, 0)`
  );
}
