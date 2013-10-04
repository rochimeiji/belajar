<!DOCTYPE html>
<html>
<head>
  <style>
  body, select { font-size:12px; }
  form { margin:5px; }
  p { color:red; margin:5px; font-size:14px; }
  b { color:blue; }
  </style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
 
 
<form>
  <select name="single">
    <option>Single</option>
    <option>Single2</option>
  </select>
 
  <br />
  <select name="multiple" multiple="multiple">
    <option selected="selected">Multiple</option>
    <option>Multiple2</option>
 
    <option selected="selected">Multiple3</option>
  </select>
  <br/>
  <input type="checkbox" name="check" value="check1" id="ch1"/>
  <label for="ch1">check1</label>
 
  <input type="checkbox" name="check" value="check2" checked="checked" id="ch2"/>
  <label for="ch2">check2</label>
  <br />
  <input type="radio" name="radio" value="radio1" checked="checked" id="r1"/>
 
  <label for="r1">radio1</label>
  <input type="radio" name="radio" value="radio2" id="r2"/>
 
  <label for="r2">radio2</label>
</form>
<p><tt id="results"></tt></p>
<script>
    function showValues() {
      var str = $("form").serialize();
      $("#results").text( str );
    }
    $("input[type='checkbox'], input[type='radio']").on( "click", showValues );
    $("select").on( "change", showValues );
    showValues();
</script>
 
</body>
</html>