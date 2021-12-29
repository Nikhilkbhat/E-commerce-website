<?php
include('header.php');
include('dbconnection.php');
?>

<style>
	
body {
	
	background-image: url(images/Datess.jpg);
	background-size: cover;
     background-position: center;
 }

.container{
  max-width: 1000px;
  overflow: hidden;
  padding: 80px 0;
}
.container .main-card{
  display: flex;
  justify-content: space-evenly;
  width: 200%;
  transition: 1s;
}
#two:checked ~ .main-card{
  margin-left: -100%;
}
.container .main-card .cards{
  width: calc(100% / 2 - 10px);
  display: flex;
  flex-wrap: wrap;
  margin: 0 20px;
  justify-content: space-between;
}
.main-card .cards .card{
  width: calc(100% / 3 - 10px);
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s ease;
}
.main-card .cards .card:hover{
  transform: translateY(-15px);
}
.cards .card .content{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.cards .card .content .img{
   height: 180px;
  width: 180px;
  border-radius: 50%;
  background: #FF676D;
  margin-bottom: 14px;
}
.card .content .img img{
  height: 100%;
  width: 100%; 
}
.card .content .name{
  font-size: 20px;
  font-weight: 500;
   color: black;
}
 .container .button{
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 20px;
}
.button label{
  height: 15px;
  width: 15px;
  border-radius: 20px;
  background: #fff;
  margin: 0 4px;
  cursor: pointer;
  transition: all 0.5s ease;
}
.button label.active{
  width: 35px;
}
#one:checked ~ .button .one{
  width: 35px;
}
#one:checked ~ .button .two{
  width: 15px;
}
#two:checked ~ .button .one{
  width: 15px;
}
#two:checked ~ .button .two{
  width: 35px;
}
input[type="radio"]{
  display: none;
}
@media (max-width: 768px) {
  .main-card .cards .card{
    margin: 20px 0 10px 0;
    width: calc(100% / 2 - 10px);
  }
}
@media (max-width: 600px) {
  .main-card .cards .card{
    width: 100%;
  }
}

.price {
  color: red;
}
.gram {
  color: black;
  font-size:10x ;
}
.not {
  font-size: 15px;
  color: darkgray;
}

</style>
<center><h1 style="color: red;">Dates</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
<p style="color: white; font-size: 20px;">Dates are the fruit of the date palm tree, which is grown in many tropical regions of the world.</p>

<ul style="color: white; font-size: 20px;">


<b>1.Very Nutritious</b><br>
Dates have an excellent nutrition profile.
Since they’re dried, their calorie content is higher than most fresh fruit. The calorie content of dates is similar to that of other dried fruits, such as raisins and figs 
<ul>
<ul style="list-style-type: disc;">
<li>Calories: 277</li>
<li>Carbs: 75 grams</li>
<li>Fiber: 7 grams</li>
<li>Protein: 2 grams</li>
<li>Potassium: 20% of the RDI</li>
<li>Magnesium: 14% of the RDI</li>
<li>Copper: 18% of the RDI</li></ul></ul><br>

<b>2.High in Fiber</b><br>
Getting enough fiber is important for your overall health.<br>
With almost 7 grams of fiber in a 3.5-ounce serving, including dates in your diet is a great way to increase your fiber intake.<br>
Fiber can benefit your digestive health by preventing constipation. It promotes regular bowel movements by contributing to the formation of stool<br><br>

<b>3.High in Disease-Fighting Antioxidants</b><br>
Dates provide various antioxidants that have a number of health benefits to offer, including a reduced risk of several diseases.<br>
Antioxidants protect your cells from free radicals, which are unstable molecules that may cause harmful reactions in your body and lead to disease.<br>
Dates contain several types of antioxidants that may help prevent the development of certain chronic illnesses, such as heart disease, cancer, Alzheimer’s and diabetes.<br><br>

<b>4.May Promote Brain Health</b><br>
Eating dates may help improve brain function.

</ul>

<!DOCTYPE html>
<html>
  <head>

  
   </head>
<body>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="images/card dates7.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Omani Dates </div>
             <div class="gram">280g</div>
             <div class="price">₹220.00 <span class="not"><s>440.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card dates3.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nutty Gritties Kalmi Dates</div>
            <div class="gram">350g</div>
             <div class="price">₹292.50 <span class="not"><s>₹450.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/carddates6.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Kalmi Dates</div>
             <div class="gram">680g</div>
             <div class="price">₹440.00 <span class="not"><s>₹880.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
      </div>
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card dates4.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Medjool Dates <br>100% Natural <br>Vitamin Rich</div>
            <div class="gram">680gm</div>
             <div class="price">₹840.00 <span class="not"><s>₹1680.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card dates6.jpg" alt="image not found">
           </div>
           <div class="details">
            <div class="name">Happilo Premium International Omani Dates (Pack of 2)</div>
             <div class="gram">250g x 2 (Combo Pack)</div>
             <div class="price">₹210.00 <span class="not"><s>₹350.00</s></span></div>
             
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/card dates5.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Happilo Premium International Queen Kalmi Dates (Pack of 2)</div>
            <div class="gram">200g x 2 (Combo Pack)</div>
             <div class="price">₹294.00 <span class="not"><s>₹490.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
      </div>
    </div>
    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
</body>
</html>
