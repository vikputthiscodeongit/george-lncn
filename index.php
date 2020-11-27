<?php include "header.php"; ?>

<div class="container">
    <?php
        if (!$clear) {
            ?>
            <div class="text">
                <span class="h1">Out 27-11-2020 00:00</span>
            </div>
            <?php
        }
    ?>

    <div class="media">
        <?php
            $loops = array_diff(scandir("media/videos/loops"), array("..", "."));
            shuffle($loops);
            // var_dump($loops);
        ?>

        <div class="ar-box">
            <div class="content">
                <video
                    src="media/videos/loops/<?php echo $loops[0]; ?>"
                    class="video"
                    autoplay
                    controls
                    disablePictureInPicture
                    loop
                    muted
                    playsinline
                >
                    Your web browser is unsupported.
                </video>

                <div class="video-mute">
                    <img src="dist/images/static/icons/volume_off-white-24dp.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="button">
        <a href="stream.php" target="_self">Stream now</a>
    </div>
</div>

<?php
    if (!$clear) {
        ?>
        <script>
            (function() {
                const elToHide = album.released ? ".text" : ".button";

                const el = document.querySelector(elToHide);

                if (el) {
                    el.style.display = "none";
                }
            })();
        </script>
        <?php
    }
?>

<?php include "footer.php"; ?>
