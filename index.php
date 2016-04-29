<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://vjs.zencdn.net/5.9.2/video-js.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- If you'd like to support IE8 -->
  	<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>
	<div class="main">
		<!-- <video id="my-video" class="video-js" loop="true" preload="auto" autoplay="" src="video/32x32-audio.mp4"> -->
		<video id="my-video" class="video-js" controls preload="auto" width="640" height="264">
	        <source src="video/32x32-audio.mp4" type="video/mp4">
	        <source src="video/32x32-audio.webm" type="video/webm">
	        <!-- <source src="video/32x32-audio.ogv" type="video/ogg"> -->
	        <p class="vjs-no-js">
      		To view this video please enable JavaScript, and consider upgrading to a web browser that
      			<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    		</p>
      </video>
	</div>
	<script src="http://vjs.zencdn.net/5.9.2/video.js"></script>
</body>
</html>

<!-- 



<body>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
    <source src="MY_VIDEO.mp4" type='video/mp4'>
    <source src="MY_VIDEO.webm" type='video/webm'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

  <script src="http://vjs.zencdn.net/5.9.2/video.js"></script>
</body> -->