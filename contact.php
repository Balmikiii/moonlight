<!DOCTYPE html>
<html lang="en">
    <?php include 'include/styleseet.php';?>

<body class='sc5'>

    <?php include 'include/header-included.php';?>
 

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img1/bg/bg-banner.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Contact</h2>
                        <ul class="page-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- team area start -->
    <div class="team-area info-box-two pd-top-115 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-center">
                        <h5 class="sub-title double-line">Contact</h5>
                        <h2 class="title">Get in touch</h2>
                        <p class="content">You can contact with our team for service requerement</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-inner text-center">
                        <div class="icon-box">
                            <i class="icomoon-pin"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>Office address</h3>
                                <p>H.1556, St-01, Deep singh nagar, Sherpur kalan, Focal point, Ludhiana (141010)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-inner text-center">
                        <div class="icon-box">
                            <i class=" icomoon-email"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>Email Address</h3>
                                <p>balmikikumar0786@gmail.com <br> www.moonlight.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-inner text-center">
                        <div class="icon-box">
                            <i class=" icomoon-telephone"></i>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h3>Phone Number</h3>
                                <p>+91-7087063168 <br> +91-84060-06438</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->

    <div class="g-map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.324584503847!2d76.08324701489632!3d30.849586281596554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391075470418c015%3A0xa5349eda2102c437!2sLudhiana%20College%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1661706222486!5m2!1sen!2sin"></iframe>
    </div>
    <div class="g-map-contact">
        <div class="row justify-content-end">
            <div class="col-lg-5 col-md-7">
                <form class="contact-form-wrap" action="mail.php" method="post" id="contact-form">
                    <div class="consulting-contact-form mx-4">
                        <h3 class="mb-3">Free consulting </h3>
                        <div class="single-input-inner style-bg">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="single-input-inner style-bg">
                            <input type="text" name="email" placeholder="Email Address">
                        </div>
                        <div class="single-input-inner style-bg">
                            <textarea name="msg" placeholder="Message"></textarea>
                        </div>
                        <div class="btn-wrap pb-3">
                            <button type="submit" name="submit"  class="btn btn-base">Submit Now </button>
                        </div>
                        <p class="form-messege mb-0 mt-20 text-center"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <?php include 'include/footer.php';?>
    </body>
</html>