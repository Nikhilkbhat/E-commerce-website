<?php
include('header.php');
include('dbconnection.php');
?>

<style>
	
body {
	
	background-image: url(anjeera11.jpg);
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
<center><h1 style="color: red;">Anjeer</h1></center>
<h2 style="color:blue;"><u>Benefits</u></h2>
<ul style="color: white; font-size: 20px;">
Fig or Anjeer as it is known in India is a small pear or bell-shaped flowering plant that belongs to the mulberry family and scientifically termed as Ficus carcia.<br> 

Nutrition Value Per 100g of Fresh Fig
<ul>
	<ul style="list-style-type: disc;">
<li>Zinc 0.15 mg</li>
<li>Sodium 1 mg</li>
<li>Protein 0.75 g</li>                  
<li>Vitamin A 142 IU </li>      
<li>Vitamin C 2 mg</li>   
<li>Vitamin K 4.7 µg  </li>               
<li>Potassium 232 mg  </li>   
<li>Calcium 35 mg </li>      
   </ul></ul><br>

<b>1. Regulates Blood Pressure</b><br>
The abundance of potassium in anjeer helps in regulating high blood pressure. Potassium is a vital mineral that aids the body in controlling blood pressure as it facilitates to refute negative impacts of sodium.The goodness of potassium in figs helps to stimulate the functioning of muscles and nerves, balances the fluid in the system and maintains the electrolyte balance.Managing blood pressure can help in dilating blood vessels, improving blood circulation, relaxes and can also ease stress.Thus figs are the best fruit to add on to a high blood pressure diet.<br><br>

<b>2. Treats Sexual Problems</b><br>
Figs are a wonder fruit and highly used since ancient times for treating various sexual dysfunctions like sterility, low stamina and erectile dysfunction. The wealth of vitamins B6, A and minerals potassium, copper and magnesium increase the semen production. Dried figs are super-rich in amino acids and it works as a great aphrodisiac fruit by increasing vitality and libido. Figs are also valuable for adolescent girls to alleviate PMS symptoms and regulates the cycle. Moreover, several studies have proven that figs are effective in treating the underlying causes of erectile dysfunction.<br><br>

<b>3. Prevents Constipation</b><br>
Dried Figs are highly praised as one of the best fruits to replenish and soothe the intestines. It acts as a natural laxative as it is loaded with a good amount of soluble fibre. Evidence strongly proves that anjeer dense in fibre content can promote normal bowel function, add bulk to stool and ease the bowel movement averting constipation and serves as a natural remedy to treat digestive disorders like stomach flu.<br><br>

<b>4. Treats Piles</b><br>
The natural laxative property of figs aids in lowering the pressure on the rectum thereby easing the haemorrhoids. As per the report published in Evidence-Based Complementary and Alternative Medicinal Journal, figs are used as a traditional remedy for treating haemorrhoids due to its laxative and antispasmodic properties.<br><br>


<b>5. Dental Health</b><br>
The presence of phenolic compounds in anjeer exhibits anti-caries activity and thwarts off bacteria causing dental infection. The flavonoids and phytochemicals in anjeer fruit exhibit potent antibacterial activities which reduce bacterial infections, guard gums, teeth and promotes overall dental health. <br> </ul>


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
             <img src="images/card anjeer.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nutraj Signature Dried Figs (Anjeer) Vacuum Pack</div>
            <div class="gram">400g</div>
             <div class="price">₹389.00 <span class="not"><s>₹699.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card anjeer1.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Tulsi Dry Figs Anjeer Zaika <br>100% Natural </div>
             <div class="gram">500g</div>
             <div class="price">₹599.00 <span class="not"><s>₹650.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card anjeer3.jpg" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Behnam Imported Organic Dried Afghani Anjeer</div>
             <div class="gram">250g</div>
             <div class="price">₹690.00 <span class="not"><s>₹1299.00</s></span></div>
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
             <img src="images/card anjeer4.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Nutrilin Premium Afghani Anjeer | Grade - Medium Size | Value Pack Pouch </div>
            <div class="gram">1kg</div>
             <div class="price">₹899.00 <span class="not"><s>₹999.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/card anjeer6.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Neu.Farm - Dried Figs - Anjeer - Pack of 2 Dried Anjeer/Figs</div>
             <div class="gram">200g x 2 (Combo Pack)</div>
             <div class="price">₹419.00 <span class="not"><s>₹675.00</s></span></div>
             <div class="card-footer">
        <a href="Paytmkit/TxnTest.php" class="btn btn-primary btn btn-outline-danger">Buy now</a>
      </div>
           </div>
           
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="images/card anjeer5.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">GreenFinity Premium Afghani Anjeer - | Pack of 2 | Dried Figs | All Premium</div>
             <div class="gram">500g x 2 (Combo Pack)</div>
             <div class="price">₹849.00 <span class="not"><s>₹1599.00</s></span></div>
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
