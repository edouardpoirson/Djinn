<?php $pages = $this->requestAction(array('controller'=>'pages', 'action'=> 'menu'))?>
      <a class="brand" href="#">Djinn</a>
      <div class="nav-collapse">
        <ul class="nav">
	        <?php foreach($pages as $k=>$v): $v = current($v); ?>
	        <li><?php echo $this->Html->link($v['name'], $v['link']); ?></li>
	        <?php endforeach; ?>
        </ul>
          
        <form class="navbar-search pull-right">
            <input type="text" class="search-query" placeholder="Search">
        </form>
      </div><!--/.nav-collapse -->
