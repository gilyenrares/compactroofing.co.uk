<!DOCTYPE html>
<html lang="en">
<head>
	<title>About | Compact Roofing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	
<!-- Info Banner -->
<?php include 'sections/info-banner.sec.php';?>


<!-- Navigation -->
<?php include 'sections/navigation.sec.php';?>

<!--About us-->
<div class="container my-5">    
  <h1 class="display-5 text-center">About <b>Compact Roofing</b></h1>
</div>

<!-- Main body -->
<div class="my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">
    <div class="bg-black text-center text-white p-5">
        <h2>Our Background</h2>
    </div>
  <section class="p-5">
    <article>
    	<img src="images/tile-roof.jpg" class="rounded float-left w-25 m-5" alt="Compact Roofing logo">
    	<p>Compact Roofing offers a complete service pack, and can help with all aspects of roofing – from fixing a slipped slate or clearing a blocked gutter to completely replacing a roof – ensuring nothing is out of place and that water leaks are a thing of the past.</p>

    	<p>We work hand-in-hand with our clients, providing regular updates on progress with their roofing project. From the first site visit, estimate and schedule of works through to completion, we are there for you every step of the way.</p>

    	<p>References are available on our <a href="gallery.php">Gallery</a> page, these can give you an idea of the quality and pride taken in our work. Please also feel free to visit our roofing services page for more details about our services.</p>

		<p>Following initial inspection of your roof, you will receive a planned, easy-to-follow estimate with a schedule of works. This means you can rest assured that you’re getting what you pay for, carried out to the highest of industry standards, at a competitive price – all with a personal service that cannot be beaten.</p>

    	<p>We are generaly providing our services across  London and Essex, and you'll be pleased to know we have completed many successful projects with a multitude of clients across our area. Our company has an excellent reputation in both the private and commercial sectors, offering everything from the smallest roof repair to brant new roofing projects.</p>

		<p>When looking for a reputable roofing company, you need to know that they are fully qualified and vetted, competent at what they do and will get the job done efficiently and professionally at an affordable price.</p>
  		</article>
  </section>
  </div>
</div>

<div class="my-5">
  <div class="bg-dark border-top border-danger rounded">
    <div class="bg-dark text-center text-white p-5">
          <h2 class="display-5 text-center">Review <b>Compact Roofing</b> Services</h2>
    </div>
    <section class="container bg-white mt-3 p-3" id="review">
       <!-- review form -->
      <form action="includes/review.inc.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="firstName">Your Name:</label>
              <input type="text" class="form-control" name="rfn" id="firstName" placeholder="Example: John Lewis or John L." value="<?php if (isset($_GET['rfn'])) {echo $_GET['rfn'];} ?>" required="required">
          </div>
          <div class="form-group col-md-6">
              <label for="lastName">Job Requested:</label>
              <input type="text" class="form-control" name="rst" id="lastName" placeholder="Shortly describe the service you requested" value="<?php if (isset($_GET['rst'])) {echo $_GET['rst'];} ?>" required="required">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputRateing">Rate our service from 1-5 Stars:</label>
              <select id="inputRateing" name="rating" class="form-control" required="required">
              <option>5</option>
              <option>4.5</option>
              <option>4</option>
              <option>3.5</option>
              <option>3</option>
              <option>2.5</option>
              <option>2</option>
              <option>1.5</option>
              <option>1</option>
              </select>
          </div>
          <div class="form-group col-md-6">
              <label for="code">Authorisation code:</label>
              <input type="text" class="form-control" name="otc" id="code" placeholder="6 Digit Code" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="description">Your Review</label>
          <textarea  class="form-control" name="rdescription" id="description" rows="4" placeholder="How did we do.." value="<?php if (isset($_GET['rdescription'])) {echo $_GET['rdescription'];} ?>" required="required"></textarea>
        </div>
        <p><i>*Your review will be posted on the website shortly</i></p>
        <div class="btn-group btn-group-lg d-flex mt-2" role="group" aria-label="Basic example">
          <button type="submit" class="btn btn-success border-secondary mr-2 rounded text-white" name="review-submit">Submit Review</button>
          <a type="button" class="btn btn-warning border-secondary rounded text-white" href="https://rbg-dev.com/contact.php" target="_blank">Report Issue *</a>
        </div> 
      </form>
    </section>
  </div>
</div>  
<div class="my-5">
  <div class="shadow-lg bg-white border-top border-danger rounded">    
    <div class="bg-primary text-center text-white p-5">
          <h2 class="display-5 text-center"><b>Compact Roofing</b> Reviews</h2>
    </div>
    <section class="container p-3">
      <?php include'includes/review-open.inc.php' ?>
    </section>
  </div>
</div>


<!-- Footer -->
<?php include "sections/footer.sec.php" ?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>