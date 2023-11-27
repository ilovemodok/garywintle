<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Need engaging print and web design for your business? Come check out the work of multimedia artist and designer Gary Wintle"
    />
    <meta
      name="keywords"
      content="Gary Wintle, HTML, CSS, JavaScript, Photoshop, freelancer, illustrator, book design, for hire, designer in Japan, web developer in Japan"
    />
    <meta name="author" content="Gary Wintle" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400&display=swap"
      rel="stylesheet"
    />

    <!-- <link
      rel="preload"
      href="/assets/fonts/poppins-black-webfont.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link
      rel="preload"
      href="/assets/fonts/poppins-regular-webfont.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    /> -->

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script defer src="/js/script.js"></script>

    <title>Gary Wintle</title>

    <link rel="icon" href="/img/favicon-02.svg" type="image/svg" />
    <link rel="apple-touch-icon" href="/img/icon-files/gwxapple.png" />
    <link rel="manifest" href="manifest.webmanifest" />

    <meta name="theme-color" content="#12283a" />
  </head>

  <!-- Google tag (gtag.js) -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-SYW4K7FFS6"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-SYW4K7FFS6");
  </script>

  <body>
    <!-- *****HEADER***** -->

    <div class="header-background drop-shadow">
      <header class="header nav-open//">
        <a href="https://garywintle.com/"
          ><img
            class="main-logo"
            alt="Gary Wintle Logo"
            src="/img/template/GW-Logo 2023.svg"
        /></a>
        <nav class="main-nav">
          <ul class="main-nav-list">
            <li><a class="main-nav-link" href="#link-services">Services</a></li>
            <li><a class="main-nav-link" href="#link-port">Portfolio</a></li>
            <li><a class="main-nav-link" href="#link-about">About</a></li>
            <li>
              <a
                class="main-nav-link nav-cta hero-talk drop-shadow"
                href="#link-lets-talk"
                >Let's Talk!</a
              >
            </li>
          </ul>
        </nav>
        <button class="btn-mobile-nav">
          <img
            class="icon-mobile-nav"
            name="menu-icon"
            src="/img/template/GW-Hamburger.svg"
          />
          <img
            class="icon-mobile-nav"
            name="close-icon"
            src="/img/template/GW-Hamburger-close.svg"
          />
        </button>
      </header>

      <!-- Nav Bar -->

      <!-- <div class="mobile-nav-bar">
        <div>
          <a href="https://garywintle.com/"
            ><img
              class="nav-bar-logo"
              alt="Gary Wintle Logo"
              src="/img/template/GW-logo-head-only-01.svg"
          /></a>
        </div>
        <div class="nav-bar-spacer"></div>
        <div>
          <button class="btn-mobile-nav">
            <img
              class="icon-mobile-nav"
              name="menu-icon"
              src="/img/template/GW-Hamburger.svg"
            />
            <img
              class="icon-mobile-nav"
              name="close-icon"
              src="/img/template/GW-Hamburger-close.svg"
            />
          </button>
        </div>
      </div> -->

      <!-- Back to Top Button -->

      <div class="back-to-top">
        <a href="#">
          <img src="/img/template/GW-Back-to-top-4.svg" />
        </a>
      </div>

      <!-- *****HERO***** -->

      <section class="section-hero">
        <div class="hero">
          <!-- hero text box -->

          <div class="hero-text-box">
            <h1 class="gradient-text">
              Need engaging print & Web design for your business?
            </h1>
            <p class="hero-description">
              Building a brand comes with so many questions and frustrations,
              right? Let me help you out with all that graphic and web design
              stuff. <a href="/cranimals.php">link text</a>
            </p>
            <div class="hero-buttons-spacing">
              <!-- Call to Action -->
              <a class="hero-nav-link drop-shadow" href="#link-lets-talk"
                >Let's Talk!</a
              >

              <!-- Go to Portfolio -->
              <a class="hero-nav-link port-cta drop-shadow" href="#link-port"
                >Go to Portfolio</a
              >
            </div>
          </div>

          <!-- hero image box -->

          <div class="hero-image-box" width="760" height="686">
            <lottie-player
              src="/img/lottie/gwhero-test-04.json"
              background="transparent"
              speed="1"
              loop
              autoplay
              alt="Animation of an illustrated Gary Wintle floating among design-related things"
            ></lottie-player>
          </div>
        </div>
      </section>
    </div>

    <!-- *****SERVICES***** -->

    <section class="section-container">
      <div class="section-titletext-container short-top-text-container">
        <h2 id="link-services" class="subheading-title">Services</h2>
        <img
          width="376"
          height="26"
          class="header-underline"
          src="/img/template/gw-underline.svg"
          alt="bezier unlerline decoration"
        />
        <p class="section-body-text">
          Here's some of the tools we'll use to put your branding headaches to
          rest. I'm happy to work solo, in a team, or put together a team to
          make your ideas shine.
        </p>
      </div>
      <div class="services-group">
        <!-- SERVICES / ILLUSTRATIONS -->

        <div class="services-media">
          <img
            width="130"
            height="130"
            class="mediamite-img"
            alt="Cute Illustration Icon"
            src="/img/template/mediamites/mediamite-illustrations.svg"
          />
          <p class="services-type-title">Illustration</p>
          <p class="services-type-subtitle">mascots | books | games</p>
          <p class="services-body">
            I start with pencil and paper to create useful, custom digital
            assets that represent your business.
          </p>
          <div class="small-flex-space">
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe Photoshop Icon"
              src="/img/template/software-logos/icon-photoshop.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe Illustrator Icon"
              src="/img/template/software-logos/icon-illustrator.svg"
            />
          </div>
        </div>

        <!-- SERVICES / GRAPHIC DESIGN -->

        <div class="services-media">
          <img
            width="130"
            height="130"
            class="mediamite-img"
            alt="Cute Graphic Design Icon"
            src="/img/template/mediamites/mediamite-graphicdesign.svg"
          />
          <p class="services-type-title">Graphic Design</p>
          <p class="services-type-subtitle">Signs | Books | Merch</p>
          <p class="services-body">
            I’ve coordinated complex projects from dream to design to print at
            huge volumes for many years.
          </p>
          <div class="small-flex-space">
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe Indesign Icon"
              src="/img/template/software-logos/icon-indesign.svg"
            />
          </div>
        </div>

        <!-- SERVICES / WEB DESIGN -->

        <div class="services-media">
          <img
            width="130"
            height="130"
            class="mediamite-img"
            alt="Cute Web Design Icon"
            src="/img/template/mediamites/mediamite-webdesign.svg"
          />
          <p class="services-type-title">Web Design</p>
          <p class="services-type-subtitle">websites | app design</p>
          <p class="services-body">
            I use my skills as an illustrator and designer in all my UX
            projects. This site was coded by me too.
          </p>
          <div class="small-flex-space">
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Figma Icon"
              src="/img/template/software-logos/icon-figma.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="HTML Icon"
              src="/img/template/software-logos/icon-html.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="CSS Icon"
              src="/img/template/software-logos/icon-css.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Javascript Icon"
              src="/img/template/software-logos/icon-javascript.svg"
            />
          </div>
        </div>

        <!-- SERVICES / MOTION GRAPHICS -->

        <div class="services-media">
          <img
            width="130"
            height="130"
            class="mediamite-img"
            alt="Cute Motion Graphics Icon"
            src="/img/template/mediamites/mediamite-mograph.svg"
          />
          <p class="services-type-title">Motion Graphics</p>
          <p class="services-type-subtitle">Ads | Mobile Games</p>

          <p class="services-body">
            I use vector graphics, after effects and lottie to bring engaging
            motion to your big ideas.
          </p>
          <div class="small-flex-space">
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe After Effects Icon"
              src="/img/template/software-logos/icon-after-effects.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe Premiere Icon"
              src="/img/template/software-logos/icon-premiere.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Adobe Audition Icon"
              src="/img/template/software-logos/icon-audition.svg"
            />
            <img
              width="24"
              height="24"
              class="services-app-logo"
              alt="Lottie Icon"
              src="/img/template/software-logos/icon-lottie.svg"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- *****PORTFOLIO***** -->

    <section class="section-container section-container-portfolio">
      <div
        class="section-titletext-container section-titletext-container-portfolio"
      >
        <h2 id="link-port" class="subheading-title text-ondark drop-shadow">
          Portfolio
        </h2>
        <img
          width="376"
          height="26"
          class="header-underline flipped"
          src="/img/template/gw-underline.svg"
          alt="bezier unlerline decoration"
        />
        <p class="section-body-text text-ondark">
          I've done print and web projects from web banners to fully illustrated
          books. Please check out how I can bring value to your project.
        </p>
      </div>
      <div class="portfolio-grid">
        <!-- Portfolio / Cranimals -->

        <a class="portfolio-link" href="/cranimals.php"
          ><div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-cranimals.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-cranimals.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="Cranimals Zen Dogfood Image"
                src="/img/template/portfolio-thumbnails/port-thumbnail-cranimals.webp"
                loading="lazy"
              />
            </picture>

            <div class="port-thumbnail-textbox">
              <p class="port-type-title">Cranimals</p>
              <p class="port-type-subtitle">mascot | logo | packaging</p>
              <p class="port-body">
                "Zen Dog" branding created to promote healthy dog food.
              </p>
            </div>
          </div></a
        >

        <!-- Portfolio / The Surfin' Burrito -->
        <a class="portfolio-link" href="http://garywintle.com/surfinburrito"
          ><div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-surfin-burrito.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-surfin-burrito.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="The Surfin' Burrito Donkey"
                src="/img/template/portfolio-thumbnails/port-thumbnail-surfin-burrito.webp"
                loading="lazy"
              />
            </picture>
            <div class="port-thumbnail-textbox">
              <p class="port-type-title">The Surfin' Burrito</p>
              <p class="port-type-subtitle">mascot | logo | t-shirt design</p>
              <p class="port-body">
                Mascot redesign for Cancun's world-famous burrito stand.
              </p>
            </div>
          </div></a
        >

        <!-- Portfolio / Pothead Books -->
        <a class="portfolio-link" href="http://garywintle.com/potheadbooks"
          ><div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-phbooks_1.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-phbooks_1.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="Pothead Books Game Character Illustration"
                src="/img/template/portfolio-thumbnails/port-thumbnail-phbooks_1.webp"
                loading="lazy"
              />
            </picture>
            <div class="port-thumbnail-textbox">
              <p class="port-type-title">Pothead Books</p>
              <p class="port-type-subtitle">Books | Boardgames</p>
              <p class="port-body">
                Book and game making from character creation to print.
              </p>
            </div>
          </div></a
        >

        <!-- Portfolio / Rakuten -->
        <a class="portfolio-link" href="http://garywintle.com/rakuten"
          ><div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-rakuten.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-rakuten.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="Rakuten Illustration with a Godzilla-looking kaiju high-fiving a King Kong-looking kaiju"
                src="/img/template/portfolio-thumbnails/port-thumbnail-rakuten.webp"
                loading="lazy"
              />
            </picture>

            <div class="port-thumbnail-textbox">
              <p class="port-type-title">Rakuten</p>
              <p class="port-type-subtitle">Illustration | Promo Merch</p>
              <p class="port-body">
                New York x Tokyo event art and promo merch.
              </p>
            </div>
          </div></a
        >

        <!-- Portfolio / Bumblebee English -->

        <a class="portfolio-link" href="http://garywintle.com/bumblebee">
          <div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-bumblebee.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-bumblebee.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="Cute little bumblebee with Bumblebee English logo"
                src="/img/template/portfolio-thumbnails/port-thumbnail-bumblebee.webp"
                loading="lazy"
              />
            </picture>
            <div class="port-thumbnail-textbox">
              <p class="port-type-title">Bumblebee English</p>
              <p class="port-type-subtitle">Mascot | Logo | Branding</p>
              <p class="port-body">Branding for Osaka-based school.</p>
            </div>
          </div></a
        >

        <!-- Portfolio / Dank Arson -->
        <a class="portfolio-link" href="/messagesent.html"
          ><div class="portfolio-card">
            <picture>
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-dankarson.webp
                "
                type="image/webp"
              />
              <source
                srcset="
                  /img/template/portfolio-thumbnails/port-thumbnail-cocaleaf.png
                "
                type="image/png"
              />

              <img
                width="338"
                height="338"
                class="port-thumbnail-img"
                alt="Dank Arson Logo"
                src="/img/template/portfolio-thumbnails/port-thumbnail-cocaleaf.webp"
                loading="lazy"
              />
            </picture>
            <div class="port-thumbnail-textbox">
              <p class="port-type-title">Dank Arson</p>
              <p class="port-type-subtitle">Branding | motion graphics</p>
              <p class="port-body">
                Motion graphics and branding for Youtube channel.
              </p>
            </div>
          </div></a
        >
      </div>
    </section>

    <!-- *****About Me***** -->

    <section class="section-container additional-bottom-margin">
      <div class="section-titletext-container short-top-text-container">
        <h2 id="link-about" class="subheading-title">About Me</h2>
        <img
          width="376"
          height="26"
          class="header-underline"
          src="/img/template/gw-underline.svg"
          alt="bezier unlerline decoration"
        />
        <p class="section-body-text">
          Hi, I'm Gary Wintle. A Canadian multimedia designer based in Japan.
        </p>
      </div>
      <div class="about-me-grid">
        <div class="about-me-selfie-container">
          <img
            width="440"
            height="440"
            class="about-me-selfie"
            alt="Photo of Gary Wintle"
            src="/img/template/aboutme-garywintle.webp"
            loading="lazy"
          />
        </div>
        <div class="about-me-flex">
          <p class="about-me-bodytext">
            After graduating from Interactive Multimedia at Algonquin College in
            Ottawa, Canada I moved to Vancouver and worked there on Magazine
            illustration and design for productions like Cannabis Culture
            Magazine, Skeet, and Diver Magazine.
          </p>

          <p class="about-me-bodytext">
            Seeing that many of these magazine businesses needed more than just
            magazine design, I soon found a passion in making signage and other
            branding merch for their respective stores.
          </p>
          <p class="about-me-bodytext">
            After travelling and designing around the world for a few years,
            I’ve settled Japan. It’s the perfect place to find artistic design
            inspiration for the many amazing clients I’m lucky enough to work
            with.
          </p>

          <lottie-player
            width="160"
            height="160"
            src="/img/lottie/pencil-01.json"
            class="lottie-pencil"
            background="transparent"
            speed="10"
            loop
            autoplay
          ></lottie-player>
        </div>
      </div>
    </section>

    <!-- *****Let's Talk!***** -->

    <section class="last-container">
      <h2 id="link-lets-talk" class="subheading-title text-ondark">
        Let's Talk!
      </h2>
      <img
        width="376"
        height="26"
        class="header-underline flipped"
        src="/img/template/gw-underline.svg"
        alt="bezier unlerline decoration"
      />
      <p class="section-body-text text-ondark lets-talk-text">
        Email me and I'll get back to you within 24 hours.
      </p>

      <!-- email button -->
      <div class="svg-rollover">
        <a
          href="mailto:&#104;&#101;&#121;&#064;&#103;&#097;&#114;&#121;&#119;&#105;&#110;&#116;&#108;&#101;&#046;&#099;&#111;&#109;?subject=Hey%20Gary%20Wintle!"
          target="_top"
        >
          <img
            class="call-to-action-btn social-media-btn default-svg"
            src="/img/template/contact-svgs/call-to-action-btn.svg"
            alt="Link to Email Gary Wintle"
          />
          <img
            class="call-to-action-btn social-media-btn hover-svg"
            src="/img/template/contact-svgs/call-to-action-btn-hover.svg"
            alt="Gary Wintle's Linkedin Account"
          />
        </a>
      </div>

      <!-- Social Buttons -->

      <div class="social-media-flex">
        <!-- linkedin -->
        <div class="svg-rollover">
          <a
            href="https://www.linkedin.com/in/gary-wintle-9168962/"
            target="_blank"
          >
            <img
              class="social-media-btn default-svg"
              src="/img/template/social-svgs/social-linkedin-default.svg"
              alt="Gary Wintle's Linkedin Account"
            />
            <img
              class="social-media-btn hover-svg"
              src="/img/template/social-svgs/social-linkedin-hover.svg"
              alt="Gary Wintle's Linkedin Account"
            />
          </a>
        </div>
        <!-- instagram -->
        <div class="svg-rollover">
          <a href="https://www.instagram.com/garywintle/" target="_blank">
            <img
              class="social-media-btn default-svg"
              src="/img/template/social-svgs/social-instagram-default.svg"
              alt="Gary Wintle's Instagram Account"
            />
            <img
              class="social-media-btn hover-svg"
              src="/img/template/social-svgs/social-instagram-hover.svg"
              alt="Gary Wintle's Instagram Account"
            />
          </a>
        </div>

        <!-- Twitter/X -->
        <div class="svg-rollover">
          <a href="https://twitter.com/GaryWintle" target="_blank">
            <img
              class="social-media-btn default-svg"
              src="/img/template/social-svgs/social-x-default.svg"
              alt="Gary Wintle's X Account"
            />
            <img
              class="social-media-btn hover-svg"
              src="/img/template/social-svgs/social-x-hover.svg"
              alt="Gary Wintle's X Account"
            />
          </a>
        </div>
        <!-- Dribbble -->
        <div class="svg-rollover">
          <a href="https://dribbble.com/GaryWintle" target="_blank">
            <img
              class="social-media-btn default-svg"
              src="/img/template/social-svgs/social-dribbble-default.svg"
              alt="Gary Wintle's Dribbble Account"
            />
            <img
              class="social-media-btn hover-svg"
              src="/img/template/social-svgs/social-dribbble-hover.svg"
              alt="Gary Wintle's Dribbble Account"
            />
          </a>
        </div>
      </div>
    </section>

    <!-- *****Footer***** -->

    <footer class="footer-container">
      <span class="footer-text"
        >© <span class="year">0000</span> Gary Wintle Inc. Illustrated,
        designed, animated, and coded by hand. All rights reserved.</span
      >
    </footer>
  </body>
</html>
