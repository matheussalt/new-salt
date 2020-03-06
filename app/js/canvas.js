export default function canvas() {
  if (base_URL !== window.location.href) return null;

  // Create global vars
  let mouseX = 0;
  let mouseY = 0;

  const windowHalfX = window.innerWidth / 2;
  const windowHalfY = window.innerHeight / 2;

  const responsiveHeight = window.innerWidth >= 600 ? window.innerHeight : 400;

  // Create Three.js Scene
  const scene = new THREE.Scene();

  // Create Three.Js Camera
  const camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / responsiveHeight,
    0.1,
    1000
  );
  camera.position.z = 5;

  // Create Full screen WebGL Renderer
  const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
  renderer.setClearColor(0x333333, 0);
  renderer.setSize(window.innerWidth, responsiveHeight);

  const banner = document.querySelector('.banner');
  banner.append(renderer.domElement);

  // Make the project responsive on window resize
  window.addEventListener('resize', () => {
    renderer.setSize(window.innerWidth, responsiveHeight);
    camera.aspect = window.innerWidth / responsiveHeight;

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
  mtlLoader.load(`${template_URL}/3dobj/salt.mtl`, materials => {
    materials.preload();

    // Load the object
    const objLoader = new THREE.OBJLoader();
    objLoader.setMaterials(materials);
    objLoader.load(`${template_URL}/3dobj/salt.obj`, object => {
      scene.add(object);
      salt = object;

      object.position.z -= 200;
    });
  });

  if (window.innerWidth > 600) {
    document.addEventListener('mousemove', onDocumentMouseMove, false);

    function onDocumentMouseMove(event) {
      mouseX = (event.clientX - windowHalfX) / 200;
      mouseY = (event.clientY - windowHalfY) / 200;
    }
  }

  // Create and call render
  let somatoria = 0.01;

  const render = () => {
    requestAnimationFrame(render);

    if (window.innerWidth <= 600) {
      if (mouseX < -3) {
        somatoria = 0.01;
      } else if (mouseX > 3) {
        somatoria = -0.01;
      }
      mouseX = mouseX + somatoria;
    }

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

  return render();
}
