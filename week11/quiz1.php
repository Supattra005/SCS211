<?php
$movies_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$movies = $movies_obj["movies"];
?>

<?php foreach($movies as $row){ ?>
    <div><?=$row["title"]?> | <?=$row["releaseYear"]?></div>
     <div><?php echo $row["title"]; ?> | <?php echo $row["releaseYear"]; ?></div>
<?php } ?>

