@extends('Layouts.front_end.frontendlayout')
@section('Header_Area')
  <meta name="Keywords" content="{{$blog->meta_keyword}}"/>
  <meta name="description" content="{{$blog->meta_desc}}"/>
@endsection
@section('title','Blog')


@section('Content_Area')

<!-- breadcrumb start -->
<div class="pa-breadcrumb">
    <div class="container-fluid">
        <div class="pa-breadcrumb-box" >
            <h1>blog single</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>blog single</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


   <!-- blog single start -->
   <div class="pa-blog-single spacer-top spacer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="pa-blog-box">
                    <img src="{{asset('/Blogs/'.$blog->image)}}" alt="image" class="img-fluid" style="height:400px;width:728px;">
                    <div class="pa-blog-title">
                        <a href="#" class="pa-blog-category">{{$blog->title}}</a>
                        <h2></h2>
                        <a href="#" class="pa-blog-date">{{$blog->created_at}}</a>
                        {{ $blog->sort_desc}}
                    </div>
                    <div class="pa-blog-view">
                        <ul>
                            {{-- <li>
                                <a href="#"><i class="far fa-heart"></i> 900</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-eye"></i> 830</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="pa-bs-content">
                    
                    {!! $blog->long_desc !!}

                    {{-- <div class="pa-blog-user">
                        <div class="pa-blog-user-img">
                            <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"/>
                        </div>
                        <div class="pa-blog-user-content">
                            <h2 class="pa-blog-user-name">John doe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur erat diam, non iaculis ex dictum ut. Aenean sit amet odio nisi.</p>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="pa-blog-comnt">
                    <h2 class="pa-cmnt-title">Leave a reply</h2>
                    <ul>
                        <li>
                            <div class="pa-cmnt-box">
                                <div class="pa-cmnt-img">
                                    <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-cmnt-content">
                                    <h3>Jonson Brock</h3>
                                    <p><span class="pa-cmnt-date">1 May, 2020</span><span class="pa-cmnt-time">06:35:44</span></p>
                                    <p>Aenean sit amet odio nisi.Vestibulum vel dolor et justo sollicitudin tincidunt. Mauris eleifend elit metus.</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="pa-cmnt-box">
                                        <div class="pa-cmnt-img">
                                            <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"/>
                                        </div>
                                        <div class="pa-cmnt-content">
                                            <h3>Jonson Brock</h3>
                                            <p><span class="pa-cmnt-date">1 May, 2020</span><span class="pa-cmnt-time">06:35:44</span></p>
                                            <p>Aenean sit amet odio nisi.Vestibulum vel dolor et justo sollicitudin tincidunt. Mauris eleifend elit metus.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="pa-cmnt-box">
                                <div class="pa-cmnt-img">
                                    <img src="https://via.placeholder.com/100x100" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-cmnt-content">
                                    <h3>Jonson Brock</h3>
                                    <p><span class="pa-cmnt-date">1 May, 2020</span><span class="pa-cmnt-time">06:35:44</span></p>
                                    <p>Aenean sit amet odio nisi.Vestibulum vel dolor et justo sollicitudin tincidunt. Mauris eleifend elit metus.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="pa-cmnt-form">
                        <form>
                            <input type="text" placeholder="Enter your name">
                            <input type="text" placeholder="Enter your email">
                            <textarea placeholder="Message here"></textarea>
                            <button class="pa-btn" type="submit">submit</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="pa-blog-sidebar">
                    <div class="pa-widget pa-search">
                        <input type="text" placeholder="Search here">
                        <button class="pa-btn">Search</button>
                    </div>
                    <div class="pa-widget pa-shop-category">
                        <h2 class="pa-sidebar-title">Product Categories</h2>
                        <ul>
                            <li><a href="javascript:;">Top products <span>4</span></a></li>
                            <li><a href="javascript:;">Latest products <span>5</span></a></li>
                            <li><a href="javascript:;">New trending <span>6</span></a></li>
                            <li><a href="javascript:;">New arrivals <span>2</span></a></li>
                            <li><a href="javascript:;">Recently added <span>9</span></a></li>
                        </ul>
                    </div>
                    <div class="pa-widget pa-product-widget">
                        <h2 class="pa-sidebar-title">Recent Blogs</h2>
                        <ul>
                            @foreach ($blogs as $bloga)
                            <li>
                                <div class="pa-pro-wid-img">
                                    <img src="{{asset('/Blogs/'.$bloga->image)}}" alt="image" class="img-fluid" style="height:54px; width:58px;">
                                </div>
                                <div class="pa-pro-wid-content">
                                    <h4><a href="javascript:;">{{$bloga->title}}</a></h4>
                                    <p>{{$bloga->sort_desc}}</p>
                                </div>
                            </li>
                            @endforeach
                          
                          
                        </ul>
                    </div>
                    <div class="pa-widget pa-tag">
                        <h2 class="pa-sidebar-title">Tag clouds</h2>
                        <ul>
                            <li><a href="javascript:;">product</a></li>
                            <li><a href="javascript:;">Ayurveda</a></li>
                            <li><a href="javascript:;">pure</a></li>
                            <li><a href="javascript:;">trending</a></li>
                            <li><a href="javascript:;">herbal</a></li>
                            <li><a href="javascript:;">healthy</a></li>
                            <li><a href="javascript:;">product</a></li>
                            <li><a href="javascript:;">Ayurveda</a></li>
                            <li><a href="javascript:;">trending</a></li>
                            <li><a href="javascript:;">pure</a></li>
                            <li><a href="javascript:;">herbal</a></li>
                            <li><a href="javascript:;">healthy</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog single end -->


@endsection







