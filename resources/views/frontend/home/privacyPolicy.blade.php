@extends('frontend.home.layouts.main')

@section('main-container')


    <body>
        <div class="message">
    </div>
                        <!-- <div class="se-pre-con"></div> -->
                        
        <style>
    .navbar{
        background-color: #111;
    }
    p,li{
        font-size: 14px;
    }

    h3{
        font-size: 19px;
        font-weight: 600;
    }

    h4{
        font-size: 16px;
        font-weight: 700;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-header">
        <div class="top-header ">
            <div class="container">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6 d-inline-flex justify-content-end">
                        <ul class="d-inline-flex mb-0" >
                            <li class="link"><a href="https://www.singleinterface.com/" target="_blank">SingleInterface</a></li>
                            <li class="link"><a href="{{url('/login')}}" target="_blank" >Login</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section style="padding: 140px 0 50px;">
    <div class="container">
        <p> This Privacy Policy describes the policies and procedures of Wannamo Marketing Private Limited, a company incorporated under the Companies Act, 1956 (“We” or “Our” or “Us” or “Company”) on the collection, use and disclosure of your personal information on singleinterface.com (the “Site”) and the services, features, content or application We offer (collectively with the Site, the “Services”)</p>

        <p>You agree to this Privacy Policy, in its entirety, when you:</p>

        <ul>
            <li>access or use the Site; and/or</li>
            <li>use any Service provided by Us; and/or</li>
        </ul>
        <p>
            Please note that We reserve the right to review and update this Privacy Policy from time to time by posting a prominent notice on the homepage stating that the Privacy Policy has been changed and updating the effective date of this Privacy Policy. If We make any material changes, We will notify you by email (sent to the e-mail address specified in your account) or by means of a notice on this Site prior to the change becoming effective. If you use the Site after the amended Privacy Policy has been posted, you will be deemed to have agreed to the amended Privacy Policy.</p>

        <p>We adhere to the following principles to protect your privacy:</p>

        <p>We do not rent or sell your personally identifiable information to third parties for any purposes.
            Any personally identifiable information that you provide will be secured with industry standard protocols and technology.</p>
        <p>This Privacy Policy addresses the following:</p>

        <ul><li>Information (provided by you upon registration)</li>
            <li>Use of PII</li>
            <li>Business Transfers</li>
            <li>Marketing Rules</li>
            <li>Sharing of Information</li>
            <li>User Obligations</li>
            <li>Opt-Out Policy</li>
            <li>Miscellaneous</li></ul>

        <h3>1. INFORMATION:</h3>
        <div style="padding-left: 40px;">
            <p> The information We gather enables Us to personalize, improve and continue to operate the Services. In connection with certain aspects of the Services, We my request, collect and/or display some of your personal identifiable information (“PII”). We collect the following types of information from our users:</p>

            <h4>1. Account Information</h4>
            <p>When you create an account, you will provide information that could be personal information, such as your username, password, email address, physical address and phone numbers (“Personal Information”). You acknowledge that this information may be personal to you, and by creating an account for access to the Services and providing Personal Information to Us, you allow others, including Us, to identify you and therefore may not be anonymous. We may use your contact information to send you information about our Services. We reserve the right to contact you when We believe it is necessary, such as for account recovery purposes.</p>

            <h4>2. User Content</h4>
            <p>Some features of the Services allow you to provide content to the Services, such as written comments, enquiries or likes/ratings. All content submitted by you to the Services may be retained by Us indefinitely, even after you terminate your account. We may continue to disclose such content to third parties in a manner that does not reveal PII, as described in this Privacy Policy.</p>

            <h4>3. IP Address Information and Other Information</h4>
            <p>We automatically receive and record information from your web browser when you interact with the Services, including your IP address and cookie information. This information is used for fighting spam/malware and also to facilitate collection of data concerning your interaction with the Services (e.g., what links you have clicked on).</p>

            <p>Generally, the Services automatically collect usage information, such as the number and frequency of visitors to the Site. We may use this data in aggregate form, that is, as a statistical measure, but not in a manner that would identify you personally. This type of aggregate data enables Us and third parties authorized by Us to figure out how often individuals use parts of the Services so that We can analyze and improve them.</p>

            <p>When you interact with Us through the Site, We receive and store certain additional information. Such information, which is collected passively using various technologies, may not presently be used to specifically identify you. Examples include IP addresses, browser types, domain names, and other anonymous statistical data involving your use of the Site and/or Services.</p>

            <p>When you use the Site, you are consenting to the collection, transfer, handling, management, storage, disclosure and other uses of your information as described in this Privacy Policy.</p>

            <h4>4. Third - Party Tracking</h4>
            <p>We may use third-party service providers to serve advertisements on our behalf across the Internet. These service providers may collect your IP address and non-personally identifiable or de-identified information about your visits to the Site in order to serve ads while you are visiting other web sites. Such non-personally identifiable information is anonymous or de-identified and does not reflect your name, address, e-mail address or other personal information; however your IP address may be collected by such services. This anonymous or de-identified information is often collected through the use of a web beacon, which is industry-standard technology used by most major websites.</p>

        <h3>2. USE OF PII</h3>
        <div style="padding-left: 40px;"><p>If you provide PII for a certain reason, We will use the PII in connection with the reason for which it was provided. For example, We will use the PII you input during the registration process to administer your access to the Site. We may also use the registration data that you provide to personalize your experience with Us and for verification purposes. We also use contact information from your registration data to send you information about Us and to keep you informed of Our other products and services that may be of interest to you. Your contact information is also used to reach you, when necessary, regarding issues concerning the use of the Site and/or our Service. We use PII collected through the Site to helps Us improve the Site and our products and services, and to better understand our users.</p>

            <p>We may use your PII to create aggregate data. Aggregate data is data that describes the demographics, usage or other characteristics of the Site's users as a group without disclosing PII. We reserve the right to transfer and/or sell aggregate or group data about the Site's users for lawful purposes. We may also create internal reports on user demographics and traffic patterns and share these reports with our advertisers and partners. We may include your PII in our reports. This information allows our third-party advertisers and partners to deliver, and our users to receive, more relevant advertisements. We use your IP address to help diagnose problems with Our server, and to administer the Site. Your IP address is also used to gather broad and specific demographic information as well as for validation purposes.</p>

            <p>If your PII changes, you may correct, update or delete your PII, and/or deactivate your account, by emailing our Customer Support at support@singleinterface.com.</p></div>

        <h3>3. BUSINESS TRANSFERS</h3>
        <div style="padding-left: 40px;"><p>We might inter alia sell or buy businesses or assets. In the event of a corporate sale, merger, reorganization, dissolution or similar event, PII may be part of the transferred assets. You will be notified via email and/or a prominent notice on Our Site of any change in ownership or uses of your personal information.</p></div>

        <h3>4. MARKETING RULES</h3>
        <div style="padding-left: 40px;"><p>With your consent, by submitting your e-mail address via the Site and/or obtaining services from Us, you agree to receive e-mail from Us and our third-party advertisers. Notwithstanding that your telephone number may be listed on the Do-Not-Call List, We retain the right to contact you via telemarketing in accordance with the applicable laws.</p></div>

        <h3>5. SHARING OF INFORMATION</h3>
        <p>We will share your personal information with third parties only in the ways that are described in this privacy policy.</p>
        <div style="padding-left: 40px;">
            <h4>1. Third Party Advertisers and Offers</h4>
            <p>By allowing Us to make the information you supply available to these third parties, you will receive free information on products and services that may be of interest to you. This information may also be shared with advertisers on an aggregate basis. Please note, though, that We do not control, and are not responsible for, the practices of our third-party advertisers.</p>

            <p>We may provide you with the opportunity to receive special offers, products and/or services from third-party companies. To receive such offers, products or services, your PII will be shared with such third-party companies, so that they may provide their products and/or services to you without requiring that you first fill another registration form. You may opt-out of receiving these communications by emailing us at support@singleinterface.com.</p>

            <h4>2. Service Providers</h4>
            <p>We, like many businesses, sometimes hire other companies ("Service Providers") to perform certain business-related functions. Examples include mailing information, maintaining databases, and hosting services. When We employ a Service Provider to perform a function of this nature, We provide it with the information that it needs to perform its specific function, which may include PII and other information that you provide to us via the Site.</p>

            <p>All information that We provide to a Service Provider, as well as information that you share directly with a Service Provider, will be governed by such Service Provider's privacy policies. When you call a Service Provider using a phone number available via the Site, We, or Our third party service providers, may record these phone calls and share such recordings with the applicable Service Provider. The recordings shall be maintained by the Service Providers in accordance with their privacy policies.</p>

            <h4>3. Legal Requirements</h4>
            <p>We may disclose PII if required to do so by law or in the good faith belief that such action is necessary to (a) comply with a legal obligation, (b) protect and defend Our rights or property, (c) act in urgent circumstances to protect the personal safety of users of the Site or the public, or (d) protect against any legal liability. Moreover, you hereby consent to disclosure of any record or communication to any third party including the Government authorities in accordance with the applicable laws.</p>
        </div>
        <h3>6. USER OBLIGATIONS</h3>
        <div style="padding-left: 40px;"><p>You, must, at all times, respect the terms and conditions of the then current Terms of Service and Privacy Policy. This includes respecting all intellectual property rights which may belong to third parties.</p>

            <p>You must not create or otherwise disseminate any information which may be deemed to be injurious, violent, offensive, racist or xenophobic or which may otherwise violate the purpose and spirit of the Company and its community of users.</p>

            <p>You must not provide information to the Company and/or users which you believe might be injurious or detrimental to your person, professional or social status.</p>

            <p>Any violations of these guidelines may lead to restriction, suspension or termination of your services by the Company.</p>
        </div>

        <h3>7. OUR OPT-OUT POLICY:</h3>
        <div style="padding-left: 40px;">
            <p>To stop receiving future communications from Us, please send an e-mail with your Login Name and e-mail address to support@singleinterface.com .</p></div>

        <div style="padding-left: 40px;"><h4>1. Data Retention</h4>
            <p>We will retain personal data and the data We process on behalf of Our customers for as long as needed in order to provide Our services and as required by the applicable laws.
            </p></div>
        <h3>8. MISCELLANEOUS</h3>
        <div style="padding-left: 40px;">
            <h4>1. Other Websites</h4>
            <p>The Site may contain links to third-party owned and/or operated websites. We are not responsible for the privacy practices or the content of such websites. We suggest that you contact these third parties directly for information regarding their privacy, security and data collection and distribution policies prior to providing them with any information.</p>

            <h4>2. Testimonials</h4>
            <p>We may post customer testimonials on the Site which may contain PII such as the customer's name. We obtain the customer's consent to post his/her PII along with the testimonial, prior to posting the testimonial. If you want to remove your PII that is being displayed on the Site under public pages, please send your request to support@singleinterface.com.</p>

            <h4>3. Social Media Widgets</h4>
            <p>The Site may include social media features, such as the Facebook Like button and widgets such as the share this button or interactive mini-programs that run on the Site. These features may collect your IP address, which pages you are visiting on the Site, and may set a cookie to enable the feature to function properly. Social media features and widgets are either hosted by a third party or hosted directly on the Site. Your interactions with these features are governed by the privacy policy of the company providing them.</p>

            <h4>4. Security</h4>
            <p>We take commercially reasonable steps to protect PII from loss, misuse, unauthorized access, disclosure, alteration and destruction. In particular, e-mail sent to or from the Site may not be secure, and you should therefore take special care in deciding what information you send to us via e-mail. Please keep this in mind when disclosing any PII to us or to any other party via the Internet. The security of your personal information is important to us. When you enter sensitive information (such as a credit card number) on our order forms, we encrypt the transmission of that information using appropriate technology.</p>

            <h4>5. Minors</h4>
            <p>Visitors under 18 years of age are not permitted to use and/or submit their personal information on the Site. We do not knowingly solicit or collect information from visitors under 18 years of age. We encourage parents and guardians to spend time online with their children and to participate and monitor the interactive activities of their children.</p>

            <h4>6. Contacting Us</h4>
            <p>Our "contact us" page contains e-mail links that allow you to contact us directly with any questions or comments that you may have. If you have any questions about this Privacy Policy or our privacy practices, please feel free to contact us at privacy@singleinterface.com .</p></div>
    </div>
</section>
<footer class="footer-sec">
    <div class="container">
        <div class="footer-nav">
            <div class="row justify-content-center">
                <div class="col-md-12">
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