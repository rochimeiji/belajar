<!DOCTYPE html>
<html>
<head>
  <style>
span { color:red; cursor:pointer; }
div { margin:3px; width:80px; display:none;
  height:80px; float:left; }
  div#one { background:#f00; }
  div#two { background:#0f0; }
  div#three { background:#00f; }
</style>
  <script src="jquery-1.8.2.js"></script>
</head>
<body>
  <span>Click here...</span>
 
    <div id="one"></div>
    <div id="two"></div>
    <div id="three"></div>
<script>
$(document.body).click(function () {
  $("div:hidden:first").fadeIn("slow");
});
    </script>
 
</body>
</html>