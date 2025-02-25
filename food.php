<!doctype html>
<html lang="en">
<head>
<?php require 'structure/head.php'; $title = "Our Food";
$msg = "Check out our menu and some of our special foods!";?>
</head>
<header>
  <?php require 'structure/header.php'; ?>
</header>
<body>

<?php require 'structure/title.php'; ?>



<!--Welcome-->
<section id="welcome" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="heading">Welcome to JKS</h2>
         <hr class="heading_space">
      </div>
      <div class="col-md-7 col-sm-6">
        <p class="half_space">Launched in Mumbai, JKS has grown from a home project to one of the largest food aggregators in the world. We are present in 24 countries and 10000+ cities globally, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with restaurants to enable a sustainable ecosystem.</p>
        <p class="half_space"></p>
        <p class="half_space">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including them.</p>
        <ul class="welcome_list">
        <li>Business Events</li>
        <li>Birthdays</li>
        <li>Cardiovascular Diseases</li>
        <li>Weddings</li>
        <li>Party & Others</li>
        </ul> 
      </div>
      <div class="col-md-5 col-sm-6">
       <img class="img-responsive" src="images/welcome.jpg" alt="welcome JKS">
      </div>
    </div>
  </div>
</section> 


<!--Food Facilities-->
<section id="food" class="padding bg_grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading">Our &nbsp; Menu</h2>
        <hr class="heading_space">
      </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <ul class="menu_widget">
          <li>Classic Nachos<span>INR 499.00</span></li>
          <li>Nachos Grande<span>INR 249.00</span></li>
          <li>Avocado Shell Stuffed<span>INR 150.00</span></li>
          <li>Stuffed Mushroom<span>INR 199.00</span></li>
          <li>Baked Potato Jackets<span>INR 99.00</span></li>
          <li>Mexican Taco<span>INR 899.00</span></li>
          <li>Tex-Mex Chicken<span>INR 1250.00</span></li>
          <li>Quesadillas Acapulco<span>INR 399.00</span></li>
          <li>Quesadillas Acapulco<span>INR 399.00</span></li>
          <li>Quesadillas Acapulco<span>INR 399.00</span></li> 
          <li>Garbo Chicken<span>INR 39.00</span></li>
          <li>Spaghetti<span>INR 3.00</span></li>
          <li>Barbecue Beef <span>INR 39.00</span></li>
          <li>Buck Wheat<span>INR 30.00</span></li>
        </ul>
      </div>
      <div class="col-md-8 grid_layout">
      <div class="row">
      <div class="zerogrid">
          <div class="wrap-container">
            <div class="wrap-content clearfix">
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="images/grid-layout2.jpg" alt="cook"/>
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="images/grid-layout2.jpg" data-fancybox-group="gallery">
                           Barbique Delite
                       </a> 
                   </div>
                  </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col first">
                  <div class="item-container"> 
                   <img src="images/grid-layout3.jpg" alt="cook"/> 
                   <div class="overlay">
                      <a class="overlay-inner fancybox" href="images/grid-layout3.jpg" data-fancybox-group="gallery">
                         Barbique Delite
                      </a>
                   </div>
                   </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/grid-layout4.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="overlay-inner fancybox" href="images/grid-layout4.jpg" data-fancybox-group="gallery">
                          Barbique Delite
                       </a>
                   </div>
                    </div>
                </div>
              </div>
              <div class="col-1-2">
              <div class="wrap-col">
                  <div class="item-container"> 
                   <img src="images/grid-layout5.jpg" alt="cook"/> 
                   <div class="overlay">
                       <a class="fancybox overlay-inner" href="images/grid-layout5.jpg" data-fancybox-group="gallery"> 
                         Barbique Delite
                       </a>
                    </div>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- testinomial -->
<?php require 'structure/testinomial.php'; ?>

</body>
<footer>
  <?php require 'structure/footer.php'; ?> 
</footer>
</html>
