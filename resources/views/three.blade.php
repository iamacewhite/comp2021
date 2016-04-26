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
    var nums = [9,0,1,3,4,5,4,7,8,7];
    var animations = [];//所有动作集合
    var des = [];//每个动作下cube要去的地方
    var positions = [];//每个动作完成后cube应该在的地方
    var moveCubes = [];//每个动作动的是哪个cube
    //var dic = new ActiveXObject("Scripting.Dictionary");
    init();
    makeCubes(nums);
    //render();
    bubbleSort();
    //animate();
    
    //bubbleSort();
    // swap(cubes[0], cubes[1]);
    // swap(cubes[1], cubes[7]);
    

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


    function makeCubes(nums) {
      for (var i = 0; i < 10; i++) {
        var text = new THREEx.DynamicTexture(512, 512);
        text.context.font = "bolder 90px Verdana";
        text.clear('cyan').drawText(nums[i].toString(), undefined, 256, 'red');

        // var geometry = new THREE.BoxGeometry( 100, (i + 1) * 50, 100 );
        var geometry = new THREE.BoxGeometry( 100, 100, 100 );

        var material = new THREE.MeshBasicMaterial({color: 'cyan', map:text.texture} );

        var cube = new THREE.Mesh( geometry, material );
        cubes.push(cube);
        cube.position.x = -700 + i * 130;
        // cube.position.y = -300 + (i + 1) * 25;
        //console.log(cube.position.y);
        //alert(cube);
        positions.push(cube.position.x);

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
      controls.update();
      TWEEN.update();
      render();
    }

    function render() {
      renderer.render( scene, camera );
    }


    function bubbleSort() {

      for (var i = 0; i < cubes.length; i++) {
        for (var j = i + 1; j < cubes.length; j++) {
          if (nums[i] < nums[j]) {
            swap(cubes[i], cubes[j], positions[i], positions[j]);
            var temp = positions[i];
            positions[i] = positions[j];
            positions[j] = temp;
            var temp = nums[i];
            nums[i] = nums[j];
            nums[j] = temp;
          }
          //animate();
        }
      }
    }

    function createAction(cube, positionx, positiony) {
      //TWEEN.removeAll();
      var tweenA = new TWEEN.Tween(cube.position);
      var tweenB = new TWEEN.Tween(cube.position);
      var tweenC = new TWEEN.Tween(cube.position);
      tweenA.to({y: positiony}, 1000).repeat(0);
      tweenB.to({x: positionx}, 1000).repeat(0);
      tweenC.to({y: 0}, 1000).repeat(0);
      tweenA.chain(tweenB);
      tweenB.chain(tweenC);
      //tweenA.start();
      animations.push(tweenA);
      des.push(positionx);
      //moveCubes.push(cube);

    }

    function swap(cube1, cube2, x1, x2) {
      
      createAction(cube1, x2, 1);
      createAction(cube2, x1, -1);
      /*var text = new THREEx.DynamicTexture(512, 512);
        text.context.font = "bolder 90px Verdana";
        text.clear('cyan').drawText(i.toString(), undefined, 256, 'red');
        cube2.material.map = text;*/

    }
    function isComplete(cube, x){
      if(cube.position.x == x)
        {return true;}
      return false;
    }
    function fuck(){
      for(var i = 0; i < animations.length; i++)
      {
        animations[i].delay(i / 2 * 3000);
        animations[i].start();
        i++
        animations[i].delay(Math.floor(i / 2) * 3000);
        animations[i].start();
      }
    }
    fuck();
    animate();

 
    


  </script>
</body>

</html>
