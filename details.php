<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Details</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .event-banner img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      border-radius: 10px;
    }
    .event-info {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .event-info:hover {
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      /* transform: translateY(-5px); */
      border: 1px solid #007bff;
    }
    .event-title {
      font-family: 'Clash Display', sans-serif;
      color: #333;
    }
    .event-info p {
      color: #555;
    }

    
  </style>
</head>
<body>

<div class="container my-4">
  <!-- Event Banner -->
  <div class="event-banner mb-4">
    <img src="images/explore/evmusic.jpg" alt="Event Banner">
  </div>

  <!-- Event Info -->
  <div class="event-info">
    <h2 class="event-title ">Summer Music Festival</h2>
    <p><i class="fas fa-calendar"></i> Aug 25, 2025 | <i class="fas fa-clock"></i> 6:00 PM - 11:00 PM</p>
    <p><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</p>

    <hr>

    <h5>About the Event</h5>
    <p>
      Join us for the biggest music festival of the year! Enjoy performances from top artists,
      amazing food stalls, and a vibrant crowd. This is the perfect event for music lovers of all ages.
    </p>

    <hr>

    <h5>Organizer</h5>
    <p><i class="fas fa-user"></i> XYZ Events Company</p>
    <p><i class="fas fa-envelope"></i> contact@xyzevents.com</p>

    <hr>

    <!-- Action Buttons -->
    <a href="getticket.php" class="btn btn-success"><i class="fas fa-ticket-alt"></i> Buy Tickets</a>
    <a href="#" class="btn btn-outline-primary"><i class="fas fa-share-alt"></i> Share</a>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
