<script src="js/script.js"></script>

<body onload="startTime()">

<h2>Current Time:</h2>
<h1 style="color:white;">

<div id="txt"></div>

			
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  
  return i;
}
</script>


<style>
        body {
        background-image: url('websitebackground.png');
        }
</style>

<script 
  src="footer.php" integrity="sha384-/u6/iE9tq+bsqNaONz1r5IjNql63ZOiVKQM2/+n/lpaG8qnTYumou93257LhRV8t" crossorigin="anonymous"
  src="header.php" integrity="sha384-/u6/iE9tq+bsqNaONz1r5IjNql63ZOiVKQM2/+n/lpaG8qnTYumou93257LhRV8t" crossorigin="anonymous">
 <script>