@extends('Layouts.back_end.adminlayout')
@section('Content-Area')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header"><h3> All Blogs</h3></div>
            <div class="card-body">
                <table class="datatables-ajax table table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sr .No</th>
                            <th>Title</th>
                            <th>sort Description</th>
                            <th>pic</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>
                                {{$i++}}
                            </td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->sort_desc}}</td>
                            <td><img class="me-75 img-thumbnail" style="height:150px;width:150px;" src="{{asset('Blog/'.$blog->image)}}"></td>
                            <td>
                                <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light show" data-bs-toggle="dropdown" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end show" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(-96px, 28px, 0px);">
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        <span>Edit</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>



                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
       
    </div>
</div>

<script src="{{asset('BackEnd/assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('BackEnd/assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection