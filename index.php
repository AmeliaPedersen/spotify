<?php
include 'songs.php';

function duration_to_secs($time_stamp)
{
    $ts_components = explode(":", $time_stamp);
    $minutes = intval($ts_components[0]);
    $seconds = intval($ts_components[1]);
    $seconds_in_a_minute = 60;

    return ($minutes * $seconds_in_a_minute) + $seconds;
}

function timestamp_from_secs(...$seconds)
{
    $total_secs = array_sum($seconds);
    $seconds_in_an_hour = 60 * 60;
    $seconds_in_a_minute = 60;

    $hours = floor($total_secs / $seconds_in_an_hour);
    $remaining_seconds = $total_secs % $seconds_in_an_hour;
    $minutes = floor($remaining_seconds / $seconds_in_a_minute);

    $hour_unit = $hours <= 1 ? "hr" : "hrs";
    $timestamp = "$hours $hour_unit $minutes mins";

    return $timestamp;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body class="bg-dark text-light">
    <header class="gradient">
        <img class="album" src="/images/spotify.jpeg" alt="">
        <div>
            <p>Playlist</p>
            <p style="font-size:4.5rem; ">
                <b>Disturbed</b>
            </p>
            <p style="font-size:.8rem;">
                <img class="me-2" id="profile-pic" src="images/profile.png" alt="">
                <b> Amelia Pedersen, Alex Martinez</b>
                <span class="highlight">
                    <?php
                    $num_songs = count($songs);
                    $songs_unit = $num_songs <= 1 ? "song" : "songs";

                    $song_duration_secs = array_map(function ($song) {
                        return duration_to_secs($song['duration']);
                    }, $songs);

                    $timestamp = timestamp_from_secs(...$song_duration_secs);

                    echo "• 2024 • $num_songs $songs_unit • $timestamp"
                    ?>
                </span>
            </p>
        </div>
    </header>

    <!-- Songs -->
    <main class="container-fluid" id="songs">
        <?php
        for ($i = 0; $i < count($songs); $i++) {
            $song = $songs[$i];
            $song_title = $song['title'];
            $song_image = $song['cover'];
            $song_album = $song['album'];
            $song_artist = $song['artist'];
            $song_duration = $song['duration'];
            $song_number = $i + 1;

            echo "<div class=\"row text-center mt-3 p-2 border-bottom\">";
            echo "    <p class=\"col\">$song_number</p>";
            echo "    <img class=\"col-1\" src=\"$song_image\" />";
            echo "    <p class=\"col\">$song_title</p>";
            echo "    <p class=\"col\">$song_album</p>";
            echo "    <p class=\"col\">$song_artist</p>";
            echo "    <p class=\"col\">$song_duration</p>";
            echo "</div>";
        }
        ?>
    </main>

    <!-- Media controls -->
    <footer class="footer fixed-bottom bg-dark">
        <!-- Progress bar -->
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>