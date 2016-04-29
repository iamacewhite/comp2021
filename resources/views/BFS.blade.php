<!DOCTYPE html>
<html>
<head>
<!-- <link href="style.css" rel="stylesheet" /> -->
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
<title>Animated BFS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
{!! Html::script('js/cytoscape.min.js'); !!}
{!! Html::script('js/code.js'); !!}
<style>
body {
  font: 14px helvetica neue, helvetica, arial, sans-serif;
}

#cy {
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
</style>
</head>
<body>
<div id="cy"></div>
</body>
</html>
