<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Pavan's Clipboard</title>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

<script type="text/javascript">
var doc = {
    clip: <?php
include("clip.php");
echo(get_clip_json());
echo("\n")
?>
};
</script>

    <div class="container" style="margin: 0 auto">
      <div class="col-0 col-xs-0 col-sm-1"></div>
      <div class="page col-12 col-xs-12 col-sm-10">
        <h1 class="title">Pavan's Clipboard</h1>
        <div class="container-fluid">

          <hr/>
          <div style="height: 40px"></div>

          <div class="row">
            <div class="col-12 col-xs-12">
              <textarea id="clip" class="clip" placeholder="clipboard"></textarea>
            </div>
          </div>

        </div>
      </div>
      <div class="col-0 col-xs-0 col-sm-1"></div>
    </div>

  </body>
</html>
