<?php
include('header.php');
include('dbconnection.php');
?>
<style>

body {
	
	background-image: url(Badam.jpg);
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


<center><h1 style="color: red;">Almond</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
<p style="color:white; font-size: 20px;">Almonds contain vitamins, minerals, protein, and fiber, and so they may offer a number of health benefits. Just a handful of almonds — approximately 1 ounce — contains one-eighth of a person’s daily protein needs.
<br><br><b> Recommend eating a handful of almonds a day to obtain these benefits.</b>
<ul>
<ul style="list-style-type: disc; color: white; font-size: 20px;">

<li>Fiber: 3.5 grams</li>
<li>Protein: 6 grams</li>
<li>Fat: 14 grams (9 of which are monounsaturated)</li>
<li>Vitamin E: 37% of the RDI</li>
<li>Manganese: 32% of the RDI</li>
<li>Magnesium: 20% of the RDI</li>
<li>They also contain a decent amount of copper, vitamin B2 (riboflavin) and phosphorus.<br>
This is all from a small handful, which supplies only 161 calories and 2.5 grams of digestible carbohydrates.</li>
</ul></ul>


<h1 style="color:white;"><b></b> Health benefits of almonds</b></h1>


<ol style="color:white; font-size: 20px; ">

<b>1. Almonds and heart disease</b><br>
Almonds, along with other nuts and seeds, may help improve lipid, or fat, levels in the blood. This can benefit heart health.<br> <br>

<b>2. Eating Almonds Reduces Hunger, Lowering Your Overall Calorie Intake</b><br>
Almonds are low in carbs and high in protein and fiber.<br>
Both protein and fiber are known to increase feelings of fullness. This can help you eat fewer calories <br> <br>


<b>3. Almonds Are High in Vitamin E</b><br>
Vitamin E is a family of fat-soluble antioxidants.<br>
These antioxidants tend to build up in cell membranes in your body, protecting your cells from oxidative damage.<br> 
Almonds are among the world’s best sources of vitamin E, with just 1 ounce providing 37% of the RDI.<br><br>


<b>4. Magnesium Also Benefits Blood Pressure Levels</b><br>
The magnesium in almonds may additionally help lower blood pressure levels.<br>
High blood pressure is one of the leading drivers of heart attacks, strokes and kidney failure.<br>
Low magnesium levels are strongly linked to high blood pressure, indicating that almonds can help control blood pressure<br> <br>

<b>5. Almonds May Be Effective For Weight Loss</b><br>
Nuts contain several nutrients that your body struggles to break down and digest.<br>
Your body does not absorb about 10–15% of the calories in nuts. Additionally, some evidence suggests that eating nuts can boost metabolism slightly.<br>
Due to their satiating properties, nuts are a great addition to an effective weight loss diet.<br> <br>

</ol>

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
            <img src="images/almondcard1.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Happilo Natural Californian Almonds (Snack Pack)</div>
             <div class="gram">150g</div>
             <div class="price">₹130.00 <span class="not"><s>₹250.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/almondcard2.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Happilo Premium California Almonds Roasted & Salted</div>
            <div class="gram">200g</div>
             <div class="price">₹167.00 <span class="not"><s>₹335.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/almondcard3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Nourish Organics Honey Roasted Almonds<br>100% Natural</div>
             <div class="gram">100g</div>
             <div class="price">₹179.00 <span class="not"><s>₹275.00</s></span></div>
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
             <img src="images/almondcard5.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nutty Gritties Lightly Salted Jumbo Roasted Almonds Nuts</div>
            <div class="gram">200g</div>
             <div class="price">₹234.00 <span class="not"><s>₹360.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/almondcard7.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Classic Almonds (Pack of 2) <br>100% Natural</div>
             <div class="gram">200g X 2</div>
             <div class="price">₹336.00 <span class="not"><s>₹560.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/almondcard6.jpg" alt="image not found">
           </div>
           <div class="details">
            <div class="name">Happilo Premium Natural Californian Almonds (Pack of 2)</div>
            <div class="gram">200g x 2 (Combo Pack)</div>
             <div class="price">₹856.00 <span class="not"><s>₹1250.00</s></span></div>
             
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


<?php
if( isset($_POST['sign'])) {
  $ORDER_ID= $_POST['ORDER_ID'];
  $CUSTID= $_POST['CUSTID'];
  $txnAmount= $_POST['txnAmount'];
  $sql = "INSERT INTO pay (ORDER_ID, CUSTID, txnAmount) VALUES ('$name','$email','$phone');";

  if($conn->query($sql) == TRUE) {
    echo '<div class="alert alert-success col-sm-6 ml-5 mt-2">Payment successful</div>';
  }
  else {
     echo '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Retry</div>';
}
}
?>
