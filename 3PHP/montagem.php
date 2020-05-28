<head>
  <?php echo $html->charset(); ?>
  <title>
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $html->css('cake.generic');
    echo $javascript->link('prototype-1.6.0.2');
    echo $scripts_for_layout;
    echo $html->meta('icon','/myapp/img/favicon.ico', array ('type' =>'icon'));
  ?>
</head>
