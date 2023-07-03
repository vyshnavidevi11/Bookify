<?php 
  session_start();
  if(!isset($_SESSION['username']))
  {
      $val = "javascript:void(0)";
  }
  $val = "login.php";

?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>*/

    
<nav class="navbar">
    <link rel = "stylesheet" href = "css/home1.css">
    <div class="nav">
        <img src="Images/logo.jpeg" class="brand-logo" alt="">
        <div class="nav-items">
            <div class="search">
                <input type="text" class="search-box" placeholder="search">
                <button class="search-btn">search</button>
            </div>
            <p>
              <a href= "<?php echo $val ?>">
               <img src="Images/user.png">
              </a>
             </p> 
        </header>
        <meta name="viewport" content="width=960px">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </div>
    </nav>
        <div class="bg_container">
            <div class="heading_container">
                   <h1 class="heading1">SELL & BUY<br>OLD BOOKS</h1>
                   <p class="para1">“Bookify” makes it easy to people to buy or sell used books. Every student should be able to read their
                    desired books.And no obstacle should halt their wish to study.</p>
                    <a href="buy page/products.php">
                 </a>
                     <a href="buy page/products.html">
                    <button class="cn">BUY</button>
                   </a>
                  </a>
                    <a href="sell.php">
                      <button class="cn">SELL</button>  
                  </a>
                 
            </div>
            <div class="img_box">
                <div class="images">
                    <img src="Images/Book1.jpg" class="shelf_img"/>
                    <img src="Images/Book2.jpg" class="shelf_img2"/>
                    <img src="Images/Book3.png" class="shelf_img3"/>
                </div>
                <img src="Images/stand6.png"  class="stand" alt=""/>
            </div>
        </div>
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-coins" style="color:#27ae60"  style=”margin-left:4px”></i>
            <div class="content">
                <h3>Affordable</h3>
                <p>Reasonable prices</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock" style="color:#27ae60"></i>
            <div class="content">
                <h3>Safe and Secure</h3>
                <p>100% secure</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset" style="color:#27ae60"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <section class="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Checkout before this deal expires at midnight.</p>
            <a href="buy page/products.html" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="Images/deal-img.jpg" alt="">
        </div>

    </section>
    <div class="testimonials">
        <div class="inner">
          <h1>REVIEWS</h1>
          <div class="border"></div>
  
          <div class="row">
            <div class="col">
              <div class="testimonial">
                <img src="Images/rev3.jpg" alt="">
                <div class="name">Rishi</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
  
                <p>
                  First of all it customer service is excellent. We get all author book for Mumbai University.
                  People should try here affordable and best price.
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">
                <img src="Images/rev2.jpg" alt="">
                <div class="name">Priya</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
  
                <p>
                  Best book store almost all books are available for prepartion of exam related or other books are
                        available on reaonable price also.
                </p>
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">
                <img src="Images/rev.jpg" alt="">
                <div class="name">Keerthi</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
  
                <p>
                  This book centre have large amount of a books. The engineering study material all semester books
                        are available.then the peacefull and nice book centre.
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </body>

    <section class="blogs" id="blogs">

      <h1 class="heading"> <span>feedback</span> </h1>

      <section class="newsletter">

          <form action="">
              <h3>give your feedback here...</h3>
              <a href="feedback1.html" class="btn">Feedback</a>
              <!-- <a href="./feedback.html"><input type="submit" value="feedback"> -->
              </a>
          </form>

      </section>
  </section>

  </html>
  <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> login </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> buy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> sell </a>
          
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> details </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="##"> <i class="fas fa-phone"></i> 7702**** </a>
            <a href="##"> <i class="fas fa-phone"></i> 8464**** </a>
            <a href="##"> <i class="fas fa-envelope"></i> bookifystore@gmail.com </a>
            <img src="Images/worldmap.png" class="map" alt="">
        </div>
        
    </div>
  
    
    <div class="credit"> created by <span>team10</span>copyright &copy;2022 all rights reserved! </div>
  
</section>
  
