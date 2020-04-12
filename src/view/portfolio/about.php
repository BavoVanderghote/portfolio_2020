<section class="container">
  <nav class="menu--arrow">
    <a class="svg-filter link" href="?bavo-says=let-s-go-home">
      <svg class="hover--data" data-alt="Back home" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="243px"
        height="69.9px" viewBox="0 0 243 69.9" style="enable-background:new 0 0 243 69.9;" xml:space="preserve">
      <defs>
      </defs>
      <line class="svg-stroke" x1="243" y1="34.3" x2="3.5" y2="35"/>
      <polyline class="svg-stroke" points="36.7,1.8 3.5,35 36.7,68.1 "/>
      </svg>
    </a>
  </nav>
  <h2 class="title title--about"><span class="highlight hover--data" data-alt="👋">Hi,</span> <span class="hover--data" data-alt="🙋🏻‍♂️">I’m Bavo</span>, a <span class="hover--data" data-alt="🖥">Digital</span> <span class="hover--data" data-alt="🎨">creative</span> from <span class="hover--data" data-alt="🏠">Bruges</span>, <span class="hover--data" data-alt="🇧🇪">Belgium</span></h2>
  <section class="content">
    <h3 class="hide">photography</h3>

    <!-- Colcade masonry grid -->
    <div class="grid">
    <!-- columns -->
    <div class="grid-col grid-col--1"></div>
    <div class="grid-col grid-col--2"></div>
    <div class="grid-col grid-col--3"></div>
    <!--<div class="grid-col grid-col--4"></div>-->
    <!-- grid items -->
    <?php foreach($images as $image) { ?>
      <div class="grid-item image__container" width="<?php echo $image["width"]; ?>" height="<?php echo $image["height"]; ?>">
          <picture>
            <source
              srcset="./assets/photography/<?php echo $image["name"]; ?>.webp 1x,
              ./assets/photography/<?php echo $image["name"]; ?>@2x.webp 2x"
              type="image/webp">
            <source
              srcset="./assets/photography/<?php echo $image["name"]; ?>.jpg 1x,
              ./assets/photography/<?php echo $image["name"]; ?>@2x.jpg 2x"
              type="image/jpeg">
            <img class="image hover--pink" width="<?php echo $image["width"]; ?>" height="<?php echo $image["height"]; ?>" src="./assets/photography/<?php echo $image["name"]; ?>@2x.jpg" alt="<?php echo $image["alt"]; ?>">
          </picture>
          <div class="image__overlay"></div>
        </div>
      <?php } ?>
  </div>
  </section>
</section>
