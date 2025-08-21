<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Ticket</title>
  <style>
  /* 🎟 Gradient Background */
body {
  background: linear-gradient(135deg, #ff7e5f, #feb47b);
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

/* Main Form */
.form {
  background: rgba(0, 0, 0, 0.8);
  padding: 30px;
  border-radius: 15px;
  width: 380px;
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
  color: white;
}

/* Labels */
.flex-column label {
  color: #ff914d;
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
}

/* Input Container */
.inputForm {
  display: flex;
  align-items: center;
  border: 1px solid #444;
  border-radius: 8px;
  margin-bottom: 15px;
  padding: 10px;
  background: #222;
}

/* Inputs */
.inputForm .input,
.inputForm select {
  border: none;
  outline: none;
  background: transparent;
  color: white;
  width: 100%;
  font-size: 14px;
}

/* Placeholder */
.inputForm .input::placeholder {
  color: #aaa;
}

/* File input */
input[type="file"] {
  color: white;
  cursor: pointer;
}

/* Submit Button */
.button-submit {
  background: #ff914d;
  border: none;
  padding: 12px;
  border-radius: 10px;
  color: white;
  font-size: 16px;
  font-weight: bold;
  width: 100%;
  cursor: pointer;
  transition: background 0.3s;
}

.button-submit:hover {
  background: #ff7e5f;
}

  </style>
</head>
<body>
<!-- 🎟 Event Ticket Creation Form -->
<form class="form" method="POST" action="process_ticket.php" enctype="multipart/form-data" class="align-items-center justify-content-center">
  <h2 style="text-align:center; color:white; margin-bottom:15px;">🎟 Create Event Ticket</h2>

  <!-- Event Name -->
  <div class="flex-column">
    <label>Event Name</label>
  </div>
  <div class="inputForm">
    <input placeholder="Enter Event Name" class="input" type="text" name="event_name" required />
  </div>

  <!-- Date -->
  <div class="flex-column">
    <label>Date & Time</label>
  </div>
  <div class="inputForm">
    <input class="input" type="datetime-local" name="event_date" required />
  </div>

  <!-- Location -->
  <div class="flex-column">
    <label>Location</label>
  </div>
  <div class="inputForm">
    <input placeholder="Event Location" class="input" type="text" name="event_location" required />
  </div>

  <!-- Ticket Price -->
  <div class="flex-column">
    <label>Ticket Price ($)</label>
  </div>
  <div class="inputForm">
    <input placeholder="e.g. 20" class="input" type="number" name="ticket_price" min="0" required />
  </div>

  <!-- Ticket Type -->
  <div class="flex-column">
    <label>Ticket Type</label>
  </div>
  <div class="inputForm">
    <select class="input" name="ticket_type" required>
      <option value="General">General</option>
      <option value="VIP">VIP</option>
      <option value="Student">Student</option>
    </select>
  </div>

  <!-- Upload Banner -->
  <div class="flex-column">
    <label>Upload Event Banner</label>
  </div>
  <div class="inputForm">
    <input class="input" type="file" name="banner" accept="image/*" required />
  </div>

  <!-- Submit -->
  <button class="button-submit" type="submit" name="create_ticket">Create Ticket</button>
</form>
    <!-- <p class="note">Note: All fields are required. Please ensure the information is accurate before submitting.</p> -->

</body>
</html>
