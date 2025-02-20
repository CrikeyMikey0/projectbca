<!doctype html>

<head>
    <?php require 'structure/head.php'; ?>
</head>
<header>
    <?php require 'structure/header.php'; ?>
</header>
</head>

<body>

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Locations</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Location Map-->
    <section class="padding">
        <h3 class="hidden">hidden</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map"></div>
                    <div class="search_location">
                        <form>
                            <input id="geocomplete" type="text" placeholder="Type in an address" class="search" />
                            <button id="find" type="button" class="find-btn"><i class="icon-map"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Contact Form & Address-->
    <section class="padding bg_grey" id="location">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="heading">Get in Touch</h2>
                    <hr class="heading_space">
                    <form class="callus" onSubmit="return false" id="contact_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="result" class="text-center form-group"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="f_name" id="f_name" placeholder="First Name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="l_name" id="l_name" placeholder="Last Name" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" id="phone" required placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="btn-submit button3">
                                        <input type="submit" value="Submit Request" id="btn_contact_submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-4 bistro">
                    <h2 class="heading">bistro</h2>
                    <hr class="heading_space">
                    <p><strong>Phone:</strong> 1.800.555.6789</p>
                    <p><strong>Email:</strong> <a href="mailto:support@bistro.com">support@bistro.com</a></p>
                    <p><a href="#.">Web: www.bistro.com</a></p>
                    <p><strong>Address:</strong> 12345 North Main Street, New York</p>
                    <ul class="social_icon">
                        <li class="black"><a href="#." class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li class="black"><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                        <li class="black"><a href="#." class="google"><i class="icon-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</body>
<footer>
    <?php require 'structure/footer.php'; ?>
</footer>
</html>