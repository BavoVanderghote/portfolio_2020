<div class="container">
  <nav>
    <a href="?bavo-says=let-s-go-home">
      <svg width="245" height="71" viewBox="0 0 245 71" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M244.5 35.5H4M4 35.5L43.0074 2M4 35.5L43.0074 69" stroke="#477377" stroke-width="5"/>
      </svg>
    </a>
  </nav>
  <h2 class="title title--about"><span class="highlight">Hi,</span> I’m Bavo, a Digital creative from Bruges, Belgium</h2>
  <section class="photo-grid">
    <h3 class="hide">photography</h3>
    <ul class="photo-grid__grid">
      <?php foreach($images as $image) { ?>
        <li>
          <img
          class="image"
          src="./assets/photography/<?php echo $image["name"]; ?>.jpg"
          width="<?php echo $image["width"]; ?>"
          height="<?php echo $image["height"]; ?>"
          alt="<?php echo $image["alt"]; ?>">
        </li>
      <?php } ?>
    </ul>
  </section>
</div>
