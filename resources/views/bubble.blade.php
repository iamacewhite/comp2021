<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>3D Bubble Sort</title>
  <style>
    body { margin: 0;}
    canvas { width: 100%; height: 100% }
  </style>

</head>
<body>
  {!! Html::script('js/three.min.js'); !!}
  {!! Html::script('js/threex.dynamictexture.js'); !!}
  {!! Html::script('js/Tween.js'); !!}
  {!! Html::script('js/TrackballControls.js'); !!}
  {!! Html::script('js/sorting.js'); !!}
  <script> // Our Javascript will go here.
    var camera, scene, renderer;
    var cubes = [];
    var nums = [2,5,7,9,3,4,8,6,1,0];
    var animations = [];//所有动作集合
    var des = [];//每个动作下cube要去的地方
    var positions = [];//每个动作完成后cube应该在的地方
    var y = -100;
    init();
    makeCubes(nums);
    bubbleSort(y);
    

    magic(); // magic! do not touch
    animate();





  </script>
</body>

</html>
