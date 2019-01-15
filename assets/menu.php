<nav class="navbar" style="background: #f5f5f5; padding: 8px 16px;">
	<section class="navbar-section">
    <a href="index.php" class="navbar-brand mr-2">Home</a>
    <a href="see-posting.php?id=9" class="btn btn-link">About</a>
    <a href="gallery.php" class="btn btn-link">Gallery</a>
  </section>
  <section class="navbar-section">
  	<form method="get" action="">
    	<div class="input-group input-inline">
     		<input class="form-input" type="text" placeholder="search" name="keyword">
      	<button class="btn btn-primary input-group-btn" name="search">Search</button>
    	</div>
    </form>
  </section>
</nav>
<div style="margin-top: 16px;margin-bottom: 16px;">
  <div class="columns">
    <?php

    include 'lib/connect.php';

    if(isset($_GET['keyword'])){
      $keyword = $_GET['keyword'];
      $search = $lo->query("SELECT * FROM post WHERE title LIKE '%".$keyword."%'");
      if($search == true){
        while($row = $search->fetch_array(MYSQLI_BOTH)){
          ?>
          <div class="column col-4">
            <div class="panel">
              <img src="img/<?php echo $row['img']; ?>" style="width: 100%;">
              <div class="panel-header">
                <h5 style="margin: 0;padding: 0;"><?php echo $row['title']; ?></h5>
              </div>
              <div class="panel-body">
                <label class="d-block"><?php echo substr($row['content'],0,120); ?>...</label>
                <a href="see-posting.php?id=<?php echo $rowPost['idpost']; ?>" class="btn btn-primary" style="margin-bottom: 16px;">Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php
        }
      }
    }

    ?>
  </div>
</div>