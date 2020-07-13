<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand lato w-25" href="index.php" id="title">Compact Roofing</a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">Menu
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">';
    if ($rest === 'index.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>';
    }
    if ($rest === 'books.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>';
    }
    if ($rest === 'blog.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="services.php">Services</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>';
    }
    if ($rest === 'about.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="about.php">About Us</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>';
    }
    if ($rest === 'contact.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>';
    }
    echo '</ul>'; 
  echo '<a class="btn btn-primary" type="button" href="tel:+447380371224"><img src="images/p-icon.png" width="50" height="50" alt="Call logo image">Call Now</a>';
?>
  </div>
</nav>
