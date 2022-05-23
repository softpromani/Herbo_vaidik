@extends('Layouts.front_end.frontendlayout')

@section('title','Blog')

@section('Content_Area')



   <!-- breadcrumb start -->
   <div class="pa-breadcrumb">
    <div class="container-fluid">
        <div class="pa-breadcrumb-box">
            <h1>blog</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- blog start -->
<div class="pa-blog-page spacer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-md-6">
                        <div class="pa-blog-box">
                            <a href="{{route('singleBlog',$blog->slug)}}"><img src="{{asset('Blogs/'.$blog->image)}}" alt="image"  style="height:250px; width:348px;" class="img-fluid"></a>
                            <div class="pa-blog-title">
                                <a href="{{route('singleBlog',$blog->slug)}}" class="pa-blog-category">{{$blog->title}}</a>
                                <h2><a href="#">{{$blog->sort_desc}}</a></h2>
                                <a href="#" class="pa-blog-date"></a>
                            </div>
                            <div class="pa-blog-view">
                                {{-- <ul>
                                    <li>
                                        <a href="#"><i class="far fa-heart"></i> 900</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-eye"></i> 830</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div> 
                    @endforeach
                   <div class="row container mt-2 mb-2 text-center">
                       <div class="col-sm-12">
                           {!! $blogs->links() !!}
                           
                       </div>
                   </div>
                
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pa-blog-sidebar">
                    <div class="pa-widget pa-search">
                        <input type="text" placeholder="Search here">
                        <button class="pa-btn">Search</button>
                    </div>
                    <div class="pa-widget pa-shop-category">
                        <h2 class="pa-sidebar-title">Categories</h2>
                        <ul>
                            <li><a href="javascript:;">Top products <span>4</span></a></li>
                            <li><a href="javascript:;">Latest products <span>5</span></a></li>
                            <li><a href="javascript:;">New trending <span>6</span></a></li>
                            <li><a href="javascript:;">New arrivals <span>2</span></a></li>
                            <li><a href="javascript:;">Recently added <span>9</span></a></li>
                        </ul>
                    </div>
                    <div class="pa-widget pa-product-widget">
                        <h2 class="pa-sidebar-title">Top poducts</h2>
                        <ul>
                            @foreach ($blogslatest as $bloglt)
                                
                           
                            <li>
                                <div class="pa-pro-wid-img">
                                    <img src="{{asset('blogs/'.$bloglt->image)}}" style="width:58px; height:54px" alt="image" class="img-fluid">
                                </div>
                                <div class="pa-pro-wid-content">
                                    <h4><a href="javascript:;">{{$bloglt->title}}</a></h4>
                                    {{-- <p>{{$blog}}</p> --}}
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="pa-widget pa-tag">
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
                    </div>     --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog end -->

@endsection