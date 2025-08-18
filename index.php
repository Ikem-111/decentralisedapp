<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<!-- Font Awesome 6 CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


<!-- fonts end -->

    <title>EvioN</title>
</head>
<style>

      .search-bar {
      background: white;
      border-radius: 50px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      padding: 5px 15px;
      display: flex;
      align-items: center;
      max-width: 600px;
      margin: auto;
    }
    .search-bar input {
      border: none;
      outline: none;
      flex: 1;
      padding: 8px 10px;
      font-size: 16px;
    }
    .search-bar select {
      border: none;
      outline: none;
      background: none;
      padding: 8px 10px;
      font-size: 16px;
    }
    .search-btn {
      background: #ff5a5f;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 18px;
    }
    .search-btn:hover {
      background: #e0494d;
    }

    .event-carousel {
      max-width: 1100px; /* Matches Eventbrite’s centered width */
      margin: auto;
      border-radius: 15px;
      overflow: hidden;
    }
    .event-carousel img {
      object-fit: cover;
      height: 400px; /* Same height look as Eventbrite */
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0,0,0,0.5);
      border-radius: 50%;
      padding: 15px;
    }
  
    .herotxt{
        font-family:'Clash Display', sans-serif;
        font-size:48px;
        text-align:center;
        font-weight:550;
    }
    body{
        background-color: #f8f8f8;
        font-size: 20px;
        font-family:'Open sans', sans-serif;
    }

    div{
        /* border: 1px solid red; */
    }
    .hero {
  font-family: "Satisfy", cursive;
  font-weight: 400;
  font-style: normal;
}


    p{
        color:#4a4a4a;
    }

    /* Event slider Begins */
 .event-slider {
    position: relative;
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
  }
  .event-cards {
    display: flex;
    transition: transform 0.5s ease;
  }
  .event-card {
    flex: 0 0 25%; /* 4 cards per view */
    position: relative;
    overflow: hidden;
    margin: 0 5px;
    border-radius: 5px;
  }
  .event-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
  }
  .event-info {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 10px;
    background: linear-gradient(transparent, rgba(0,0,1,0.9));
    /* border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    backdrop-filter: blur(5px); */

    color: white;
  }
  .event-info h5 {
    font-weight: bold;
    margin-bottom: 5px;
  }
  .event-info small {
    color: #ff9966;
  }
  .slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
  }
  .slider-btn.left {
    left: 10px;
  }
  .slider-btn.right {
    right: 10px;
  }

    /* Event slider ends */
    a{
      text-decoration: none;
      color: inherit;
    }
    /* .cards:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);

    } */
      /* ui.verse */
      
      /* ui.verse ends */

</style>
<body>
    
    <div class="container-fluid-3">
        <!-- Nav -->
        <div class="row">
            <div class="col border border-dark nvi fluid fixed-top">
                <nav class="navbar navbar-expand-lg bg-white py-3 ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" style="font-family:'Satisfy', cursive;"><b>Evio<i>N</i></b></a>
                         <div class="search-bar ms-5 ">
  <i class="fas fa-search text-muted"></i>
  <input type="text" placeholder="Search events">
  <select>
    <option value="lagos">Lagos</option>
    <option value="abuja">Abuja</option>
    <option value="port-harcourt">Port Harcourt</option>
  </select>
  <button class="search-btn">
    <i class="fas fa-search"></i>
  </button>
</div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                              <li  class="nav-item mt-3 me-3 hero">
                                <a href="ticket.php"> <h6>My-Tickets   <i class="fa-solid fa-ticket fa-beat"></i></h6></a>
                              </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginmode">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registermode">Register</a>
                                </li>
                               
                            </ul>
                        </div>

                        <!-- Button trigger modal -->

                        <!-- login Modal -->
                        <form action="process/process_login.php" method="post">
                            <div class="modal fade" id="loginmode" tabindex="-1" aria-labelledby="loginmode"     aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Email Address</label>
                                                <input type="email" name="email" class="form-control mt-2 mb-3">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control mt-2 mb-3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="logbtn" class="btn btn-primary">Login</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <!-- register Modal -->
                        <form action="process/process_register.php" method="post">
                            <div class="modal fade" id="registermode" tabindex="-1" aria-labelledby="registermode"     aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Create Account</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <div class="row">
                                            <div class="col">
                                                <label for="">First Name</label>
                                                <input type="text" name="fname" class="form-control mt-2 mb-3">
                                                <label for="">Last Name</label>
                                                <input type="text" name="lname" class="form-control mt-2 mb-3">
                                                <label for="">Email Address</label>
                                                <input type="email" name="email" class="form-control mt-2 mb-3">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="phone" class="form-control mt-2 mb-3">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control mt-2 mb-3">
                                                <label for="">Confirm Password</label>
                                                <input type="password" name="cpass" class="form-control mt-2 mb-3">
                                            </div>
                                        </div>
                                    </div>

                                        <div class="modal-footer">
                                            <button type="submit" name="regbtn" class="btn btn-primary">Create Account</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </nav>
            </div>

            <?php
                    if (isset($_SESSION['usererror'])) {
                        echo "<p class='alert alert-danger'>" . $_SESSION['usererror'] . "</p>";
                        unset($_SESSION['usererror']);
                    }

                    if (isset($_SESSION['usersuccess'])) {
                        echo "<p class='alert alert-success'>" . $_SESSION['usersuccess'] . "</p>";
                        unset($_SESSION['usersuccess']);
                    }
            ?>  
        </div>

        <!-- Hero -->

        <div class="row mt-4">
            <div class="col-md-12 text-center hero mt-5">
                <h1 class="display-4 mt-3">Welcome to EvioN</h1>
                <p class="lead">Your one-stop platform for creating and celebrating events.</p>
            </div>
    


<div id="eventbriteCarousel" class="carousel slide event-carousel rounded" data-bs-ride="carousel">

  <!-- Indicators -->
  <div class="carousel-indicators rounded">
    <button type="button" data-bs-target="#eventbriteCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#eventbriteCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#eventbriteCarousel" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="event1.html"><img src="images/ev1.jpg" class="d-block w-100" alt="Slide 1"></a>  
    </div>
    <div class="carousel-item">
      <a href="event2.html"><img src="images/evtechevent.jpg" class="d-block w-100" alt="Slide 2"></a>
    </div>
    <div class="carousel-item">
      <a href="event3.html"><img src="images/evparty1.png" class="d-block w-100" alt="Slide 2"></a>
    </div>
    <div class="carousel-item">
      <a href="event4.html"><img src="images/t2.png" class="d-block w-100" alt="Slide 3"></a>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#eventbriteCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#eventbriteCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>


                <!-- <img src="Images/ev1.jpg" alt="party" width="550" height="420" class="ms-5 mb-3 rounded-4"> -->
                <h2 class="hero text-center mt-4">Create * <i style="color:rgb(228, 73, 17);">Celebrate</i> * Repeat</h2>
                <p style="text-align:center;">From small gatherings to large crowds, you can make it real.. wether youre hosting an event or creating one, make memories that last</p>
            </div>
        </div>
        <div class="col mt-5 d-flex ms-5 justify-content-center"id="event1">
           <a href="music.html"><h5 class="me-4">Music <i class="fa-solid fa-music"></i></h5></a> 
            <a href="nightlife.html"><h5 class="me-4">Nightlife <i class="fa-solid fa-champagne-glasses"></i></h5></a>
            <a href="holidays.html"><h5 class="me-4">Holidays <i class="fa-solid fa-calendar"></i></h5></a>
            <a href="hobbies.html"><h5 class="me-4">Hobbies <i class="fa-solid fa-paintbrush"></i></h5></a>
            <a href="foods.html"><h5 class="me-4">Foods & Drinks <i class="fa-solid fa-utensils"></i></h5></a>
            <a href="sports.html"><h5 class="me-4">Sports <i class="fa-solid fa-basketball"></i></h5></a>
            <a href="dating.html"><h5 class="me-4">Dating <i class="fa-solid fa-heart"></i></h5></a>

        </div>

            <div class="row" align="center ">
                <div class="col-md-12 mt-4">
                  <a href="explore.php"><button class="btn btn-primary me-3">Explore Events</button></a>  
                    <a href="create.php"><button class="btn btn-outline-dark">Create Events</button></a>
                </div>
            </div>
        </div>

<div class="container ">
    <div class="row">
        <div class="col-md-12 text-center mt-5 hero ">
            <h2>Featured Events</h2>
            <p>Discover the most exciting events happening around you.</p>
        </div>
<div class="col d-flex justify-content-center mt-5 ">
        <div class="col cards ">
            <div class="card" style="width: 18rem;">
  <img src="images/evart.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm <br>Art <br>MetLife Stadium.</h6>
    <a href="getticket.php" class="btn btn-outline-warning text-center align-self-center">Ticket</a>
  </div>
</div>

        </div>
        <!-- <div class="col">
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div> -->

        <div class="col " id="events">
            <div class="card" style="width: 18rem;">
  <img src="images/evempowerment.jpg" class="card-img-top" alt="...">
  <div class="card-body">

    <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm <br>Empowerment <br>MetLife Stadium.</h6>
    <a href="getticket.php" class="btn btn-outline-warning text-center align-self-center">Ticket</a>
  </div>
</div>
    </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evdavido.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
             <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm <br>Davido 's Concert <br>Eko Hotel.</h6>

    <a href="getticket.php" class="btn btn-outline-warning text-center align-self-center">Ticket</a>
  </div>
</div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evmarathon.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm <br>Marathon <br>Super Eagles Stadium.</h6>


    <a href="getticket.php" class="btn btn-outline-warning text-center align-self-center">Ticket</a>
  </div>
</div>





                    
                </div>

                

        </div>

         <h2 class="hero text-center mt-4">Holidays <i style="color:rgb(228, 73, 17);">Tour</i> </h2>
                <p style="text-align:center;">From small gatherings to large crowds, you can make it real.. wether youre hosting an event or creating one, make memories that last</p>
          

      <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                
        <div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evdubai.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm </h6>


  </div>
</div>
</div>

<div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evparis.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm </h6>


   
  </div>
</div>
</div>

<div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evnewyork.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm </h6>


  </div>
</div>
</div>





        <div class="col">
            <div class="card" style="width: 18rem;">
  <img src="images/evmarathon.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h6 class="card-text"><i class="fa-solid fa-calendar-week"></i>  Sep 13-7:00pm .</h6>


  
  </div>
</div>
 </div>


            </div>
        </div>
      </div>


      <div class="row">
        <div class="col-8 mt-5">
                    <img src="images/evticket.jpg" alt="" style="width: 700px; height: 300px;">
        </div>
        <div class="col mt-5 ms-5 text-center align-self-center">
          <h2 class="" style="text-align:center; font-family:sans-serif;">Track Events With <span style="color:rgb(228, 73, 17);" class="hero">Evion</span></h2>
                   <a href="explore.php"> <button class="btn btn-secondary mt-5">Explore Events</button></a>
                    <button  class=" btn btn-outline-primary mt-5"><a href="create.php">Create Event</a></button>
        </div>
      </div>

      <div class="row">
        <div class="col mt-5">
         
          <h2 class="text-center hero">Comedies</h2>

  <div class="event-slider">
    <button class="slider-btn left" onclick="moveSlide(-1)">&#10094;</button>
    <div class="event-cards" id="slider">
      <!-- Card 1 -->
      <div class="event-card">
        <img src="images/evcomedy1.jpeg" alt="">
        <div class="event-info">
          <h5>The Phantom Of The Opera</h5>
          <p>From Thu 14 Aug</p>
          <small>His Majesty's Theatre</small>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="event-card">
        <img src="images/evcomedy2.jpg" alt="">
        <div class="event-info">
          <h5>Crissy Rock - From Bedlam to Benidorm</h5>
          <p>From Fri 6 Mar 2026</p>
          <small>2 Shows</small>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="event-card">
        <img src="images/evcomedy3.jpg" alt="">
        <div class="event-info">
          <h5>Mark Thomas</h5>
          <p>From Thu 23 Oct</p>
          <small>The North Wall Arts Centre</small>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="event-card">
        <img src="images/evcomedy4.jpg" alt="">
        <div class="event-info">
          <h5>Hamilton The Musical</h5>
          <p>From Thu 14 Aug</p>
          <small>351 Shows</small>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="event-card">
        <img src="images/evcomedy5.jpg" alt="">
        <div class="event-info">
          <h5>Les Misérables</h5>
          <p>From Mon 20 Sep</p>
          <small>Queen's Theatre</small>
        </div>
      </div>
    </div>
    <button class="slider-btn right" onclick="moveSlide(1)">&#10095;</button>
  </div>
</div>

        </div>
      </div>
      <div class="row">
        <div class="col mt-5 ">
          <marquee behavior="left" direction="right">
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">Car race</button>
          <button class="btn btn-outline-primary">Soccer events</button>
          <button class="btn btn-outline-primary">Tennis events</button>
          <button class="btn btn-outline-primary">Conference</button>
          <button class="btn btn-outline-primary">Crypto currency</button>
          <button class="btn btn-outline-primary">Digital Marketting</button>
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">View All Events</button>
          </marquee>
          
        </div>
      </div>
      <div class="row">
        <div class="col mt-2">
          <marquee behavior="right" direction="left">
         <a href="explore.php"> <button class="btn btn-outline-primary">View All Events</button></a>
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">View All Events</button>
          <button class="btn btn-outline-primary">View All Events</button>
                     </marquee>
        </div>
      </div>
   <div class="row">
        <div class="col mt-5">
         
          <h2 class="text-center hero">Comedies</h2>

  <div class="event-slider">
    <button class="slider-btn lefts" onclick="moveSlide(-1)">&#10097;</button>
    <div class="event-cards" id="slider">
      <!-- Card 1 -->
      <div class="event-card">
        <img src="images/evcomedy1.jpeg" alt="">
        <div class="event-info">
          <h5>The Phantom Of The Opera</h5>
          <p>From Thu 14 Aug</p>
          <small>His Majesty's Theatre</small>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="event-card">
        <img src="images/evcomedy2.jpg" alt="">
        <div class="event-info">
          <h5>Crissy Rock - From Bedlam to Benidorm</h5>
          <p>From Fri 6 Mar 2026</p>
          <small>2 Shows</small>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="event-card">
        <img src="images/evcomedy3.jpg" alt="">
        <div class="event-info">
          <h5>Mark Thomas</h5>
          <p>From Thu 23 Oct</p>
          <small>The North Wall Arts Centre</small>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="event-card">
        <img src="images/evcomedy4.jpg" alt="">
        <div class="event-info">
          <h5>Hamilton The Musical</h5>
          <p>From Thu 14 Aug</p>
          <small>351 Shows</small>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="event-card">
        <img src="images/evcomedy5.jpg" alt="">
        <div class="event-info">
          <h5>Les Misérables</h5>
          <p>From Mon 20 Sep</p>
          <small>Queen's Theatre</small>
        </div>
      </div>
    </div>
    <button class="slider-btn rights" onclick="moveSlide(1)">&#10097;</button>
  </div>
</div>

        </div>
      </div>
        <div class="row">
          <div class="col">
            <h1>happy now?</h1>
          </div>
        </div>
      



<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script>
    let currentPosition = 0;
  function moveSlide(direction) {
    const slider = document.getElementById('slider');
    const cardWidth = slider.querySelector('.event-card').offsetWidth + 10; // width + margin
    const totalCards = slider.children.length;
    const visibleCards = 4; // show 4 at a time
    const maxPosition = totalCards - visibleCards;

    currentPosition += direction;
    if (currentPosition < 0) currentPosition = 0;
    if (currentPosition > maxPosition) currentPosition = maxPosition;

    slider.style.transform = `translateX(-${currentPosition * cardWidth}px)`;
  }
  


</script>
</body>
</html>