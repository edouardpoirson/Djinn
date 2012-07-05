<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less');?>">
        <?php echo $this->Html->script('less'); ?>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    </head>
    <body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
	    <?php echo $this->element('menu'); ?>
    </div>
  </div>
</div>

<div class="container-fluid">
  <?php echo $content_for_layout; ?>
</div><!--/.fluid-container-->
	
	<?php echo $this->element('sql_dump'); ?>
        

    </body>
    <script type="text/javascript" src="bootstrap.js">
      $('.dropdown-toggle').dropdown()
    </script>
</html>
