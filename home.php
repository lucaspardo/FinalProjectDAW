<?php
session_start();
include 'functions.php';
require_once __DIR__ . '/vendor/autoload.php';

if (!isset($_SESSION["Authenticated"]) || $_SESSION["Authenticated"] == 0) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Monstruos's Bizarre Adventure</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<script>
  $(document).ready(function () {
    $("input[type=number]").on('change', function () {
      var total = 0;
      $("input[type=number]").each(function () {
        total += parseInt(this.value);
      });
      //alert(total);
      if (total > 7) {
        $("input[type=number]").each(function () {
          $(this).attr({'max': this.value});
        });
      } else {
        $("input[type=number]").each(function () {
          $(this).attr({'max': 99});
        });
      }
    });
  });
</script>
<div class="container">
  <div class="row">
    <div class="col-xs-12" role="main">
      <h3>Creador De Monstruo</h3>
        <div class="form-group col-sm-3 col-sm-offset-4 col-xs-10 col-xs-offset-1">
          <label for="usr">Nombre:</label>
          <input type="text" class="form-control col-xs-4" id="monsterName">
        </div>
      <div class="form-group col-xs-6">
        <table>
          <tr>
            <td>Str :</td>
            <td><input type="number" value="1" name="stat1" min="1" max="99" class="col-xs-4"></td>
          </tr>
          <tr>
            <td>Def :</td>
            <td><input type="number" value="1" name="stat2" min="1" max="99" class="col-xs-4"></td>
          </tr>
          <tr>
            <td>Luk :</td>
            <td><input type="number" value="1" name="stat3" min="1" max="99" class="col-xs-4"></td>
          </tr>
        </table>
      </div>
      <div class="form-group col-xs-6">
        <img src="" style="{}">
        <label for="selImg">Imágen:</label>
        <select class="form-control" id="selImg"  size="4">
          <option>Img1</option>
          <option>Img2</option>
          <option>Img3</option>
          <option>Img4</option>
        </select>
      </div>
      <div class="form-group col-sm-3 col-xs-10 col-xs-offset-1">
        <label for="selHab">Habilidades:</label>
        <select class="form-control" id="selHab">
          <option>Hab1</option>
          <option>Hab2</option>
          <option>Hab3</option>
          <option>Hab4</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-2 col-xs-offset-8">
      <a href="validate.php?logout" class="btn btn-login btn-sm">Logout</a>
    </div>
  </div>
  <?php footer() ?>
</div>
</body>
</html>