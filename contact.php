<?php require_once("../resources/config.php"); ?>


<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <h1 class="section-heading">Part of your order needs to be made at KeyME Headquaters</h1>
                    <h2 class="section-heading">And will ship in discreet in FREE packagings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" >

                        <?php send_message(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="FULL NAME" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="STREET ADDRESS" id="street" required data-validation-required-message="Please enter your Street address">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="APPT #" id="appt" required data-validation-required-message="Please enter Appartment Number">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="CITY" id="city" required data-validation-required-message="NEW YORK">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="STATE" id="state" required data-validation-required-message="STATE">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="ZIP" id="zip" required data-validation-required-message="ZIP">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <p class="help-block text-danger">We will only send you information regarding your order and KeyMe services and promotions. We will never share your information with a third party.</p>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button name="submit" type="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "header.php") ?>