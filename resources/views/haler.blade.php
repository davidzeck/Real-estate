<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>360&deg; Image</title>
    <meta name="description" content="360&deg; Image - A-Frame">

    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
  </head>
  <body>
    <a-scene>
      <a-sky src="{{asset('images/vr2.jpg')}}" rotation="0 -130 0"></a-sky>
      <a-text font="kelsonsans" value="Haler" width="6" position="-2.5 0.25 -1.5"
              rotation="0 15 0"></a-text>
    </a-scene>
  </body>
</html>