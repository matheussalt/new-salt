import './modernizr';
import animacoes from './animacoes';
import canvas from './canvas';
import carrosselHome from './carrosselHome';
import menu from './menu';
import scrollAnimation from './scrollAnimation';
import svgAnimation from './svgAnimation';

animacoes();
canvas();
carrosselHome();
menu();
scrollAnimation();

svgAnimation('#effect');
svgAnimation('#effect2');
svgAnimation('#effect3');
