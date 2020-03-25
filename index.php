<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="css/main.css">

  <title>Bookmark landing page</title>
</head>

<body>
  <?php 
    include('header.php');
  ?>
  <section id="hero">
    <div class="hero-image">
      <img src="./images/illustration-hero.svg" alt="hero-image">
      <div class="hero-image-bg"></div>
    </div>

    <div class="hero-content">
      <h1><strong>A Simple Bookmark Manager</strong></h1>
      <p>
        A clean and simple interface to organize your favourite websites. Open a new
        browser tab and see your sites load instantly. Try it for free.
      </p>
      <button class="btn-blue">Get it on Chrome</button>
      <button class="btn-gray">Get it on Firefox</button>
    </div>
  </section>

  <main>
    <section id="features">
      <div class="features-aim">
        <h2>Features</h2>
        <p>
          Our aim is to make it quick and easy for you to access your favourite websites.
          Your bookmarks sync between your devices so you can access them on the go.
        </p>

        <div class="features-aim-bg"></div>
        <button type="button" class="features-aim-btn">More Info</button>
        <ul role="tablist" class="features-aim-tablists">
          <li id="tab1" aria-controls="panel1" role="tab" aria-selected="true">Simple Bookmarking</li>
          <li id="tab2" aria-controls="panel2" role="tab" aria-selected="false">Speedy Searching</li>
          <li id="tab3" aria-controls="panel3" role="tab" aria-selected="false" >Easy Sharing</li>
        </ul>
      </div>

      <div id="panel1" class="tab" role="tabpanel" aria-labelledby="tab1" aria-hidden="false">
        <div class="tab-image">
          <img src="./images/illustration-features-tab-1.svg" alt="feature-tab1-image">
        </div>
        <div class="tab-content">
          <h2>Bookmark in one click</h2>
          <p>
            Organize your bookmarks however you like. Our simple drag-and-drop interface
            gives you complete control over how you manage your favourite sites.
          </p>
        </div>
      </div>

      
      <div id="panel2" class="tab" role="tabpanel" aria-labelledby="tab2" aria-hidden="true">
        <div class="tab-image">
          <img src="./images/illustration-features-tab-2.svg" alt="feature-tab2-image">
        </div>
        
        <div class="tab-content">
          <h2>Intelligent search</h2>
          <p>
            Our powerful search feature will help you find saved sites in no time at all.
            No need to trawl through all of your bookmarks.
          </p>
        </div>
      </div>

      <div id="panel3" class="tab" role="tabpanel" aria-labelledby="tab3" aria-hidden="true">
        <div class="tab-image">
          <img src="./images/illustration-features-tab-3.svg" alt="feature-tab3-image">
        </div>
        
        <div class="tab-content">
          <h2>Share your bookmarks</h2>
          <p>
            Easily share your bookmarks and collections with others. Create a shareable
            link that you can send at the click of a button.
          </p>
        </div>
      </div>

    </section>

    <section id="downloads">
      <div class="downloads-content">
        <h2>Download the extension</h2>
        <p>
          We’ve got more browsers in the pipeline. Please do let us know if you’ve
          got a favourite you’d like us to prioritize.
        </p>
      </div>

      <div class="downloads-extensions">
        <div class="extension">
          <img src="./images/logo-chrome.svg" alt="logo-chrome">
          <h3>Add to Chrome</h3>
          <p>Minimum version 62</p>
          <img class="dots" src="./images/bg-dots.svg" alt="bg-dots">
          <button>Add & Install Extension</button>
        </div>

        <div class="extension">
          <img src="./images/logo-firefox.svg" alt="logo-firefox">
          <h3>Add to Firefox</h3>
          <p>Minimum version 55</p>
          <img class="dots" src="./images/bg-dots.svg" alt="bg-dots">
          <button>Add & Install Extension</button>
        </div>

        <div class="extension">
          <img src="./images/logo-opera.svg" alt="logo-opera">
          <h3>Add to Opera</h3>
          <p>Minimum version 46</p>
          <img class="dots" src="./images/bg-dots.svg" alt="bg-dots">
          <button>Add & Install Extension</button>
        </div>
      </div>

    </section>

    <section id="faqs">
      <div class="faqs-info">
        <h2>Frequently Asked Questions</h2>
        <p>
          Here are some of our FAQs. If you have any other questions you’d like
          answered please feel free to email us.
        </p>
      </div>

      <ul class="faqs-lists">
        <li class="question">
          What is Bookmark?
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12">
            <path class="icon-arrow" fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/>
          </svg>
        </li>
        <p class="answer hide">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt
          justo eget ultricies fringilla. Phasellus blandit ipsum quis quam ornare mattis.
        </p>
        <li class="question">
          How can I request a new browser?
          <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="12">
            <path class="icon-arrow" fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/>
          </svg>
        </li>
        <p class="answer hide">
          Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula.
          Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa,
          ultricies non ligula. Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
          Mauris augue massa, ultricies non ligula. Suspendisse imperdiet.
        </p>

        <li class="question">
          Is there a mobile app?
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12">
            <path class="icon-arrow" fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/>
          </svg>
        </li>
        <p class="answer hide">
          Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut condimentum
          urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra purus. Sed
          sollicitudin ex et ultricies bibendum.
        </p>

        <li class="question">
          What about other Chromium browsers?
        
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12">
          <path class="icon-arrow" fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/>
        </svg>
          
        </li>
        <p class="answer hide">
          Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui. Aliquam
          vitae neque eget nisl gravida pellentesque non ut velit.
        </p>
      </ul>

      <button type="button">More Info</button>
    </section>
  </main>

  <section id="emailcallout">
    <div>
      <p>35,000+ already joined</p>
      <h2>Stay up-to-date with what we’re doing</h2>
      <form action="" id="email-form" target="javascript:void(0)">
        <input type="text" id="email" placeholder="Enter your email address" required>
        <button id="submit-btn" target="javascript:void(0)" type="submit">Contact Us</button>
      </form>
      <div class="invalid-feedback hide"></div>
    </div>
  </section>

  <?php 
    include('footer.php');
  ?>
  <script src="js/main.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
</body>

</html>