<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
         
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/Grid.css">                
        <link rel="stylesheet" type="text/css" href="vendors/animate.css"> 
        <link rel="stylesheet" type="text/css" href="resources/style.css">
        <link rel="shortcut icon" type="image/jpg" href="resources/img/icon.jpg">
        <title>Leckerpizza.com</title>
        <style>
            .phpmsg {
                font-size: 110%;
                margin-bottom: 1rem;
                color: #e67e22;
            }

            .phpclr {
                color: red;
            }
        </style>
    </head>
    <body>
        <header class="header">
            <nav>
                <div class="row">
                    <img src="resources/img/logo.png" alt="Logo" class="row__logo">
                    <ul class="row__mainNav">
                        <li><a href="#" class="js--scrollToBestSeller">Make order</a></li>
                        <li><a href="#" class="js--scrollToBestSeller">Bestsellers</a></li>
                        <li><a href="#" class="js--scrollToVeg">Veg</a></li>
                        <li><a href="#" class="js--scrollToNonVeg">Non veg</a></li>
                        <li><a href="#" class="js--scrollToNewest">Newest</a></li>
                        <li><a href="#" class="js--scrollToMeals">Meals</a></li>
                        <li><a href="#" class="js--scrollToAboutUs">About us</a></li>
                        <li><a href="Log in.php" class="row__btn" target="_blank">Sign in</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header__textbox">
                <h1 class="heading-primary">
                    <span class="heading-primary--sub">A little slice of</span>
                    <span class="heading-primary--main">paradise</span>
                </h1>
                <a href="#" class="btn btn--white btn--animated js--scrollToBestSeller">Order now</a>
            </div>
        </header>

        <div class="stickyCont">
            <nav class="sticky">
                <div class="row">
                    <img src="resources/img/icon.jpg" alt="Logo" class="row__logo-icon">
                    <ul class="row__mainNav">
                        <li><a href="#" class="js--scrollToBestSeller">Make order</a></li>
                        <li><a href="#" class="js--scrollToBestSeller">Bestsellers</a></li>
                        <li><a href="#" class="js--scrollToVeg">Veg</a></li>
                        <li><a href="#" class="js--scrollToNonVeg">Non veg</a></li>
                        <li><a href="#" class="js--scrollToNewest">Newest</a></li>
                        <li><a href="#" class="js--scrollToMeals">Meals</a></li>
                        <li><a href="#" class="js--scrollToAboutUs">About us</a></li>
                        <li><a href="Log in.php" class="row__btn" target="_blank">Sign in</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <section class="sectionFeatures js--sectionFeatures" id="features">
            <div class="row">
                <h2>About Us</h2>    
                <p class="longCopy">
                    Lecker Pizza - simply yummazing...!! &nbsp; We thought, we made, and we spread...!!!
                </p>
            </div>
            <div class="row">
                <div class="col span-1-of-4 box">
                    <h3>Who we are</h3>
                    <p>
                        We have 10M + customers in more than 10 countries. We never stop driving ourselves to deliver hot pizzas, fast every-time anywhere you want to enjoy it.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <h3>What we’re about</h3>
                    <p>
                        We believe that problems come and go but pizza is forever. Quite possibly the only perfect food is pizza. We prepare pizza and deliver it fast, with a smile.
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <h3>For the love of pizza </h3>
                    <p>
                        We know farmers who grow the ingredients, and those farmers cared about quality. So the ingredients we use are still our first priority. 
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <h3>Leckerpizza India</h3>
                    <p>
                        In Pune we started our first restaurant. The restaurant brand offers an exiciting menu consisting of its signature pizzas, desserts and meals.
                    </p>
                </div>
            </div>
            <div class="row MARGIN" style="padding-top: 5rem">   
                <p class="longCopy">
                    For us, it's not just about bringing you good pizza at your doorstep. It's about making a connection, which is why we sit down with the chefs, dreaming up menus that will arrive fresh and full of flavor. Try us!
                </p>
            </div>
        </section>

        <section class="sectionBestseller js--sectionBestseller">
            <div class="row">
                <h2>Taste the best</h2>
                <p class="longCopy">
                    We put in our best to meet every coustomers taste and expectations. And we indeed achieved it. Our pizza's have now become the first choice of all pizza lovers.
                </p>
            </div>
            <div class="bestSellerTag">
                <div class="tag-hr"></div>
                <div class="tag">Bestseller</div>
            </div>
            <div class="row">
                <div class="col span-1-of-3 box pizzaBox">
                    <img src="resources/img/daoud-abismail-yUreHhahD-E-unsplash.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Pacific Veggie</h3>
                        <p class="pizza-content-sub"><br>Taste our exclusive veg pizza, with perfect flavours. Order now and enjoy our special dish.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-3 box pizzaBox">
                    <img src="resources/img/Aromatic-paneer-600x600.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Deluxe Feast</h3>
                        <p class="pizza-content-sub">Taste our exclusive paneer pizza. It's all perfect, just like you want. Order now and enjoy our special dish.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-3 box pizzaBox">
                    <img src="resources/img/GettyImages-519526540.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Super cheese</h3>
                        <p class="pizza-content-sub"><br>Taste our exclusive cheese pizza, with perfect flavours. Order now and enjoy our special dish.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div> 
        </section>

        <section class="sectionNewest js--sectionNewest">
            <div class="row">
                <h2>Check out our exclusive pizza's</h2>
                <p class="longCopy">
                    We work hard to bring you the finnest quality and healthy meals
                </p>
            </div>
            <div class="bestSellerTag">
                <div class="tag-hr"></div>
                <div class="tag">Newest</div>
            </div>
            <div class="gradient">
                <div class="row">
                    <div class="col span-1-of-2">
                        <figure class="pizza">
                            <div class="pizza__hero">
                                <img src="resources/img/corn.jpg" alt="pizza img" class="pizza__img">
                            </div>
                            <div class="pizza__content">
                                <div class="pizza__title">
                                    <h3 class="pizza__heading">Veggi feast 👌</h3>
                                    <div class="pizza__tag pizza__tag--1">#tag</div>
                                    <div class="pizza__tag pizza__tag--2">#tag</div>
                                </div>
                                <p class="pizza__description"><br>New corn pizza with cheese. Enjoy the meal.</p>
                                <div class="pizza__details">
                                    <p class="pizza__detail"><span class="emoji">🍕</span>850 kcal</p>
                                    <p class="pizza__detail"><span class="emoji">⭐️</span>4.7 / 5</p>
                                    <p class="pizza__detail"><span class="emoji"><a href="#" class="button">Buy now</a></span></p>
                                </div>
                            </div>
                            <div class="pizza__price">300 INR</div>
                        </figure>
                    </div>
                    <div class="col span-1-of-2">
                        <figure class="pizza">
                            <div class="pizza__hero">
                                <img src="resources/img/211162b5e744627458dc9698bd09d65c.jpg" alt="pizza img" class="pizza__img">
                            </div>
                            <div class="pizza__content">
                                <div class="pizza__title">
                                    <h3 class="pizza__heading">Royal veggie 👌</h3>
                                    <div class="pizza__tag pizza__tag--1">#tag</div>
                                    <div class="pizza__tag pizza__tag--2">#tag</div>
                                </div>
                                <p class="pizza__description"><br>Introducing our new veg pizza. With italin taste.</p>
                                <div class="pizza__details">
                                    <p class="pizza__detail"><span class="emoji">🍕</span>850 kcal</p>
                                    <p class="pizza__detail"><span class="emoji">⭐️</span>4.7 / 5</p>
                                    <p class="pizza__detail"><span class="emoji"><a href="#" class="button">Buy now</a></span></p>
                                </div>
                            </div>
                            <div class="pizza__price">300 INR</div>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-2">
                        <figure class="pizza">
                            <div class="pizza__hero">
                                <img src="resources/img/heather-barnes-X1I9UPcE7nQ-unsplash.jpg" alt="pizza img" class="pizza__img">
                            </div>
                            <div class="pizza__content">
                                <div class="pizza__title">
                                    <h3 class="pizza__heading">Roms pizza 👌</h3>
                                    <div class="pizza__tag pizza__tag--1">#tag</div>
                                    <div class="pizza__tag pizza__tag--2">#tag</div>
                                </div>
                                <p class="pizza__description"><br>Introducing new delicious Roms pizza.</p>
                                <div class="pizza__details">
                                    <p class="pizza__detail"><span class="emoji">🍕</span>850 kcal</p>
                                    <p class="pizza__detail"><span class="emoji">⭐️</span>4.7 / 5</p>
                                    <p class="pizza__detail"><span class="emoji"><a href="#" class="button">Buy now</a></span></p>
                                </div>
                            </div>
                            <div class="pizza__price">300 INR</div>
                        </figure>
                    </div>
                    <div class="col span-1-of-2">
                        <figure class="pizza">
                            <div class="pizza__hero">
                                <img src="resources/img/Peppy_Paneer.jpg" alt="pizza img" class="pizza__img">
                            </div>
                            <div class="pizza__content">
                                <div class="pizza__title">
                                    <h3 class="pizza__heading">Peppy paneer 👌</h3>
                                    <div class="pizza__tag pizza__tag--1">#tag</div>
                                    <div class="pizza__tag pizza__tag--2">#tag</div>
                                </div>
                                <p class="pizza__description">Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</p>
                                <div class="pizza__details">
                                    <p class="pizza__detail"><span class="emoji">🍕</span>850 kcal</p>
                                    <p class="pizza__detail"><span class="emoji">⭐️</span>4.7 / 5</p>
                                    <p class="pizza__detail"><span class="emoji"><a href="#" class="button">Buy now</a></span></p>
                                </div>
                            </div>
                            <div class="pizza__price">300 INR</div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="sectionVeg js--sectionVeg">
            <div class="row">
                <h2>Taste out our delicious pizza's</h2>
                <p class="longCopy">
                    Make the order now
                </p>
            </div>
            <div class="bestSellerTag">
                <div class="tag-hr"></div>
                <div class="tag">Veg</div>
            </div>
            <div class="row">
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/paneer pizza.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Paneer pizza</h3>
                        <p class="pizza-content-sub"><br>The delicious panner pizza is now available at lowest price. Order now</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/paneer soya.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Paneer soya</h3>
                        <p class="pizza-content-sub">Spiced Paneer, Favourful Masala Soya Chunks, Capsicum, Onion, Red Paprika.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Veggie Pizza.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Veggi pizza</h3>
                        <p class="pizza-content-sub"><br>Our classic veg pizza is now available at lowest price. Order now</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Country feast.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Country Feast</h3>
                        <p class="pizza-content-sub"><br>Our classic veg pizza is now available at lowest price. Order now</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/cheesy-pizza.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>The cheesiest</h3>
                        <p class="pizza-content-sub"><br>Our classic cheese pizza is now available at lowest price. Order now</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/magic paneer.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Magic paneer</h3>
                        <p class="pizza-content-sub">Pizza Is The Only Love Triangle Everyone Wants Feel The Essence Of MAGIC PANEER PIZZA</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/chad-montano-MqT0asuoIcU-unsplash.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Maxican cheese</h3>
                        <p class="pizza-content-sub">Taste our special dish at lowest price. Order now and enjoy our special dish.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div>

  <!--   <div class="setsCont">
                <div class="sets">
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sets">
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="sets__flex">
                        <div class="sets__elm">
                            <div class="elm__img">
                                <img src="resources/img/mehrab-zahedbeigi-ssPNzwdCljo-unsplash.jpg" alt="pizza img" class="sets__img--img">    
                            </div>
                            <div class="elm__content">
                                <h3 class="elm__heading">Pizza name</h3>
                                <p class="elm__des">Pizza description</p>
                                <p class="elm__emoji"><span class="elm__emoji--sub"><img src="#" class="emoji--img" alt="star"></span></p>
                            </div>
                            <div class="Buy-now">
                                <a href="#" class="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   -->
        </section>

        <section class="MoreAboutUs">
            <div class="row translate">
                <p class="longCopy">
                    We followed our heart and it led us to yummy pizza so we're spreading the same yumminess all over the world..!
                </p>
            </div>
            <div class="row">
                <div class="col span-1-of-3 box">
                    <h3>10 +</h3>
                    <div class="MoreAboutUs__hr"></div>
                    <p>
                        Countries
                    </p>
                </div>
                <div class="col span-1-of-3 box">
                    <h3>1,500 +</h3>
                    <div class="MoreAboutUs__hr"></div>
                    <p>
                        States
                    </p>
                </div>
                <div class="col span-1-of-3 box">
                    <h3>10M +</h3>
                    <div class="MoreAboutUs__hr"></div>
                    <p>
                        Coustomers
                    </p>
                </div>
            </div>
            <div class="row">
                <p class="lastP">Our mission is to be number one! <br> Be the best because nothing is better than best!</p>
            </div>
         </section>

         <section class="sectionNonveg js--sectionNonVeg">
            <div class="bestSellerTag">
                <div class="tag-hr"></div>
                <div class="tag">Non veg</div>
            </div>
            <div class="row">
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Al-fresco-pizza.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken sausage</h3>
                        <p class="pizza-content-sub"><br>This is our favorite weeknight pizza recipe that will make everyone in your family happy!</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Curry Pizza.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>BBQ Chicken</h3>
                        <p class="pizza-content-sub">With BBQ sauce, cheese, chicken, bacon, and pineapple. Add drinks, and perhaps salad and/or dessert, and you're all set.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/photo.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken pepperoni</h3>
                        <p class="pizza-content-sub"><br>This fresh tasting pizza is great for sharing, but even better for hoarding all to yourself!</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/chicken-tikka-pizza_9402.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken tikka</h3>
                        <p class="pizza-content-sub"><br>The most spicy and delicius of all, we have made just like you want it to be</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/dec-21-dskt-chicken-sausage-n-tikka-pan.png" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken sausagetikka</h3>
                        <p class="pizza-content-sub">Spicy lovers can pour out their hearts out when adding chili flakes on the Chicken Sausage and Tikka pizza.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/download.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken italiano</h3>
                        <p class="pizza-content-sub"><br>The special chicken pizza now comes in italian flavor as well. Enjoy our special dish at minimum price.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Triple-Chicken-Feast.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Triple chicken feast</h3>
                        <p class="pizza-content-sub">Pan Crust Medium Pizza with (Schezwan Meatball, Aromatic Lebanese Chicken, Capsicum, Onion, Red Paprika)</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/Spiced-Chicken-Meatballs.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Chicken meatballs</h3>
                        <p class="pizza-content-sub"><br>Pan Crust Medium Pizza with (Schezwan Chicken Meatball, Onion, Capsicum)</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/download (1).jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Lebanese chicken</h3>
                        <p class="pizza-content-sub"><br>Mixture of awsome falvours is gathered here. Taste our special dish.</p>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div>
         </section>
         <section class="sectionMeals js--sectionMeals">
            <div class="bestSellerTag">
                <div class="tag-hr"></div>
                <div class="tag">Meals</div>
            </div>
            <div class="row">
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/pizza-1.jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Ham and cheese</h3>
                        <p class="pizza-content-sub">Enjoy the meals with Ham and cheese.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/images (2).jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Hawaiian</h3>
                        <p class="pizza-content-sub">Enjoy the meals with Hawaiian.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/images (1).jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>Potato bacon</h3>
                        <p class="pizza-content-sub">Enjoy the meals with Potato bacon.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
                <div class="col span-1-of-5 box pizzaBox">
                    <img src="resources/img/download (2).jpg" alt="Vegetable pizza">
                    <div class="pizza-content">
                        <h3>White bacon</h3>
                        <p class="pizza-content-sub">Enjoy the meals with White bacon.</p>
                        <br>
                        <p style="text-align: right"><b>300 INR</b></p>
                    </div>
                    <div class="price">
                        <a href="#" class="button">Buy now</a>
                    </div>
                </div>
            </div>
         </section>

         <section class="sectionSubscribe" id="form">
            <div class="row">
                <div class="subscribe">
                    <div class="subscribe__form">
                        <form action="userdatabase.php" method="post" class="form">
                            <h3>Subscribe to Leckerpizza</h3>

                            <?php
                                error_reporting(0);
                                if ($_GET['success'] == 1) {
                                    echo"<div class=\"phpmsg\"><b>Thank you for subscribing to Leckerpizza!</b></div>";
                                }
                                
                                if ($_GET['success'] == -1) {
                                    echo"<div class=\"phpmsg phpclr\"><b>Oops! Email already exists</b></div>";
                                }
                            ?>

                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full name" id="name" name="username" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" name="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>
                            <div class="form__group">
                                <button href="#test-popup" class="submit" name="subscribe_user" type="submit" data-effect="mfp-zoom-in">SUBSCRIBE</button>
                            </div>
                            <div class="form__group">
                                <div class="check--hr"></div>
                                <input type="checkbox" class="form__group--check" id="check" required>
                                <p>By subscribing to Leckerpizza you will be joining the mailing list of us, and thereby allowing us to notify you about our latest upcoming activities</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </section>

         <footer>
            <h3>Leckerpizza</h3>
            <div class="row">
                    <ul class="footerNav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                        <li><a href="Log in.php" target="_blank">Log in</a></li>
                        <li><a href="#"><p class="ion-social-facebook">Facebook</p></a></li>
                        <li><a href="#"><p class="ion-social-twitter">Twitter</p></i></a></li>
                        <li><a href="#"><p class="ion-social-instagram">Instagram</p></i></a></li>
                    </ul>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2021 by Leckerpizza. This website is created by Leckerpizza and any use of the images, structure and content in any form without a legal permission of the Lickerpizza developer team will be serious violation of the copyright law, and respected person or authority will be liable for the legal action.
                </p>
            </div>
        </footer>
        <section class="signUP">
            <div class="signUp-block">
                <div class="signUp-block--sub">
                    <div class="signUp-block--sub-1">
                        <div class="innerbox ROW L">
                            <div class="innerleft COL COL-2-5 COLimg Q">
                                <span class="HEAD">
                                    <span>Leckerpizza</span>
                                </span>
                                <p class="HEAD-SUB N">
                                    <span>Thank you for purchasing</span>
                                    <p class="PRICE">Hope you will <br> enjoy the meal.</p>
                                </p>
                            </div>
                            <div class="innerright COL COL-3-5 W">
                                <form action="#" class="form">
                                    <div class="form__group">
                                        <input type="text" class="form__input form__input-2" placeholder="Full name" id="name" required>
                                        <label for="name" class="form__label M">Full name</label>
                                    </div>
                                    <div class="form__group">
                                        <input type="text" class="form__input form__input-2" placeholder="Address" id="addr" required>
                                        <label for="addr" class="form__label M">Address</label>
                                    </div>
                                    <div class="form__group">
                                        <div class="form__radio-group">
                                            <input type="radio" class="form__radio-input" id="UPI" name="pay" required>
                                            <label for="UPI" class="form__radio-label">
                                                <span class="form__radio-button"></span>
                                                UPI
                                            </label>
                                        </div>
                                        <div class="form__radio-group">
                                            <input type="radio" class="form__radio-input" id="POD" name="pay" required>
                                            <label for="POD" class="form__radio-label">
                                                <span class="form__radio-button"></span>
                                                Pay on delivery
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form__group M">
                                        <button class="submit">PROCEED</button>
                                        <a href="#" class="signUp back">BACK</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="templetes">
            <div class="subThnx">
               
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="JS/jquery.waypoints.min.js"></script>
        <script src="JS/script.js"></script>

    </body>
</html>