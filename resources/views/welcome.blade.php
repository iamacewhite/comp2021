<!DOCTYPE html>
<html lang="en">
<head>
  <title>Algorithm Visualisation</title>
  <meta charset="utf-8">
  <!-- Standard Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .carousel-caption {
    position: absolute;
    z-index: 1;
    display:table;
    width:100%;
    height:100%;
}
.black {
  color: black;
}
/**
 * Body CSS
 */
html,
body {
  height: 100%;
  font-family:'Roboto', sans-serif;
}

html,
body,
input,
textarea,
buttons {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}


/**
 * Header CSS
 */
header {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 2;
}


/**
 * Content CSS
 */
#content-wrapper {
  min-height: 100%;

  /* sticky footer */
  margin-bottom: -100px;
  padding-bottom: 100px;
}


/**
 * Footer CSS
 */
footer {
  height: 100px;
  padding-top: 0;
}
.mui-appbar a {
  color: white;
}
.container-fluid {
  padding-left: 0;
  padding-right: 0;
  margin-left: 0;
  margin-right: 0;
}
  </style>



  <!-- <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">

  <script src="semantic-ui/semantic.js"></script> -->
  <!-- <script src="js/homepage.js"></script> -->
  <link href="//cdn.muicss.com/mui-0.5.5/css/mui.min.css" rel="stylesheet" type="text/css" />
<script src="//cdn.muicss.com/mui-0.5.5/js/mui.min.js"></script>
   <script>
  //  $('.item .img')
  //    .popup({
  //      inline   : true,
  //      hoverable: true,
  //      position : 'bottom left',
  //      delay: {
  //        show: 300,
  //        hide: 800
  //      }
  //    })
  //  ;
    </script>
</head>
<body>
  <header class="mui-appbar mui--z1">
  <!-- Appbar HTML goes here -->
  <div class="mui-container">
  <table width="100%">
    <tr class="mui--appbar-height">
      <td class="mui--text-title">COMP2021 Visuallize Algorithm</td>
      <td align="right">
        <ul class="mui-list--inline mui--text-body2">
          <li><a href="/">Home</a></li>
          <li><a href="/browse">Browse algorithms</a></li>
          <li><a href="/about">About Us</a></li>
        </ul>
      </td>
    </tr>
  </table>
</div>
</header>
<div id="content-wrapper" class="mui--text-center">
  <div class="mui--appbar-height"></div>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href='/bfs'>
        <img src="image/bfs.gif" alt="Chania" width="460" height="345" class="img">
        <div class="carousel-caption black">
          <h3>BFS-Breadth First Search</h3>
        </div>
      </a>
      </div>

      <div class="item">
        <a href='/bubble'>
        <img src="image/bubble.gif" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Bubble Sort</h3>
        </div>
      </a>
      </div>

      <div class="item">
        <a href='/dfs'>
        <img src="image/dfs.gif" alt="Flower" width="460" height="345">
        <div class="carousel-caption black">
          <h3>DFS-Depth First Search</h3>
        </div>
      </a>
      </div>

      <div class="item">
        <a href='/insertion'>
        <img src="image/insertion.gif" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Insertion Sort</h3>
        </div>
      </a>
      </div>

      <div class="item">
        <a href='/dijkstra'>

        <img src="image/dijkstra.gif" alt="Flower" width="460" height="345">
        <div class="carousel-caption black">
          <h3>Dijkstra Algorithm</h3>
        </div>
      </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<footer>
  <div class="mui-container mui--text-center">
    <div class="mui--text-button">Star us on Github
      <a href="https://github.com/iamacewhite/comp2021"><button class="mui-btn mui-btn--fab mui-btn--primary">🌟</button></a>

    </div>

  </div>
</footer>

</body>
</html>
