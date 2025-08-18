<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Events</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
      <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<!-- Font Awesome 6 CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


  <style>
    body {
      background-color: #f8f9fa;
    }
    .search-bar {
      background: white;
      border-radius: 50px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 10px 20px;
    }
    .event-card img {
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
    }
    .event-card {
      transition: transform 0.2s ease;
    }
    .event-card:hover {
      transform: translateY(-5px);
    }
      .hero {
  font-family: "Satisfy", cursive;
  font-weight: 400;
  font-style: normal;
}
  </style>
</head>
<body>
  <div class="row">
    <div class="col">
     <a href="index.php"> <h4 class="hero ms-2 mt-4 fixed-top">Evion</h4></a>
    </div>
  </div>

<!-- Search & Filter -->
<section class="container my-4">
  <div class="search-bar d-flex align-items-center">
    <input type="text" class="form-control border-0" placeholder="Search events">
    <button class="btn btn-primary ms-2"><i class="fas fa-search"></i></button>
  </div>
</section>

<!-- Categories -->
<section class="container mb-4">
  <div class="d-flex flex-wrap gap-2">
    <button class="btn btn-outline-primary btn-sm"><i class="fas fa-music"></i> Music</button>
    <button class="btn btn-outline-primary btn-sm"><i class="fas fa-briefcase"></i> Business</button>
    <button class="btn btn-outline-primary btn-sm"><i class="fas fa-futbol"></i> Sports</button>
    <button class="btn btn-outline-primary btn-sm"><i class="fas fa-utensils"></i> Food</button>
    <button class="btn btn-outline-primary btn-sm"><i class="fas fa-theater-masks"></i> Arts</button>
  </div>
</section>

<!-- Featured Events -->
<section class="container mb-5">
  <h4 class="mb-3">Featured Events</h4>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evmusic.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Summer Music Festival</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Aug 25, 2025 | <i class="fas fa-map-marker-alt"></i> Lagos</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evtechnology.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Tech Innovators Meetup</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Sept 2, 2025 | <i class="fas fa-map-marker-alt"></i> Abuja</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evfood.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Food Lovers' Fiesta</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Sept 10, 2025 | <i class="fas fa-map-marker-alt"></i> Online</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
  </div>
 
</section>
<!-- All Events -->
<section class="container mb-5">
  <h4 class="mb-3">All Events</h4>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evart1.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Summer Art Festival</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Aug 25, 2025 | <i class="fas fa-map-marker-alt"></i> Lagos</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evtechnology.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Tech Innovators Meetup</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Sept 2, 2025 | <i class="fas fa-map-marker-alt"></i> Abuja</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card event-card">
        <img src="images/explore/evfood.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Food Lovers' Fiesta</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Sept 10, 2025 | <i class="fas fa-map-marker-alt"></i> Online</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-4 mt-3">
      <div class="card event-card">
        <img src="images/explore/evsports.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Sports Extravaganza</h5>
          <p class="card-text"><i class="fas fa-calendar"></i> Sept 10, 2025 | <i class="fas fa-map-marker-alt"></i> Online</p>
          <a href="details.php" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
