<?php
include 'include/header.php'; 
?>





<div class="loanwalle-banners">
    <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li> 
        
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
            <div class="item active"><a href="apply-now.html"> <img src="<?php echo base_url(); ?>assets/website/images/banner1.jpg" alt="Loanwalle" style="width:100%;"></a></div>
            <div class="item"><a href="apply-now.html"> <img src="<?php echo base_url(); ?>assets/website/images/banner2.jpg" alt="Loanwalle" style="width:100%;"> </a></div>
            <div class="item"><a href="apply-now.html"> <img src="<?php echo base_url(); ?>assets/website/images/banner3.jpg" alt="Loanwalle" style="width:100%;"> </a></div>
            <div class="item"><a href="apply-now.html"> <img src="<?php echo base_url(); ?>assets/website/images/festivals/Loanwalle_city.jpg" alt="Loanwalle" style="width:100%;"></a></div>
        </div>
        <!-- Left and right controls --> 

    </div>
</div>

<!--simple-steps-->
<div class="simple-steps">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tasgs">3 simple steps to solve all your <span>money problems</span></div>
            <div class="col-md-12 tag2">We yearn to make the process easy fast and safe for you in every way possible!</div>
            <div class="col-md-12">
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/simple-1.png" width="95" height="95">
                    <div class="caption">
                        <h3>Fill Basic Details</h3>
                        <hr class="hr-simple">
                        <p>We'll help you simplify your financial issues and take control of your debt. Just fill in your basic information in the form on our website, for starters. And let the process begin!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/simple-2.png" width="95" height="95">
                    <div class="caption">
                        <h3>Submit Documents for Verification</h3>
                        <hr class="hr-simple">
                        <p>Effortlessly seam through our online KYC documentation.  Simply upload the following documents at the comfort of your home and send to our email-id at <a href="mailto:info@loanwalle.com" style="color:#0063a7;"><strong>info@loanwalle.com</strong></a> KYC (PAN, Aadhaar, Voter id etc), 3 Months' Salary Slips, last 3 months' Bank Statement with current balance.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/simple-3.png" width="95" height="95">
                    <div class="caption">
                        <h3>Get Instant Funds</h3>
                        <hr class="hr-simple">
                        <p>Once approved, your requisite amount will be directly transferred to your bank account immediately. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--calculater-back-->
<div class="calculater-back">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <form id="emi" name="emi" method="post" role="form" autocomplete="off">
                    <div class="thumbnail background">
                        <div class="caption">
                            <h4>CALCULATOR</h4>
                            <h3>Personal Loan EMI Calculator</h3>
                            <hr class="hr-calculateor">
                            <div class="row">
                                <div class="col-md-12 amounts-tag">Amount</div>
                                <div class="col-md-6 col-xs-6 text-left">5K</div>
                                <div class="col-md-6 col-xs-6 text-right">1L</div>
                                <div class="col-md-12">
                                    <div class="demo">
                                        <div class="range-slider">
                                            <input type="range" id="loan_amount_emi" name="loan_amount_emi" value="5000" min="5000" max="100000" range="true" onChange="LaonEMICalculate()">
                                            <span class="range-value">5000</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 amounts-tag">Period</div>
                                <div class="col-md-6 col-xs-6 text-left">1 Days</div>
                                <div class="col-md-6 col-xs-6 text-right">90 Days</div>
                                <div class="col-md-12">
                                    <div class="demo">
                                        <div class="range-slider">
                                            <input type="range" id="loan_period_emi" name="loan_period_emi" value="1" min="1" max="90" range="true" onChange="LaonEMICalculate()">
                                            <span class="range-value">1</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 amounts-tag">Interest Rate</div>
                                <div class="col-md-6 col-xs-6 text-left">1.0%</div>
                                <div class="col-md-6 col-xs-6 text-right">1.5%</div>
                                <div class="col-md-12">
                                    <div class="demo">
                                        <div class="range-slider">
                                            <input type="range" id="loan_interest_emi" name="loan_interest_emi" value="1" min="1" max="1.5" step='.10' range="true" onChange="LaonEMICalculate()">
                                            <span class="range-value">1</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 emi-pay">You have to pay <strong><i class="fa fa-inr"></i></strong> <strong id="totalamount"></strong></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-6 height-testimonials">
                <div class="thumbnail">

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Saumya Chakraborty</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Loanwalle is an excellent platform for emergencies. They are fast and customer friendly. I am delighted by the experience I had in dealing with <strong>Anjali Gullaiya</strong>. She's been supportive and dealt with empathy.
                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Harendra Kumar</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>I would like to share my experience….there is one employee <strong>Pooja</strong>, she is really supportive and nice person. I think she is doing her job in well manner. I was stuck badly and this lady has support me and resolved my issue. Once again thank you Pooja..
                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Anand Gopal Dash</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>1st time exp - Process , intimations , online updates all are upto the mark and staffs and cooperative .
                                Miss <strong>ANJALI</strong> is really outstanding towards understanding the need .<br />
                                Proactiveness to follow existing users if incase it new loan should be faster compared with other lenders , need little improvement.

                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Nirav Vagadia</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>I have been associated with Loanwalle for almost 3 years, first ever time they took 48hrs to disbursement that was also for the reason of technical issues, when no one was answering my call and continuously i was waiting for someone to call and update me about my status of loan reapply, Ms. <strong>Ritu</strong> from customer care helped me with each time I called to her and gave me reply politely, gave me status of my loan, also gave me the name who was taking care of my loan application. Thank you.
                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>P@rm!nder S!ngh</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p><strong>Ritu Sharma</strong> customer care executive behaviour is so good she convinced me beautifully and disbursed the amount as per her commited time
                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Sarojkumar Nayak</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Excellent service!!! Specially excutive (<strong>Ritu Sharma</strong>) with thier friendly reception, Ritu from the team has helped me and quick in answering my questions & closed my loan account
                                Thanks loanwalle.com & <strong>Ritu Ji</strong>.

                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Jainam Shah</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Great service fast disbursed and specially thanks to <strong>Ritu</strong> mam for excellent support. .hope for new loan for higher credit and higher Tenure... thank you loanwalle for great support staff.

                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Sunil Wairat</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Good finance company for instant fund for an emergency with very supportive staff. Specially Miss <strong>Anjali</strong> who had very polite and co-operate with the customers.

                            </p>
                        </div>
                    </div>

                    <div class="row testimonials">
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-12"><img src="<?php echo base_url(); ?>assets/website/images/client-1.jpg"></div>
                                <div class="col-md-12 client-name"><strong>Srinivas Chary</strong></div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p>Hi loanwalle is very good loan processing app where we can lend the money in the urgent basis.. Interest is bit more but still can affordable as in the emergency case every thng is fine. And the person named Ms.<strong>Bani Sodhi</strong> who leads the support team took my application personally and guided me in all possible ways and helped me out for the smooth manner. Ms.Bani Sodhi was responsible and took my case well and responded quickly and made the disbursal soon. I really appreciate the way she took care for his customer. Once the repayment is done within the fixed date of line that is on or next day of salary credit we can go and reapply for the new loan this seems really good for the immediate borrowers.. on a whole My heartful thanks to Bani Sodhi who helped on my application and for the team loanwalle

                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!--why-choos-us-->
<div class="why-choos-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tasgs">Why Choose <span>Loanwalle?</span></div>

            <div class="col-md-12">
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 border-a investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/quick-loanwalle.png" width="95" height="95">
                    <div class="caption">
                        <h3>Swift Approval</h3>
                        <hr class="hr-simple">
                        <p>We believe in saving your precious time and do speedy funds compliance using our upgraded software. After screening your documents successfully, we approve your loan within minutes and transfer to your account in no time! </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 border-a investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/paymunt-term.png" width="95" height="95">
                    <div class="caption">
                        <h3>Flexible Payment Terms</h3>
                        <hr class="hr-simple">
                        <p>We accept payments in simple flexible ways, be it Easy Pay or Bank transfer. The aim is to enhance your lifestyle experience without worrying about money crunch! </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 border-b investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/pricing.png" width="95" height="95">
                    <div class="caption">
                        <h3>Transparent Pricing</h3>
                        <hr class="hr-simple">
                        <p>We offer competitive interest rates and APR which are fair and all costs are truthfully revealed to the client. Honesty is our policy in order to ensure fulfilling lives for you and your family by adding quality time to each moment. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 border-c investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/secure.png" width="95" height="95">
                    <div class="caption">
                        <h3>Completely Secure Process</h3>
                        <hr class="hr-simple">
                        <p>We have varied teams at each level assigned to cross check the transfer of funds in the most transparent and safest manner in order to keep any kind of foul practices at bay. Your dream is our dream and we shall keep it secure and protected! </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 border-c investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/minimium.png" width="95" height="95">
                    <div class="caption">
                        <h3>Minimum Documentation</h3>
                        <hr class="hr-simple">
                        <p>Paperless documentation which is 100% online and stress free. No more bank visits and hefty signatures on a bundle of documents for your personal loan. Loanwalle offers quick easy simple digital solution to all your short term monetary woes! </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 border-d investments-img">
                <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/instant.png" width="95" height="95">
                    <div class="caption">
                        <h3>Instant Disbursal</h3>
                        <hr class="hr-simple">
                        <p>Upon verification of your documents we do an instant transfer of your approved amount in no time. Fast delivery and immediate relief from your financial worries is all we care about! Advanced technology will be your constant companion as our client. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--no-money-->
<div class="no-money">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tasgs">No Money? No Problem!</div>
            <div class="col-md-12 tag2">Loanwalle is here to help you in overcoming your unforeseen sudden budget overrun worries!</div>
            <div class="col-md-12">
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    <div class="post-slide">
                        <div class="post-img"> <img src="<?php echo base_url(); ?>assets/website/images/Health.png" alt=""> </div>
                        <h3 class="post-title"> <a href="#">Health</a> </h3>
                        <hr class="hr-simple">
                        <span class="post-date">Any untimely medical bills or emergencies can be met with our aid. You take care of your loved ones without any <br>monetary fear!</span> </div>
                    <div class="post-slide">
                        <div class="post-img"> <img src="<?php echo base_url(); ?>assets/website/images/wedding-icon.png" alt=""> </div>
                        <h3 class="post-title"> <a href="#">Wedding</a> </h3>
                        <hr class="hr-simple">
                        <span class="post-date">Marriage is a once in a lifetime experience. We are determined to make it a memorable one for you by offering our quick <br>instant loan service.</span> </div>
                    <div class="post-slide">
                        <div class="post-img"> <img src="<?php echo base_url(); ?>assets/website/images/credit-card-Interest-Payments.png" alt=""> </div>
                        <h3 class="post-title"> <a href="#">Credit Card Interest Payments</a> </h3>
                        <hr class="hr-simple">
                        <span class="post-date">This one allows you to integrate your multiple high interest debts on your cards into one consolidated loan with fixed term and interest rates. You can thus pay off your monthly payments on <br>time and faster!</span> </div>
                    <div class="post-slide">
                        <div class="post-img"> <img src="<?php echo base_url(); ?>assets/website/images/Debt-Consolidation.png" alt=""> </div>
                        <h3 class="post-title"> <a href="#">Debt Consolidation</a> </h3>
                        <hr class="hr-simple">
                        <span class="post-date">You can refinance your debt by combining various high interest payments/debts into one consolidated personal loan. It can help improve your CIBIL score by showing you can pay off <br>your debt on time!</span> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--mobile app-->
<div class="mobile-app">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6"><img src="<?php echo base_url(); ?>assets/website/images/monile-app.png" width="700" height="700" class="img-responsive" alt="mobile-app"></div>
            <div class="col-md-6 col-sm-6">
                <h3>Download Loanwalle App</h3>
                <hr class="hr-me" style="background:#0d7ec0;margin:0 0 40px 0">
                <p>Check your updated credit score anytime
                    Get direct access to personal loan and credit offers.</p>
                <p> <a href="https://play.google.com/store/apps/details?id=com.loanwalle.personalloan" target="_blank"><img src="<?php echo base_url(); ?>assets/website/images/google-play.png" alt="goole-play" class="goog get-it-on"></a> <a href="https://apps.apple.com/in/app/loanwalle-com/id1614454811" target="_blank"><img src="<?php echo base_url(); ?>assets/website/images/IOS-APP-Store.png" alt="IOS-APP-Store" class="goog get-it-on"></a></p>
            </div>
        </div>
    </div>
</div>

<!--logo-slider-->
<div class="logo-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tasgs">Featured In </div>

            <div class="col-md-12">
                <hr class="hr-line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slider slider_four_in_line">
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/1.png" width="220" height="97" alt="client1"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/2.png" width="220" height="97" alt="client2"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/3.png" width="220" height="97" alt="client3"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/4.png" width="220" height="97" alt="client4"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/5.png" width="220" height="97" alt="client5"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/6.png" width="220" height="97" alt="client6"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/7.png" width="220" height="97" alt="client7"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/8.png" width="220" height="97" alt="client8"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/9.png" width="220" height="97" alt="client9"> </div>
                    <div> <img src="<?php echo base_url(); ?>assets/website/slide/10.png" width="220" height="97" alt="client10"> </div>
                    <div class="next_button"></div>
                    <div class="prev_button"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--blogs-home-->
<div class="blogs-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="color:#0063a7; text-align:center;"><strong>Welcome</strong></div>
            <div class="col-md-12 tasgs">Our Blog</div>
            <!--<div class="col-md-12 tag2">Reference site about Lorem Ipsum, giving information on its origins, as<br>
              well as a random Lipsum generator.</div>-->
            <div class="col-md-12">
                <hr class="hr-line">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <!--<div class="testimonial">
                        <div class="thumbnail"> <img src="https://www.loanwalle.com/<?php echo base_url(); ?>assets/website/images/payday-loan.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Payday Loans- A Quick Insight. Now Learn With Us</h3>
                                <p><i class="fa fa-calendar"></i> 05-04-2022</p>
                                <p>One of the most burning topics in the Fintech and loan providing industry these days is 'payday loan'. As controversial as it is, it is the most extensively used service used by the consumers these days and there seems to be no stopping it.</p>
                                <p><a href="https://www.loanwalle.com/payday-loans-a-quick-insight">Read more...</a></p>
                            </div>
                        </div>
                    </div>-->
                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/Know-About-Personal-Loan.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Know About Personal Loan</h3>
                                <p><i class="fa fa-calendar"></i> 13-04-2022</p>
                                <p>Personal loans are unsecured debts. A personal loan is a type of loan that can be utilized to meet a wide range of financial needs. Personal loans have evolved into a variety of specialty loans in recent years.</p>
                                <p><a href="know-about-personal-loan.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial">
                            <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/payday-loan.jpg" style="width:100%; height:214px;">
                                <div class="caption">
                                    <h3>CASH ADVANCE LOANS: AN OVERVIEW</h3>
                                    <p><i class="fa fa-calendar"></i> 24-03-2022</p>
                                    <p>One of the most burning topics in the FinTech and loan providing industry these days is 'Cash Advance loan.' As controversial as it is, it is the most extensively used service by consumers these days, and there seems to be no stopping it.</p>
                                    <p><a href="cash-advance-loans.html">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-6.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Are you embrassed with you're short term Personal Loan</h3>
                                <p><i class="fa fa-calendar"></i> 01-12-2021</p>
                                <p>Is it true that you are humiliated by your online advance/moment advance? This is what to do  An online credit can be difficult to oversee. On the off chance that you have defaulted commonly, paying the credit sum can be overwhelming.</p>
                                <p><a href="are-you-embrassed-with-your-short-term.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-5.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>The pros and cons of short term loan</h3>
                                <p><i class="fa fa-calendar"></i> 25-11-2021</p>
                                <p>A transient individual advance is a credit taken for individual multipurpose requirements for a Short term personal loan . It's extraordinary for individuals stuck in a monetary crisis and have no other option or have depleted different wellsprings of monetary assistance.</p>
                                <p><a href="the-pros-and-cons-of-short-term-loan.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-4.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Maintain a Strategic Distance From the Best 8 Momentary Individual's Advance Mix - up</h3>
                                <p><i class="fa fa-calendar"></i> 12-11-2021</p>
                                <p> A transient individual advance is an advance that has a short residency. One may take a momentary advance for different reasons. They can be a crisis, individual necessities, business purposes, and so on An online transient credit application</p>
                                <p><a href="transient-individual-advance-is-advance.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-3.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Tips for your transient individual advance</h3>
                                <p><i class="fa fa-calendar"></i> 29-10-2021</p>
                                <p>Momentary individual advance is an advance that one takes because of multipurpose necessities for a short term loan . It is the advance one chooses in the accompanying circumstances:  Health related crisis  Critical home remodels </p>
                                <p><a href="tips-for-your-transient-individual.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-2.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Simple in Short Term Personal Loan</h3>
                                <p><i class="fa fa-calendar"></i> 20-10-2021</p>
                                <p>A transient individual advance is an individual advance with a concise reimbursement residency. The residency can go from a quarter of a year and may stretch out to a year, in spite of the fact that the normal span is five months. In any case, </p>
                                <p><a href="simple-in-short-term-personal-loan.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial">
                        <div class="thumbnail"> <img src="<?php echo base_url(); ?>assets/website/images/blog-1.jpg" style="width:100%; height:214px;">
                            <div class="caption">
                                <h3>Back to Basics in Short Term Personal Loan</h3>
                                <p><i class="fa fa-calendar"></i> 12-10-2021</p>
                                <p>A short term personal loan is a personal loan with a brief repayment tenure. The tenure can range from three months and may extend to 12 months, although the average duration is five months. But why would someone </p>
                                <p><a href="back-to-basics-in-short-term-personal-loan.html">Read more...</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>







<?php 
include 'include/footer.php';
?>