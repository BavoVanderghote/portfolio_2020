<h2><span>Hi,</span> I’m Bavo, a Digital creative from Bruges, Belgium</h2>
<nav>
  <a href="?bavo-says=let-s-go-home">Let's go home</a>
</nav>

<ul>
  <?php foreach($images as $image) { ?>
    <li>
      <img
      src="./assets/photography/<?php echo $image["name"]; ?>.jpg"
      width="<?php echo $image["width"]; ?>"
      height="<?php echo $image["height"]; ?>"
      alt="<?php echo $image["alt"]; ?>">
    </li>
  <?php } ?>
</ul>
