<?php require_once 'header.php';?>

<div class="page lineup">
    <div class="container">
        <h1>Line-up</h1>
          <div class="artists">
            <?php 
                $query = "SELECT * FROM lineup";
                $lineup = db_getData($query);
                   if ($lineup->num_rows > 0) {
                    while($row = $lineup->fetch_assoc()) {
                      echo "<div class='artist'> <img src='" . IMAGE_FOLDER . "/" . $row['artistImage'] ."' alt=''> <h2>" . $row['artistName'] . "</h2></div>";
                    }
                   }
            ?>
          </div>
    </div>
</div>
<?php require_once 'footer.php';?>
