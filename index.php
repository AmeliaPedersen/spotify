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
    <!-- playlist header -->
    <header class="container-fluid">
        <img src="/images/placeholder.jpg" alt="playlist image" id="playlist-image" />
        <!-- playlist information -->
        <!-- Action buttons -->
        <!-- Song information row -->
    </header>
    <!-- Songs -->
    <main class="container-fluid" id="songs">
        <?php
        include 'songs.php';

        for ($i = 0; $i < count($songs); $i++) {
            $song = $songs[$i];
            $song_title = $song['title'];
            // TODO: Make more variables for the different keys in the song.
            // (hint: keys mean 'title', 'cover', 'artist', etc. check
            //        songs.php to see the other keys.)

            echo "<div class=\"row text-center mt-3 p-2 border-bottom\">";
            // TODO: Song Number: (hint: use plus '+')
            echo "    <p class=\"col\">3</p>";
            echo "    <img class=\"col-1\" src=\"/images/new disturbed image.jpeg\" />";
            // Song Title
            echo "    <p class=\"col\">$song_title</p>";
            // TODO: Song Album
            echo "    <p class=\"col\">Demon Dayz</p>";
            // TODO: Song Artist
            echo "    <p class=\"col\">Gorillaz</p>";
            // TODO: Song Duration
            echo "    <p class=\"col\">2:34</p>";
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