<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen | Developing our brand</title>


  <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
  <!-- INCLUDE HEAD.PHP end -->

  <!-- META Page-Specific -->
  <meta property="og:title" content="Polyfen | Developing our brand"/>
  <meta property="og:url" content="http://polyfen.com/developing-our-brand.php"/>
  <meta name="keywords" content="Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo, Case Study" />
  <meta name="description" property="og:description" content="Polyfen is a
  creative agency specializing in brand identity design. Our small and efficient team of experts from around the world is run by four partners with backgrounds in business, design, tech, and marketing." />
  <meta property="og:image" content="[TBD]"/>
  <meta name="robots" content="index, follow">

  <!-- PAGE-SPECIFIC CSS -->
  <link rel="stylesheet" href="app/css/case-studies.css" type="text/css">

  <!-- PAGE-SPECIFIC SCRIPTS -->
  <script type="text/javascript">
  $(window).scroll(function () {
    var st = $(window).scrollTop();
    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    if (scrollBottom <= 200) {
          $("#pearl-07").removeClass("pearl-07-INACTIVE").addClass("pearl-07-ACTIVE");
          $("#pearl-08").removeClass("pearl-08-INACTIVE").addClass("pearl-08-ACTIVE");
          $("#pearl-09").removeClass("pearl-09-INACTIVE").addClass("pearl-09-ACTIVE");
          $("#pearl-10").removeClass("pearl-10-INACTIVE").addClass("pearl-10-ACTIVE");
      }
    if (scrollBottom > 200) {
          $("#pearl-07").addClass("pearl-07-INACTIVE").removeClass("pearl-07-ACTIVE");
          $("#pearl-08").addClass("pearl-08-INACTIVE").removeClass("pearl-08-ACTIVE");
          $("#pearl-09").addClass("pearl-09-INACTIVE").removeClass("pearl-09-ACTIVE");
          $("#pearl-10").addClass("pearl-10-INACTIVE").removeClass("pearl-10-ACTIVE");
      }
    });
  </script>
  </head>

  <body id="developing-our-brand" class="case-study">

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <section id="title">
      <h1>Developing our own brand</h1>
      <div id="pearl-11" class="pearl rotate-slower">
      </div>
      <div id="pearl-12" class="pearl rotate">
      </div>
    </section>

    <section id="brand-research">
      <h2>Brand Research</h2>
      <p>We conducted an exhaustive analysis of our business proposal, our industry and competitors, and our audience.</p>
      <p>Our conclusion was that most of our competitors market themselves as (A) business-oriented targeting an executive audience with a very sober and simple visual identity, while (B) the other half of our competitors focus on expressing their creative talent gaining popularity amongst the creative industry with a very quirky and playful brand.</p>
      <p>Based on our business proposal, our conclusion was to position our brand as something in between the business-oriented and the peculiarly creative.</p>
    </section>

    <section id="brand-research">
      <h2>Brand Strategy</h2>
      <p>We developed a strategy for expressing our business proposal as a brand focused on the core concept <strong>The midpoint between business & creativity</strong>.</p>
      <p>We adopted <strong>Polyfen</strong> as a short, simple, memorable brand name that also carries a sound of playfulness as an abstract word with no other meaning.</p>
      <img src="imgs/case-studies/developing-our-own-brand/MOODBOARD_PLY_Brand.png" style="max-width:100%;border-radius:8px;">
    </section>

    <div style="clear:both;">
    </div>

    <section id="visual-identity">
      <h2>Visual Identity</h2>
      <p>Our core concept is reflected in visual form with a logo that is as distinctive and playful as possible while remaining as clean, simple, and memorable as possible. The same can be said of our other visual identity elements…</p>
      <p>Our typographic selection features <a href="https://www.myfonts.com/fonts/kastelov/intelo/" target="_blank">Intelo Alt</a> on headings, a clean and geometric typeface with a distinctively playful character, most noticeable in the roundness of the letter “e”; paired with <a href="https://www.myfonts.com/fonts/garagefonts/freight-text-pro/" target="_blank">Freight Text Pro</a>,  a clean and readable face for all body text.</p>
      <p>The colour scheme is characterised by a particular accent colour that can be identified as Polyfen Indigo, a vibrant and memorable hue between blue and purple.</p>
      <p>Our visual language compliments the other elements of our visual identity by featuring a system of 3D visual elements similar to pearls, which can be featured on the backgrounds of our brand touchpoints as a trademark that makes our visual identity distinctive and memorable.</p>
    </section>

    <section id="brand-guidelines">
      <h2>Brand Guidelines</h2>
      <p>To ensure a consistent use of all the parameters that we have established to identify our brand, we developed a web page with all guidelines and resources necessary for our organization. The web guidelines can be updated as our brand evolves, and it’s conveniently accessible at <a href="http://polyfen.com/brand" target="_blank">polyfen.com/brand</a>.</p>
    </section>

    <section id="brand-touchpoints">
      <h2>Brand Touchpoints</h2>
      <p>We designed a system of all the branded applications that our business needed; Including email signatures, social media profiles, business cards, letterheads, invoices, and Presentation slides.</p>
    </section>

    <section id="web-development">
      <h2>Web Development</h2>
      <p>Our website, the centrepiece of our online presence, features concise and relevant content set in a clean and readable layout with prominent visual elements along with interactive animations which offer a unique user experience.</p>
    </section>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
