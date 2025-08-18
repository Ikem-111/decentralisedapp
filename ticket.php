<!DOCTYPE html>
<html>
<head>
    <title>My Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .ticket-card {
            border-left: 5px solid #28a745;
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .ticket-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .ticket-info {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .ticket-card a {
            text-decoration: none;
        }
        .ticket-card a:hover {
            text-decoration: underline;
        }   
        .ticket{
  font-family: "Satisfy", cursive;
  font-weight: 400;
  font-style: normal;
        }
    </style>
</head>
<body>
<div class="container my-4 ">

<div class="row justify-content-center align-items-center">


<div class="col-6 justify-content-center align-items-center">


    <h2 class="mb-4 ticket"><i class="fas fa-ticket-alt"></i> My Tickets</h2>
    <hr>

    <!-- Ticket Example -->
    <div class="ticket-card">
        <div class="ticket-title">Afrobeat Concert</div>
        <div class="ticket-info">
            <i class="fas fa-calendar-alt"></i> 25 Aug 2025  
            &nbsp; | &nbsp; 
            <i class="fas fa-map-marker-alt"></i> Lagos, Nigeria  
            &nbsp; | &nbsp; 
            <i class="fas fa-money-bill-wave"></i> ₦5,000
        </div>
        <a href="#" class="btn btn-sm btn-success mt-2">
            <i class="fas fa-download"></i> Download Ticket
        </a>
    </div>

    <!-- Another Ticket -->
    <div class="ticket-card">
        <div class="ticket-title">Tech Conference 2025</div>
        <div class="ticket-info">
            <i class="fas fa-calendar-alt"></i> 10 Sep 2025  
            &nbsp; | &nbsp; 
            <i class="fas fa-map-marker-alt"></i> Abuja, Nigeria  
            &nbsp; | &nbsp; 
            <i class="fas fa-money-bill-wave"></i> ₦15,000
        </div>
        <a href="#" class="btn btn-sm btn-success mt-2">
            <i class="fas fa-download"></i> Download Ticket
        </a>
    </div>
    </div>
</div>
</div>
</body>
</html>
