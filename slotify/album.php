<?php 
    require 'includes/header.php'; 
    if(isset($_GET['id'])) {
        $albumId = $_GET['id'];
    } else {
        header("Location: index.php");
    }

    $albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
    $album = mysqli_fetch_array($albumQuery);

    $artistId = $album['artist'];

    $artistQuery = mysqli_query($con, "SELECT * FROM artists where id='$artistId'");
    $artist = mysqli_fetch_array($artistQuery);

    $artistId = $album['artist'];

    $artist = new Artist($con, $artistId);

    echo $album['title'] . "<br />";
    echo $artist['name'];

?>


<?php require 'includes/footer.php'; ?>