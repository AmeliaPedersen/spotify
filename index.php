<?php
include 'songs.php';
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
    <header class="container-fluid">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="/images/spotify.jpeg" />
            </div>
            <div class="col align-content-center ">
                <p class="">Playlist</p>
                <h1>edith piaf le ca ira </h1>
                <p>french music </p>
            </div>
        </div>
    </header>

    <!-- Songs -->
    <main class="container-fluid" id="songs">
        <?php
        for ($i = 0; $i < count($songs); $i++) {
            $song = $songs[$i];
            $song_title = $song['title'];
            $song_album = $song['album'];
            $song_artist = $song['artist'];
            $song_duration = $song['duration'];
            $song_number = $i + 1;

            echo "<div class=\"row text-center mt-3 p-2 border-bottom\">";
            echo "    <p class=\"col\">$song_number</p>";
            echo "    <img class=\"col-1\" src=\"/images/new disturbed image.jpeg\" />";
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