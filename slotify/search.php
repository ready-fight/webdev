<?php
    include('includes/includedFiles.php');

    if(isset($_GET['term'])) {
        $term = urldecode($_GET['term']);
    } else {
        $term = "";
    }
?>

<div class="searchContainer">

    <h4>Search for an artist, album, or song</h4>
    <input type="text" class="searchInput" value="<?php echo $term; ?>" placeholder="Enter your search criteria here..." onfocus="this.value = this.value" />
</div>

<script>
    $(".searchInput").focus();
    $(function() {
        var timer;
        $(".searchInput").keyup(function() {
            clearTimeout(timer);
            timer = setTimeout(function() {
                var val = $(".searchInput").val();
                openPage("search.php?term=" + val);
            }, 1000);
        });
    });
</script>