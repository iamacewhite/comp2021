<html>
<head>
    <!-- <script type="text/javascript" src="../js/raphael-min.js"></script>
    <script type="text/javascript" src="../js/dracula_graffle.js"></script>
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="../js/dracula_graph.js"></script>
    <script type="text/javascript" src="example.js"></script> -->
    <title>graph algorithm</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
    body {
      font-family: 'Lato';
      color: black;
      font-weight: bold;
    }
    </style>
</head>
<body>
  <div id="canvas"></div>
  Looks ugly? Hit <button id="redraw" onclick="redraw();" class='btn btn-info'>redraw</button>!<br>
  <!--<button onclick="step(-1)">Previous step</button> - <button onclick="step(1)">Next step</button>-->
{!! Html::script('js/raphael-min.js'); !!}
{!! Html::script('js/dracula_graffle.js'); !!}
{!! Html::script('js/jquery-1.4.2.min.js'); !!}
{!! Html::script('js/dracula_graph.js'); !!}
{!! Html::script('js/dracula_algorithms.js'); !!}
{!! Html::script('js/algorithms.js'); !!}
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
