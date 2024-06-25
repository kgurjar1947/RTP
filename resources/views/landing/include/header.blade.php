<header class="header menu_fixed">
    <div class="container">
         <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
  <div id="logo">
      <a href="{{ url('/')}}">
          <img src="{{ asset('landing/img/logo.png')}}" width="15%" height="auto" alt="" class="logo_normal">
          <img src="{{ asset('landing/img/logo.png')}}" width="15%" height="auto" alt="" class="logo_sticky">
      </a>
  </div>
  <!-- /top_menu -->
  <a href="#menu" class="btn_mobile">
      <div class="hamburger hamburger--spin" id="hamburger">
          <div class="hamburger-box">
              <div class="hamburger-inner"></div>
          </div>
      </div>
  </a>
  <nav id="menu" class="main-menu">
      <ul class="">
          <li class="<?php if($currentPage ==''){echo 'head-hover';}else{echo 'head-hovers';}?>"><span class="span-hero"><a href="{{ asset('landing/" style="color:#<?php if($currentPage ==''){echo 'FFF';}else{echo '000';}?> !important;"><img src="{{ asset('landing/img/<?php if($currentPage ==''){echo 'home_hover.png';}else{echo 'home.png';}?>"/> <br/>Home</a></span></li>	
          <li class="<?php if($currentPage =='about-us'){echo 'head-hover';}else{echo 'head-hovers';}?>"><span class="span-hero"><a href="{{ asset('landing/about-us" style="color:#<?php if($currentPage =='about-us'){echo 'FFF';}else{echo '000';}?> !important;"><img src="{{ asset('landing/img/<?php if($currentPage =='about-us'){echo 'about_hover.png';}else{echo 'about.png';}?>"/> <br/>About</a></span></li>
          <li class="<?php if($currentPage =='listing'){echo 'head-hover';}else{echo 'head-hovers';}?>" style="width:125px;"><span class="span-hero"><a href="{{ asset('landing/listing" style="color:#<?php if($currentPage =='listing'){echo 'FFF';}else{echo '000';}?> !important;"><img src="{{ asset('landing/img/<?php if($currentPage =='listing'){echo 'listing_hover.png';}else{echo 'listing.png';}?>"/> <br/>Rental Listings</a></span></li>
          <li class="<?php if($currentPage =='faq'){echo 'head-hover';}else{echo 'head-hovers';}?>"><span class="span-hero"><a href="{{ asset('landing/faq" style="color:#<?php if($currentPage =='faq'){echo 'FFF';}else{echo '000';}?> !important;"><img src="{{ asset('landing/img/<?php if($currentPage =='faq'){echo 'faq_hover.png';}else{echo 'faq.png';}?>"/> <br/>FAQ</a></span></li>
          <li class="<?php if($currentPage =='contacts-us'){echo 'head-hover';}else{echo 'head-hovers';}?>"><span class="span-hero"><a href="{{ asset('landing/contacts-us" style="color:#<?php if($currentPage =='contacts-us'){echo 'FFF';}else{echo '000';}?> !important;"><img src="{{ asset('landing/img/<?php if($currentPage =='contacts-us'){echo 'contact_us_hover.png';}else{echo 'contact_us.png';}?>"/> <br/>Contact</a></span></li>
      </ul>
  
  </nav>
    </div>
</header>
<!-- /header -->