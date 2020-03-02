// Create global vars
let mouseX = 0,
  mouseY = 0;

let windowHalfX = window.innerWidth / 2,
  windowHalfY = window.innerHeight / 2;

// Create Three.js Scene
const scene = new THREE.Scene();

// Create Three.Js Camera
const camera = new THREE.PerspectiveCamera(
  75,
  window.innerWidth / window.innerHeight,
  0.1,
  1000
);
camera.position.z = 25;

// Create Full screen WebGL Renderer
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setClearColor(0x333333, 0);
renderer.setSize(window.innerWidth, window.innerHeight);

document.body.append(renderer.domElement);

// Make the project responsive on window resize
window.addEventListener('resize', () => {
  renderer.setSize(window.innerWidth, window.innerHeight);
  camera.aspect = window.innerWidth / window.innerHeight;

  camera.updateProjectionMatrix();
});

// Add a Light
const light = new THREE.PointLight(0xffffff, 1, 600);
light.position.set(90, 90, 15);
const light2 = new THREE.PointLight(0xffffff, 0.6, 1000);
light2.position.set(10, -300, 240);
const light3 = new THREE.PointLight(0xffffff, 0.6, 1000);
light3.position.set(-600, -300, 0);
scene.add(light, light2, light3);

// Define object variable
let salt;

// Create a material
const mtlLoader = new THREE.MTLLoader();
mtlLoader.load('../../3dobj/salt.mtl', materials => {
  materials.preload();

  // Load the object
  const objLoader = new THREE.OBJLoader();
  objLoader.setMaterials(materials);
  objLoader.load('../../3dobj/salt.obj', object => {
    scene.add(object);
    salt = object;

    object.position.z -= 200;
  });
});

document.addEventListener('mousemove', onDocumentMouseMove, false);

function onDocumentMouseMove(event) {
  mouseX = (event.clientX - windowHalfX) / 200;
  mouseY = (event.clientY - windowHalfY) / 200;
}

// Create and call render
const render = () => {
  requestAnimationFrame(render);

  if (salt) {
    salt.rotation.y = (-mouseX - camera.position.x) * 0.05;
    salt.rotation.x = (-mouseY - camera.position.y) * 0.05;
    light.position.set(
      (mouseX - camera.position.x) * 100,
      (-mouseY - camera.position.y) * 100,
      15
    );
  }

  camera.lookAt(scene.position);

  renderer.render(scene, camera);
};

render();
