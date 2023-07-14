<!DOCTYPE html>
<html lang="en">
<font color="#ff000"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DNB LIVE</title>
  </head>
  <body BGCOLOR="black">
  <center>
    <h2>DNB LIVE</h2>
    <video id="video" width="800" controls></video>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <!-- Or if you want a more recent alpha version -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@alpha"></script> -->
    <script>
      var video = document.getElementById("video");
      var videoSrc = "/hls/test.m3u8";
      if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
      }
      // hls.js is not supported on platforms that do not have Media Source
      // Extensions (MSE) enabled.
      //
      // When the browser has built-in HLS support (check using `canPlayType`),
      // we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video
      // element through the `src` property. This is using the built-in support
      // of the plain video element, without using hls.js.
      //
      // Note: it would be more normal to wait on the 'canplay' event below however
      // on Safari (where you are most likely to find built-in HLS support) the
      // video.src URL must be on the user-driven white-list before a 'canplay'
      // event will be emitted; the last video event that can be reliably
      // listened-for when the URL is not on the white-list is 'loadedmetadata'.
      else if (video.canPlayType("application/vnd.apple.mpegurl")) {
        video.src = videoSrc;
      }
    </script>
  <form method="post">
    enter information here please:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="press to submit">
    
  </form>

	</center>
  </body>
  </font> 
</html>

<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];

$fp = fopen('bob.txt', 'a');

fwrite($fp, $data);
fclose($fp);

$myfile = fopen("bob.txt", "a") or die("Unable to open file!");
$txt = " \n";
fwrite($myfile, $txt);
$txt = "-\n";
fwrite($myfile, $txt);
fclose($myfile);

}
?>


