@extends('frontend.home.layouts.main')

@section('main-container')

    <body>
        <div class="message">
    </div>
                        <!-- <div class="se-pre-con"></div> -->
        <nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-header">
        <div class="top-header ">
            <div class="container">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6 d-inline-flex justify-content-end">
                        <ul class="d-inline-flex mb-0" >
                            <li class="link"><a href="https://www.singleinterface.com/" target="_blank">SingleInterface</a></li>
                            <li class="link"><a href="{{ url('/login') }}" target="_blank" >Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation  align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 col-sm-4">
                        <a href="{{url('/')}}" class="navbar-brand logo">
                            <img src="{{ asset('img/logo_w.png')}}" alt="Spotlight"/>
                        </a>  
                    </div>
                    <div class="col-4 col-sm-8 position-static">
                        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="#slider">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#wedo">What We Do</a></li>
                                <li class="nav-item"><a class="nav-link" href="#whynow">Why Now</a></li>
                                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="slider d-flex align-items-center banner-section" id="slider">
    <div class="slick-slider-home slick-slider-home-js"> 
        <div class="home-banner-item" style="background-image: url(img/home-banner-2.jpg);"></div>
        <div class="home-banner-item" style="background-image: url(img/home-banner-1.jpg);"></div>
        <div class="home-banner-item" style="background-image: url(img/home-banner-3.jpg);"></div>
    </div>
    <div class="liquid-row-overlay"></div>
    <div class="container">
        <div class="content">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <div class="left text-center">
                        <h1>Hyperlocal Marketing<br> for Multi-Location Brands</h1>
                        <p>Award-Winning Marketing Platform that Drives Real Business</p>
                        <a href="#contact" class="blue-btn mt-4">
                            <span class="btn-text">Request Demo</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- Right-->
            </div>
        </div>
    </div>
</section>
<section class="features sec-height" id="wedo">
    <div class="container text-center">
        <div class="heading"><h1>What We Do</h1></div>
        <div class="row mt-4"><!-- Box-1 -->
            <div class="col-md-6 mb-4">
                <div class="box">
                    <img src="{{ asset('img/f1.png')}}" alt="Effectual Ad Campaigns"/>                    <h3>Effectual Ad Campaigns</h3>
                    <p>Create multiple variants of your ad campaign for different locations, demographics, languages etc. thereby tailoring them dynamically for specific users at specific locations at a specific time!</p>
                </div>
            </div><!-- Box-2 -->
            <div class="col-md-6 mb-4">
                <div class="box">
                    <img src="{{ asset('img/f2.png')}}" alt="Increased Reach"/>                    <h3>Increased Reach</h3>
                    <p>The Google display network offers unequalled inventory reaching out to 90% of all internet users around the world. Our solution ensures that we leverage on this vast inventory by using targeted and localized audiences.</p>
                </div>
            </div><!-- Box-3 -->
            <div class="col-md-6 mb-4">
                <div class="box">
                    <img src="{{ asset('img/f3.png')}}" alt="Scale-Up ROIs"/>                    <h3>Scale-Up ROIs</h3>
                    <p>Using your location data, our platform enables you to create unique adword campaigns to improve ad relevance and drastically scale up campaign ROIs/</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="box">
                    <img src="{{ asset('img/f4.png')}}" alt="Gain Intellectual Insights"/>                    <h3>Gain Intellectual Insights</h3>
                    <p>Our platform marries technology with location data to upturn efficiency of your ad campaigns; provides insights into the best performing ones in specific cities, areas etc. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="get-started sec-height" id="whynow">
    <div class="container text-center">
        <div class="heading"><h1 class="white-color">Why Now?</h1></div>
        <div class="row mt-4">
            <!-- Box-1 -->
            <div class="col-md-4 col-sm-6">
                <div class="box mb-30">
                    <img src="{{ asset('img/1.png')}}" alt="benefits1"/>                    <h3 class="mt-4">1 out of every 3</h3>
                    <p>mobile searches are local</p>
                </div>
            </div>
            <!-- Box-2 -->
            <div class="col-md-4 col-sm-6">
                <div class="box mb-30">
                    <img src="{{ asset('img/2.png')}}" alt="benefits2"/>                    <h3 class="mt-4">51%</h3>
                    <p>of local mobile searches result in a store visit.</p>
                </div>
            </div><!-- Box-4 -->
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="{{ asset('img/3.png')}}" alt="benefits3"/>                    <h3 class="mt-4">80%</h3>
                    <p>of consumers prefer locally relevant advertising</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project-21 our-team sec-height" id="team">
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="col-12">
                <div class="left team-header-text">
                    <h1>Our Team</h1>
                    <p class="mb-3 mt-3">Spotlight is on a mission to get our clients more IN-STORES Shoppers, One Store at a time.</p>
                    <p class="mb-3">Our team is small, but growing fast! We’d love your help in making SingleInterface awesome! Come Join us. We are recruiting for several positions in Sales, Technology & Marketing.</p>
                    <!-- <a href="mailto:hr@singleinterface.com" class="btn-1 d-inline-block">Join Us</a> -->
                    <a href="mailto:hr@singleinterface.com" class="blue-btn mt-4"><span class="btn-text">Join Us</span><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="team-wr mt-5 ">
        <div class="container">
            <div class="our-team-outer">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Harish.jpg')}}" alt="Harish"/></figure>
                        <h3 >Harish Bahl</h3>
                        <span class="designation ">Chairman</span>
                        <p >20 years experience | Worldtel, Mid-day, Rediff.com, Director of Ad Sales AOL India before  founding dealsandyou.com in 2010 and SingleInterface in 2014</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Tarun.jpg')}}" alt="Tarun"/></figure>
                        <h3>Tarun Sobhani</h3>
                        <span class="designation">CEO</span>
                        <p >20 years experience | Worldtel, Mid-day, Rediff.com, Director of Ad Sales AOL India before  founding dealsandyou.com in 2010 and SingleInterface in 2014</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Sandeep.jpg')}}" alt="Sandeep"/></figure>
                        <h3 >Sandeep Singh</h3>
                        <span class="designation">COO</span>
                        <p >16 years experience | Rediff.com, Co-founded Quasar (Acquired by WPP), FREECULTR (D2C Brand funded by Sequoia Capital), VP Marketing at Bira 91 ( Sequoia Capital funded Beer brand ) </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Girish.jpg')}}"/></figure>
                        <h3 >Girish Laxminarayana</h3>
                        <span class="designation ">CTO</span>
                        <p >19 years experience | Pitney Bowes, Gaana.com, Techgig.com  & Zomato.com. Co-founded InstaColl, acquired by a company founded by Sabeer Bhatia .</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Aijaz.jpg')}}" alt="Aijaz"/></figure>
                        <h3 >Mohammed Aijaz</h3>
                        <span class="designation">Engineering Head</span>
                        <p >14 years experience | Quasar, Zed Axis Technologies, Comwire Technologies. With SingleInterface since 2010 rising from Snr. Developer to Engineering Head. </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/Gagan.jpg')}}" alt="Gagan"/></figure>
                        <h3 >Gaganjot Singh Johar </h3>
                        <span class="designation">Director, Sales</span>
                        <p >Gagan 15 years experience | Droom.in, Radiocity.in, DB Corp, Times Internet, ICICI Pru| Head- Enterprise Solutions of Droom  before  joining Singleinterface as Director of Sales in 2020</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/vipul.jpg')}}" alt="vipul"/></figure>
                        <h3 >Vipul Manchanda</h3>
                        <span class="designation ">VP, New Business </span>
                        <p >20 years experience | VP Sales at magicpin (Hyperlocal discovery app), Star India, Greycells18 (subsidiary of TV18) ,Hindustan Times.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/CK.jpg')}}" alt="CK"/></figure>
                        <h3 >Chaitanya Kakkar</h3>
                        <span class="designation">Director-Sales</span>
                        <p>12 years experience | Airtel Payments Bank, Oxigen, Dealsandyou.com | Head Strategic Partherships of Airtel Payments Bank before  joining Singleinterface as Director of Sales in 2019.</p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 p-2 mb-mobi-4 mb-3">
                        <figure><img src="{{ asset('img/our-team/gargi.webp')}}"/></figure>
                        <h3 >Gargi Sharma</h3>
                        <span class="designation"> Associate Director</span>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact sec-height" id="contact">
    <div class="container">
        <div class="heading text-center"><h1 class="mb-4 white-color">Keep In Touch</h1> </div>
        <div class="row mt-4">
            <div class="col-md-5">
                <div class="title">
                    <h3>Contact Us :</h3>
                    <p>Our solution helps you drive more sales! Want to know how? Share your details and we will get back to you rightaway.</p>
                </div>
                <div class="content">
                    <div class="info d-flex align-items-start">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4 class="d-inline-block">PHONE :<br><span>0124-4305760</span></h4>
                    </div>
                    <div class="info d-flex align-items-start">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4 class="d-inline-block">EMAIL :<br><span>ads@myspotlight.co</span></h4>
                    </div>
                    <div class="info d-flex align-items-start">
                        <i class="fa fa-street-view" aria-hidden="true"></i>
                        <h4 class="d-inline-block">ADDRESS :<br><span>Plot No 241, Udyog Vihar Phase 1, Gurgaon - 122001</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <form method="post" id="contact-us-form" data-link="pages/contact-us">
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" name="name" id="c-name" placeholder="Name"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" name="email" id="c-email" placeholder="Email"></div>
                        <div class="col-sm-12"><input type="text" class="form-control" name="subject" id="c-subject" placeholder="Subject"></div>
                    </div>
                    <div class="form-group"><textarea class="form-control" rows="5"  name="message" id="c-message" placeholder="Message"></textarea></div>
                                            <div class="um-form-row form-group">
                            <div class="col-sm-12 p-0"><div class="g-recaptcha" data-sitekey="6LcKeFIUAAAAAP35xCAY9v3k5aFdLCiMew6X7QUS"></div></div>
                        </div>
                                        <button class="btn btn-block" type="submit" id="contact-submit">Send Now!</button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="footer-sec">
    <div class="container">
        <div class="footer-nav">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="footer-left-wr">
                        <div class="footer-logo">
                            <img src="{{ asset('img/logo_w.png')}}" alt="spotlight" class="foot_logo"/>                        </div>
                        <p>Digital Transformation Marketing Stack for Physical Retail Enterprises.</p>
                        <ul class="footer-social-media">
                            <li><a href="https://twitter.com/singleinterface" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://in.linkedin.com/company/singleinterface" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3><a href="javascript:void(0)">Local Cloud</a></h3>
                    <ul class="usful-link">
                        <li><a class="" href="{{url("/#wedo")}}">What We Do</a></li>
                        <li><a class="" href="{{url("/#whynow")}}">Why Now</a></li>
                        <li><a class="" href="{{url("/#team")}}">Team</a></li>
                        <li><a class="" href="{{url("/#contact")}}">Contact</a></li> 
                        <li><a class="" href="{{url("/privacy-policy")}}">Privacy Policy</a></li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-botom-sec">
            <div class="row">
                <div class="col-md-12 text-right">
                    <p class="copyright text-right">Copyright ©2022 Spotlight.</p>
                </div>
            </div>
        </div>
    </div>
</footer>        
    

@endsection