<?php
include('header.php');
include('dbconnection.php');
?>

<style>
	
body {
	
	background-image: url(images/blackraisins.jpg);
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
<center><h1 style="color: red;">Black Raisins</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
	<ul style="color: white; font-size: 20px;">
		 Raisins can be a helpful and beneficial addition to the diet.
		 <ul>
	<ul style="list-style-type: disc;">

<li>Calories – 129</li>
<li>Protein – 1.42 g</li>
<li>Fats – 0.11 g</li>
<li>Sugars – 28.03 g</li>
<li>Sodium – 11 mg</li>
<li>Calcium – 27 mg</li>
<li>Carbohydrates – 34.11 g</li>
<li>Dietary fiber – 1.9 g</li></ul></ul>

<b>1. Aid in digestion</b><br>
Raisins may be a simple way to help keep the digestive system healthy. Raisins contain helpful soluble fibers, which give body to the stool and help it pass through the intestines easier. This may help improve digestion and promote regularity.<br><br>

<b>2. Prevent anemia</b><br>
Raisins may play a part in preventing anemia. They contain good amounts of iron, copper, and vitamins that are essential for making red blood cells and carrying oxygen throughout the body.<br><br>

<b>3. Prevent too much acidity</b><br>
Raisins contain substantial amounts of beneficial minerals, such as iron, copper, magnesium, and potassium. These are alkaline, or basic, minerals on the pH scale and may help balance acidity levels in the stomach.<br><br>


<b>4. Fight against cancer cells</b><br>

Raisins are also a good source of antioxidant compounds.
Dietary antioxidants are essential, as they may protect the body from oxidative damage and free radicals. Oxidative damage and free radicals are risk factors in many types of cancer, tumor growth, and aging.<br><br>

<b>5. Protect eye health</b><br>

Raisins contain polyphenols, which are antioxidants that may protect the cells in the eyes from free radical damage. This may in turn help protect the eyes from eye disorders, such as age-related macular degeneration and cataracts.<br><br>

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
            <img src="images/card black1.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Happilo Premium Afghani Seedless Black Raisins</div>
             <div class="gram">250g</div>
             <div class="price">₹162.00 <span class="not"><s>₹250.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card black2.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">D'nature Fresh Black Raisins Kishmish</div>
            <div class="gram">200g</div>
             <div class="price">₹169.00 <span class="not"><s>₹230.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card black3.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">King Uncle Afghani Black Raisins</div>
             <div class="gram">250g</div>
             <div class="price">₹199.00 <span class="not"><s>₹300.00</s></span></div>
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
             <img src="images/card black4.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Vedaka Premium Black Raisins</div>
            <div class="gram">200g</div>
             <div class="price">₹310.00 <span class="not"><s>₹400.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card black5.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Farmley Selecta Black Raisin Seedless(Pack of 2)</div>
            <div class="gram">200g x 2 (Combo Pack)</div>
             <div class="price">₹350.00 <span class="not"><s>₹499.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/card black6.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Baswant Jumbo Black Seedless Raisins (Pack of 2)</div>
             <div class="gram">500g x 2 (Combo Pack)</div>
             <div class="price">₹485.00 <span class="not"><s>₹690.00</s></span></div>
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
