<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="./css/price.css">
  
  <title>Bookmark Price</title>
</head>
<body>
  <?php 
    include('header.php');
  ?>
  <main id="price-layout">
    <div class="price-toggle">
      <h1>Our Pricing</h1>
      <div class="toggle-switch" style="display: inline-block;">
        <input type="checkbox" id="switch">
        <label for="switch"></label>
      </div>
    </div>
    
    <div class="basic plans">
      <h4>Basic</h4>
      <p class="price">199.99</p>
      <ul class="features">
        <li>500 GB Storage</li>
        <li>2 Users Allowed</li>
        <li class="bottom-border">Send up to 3 GB</li>
      </ul>
      <button class="white-button">Learn More</button>
    </div>

    <div class="professional plans">
      <h4>Professional</h4>
      <p class="price">249.99</p>
      <ul class="features">
        <li>1 TB Storage</li>
        <li>5 Users Allowed</li>
        <li class="bottom-border">Send up to 10 GB</li>
      </ul>
      <button class="blue-button">Learn More</button>
    </div>

    <div class="master plans">
      <h4>Master</h4>
      <p class="price">399.99</p>
      <ul class="features">
        <li>2 TB Storage</li>
        <li>10 Users Allowed</li>
        <li class="bottom-border">Send up to 20 GB</li>
      </ul>
      <button class="white-button">Learn More</button>
    </div>
  </main>
  <?php 
    include('footer.php');
  ?>
  <script src="/js/main.js" type="text/javascript"></script>
  <script src="/js/price.js" type="text/javascript"></script>
</body>
</html>