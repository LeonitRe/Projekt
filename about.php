<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php"); 
    }

    include_once 'productRepository.php';
    $productRepository = new ProductRepository;
    $products = $productRepository->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ladid App</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <header>
        <div class="style">
            <a href="index.php"><img src="photo/logoo.jpg"></a>
        </div>
        <div class="table">
            <ul>
                    <li><a href="#feature">Features</a></li>
                    <li><a href="#imgGallary">Screenshot</a></li>
                    <li><a href="#price">Pricing</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="">News</a></li>
                    <form class="logout-cont" action="logoutController.php" method="post">
                        <a class="dashboard" href="dashboard.php">Dashboard</a>
                        <button class="logout" name="logout" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </header>
    <form>
        <div id="feature" class="future">
                <p class="futurep"><strong>Our Future</strong></p>
                <h2 class="futureh2">Our Amazing Features</h2>
            <div class="divs">
                <div class="up1"><img class="codelogo" src="photo/codeelogo.jpg"></div>
                <div class="div1">
                    
                    <h2 class="div1-h2">App Development</h2>
                    <p class="divs-p">We provide the best UI/UX  <br> Design by following  the <br> latest trends of <br> the market</p>
                </div>
                <div class="up2"><img class="uilogo" src="photo/uilogoo.svg"></div>
                <div class="div2">
                    <h2 class="div2-h2">UI/UX Design</h2>
                    <p class="divs-p">We provide the best UI/UX  <br> Design by following  the <br> latest trends of <br> the market</p></div>
                <div class="up3"><img class="websitelogo" src="photo/websitelogo.jpg"></div>
                <div class="div3">
                    <h2 class="div3-h3">Website Design</h2>
                    <p class="divs-p">We provide the best UI/UX  <br> Design by following  the <br> latest trends of <br> the market</p></div>
                <div class="up4"><img class="gamelogo" src="photo/gamelogo.jpg" alt=""></div>
                <div class="div4">
                    <h2>Game Development</h2>
                    <p class="divs-p">We provide the best UI/UX  <br> Design by following  the <br> latest trends of <br> the market</p></div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="imgdiv">
                <img class="about-img" src="photo/aboutusimg.jpg">
            </div>
            <div class="aboutus-txt">
                <p class="aboutus-p"><strong>About Us</strong></p>
                <h2 class="aboutus-h2">Best Financing App In <br> The World</h2>
                <p class="aboutus-p2">Best financing app ever in the world. Easy to use <br> and very user
                     friendly for mobile banking. You<br> can control your card easily and  
                     send<br> money some one just one click.</p>
            </div>
        </div>  
        <div class="howit-works">
            <div class="text">
                <p class="work-p"><strong>Working Processes</strong></p>
                <h2 class="work-h2">How To Works</h2>
            </div>
            <div class="containers">
                <div class="cont-1">

                    <div class="steps">
                        <p class="step-p"><strong> Step 1</strong></p>
                    </div>
                    <h2>Start Your Campaign</h2>
                    <p class="conta-p">Highly targeted landing pages will <br>
                         increase your results, and with A/B <br>
                         testing takes you to the next level <br>
                         cost per cost per acquisition. little <br>
                         more about your product or.</p>
                </div>
                <div class="cont-2">
                    <div class="steps">
                        <p class="step-p"><strong> Step 2</strong></p>
                    </div>
                    <h2>Engage New Users</h2>
                    <p class="conta-p">Stop wasting money on more traffi. <br>
                         Get more leads on your existing <br>
                         traffic instead. At the end, this <br>
                          improves your ROI significantly. <br>
                          convince them to use your game</p>
                </div>
                <div class="cont-3">
                    <div class="steps">
                        <p class="step-p"><strong> Step 3</strong></p>
                    </div>
                    <h2>Claim Your Reward</h2>
                    <p class="conta-p">Higher conversion rates means you <br>
                        get more business from your cur in <br>
                        rent traffic and reduce cost peple <br>
                        cost per acquisition.this improves <br>
                        your ROI significantly.</p>
                </div>
            </div>
        </div>
        <div id="imgGallary" class="screenshot-div">
            <div class="screenshot-text">
                <p class="screenshot-p"><strong>Screenshot</strong></p>
                <h2 class="screenshot-h2">App Screenshot</h2>
            </div>
            <div class="phone">
                <div class="cam"></div>
                <div class="voice"></div>
                <div class="cam2"></div>
                <div class="click-button"></div>
            <div class="screenshot-imgs">
                <img class="img" src="photo/screenshotimg1.jpg">
                <img class="img" src="photo/screenshotimg2.jpg">
                <img class="img" src="photo/screenshotimg3.jpg">
                <img class="img" src="photo/screenshotimg4.jpg">
                <img class="img" src="photo/screenshotimg5.jpg">
                <img class="img" src="photo/screenshotimg6.jpg">
                <img class="img" src="photo/screenshotimg7.jpg">
            </div>
        </div>
        <div class="voice1"></div>
        <div class="voice2"></div>
        <div class="lock"></div>
        <div id="price" class="price-container">
            <div class="text-container">
                <p><strong>Our Pricing</strong></p>
                <h2>Our Pricing Plan</h2>
            </div>
            <div class="inset-shadow">
        
            <div class="monthly-container">
                <?php 
                    foreach($products as $product) :
                ?>
                    <div class="monthly">
                        <p id="monthly-p2"><strong><?php echo $product[1]; ?></strong></p>
                        <h2>$<?php echo $product[2]; ?></h2>
                        <p id="month">Per Month</p>
                        <?php 
                            foreach(explode(',', $product[3]) as $content) :
                        ?>
                            <p id="monthly-p"><strong><?php echo $content; ?></strong></p>
                        <?php endforeach; ?>
                        <label class="purchase-button"><strong>Buy</strong></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
        <div id="reviews" class="reviews-container">
            <div class="text-reviews">
                <p><strong>User Review</strong></p>
                <h2>What Our Clients Say</h2>
            </div>
            <div id="but-container">
                <label onclick="showFirst()" id="label-but"><img id="clients" src="photo/first-person.jpg"></label>
                <label onclick="showSecond()" id="label-but"><img id="clients" src="photo/second-person.jpg"></label>
                <label onclick="showThird()" id="label-but"><img id="clients" src="photo/third-person.jpg"></label>
            </div>
            
            <div class="informations-container">
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Bill Gates</h3>
                            <p id="ceo"><strong>Microsoft Ceo</strong></p>
                            <div class="star-container">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img id="star-gray" src="photo/gray-star.png" >
                            </div>
                            <p><strong>My project was a simple task, but the persistence<br> of the ladidapp 
                                web development team turned an <br> very awesome and gear 
                                project make<br> me very happy. <br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/web-logo.jpg">
                        </div>
                    </div>
                    
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Elon Musk</h3>
                            <p id="ceo"><strong>Tesla Ceo</strong></p>
                            <div class="star-container">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img id="star-gray" src="photo/gray-star.png" >
                            </div>
                            <p><strong>My project was a simple task, but the persistence<br> of the ladidapp 
                                web development team turned an <br> very awesome and gear 
                                project make<br> me very happy. <br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/web-logo.jpg">
                        </div>
                    </div>
                    <div class="information-clients1">
                        <div class="text-info-cont">
                            <h3>Mark Zuckerberg</h3>
                            <p id="ceo"><strong>Facebook Ceo</strong></p>
                            <div class="star-container">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img  src="photo/star.png">
                                <img id="star-gray" src="photo/gray-star.png" >
                            </div>
                            <p><strong>My project was a simple task, but the persistence<br> of the ladidapp 
                                web development team turned an <br> very awesome and gear 
                                project make<br> me very happy. <br> Thank you so much
                            </strong></p>
                        </div>
                        <div id="info-logo">
                            <img id="pic-man" src="photo/web-logo.jpg">
                        </div>
                    </div>
           </div>
        </div>
        <div class="news-container">
            <div class="news-text-container">
                <p><strong>Our News</strong></p>
                <h2>Our Latest News</h2>
            </div>
            <div class="news-information-container">
                <div class="info">
                    <img src="photo/info-img.jpg">
                    <h2>
                        Design your apps in  your<br> own way Startegies
                    </h2>
                    <p>
                    Follow these steps to begin <br>learning 
                    how to create your <br> firstwebsite,
                     industry  best and <br>much more - all in 30 days!
                    </p>
                </div>
                <div class="info">
                <img src="photo/info-img2.jpg">
                    <h2>
                     Learn to easy how to  make<br> a website free
                    </h2>
                    <p>
                    Follow these steps to begin <br>learning 
                    how to create your <br> firstwebsite,
                     industry  best and <br>much more - all in 30 days!
                    </p>
                </div>
                <div class="info">
                <img src="photo/info-img3.jpg">
                    <h2>
                        Start your own company <br> very easily.
                    </h2>
                    <p>
                    Follow these steps to begin <br>learning 
                    how to create your <br> firstwebsite,
                     industry  best and <br>much more - all in 30 days!
                    </p>
                </div>
            </div>
        </div>
    </form>
    <script>
        (function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByClassName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },3000);
        }
})();

    var slides = document.querySelector(".information-clients1");


function showFirst(){
    slides.style.marginLeft="0";
}
function showSecond(){
    slides.style.marginLeft="-80vw";
}
function showThird(){
    slides.style.marginLeft="-160vw";
}

    </script>
</body>
</html>