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
    <?php if ($project['tag'] == 'School project'): ?>
    <h3 class="subtitle detail__type container">Briefing & project</h3>
    <?php else: ?>
    <h3 class="subtitle detail__type container">About this project</h3>
    <?php endif; ?>
    <?php if (substr($project['briefing'], 0, 1) != '<'): ?>
    <p class="text--body detail__type container"><?php echo $project['briefing'] ?></p>
    <?php else: echo $project['briefing']; ?>
    <?php endif; ?>
    <?php if (substr($project['execution'], 0, 1) != '<'): ?>
    <p class="text--body detail__type container"><?php echo $project['execution'] ?></p>
    <?php else: echo $project['execution']; ?>
    <?php endif; ?>
    <p class="text--body detail__type container"><?php echo date( "Y" , strtotime($project['year']) ); ?></p>
    <p class="text--body detail__type container"><?php echo $project['tag']; ?></p>
    <div class="detail__type container">
      <?php foreach($tools as $tool){ ?>
        <img class="image--tool" src="./assets/tools/<?php echo strtolower($tool['name']); ?>.png" width="64" height="64" alt="<?php echo $tool['name'] ?>">
      <?php } ?>
    </div>
  <a class="aspect-ratio__box image__container link image--detail " data-project-tip="<?php echo $project["tip"] ?>" target="blank" >
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
    <a class="projects__behance projects__behance--static hover--data svg-fiter" target="_blank" href="<?php echo $project["url"]; ?>" target="blank" data-alt="<?php echo ($project['type'] == 'Web game')?  'Play' : 'Visit'; ?> the <?php echo strtolower($project['type']); ?>">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1.5" y="1.5" width="27" height="27" rx="7" stroke="#447377" stroke-width="3"/>
        <line x1="1" y1="11" x2="29" y2="11" stroke="#447377" stroke-width="2"/>
        <circle cx="6.5" cy="7.5" r="1.5" fill="#447377"/>
        <circle cx="11.5" cy="7.5" r="1.5" fill="#447377"/>
        <circle cx="16.5" cy="7.5" r="1.5" fill="#447377"/>
      </svg>
    </a>
    <?php endif; ?>
    <?php if ($project["embed_url"]): ?>
    <a class="projects__behance projects__behance--static hover--data svg-fiter <?php if ($project["video_id1"]) {echo "js-trigger-video-modal";} ?>" <?php if ($project["video_id1"]) {echo 'data-youtube-id="'.$project["video_id1"].'"';} ?> data-clicked="false" target="_blank" href="<?php echo $project["embed_url"]; ?>" target="blank" data-alt="Watch the video">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1.5" y="1.5" width="27" height="27" rx="6.5" stroke="#447377" stroke-width="3"/>
        <path d="M11 18.8087V11.1913C11 10.4307 11.8155 9.94851 12.4819 10.3151L19.4069 14.1238C20.0977 14.5037 20.0977 15.4963 19.4069 15.8762L12.4819 19.6849C11.8155 20.0515 11 19.5693 11 18.8087Z" fill="#447377"/>
      </svg>
    </a>
    <?php endif; ?>
    <?php if ($project["app"]): ?>
    <a class="projects__behance projects__behance--static hover--data svg-fiter" data-clicked="false" target="_blank" href="./assets/downloads/<?php echo $project["app"]; ?>.apk" data-alt="Download the Planes APK" download>
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1.5" y="1.5" width="27" height="27" rx="6.5" stroke="#447377" stroke-width="3"/>
        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask0)">
        <path d="M20 18L17 15L20.5 11.5L22.5 11L25 15.5L20 18Z" fill="#447377"/>
        </g>
        <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask1)">
        <path d="M17 15L8.5 23.5L10 24L20 18L17 15Z" fill="#447377"/>
        </g>
        <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask2)">
        <path d="M17 15L8.5 23.5L10 24L20 18L17 15Z" fill="black" fill-opacity="0.25"/>
        </g>
        <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask3)">
        <path d="M17 15L8.5 6.5L10 5.5L20.5 11.5L17 15Z" fill="#447377"/>
        </g>
        <mask id="mask4" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask4)">
        <path d="M17 15L8.5 6.5L10 5.5L20.5 11.5L17 15Z" fill="black" fill-opacity="0.08"/>
        </g>
        <mask id="mask5" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask5)">
        <path d="M17 15L8.5 6.5L8 24L17 15Z" fill="#447377"/>
        </g>
        <mask id="mask6" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="16" height="18">
        <path d="M8.5 22.2902V7.70985C8.5 6.94502 9.32366 6.46331 9.99026 6.83827L22.9505 14.1284C23.6302 14.5107 23.6302 15.4893 22.9505 15.8716L9.99026 23.1617C9.32366 23.5367 8.5 23.055 8.5 22.2902Z" fill="#447377"/>
        </mask>
        <g mask="url(#mask6)">
        <path d="M17 15L8.5 6.5L8 24L17 15Z" fill="black" fill-opacity="0.17"/>
        </g>
      </svg>
    </a>
    <?php if ($project["embed_url"]): ?>
    <a class="projects__behance projects__behance--static hover--data svg-fiter <?php if ($project["video_id1"]) {echo "js-trigger-video-modal";} ?>" <?php if ($project["video_id1"]) {echo 'data-youtube-id="'.$project["video_id1"].'"';} ?> data-clicked="false" target="_blank" href="<?php echo $project["embed_url"]; ?>" target="blank" data-alt="Watch the video">
      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1.5" y="1.5" width="27" height="27" rx="6.5" stroke="#447377" stroke-width="3"/>
        <path d="M11 18.8087V11.1913C11 10.4307 11.8155 9.94851 12.4819 10.3151L19.4069 14.1238C20.0977 14.5037 20.0977 15.4963 19.4069 15.8762L12.4819 19.6849C11.8155 20.0515 11 19.5693 11 18.8087Z" fill="#447377"/>
      </svg>
    </a>
    <?php endif; ?>
    <?php if ($project["app"]): ?>
    <a class="projects__behance projects__behance--static hover--data svg-fiter" data-clicked="false" target="_blank" href="<?php echo $project["url_github"]; ?>" data-alt="View on Github">
    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="1.5" y="1.5" width="27" height="27" rx="6.5" stroke="#447377" stroke-width="3"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M15 6C10.0275 6 6 10.0275 6 15C6 18.9825 8.57625 22.3463 12.1537 23.5388C12.6037 23.6175 12.7725 23.3475 12.7725 23.1113C12.7725 22.8975 12.7613 22.1888 12.7613 21.435C10.5 21.8513 9.915 20.8837 9.735 20.3775C9.63375 20.1187 9.195 19.32 8.8125 19.1062C8.4975 18.9375 8.0475 18.5212 8.80125 18.51C9.51 18.4987 10.0163 19.1625 10.185 19.4325C10.995 20.7937 12.2888 20.4113 12.8063 20.175C12.885 19.59 13.1212 19.1962 13.38 18.9712C11.3775 18.7462 9.285 17.97 9.285 14.5275C9.285 13.5487 9.63375 12.7387 10.2075 12.1087C10.1175 11.8837 9.8025 10.9612 10.2975 9.72375C10.2975 9.72375 11.0513 9.4875 12.7725 10.6463C13.4925 10.4438 14.2575 10.3425 15.0225 10.3425C15.7875 10.3425 16.5525 10.4438 17.2725 10.6463C18.9938 9.47625 19.7475 9.72375 19.7475 9.72375C20.2425 10.9612 19.9275 11.8837 19.8375 12.1087C20.4113 12.7387 20.76 13.5375 20.76 14.5275C20.76 17.9812 18.6563 18.7462 16.6538 18.9712C16.98 19.2525 17.2613 19.7925 17.2613 20.6363C17.2613 21.84 17.25 22.8075 17.25 23.1113C17.25 23.3475 17.4188 23.6288 17.8688 23.5388C21.4238 22.3463 24 18.9712 24 15C24 10.0275 19.9725 6 15 6Z" fill="#447377"/>
    </svg>
    </a>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</section>
</section>


