<?php 
  require 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Search Cities</title>
</head>

<body>
  <div class="m-2 text-center">
    <div class="d-inline-block">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Osaka</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">Tokyo</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        <label class="form-check-label" for="inlineCheckbox3">Nagoya</label>
      </div>
      <div id="checkedCities" class="m-2"></div>
      <button id="searchBtn" class="btn btn-success btn-block mt-3" onClick="searchResults()">Find The Best Spots!</button>
    </div>
    <div class="container-fluid">
      <div id="searchResults" class="row mt-4">
      </div>
    </div>
  </div>
  <a id="top-button"></a>
  <a id="apply-button"></a>
  <div id="character"><img src="img/character.png" alt="Nyaa cat" title="にゃあ～"></div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
