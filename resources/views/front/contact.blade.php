@extends('front.master')

@section('content')
    @include('front.common.breadcrumb')

    <section class="page-content">
        <div class="container">
            <div class="contact-contt-info">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="cct-info">
                            <img src="{{ asset('assets/images/logo2.png') }}" alt="">
                            <h3>Nirapotta Services</h3>
                            <p>61, R.K Mission Rd, Gopibag, Dhaka</p>
                        </div><!--cct-info end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="cct-jb overlay-2">
                            <h2>Need a <br /> Quote?</h2>
                            <a href="contact.html#" title="" class="lnk-default">Contact Us</a>
                        </div><!--cct-jb end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="primary-contact">
                            <h3>Primary Contact information</h3>
                            <ul class="cot-links">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span>info@nirapottaservices.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone-volume"></i>
                                    <span>+880167354664</span>
                                </li>
                            </ul>
                            <ul class="socio-links">
                                <li><a href="contact.html#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="contact.html#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="contact.html#" title=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href="contact.html#" title=""><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="contact.html#" title=""><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div><!--primary-contact end-->
                    </div>
                </div>
            </div><!--contact-contt-info end-->
            <div class="contact-pg">
                <div class="sec-title">
                    <span>Contact With us</span>
                    <h2>Get in Touch Now</h2>
                </div><!--sec-title end-->
                <div class="contact-form">
                    <form class="js-ajax-form">
                        <div class="form-group no-pt">
                            <div class="missing-message">
                                Populate Missing Fields
                            </div>
                            <div class="success-message">
                                <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                            </div>
                            <div class="error-message">Populate Missing Fields</div>
                        </div><!--form-group end-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-field">
                                    <input type="text" name="name" placeholder="Name" id="name">
                                </div><!--form-field end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-field">
                                    <input type="email" name="email" placeholder="Email" id="email">
                                </div><!--form-field end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-field">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div><!--form-field end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="form-field">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!--form-field end-->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-field">
                                    <textarea name="message" placeholder="Your Question"></textarea>
                                </div><!--form-field end-->
                            </div>
                            <div class="col-lg-12">
                                <div class="form-submit">
                                    <button type="submit" name="submit" class="lnk-default submit">Contact Us</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--contact-pg end-->
        </div>
    </section><!--page-content end-->

    @include('front.common.partner')

@endsection