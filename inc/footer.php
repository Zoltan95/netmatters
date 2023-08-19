               
                <!--Newsletter Start-->
                <div class="newsletter__main">
                    <div class="container">
                        <form class="newsletter" action="#">
                            <h2>Email Newsletter Sign-Up</h2>
                            <div class="newsletter__input-box-wrapper">
                                <div class="newsletter__input-box">
                                    <div class="newsletter__input-fields">
                                        <label for="newsletter-name">
                                            Your Name
                                        </label>
                                        <input id="newsletter-name" class="newsletter__input-ctrl" name="name" type="text" value="<?php echo $sname; ?>">
                                    </div>
                                </div>
                                <div class="newsletter__input-box">
                                    <div class="newsletter__input-fields">
                                        <label for="newsletter-email">
                                            Your Email
                                        </label>
                                        <input id="newsletter-email" class="newsletter__input-ctrl" name="email" type="email" value="<?php echo $semail; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter__input-fields">
                                <label class="ckbox__label">
                                    <span class="ckbox">
                                        <span class="ckbox__left">                                       
                                            <span class="ckbox__button">
                                                <input type="checkbox" value="">
                                                <span class="checkmark"></span>
                                            </span>    
                                        </span>
                                        <span class="ckbox__body">
                                            Please tick this box if you wish to recieve
                                            marketing information from us.
                                            Please see our <a href="#">Privacy Policy</a>
                                            for more information on how we keep your data safe.
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <button class="btn" name="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <!--Newsletter End-->

            </div>
            <!--Main End-->

            <!--Footer Start-->
            <footer>
                <div class="container">
                    <div class="footer__row">
                        <div class="footer__company-info">
                            <div class="footer__info">
                                <div class="footer__logo">
                                    <img src="<?php echo $req."img/nm-logo-white-med.png"?>" alt="Netmatters Logo">
                                </div>
                                <h4>Follow us on:</h4>
                                <div class="footer__social-logos">
                                    <a class="facebook btn" href="#"><span class="fa-brands fa-facebook-f"></span></a>
                                    <a class="linkedin btn" href="#"><span class="fa-brands fa-linkedin-in"></span></a>
                                    <a class="twitter btn" href="#"><span class="fa-brands fa-twitter"></span></a>
                                    <a class="instagram btn" href="#"><span class="fa-brands fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__menu-row">
                            <div class="footer__menu">
                                <h4>About Netmatters</h4>
                                <ul>
                                    <li>
                                        <a href="#">News</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Careers</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Cookie Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Environmental Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__menu">
                                <h4>Our Services</h4>
                                <ul>
                                    <li>
                                        <a href="#">Bespoke Software</a>
                                    </li>
                                    <li>
                                        <a href="#">IT Support</a>
                                    </li>
                                    <li>
                                        <a href="#"> Digital Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#">Telecoms Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Cyber Security</a>
                                    </li>
                                    <li>
                                        <a href="#">Developer Training</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__menu">
                                <h4>Our Industries</h4>
                                <ul>
                                    <li>
                                        <a href="#">Financial Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Construction</a>
                                    </li>
                                    <li>
                                        <a href="#">Retail & E-Commerce</a>
                                    </li>
                                    <li>
                                        <a href="#">Non-Profits</a>
                                    </li>
                                    <li>
                                        <a href="#">SME's</a>
                                    </li>
                                    <li>
                                        <a href="#">Healthcare</a>
                                    </li>
                                    <li>
                                        <a href="#">Education & Training</a>
                                    </li>
                                    <li>
                                        <a href="#">Travel & Leisure</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__menu">
                                <h4>Locations</h4>
                                    <ul>
                                        <li>
                                            <a href="#">London Office</a>
                                        </li>
                                        <li>
                                            <a href="#">Cambridge Office</a>
                                        </li>
                                        <li>
                                            <a href="#">Wymondham Office</a>
                                        </li>
                                        <li>
                                            <a href="#">Great Yarmouth Office</a>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Footer End-->

            <!--Footer Bottom-->
            <div class="footer__bottom">
                    <div class="container footer__bottom-container">
                        <div class="license">
                            
                                &copy; Copyright Netmatters 2023.
                                <br class="visible-xs">
                                All rights reserved.

                            <ul>
                                <li>
                                    <a href="#">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            <!--Footer Bottom End-->
        </div>
    </div>
    <div id="sidepanel">
        <div class="sidepanel__main visible-xs visible-sm">
            <ul>
                <li class="list-item visible-xs visible-sm">
                    <a href="#">Contact Us</a>
                </li>
                <li class="list-item software">
                    <a href="#">
                        <span class="ico icon-apps"></span>
                        <small>Bespoke</small>
                        Software
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Bespoke Software Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Bespoke CRM</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business Automation</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Software Integrations</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Mobile App Development</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Bespoke Databases</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Sharepoint Development</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Operational Systems</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business Central Implementation</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Internet of Things (IoT) Software</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Intranet Development</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Customer Portal Development</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Reporting Hub</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item it">
                    <a href="#">
                        <span class="ico icon-display"></span>
                        <small>IT</small>
                        Support
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our IT Support Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Managed IT Support</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business IT Support</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Office 365 for Business</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>IT Consultancy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cloud Service Provider</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Data Backup & Disaster Recovery</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item digital">
                    <a href="#">
                        <span class="ico icon-bar-graph"></span>
                        <small>Digital</small>
                        Marketing
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Digital Marketing Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Search Engine Optimisation (SEO)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Pay Per Click Advertising (PPC)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Conversion Rate Optimisation (CRO)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Email Marketing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Social Media Marketing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Content Marketing</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item telecoms">
                    <a href="#">
                        <span class="ico icon-phone_in_talk"></span>
                        <small>Telecoms</small>
                        Services
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Telecoms Services Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business Mobile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Hosted VoIP Provider</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business VoIP Systems</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Business Broadband</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Leased Lines Provider</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>3CX Systems</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item web">
                    <a href="#">
                        <span class="ico icon-code"></span>
                        <small>Web</small>
                        Design
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Web Design Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Bespoke Website Design</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>eCommerce Website Design</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Pay Monthly Websites</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Branding & Design</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Mobile App Development</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Web Hosting</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item security">
                    <a href="#">
                        <span class="ico material-icons">
                            security
                        </span>
                        <small>Cyber</small>
                        Security
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Cyber Security Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cyber Security Assessment</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cyber Security Management</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cyber Penetration Testing</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Cybr Essentials Certification</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>PCI Compliance</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Hacking Prevention</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="list-item dev">
                    <a href="#">
                        <span class="ico material-icons">
                            school
                        </span>
                        <small>Developer</small>
                        Course
                    </a>
                    <div class="sidepanel-banner">
                        <ul>
                            <li class="h2 sidepanel-banner__title">
                                Our Developer Course Services
                            </li>
                            <li>
                                <a href="#">
                                    <span>Train For A Career In Tech</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Skills Bootcamp</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Scion Scheme Frequently Asked Questions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Scion Collaborators</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <ul class="sidepanel__secondary">
            <li class="menu-item-532">
                <a href="#">Services</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Services</li>
                        <li>
                            <a href="#">
                                <span>Bespoke Software</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>IT Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Digital Marketing</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Telecoms Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Web Design</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Cyber Security</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="#">Our Work</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Our Work Services</li>
                        <li>
                            <a href="#">
                                <span>Case Studies</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Our IT Clients</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="#">Our Knowledge</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Our Knowledge Services</li>
                        <li>
                            <a href="#">
                                <span>Technologies</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Industries</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>News</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Insights</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="#">Training</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Training Services</li>
                        <li>
                            <a href="#">
                                <span>Train For A Career In Tech</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Skills Bootcamp</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>SCS Frequently Asked Questions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Scion Collaborators</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="#">Our Company</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Training Services</li>
                        <li>
                            <a href="#">
                                <span>Our Our Company Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Why Choose Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Our Culture</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Our Team</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Our Careers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Our Benefits</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="#">Contact us</a>
                <div class="sidepanel-banner">
                    <ul>
                        <li class="h2 sidepanel-banner__title">Our Contact Us Services</li>
                        <li>
                            <a href="#">
                                <span>London Office</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Cambridge Office</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Wymondham Office</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Great Yarmouth Office</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#">COVID Risk Assessments</a>
            </li>

            <li class="visible-xs visible-sm">
                <a href="#">Support</a>
            </li>

        </ul>
    </div>
    <div id="consent-popup" class="hidden">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__header">
                    <h3 class="modal__title">Cookies Policy</h3>
                </div>
                <div class="modal__body">
                    <p>Our website uses cookies. This helps us provide you with a good experience 
                    on our website. To see what cookies we use and what they do, 
                    and to opt-in on non-essential cookies click "change settings". 
                    For a detailed explanation, click on
                    <a href="#">Privacy Policy</a>
                    otherwise click "Accept Cookes" to enter.</p>
                </div>
                <div class="modal__footer">
                    <div class="modal__row">
                        <div class="col">  
                            <a class="btn btn--modal spacer-xs">Change Settings</a>
                        </div>
                        <div class="col">
                            <a id="accept" class="btn btn--modal web">Accept Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cookie-app Start-->
    <div id="cookie-app">
        <div class="cookie-btn-box">
            <button type="button" class="btn btn--cookie-settings">Manage Consent</button>
            <div class="cookie-settings">
                <div class="container">
                    <div class="h3">Cookie Preferences</div>
                    <div class="h5">Netmatters uses cookies on their website. Cookies are small text files that are stored on your computer or other device by websites that you visit. This page explains the cookies we use and what we use them for, and lets you turn them on or off. (Some cookies are necessary in order for our website to work properly.) We also explain below which other companies use cookies on our website and what they use them for, and lets you turn those other companies' cookies on or off.</div>
                    <div class="h5">Our website uses cookies in order to make the website easier to use, to support the provision of information and functionality to you, as well as to provide us with information about how the website is used so that we can make sure it is as up to date, relevant and error free as we can. We also use cookies to try to ensure that our online adverts reflect the interests of web users. Further information about the types of cookies that are used on our website is set out box below.</div>
                    <div class="h5">As well as the options provided below, you can choose to restrict or block cookies through your browser settings at any time. For more information about how to do this, and about cookies in general, you can visit 
                        <a href="https://cookiepedia.co.uk/all-about-cookies" target="_blank">www.cookiepedia.co.uk</a>and 
                    <a href="https://www.youronlinechoices.eu" target="_blank">www.youronlinechoices.eu</a>
                    . However, please be aware that restricting or blocking cookies set on our website may impact the functionality or performance of the website, or prevent you from using certain services provided through the website</div>
                    <div class="h5">Please note that third parties (including, for example, advertising networks and providers of external services like website analysis services) may also use cookies, over which we have no control, although we may receive services from these third parties (including, for example, for targeted advertising purposes and website analytics). These cookies are likely to be performance cookies or targeting cookies (as described below).</div>
                </div>

                <div class="container">
                    <div class="h1">Functional Cookies</div>
                    <div class="h5">
                        Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences, and any customisations you make to pages on our website during your visit.
                    </div>
                    <div class="h4">
                        <strong>Examples of how we use these cookies include:</strong>
                    </div>
                    <ul>
                        <li>
                            <h5>Live chat</h5>
                        </li>
                    </ul>
                    <div class="buttons">
                        <button type="button" class="btn btn--light">Disable</button>
                        <button type="button" class="btn btn--web">Enable</button>
                    </div>
                </div>

                <div class="container">
                    <div class="h1">Perfomance & Analytics</div>
                    <div class="h5">These cookies help us understand how people use our website. They collect information such as which pages on our website visitors go to most often, which features they use, and which websites people have visited before they visit ours. We use this information to improve our website and provide a better user experience.</div>
                    <div class="h4">
                        <strong>Examples of how we use these cookies include:</strong>
                    </div>
                    <ul>
                        <li>Monitoring and providing statistics on how our website is used.</li>
                        <li>Helping us improve our website by measuring any errors that occur.</li>
                        <li>Testing the website's design and operability</li>
                    </ul>
                    <div class="buttons">
                        <button type="button" class="btn btn--light">Disable</button>
                        <button type="button" class="btn btn--web">Enable</button>
                    </div>
                </div>

                <div class="container">
                    <h5>Different web browsers may use different methods for managing cookies. Please follow the instructions below, from the web browser manufacturers directly, to configure your browser settings*.</h5>
                    <ul>
                        <li>
                            <a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies">Microsoft Internet Explorer (IE)</a>
                        </li>
                        <li>
                            <a href="https://support.google.com/chrome/answer/95647?hl=en">Google Chrome</a>
                        </li>
                        <li>
                            <a href="https://support.apple.com/en-gb/guide/safari/manage-cookies-and-website-data-sfri11471/mac">Safari</a>
                        </li>
                        <li>
                            <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences">Firefox</a>
                        </li>
                    </ul>
                </div>

                <div class="container">
                    <div class="btn">Show detailed preferences</div>
                    <div>
                        <table>
                            <thead>
                                <tr class="no-hover">
                                    <td colspan="50">Company</td>
                                    <td colspan="50">Domain</td>
                                    <td></td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>Hotjar Ltd</span>
                                        </span>
                                    </td>
                                    <td colspan="50">hotjar.com</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div></div>
                                        <div class="flex">
                                            <a class="btn btn--cookie" href="https://www.hotjar.com/legal/policies/terms-of-service/" target="_blank">Privacy Policy</a>
                                            <a class="btn btn--cookie" href="https://www.hotjar.com/legal/policies/privacy/" target="_blank">Terms & Conditions</a>
                                        </div>    
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>LinkedIn Corporation</span>
                                        </span>
                                    </td>
                                    <td colspan="50">licdn.com</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div></div>
                                        <div class="flex">
                                            <a class="btn btn--cookie" href="https://www.linkedin.com/legal/user-agreement" target="_blank">Privacy Policy</a>
                                            <a class="btn btn--cookie" href="https://www.linkedin.com/legal/privacy-policy" target="_blank">Terms & Conditions</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>Facebook Inc.</span>
                                        </span>
                                    </td>
                                    <td colspan="50">facebook.com, facebook.net</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div>
                                        Facebook is an online social networking service that enables its users to connect with friends and family as well as make new connections.
                                        </div>
                                        <div class="flex">
                                            <a class="btn btn--cookie" href="https://www.facebook.com/legal/terms/updatet" target="_blank">Privacy Policy</a>
                                            <a class="btn btn--cookie" href="https://www.facebook.com/about/privacy/update" target="_blank">Terms & Conditions</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>Google Inc.</span>
                                        </span>
                                    </td>
                                    <td colspan="50">google.com, googletagmanager.com, google-analytics.com</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div></div>
                                        <div class="flex">
                                            <a class="btn btn--cookie" href="https://policies.google.com/terms?fg=1" target="_blank">Privacy Policy</a>
                                            <a class="btn btn--cookie" href="https://policies.google.com/privacy?fg=1" target="_blank">Terms & Conditions</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>Lead Forensics</span>
                                        </span>
                                    </td>
                                    <td colspan="50">https://www.leadforensics.com/</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div>
                                            Netmatters use a paid for software on our website which allows us access to information on the company you work for. This is done through the business' registered IP address and only allows us access to the information such as contact details, year founded, SIC codes and other information about the business. It also records the behaviour of the user from the company on the website, such as page views, time on the site, "goals" completed and other similar metrics.
                                            We use this data to help us improve lead generation through the website as this tool allows us access to see which businesses have visited the website but have not converted by calling, emailing or sending a contact form.
                                        </div>
                                        <div class="flex">
                                            <a class="btn btn--cookie" href="https://www.leadforensics.com/terms-of-service/" target="_blank">Privacy Policy</a>
                                            <a class="btn btn--cookie" href="https://www.leadforensics.com/privacy-policy/" target="_blank">Terms & Conditions</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr class="no-hover">
                                    <td colspan="50">
                                        <span class="pointer">
                                            <span>+</span>
                                            <span>3CX</span>
                                        </span>
                                    </td>
                                    <td colspan="50">https://netmatters.co.uk/</td>
                                    <td>
                                        <div class="buttons table-buttons">
                                            <button type="button" class="btn btn--light">Disable</button>
                                            <button type="button" class="btn btn--web">Enable</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="no-hover">
                                    <td colspan="200" class="expanded">
                                        <div>
                                            Personal data to be processed and for the use of cookies in order to engage in a chat processed by Netmatters, for the purpose of Chat/Support for the time of 30 day(s) as per the GDPR.
                                        </div>
                                        <div class="flex"></div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="container actions">
                    <button type="button" class="btn btn--light">Cancel</button>
                    <button type="button" class="btn btn--web">Continue to website</button>
                </div>

            </div>
        </div>
    <div>
    <!--Cookie-app End-->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $req."js/stickyheader.js"?>"></script>
    <script type="text/javascript" src="<?php echo $req."js/mobilemenu.js"?>"></script>
    <script type="text/javascript" src="<?php echo $req."js/banner.js"?>"></script>
    <script type="text/javascript" src="<?php echo $req."js/cookieconsent.js"?>"></script>
    <script type="text/javascript" src="<?php echo $req."js/contacts.js"?>"></script>
</body>
</html>
