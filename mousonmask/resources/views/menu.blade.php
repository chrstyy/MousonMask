<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - CATIJE</title>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

</head>
<style>
    body {
    margin: 0;
    background-color: #BAE8DA;
    background-size: 100% auto;
    background-attachment: fixed;
    background-position: center;
    overflow: hidden;
}

header {
    position: fixed;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    width: 97.5%;
    background-color: rgba(255, 255, 255, 0.5);
}

.logo img {
    height: 80px;
}

nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

nav a {
    color: black;
    text-decoration: none;
    font-family: 'Moul', regular;
    font-size: 25px;
    font-weight: bold;
    margin: 0 40px;
}

nav .active {
    color: red;
}

nav a#order {
    display: inline-block;
    background: #DFD7D7;
    mix-blend-mode: multiply;
    line-height: normal;
}

nav a#myAccount {
    font-family: 'Moul', normal;
    font-size: 20px;
    font-weight: bold;
    margin-top: -55px;
    margin-right: 5px;
}

.image-container {
    width: 50%;
    position: fixed;
    right: 0;
    top: 0;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    z-index: 1;
}

.background-image {
    width: 570px;
    height: 745px;
    position: absolute;
    top: 0;
    right: 0;
    opacity: 0.5;
}

.search-bar {
    position: fixed;
    width: 371px;
    height: 63px;
    border-radius: 10.63px;
    background-color: #1F1D2B;
    margin-left: 1000px;
    margin-top: 140px;
    transform: rotate(0.17deg);
}

.search-bar img {
    position: absolute;
    width: 26px;
    height: 26px;
    filter: brightness(0) invert(1);
    margin-right: 30px;
    margin-top: 17px;
    margin-left: 20px;
}

.search-bar input {
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    background-color: transparent;
    margin-bottom: 50px;
    margin-left: 50px;
    margin-right: 40px;
    color: #FFFFFF;
    font-size: 16px;
}

.menu-categories {
    position: fixed;
    margin-top: 150px;
    margin-bottom: 300px;
    margin-right: 50px;
    margin-left: 30px;
    font-size: 25px;
}

.menu-categories span {
    margin-right: 50px;
}

.menu-categories span:hover {
    cursor: pointer;
    color: #468B01;
}

.menu-categories span.active {
    color: green;
}

.menu-section {
    padding: 50px;
}

.menu-item {
    display: flex;
    margin-bottom: 50px;
}

.menu-container {
    padding: 180px;
    margin-top: 40px;
    display: grid;
    grid-template-columns: repeat(4, 3fr);
    gap: 50px;
}
.menu-cb {
    background: #1F1D2B;
    border-radius: 21.2601px;
    transform: rotate(-0.17deg);

    /* Text */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    /* Dish Name */
    width: 180px;
    height: 180px;
    font-family: 'Barlow';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    text-align: center;
    color: #FFFFFF;

    transform: rotate(-0.17deg);
}

.item-image img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-top: 30px;
    margin-left: 25px;
    margin-right: 25px;
    margin-bottom: 10px;
}

.item-description {
   margin-bottom: 80px;
}

.add-to-cart {
    background-color: #e8491d;
    color: white;
    border: none;
    padding: 10px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.cart-popup img {
    width: 50px;
    height: 63px;
    margin-right: 10px;
    margin-left: 10px;
}

.cart-popup {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: white;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    padding: 20px;
    margin-top: 10px;
    overflow: visible;
}


.cart-count {
    background-color: #BAE8DA;
    color: black;
    border-radius: 50%;
    padding: 5px 8px;
    font-size: 14px;
    margin-top: -55px;
    margin-left: -20px;
    z-index: 1;
}

.line{
    position: absolute;
    width: 830px;
    top: 50px;
    border: 1px solid #000000;
}


</style>
<body>

    <header>
        <div class="logo">
            <img src="images/catije.png" alt="Catije Logo" id="logo">
        </div>
        <nav>
            <a href="home">HOME</a>
            <a href="menu" class="nav-link active">MENU</a>
            <a href="about">ABOUT US</a>
            <a href="contact">CONTACT US</a>
            <a href="#order-section" id="order">ORDER YOUR FOOD</a>
            <a href="#account-section" id="myAccount">My Account</a>
        </nav>
    </header>

    <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol">Alcohol Drink</span>
        <span data-category="non">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <div class="search-bar">
        <img src="{{ asset('images/search.png') }}" alt="Search Icon">
        <input type="text" placeholder="Search for food or drinks">
    </div>

    <section id="appetizer" class="menu-section">
        <div class="menu-container">
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/04/Fruit-Charcuterie-Board_EXPS_JMZ18_224813_C03_07_8b.jpg?fit=335,335" alt="Fruit">
                 </div>
                 <div class="item-description">
                    Fruit Charcuterie Board
                     <p>$ 1.99</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Hot-Artichoke-Spinach-Dip_EXPS_DIYD21_26044_E-MK08_24_1b-1.jpg?fit=335,335" alt="Spinach">
                 </div>
                 <div class="item-description">
                    Hot Spinach Artichoke Dip
                     <p>$ 2.22</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/07/Orange-Glazed-Meatballs_EXPS_THSO18_228881_D04_19_9b-1.jpg?fit=700%2C1024" alt="Meatball">
                 </div>
                 <div class="item-description">
                    Orange-Glazed Meatballs
                     <p>$ 3.00</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Turkey-Sliders-with-Sesame-Slaw_EXPS_HC17_119056_D07_29_7b-9.jpg?fit=335,335" alt="Turkey Sliders">
                 </div>
                 <div class="item-description">
                    Turkey Sliders with Sesame Slaw
                     <p>$ 2.53</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/exps149909_HCA153382B11_02_5b.jpg?fit=335,335" alt="Bread">
                 </div>
                 <div class="item-description">
                    Sesame Herb Pull-Apart Bread
                     <p>$ 1.56</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Cheesy-Skillet-Pizza-Dip_EXPS_FRBZ17_205524_D03_28_4b-1.jpg?fit=335,335" alt="Pizza">
                 </div>
                 <div class="item-description">
                    Cheesy Skillet Pizza Dip
                     <p>$ 3.58</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Homemade-Guacamole_EXPS_THJJ18_38391_D01_31_3b-11.jpg?fit=335,335" alt="Guacamole">
                 </div>
                 <div class="item-description">
                    Homemade Guacamole
                     <p>$ 2.25</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/exps54603_TH163620C11_11_6b-2.jpg?fit=335,335" alt="BLT Dip">
                 </div>
                 <div class="item-description">
                    Layered BLT Dip
                     <p>$ 2.10</p>
                 </div>
             </div>
         </div>
     </section>

     <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol">Alcohol Drink</span>
        <span data-category="non">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <section id="snacks" class="menu-section">
       <div class="menu-container">
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/tortilla.png') }}" alt="Tortilla">
                </div>
                <div class="item-description">
                    Torilla with Bolognese and Cheese
                    <p>$ 2.99</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/wonton.jpg') }}" alt="Wonton">
                </div>
                <div class="item-description">
                    Fried Wonton with Sour Spicy Sauce
                    <p>$ 2.69</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="{{ asset('images/potatosticks.jpg') }}" alt="Potato">
                </div>
                <div class="item-description">
                    Potato Sticks with Dipping Sauce
                    <p>$ 2.00</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.cookingclassy.com/wp-content/uploads/2019/01/chicken-nuggets-7.jpg" alt="Popcorn">
                </div>
                <div class="item-description">
                    Popcorn Chicken
                    <p>$ 3.00</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://heartbeetkitchen.com/foodblog/wp-content/uploads/2018/01/crispy-gluten-free-chicken-wings-a.jpg" alt="Spicy Honey">
                </div>
                <div class="item-description">
                    Spicy Honey Chicken Wings
                    <p>$ 3.22</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.thelittleepicurean.com/wp-content/uploads/2018/02/turon-filipino-fried-banana-roll-0.jpg" alt="Banana">
                </div>
                <div class="item-description">
                    Banana Turon with  Caramel
                    <p>$ 1.69</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://www.healthymummy.com/wp-content/uploads/2017/03/Easy-Chicken-Nachos.jpg" alt="Nachos">
                </div>
                <div class="item-description">
                    Loaded Nachos with  Chicken Mayo
                    <p>$ 2.35</p>
                </div>
            </div>
            <div class="menu-cb">
                <div class="item-image" >
                    <img src="https://i.pinimg.com/originals/0e/c9/dc/0ec9dc764fd953371dabcd7f90843f83.jpg" alt="Garlic">
                </div>
                <div class="item-description">
                    Garlic Cheese Bread
                    <p>$ 2.10</p>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol">Alcohol Drink</span>
        <span data-category="non">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <section id="alcohol" class="menu-section">
        <div class="menu-container">
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/07/black-russian-cocktail-vodka-coffee-shutterstock_1035562495.jpg?fit=700%2C700?fit=335,335" alt="Black Russian">
                 </div>
                 <div class="item-description">
                    Black Russian
                     <p>$ 2.12</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/Negroni-shutterstock_694436281.jpg?fit=700%2C700?fit=335,335" alt="Boulevardier">
                 </div>
                 <div class="item-description">
                    Boulevardier
                     <p>$ 2.69</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/Bronx-Cocktail-shutterstock_1093340795.jpg?fit=700%2C700?fit=335,335" alt="Bronx Cocktail">
                 </div>
                 <div class="item-description">
                    Bronx Cocktail
                     <p>$ 2.39</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/Clover-Club-shutterstock_1239236710.jpg?fit=700%2C700?fit=335,335" alt="Clover Club">
                 </div>
                 <div class="item-description">
                    Clover Club
                     <p>$ 2.18</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/06/dark-stormy-rum-cocktail-lime-ginger-shutterstock_385915783.jpg?fit=700%2C700?fit=335,335" alt="Dark and Stormy">
                 </div>
                 <div class="item-description">
                    Dark and Stormy
                     <p>$ 2.55</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/Mai-Tai-shutterstock_449441362.jpg?fit=700%2C700?fit=335,335" alt="Mai Tai">
                 </div>
                 <div class="item-description">
                    Mai Tai
                     <p>$ 2.34</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2017/10/Pina-Coladas_EXPS_THFM18_37191_C09_15_6b.jpg?fit=700%2C700?fit=335,335" alt="Pina Colada">
                 </div>
                 <div class="item-description">
                    Pina Colada
                     <p>$ 2.69</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/shutterstock_431092117.jpg?fit=700%2C700?fit=335,335" alt="Tom Collins">
                 </div>
                 <div class="item-description">
                    Tom Collins
                     <p>$ 2.75</p>
                 </div>
             </div>
         </div>
     </section>

     <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol">Alcohol Drink</span>
        <span data-category="non">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <section id="non" class="menu-section">
        <div class="menu-container">
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1693501137-61LOX5t-KgL.jpg?crop=1xw:1.00xh;center,top&resize=980:*" alt="De Soi Très Roséy">
                 </div>
                 <div class="item-description">
                    De Soi Très Rosé By Katy Perry
                     <p>$ 23</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.marthastewart.com/thmb/Ju1uWWQmghK-gqI2tUuVWzchgRc=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/iced-passion-fruit-green-tea-c1ad95db-0619-efc3863b8b6048bfa17414cbfd71e314.jpg" alt="Iced Passion-Fruit Green Tea">
                 </div>
                 <div class="item-description">
                    Iced Passion-Fruit Green Tea
                     <p>$ 2.10</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1693505235-IMG_0222_2048x.png?crop=1xw:1.00xh;center,top&resize=980:*" alt="Pilot Kombucha Celery Juniper Kombucha">
                 </div>
                 <div class="item-description">
                    Pilot Kombucha Celery Juniper Kombucha
                     <p>$ 33</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.marthastewart.com/thmb/H9nyn8UxYtZm1SkYtWMLFUhFKW0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/blackberry-plum-smash-c1ad95db-0619-5e9362c79fb0458b8a510ee7ee9a5093.jpg" alt="Blackberry-Plum Smash with Basil">
                 </div>
                 <div class="item-description">
                    Blackberry-Plum Smash with Basil
                     <p>$ 2.18</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.marthastewart.com/thmb/sSkq0A0epjw2ac3AwNeyiLyu2E8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/grapefruit-sanbitter-spritz-0419-5c14156e-silo-7080fa606d90479d81c5f8a7268752cb.jpg" alt="Grapefruit-Sanbitter Spritz">
                 </div>
                 <div class="item-description">
                    Grapefruit-Sanbitter Spritz
                     <p>$ 2.08</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.marthastewart.com/thmb/P8R2sEv0vUatxRN5pKxh4jS19Uk=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/mediterranean-cucumber-tonic-0419-5c14156e-silo-8dccdbd640664772988276de66c053ff.jpg" alt="Mediterranean Cucumber Tonic">
                 </div>
                 <div class="item-description">
                    Mediterranean Cucumber Tonic
                     <p>$ 2.14</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://assets.epicurious.com/photos/5deea5938a496c0008295f8a/1:1/w_2560%2Cc_limit/Batch%2520Cocktails_The%2520Blaylock.jpg" alt="The Blaylock">
                 </div>
                 <div class="item-description">
                    The Blaylock
                     <p>$ 2.69</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://assets.epicurious.com/photos/63979f46bf08d0d402aa183f/1:1/w_2560%2Cc_limit/BushwickThirstKiller_RECIPE_120822_43963.jpg" alt="Bushwick Thirst Killer">
                 </div>
                 <div class="item-description">
                    Bushwick Thirst Killer
                     <p>$ 2.28</p>
                 </div>
             </div>
         </div>
     </section>


     <section class="menu-categories">
        <span data-category="appetizer">Appetizer</span>
        <span data-category="snacks">Snacks</span>
        <span data-category="alcohol">Alcohol Drink</span>
        <span data-category="non">Non-Alcohol Drink</span>
        <span data-category="dessert">Dessert</span>
        <div class="line"></div>
    </section>

    <section id="dessert" class="menu-section">
        <div class="menu-container">
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2020/03/Easy-Key-Lime-Pie_EXPS_QEBZ20_247123_E01_24_5b.jpg?fit=335,335" alt="Key Lime Pie">
                 </div>
                 <div class="item-description">
                    Key Lime Pie
                     <p>$ 1.89</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Pineapple-Upside-Down-Dump-Cake_EXPS_TOHcom19_204281_B10_04_5b-8.jpg?fit=335,335" alt="Pineapple Upside-Down Dump Cake">
                 </div>
                 <div class="item-description">
                    Pineapple Upside-Down Dump Cake
                     <p>$ 1.71</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Marshmallow-Fudge_EXPS_HCCBZ19_15095_B05_30_6b-1.jpg?fit=335,335" alt="Marshmallow Fudge">
                 </div>
                 <div class="item-description">
                    Marshmallow Fudge
                     <p>$ 1.24</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Frozen-Margarita-Bars_EXPS_THCA18_205484_C09_22_2b-2.jpg?fit=335,335" alt=Frozen Margarita Mousse">
                 </div>
                 <div class="item-description">
                    Frozen Margarita Mousse
                     <p>$ 1.37</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Grilled-Banana-Brownie-Sundaes_EXPS_THSO18_85233_D04_19_3b-4.jpg?fit=335,335g" alt="Grilled Banana Brownie Sundaes">
                 </div>
                 <div class="item-description">
                    Grilled Banana Brownie Sundaes
                     <p>$ 1.92</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/exps143154_THCA153054A09_11_2b-1.jpg?fit=335,335" alt="Nutella-Stuffed Strawberries">
                 </div>
                 <div class="item-description">
                    Nutella-Stuffed Strawberries
                     <p>$ 1.85</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Butterscotch-Toffee-Cookies_exps89586_THCM14D08_09_3bC_RMS-4.jpg?fit=335,335" alt="Butterscotch Toffee Cookies">
                 </div>
                 <div class="item-description">
                    Butterscotch Toffee Cookies
                     <p>$ 1.18</p>
                 </div>
             </div>
             <div class="menu-cb">
                 <div class="item-image" >
                     <img src="https://www.tasteofhome.com/wp-content/uploads/2017/09/Ribbon-Pudding-Pie_EXPS_DSBZ17_14700_C01_19_2b.jpg?fit=335,335" alt="Ribbon Pudding Pie">
                 </div>
                 <div class="item-description">
                    Ribbon Pudding Pie
                     <p>$ 1.42</p>
                 </div>
             </div>
         </div>
     </section>

    <div class="cart-popup">
        <img src={{ asset('images/cart-icon.png') }} alt="Shopping Cart">
        <span class="cart-count">0</span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartPopup = document.querySelector('.cart-popup');
    const cartCount = document.querySelector('.cart-count');
    const menuCategories = document.querySelectorAll('.menu-categories span');

    let itemCount = 0;

    menuCategories.forEach(category => {
        category.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-category');

            // Reset active class for all categories
            menuCategories.forEach(cat => {
                cat.classList.remove('active');
            });

            // Add active class to the clicked category
            this.classList.add('active');

            scrollToCategory(categoryId);
        });
    });

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            itemCount++;
            cartCount.textContent = itemCount;
        });
    });

    cartPopup.addEventListener('click', function () {
        // Redirect to the cart/order page
        window.location.href = "order";
    });

    // Function to scroll to the selected category
    function scrollToCategory(categoryId) {
        const targetSection = document.getElementById(categoryId);

        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
});


    </script>

</body>

</html>
