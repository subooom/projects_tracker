<div class="loader-container">
  <div class="loader-text" style="">Loading Screen..</div>
  <div id="canvas-loader"></div>
</div>
<style>
  .loader-container{
    z-index: 10;
    position: absolute;
    top: 0;
    bottom:0;
    left: 0;
    right: 0;
    background: black;
    transition: opacity .4s ease-in;
    display: flex;
    align-items: center;
    justify-content: center
  }
  .loader-container.hide{
    animation: fadeout .4s cubic-bezier(0.075, 0.82, 0.165, 1) 0.5s 1 normal forwards;
    -webkit-animation: fadeout .4s cubic-bezier(0.075, 0.82, 0.165, 1) 0.5s 1 normal forwards;
  }
  .loader-text{
    position: absolute;
    top: 45%;
    left: 40%;
    color:white;
    font-size: 20px;
    animation: blink 1s linear infinite
  }
  @keyframes blink{
    0%{opacity: 0;}
    25%{opacity: .5;}
    50%{opacity: 1;}
    75%{opacity: .5;}
    100%{opacity: 0;}
  }
  @keyframes fadeout{
    0%{
      opacity: 100;
    }
    99%{
      opacity: 0;
    }
    100%{
      display: none;
    }
  }
</style>
<script src="/dependencies/p5/p5.min.js"></script>
<script>
  // Daniel Shiffman
// http://codingtra.in
// http://patreon.com/codingtrain
// Code for this video: https://youtu.be/flQgnCUxHlw

var r = 4;
var k = 30;
var grid = [];
var w = r / Math.sqrt(2);
var active = [];
var cols, rows;
var ordered = [];
let logo;

function preload(){
  logo = loadImage('/logo/logo_icon.png')

}
function setup() {
  let canvas2D = createCanvas(document.querySelectorAll('.loader-container')[0].clientWidth, document.querySelectorAll('.loader-container')[0].clientHeight);
  canvas2D.parent('canvas-loader');

  background(0);
  strokeWeight(4);
  colorMode(HSB);

  // STEP 0
  cols = floor(width / w);
  rows = floor(height / w);
  for (var i = 0; i < cols * rows; i++) {
    grid[i] = undefined;
  }

  // STEP 1
  var x = width / 2;
  var y = height / 2;
  var i = floor(x / w);
  var j = floor(y / w);
  var pos = createVector(x, y);
  grid[i + j * cols] = pos;
  active.push(pos);
  //frameRate(1);
  logo.filter('invert', 244)

}

function draw() {

  background(258, 65, 15);
  //noLoop();

  for (var total = 0; total < 25; total++) {
    if (active.length > 0) {
      var randIndex = floor(random(active.length));
      var pos = active[randIndex];
      var found = false;
      for (var n = 0; n < k; n++) {
        var sample = p5.Vector.random2D();
        var m = random(r, 2 * r);
        sample.setMag(m);
        sample.add(pos);

        var col = floor(sample.x / w);
        var row = floor(sample.y / w);

        if (col > -1 && row > -1 && col < cols && row < rows && !grid[col + row * cols]) {
          var ok = true;
          for (var i = -1; i <= 1; i++) {
            for (var j = -1; j <= 1; j++) {
              var index = (col + i) + (row + j) * cols;
              var neighbor = grid[index];
              if (neighbor) {
                var d = p5.Vector.dist(sample, neighbor);
                if (d < r) {
                  ok = false;
                }
              }
            }
          }
          if (ok) {
            found = true;
            grid[col + row * cols] = sample;
            active.push(sample);
            ordered.push(sample);
            // Should we break?
            break;
          }
        }
      }

      if (!found) {
        active.splice(randIndex, 1);
      }

    }
  }

  for (var i = 150; i <1000; i++) {
    if (ordered[i]) {
      stroke(i % 360, 100, 100, .1);
      strokeWeight(r*i/10 * 0.5);
      point(ordered[i].x, ordered[i].y);
    }
  }
  image(logo, width/2, height/2)
  textSize(12)
  fill(255)
  textFont('Montserrat, sans-serif')

  // for (var i = 0; i < active.length; i++) {
  //   stroke(255, 0, 255);
  //   strokeWeight(1);
  //   point(active[i].x, active[i].y);
  // }
  //console.log(active.length);
}
</script>