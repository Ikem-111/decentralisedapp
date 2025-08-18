
<!DOCTYPE html>
<html>
<head>
    <title>Buy Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
    <h2>Buy Ticket for: <?php echo $event['title']; ?></h2>
    <p>Date: <?php echo $event['event_date']; ?></p>
    <p>Price: ₦<?php echo $event['ticket_price']; ?></p>

    <form action="process_payment.php" method="POST">
        <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
        <div class="mb-3">
            <label>Your Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Your Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Proceed to Payment</button>
    </form>
</div>
</body>
</html>