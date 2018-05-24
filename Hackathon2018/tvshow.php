<link rel="stylesheet" href="form.css">

<?php session_start(); ?>
<div class="body content">
    <div class="list">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>

        <?php

        $mysqli = new mysqli('localhost', 'roott', 'faryal', 'accounts');
        $sql = 'SELECT COVER, TITLE, NUM_EPISODES, STUDIO FROM ANIME_SHOWS';
        $result = $mysqli->query($sql); //$result = mysqli_result object

        ?>

        <div id ="shows">
            <SPAN STYLE="font-size: 20pt">All Shows</SPAN>
            <br />
            <br />
            <br />
            <?php

            while($row = $result->fetch_assoc())
            {
                echo "<div class='animelist'>";
                echo "<div class='title'><span>$row[TITLE]</span><br /></div>";
                echo "<img src='$row[COVER]'><br />";
                echo "<span>Number of Episodes: $row[NUM_EPISODES]</span><br />";
                echo "<span>Studio: $row[STUDIO]</span><br /></div>";                
            }
            ?>
        </div>
    </div>
</div>