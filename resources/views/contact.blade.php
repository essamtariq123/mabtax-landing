@extends('layouts.app')
@section('content')
        <!-- Contact Area -->
        <div class="contact-area padding-top-180 padding-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="content-area">
                            <div class="section-title padding-bottom-25">
                                <h4 class="title">Let’s scale your brand, together</h4>
                            </div>
                            <div class="single-contact-item-02">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content">
                                    <p class="details">+92 3214499907</p>
                                </div>
                            </div>
                            <div class="single-contact-item-02">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content">
                                    <p class="details">email@mabtax.com</p>
                                </div>
                            </div>
                            <div class="single-contact-item-02">
                                <div class="icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="content">
                                    <p class="details">Mall Road, Lahore, Pakistan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="contact-form style-01">
                            <form action="contact.php" id="contact_page_form" class="contact-page-form" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone  <span>*</span></label>
                                            <input type="text" name="phone" placeholder="Type Phone Number" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email Address   <span>*</span></label>
                                            <input type="text" name="email" placeholder="Type Email Address" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">How can we help? <span>*</span></label>
                                            <textarea name="message" id="msg" cols="1" rows="4" placeholder="Type Desciption"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="submit-btn style-01">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Area -->
        <div class="map-area padding-bottom-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="contact_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.9485643482562!2d74.33667231515147!3d31.553026181358785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c87c03f811%3A0xde393c60de69f2e6!2sShahrah-e-Quaid-e-Azam%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1643122764333!5m2!1sen!2s" style="border:0; width: 100%; height: 100%;"
                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('styles')
    <style>
        .padding-top-180 {
            padding-top: 180px
        }

        .salary-input {
            width: 100%
        }

        .salary-input input {
            font-size: 2rem;
            font-weight: 500;
            padding: 15px;
        }
    </style>
@endsection

