<nav>
  <a href="?bavo-says=let-s-go-home">
  <a href="?bavo-says=let-s-go-home">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="243px"
      height="69.9px" viewBox="0 0 243 69.9" style="enable-background:new 0 0 243 69.9;" xml:space="preserve">
    <defs>
    </defs>
    <line class="svg-stroke" x1="243" y1="34.3" x2="3.5" y2="35"/>
    <polyline class="svg-stroke" points="36.7,1.8 3.5,35 36.7,68.1 "/>
    </svg>
  </a>
</nav>

<h2 class="title title--work">Work</h2>

<section class="content">
  <h3 class="hide">Projects</h3>
  <ul class="projects-grid">
    <?php foreach($projects as $project){
      $string = strtolower(str_replace(' ', '', $project["name"]));
      ?>
    <li>
      <a href="<?php echo $project["url"]; ?>" target="blank">
        <h3 class="hide"><?php echo $project["name"]; ?></h3>
        <img class="image" src="./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail.jpg" width="1260" height="975" alt="<?php echo $project["name"]; ?>">
      </a>
    </li>
    <?php } ?>
  </ul>
</section>
