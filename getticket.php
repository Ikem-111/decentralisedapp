<!DOCTYPE html>
<html>
<head>
    <title>Get Ticket - Afrobeat Concert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .event-banner {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }
        .ticket-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container my-4">

    <!-- Event Banner -->

    <img src="images/evdavido.jpeg" alt="Afrobeat Concert" class="event-banner mb-4">

    <!-- Event Info -->

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <h2>Afrobeat Concert</h2>
                <p><i class="fas fa-calendar-alt"></i> 25 Aug 2025 &nbsp; | &nbsp;
                    <i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</p>
                <p>Experience a night of electrifying Afrobeat music with top artists performing live. Don’t miss out!</p>

    <!-- Ticket Purchase Section -->
    <div class="ticket-box mt-4">
        <h4><i class="fas fa-ticket-alt"></i> Select Your Ticket</h4>
        <form action="mytickets.html" method="get">
            <div class="mb-3">
                <label class="form-label">Ticket Type</label>
                <select class="form-select" required>
                    <option value="">-- Select --</option>
                    <option>Regular - ₦5,000</option>
                    <option>VIP - ₦15,000</option>
                </select>
            </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
 <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" min="1" value="1" required>
            </div>
            <button type="submit" class="btn btn-success w-100">
                <i class="fas fa-check-circle"></i> Confirm Purchase
            </button>
        </form>
    </div>
    </div>
</div>
</body>
</html>
