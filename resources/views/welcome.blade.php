@extends('layouts.app')
@section('content')
    <div class="header-area header-business">
        <div class="business-bg-img wow animate__animated animate__zoomIn" data-parallax='{"x": 220, "y": 100}'
            style="background-image:url({{ asset('img/header-slider/business/02.png') }});"></div>
        <div class="business-bg-img-02 wow animate__animated animate__zoomIn"
            style="background-image:url({{ asset('img/header-slider/business/bg.png') }});"></div>
        <div class="shape-02"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-inner">
                        <!-- header inner -->
                        <h1 class="title">Your Tax and Legal Partner, MabTax</h1>
                        <h3 class="title-inner">Going beyond NTN and Income Tax Filing</h3>
                        <p>MabTax now provides 360 solutions to all your Business needs, including Business Incorporation
                            and Trademark Registration in Pakistan</p>
                        <div class="btn-wrapper padding-top-30">
                            <a href="#" class="boxed-btn btn-business">Start Tax Filing</a>
                        </div>
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper bg-image" style="background-image: url({{ asset('img/bg/business/bg1.png') }});">
        <!-- How to Get Started -->
        <div class="get-started-area padding-top-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title white brand desktop-center padding-bottom-50">
                            <h3 class="title">What we do</h3>
                            <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back
                                into the development of the asset through its charitable foundation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="work-single-item-02">
                            <div class="icon">
                                <div class="shape"
                                    style="background-image: url({{ asset('img/bg/business/pattern.png') }});">
                                </div>
                                <div class="shape-02"></div>
                                <i class="flaticon-contract"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Paid Search and Social Management</h3>
                                <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                                    back </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-single-item-02">
                            <div class="icon">
                                <div class="shape"
                                    style="background-image: url({{ asset('img/bg/business/pattern.png') }});">
                                </div>
                                <div class="shape-02"></div>
                                <i class="flaticon-contract"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Direct Response Content</h3>
                                <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                                    back </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-single-item-02">
                            <div class="icon">
                                <div class="shape"
                                    style="background-image: url({{ asset('img/bg/business/pattern.png') }});">
                                </div>
                                <div class="shape-02"></div>
                                <i class="flaticon-contract"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">CRO and Retention Optimizations</h3>
                                <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                                    back </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Create Content-->
        <div class="cover-your-area padding-bottom-120">
            <div class="container">
                <div class="cover-your-wrap">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cover-img bg-image-02 wow animate__animated animate__backInUp"
                                style="background-image: url({{ asset('img/cover/08.png') }});"></div>
                        </div>
                        <div class="col-lg-5 offset-lg-2">
                            <div class="unique-content-area">
                                <div class="section-title white brand">
                                    <h4 class="title">We’re obsessed with growth</h4>
                                    <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the
                                        fees back into the development of the asset through its charitable foundation.</p>
                                    <div class="btn-wrapper padding-top-30">
                                        <a href="#" class="boxed-btn btn-business blank">Sign Up For Free</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Create Content-->
    <div class="cover-your-area padding-top-110 margin-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title brand desktop-center padding-bottom-40">
                        <h3 class="title">Our team is made up of all different backgrounds from all over the world.</h3>
                        <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back
                            into the development of the asset through its charitable foundation.</p>
                    </div>
                </div>
            </div>
            <div class="cover-your-wrap">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cover-img style-01 bg-image-02 wow animate__animated animate__backInUp"
                            style="background-image: url({{ asset('img/cover/cover-1.png') }});"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="unique-content-area">
                            <div class="section-title brand">
                                <h4 class="title">Cover your everyday expenses</h4>
                                <p>Inspiration comes in many ways and you like to save everything from. sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Build Us -->
    <div id="why" class="cover-your-area padding-bottom-120">
        <div class="container">
            <div class="cover-your-wrap">
                <div class="row">
                    <div class="col-lg-5 offset-lg-2">
                        <div class="unique-content-area">
                            <div class="section-title brand">
                                <h4 class="title">We offer low fees that are transparent</h4>
                                <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees
                                    back into the development of the asset through its charitable foundation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cover-img style-01 bg-image-02 wow animate__animated animate__backInUp"
                            style="background-image: url({{ asset('img/cover/cover-2.png') }});"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area start  -->
    <section class="testimonial-area padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title startup desktop-center padding-bottom-40">
                        <h3 class="title">Join thousand of happy customers</h3>
                        {{-- <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage .</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area">
                        <div class="testimonial-carousel">
                            <div class="single-testimonial-item-07 style-01">
                                <div class="icon">
                                    <i class="flaticon-right-quotation-mark"></i>
                                </div>
                                <div class="content">
                                    <p class="description">I was struggling in tax filing, MabTax helped me in the
                                        process. The team is really professional and competent in their work. Highly
                                        recommend.</p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Rizwan Muhammad</h4>
                                            {{-- <div class="designation">CEO, Oxo Startup</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-item-07 style-01">
                                <div class="icon">
                                    <i class="flaticon-right-quotation-mark"></i>
                                </div>
                                <div class="content">
                                    <p class="description">Its a great service to deal with the FBR issues. staff is very
                                        cooperative, helpful and responds quickly.</p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Muhammad Umair Umer</h4>
                                            {{-- <div class="designation">CEO, Oxo Startup</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-item-07 style-01">
                                <div class="icon">
                                    <i class="flaticon-right-quotation-mark"></i>
                                </div>
                                <div class="content">
                                    <p class="description">My experience have been quite good so far. They do focus on the
                                        significance of customer satisfaction.</p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Mamoon Javaid</h4>
                                            {{-- <div class="designation">CEO, Oxo Startup</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-item-07 style-01">
                                <div class="icon">
                                    <i class="flaticon-right-quotation-mark"></i>
                                </div>
                                <div class="content">
                                    <p class="description">I filed my tax returns through MabTax and it was an excellent
                                        experience.</p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Hussain Khan</h4>
                                            {{-- <div class="designation">CEO, Oxo Startup</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-item-07 style-01">
                                <div class="icon">
                                    <i class="flaticon-right-quotation-mark"></i>
                                </div>
                                <div class="content">
                                    <p class="description">I really appreciated the team's support and their customers
                                        service.Highly recommended.</p>
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title">Syed Abid</h4>
                                            {{-- <div class="designation">CEO, Oxo Startup</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->
    <!-- Faq  -->
    <div class="accoridions padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center padding-bottom-50">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title startup desktop-center">
                        <h2 class="title">Frequently asked questions</h2>
                    </div>
                    <!-- //. section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-wrapper">
                        <!-- accordion wrapper -->
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-target="#collapseOwo" aria-expanded="false" aria-controls="collapseOwo">
                                            How does MabTax Work
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        MabTax is a powerful tool with a user friendly interface that asks simple questions
                                        and makes the tax filing process in Pakistan easier. All you have to do is answer
                                        with a 'yes' or 'no' and provide basic information like your salary income, taxes
                                        paid and investments made etc. Based on your responses, our system works out
                                        everything and shows your final tax refund / obligation, as applicable, after
                                        adjustment of taxes already paid or withheld.

                                        We've developed checks and balances to ensure that we have gathered every piece of
                                        information required to submit your tax return and notify you if something doesn't
                                        add up.

                                        Once you've completed the process, you can simply sit back and relax. Our integrated
                                        system will proceed to file your return of income, under supervision of tax experts.
                                        You will be notified once the process is completed.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                            Why should I use MabTax when my existing tax consultant is doing the same work
                                            for me?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        One of the most important principles that we kept in mind while developing this
                                        system was to educate individuals on their finances and help them understand where
                                        their money is going.

                                        Tax consultants usually file your tax return on their own without any involvement on
                                        your part. You are never in control of your tax return and simply rely on the
                                        expertise of your consultant.

                                        Once you start filing income tax return using MabTax, you will realize important
                                        details about your finances and ways to save taxes. MabTax follows a step-by-step
                                        process so that you end up filing your return with the correct information. And
                                        while you're preparing your tax returns, it will also guide you on various tax
                                        credits available to you so that you could save maximum taxes. You also don't need
                                        to keep track of past years' information because we keep the information stored in
                                        our system for future references.

                                        So, feel free to contact us if you want to learn more about how to apply for taxes
                                        in Pakistan.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseOwo">
                                            What do I need to get started?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        MabTax is a unique combination of technology and tax expertise to simplify tax
                                        filing process. It only takes three steps to get you going with your tax filing.

                                        Signup with MabTax
                                        Enter basic information and answer simple questions
                                        Pay for our services using common payment methods like debit / credit card.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            What information do I need to provide to complete the process?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        The information required to complete the process is fairly simple, and mainly
                                        depends on the sources of your income and type of your financial transactions and
                                        assets. Some of the documents that will be handy in answering the questions are as
                                        follows:

                                        Salary Certificate provided by your employer.
                                        Bank Statement or certificate from the bank showing the profit paid and taxes
                                        deducted by the bank, if any..
                                        Personal utility bills for expenses incurred and advance tax paid.
                                        Certificate of capital gains and tax thereon, issued by NCCPL against your stock
                                        trading activities, if any.
                                        Statement of investment in mutual funds, if any.
                                        In case of air travel in business class, copy of air ticket / invoice indicating the
                                        amount of tax deducted.
                                        Certificate of tax deduction provided by your cellular network company in case of
                                        post paid connection.
                                        Invoices issued by educational institutions indicating tax paid, if applicable.
                                        In case of any vehicle purchased during the year, copy of the registration book /
                                        documents issued by the Excise department.
                                        Property documents for any transactions (purchase or sale) during the year.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-target="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                            My employer already deducts tax on my salary and I don't have any additional
                                            source of income. Do I still have to file my tax return?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Yes. Your employer might have deducted the applicable tax on your salary. However,
                                        you should still file your tax return to avoid penal consequences of non-filing and
                                        / or paying extra taxes on various transactions levied on non-filers.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action -->
    <div class="call-to-action-area bg-image">
        <div class="container">
            <div class="call-to-action-inner style-06">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="title">Try fror 7 days free</h2>
                        <p class="subtitle">Each time a digital asset is purchased or sold, Sequoir donates a percentage of
                            the fees back.</p>
                        <form class="subscribe-form" action="index.html">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your email address">
                            </div>
                            <button type="submit" class="submit-btn">Try It Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area  -->
    <div class="contact-area padding-top-115 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title startup padding-bottom-25">
                        <h4 class="title">Let’s scale your brand, together</h4>
                        <p>Get a start@oxo.com</p>
                    </div>
                    <div class="contact-img bg-image-02"
                        style="background-image: url({{ asset('img/contact/cover-4.png') }});"></div>
                </div>
                <div class="col-lg-6 offset-lg-2">
                    <div class="contact-form style-01">
                        <form action="contact.php" id="contact_page_form" class="contact-page-form" method="post"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name <span>*</span></label>
                                        <input type="text" name="name" placeholder="Type Name"
                                            class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone <span>*</span></label>
                                        <input type="text" name="phone" placeholder="Type Phone Number"
                                            class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email Address <span>*</span></label>
                                        <input type="text" name="email" placeholder="Type Email Address"
                                            class="form-control" required="" aria-required="true">
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
@endsection
