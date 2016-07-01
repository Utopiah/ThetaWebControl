<html>
<script src="jquery-3.0.0.min.js"></script>
<body>

<h1>360 photo request by @Utopiah</h1>

<div id="front">
<div class="tools">
<button onclick="saveViaAJAX_front();">Save</button>
</div>
<script type="text/javascript">
 function saveViaAJAX_front(){
	var ajax = new XMLHttpRequest();
	ajax.open("POST",'Request.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(Date.now());
  }
</script>
</br>
</div>

Now please wait 1min then visit <a href="http://fabien.benetou.fr/pub/home/Theta/">http://fabien.benetou.fr/pub/home/Theta/</a> (too lazy for a timer so check yourself).

<!--
Using http://intridea.github.io/sketch.js/ and https://permadi.com/2010/10/html5-saving-canvas-image-data-using-php-and-ajax/
-->
</body>
</html>
