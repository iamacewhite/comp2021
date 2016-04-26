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
    cube.position.set(0, 0, 0);
    var geometry1 = new THREE.BoxGeometry( 1, 2, 1 );
    var material1 = new THREE.MeshBasicMaterial({color: 'cyan', map:text1.texture} );
    var cube1 = new THREE.Mesh( geometry1, material1 );
    scene.add( cube1 );
    cube1.position.set(1.5, 0, 0);
    camera.position.z = 5;
    
    /*tweenA.to({y: -1}, 1000).repeat(0);
    tweenB.to({x: x}, 1000).repeat(0);
    tweenC.to({y: 0}, 1000).repeat(0);
    tweenA.chain(tweenB);
    tweenB.chain(tweenC);
    tweenA.start();
    //new TWEEN.Tween(cube1.position).to({x: 0}, 1000).repeat(0).start();
    
    var tweenA1 = new TWEEN.Tween(cube1.position)
    var tweenB1 = new TWEEN.Tween(cube1.position)
    var tweenC1 = new TWEEN.Tween(cube1.position)
    tweenA1.to({y: 1}, 1000).repeat(0);
    tweenB1.to({x: 0}, 1000).repeat(0);
    tweenC1.to({y: 0}, 1000).repeat(0);
    tweenA1.chain(tweenB1);
    tweenB1.chain(tweenC1);
    tweenA1.start();*/
    var animations = [];
    function creatAction(cube, positionx, positiony)
    {
      //TWEEN.removeAll();
      var tweenA = new TWEEN.Tween(cube.position)
      var tweenB = new TWEEN.Tween(cube.position)
      var tweenC = new TWEEN.Tween(cube.position)
      tweenA.to({y: positiony}, 1000).repeat(0);
      tweenB.to({x: positionx}, 1000).repeat(0);
      tweenC.to({y: 0}, 1000).repeat(0);
      tweenA.chain(tweenB);
      tweenB.chain(tweenC);
      //tweenA.start();
      //tweenA.update();
      //animations.push(tweenA);
      return tweenA;
    }
    function swap(cube1, cube2, x1, x2)
    {
      //var x1 = cube1.position.x;
      //var x2 = cube2.position.x;
      var tween = creatAction(cube1, x2, 1);
      animations.push(tween);
      var tween1 = creatAction(cube2, x1, -1);
      animations.push(tween1);
      //tween1.onUpdate(render);
      //tween2.onUpdate(render);
      
      /*while(cube1.position.x != x2)
      {
        TWEEN.update();
        render();
      }*/
    }
    function isComplete(cube, x){
      if(cube.position.x == x)
        {return true;}
      return false;
    }
    var i = 0;
    function animation() {
      
      //swap(cube, cube1, count);
      cube.rotation.x += 0.01;
      cube.rotation.y += 0.01;
      cube1.rotation.x += 0.01;
      cube1.rotation.y += 0.01;
      render();
      //var currentTime = player.currentTime;
      for(; i < 2; i++)
      {
        animations[i].start();
        i++;
        animations[i].start();
        //console.log("first", animations[0].get_isComplete());

      }
      if(cube.position.x == 1.5 && cube.position.y == 0)
      {
          for(; i < 4; i++)
          {
            animations[i].start();
            i++;
            animations[i].start();
            //console.log("second", animations);

          }
          
      }
      //if(animations[0].isComplete)
      //{alert(animations[0].isComplete);}
      
      TWEEN.update();
      //TWEEN.removeAll();
      requestAnimationFrame(animation);
      //animation();
    }
    function render()
    {
      renderer.render( scene, camera );
      //TWEEN.update();
    }
    //render();
    //
    swap(cube, cube1, cube.position.x, cube1.position.x);
    swap(cube, cube1, cube1.position.x, cube.position.x);
    animation();
    
    //swap(cube, cube1, count);
    //swap(cube, cube1);
    //animation();
    //swap(cube, cube1)
    
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
