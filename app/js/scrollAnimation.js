import ScrollMagic from 'ScrollMagic'; // Or use scrollmagic-with-ssr to avoid server rendering problems
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';
import gsap, { TweenMax, TimelineMax, TimelineLite } from 'gsap'; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default function scrollAnimation() {
  const tween = new TimelineLite();

  tween.add(
    gsap.to('.logo-footer', 1, {
      transform: `translate3d(0, 0, 0)`,
      ease: Power1.easeInOut,
    })
  );

  const controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    triggerElement: '.footer',
    duration: 200,
  })
    .setTween(tween)
    .addTo(controller);
}
