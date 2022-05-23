@extends('Layouts.front_end.frontendlayout')
@section('title','Contact OR Enquiry')
@section('Content_Area')
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>@if(Request::is('contact-us'))Contact Us @elseif(Request::is('enquiry-us')) Enquiry Now @endif</h1>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>@if(Request::is('contact-us'))contact us @elseif(Request::is('enquiry-us')) enquiry @endif</li>
                  
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- contact start -->
    <div class="pa-contact spacer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="pa-contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7229.52989297451!2d74.03878567435599!3d25.042049785874042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39686591931d905d%3A0x9c2d1ded899e1a1b!2sJamsedpur%2C%20Rajasthan%20313329!5e0!3m2!1sen!2sin!4v1653229696692!5m2!1sen!2sin" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="pa-contact-form">
                        <form id='contactForm' action=''>
                            @csrf
                            <input type="text" placeholder="Enter your name" name="full_name" id="full_name" class="require"/>
                            <input type="text"  placeholder="Enter your email" name="email" id="email" class="require" data-valid="email" data-error="Email should be valid."/>
                            <input type="text"  placeholder="Enter your mobile no" name="mobile" id="mobile" class="require" data-valid="mobile" data-error="Mobile should be valid."/>
                            <input type="text"  placeholder="Enter your subject" name="subject" id="subject" class="require"/>
                            <textarea placeholder="Message here" name="message" id="message" class="require"></textarea>
                            <button type="button"   class="pa-btn submitForm" >submit</button>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
    <!-- contact detail start -->
    <div class="pa-contact-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pa-contact-box">
                        <h4>Address</h4>
                        <p>Jamsedpur Tata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-contact-box">
                        <h4>Contant no.</h4>
                        <p>+91 xxxxx-xxxx</p>
                        <p>+91 xxxxx-xxxxx</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-contact-box">
                        <h4>Email</h4>
                        <p>xxx@xx.x</p>
                        <p>xxx@xx.x</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact detail end -->

@endsection

@section('Script_Area')
<script>
 $('#submitForm').click(function(){
     alert();
 });
 function m()
 {
     alert();
 }
</script>
@endsection