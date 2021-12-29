<?php
include('header.php');
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    

<style>
   .toggle-btn{
  padding: 10px 30px;
  cursor: pointer;
  background: linear-gradient(#ff105f,#ffad06);
  outline: none;
  position: relative;
  border-radius: 30px;
   font-weight: bold;
  transition: transform .3s;
  letter-spacing: 1px;
}

.container {
  
  position: relative;
/*  margin: 6% auto;*/
  background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}

.toggle-btn:hover{
     transform: scale(1.1);
 }

.container_1 {
  
  justify-content: center;
  align-items: center;
  height: 30vh;
  background-color: #f5f5f5;
  font-family: 'Baloo Paaji 2', cursive;
}

.card {
  background-color: #222831;
  height: 30rem;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: rgba(0, 0, 0, 0.7);
  color: white;
}

.card__name {
  margin-top: 15px;
  font-size: 1.5em;
}

.card__image {
  height: 160px;
  width: 160px;
  border-radius: 50%;
  border: 5px solid #272133;
  margin-top: 20px;
  box-shadow: 0 10px 50px rgba(235, 25, 110, 1);
}


.draw-border {
  box-shadow: inset 0 0 0 4px #58cdd1;
  color: #58afd1;
  -webkit-transition: color 0.25s 0.0833333333s;
  transition: color 0.25s 0.0833333333s;
  position: relative;
}

.draw-border::before,
.draw-border::after {
  border: 0 solid transparent;
  box-sizing: border-box;
  content: '';
  pointer-events: none;
  position: absolute;
  width: 0rem;
  height: 0;
  bottom: 0;
  right: 0;
}

.draw-border::before {
  border-bottom-width: 4px;
  border-left-width: 4px;
}

.draw-border::after {
  border-top-width: 4px;
  border-right-width: 4px;
}

.draw-border:hover {
  color: #ffe593;
}

.draw-border:hover::before,
.draw-border:hover::after {
  border-color: #eb196e;
  -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
  transition: border-color 0s, width 0.25s, height 0.25s;
  width: 100%;
  height: 100%;
}

.draw-border:hover::before {
  -webkit-transition-delay: 0s, 0s, 0.25s;
  transition-delay: 0s, 0s, 0.25s;
}

.draw-border:hover::after {
  -webkit-transition-delay: 0s, 0.25s, 0s;
  transition-delay: 0s, 0.25s, 0s;
}

.btn {
  background: none;
  border: none;
  cursor: pointer;
  line-height: 1.5;
  font: 700 1.2rem 'Roboto Slab', sans-serif;
  padding: 0.75em 2em;
  letter-spacing: 0.05rem;
  margin: 1em;
  width: 13rem;
}

.btn:focus {
  outline: 2px dotted #55d7dc;
}


.social-icons {
  padding: 0;
  list-style: none;
  margin: 1em;
}

.social-icons li {
  display: inline-block;
  margin: 0.15em;
  position: relative;
  font-size: 1em;
}

.social-icons i {
  color: #fff;
  position: absolute;
  top: 0.95em;
  left: 0.96em;
  transition: all 265ms ease-out;
}

.social-icons a {
  display: inline-block;
}

.social-icons a:before {
  transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  content: " ";
  width: 45px;
  height: 45px;
  border-radius: 100%;
  display: block;
  background: linear-gradient(45deg, #ff003c, #c648c8);
  transition: all 265ms ease-out;
}

.social-icons a:hover:before {
  transform: scale(0);
  transition: all 265ms ease-in;
}

.social-icons a:hover i {
  transform: scale(2.2);
  -ms-transform: scale(2.2);
  -webkit-transform: scale(2.2);
  color: #ff003c;
  background: -webkit-linear-gradient(45deg, #ff003c, #c648c8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 265ms ease-in;
}
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/dryfruit51.jpg" height="500px" width="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/dryfruit12.jpg" height="500px" width="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/dryfruit.jpg" height="500px" width="400px" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <!-- Button start-->
<div class="container row " style="margin: 50px auto; padding-top: 50px;padding-bottom: 50px; border: 3px solid grey; border-radius: 10px;padding-left: 20%; ">

  <br>
  <br>
  <button type="submit" class="toggle-btn col-4" style="margin-right: 5px;"> <a href="Login.php" style="text-decoration: none;color: white; ">Login</a></button>
  <button type="submit"  class="toggle-btn col-4" style="margin-left: 5px;"> <a href="Signup.php" style="text-decoration: none;color: white;" >Signup</a></button>
</div>

<div class="container_1">
  
  <div class="card">
    <img src="images/nikhil.jpg" alt="Person" class="card__image">
    <p class="card__name">Nikhil K Bhat</p>
    
    <ul class="social-icons">
      <li><a href="https://www.facebook.com/nikhil.k.33671748"><i class="fab fa-facebook"></i></a></li>
      <li><a href="https://www.instagram.com/nikhil_kbhat/"><i class="fab fa-instagram"></i></a></li>
      <li><a href="https://www.linkedin.com/in/nikhil-k-bhat-8745611b7"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://github.com/Nikhilkbhat"><i class="fab fa-github"></i></a></li>
    </ul>
    <button class="btn draw-border"><a href="portfolio.php"style="text-decoration: none;color: palegoldenrod;">Portfolio</a></button>
 
 
  </div>
</div>


<?php
include('footer.php');
?>
