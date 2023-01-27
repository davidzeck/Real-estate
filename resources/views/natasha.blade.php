<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Video</title>
    <meta name="description" content="Video - A-Frame">
  </head>
  <body>
  <video width="320" height="240" autoplay>
  <source src="{{asset('images/vr3.mpy')}}" type="video/mp4">
</video>
  </body>
</html>
    <!-- <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <script>
        AFRAME.registerComponent('play-pause', {
            init: function(){
                var myVideo = document.querySelector('#natasha');
                var videoControls =document.querySelector('#videoControls');
                this.el.ddEventListener('click', function (){
                    if(myVideo.paused){
                        myVideo.play();
                        videoControls.setAttribute('src','#pause');
                
                    }
                    else{
                        myVideo.pause();
                        videoControls.setAttribute('src','#play');
                    }
                });
            }
        });
        </script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <img id="play" src="{{asset('images/play.png')}}">
        <img id="pause" src="{{asset('images/pause.png')}}">
        <video id="natasha" src="{{asset('images/vr3.mp4')}}" type="video/mp4" autoplay></video>
        
      </a-assets>
      <a-camera>
        <a-cursor></a-cursor>
      </a-camera>
    
<a-videosphere src="#natasha" rotation="0 90 0">
      

</a-videosphere>
    
      
    </a-scene>
  </body>
</html> -->