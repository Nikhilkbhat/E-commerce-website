<?php
include('header.php');
include('dbconnection.php');
?>

<style>
	
body {
	
	background-image: url(images/Cashew.jpg);
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

<center><h1 style="color: red;">Cashew</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
<p style="color: white; font-size: 20px;">
Cashews are a kidney-shaped seed sourced from the cashew treeAlthough commonly referred to as tree nuts, and nutritionally comparable to them, cashews are really seeds. They’re rich in nutrients and beneficial plant compounds and make for an easy addition to many dishes.<br>
Like most nuts, cashews may also help improve your overall health. They’ve been linked to benefits like weight loss, improved blood sugar control, and a healthier heart.<br></p>

<p style="color: white; font-size: 20px;">
Rich in nutrients
Cashews are rich in a range of nutrients. One ounce (28 grams) of unroasted, unsalted cashews provides you with around</p>
<ul style="color: white; font-size: 20px;">


<ul style="list-style-type: disc;">
<li>Calories: 157</li>
<li>Protein: 5 grams</li>
<li>Fat: 12 grams</li>
<li>Carbs: 9 grams</li>
<li>Fiber: 1 gram</li>
<li>Vitamin K: 8% of the DV</li>
<li>Vitamin B6: 7% of the DV</li></ul>  
In addition, cashews contain a significant amount of copper, a mineral essential for energy production, healthy brain development, and a strong immune system. They’re also a great source of magnesium and manganese, nutrients important for bone health<br><br>

<b>1. Rich in Antioxidants</b>
Antioxidants are beneficial plant compounds that keep your body healthy by neutralizing damage-causing molecules known as free radicals. In turn, this helps reduce inflammation and increases your body’s ability to stay healthy and free from disease.<br><br>

<b>2.May help you lose weight</b><br>
Nuts are rich in calories and fat. Hence, people wishing to lose weight have traditionally been advised to limit the amount of nuts in their diet.
However, research is starting to link nut-rich diets to greater weight loss and overall lower body weights than nut-free diets.<br>
This may in part be explained by the fact that cashews appear to provide the body with fewer calories than once thought.<br>
As a result, weight loss benefits may be strongest for whole, raw cashews, although more research is needed to confirm this. And you may be sacrificing the antioxidant benefit that comes with roasting cashews.<br>
<br>


<b>3.improve heart health</b><br>
Diets rich in nuts, including cashews, have been consistently linked to a lower risk of disease, such as stroke and heart disease<br>
Nut-rich diets are consistently shown to be beneficial to heart health. <br>Cashews appear to offer some benefits to lower blood pressure, triglycerides, and cholesterol. However, more studies are needed before strong conclusions can be made.<br><br>

<b>4.May be beneficial for people with type 2 diabetes</b><br>
People with type 2 diabetes may benefit from adding cashews to their diet.<br>
That’s in part because cashews are a good source of fiber, a nutrient that helps prevent blood sugar spikes and which is believed to offer protection against type 2 diabetes<<br>
Cashews are low in sugar and rich in fiber — two factors which, when combined, may help reduce blood sugar levels and protect against the development of type 2 diabetes. However, more research is needed to confirm these benefits.<br><br>

<b>5.Easy to add to your diet</b><br>
Cashews are very easy to add to your diet.<br>
They can be eaten raw or roasted, and make for an easy portable snack.<br>
Whole or ground cashews can also be incorporated into a variety of dishes, ranging from scrambled tofu and stir fries, to soup, salads, and stews.<br>
Cashew butter is another way to add cashews to your diet. Spread it on toast or stir it into yogurt or oatmeal. You can also process cashew butter together with oats and your favorite dried fruit to make homemade, bake-free energy balls.
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
            <img src="images/card cashew5.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Happilo Premium Whole Cashew Nuts</div>
             <div class="gram">200g</div>
             <div class="price">₹182.00 <span class="not"><s>₹365.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card cashew1.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Avadata Organics Cashew Nuts</div>
            <div class="gram">100g</div>
             <div class="price">₹179.00 <span class="not"><s>₹275.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card cashew3.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nourish Organics Honey Roasted Cashews</div>
             <div class="gram">200g</div>
             <div class="price">₹273.00 <span class="not"><s>₹420.00</s></span></div>
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
             <img src="images/card cashew4.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nutty Gritties Southern Pepper Cashew Nuts</div>
            <div class="gram">200g</div>
             <div class="price">₹282.00 <span class="not"><s>₹435.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card cashwpack1.jpg" alt="image not found">
           </div>
           <div class="details">
            <div class="name">Rostaa Salted Cashew Nuts (Pack of 2)</div>
             <div class="gram">170g x 2 (Combo Pack)</div>
             <div class="price">₹474.00 <span class="not"><s>₹790.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/card cashwpack.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Rostaa Roasted & Salted Pistachio (Pack of 2)</div>
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
