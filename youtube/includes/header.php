<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>VideoTube - Just watch it.</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/commonActions.js"></script>
</head>

<body>
  <div id="pageContainer">
    <div id="mastHeadContainer">
      <button class="navShowHide">
        <img src="assets/images/icons/menu.png" alt="">
      </button>
      <a href="index.php" class="logoContainer">
        <img src="assets/images/icons/VideoYouTubeLogo.png">
      </a>
      <div class="searchBarContainer">
        <form action="search.php" method="GET">
          <input type="text" class="serachButton" name="term" id="" placeholder="Search...">
          <button class="searchButton">
            <img src="assets/images/icons/search.png" alt="">
          </button>
        </form>
      </div>
      <div class="rightIcons">
        <a href="upload.php">
          <img class="upload" src="assets/images/icons/upload.png">
        </a>
        <a href="#">
          <img src="assets/images/profilePictures/default.png" onClick="showProfile()">
        </a>
        <div id="profile">
          <div id="profileSettings">
            <div class="profileTopLeft">
              <div class="firstLetter">A</div>
            </div>
            <div class="profileTopRight">
              <div class="name">Adrian Ruiz</div>
              <div class="email">adrian@test.io</div>
            </div>
          </div>
          <ul>
              <li>Profile</li>
              <li>My Videos</li>
              <li>Favorite Videos</li>
              <li>Change Language</li>
              <li>Logout</li>
            </ul>
        </div>
      </div>
    </div>

    <div id="sideNavContainer" style="display: none;">

    </div>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">
