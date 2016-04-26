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
  {!! Html::script('js/TrackballControls.js'); !!}

  <script> // Our Javascript will go here.
    var camera, scene, renderer;
    var cubes = [];
    var nums = [0,1,2,3,4,5,6,7,8,9];
    var queue = [];
    init();
    makeCubes();
    // bubbleSort(cubes, nums);
    swap(cubes[0], cubes[1]);
    swap(cubes[1], cubes[7]);
    animate();
    //render();
    // debugger;
    //
    //render();

    function init() {
      // camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 1000);
      camera = new THREE.OrthographicCamera( window.innerWidth / -2,  window.innerWidth / 2, window.innerHeight / 2, window.innerHeight / -2, 1, 1000);
      camera.position.z = 500;

      controls = new THREE.TrackballControls( camera );
      controls.addEventListener('change', render);

      scene = new THREE.Scene();

      renderer = new THREE.WebGLRenderer({antialias:true});
      renderer.setSize( window.innerWidth, window.innerHeight );
      document.body.appendChild( renderer.domElement );
    }

    function makeCubes() {
      for (var i = 0; i < 10; ++i) {
        var text = new THREEx.DynamicTexture(512, 512);
        text.context.font = "bolder 90px Verdana";
        text.clear('cyan').drawText(i.toString(), undefined, 256, 'red');

        // var geometry = new THREE.BoxGeometry( 100, (i + 1) * 50, 100 );
        var geometry = new THREE.BoxGeometry( 100, 100, 100 );

        var material = new THREE.MeshBasicMaterial({color: 'cyan', map:text.texture} );

        var cube = new THREE.Mesh( geometry, material );
        cubes.push(cube);
        cube.position.x = -700 + i * 130;
        // cube.position.y = -300 + (i + 1) * 25;
        console.log(cube.position.y);
        scene.add( cube );
      }
    }

    //new TWEEN.Tween(cube.position).to({x: 1.5}, 2000).repeat(0).start();
    //new TWEEN.Tween(cube1.position).to({x: 0}, 2000).repeat(0).start();

    function animate() {
      requestAnimationFrame( animate );
      cubes.map(function(cube) {
         cube.rotation.x += 0.01;
         cube.rotation.y += 0.01;
         cube.scale
      });
      // var params = queue.shift();
      // swap(cubes[params[0]], cubes[params[1]]);
      // debugger;
      if (queue.length != 0) {
        var action = queue.shift();
        if (action.start() == true) {

        }
      }
      swap(cube, cube1. swap(cube1, cube2));
      TWEEN.update();
      controls.update();
      render();
    }

    function render() {
      renderer.render( scene, camera );
    }

    function bubbleSort(cubes, nums) {
      for (var i = 0; i < cubes.length; i += 1) {
        for (var j = i; j < cubes.length; j += 1) {
          if (nums[i] < nums[j]) {
            //swap(cubes[i], cubes[j]);
            queue.push([i, j]);
            var tempCube = cubes[i];
            cubes[i] = cubes[j];
            cubes[j] = tempCube;
            var tempNum = nums[i];
            nums[i] = nums[j];
            nums[j] = tempNum;
            console.log(nums);
            console.log(cubes);
          }
        }
      }
    }

    function createAction(cube, cube1,positionx, positiony, positionx1, positiony1) {
      TWEEN.removeAll();
      var tweenA = new TWEEN.Tween(cube.position);
      var tweenB = new TWEEN.Tween(cube.position);
      var tweenC = new TWEEN.Tween(cube.position);
      tweenA.to({y: positiony}, 1000).repeat(0);
      tweenB.to({x: positionx}, 1000).repeat(0);
      tweenC.to({y: 0}, 1000).repeat(0).onComplete(function() {
        return true;
      });
      tweenA.chain(tweenB);
      tweenB.chain(tweenC);
      var tweenA1 = new TWEEN.Tween(cube1.position);
      var tweenB1 = new TWEEN.Tween(cube1.position);
      var tweenC1 = new TWEEN.Tween(cube1.position);
      tweenA1.to({y: positiony1}, 1000).repeat(0);
      tweenB1.to({x: positionx1}, 1000).repeat(0);
      tweenC1.to({y: 0}, 1000).repeat(0);
      tweenA1.chain(tweenB1);
      tweenB1.chain(tweenC1);
      queue.push([tweenA, tweenA1]);
    }

    function swap(cube1, cube2) {
      var x1 = cube1.position.x;
      var x2 = cube2.position.x;
      createAction(cube1, cube2, x2, 1, x1, -1)
    }

    function doNothing() {
      console.log("doing nothing");
    }
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
