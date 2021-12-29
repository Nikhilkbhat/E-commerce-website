<?php
include('header.php');
include('dbconnection.php');
?>

<style>
	
body {
	
	background-image: url(images/Apricot1.jpg);
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

<center><h1 style="color: red;">Apricot</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
<p  style="color: white; font-size: 20px;">With their deep orange or brown color, depending on what variety you purchase, dried apricots are also rich in vitamin A. This essential building block has a number of important benefits, including:
<ul style="list-style-type:none;color: white; font-size: 20px; ">
Encourages cell growth<br>
Builds up the immune system<br>
Maintains good vision<br>
Keeps bones healthy<br>
Assists in reproduction</p></ul>


<ul style="color: white; font-size: 20px;">
<b>1.Very nutritious and low in calories</b><br>
Apricots are very nutritious and contain many essential vitamins and minerals.
<br>
Just 2 fresh apricots (70 grams) provide:
<ul>
<ul style="list-style-type: disc;">
<li>Calories: 34</li>
<li>Carbs: 8 grams</li>
<li>Protein: 1 gram</li>
<li>Vitamin C: 8% of the DV</li>
<li>Vitamin E: 4% of the DV</li>
<li>Potassium: 4% of the DV</li> </ul></ul><br>

<b>2. High in antioxidants</b><br>

Apricots are a great source of many antioxidants, including beta carotene and vitamins A, C, and E.<br>
These compounds work to neutralize free radicals, which are harmful compounds that damage your cells and cause oxidative stress. Oxidative stress is linked to obesity and many chronic diseases, such as heart disease<br><br>

<b>3. May promote eye health</b><br>

Apricots boast multiple compounds that are essential for eye health, including vitamins A and E.<br>
Vitamin A plays a vital role in preventing night blindness, a disorder caused by lack of light pigments in your eyes, while vitamin E is a fat-soluble antioxidant that enters your eyes directly to protect them from free radical damage<br><br>

<b>4. May boost skin health</b><br>

Eating apricots may benefit your skin.<br>
The main causes of wrinkles and skin damage are environmental factors, such as the sun, pollution, and cigarette smoke.<br>
Vitamins C and E, both found in this fruit, may aid your skin. In particular, vitamin C protects against UV damage and environmental pollutants by neutralizing free radicals.<br>
Furthermore, this vitamin helps build collagen, which gives your skin strength and elasticity.<br>
Eating a diet high in vitamin C can help your skin heal from UV damage and prevent wrinkles.<br><br> 

<b>5. High in potassium</b><br>

Apricots are high in potassium, a mineral that also serves as an electrolyte. In your body, it’s responsible for sending nerve signals and regulating muscle contractions and fluid balance<br>
Two apricots (70 grams) provide 181 mg of this mineral, which is 4% of the DV.<br>
As potassium works closely with sodium to maintain fluid balance, adequate intake may help prevent bloating and maintain healthy blood pressure (24).<br>
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
            <img src="images/card apricot1.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Dried Golden Apricot</div>
             <div class="gram">200g</div>
             <div class="price">₹130.00 <span class="not"><s>₹260.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card apricot3.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Dried Turkish Apricot</div>
            <div class="gram">200g</div>
             <div class="price">₹180.00 <span class="not"><s>₹360.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card apricot4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Raw Essentials Dried Apricots</div>
             <div class="gram">500g</div>
             <div class="price">₹450.00 <span class="not"><s>₹590.00</s></span></div>
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
             <img src="images/card apricot2.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Dried Golden Apricot</div>
            <div class="gram">1kg</div>
             <div class="price">₹590.00 <span class="not"><s>₹1180.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card apricot6.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">HandsFull Premium Dried Apricots (Pack of 2)</div>
            <div class="gram">200g x 2 (Combo Pack)</div>
             <div class="price">₹379.00 <span class="not"><s>₹588.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/card apricot5.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Arkveda Premium Dried Apricot(Pack of 2)</div>
             <div class="gram">250g x 2 (Combo Pack)</div>
             <div class="price">₹399.00 <span class="not"><s>₹640.00</s></span></div>
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
