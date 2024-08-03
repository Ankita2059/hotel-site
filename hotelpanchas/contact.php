<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="css/default.css" rel="stylesheet" type="text/css" />

    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link href="css/plugin.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>

<body>

    <div id="preloader">
        <div id="status"></div>
    </div>


    <?php include "header.php"; ?>

    <section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


    <section class="contact">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mar-bottom-30">
                        <div class="info-item">
                            <!-- <div class="info-icon">
                                <i class="fa fa-map-marker"></i>
                            </div> -->
                            <div class="info-content">
                                <p>Address 2H5X+XG, Arbeni, Nepal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item info-item-or">
                            <!-- <div class="info-icon">
                                <i class="fa fa-phone"></i>
                            </div> -->
                            <div class="info-content">
                                <p>+977 985-1125841</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="info-item">
                            <!-- <div class="info-icon">
                                <i class="fa fa-envelope"></i>
                            </div> -->
                            <div class="info-content">
                                <p>Tel: 977-222-444-6666</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="contact-support">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mar-bottom-30">
                        <div class="support-item">
                            <h4>Costumer Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="support-item">
                            <h4>Technical Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mar-bottom-30">
                        <div class="support-item">
                            <h4>Booking Queries</h4>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="contact-map">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3522.475554221161!2d83.5962375754782!3d28.009937476010478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995d87e3ec2c5a3%3A0x2c4a5779986b58b3!2s2H5X%2BXG%2C%20Arbeni!5e0!3m2!1sen!2snp!4v1718718791270!5m2!1sen!2snp" width="600" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="contact-form" class="contact-form">
                            <h3>Keep in Touch</h3>
                            <div id="contactform-error-msg"></div>
                            <form method="post" action="#" name="contactform" id="contactform">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone" />
                                </div>
                                <div class="textarea">
                                    <textarea name="comments" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right">
                                    <input type="submit" class="btn btn-orange" id="submit" value="Send Message" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include "footer.php"; ?>

    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content login-content">
                <div class="login-image">
                    <img src="images/logo-black.png" alt="image" />
                </div>
                <h3>Hello!Sign into your account</h3>
                <form>
                    <div class="form-group">
                        <input type="email" placeholder="Enter email address" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter password" />
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox" /> Remember Me
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
                <div class="form-btn">
                    <a href="#" class="btn btn-orange">LOGIN</a>
                    <p>Need an Account?<a href="#"> Create your Hotux account</a></p>
                </div>
                <ul class="social-links">
                    <li>
                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal fade" id="register" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content login-content">
                <div class="login-image">
                    <img src="images/logo-black.png" alt="image" />
                </div>
                <h3>Awesome! Create a Hotux Account</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Enter username" />
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Enter email address" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Enter password" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm password" />
                    </div>
                </form>
                <div class="form-btn">
                    <a href="#" class="btn btn-orange">SIGN UP</a>
                </div>
                <ul class="social-links">
                    <li>
                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/map.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'892fc719bdfc9fd9',t:'MTcxODI1NzU2NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/6aac8896f227/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"892fc719bdfc9fd9","version":"2024.4.1","r":1,"token":"e2e296138d64407b8469055f5cbf0b42","b":1}' crossorigin="anonymous"></script>

</body>

</html>