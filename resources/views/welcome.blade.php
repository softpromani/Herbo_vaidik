<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herbo Vaidik - Responsive HTML Template</title>
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/assets/css/style.cs')}}s">
    <link rel="shortcut icon" href="{{asset('FrontEnd/assets/images/fav.png')}}" type="image/x-icon">
</head>
<body>
<!-- pre loader start -->
<div class="pa-preloader">
    <div class="pa-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- pre loader end -->
<!-- main wrapper start -->
<div class="pa-main-wrapper">
    <!-- top header start -->
    <div class="pa-top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="pa-header-address">
                        <p><span>Address:</span> Jamshedpur</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pa-header-call">
                        <p>Emergency Call :<span> +91 xxxxx-xxxxx</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top header end -->
    <!-- main header start -->
    <div class="pa-main-header fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="pa-logo">
                        {{-- <a href="#"><img src="{{asset('FrontEnd/assets/images/Herbologo.svg')}}" alt="image" class="img-fluid"/></a> --}}
                   <a><h3 class="text-light" style="font-family: ui-monospace; font-weight:bold"><img src="{{asset('FrontEnd/assets/images/Herbalwhite.svg')}}" alt="image" class="img-fluid"/> &nbsp;&nbsp;Herbo Vaidik</h3></a>
                    </div>
                </div>
                <div class="col-md-9 col-6">
                    <div class="pa-nav-bar">
                        <div class="pa-menu">
                            <ul>
                                <li class="pa-menu-child"><a href="javascript:;">Home</a>
                                    {{-- <ul class="pa-submenu">
                                        <li>
                                            <a href="index.html">Home1</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">Home2</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">Home3</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li><a href="about.html">About</a></li>
                                {{-- <li><a href="shop.html">Shop</a></li>
                                <li><a href="service.html">Services</a></li> --}}
                                <li><a href="#">Blog</a></li>
                                {{-- <li class="pa-menu-child"><a href="Javascript:;">pages</a>
                                    <ul class="pa-submenu">
                                        <li>
                                            <a href="product-single.html">product single</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">blog single</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">cart</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">checkout</a>
                                        </li>
                                        <li>
                                            <a href="profile.html">profile</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                        </div>
                        <div class="pa-head-icon">
                            {{-- <ul>
                                <li>
                                    <a href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <g>
                                        <path d="M507.519,116.384C503.721,111.712,498.021,109,492,109H129.736l-1.484-13.632l-0.053-0.438C121.099,40.812,74.583,0,20,0
                                            C8.954,0,0,8.954,0,20s8.954,20,20,20c34.506,0,63.923,25.749,68.512,59.928l23.773,218.401C91.495,327.765,77,348.722,77,373
                                            c0,0.167,0.002,0.334,0.006,0.5C77.002,373.666,77,373.833,77,374c0,33.084,26.916,60,60,60h8.138
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59s59-26.468,59-59c0-6.645-1.104-13.036-3.138-19h86.277
                                            c-2.034,5.964-3.138,12.355-3.138,19c0,32.532,26.467,59,59,59c32.533,0,59-26.468,59-59c0-32.532-26.467-59-59-59H137
                                            c-11.028,0-20-8.972-20-20c0-0.167-0.002-0.334-0.006-0.5c0.004-0.166,0.006-0.333,0.006-0.5c0-11.028,8.972-20,20-20h255.331
                                            c35.503,0,68.084-21.966,83.006-55.962c4.439-10.114-0.161-21.912-10.275-26.352c-10.114-4.439-21.912,0.161-26.352,10.275
                                            C430.299,300.125,411.661,313,392.331,313h-240.39L134.09,149h333.308l-9.786,46.916c-2.255,10.813,4.682,21.407,15.495,23.662
                                            c1.377,0.288,2.75,0.426,4.104,0.426c9.272,0,17.59-6.484,19.558-15.92l14.809-71C512.808,127.19,511.317,121.056,507.519,116.384
                                            z M399,434c10.477,0,19,8.523,19,19s-8.523,19-19,19s-19-8.523-19-19S388.523,434,399,434z M201,434c10.477,0,19,8.524,19,19
                                            c0,10.477-8.523,19-19,19s-19-8.523-19-19S190.523,434,201,434z"></path>
                                    </g>
                                    </svg>
                                    <span>1</span></a>
                                </li>
                                <li class="pa-user-login" data-toggle="modal" data-target="#loginModel">
                                    <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path></svg>
                                </li>
                            </ul> --}}
                            <div class="pa-toggle-nav">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header end -->
    <!-- banner start -->
    <div class="pa-banner" style="background-image:url('FrontEnd/assets/images/4723345.webp')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="pa-banner-text">
                        <h4 class="pa-banner-category" style="  color: white;text-shadow: 2px 2px 4px #000000;">Herbo Vaidik</h4>
                        <h2 style="  color: white;text-shadow: 2px 2px 4px #000000;">New Age Health Solutions Formulated With Ayurvedic Expertise</h2>
                        <p style=" font-size:20px; color: #2C5E1A;text-shadow: 2px 2px 3px #ffff;">Ayurvedic medicine (“Ayurveda” for short) is one of the world's oldest holistic (“whole-body”) healing systems. It was developed more than 3,000 years ago in India.</p>
                        <a href="javascript:;"  style="color:#fff;background-color:#2C5E1A;" class="btn pa-view-all">view all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- top medicine start -->
    <div class="pa-medicine spacer-top spacer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pa-medicine-box">
                        <img src="{{asset('FrontEnd/assets/images/290x230.webp')}}" alt="image" class="img-fluid" style="height:230px;width:290px;"/>
                        <h2><a href="#">Herbal medicine</a></h2>
                        <a href="#">Herbo Vaidik</a>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris aliquip </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-medicine-box">
                        <img src="{{asset('FrontEnd/assets/images/290x230.webp')}}" alt="image" class="img-fluid" style="height:230px;width:290px;"/>

                        <h2><a href="#">Fresh Product</a></h2>
                        <a href="#">Herbal Medicine</a>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris aliquip </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-medicine-box">
                        <img src="{{asset('FrontEnd/assets/images/290x230.webp')}}" alt="image" class="img-fluid" style="height:230px;width:290px;"/>
                        <h2><a href="#">Total Care</a></h2>
                        <a href="#">Pure Herbal</a>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris aliquip </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- top medicine end -->
    <!-- why start -->
    <div class="pa-why spacer-top spacer-bottom">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>why Herbo Vaidik</h1>
                <h5>best for you</h5>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 pr-0">
                    <div class="pa-why-ul pa-why-left">
                        <ul>
                            <li>100 % Organic</li>
                            <li>Best Quality</li>
                            <li>hygienic product</li>
                            <li>Quality tested</li>
                            <li>Health Care</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="pa-why-img">
                        <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 pl-0">
                    <div class="pa-why-ul pa-why-right">
                        <ul>
                            <li>100 % Organic</li>
                            <li>Best Quality</li>
                            <li>hygienic product</li>
                            <li>Quality tested</li>
                            <li>Health Care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why end -->
    <!-- product start -->
    <div class="pa-product spacer-top">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>top products</h1>
                <h5>medicine</h5>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Black Organic Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Loose Leaf Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Oolong Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Black Organic Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Green Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pa-product-box">
                        <div class="pa-product-img">
                            <img src="{{asset('FrontEnd/assets/images/200x185.jpg')}}" alt="image" style="height:185px;width:200px;" class="img-fluid"/>
                        </div>
                        <div class="pa-product-content">
                            <h4><a href="product-single.html">Sencha Tea</a></h4>
                            <p class="pa-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </p>
                            <p><del>$ 130</del>$ 120</p>
                        </div>
                        <div class="pa-product-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                            <g>
                                                <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                    C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                    c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                    v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                    c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                    C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                <circle cx="128" cy="426.667" r="42.667"/>
                                                <circle cx="384" cy="426.667" r="42.667"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g>
                                                <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                    C512,93.417,453.532,30,376,30z"/>
                                            </g>
                                        </svg>                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                            <g>
                                                <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                    S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                    c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                            </g>
                                            <g>
                                                <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                    c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                    C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                    s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product end -->
    <!-- counter start -->
    <div class="pa-counter spacer-top spacer-bottom">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>Benefit from choosing the best</h1>
                <h5>Our recent achievements</h5>
            </div>
            <div class="pa-counter-main" id="counter">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pa-counter-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 467.528 467.528">
                                <g>
                                    <path d="M431.095,409.6l-71.6-124c28-30.4,44.8-70.8,44.8-115.2c0-47.2-19.2-89.6-50-120.4s-73.2-50-120.4-50s-89.6,19.2-120.4,50
                                        c-30.8,30.8-50,73.2-50,120.4c0,44.4,16.8,84.8,44.8,115.2l-71.6,124c-1.2,2-1.6,4.8-0.8,7.6c1.6,4.4,6.4,6.4,10.8,4.8l57.2-22.8
                                        l8.8,61.2c0.4,2.4,1.6,4.8,4,6c4,2.4,9.2,0.8,11.6-3.2l72.4-125.2c10.4,2,21.6,3.2,32.4,3.2c11.2,0,22-1.2,32.4-3.2l72.4,125.2
                                        c2.4,4,7.6,5.2,11.6,3.2c2.4-1.2,3.6-3.6,4-6l8.8-61.2l57.2,22.8c4.4,1.6,9.2-0.4,10.8-4.8
                                        C432.695,414.4,432.295,411.6,431.095,409.6z M126.695,433.6l-7.2-47.6c-0.8-4.4-4.8-7.6-9.6-7.2c-0.8,0-1.6,0.4-2.4,0.8
                                        l-44.4,17.6l57.6-99.6c18,16,39.6,28.4,63.6,35.6L126.695,433.6z M233.895,324c-42.4,0-80.8-17.2-108.4-44.8
                                        c-27.6-27.6-44.8-66-44.8-108.4c0-42.4,17.2-80.8,44.8-108.4c27.6-28.4,66-45.6,108.4-45.6c42.4,0,80.8,17.2,108.4,44.8
                                        c27.6,27.6,44.8,66,44.8,108.4c0,42.4-17.2,80.8-44.8,108.4C314.695,306.8,276.295,324,233.895,324z M360.295,379.6
                                        c-0.8-0.4-1.6-0.8-2.4-0.8c-4.4-0.8-8.8,2.4-9.6,7.2l-7.2,47.6l-57.6-100.4c24-7.2,45.6-19.6,63.6-35.6l57.6,99.6L360.295,379.6z"
                                        />
                                </g>
                                <g>
                                    <path d="M312.295,140.8c-2-2.8-4.4-4.8-7.2-6s-6-2-9.2-1.6h-33.2l-10.4-32.8c-1.6-4.8-5.2-8.8-9.2-11.2c-2.8-1.2-5.6-2-8.8-2
                                        s-6,0.8-8.8,2c-4.4,2.4-7.6,6-9.2,11.2l-10.4,32.8h-33.2c-3.2-0.4-6.4,0.4-9.2,1.6s-5.2,3.2-7.2,6c-3.2,4.4-4,9.2-3.2,14
                                        c0.8,4.8,3.2,9.2,7.6,12.4l28,20l-10.8,32.8c0,0.4,0,0.8-0.4,0.8c-0.8,2.4-0.8,5.2-0.4,8c0.4,2.8,1.6,5.6,3.6,8
                                        c3.2,4.4,7.6,6.8,12.4,7.6s10-0.4,14-3.6l28-20.4l28,20.4c4.4,3.2,9.2,4,14,3.6c4.8-0.8,9.2-3.2,12.4-7.6c2-2.4,2.8-5.2,3.6-8
                                        c0.4-2.8,0.4-5.2-0.4-8c0-0.4,0-0.8-0.4-0.8l-10.8-32.8l28-20c4.4-3.2,6.8-7.6,7.6-12.4
                                        C316.695,150.4,315.495,145.2,312.295,140.8z M298.295,153.6l-0.4,0.4l-32.4,23.6c-2.8,2-4.4,6-3.2,9.2l12.4,38v0.4
                                        c0,0.4,0,0.8,0,1.2c0,0.4,0,0.8-0.4,0.8c-0.4,0.4-0.8,0.8-1.6,0.8c-0.4,0-1.2,0-1.6-0.4l-32.8-24c-1.6-1.2-3.2-1.6-5.2-1.6
                                        c-1.6,0-3.6,0.4-5.2,1.6l-32.8,24c-0.4,0.4-1.2,0.4-1.6,0.4c-0.4,0-1.2-0.4-1.6-0.8c-0.4-0.4-0.4-0.8-0.4-0.8c0-0.4,0-0.8,0-1.2
                                        v-0.4l12.4-38c1.2-3.6,0-7.2-3.2-9.2l-30.8-23.6l-0.4-0.4c-0.4-0.4-0.8-0.8-0.8-1.2c0-0.4,0-1.2,0.4-1.6c0,0,0-0.4,0.4-0.4
                                        c0.4-0.4,0.4-0.4,0.8-0.4c0.4,0,0.8-0.4,1.2-0.4c0.4,0,0.8,0,1.2,0h39.2c3.6,0,6.8-2.4,8-6l12.4-38.4c0-0.4,0.4-1.2,1.2-1.2
                                        c0.4,0,0.8-0.4,0.8-0.4c0.4,0,0.8,0,0.8,0.4c0.4,0.4,0.8,0.8,1.2,1.2l12.4,38.4c1.2,3.2,4.4,6,8,6h39.2c0.4,0,0.8,0,1.2,0
                                        c0.4,0,0.8,0,1.2,0.4c0.4,0,0.4,0.4,0.8,0.4c0,0,0,0.4,0.4,0.4c0.4,0.4,0.4,0.8,0.4,1.6
                                        C299.095,152.8,298.695,153.2,298.295,153.6z"/>
                                </g>
                                <g>
                                    <path d="M327.895,76.4c-24-24-57.2-38.8-94-38.8s-70,14.8-94,38.8s-38.8,57.2-38.8,94s14.8,70,38.8,94s57.2,38.8,94,38.8
                                        s70-14.8,94-38.8s38.8-57.2,38.8-94C366.695,133.6,351.895,100.4,327.895,76.4z M316.295,252.4c-21.2,21.2-50.4,34-82.4,34
                                        s-61.2-13.2-82-34c-21.2-21.2-34-50-34-82s13.2-61.2,34-82c20.8-21.2,50-34.4,82-34.4s61.2,13.2,82,34c21.2,21.2,34,50,34,82
                                        S337.095,231.6,316.295,252.4z"/>
                                </g>
                            </svg>                            
                            <h1 class="counter-value" data-count="25">0</h1>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pa-counter-box">
                            <svg viewBox="-69 0 511 511.9968" xmlns="http://www.w3.org/2000/svg"><path d="m144.988281 155.433594c2.46875-3.480469 3.890625-3.902344 3.878907-3.921875.078124.019531 1.5.4375 3.96875 3.921875 2.394531 3.378906 7.074218 4.179687 10.457031 1.78125 3.378906-2.394532 4.175781-7.074219 1.78125-10.453125-4.820313-6.800781-10.257813-10.25-16.160157-10.25-5.90625 0-11.34375 3.449219-16.164062 10.25-2.394531 3.378906-1.59375 8.0625 1.785156 10.457031 1.316406.933594 2.832032 1.378906 4.328125 1.378906 2.351563 0 4.664063-1.101562 6.125-3.164062zm0 0"/><path d="m210.1875 157.21875c3.382812 2.394531 8.0625 1.59375 10.457031-1.785156 2.46875-3.480469 3.890625-3.902344 3.878907-3.921875.074218.019531 1.496093.441406 3.96875 3.921875 1.460937 2.066406 3.773437 3.164062 6.125 3.164062 1.5 0 3.011718-.445312 4.328124-1.378906 3.378907-2.394531 4.179688-7.078125 1.78125-10.457031-4.816406-6.800781-10.257812-10.246094-16.160156-10.246094s-11.34375 3.445313-16.160156 10.246094c-2.394531 3.378906-1.597656 8.058593 1.78125 10.457031zm0 0"/><path d="m153.453125 191.394531c-3.761719 1.734375-5.40625 6.191407-3.671875 9.953125 6.628906 14.371094 21.136719 23.65625 36.957031 23.65625 15.824219 0 30.328125-9.285156 36.957031-23.65625 1.734376-3.761718.09375-8.21875-3.667968-9.953125-3.761719-1.734375-8.21875-.089843-9.953125 3.671875-4.183594 9.074219-13.34375 14.9375-23.335938 14.9375-9.988281 0-19.148437-5.867187-23.335937-14.9375-1.734375-3.761718-6.1875-5.40625-9.949219-3.671875zm0 0"/><path d="m121.207031 418.097656-16.253906-1.398437-6.351563-15.027344c-2.203124-5.214844-7.285156-8.582031-12.945312-8.582031s-10.742188 3.367187-12.945312 8.582031l-6.351563 15.027344-16.257813 1.398437c-5.640624.484375-10.414062 4.273438-12.164062 9.660156-1.746094 5.382813-.113281 11.257813 4.164062 14.960938l12.332032 10.6875-3.695313 15.890625c-1.28125 5.515625.847657 11.226563 5.429688 14.554687 4.578125 3.324219 10.667969 3.585938 15.515625.664063l13.972656-8.425781 13.972656 8.425781c2.242188 1.355469 4.753906 2.023437 7.257813 2.023437 2.90625 0 5.800781-.902343 8.257812-2.6875 4.582031-3.328124 6.710938-9.039062 5.429688-14.554687l-3.695313-15.890625 12.332032-10.6875c4.277343-3.707031 5.910156-9.578125 4.160156-14.960938-1.746094-5.382812-6.523438-9.175781-12.164063-9.660156zm-14.582031 24.34375c-3.953125 3.421875-5.671875 8.710938-4.488281 13.804688l3.320312 14.269531-12.542969-7.566406c-4.476562-2.699219-10.039062-2.699219-14.515624 0l-12.542969 7.566406 3.320312-14.269531c1.183594-5.09375-.535156-10.382813-4.488281-13.804688l-11.070312-9.59375 14.59375-1.25c5.210937-.449218 9.707031-3.71875 11.746093-8.53125l5.699219-13.496094 5.703125 13.496094c2.035156 4.8125 6.535156 8.082032 11.742187 8.53125l14.59375 1.253906zm0 0"/><path d="m222.292969 418.097656-16.257813-1.398437-6.351562-15.027344c-2.203125-5.214844-7.285156-8.582031-12.945313-8.582031-5.660156 0-10.742187 3.367187-12.945312 8.582031l-6.351563 15.027344-16.253906 1.398437c-5.640625.484375-10.417969 4.273438-12.164062 9.660156-1.75 5.382813-.117188 11.257813 4.160156 14.960938l12.332031 10.6875-3.695313 15.890625c-1.28125 5.515625.851563 11.226563 5.429688 14.554687 2.457031 1.785157 5.351562 2.6875 8.257812 2.6875 2.503907 0 5.015626-.667968 7.261719-2.023437l13.96875-8.425781 13.972657 8.425781c4.847656 2.925781 10.9375 2.664063 15.519531-.664063 4.578125-3.328124 6.710937-9.039062 5.425781-14.554687l-3.695312-15.890625 12.332031-10.6875c4.277343-3.707031 5.914062-9.578125 4.164062-14.960938-1.75-5.382812-6.527343-9.175781-12.164062-9.660156zm-14.585938 24.34375c-3.949219 3.421875-5.667969 8.714844-4.484375 13.804688l3.316406 14.269531-12.542968-7.566406c-4.476563-2.699219-10.035156-2.699219-14.515625 0l-12.542969 7.566406 3.320312-14.269531c1.183594-5.09375-.535156-10.382813-4.484374-13.804688l-11.074219-9.59375 14.597656-1.25c5.207031-.449218 9.707031-3.71875 11.742187-8.53125l5.703126-13.496094 5.699218 13.496094c2.035156 4.8125 6.535156 8.082032 11.742188 8.53125l14.59375 1.25zm0 0"/><path d="m323.375 418.097656-16.253906-1.398437-6.351563-15.027344c-2.207031-5.214844-7.289062-8.582031-12.949219-8.582031-5.660156 0-10.738281 3.367187-12.941406 8.582031l-6.351562 15.027344-16.257813 1.398437c-5.640625.484375-10.414062 4.273438-12.164062 9.660156-1.746094 5.382813-.113281 11.253907 4.164062 14.960938l12.332031 10.6875-3.695312 15.890625c-1.28125 5.515625.847656 11.226563 5.425781 14.554687 4.582031 3.328126 10.671875 3.585938 15.519531.664063l13.972657-8.425781 13.972656 8.425781c2.242187 1.355469 4.753906 2.023437 7.257813 2.023437 2.90625 0 5.800781-.902343 8.261718-2.6875 4.578125-3.328124 6.707032-9.039062 5.425782-14.554687l-3.695313-15.890625 12.332031-10.6875c4.277344-3.707031 5.910156-9.578125 4.164063-14.960938-1.75-5.382812-6.527344-9.175781-12.167969-9.660156zm-14.585938 24.34375c-3.949218 3.421875-5.667968 8.714844-4.480468 13.804688l3.316406 14.269531-12.542969-7.566406c-4.476562-2.699219-10.039062-2.699219-14.515625 0l-12.542968 7.5625 3.316406-14.265625c1.183594-5.089844-.535156-10.382813-4.484375-13.804688l-11.070313-9.59375 14.59375-1.253906c5.207032-.445312 9.707032-3.714844 11.742188-8.53125l5.703125-13.492188 5.699219 13.492188c2.035156 4.816406 6.535156 8.085938 11.742187 8.53125l14.597656 1.253906zm0 0"/><path d="m305.925781 367.820312c-.625-11.414062-3.429687-22.417968-8.359375-32.769531-1.78125-3.742187-6.253906-5.328125-9.996094-3.546875-3.738281 1.777344-5.324218 6.253906-3.546874 9.996094 3.9375 8.265625 6.238281 17.039062 6.859374 26.140625h-208.28125c1.765626-25.246094 16.5625-47.667969 38.722657-59.308594 1.957031 23.046875 15.84375 43.464844 37.179687 53.640625 1.453125.691406 3.007813 1.039063 4.554688 1.039063 1.957031 0 3.90625-.550781 5.628906-1.644531 3.117188-1.972657 4.96875-5.363282 4.953125-9.082032 0-11.039062 6.121094-20.71875 13.097656-20.71875 6.980469 0 13.101563 9.679688 13.101563 20.738282-.019532 3.695312 1.832031 7.082031 4.941406 9.058593 3.078125 1.953125 6.886719 2.183594 10.195312.609375 21.023438-10.027344 35.164063-30.691406 37.164063-53.65625 5.742187 3.015625 11.050781 6.792969 15.871094 11.304688 1.445312 1.355468 3.285156 2.023437 5.121093 2.023437 2.003907 0 4.003907-.796875 5.480469-2.375 2.832031-3.023437 2.671875-7.769531-.351562-10.601562-7.917969-7.410157-16.945313-13.191407-26.882813-17.222657-1.734375-9.355468-5.6875-17.722656-11.699218-24.71875 20.816406-15.558593 33.09375-39.84375 33.125-66.050781h8.710937c7.300781 0 14.109375-2.894531 19.179687-8.148437 5.066407-5.25 7.714844-12.164063 7.457032-19.46875-.25-7.160156-3.472656-13.640625-8.464844-18.304688 8.929688-18.269531 25.308594-58.136718 12.109375-82.230468-6.253906-11.410157-17.113281-15.800782-26.425781-17.335938-10.996094-22.265625-28.328125-38.445312-50.34375-46.9375-22.839844-8.808594-48.5625-8.535156-74.386719.796875-27.054687 9.777344-53.574219 7.390625-78.820313-7.085937-4.222656-2.425782-9.148437-2.609376-13.515624-.5-4.640626 2.242187-7.886719 6.773437-8.691407 12.105468-2.367187 15.628906-3.367187 34.925782-2.75 52.941406.144531 4.140626 3.640625 7.382813 7.753907 7.238282 4.140624-.144532 7.378906-3.613282 7.238281-7.753906-.835938-24.332032 1.53125-43.195313 2.589843-50.1875.046876-.304688.140626-.519532.222657-.652344 29.160156 16.613281 59.792969 19.304687 91.070312 8.003906 45.800781-16.554688 89.109375.335938 107.761719 42.027344 1.117188 2.496094 3.503906 4.1875 6.230469 4.410156 9.414062.777344 15.597656 4.09375 18.910156 10.136719 8.265625 15.09375-.917969 44.914062-12.285156 68.152343-1.71875-.34375-3.488281-.523437-5.300781-.523437h-8.25v-4.5625c0-19.402344-8.683594-37.519531-23.8125-49.699219-6.390626-5.164062-15.460938-5.761718-22.582032-1.488281-11.953125 7.171875-25.671875 10.960937-39.671875 10.960937s-27.714843-3.792968-39.671875-10.960937c-7.117187-4.269531-16.191406-3.671875-22.570312 1.476563-15.140625 12.191406-23.824219 30.308593-23.824219 49.710937v4.5625h-8.25c-.691406 0-1.375.023437-2.054687.078125-7.617188-14.453125-12.984376-32.15625-15.984376-52.722656-.597656-4.097656-4.394531-6.933594-8.503906-6.339844-4.101562.601562-6.9375 4.40625-6.339844 8.503906 3.132813 21.46875 8.730469 40.214844 16.679688 55.851563-6.359375 4.703125-10.609375 12.0625-10.894531 20.316406-.261719 7.308594 2.386719 14.226563 7.457031 19.480469 5.066406 5.253906 11.878906 8.148437 19.179688 8.148437h8.707031c.035156 26.21875 12.324219 50.511719 33.15625 66.070313-6.035157 6.914062-10.023438 15.300781-11.75 24.714844-31.367188 12.753906-52.628907 42.550781-54.515625 76.355468-37.421875 2.636719-67.058594 33.921875-67.058594 72 0 39.800782 32.378906 72.179688 72.179688 72.179688h228.117187c39.800781 0 72.179687-32.378906 72.179687-72.179688 0-38.070312-29.636718-69.359375-67.050781-71.996094zm-146.746093-22.617187c-15.265626-9.871094-24.140626-27.175781-22.992188-45.734375.035156-.5625.078125-1.117188.132812-1.667969.011719-.097656.019532-.195312.027344-.292969.210938-2.015624.542969-3.957031 1.003906-5.824218 4.730469 15.273437 16.367188 27.539062 31.238282 33.132812-4.773438 5.082032-8.15625 12.183594-9.410156 20.386719zm64.246093-68.984375c-.050781.261719 1.085938 14.300781-10.738281 26.140625-6.9375 6.929687-16.152344 10.746094-25.949219 10.746094-20.230469 0-36.6875-16.460938-36.6875-36.691407v-.195312c20.816407 9.25 50.40625 10.050781 73.375 0zm-9.121093 68.96875c-1.246094-8.179688-4.625-15.273438-9.394532-20.355469 6.816406-2.554687 13.074219-6.5625 18.382813-11.867187 6.027343-6.035156 10.382812-13.292969 12.832031-21.210938.433594 1.773438.757812 3.609375.96875 5.503906.011719.269532.039062.535157.082031.796876.140625 1.511718.210938 3.054687.210938 4.640624 0 17.191407-8.878907 33.234376-23.082031 42.492188zm-98.632813-144.621094v-7.390625c0-4.140625-3.359375-7.496093-7.5-7.496093h-16.210937c-3.1875 0-6.167969-1.269532-8.386719-3.566407-2.214844-2.296875-3.371094-5.324219-3.257813-8.535156.214844-6.1875 5.644532-11.21875 12.105469-11.21875h15.75c4.140625 0 7.5-3.359375 7.5-7.5v-12.0625c0-14.835937 6.644531-28.699219 18.242187-38.035156 1.53125-1.238281 3.667969-1.351563 5.4375-.289063 14.285157 8.566406 30.671876 13.097656 47.386719 13.097656 16.714844 0 33.101563-4.53125 47.386719-13.097656 1.769531-1.0625 3.90625-.949218 5.449219.300782 11.585937 9.324218 18.234375 23.1875 18.234375 38.023437v12.0625c0 4.140625 3.355468 7.5 7.5 7.5h15.746094c6.460937 0 11.890624 5.03125 12.105468 11.21875v.007813c.113282 3.203124-1.042968 6.230468-3.257812 8.527343-2.21875 2.296875-5.195313 3.5625-8.386719 3.5625h-16.210937c-4.140626 0-7.5 3.359375-7.5 7.5v7.390625c0 37.640625-30.535157 67.617188-67.617188 67.617188-8.496094-.027344-25.1875 1.085937-43.566406-10.796875-19.378906-12.53125-30.949219-33.773438-30.949219-56.820313zm185.128906 296.433594h-228.121093c-31.527344 0-57.179688-25.648438-57.179688-57.179688 0-31.527343 25.652344-57.179687 57.179688-57.179687.101562 0 224.601562.003906 228.117187 0 31.53125 0 57.179687 25.652344 57.179687 57.179687 0 31.53125-25.648437 57.179688-57.175781 57.179688zm0 0"/></svg>
                            <h1 class="counter-value" data-count="50">0</h1><span> k+</span>
                            <p>happy customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pa-counter-box">
                            <svg viewBox="0 0 61 60" xmlns="http://www.w3.org/2000/svg">
                                <path d="m57 0h-24c-1.6568542 0-3 1.34314575-3 3 0 6.277-.307-.177 1.894 30h-2.894v-6c-.0033061-2.7600532-2.2399468-4.9966939-5-5h-10c-2.7600532.0033061-4.99669388 2.2399468-5 5v6h-5c-2.209139 0-4 1.790861-4 4v19c0 2.209139 1.790861 4 4 4h30c.7007481-.0041297 1.3878306-.1942765 1.991-.551.6086235.3593577 1.3022054.5495836 2.009.551h14c2.209139 0 4-1.790861 4-4v-7.241c.6086783-.320686 1.0111761-.9302796 1.067-1.616 3.383-46.268 2.933-38.521 2.933-44.143 0-1.65685425-1.3431458-3-3-3zm-24 2h24c.5522847 0 1 .44771525 1 1v3h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-1c0-.55228475-.4477153-1-1-1s-1 .44771525-1 1v1h-2v-3c0-.55228475.4477153-1 1-1zm-22 28h8c.5522847 0 1-.4477153 1-1s-.4477153-1-1-1h-8v-1c0-1.6568542 1.3431458-3 3-3h10c1.6568542 0 3 1.3431458 3 3v1h-4c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1h4v3h-16zm-7 5h30c1.1045695 0 2 .8954305 2 2h-34c0-1.1045695.8954305-2 2-2zm50 17h-4.36c-.7042755.0157583-1.3420268.4198856-1.657 1.05-.8190011.7176373-1.8998308 1.0618506-2.983.95-1.0828988.1121813-2.16355-.2320905-2.982-.95-.3161689-.6294963-.9537637-1.0332807-1.658-1.05h-2.36v-3h16zm-52-13h34v15h-34zm2 19c-1.1045695 0-2-.8954305-2-2h34c0 1.1045695-.8954305 2-2 2zm48 0c-15.325 0-14.111.033-14.515-.076.64-1.155.515-1.9.515-3.924h2.258c1.433 2.622 7.93 2.712 9.492 0h4.25v2c0 1.1045695-.8954305 2-2 2zm3.07-11h-17.07v-10c.0003371-1.0784216-.4347897-2.1112905-1.2067044-2.864378s-1.815211-1.1625826-2.8932956-1.135622l-1.825-25h25.849z"/>
                                <path d="m29.941 44.778c-.648-2.187-7.384-4.243-10.545-3.657-4.049.745-6.589 3.257-6.387 6.211-1.229.248-2.6.482-4.135.676-.54433196.0734277-.92755464.5721434-.85834553 1.1170278s.56494138.9319586 1.11034553.8669722c1.656-.21 3.131-.463 4.447-.732 1.432 2.7 4.754 3.238 7.771 2.683 4.423-.814 5.27-4.478 7.753-5.514.6792381-.2341683 1.0519676-.9632874.844-1.651zm-8.959 5.2c-1.845.338-4.132.258-5.334-1.185 1.9423451-.4397421 3.8347966-1.0763671 5.648-1.9.4747657-.2579672.6587509-.8464152.4154904-1.3288817-.2432604-.4824665-.8257785-.6844423-1.3154904-.4561183-1.7310178.7676994-3.5333652 1.3632344-5.381 1.778.082-1.786 1.887-3.271 4.744-3.8 2.329-.429 6.045.789 7.774 1.9-2.477 1.52-3.265 4.385-6.551 4.991z"/>
                                <path d="m45 10c-3.969 0-8 9.891-8 17 0 6.763 1.983 9.645 7 9.968v3.032c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-3.032c5.017-.323 7-3.205 7-9.968 0-7.109-4.031-17-8-17zm1 24.966v-3.552l2.707-2.707c.3789722-.3923789.3735524-1.0160848-.0121814-1.4018186s-1.0094397-.3911536-1.4018186-.0121814l-1.293 1.293v-3.172l2.707-2.707c.3789722-.3923789.3735524-1.0160848-.0121814-1.4018186s-1.0094397-.3911536-1.4018186-.0121814l-1.293 1.293v-4.586c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v4.586l-1.293-1.293c-.3923789-.3789722-1.0160848-.3735524-1.4018186.0121814s-.3911536 1.0094397-.0121814 1.4018186l2.707 2.707v3.172l-1.293-1.293c-.3923789-.3789722-1.0160848-.3735524-1.4018186.0121814s-.3911536 1.0094397-.0121814 1.4018186l2.707 2.707v3.552c-3.379-.219-5-1.751-5-7.966 0-7.706 4.366-15 6-15s6 7.294 6 15c0 6.215-1.621 7.747-5 7.966z"/>
                                </svg>
                            <h1 class="counter-value" data-count="800">0</h1><span> +</span>
                            <p>products</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pa-counter-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-38 0 512 512.00142">
                                <path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 "/>
                                <path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 "/>
                                <path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 "/>
                                </svg>
                            <h1 class="counter-value" data-count="100">0</h1><span> %</span>
                            <p>Product purity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->
    <!-- trending product start -->
    <div class="pa-trending-product">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>trending product</h1>
                <h5>product</h5>
            </div>
            <div class="row">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="pa-product-box">
                                <div class="pa-product-img">
                                    <img src="{{asset('FrontEnd/assets/images/200x185a.jpg')}}" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-product-content">
                                    <h4><a href="product-single.html">Black Organic Tea</a></h4>
                                    <p class="pa-product-rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <p><del>$ 130</del>$ 120</p>
                                </div>
                                <div class="pa-product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                                    <g>
                                                        <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                            C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                            c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                            v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                            c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                            C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                        <circle cx="128" cy="426.667" r="42.667"/>
                                                        <circle cx="384" cy="426.667" r="42.667"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                            c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                            c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                            s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                            C512,93.417,453.532,30,376,30z"/>
                                                    </g>
                                                </svg>                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pa-product-box">
                                <div class="pa-product-img">
                                    <img src="{{asset('FrontEnd/assets/images/200x185a.jpg')}}" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-product-content">
                                    <h4><a href="product-single.html">Loose Leaf Tea</a></h4>
                                    <p class="pa-product-rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <p><del>$ 130</del>$ 120</p>
                                </div>
                                <div class="pa-product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                                    <g>
                                                        <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                            C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                            c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                            v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                            c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                            C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                        <circle cx="128" cy="426.667" r="42.667"/>
                                                        <circle cx="384" cy="426.667" r="42.667"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                            c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                            c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                            s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                            C512,93.417,453.532,30,376,30z"/>
                                                    </g>
                                                </svg>                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pa-product-box">
                                <div class="pa-product-img">
                                    <img src="{{asset('FrontEnd/assets/images/200x185a.jpg')}}" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-product-content">
                                    <h4><a href="product-single.html">Oolong Tea</a></h4>
                                    <p class="pa-product-rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <p><del>$ 130</del>$ 120</p>
                                </div>
                                <div class="pa-product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.333 469.333">
                                                    <g>
                                                        <path d="M434.979,42.667H85.333c-1.053,0-2.014,0.396-3.001,0.693l-8.594-28.241C71.005,6.138,62.721,0,53.333,0H10.667
                                                            C4.776,0,0,4.776,0,10.667V32c0,5.891,4.776,10.667,10.667,10.667h26.865l66.646,219.01l-24.891,29.039
                                                            c-9.838,11.477-14.268,27.291-9.74,41.713c5.791,18.445,22.07,30.237,40.839,30.237H416c5.891,0,10.667-4.776,10.667-10.667
                                                            v-21.333c0-5.891-4.776-10.667-10.667-10.667H110.385l33.813-39.448c0.85-0.992,1.475-2.112,2.12-3.219h206.703
                                                            c16.533,0,31.578-9.548,38.618-24.507l74.434-158.17c2.135-4.552,3.26-9.604,3.26-14.615v-3.021
                                                            C469.333,58.048,453.952,42.667,434.979,42.667z"/>
                                                        <circle cx="128" cy="426.667" r="42.667"/>
                                                        <circle cx="384" cy="426.667" r="42.667"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g>
                                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                            c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                            c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                            s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                            C512,93.417,453.532,30,376,30z"/>
                                                    </g>
                                                </svg>                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312">
                                                    <g>
                                                        <path d="M230.656,156.416c-40.96,0-74.24,33.28-74.24,74.24s33.28,74.24,74.24,74.24s74.24-33.28,74.24-74.24
                                                            S271.616,156.416,230.656,156.416z M225.024,208.64c-9.216,0-16.896,7.68-16.896,16.896h-24.576
                                                            c0.512-23.04,18.944-41.472,41.472-41.472V208.64z"/>
                                                    </g>
                                                    <g>
                                                        <path d="M455.936,215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464,184.064,5.376,215.296
                                                            c-7.168,8.704-7.168,21.504,0,30.72c25.088,31.232,114.688,133.12,225.28,133.12s200.192-101.888,225.28-133.12
                                                            C463.104,237.312,463.104,224.512,455.936,215.296z M230.656,338.176c-59.392,0-107.52-48.128-107.52-107.52
                                                            s48.128-107.52,107.52-107.52s107.52,48.128,107.52,107.52S290.048,338.176,230.656,338.176z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- trending product end -->
    <!-- tesimonial start -->
    <div class="pa-tesimonial spacer-top spacer-bottom">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>customer review</h1>
                <h5>feedback</h5>
            </div>
            <div class="row">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="pa-tesimonial-box">
                                <div class="pas-testi-img">
                                    <img src="{{asset('FrontEnd/assets/images/300x300.png')}}" style="background-color: #fff" alt="image" class="img-fluid" />
                                </div>
                                <div class="pas-testi-content">
                                    <h2>Manish Kumar</h2>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                    <a href="javascript:;" class="pa-view-all">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="pa-tesimonial-button">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tesimonial end -->
    <!-- blog start -->
    <div class="pa-blog spacer-top spacer-bottom">
        <div class="container">
            <div class="pa-heading">
                <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                <h1>latest news</h1>
                <h5>blog</h5>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pa-blog-box">
                        <img src="https://via.placeholder.com/348x250" alt="image" class="img-fluid">
                        <div class="pa-blog-title">
                            <a href="#" class="pa-blog-category">Ayurveda Medicine</a>
                            <h2><a href="blog-single.html">Duis aute irure dolor in velit voluptate esse</a></h2>
                            <a href="#" class="pa-blog-date">20 March, 2020</a>
                        </div>
                        <div class="pa-blog-view">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-heart"></i> 900</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-eye"></i> 830</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-blog-box">
                        <img src="https://via.placeholder.com/348x250" alt="image" class="img-fluid">
                        <div class="pa-blog-title">
                            <a href="#" class="pa-blog-category">Ayurveda Medicine</a>
                            <h2><a href="blog-single.html">Duis aute irure dolor in velit voluptate esse</a></h2>
                            <a href="#" class="pa-blog-date">20 March, 2020</a>
                        </div>
                        <div class="pa-blog-view">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-heart"></i> 900</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-eye"></i> 830</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pa-blog-box">
                        <img src="https://via.placeholder.com/348x250" alt="image" class="img-fluid">
                        <div class="pa-blog-title">
                            <a href="#" class="pa-blog-category">Ayurveda Medicine</a>
                            <h2><a href="blog-single.html">Duis aute irure dolor in velit voluptate esse</a></h2>
                            <a href="#" class="pa-blog-date">20 March, 2020</a>
                        </div>
                        <div class="pa-blog-view">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-heart"></i> 900</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-eye"></i> 830</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
    <!-- footer start -->
    <div class="pa-footer">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-3 col-md-6">
                    <div class="pa-foot-box">
                        <h2 class="pa-foot-title">Top Products</h2>
                        <ul>
                            <li>
                                <a href="javascript:;">Black Organic Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Loose Leaf Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Oolong Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Green Tea</a>
                            </li>
                            <li>
                                <a href="javascript:;">Sencha Tea</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pa-foot-box">
                        <h2 class="pa-foot-title">Legal Information</h2>
                        <ul>
                            <li>
                                <a href="javascript:;">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:;">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="javascript:;">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="javascript:;">Customer Service</a>
                            </li>
                            <li>
                                <a href="javascript:;">Return Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pa-foot-box pa-foot-subscribe">
                        <div style="display: inline-flex">
                        <img src="{{asset('FrontEnd/assets/images/herbal.svg')}}" alt="image" class="img-fluid"/>
                        <h3 style="color:#FBBB04"><br/> &nbsp; Herbo Vaidik</h3>
                        </div>
                        <div class="pa-newsletter">
                            <form>
                                <input type="text" placeholder="Subscribe newsletter">
                                <button class="pa-btn">Subscribe now</button>
                            </form>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- copyright start -->
    <div class="pa-copyright">
        <div class="container">
            <p>Copyright &copy; 2020. All right reserved. <a href="index.html">Herbo Vaidik</a></p>
        </div>
    </div>
    <!-- copyright end -->
    <!-- login start -->
    <div class="pa-login-model">
        <div class="modal fade" id="loginModel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <h1 class="pa-login-title">Login</h1>
                        <form>
                            <div class="pa-login-form">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="pa-remember">
                                    <label>Remember Me
                                        <input type="checkbox">
                                        <span class="s_checkbox"></span>
                                    </label>
                                    <a href="javascript:;" class="pa-forgot-password" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal" aria-label="Close">Forgot Password ?</a>
                                </div>
                                <div class="pa-login-btn">
                                    <button class="pa-btn">Login</button>
                                    <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->
    <!-- signup start -->
    <div class="pa-login-model pa-signup-modal">
        <div class="modal fade" id="signUpModal">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h1 class="pa-login-title">Signup</h1>
                    <form>
                        <div class="pa-login-form">
                            <input type="text" placeholder="Username">
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <input type="password" placeholder="Confirm Password">
                            
                            <div class="pa-login-btn">
                                <button class="pa-btn">Sign up</button>
                                <p>Already have an account? <a href="javascript:;" data-toggle="modal" data-target="#loginModel" data-dismiss="modal" aria-label="Close">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- signup end -->
    <!-- forgot start -->
    <div class="pa-login-model pa-forgot-modal">
        <div class="modal fade" id="forgotModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <h1 class="pa-login-title">Forgot Password</h1>
                        <form>
                            <div class="pa-login-form">
                                <input type="text" placeholder="Email">
                                <div class="pa-login-btn">
                                    <button class="pa-btn">Forgot</button>
                                    <p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" aria-label="Close">Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot end -->
</div>
<!-- main wrapper end -->

    <script src="{{asset('FrontEnd/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/SmoothScroll.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('FrontEnd/assets/js/custom.js')}}"></script>
</body>
</html>