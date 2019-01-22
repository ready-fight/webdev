<?php
    require 'includes/config.php';
    if(isset($_POST['cities'])) {

        $cities = $_POST['cities'];
        $sql = "";
        foreach($cities as $city) {
            $sql .= "SELECT name, description FROM cities WHERE name = '$city';";
        }

        $searchQuery = mysqli_multi_query($con, $sql);

        do {
            if($result = mysqli_store_result($con)) {
                foreach($result as $city) {
                    echo "
                            <div class='col-sm-12 col-md-4 col-lg-4 text-justify mx-auto''>
                                <h4>" . $city['name'] . "</h4>" .
                            "   <p>" . $city['description'] . "</p>
                            </div>";
                }
            }

        } while (mysqli_next_result($con));
    }
?>