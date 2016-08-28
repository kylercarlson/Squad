<title>Squad Help</title>

<meta name="description" content="An example of good database design using the game SQUAD">
<meta name="author" content="Kyle Carlson">
<meta charset="UTF-8">

<!-- Global Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:300,400,500,700" rel="stylesheet">

<!-- Stylesheets -->
<?php if( $stylesheets ) : ?>
  <?php foreach( $stylesheets as $key => $stylesheet ) : ?>
    <link rel="stylesheet" href="assets/css/<?php echo $stylesheet; ?>">
  <?php endforeach; ?>
<?php endif ?>

<!-- Javascripts -->
<?php if( $javascripts ) : ?>
  <?php foreach( $javascripts as $key => $javascript ) : ?>
    <script src="assets/js/<?php echo $javascript; ?>" type="text/javascript"></script>
  <?php endforeach; ?>
<?php endif ?>