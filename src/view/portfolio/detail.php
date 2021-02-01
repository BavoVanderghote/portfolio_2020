<section class="overflow-hidden">
  <nav class="container menu--arrow">
    <a class="svg-filter link" href="?bavo-says=let-s-go-home">
      <svg class="hover--data" data-alt="Back home" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px"
        height="69.9px" viewBox="0 0 60 69.9" style="enable-background:new 0 0 60 69.9;" xml:space="preserve">
      <defs>
      </defs>
      <polyline class="svg-stroke" points="36.7,1.8 3.5,35 36.7,68.1 "/>
      </svg>
    </a>
    <a class="svg-filter link" href="?bavo-says=i-made-this">
      <svg class="hover--data" data-alt="Back to work" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="243px"
        height="69.9px" viewBox="0 0 243 69.9" style="enable-background:new 0 0 243 69.9;" xml:space="preserve">
      <defs>
      </defs>
      <line class="svg-stroke svg-stroke--pink" x1="243" y1="34.3" x2="3.5" y2="35"/>
      <polyline class="svg-stroke svg-stroke--pink" points="36.7,1.8 3.5,35 36.7,68.1 "/>
      </svg>
    </a>
  </nav>
  <section class="content content--detail">
    <h2 class="title title--work detail__type container"><?php echo $project['name']; ?></h2>
    <h3 class="subtitle detail__type container">Briefing & idea</h3>
    <p class="text--body detail__type container"><?php echo $project['briefing'] ?></p>
    <p class="text--body detail__type container"><?php echo $project['execution'] ?></p>
    <p class="text--body detail__type container"><?php echo date( "Y" , strtotime($project['year']) ); ?></p>
    <p class="text--body detail__type container"><?php echo $project['tag']; ?></p>
    <div class="detail__type container">
      <?php foreach($tools as $tool){ ?>
        <img class="image--tool" src="./assets/tools/<?php echo strtolower($tool['name']); ?>.png" width="64" height="64" alt="<?php echo $tool['name'] ?>">
      <?php } ?>
    </div>
  <a class="aspect-ratio__box image__container link image--detail <?php if ($project["video_id1"]) echo "js-trigger-video-modal"; ?>" <?php if ($project["video_id1"]) echo 'data-youtube-id="'.$project["video_id1"].'"'; ?> data-project-tip="<?php echo $project["tip"] ?>" data-clicked="false" target="blank" >
  <picture class="aspect-ratio__box--inside">
    <?php $string = strtolower(str_replace(' ', '', $project["name"])); ?>
    <source
      srcset="./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail.webp 1x,
      ./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail@2x.webp 2x"
      type="image/webp">
    <source
      srcset="./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail.jpg 1x,
        ./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail@2x.jpg 2x"
      type="image/jpeg">
    <img class="image hover--alt" width="1260" height="975" src="./assets/work/<?php echo $string ?>/<?php echo $string ?>_thumbnail@2x.jpg" alt="<?php echo $project["name"]; ?>">
  </picture>
  <div class="image__overlay"></div>
  </a>
  <div class="container__links--detail">
    <?php if ($project["url_behance"]): ?>
      <a class="projects__behance projects__behance--static hover--data svg-fiter" target="_blank" href="<?php echo $project["url_behance"]; ?>" target="blank" data-alt="View on behance">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px"
          height="30px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
        <defs>
        </defs>
        <path class="svg--behance" d="M21.4,0H8.6C6.3,0,4.1,0.9,2.5,2.5S0,6.3,0,8.6v12.8c0,2.3,0.9,4.5,2.5,6.1C4.1,29.1,6.3,30,8.6,30h12.8
          c2.3,0,4.5-0.9,6.1-2.5c1.6-1.6,2.5-3.8,2.5-6.1V8.6c0-2.3-0.9-4.5-2.5-6.1C25.9,0.9,23.7,0,21.4,0L21.4,0z M27.4,21
          c0,0.8-0.2,1.7-0.5,2.4c-0.3,0.8-0.8,1.5-1.4,2c-0.6,0.6-1.3,1.1-2,1.4c-0.8,0.3-1.6,0.5-2.4,0.5h-12c-0.8,0-1.7-0.2-2.4-0.5
          c-0.8-0.3-1.5-0.8-2-1.4s-1.1-1.3-1.4-2S2.8,21.8,2.8,21V9c0-0.8,0.2-1.7,0.5-2.4s0.8-1.5,1.4-2s1.3-1.1,2-1.4s1.6-0.5,2.4-0.5h12
          c0.8,0,1.7,0.2,2.4,0.5c0.8,0.3,1.5,0.8,2,1.4c0.6,0.6,1.1,1.3,1.4,2c0.3,0.8,0.5,1.6,0.5,2.4V21z"/>
        <path class="svg--behance" d="M13.5,15c0.5,0,1.6-0.6,1.6-2.1c0-1.5-1-2.8-2.9-2.8c-1.9,0-5.8,0-5.8,0V21c0,0,4.3,0,5.8,0
          c1.5,0,3.3-1,3.3-3.3S14,15,13.5,15z M8.8,12c0,0,2.2,0,3.1,0s0.8,1.2,0.8,1.2c0,0.8-0.4,1.2-0.8,1.2s-3.1,0-3.1,0V12z M12,19
          c-0.5,0-3.1,0-3.1,0v-2.9c0,0,2.6,0,3.1,0c0.6,0,1.2,0.3,1.2,1.4C13.1,18.7,12.5,19,12,19z"/>
        <path class="svg--behance" d="M23.9,17.6c0,0,0.6-4.7-3.9-4.7c-4.4,0-4.1,4.6-4.1,4.7c0,0.2,0.2,3.6,4.1,3.6s3.7-2.6,3.7-2.9
          c-0.7,0-1.9,0-1.9,0s0.1,1.2-1.8,1.2s-1.8-1.9-1.8-1.9H23.9z M20.1,14.4c1.7,0,1.7,1.7,1.7,1.7h-3.6C18.2,16.1,18.3,14.4,20.1,14.4z
          "/>
        <rect class="svg--behance" x="17.8" y="10.7" class="st0" width="4.5" height="1.3"/>
        </svg>
      </a>
    <?php endif; ?>
    <?php if ($project["url"]): ?>
    <a class="projects__behance projects__behance--static hover--data svg-fiter" target="_blank" href="<?php echo $project["url"]; ?>" target="blank" data-alt="Visit the <?php echo strtolower($project['type']); ?>">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1.5" y="1.5" width="27" height="27" rx="7" stroke="#447377" stroke-width="3"/>
        <line x1="1" y1="11" x2="29" y2="11" stroke="#447377" stroke-width="2"/>
        <circle cx="6.5" cy="7.5" r="1.5" fill="#447377"/>
        <circle cx="11.5" cy="7.5" r="1.5" fill="#447377"/>
        <circle cx="16.5" cy="7.5" r="1.5" fill="#447377"/>
      </svg>
    </a>
    <?php endif; ?>
  </div>
</section>
</section>


