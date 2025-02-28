<!DOCTYPE html>
<!-- ICS2O-Unit1-07-HTML-MDL-PHP -->
<html lang="en-ca">
  <head>
  <meta charset="utf-8" />
  <meta name="description" content="My first webpage, with JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina.peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
    <title>Hello, World!, PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Hello, World!, PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="page-content">
          <?php echo '<p>Hello, World!, in PHP</p>'; ?>
        </div>
        <img src="./images/image.png" />
        <!-- Simple Textfield for integers-->
        <form action="#">
          <br />
          <!-- Raised button with ripple -->
        </form>
      </main>
    </div>
  </body>
</html>
