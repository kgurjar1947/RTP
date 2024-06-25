<footer>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 pe-5 mt-4">
                <!-- <p><img src="img/logo.png" width="150" height="36" alt=""></p> -->
                <h2 style="color:#FFF;">RTP PROPERTIES NC INC: Elevating Real Estate Excellence</h2>
                <p>Count on us for outstanding property management and personalized real estate services. Expect tailored solutions surpassing expectations, whether you're a homeowner or a tenant seeking the perfect fit.</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="#0"><i class="ti-facebook"></i></a></li>
                        <li><a href="#0"><i class="ti-instagram"></i></a></li>
                            <li><a href="#0"><i class="fa-icon-linkedin-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Useful links</h5>
                <ul class="links">
                    <li><a href="<?php echo PATH;?>">Home</a></li>
                    <li><a href="<?php echo PATH;?>about-us">About Us</a></li>
                    <li><a href="<?php echo PATH;?>listing">Rental Listing</a></li>
                    <li><a href="<?php echo PATH;?>faq">FAQ</a></li>
                    <li><a href="<?php echo PATH;?>contacts-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="https://maps.app.goo.gl/6wnaCjNCsEu4ALPi9"><i class="ti-map"></i>5535 Western Blvd , Raleigh NC 27606 </a></li>
                    <li><a href=""><i class="ti-map"></i> PO Box 21, Morrisville NC 27560</a></li>
                    <li><a href="tel:+1-877RTPRTP9"><i class="ti-mobile"></i>+1-877-RTP-RTP9 <br/><span style="margin-left: 23px;">(+1-877-787-7879)</span></a></li>
                    <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@rtppropertiesnc.com</a></li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-lg-12 text-center">
                    <a href="" style="margin-right: 15px;"><img src="<?php echo PATH;?>img/500.png" class="img-fluid" alt=""/></a>
                        <a href="" style="margin-right: 15px;"><img src="<?php echo PATH;?>img/raleigh.png" class="img-fluid" alt=""/></a>
                            <!--<a href="" style="margin-right: 15px;"><img src="<?php echo PATH;?>img/cdn.png" class="img-fluid" alt=""/></a>-->
                                <!--<a href="" style="margin-right: 15px;"><img src="<?php echo PATH;?>img/cdn-1.png" class="img-fluid" alt=""/></a>-->
                                    <!--<a href="" style="margin-right: 15px;"><img src="<?php echo PATH;?>img/cdn-2.png" class="img-fluid" alt=""/></a>-->
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright 2024 - All right reserved RTP PROPERTIES NC INC</p>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
</div>
<!-- page -->


<!-- <div id="toTop"></div> -->
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="<?php echo PATH;?>js/common_scripts.js"></script>
<script src="<?php echo PATH;?>js/main.js"></script>
<script src="<?php echo PATH;?>phpmailer/validate.js"></script>

<!--<script src="https://showmojo.com/iframe_v2.js"></script>-->
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="<?php echo PATH;?>revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo PATH;?>revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script>
// vars
'use strict'
var	testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
testimLeftArrow = document.getElementById("left-arrow"),
testimRightArrow = document.getElementById("right-arrow"),
testimSpeed = 4500,
currentSlide = 0,
currentActive = 0,
testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;
;

window.onload = function() {

// Testim Script
function playSlide(slide) {
    for (var k = 0; k < testimDots.length; k++) {
        testimContent[k].classList.remove("active");
        testimContent[k].classList.remove("inactive");
        testimDots[k].classList.remove("active");
    }

    if (slide < 0) {
        slide = currentSlide = testimContent.length-1;
    }

    if (slide > testimContent.length - 1) {
        slide = currentSlide = 0;
    }

    if (currentActive != currentSlide) {
        testimContent[currentActive].classList.add("inactive");            
    }
    testimContent[slide].classList.add("active");
    testimDots[slide].classList.add("active");

    currentActive = currentSlide;

    clearTimeout(testimTimer);
    testimTimer = setTimeout(function() {
        playSlide(currentSlide += 1);
    }, testimSpeed)
}

testimLeftArrow.addEventListener("click", function() {
    playSlide(currentSlide -= 1);
})

testimRightArrow.addEventListener("click", function() {
    playSlide(currentSlide += 1);
})    

for (var l = 0; l < testimDots.length; l++) {
    testimDots[l].addEventListener("click", function() {
        playSlide(currentSlide = testimDots.indexOf(this));
    })
}

playSlide(currentSlide);

// keyboard shortcuts
document.addEventListener("keyup", function(e) {
    switch (e.keyCode) {
        case 37:
            testimLeftArrow.click();
            break;
            
        case 39:
            testimRightArrow.click();
            break;

        case 39:
            testimRightArrow.click();
            break;

        default:
            break;
    }
})
    
    testim.addEventListener("touchstart", function(e) {
            touchStartPos = e.changedTouches[0].clientX;
    })

    testim.addEventListener("touchend", function(e) {
            touchEndPos = e.changedTouches[0].clientX;
        
            touchPosDiff = touchStartPos - touchEndPos;
        
            console.log(touchPosDiff);
            console.log(touchStartPos);	
            console.log(touchEndPos);	

        
            if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
            } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
            } else {
                return;
            }
        
    })
}
</script>
<script>
        var tpj=jQuery;
        
        var revapi44;
        tpj(document).ready(function() {
             if (tpj("#rev_slider_44").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_44");
    } else {
        revapi44 = tpj("#rev_slider_44").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution-slider/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 4500,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    touchOnDesktop: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'erinyen',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 767,
                    hide_over: 9999,
                    hide_delay: 0,
                    hide_delay_mobile: 0,

                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    },

                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 60,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    style: 'zeus',
                    direction: 'horizontal',
                    rtl: false,

                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 30,
                    space: 7,

                    hide_onleave: false,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_over: 767,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
                },
            },
            responsiveLevels: [1240, 1025, 778, 480],
            visibilityLevels: [1920, 1500, 1025, 768],
            gridwidth: [1200, 991, 778, 480],
            gridheight: [1025, 1366, 1025, 868],
            lazyType: "none",
            shadow: 0,
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "on",
            fullScreenAutoWidth: "on",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "on",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLimit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
            }
        });
</script>

<!-- COLOR SWITCHER  -->
<script src="<?php echo PATH;?>js/switcher.js"></script>




<script>
$("#phone_number").keypress(function(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#phone_tel").html("Digits Only").show().fadeOut("slow");
        return false;
    }
});  
    $("#phone_contact").keypress(function(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#phone_tel").html("Digits Only").show().fadeOut("slow");
        return false;
    }
});  
function sendrequest() {
$('#submitting').val("Loading....");  
$('#submitting').attr('disabled','disabled');

setTimeout(function(){
    var error    = "";
    window.errorFlag    = "";
    var full_name = ($('#full_name').val());
    var phone_number = ($('#phone_number').val());
    var email = ($('#email').val());
    var city = ($('#city').val());
    var subject = ($('#subject').val());
    var message = ($('#message').val());
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var filter1= /^[0-9]*$/ ;    
        
        if(full_name === ""){
            var error = 1;
            $('#full_name1').html('This field is required');
        } else if(full_name !='') {
            if(error != 1){
                var error ='';
            }
            $('#full_name1').html(' ');           	
        }

        if(city === ""){
            var error = 1;
            $('#city1').html('This field is required');
        } else if(city !='') {
            if(error != 1){
                var error ='';
            }
            $('#city1').html(' ');           	
        }

        
        if(subject === ""){
            var error = 1;
            $('#subject1').html('This field is required');
        } else if(subject !='') {
            if(error != 1){
                var error ='';
            }
            $('#subject1').html(' ');           	
        }

        if(message === ""){
            var error = 1;
            $('#message1').html('This field is required');
        } else if(subject !='') {
            if(error != 1){
                var error ='';
            }
            $('#message1').html(' ');           	
        }

        if(phone_number === ""){
            $('#phone_number1').html('This field is required');
            var error = 1;
        } else if(phone_number !='') {
            if(phone_number.length != 10){
                $("#phone_number1").html("Please enter 10 digits number").show();
                var error = 1;
            } else if(phone_number.length == 10){
                if(error != 1){
                    var error ='';
                }
                $('#phone_number1').html(' ');
            }
        }
        
        
        if(email === "") {
            $('#email1').html('Email Address is required');
            var error = 1;
        } else if(email !=''){
            if(error != 1){
                var error ='';
            }
            $('#email1').html(' ');
        }
        if(email!=''){
            if(!filter.test(email)){
                $('#email1').html('Invalid email.');
                var error = 1;
            }else if(filter.test(email)){
                if(error != 1){
                    var error ='';
                }
                $('#email1').html(' ');
            }
        }
        setTimeout(function(){ window.location.reload(); }, 4000);

        if(error === '' && window.errorFlag === '') {
            $('#submitting').attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: "<?php echo PATH;?>send_data_contact",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: new FormData($('form')[0]),
            }).done(function(response) {
                var val=JSON.parse(response);
                if(val.response.status == true){  
                    $('#submitting').attr('disabled','disabled');
                    $('#error').show();
                    $('#full_name').val("");$('#email').val("");
                    $('#error').html('<span class="grn" >Thank You For Contacting Us! A representative will get back to you within 24 hours.</span>');
                    setTimeout(function(){ window.location.reload(); }, 4000);
                } 
            });
        } else {
            $('#submitting').removeAttr('disabled');
            $('#submitting').val('Submit');
        }
    }, 1000);
}
</script>

<script>
$("#phone_number").keypress(function(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#phone_tel").html("Digits Only").show().fadeOut("slow");
        return false;
    }
});     
function sendrequest2() {
$('#submitting2').val("Loading....");  
$('#submitting2').attr('disabled','disabled');

setTimeout(function(){
    var error    = "";
    window.errorFlag    = "";
    var address = ($('#address').val());
    var bed_rooms = ($('#bed_rooms').val());
    var baths = ($('#baths').val());
    var free_email = ($('#free_email').val());
    var free_name = ($('#free_name').val());
    var free_phone = ($('#free_phone').val());
    var im_interested_in = ($('#im_interested_in').val());
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var filter1= /^[0-9]*$/ ;    
        
        if(address === ""){
            var error = 1;
            $('#address1').html('This field is required');
        } else if(address !='') {
            if(error != 1){
                var error ='';
            }
            $('#address1').html(' ');           	
        }

        if(free_name === ""){
            var error = 1;
            $('#free_name1').html('This field is required');
        } else if(free_name !='') {
            if(error != 1){
                var error ='';
            }
            $('#free_name1').html(' ');           	
        }

        if(free_phone === ""){
            $('#free_phone1').html('This field is required');
            var error = 1;
        } else if(free_phone !='') {
            if(free_phone.length != 10){
                $("#free_phone1").html("Please enter 10 digits number").show();
                var error = 1;
            } else if(free_phone.length == 10){
                if(error != 1){
                    var error ='';
                }
                $('#free_phone1').html(' ');
            }
        }
        
        
        if(free_email === "") {
            $('#free_email1').html('Email Address is required');
            var error = 1;
        } else if(free_email !=''){
            if(error != 1){
                var error ='';
            }
            $('#free_email1').html(' ');
        }
        if(free_email!=''){
            if(!filter.test(free_email)){
                $('#free_email1').html('Invalid email.');
                var error = 1;
            }else if(filter.test(free_email)){
                if(error != 1){
                    var error ='';
                }
                $('#free_email1').html(' ');
            }
        }
        if(error === '' && window.errorFlag === '') {
            $('#submitting2').attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: "<?php echo PATH;?>free_rent_analysis_mail",
                data: { name: free_name, free_email: free_email, free_phone: free_phone,baths: baths,bed_rooms: bed_rooms,im_interested_in: im_interested_in,address: address},
            }).done(function(response) {
                var val=JSON.parse(response);
                if(val.response.status == true){  
                    $('#submitting2').attr('disabled','disabled');
                    $('#error2').show();
                    $('#error2').html('<span class="grn" >Thank You For Contacting Us! A representative will get back to you within 24 hours.</span>');
                    setTimeout(function(){ window.location.reload(); }, 4000);
                } 
            });
        } else {
            $('#submitting2').removeAttr('disabled');
            $('#submitting2').val('Submit');
        }
    }, 1000);
}
</script>

<script>
$("#phone").keypress(function(e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#phone_te").html("Digits Only").show().fadeOut("slow");
        return false;
    }
});     
function sendrequest1() {
$('#submitting1').val("Loading....");  
$('#submitting1').attr('disabled','disabled');

setTimeout(function(){
    var error    = "";
    window.errorFlag    = "";
    var f_name = ($('#f_name').val());
    var l_name = ($('#l_name').val());
    var phone = ($('#phone').val());
    var gmail = ($('#gmail').val());
    var description = ($('#description').val());
    var name = f_name + l_name;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var filter1= /^[0-9]*$/ ;    
        
        if(f_name === ""){
            var error = 1;
            $('#f_name1').html('This field is required');
        } else if(f_name !='') {
            if(error != 1){
                var error ='';
            }
            $('#f_name1').html(' ');           	
        }

        if(l_name === ""){
            var error = 1;
            $('#l_name1').html('This field is required');
        } else if(l_name !='') {
            if(error != 1){
                var error ='';
            }
            $('#l_name1').html(' ');           	
        }
       
        if(description === ""){
            var error = 1;
            $('#description1').html('This field is required');
        } else if(description !='') {
            if(error != 1){
                var error ='';
            }
            $('#description1').html(' ');           	
        }

        if(phone === ""){
            $('#phone1').html('This field is required');
            var error = 1;
        } else if(phone !='') {
            if(phone.length != 10){
                $("#phone1").html("Please enter 10 digits number").show();
                var error = 1;
            } else if(phone.length == 10){
                if(error != 1){
                    var error ='';
                }
                $('#phone1').html(' ');
            }
        }
        
        
        if(gmail === "") {
            $('#gmail1').html('Email Address is required');
            var error = 1;
        } else if(gmail !=''){
            if(error != 1){
                var error ='';
            }
            $('#gmail1').html(' ');
        }
        if(gmail!=''){
            if(!filter.test(gmail)){
                $('#gmail1').html('Invalid email.');
                var error = 1;
            }else if(filter.test(gmail)){
                if(error != 1){
                    var error ='';
                }
                $('#gmail1').html(' ');
            }
        }
        if(error === '') {
            $('#submitting1').attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: "<?php echo PATH;?>send_mail",
               data: { name: name, gmail: gmail, phone: phone,description: description},
            }).done(function(response) {
                var val=JSON.parse(response);
                if(val.response.status == true){  
                    $('#submitting1').attr('disabled','disabled');
                    $('#error').show();
                    $('#name').val("");$('#gmail').val("");
                    $('#error').html('<span class="grn" >Thank You For Contacting Us! A representative will get back to you within 24 hours.</span>');
                    setTimeout(function(){ window.location.reload(); }, 4000);
                } 
            });
        } else {
            $('#submitting1').removeAttr('disabled');
            $('#submitting1').val('Submit');
        }
    }, 1000);
}
</script>

