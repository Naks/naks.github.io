<!DOCTYPE html>
<html lang="sv-SE">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="En pytteliten webb- och designbyrå baserade i Stockholm" content="">
    <meta name="Axel Krottler" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Naks</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      
    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- bxSlider -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

  </head>

  <body>

  <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php include 'cover.php'; ?>

    <?php include 'services.php'; ?>

    <?php include 'techniques.php'; ?>

    <?php include 'works.php'; ?>

    <?php include 'team.php'; ?>

    <?php include 'contact.php'; ?>

    <?php include 'footer.php'; ?>

  </body>

</html>