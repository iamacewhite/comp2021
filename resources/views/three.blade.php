<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>My first Three.js app</title>
  <style>
    body { margin: 0; }
    canvas { width: 100%; height: 100% }
  </style>
   
</head>
<body>
  {!! Html::script('js/three.min.js'); !!}
  {!! Html::script('js/threex.dynamictexture.js'); !!}
  {!! Html::script('js/Tween.js'); !!}
  
  <script> // Our Javascript will go here.
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    var text = new THREEx.DynamicTexture(512, 512);
    text.context.font = "bolder 90px Verdana";
    text.clear('cyan').drawText("hello", undefined, 256, 'red');
    var text1 = new THREEx.DynamicTexture(512, 512);
    text1.context.font = "bolder 90px Verdana";
    text1.clear('cyan').drawText("world", undefined, 256, 'red');
    var renderer = new THREE.WebGLRenderer({antialias:true}); 
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );
    var geometry = new THREE.BoxGeometry( 1, 1, 1 );
    var material = new THREE.MeshBasicMaterial({color: 'cyan', map:text.texture} );
    var cube = new THREE.Mesh( geometry, material );
    scene.add( cube );
    var geometry1 = new THREE.BoxGeometry( 1, 2, 1 );
    var material1 = new THREE.MeshBasicMaterial({color: 'cyan', map:text1.texture} );
    var cube1 = new THREE.Mesh( geometry1, material1 );
    scene.add( cube1 );
    cube1.position.set(1.5, 0, 0);
    camera.position.z = 5;
    new TWEEN.Tween(cube.position).to({x: 1.5}, 2000).repeat(0).start();
    new TWEEN.Tween(cube1.position).to({x: 0}, 2000).repeat(0).start();
    function render() {
      requestAnimationFrame( render );
      cube.rotation.x += 0.01;
      cube.rotation.y += 0.01;
      cube1.rotation.x += 0.01;
      cube1.rotation.y += 0.01;
      TWEEN.update();
      renderer.render( scene, camera );
    }
    render();
    /*function swapPosition(cube, cube1)
    {
      var temp = cube.position.x;
      cube.position.x = cube1.position.x;
      cube1.position.x = temp;
    }
    render();
    //swapPosition(cube, cube1);
    /*var camera, scene, renderer;
    var geometry, material, mesh;





    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 10000);
    camera.position.z = 1000;

    scene = new THREE.Scene();
    //var text = new THREE.Dynamictexture(100, 100);
    //text.texture = 'hello';
    geometry = new THREE.BoxGeometry(200, 200, 200);
    material = new THREE.MeshBasicMaterial({
        color: 0xff0000,
        wireframe: false,
        //map: text.texture
    });

    mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);

    document.body.appendChild(renderer.domElement);


    requestAnimationFrame(animate);

    mesh.rotation.x += 0.0;
    mesh.rotation.y += 0.0;

    renderer.render(scene, camera);*/


  </script>
</body>

</html>
