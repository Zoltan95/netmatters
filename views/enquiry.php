<?php
    include 'inc/header.php';
    include 'inc/contact-form-top.php'; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];
    }
?>

    <div class="section bottom container">
        <div class="row">
            <div class="col">
                <div class="contact-block">
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
                <div class="contact-block">
                    <div class="container">
                        <div>
                            <div class="accordion">
                                <div class="question">
                                    <h4>
                                        <a href="#" id="toggler">
                                            <p class="question-text">
                                                Out of Hours IT Support
                                                <em class="fa fa-chevron-down rotate"></em>
                                            </p>
                                        </a>
                                    </h4>
                                    <div class="answer">
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
            <div class="col form">
                <form action="/netmatters/contact/enquiry" id="contact-form" method="POST">
                    <div class="row">
                        <div class="col--contact-form">
                            <div class="newsletter__input-fields">
                                <label class="required" for="name">Your Name</label>
                                <input class="newsletter__input-ctrl" id="name" name="name" value ="<?php echo $name ?>" type="text">
                            </div>
                        </div>
                        <div class="col--contact-form">
                            <div class="newsletter__input-fields">
                                <label for="company">Company Name</label>
                                <input class="newsletter__input-ctrl" id="company" name="company" value ="<?php echo $company ?>" type="text">
                            </div>
                        </div>
                        <div class="col--contact-form">
                            <div class="newsletter__input-fields">
                                <label class="required" for="email">Your Email</label>
                                <input class="newsletter__input-ctrl" id="email" name="email" value ="<?php echo $email ?>" type="email">
                            </div>
                        </div>
                        <div class="col--contact-form">
                            <div class="newsletter__input-fields">
                                <label class="required" for="telephone">Your Telephone Number</label>
                                <input class="newsletter__input-ctrl" id="telephone" name="telephone" value ="<?php echo $telephone ?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="newsletter__input-fields">
                        <label class="required" for="message">Message</label>
                        <textarea class="newsletter__input-ctrl" name="message" id="message" value = "<?php echo $message ?>" cols="50" rows="10">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?
                        </textarea>
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
                    <div class="action-block">
                        <button type="submit" name="submit" class="btn btn-primary"> Send Enquiry </button>
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

