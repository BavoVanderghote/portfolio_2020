<h2>work</h2>

<nav>
  <a href="?bavo-says=let-s-go-home">Let's go home</a>
</nav>

<?php foreach($projects as $project){
  $string = strtolower(str_replace(' ', '', $project["name"]));
  ?>

<a href="<?php echo $project["url"]; ?>" target="blank">
  <h3><?php echo $project["name"]; ?></h3>
  <img src="./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail.jpg" width="1260" height="975" alt="<?php echo $project["name"]; ?>">
</a>
<?php } ?>
