<?php include 'inc/header.php'; ?>

<!--Breadcrumbs-->
<div id="middle">
    <div class="hidden-xs breadcrumb__container">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/netmatters/">Home</a>
                </li>
                <li>
                    Our Offices
                </li>
            </ul>
        </div>
    </div>

    <!--Head-->
    <div class="section top">
        <div class="page-head">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>
    </div>

    <!--Office Adresses-->
    <div class="office-addresses">
        <div class="service-list container">
            <div class="row office-address-row">
                <?php
                foreach (get_address_list() as $item) {
                echo "<div class='col--lg spacer-sm'>";
                    echo "<div class='block address'>";
                        echo "<div class='image'>";
                            echo "<a href='#'>";
                                echo "<img class='img-full london-office-img' src='".$item["office_img"]."' alt='".$item["office_name"]."'>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div class='content'>";
                            echo "<p class='h2'>";
                                echo "<a href='#'> ".$item["office_name"]." </a>";
                            echo "</p>";
                            echo "<p class='p'>";
                                echo $item["address_line1"];
                                echo "<br>";
                                echo $item["address_line2"];
                                echo "<br>";
                                echo $item["address_line3"];
                                echo "<br>";
                                echo $item["address_line4"];
                                echo "<br>";
                                echo $item["postcode"];
                            echo "</p>";
                            echo "<div class='tel'>";
                                echo "<a class='h3 text-web' href='#'>".$item["phone_number"]."</a>";
                            echo "</div>";
                            echo "<div class='view-more'>";
                                echo "<a class='btn btn--web' href='#'>View More</a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='map'>";
                        echo "<img src='".$item["maps_img"]."' alt='".$item["office_name"]."'>";
                    echo "</div>";
                echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="section bottom container">
        <div class="row">
            <div class="">
                <div>
                    <p>
                        <strong>Email us on:</strong>
                        <br>
                    </p>
                    <p>
                        <a class="h3 text-web" href="">
                            sales@netmatters.com
                        </a>
                    </p>
                    <p>
                        <strong>Business hours:</strong>
                    </p>
                    <p>
                        <strong>Monday - Friday 07:00 - 18:00&nbsp;</strong>
                    </p>

                </div>
                <div>
                    <div class="container">
                        <div>
                            <div class="accordion">
                                <div class="question">
                                    <h4>
                                        <a href="#">
                                            <p class="question-text">
                                                Out of Hours IT Support
                                                <em class="fa fa-chevron-down rotate"></em>
                                            </p>
                                        </a>
                                    </h4>
                                    <div clas="answer">
                                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                        <p>
                                            <strong>Monday - Friday 18:00 - 22:00</strong>
                                            <strong>Saturday 08:00 - 16:00</strong>
                                            <br>
                                            <strong>Sunday 10:00 - 18:00</strong>
                                        </p>
                                        <p>
                                        To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail.
                                         A technician will contact you on the number provided within 45 minutes of your call.&nbsp; 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <form action="">
                    <div class="row">
                        <div>
                            <div class="form-group">
                                <label class="required" for="name">Your Name</label>
                                <input class="form-control" id="name" name="name" value type="text">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input class="form-control" id="company" name="company" value type="text">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="required" for="email">Your Email</label>
                                <input class="form-control" id="email" name="email" value type="email">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="required" for="telephone">Your Telephone Number</label>
                                <input class="form-control" id="telephone" name="telephone" value type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="required" for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="50" rows="10">
                        Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?
                        </textarea>
                    </div>
                    <div class="form-group">
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
                    <div class="action-block">
                        <button name="submit" class="btn btn-primary"> Send Enquiry </button>
                        <small class="helper-text">
                            <span class="text-danger">*</span>
                            Fields Required
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<?php include 'inc/footer.php'; ?>
