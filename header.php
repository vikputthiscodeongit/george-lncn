<?php
  // Calculate some dates
  $date_current = strtotime("now");
  $date_clear   = mktime(0, 0, 0, 11, 28, 2020);
  // var_dump($date_current);
  // var_dump($date_clear);

  $clear = $date_current > $date_clear ? true : false;
  // var_dump($clear);
  
  
  // Define page names
  $page = str_replace(".php", "", basename($_SERVER["PHP_SELF"]));

  if ($page === "index") {
    $page = "landing";
  }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!--

    - - - - - - - - - - - - - - - - - - - -
    - This website is made by Viktor Chin -
    - - - - - - - viktorchin.nl - - - - - -

    -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site information -->
    <title>WE DON'T CARE</title>
    <meta name="description" content="Grown George - 'LONG NIGHTS, COLD NIGHTS' out now!">
    <meta name="keywords" content="Grown George, Long Nights, Cold Nights, We Don't Care Productions">

    <!-- Required site assets -->
    <?php
      $style_version = date("Ymd_His", filemtime("dist/css/style.css"));
      $bundle_version  = date("Ymd_His", filemtime("dist/js/bundle-main.js"));
    ?>
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?ver=<?php echo $style_version; ?>">
    <script src="dist/js/bundle-main.js?ver=<?php echo $bundle_version; ?>"></script>

    <!-- Favicon stuff -->
    <link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="dist/favicon/site.webmanifest">
    <link rel="mask-icon" href="dist/favicon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

    <?php
      if (!$clear) {
        ?>
        <!-- Pre-release noscript styling -->
        <noscript>
          <style>
            .stream-grid {
              display: none;
            }
          </style>
        </noscript>
        <?php
      }
    ?>

    <!-- Add a little JavaScript in the mix -->
    <script>
      // Calculate some dates
      const album = {};
      
      album.currentDate = new Date(),
      album.releaseDate = new Date(2020, 10, 27, 0, 0, 0);

      album.released = album.currentDate > album.releaseDate ? true : false;
    </script>
  </head>

  <body class="<?php echo $page; ?> bg-light">
    <main>
