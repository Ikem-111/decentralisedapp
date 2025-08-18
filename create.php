


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<!-- Font Awesome 6 CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


<!-- fonts end -->
    
    <title>Create Event</title>
</head>
<style>
    .bgimage {
        background: url('images/evparty.jpg') no-repeat center center;
        background-size: cover;
        width: 100%;
        background-position: center;
        background-color: rgba(0, 0, 0, 0.8);
        height: 200px;
    }
      .hero {
  font-family: "Satisfy", cursive;
  font-weight: 400;
  font-style: normal;
}
.texts{
    font-family: "Fira Sans", sans-serif;
    font-weight: 300;
    font-style: normal;
}
</style>
<body>
    <div>
        <button class="btn btn-dark mt-2 m-3 "><a href="index.php">go back</a></button>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7 mt-5">
                <h1 class="text-center hero  border-bottom">Create Event</h1>
                 <div class="col mt-5 border border-primary border-5 p-3 rounded">
                    <p class="text-center texts">Create an event to share with your friends and family. Fill out the form below to get started.</p>
                <img src="https://via.placeholder.com/400" alt="">
               <a href="#eventImage"> <h1 class="mt-5  text-center bgimage" > <i class="fa-solid fa-file-image mt-5"></i></h1></a>
                <input type="file" class="form-control mt-5 align-item-center justify-content-center" id="eventImage" name="eventImage" required>
                <small class="form-text text-muted">Upload an image for the event</small>

            </div>

            <br>

               <div class="col-12  mt-5">
                <div class=" border border-primary rounded p-3 mt-5">
                  <form action="process/process_create_event.php" method="post">
                    <div class="mb-3">
                        <label for="eventName" class="form-label"><h3 class="hero">Event Name</h3> <br>Be clear and descriptive with a title that tells people what your event is about.</label>
                        <input type="text" class="form-control" id="eventName" name="eventName" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDescription" class="form-label texts">Event Summary <br>
Grab people's attention with a short description about your event. Attendees will see this at the top of your event page. (140 characters max)</label>
                        <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3" required></textarea>
                    </div>
</div>
                    <div class=" border border-primary rounded p-3 mt-5">
                        <h2 class="hero">Date and location </h2>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventTime" class="form-label">Event Time</label>
                        <input type="time" class="form-control" id="eventTime" name="eventTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventLocation" class="form-label">Event Location</label>
                        <input type="text" class="form-control" id="eventLocation" name="eventLocation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Event</button>
</div>
                </form>

               </div>
              
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="hero mt-3 ">See you Soon...</h3>
            </div>
        </div>
    </div>


</body>
</html>