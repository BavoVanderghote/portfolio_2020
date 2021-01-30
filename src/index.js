require(`./style.css`);

{
  const defaultMax = 80; // e⁶ / 12 = 33.5em
  let randomizing = false;

  const $filterElements = document.querySelectorAll(".svg-filter");
  const turbVal = { val: 0.000001 };
  const turb = document.querySelectorAll("#filter feTurbulence")[0];

  let svgTlUp, svgTlDown, svgTlLoop;

  const $mouseText = document.querySelector(".mouse");

  const $hoverImages = document.querySelectorAll(`.hover--alt`);
  const $hoverPink = document.querySelectorAll(`.hover--pink`);
  const $hoverElements = document.querySelectorAll(`.hover--data`);

  const handleWindowResize = () => {
    // console.log(`window width: ${window.innerWidth}`);
    if (window.innerWidth >= 888) {
      if (!randomizing) {
        randomize();
      }
    } else {
      if (randomizing) {
        randomizing = false;
      }
      const $posts = document.querySelectorAll(`.posts`);
      $posts.forEach(($post) => {
        $post.style.margin = `0`;
        $post.style.width = `100%`;
      });
    }
  };

  const grid = () => {
    const colcade = new Colcade(`.grid`, {
      columns: `.grid-col`,
      items: `.grid-item`,
    });
  };

  // random buffer to give for spacing.
  // growth is inverse exponential, so larger is less likely
  const buffer = (min = 0.1, max = defaultMax, mult = 1) => {
    return `${Math.min(
      max,
      Math.max(
        min,
        min / 2 + (Math.exp(Math.random() * 6) * Math.random() * mult) / 12
      )
    )}em`;
  };

  const randomBuffer = (min = 0.1, max = defaultMax) => {
    return `${Math.floor(Math.random() * (max - min + 1)) + min}em`;
  };

  const randomize = () => {
    randomizing = true;

    const $posts = document.querySelectorAll(`.posts`);

    // console.log($posts);

    $posts.forEach(($post) => {
      // console.log($post);

      // console.log(`${buffer(0.1, defaultMax, 0.5)} ${buffer(0.25)} ${buffer(0.25, defaultMax, 0.5)} ${buffer()}`);

      // random buffered margins, ordered: top right bottom left.
      // top is at least 0.1em, right and bottom are at least 0.25em.
      // top and bottom are cut in half to limit lost vertical space.
      // post.style.margin = buffer(0.1, defaultMax, 0.5) + " " + buffer(0.25) + " " + buffer(0.25, defaultMax, 0.5) + " " + buffer();
      // $post.style.margin = `${buffer(0.1, defaultMax, 0.5)} ${buffer(0.25)} ${buffer(0.25, defaultMax, 0.5)} ${buffer()}`;
      $post.style.margin = `5em ${buffer(0.25)} 5em ${buffer()}`;
      // random width and height (with sane minimum size: 8em x 5em)
      // console.log(`width: ${buffer(50, defaultMax, 10)}`);
      $post.style.width = randomBuffer(30, defaultMax, 1);
      // $post.style.height = buffer(5);
    });
    // for (let p = 0; p < posts.length; p++) {
    //   // random buffered margins, ordered: top right bottom left.
    //   // top is at least 0.1em, right and bottom are at least 0.25em.
    //   // top and bottom are cut in half to limit lost vertical space.
    //   posts[p].style.margin = buffer(0.1,  defaultMax, 0.5) + " "
    //                         + buffer(0.25) + " "
    //                         + buffer(0.25, defaultMax, 0.5) + " "
    //                         + buffer();
    //   // random width and height (with sane minimum size: 8em x 5em)
    //   posts[p].style.width = buffer(8);
    //   posts[p].style.height = buffer(5);
    // }
  };

  const animationUpUpdate = () => {
    turb.setAttribute("baseFrequency", `${turbVal.val / 4} ${turbVal.val}`);
  };

  const animationDownUpdate = () => {
    turb.setAttribute("baseFrequency", `${turbVal.val} ${turbVal.val}`);
  };

  const animationLoopUpdate = () => {
    turb.setAttribute("baseFrequency", `${turbVal.val / 8} ${turbVal.val}`);
  };

  // animation complete callbacks

  const animationUpCompleted = () => {
    // pause the ongoing animation so it doesn't iterfere
    svgTlUp.pause();
    // start the loop
    svgTlLoop.restart();
  };

  const animationDownCompleted = () => {};

  const animationLoopCompleted = () => {
    // on complete, restart loop
    svgTlLoop.restart();
  };

  const filter = () => {
    // intro timeline
    svgTlUp = new TimelineLite({
      paused: true,
      onUpdate: animationUpUpdate,
      onComplete: animationUpCompleted,
    });
    // exit animation timeline
    svgTlDown = new TimelineLite({
      paused: true,
      onUpdate: animationDownUpdate,
      onComplete: animationDownCompleted,
    });
    // continious loop timeline
    svgTlLoop = new TimelineLite({
      paused: true,
      onUpdate: animationLoopUpdate,
      onComplete: animationLoopCompleted,
    });

    // intro animation
    // when starting to hover value goes to 0.2 in 0.8s
    svgTlUp.to(turbVal, 0.2, { ease: Power0.easeIn, val: 0.2 });

    // exit animation
    // when stopping to hover, val takes 0.2s to drop down to 0.000001
    svgTlDown.to(turbVal, 0.2, { val: 0.000001 });

    // horizontal loop
    // rough easing for randomness
    svgTlLoop.to(turbVal, 0.12, {
      ease: RoughEase.ease.config({
        template: Power0.easeOut,
        strength: 1,
        points: 20,
        taper: `none`,
        randomize: true,
        clamp: false,
      }),
      val: 0.3,
    });
    svgTlLoop.to(turbVal, 0.12, {
      ease: RoughEase.ease.config({
        template: Power0.easeOut,
        strength: 1,
        points: 20,
        taper: `none`,
        randomize: true,
        clamp: false,
      }),
      val: 0.2,
    });

    $filterElements.forEach(($e) => {
      $e.addEventListener("mouseover", () => {
        // $e.style.- webkit - filter = url("#filter");
        // $e.style.filter = 'url("#filter")';
        $e.classList.add(`svg-filter--active`);

        // stop exit animation if playing
        svgTlDown.pause();
        // stop loop if playing
        svgTlLoop.pause();
        //start intro animation
        svgTlUp.restart();
        // svgTlLoop.restart();
      });

      $e.addEventListener("mouseleave", () => {
        setTimeout(function () {
          // $e.style.filter = '';
          $e.classList.remove(`svg-filter--active`);
        }, 200);

        // stop intro animation if playing
        svgTlUp.pause();
        //stop the loop
        svgTlLoop.pause();
        // start exit animation
        svgTlDown.restart();
      });
    });
  };

  const handleClicktrigger = (e) => {
    // prevent default behavior for a-tags, button tags, etc.
    e.preventDefault();

    // Grab the video ID from the element clicked
    const id = e.currentTarget.getAttribute(`data-youtube-id`);

    // Autoplay when the modal appears
    // Note: this is intenionally disabled on most mobile devices
    // If critical on mobile, then some alternate method is needed
    const autoplay = "?autoplay=1";

    // Don't show the 'Related Videos' view when the video ends
    const relatedNo = "&rel=0";

    // String the ID and param variables together
    const src = `//www.youtube.com/embed/${id}${autoplay}${relatedNo}`;

    // Pass the YouTube video ID into the iframe template...
    // Set the source on the iframe to match the video ID
    const $modal = document.querySelector(`#youtube`);
    $modal.setAttribute(`src`, src);

    // Add class to the body to visually reveal the modal
    const $body = document.querySelector(`body`);
    $body.classList.add(`show-video-modal`);
    $body.classList.add(`noscroll`);
  };

  // Close and Reset the Video Modal
  const closeVideoModal = () => {
    event.preventDefault();

    // re-hide the video modal
    const $body = document.querySelector(`body`);
    $body.classList.remove(`show-video-modal`);
    $body.classList.remove(`noscroll`);

    // reset the source attribute for the iframe template, kills the video
    const $modal = document.querySelector(`#youtube`);
    $modal.setAttribute(`src`, ``);
  };

  const handleKeyupEsc = (e) => {
    // ESC key maps to keycode `27`
    if (e.keyCode === 27) {
      // call the close and reset function
      closeVideoModal();
    }
  };

  const toggleVideoModal = () => {
    const $triggers = document.querySelectorAll(`.js-trigger-video-modal`);

    $triggers.forEach(($trigger) => {
      // Click on video thumbnail or link
      $trigger.addEventListener(`click`, handleClicktrigger);
    });

    // if the 'close' button/element, or the overlay are clicked
    document
      .querySelector(`.close-video-modal`)
      .addEventListener(`click`, closeVideoModal);
    document
      .querySelector(`.video-modal .overlay`)
      .addEventListener(`click`, closeVideoModal);

    document.querySelector(`body`).addEventListener(`keyup`, handleKeyupEsc);
  };

  const handleElementClick = (e) => {
    if (e.currentTarget.dataset.clicked === `false`) {
      e.preventDefault();
      e.currentTarget.setAttribute(`data-clicked`, `true`);
    } else {
      e.currentTarget.setAttribute(`data-clicked`, `false`);
    }
  };

  const init = () => {
    window.addEventListener("resize", handleWindowResize);
    if (window.innerWidth >= 888) {
      randomize();
    }
    if (document.querySelector(`.grid`)) {
      grid();
    }

    window.addEventListener("load", () => {
      filter();
    });

    document.addEventListener(
      "mousemove",
      function (ev) {
        if (window.innerWidth < 704) {
          $mouseText.style.transform = `translateY(${
            ev.clientY + window.pageYOffset + 2
          }px)`;
          $mouseText.style.transform += `translateX(${ev.clientX + 2}px)`;
        } else {
          $mouseText.style.transform = `translateY(${ev.clientY + 35}px)`;
          $mouseText.style.transform += `translateX(${ev.clientX + 45}px)`;
        }
      },
      false
    );

    $hoverImages.forEach(($image) => {
      $image.parentElement.parentElement.addEventListener(`mouseover`, () => {
        $mouseText.innerHTML = `${$image.getAttribute(`alt`)} ${
          $image.parentElement.parentElement.getAttribute(`data-project-tip`)
            ? `<span class="mouse__tooltip">${$image.parentElement.parentElement.getAttribute(
                `data-project-tip`
              )}</span>`
            : ``
        }`;
      });
      $image.parentElement.parentElement.addEventListener(`mouseout`, () => {
        $mouseText.textContent = ``;
      });
    });

    $hoverPink.forEach(($image) => {
      $image.parentElement.parentElement.addEventListener(`mouseover`, () => {
        $mouseText.classList.add(`mouse--image`);
        $mouseText.innerHTML = `${$image.getAttribute(`alt`)} ${
          $image.parentElement.parentElement.getAttribute(`data-project-tip`)
            ? `<span class="mouse__tooltip">${$image.parentElement.parentElement.getAttribute(
                `data-project-tip`
              )}</span>`
            : ``
        }`;
      });
      $image.parentElement.parentElement.addEventListener(`mouseout`, () => {
        $mouseText.textContent = ``;
        $mouseText.classList.remove(`mouse--image`);
      });
    });

    $hoverElements.forEach(($elem) => {
      $elem.addEventListener(`mouseover`, () => {
        $mouseText.textContent = $elem.getAttribute(`data-alt`);
      });
      $elem.addEventListener(`mouseout`, () => {
        $mouseText.textContent = ``;
      });
    });

    toggleVideoModal();

    document.querySelectorAll(`.projects__item a`).forEach(($item) => {
      $item.addEventListener(`click`, handleElementClick);
    });
  };

  init();
}
