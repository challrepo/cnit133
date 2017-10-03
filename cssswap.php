<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>css swap</title>
    <link rel="stylesheet" href="css/swap-1.css" class="swappable">
    <link href="https://fonts.googleapis.com/css?family=Lato:900|Montserrat:700" rel="stylesheet">

  </head>
  <body>
    <h1>Swapped</h1>
    <p>this is some random text</p>

    <div class="swapper">
      Powered by PreviewCSS
      <div class="">
        <input type="radio" name="swap" value="css/swap-2.css"> Blue
        <br>
        <input type="radio" name="swap" value="css/swap-1.css" checked> Red
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function() {
        $('input[name=swap]').on('click', function() {
          //alert('checked');
          //alert($(this).val());
          $('.swappable').attr('href', $(this).val());
          //alert('swapped');
        });
      });
    </script>
  </body>
</html>
