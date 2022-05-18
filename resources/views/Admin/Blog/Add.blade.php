@extends('Layouts.back_end.adminlayout')
@section('Content-Area')

<form  id="dpz-btn-select-files" class="" novalidate="novalidate" action="{{isset($blog) ?route('admin.Blog.edit',$blog->id):route('admin.Blog.store')}}" method="post" enctype="multipart/form-data" name="myForm">
    @csrf
    @if(isset($blog))
        @method('PUT')
    @endif    

    <div class="row match-height">
   
    <div class="col-xl-8 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h3>Add New Blog</h3>
               
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{isset($blog) ? $blog->title:''}}" required>
                   
                   @error('title')
                   <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                   @enderror
                    
                </div>
                <div class="mb-2">
                    <label class="form-label">Sort Description</label>
                    <input type="text" class="form-control @error('sort_desc') is-invalid @enderror" name='sort_desc' value="{{isset($sort_desc) ? $blog->sort_desc:''}}">
                    @error('sort_desc')
                    <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">For URL </label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" name='url' value="{{isset($url) ? $blog->url:''}}">
                    @error('url')
                    <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label">Meta Description </label>
                    <input type="text" class="form-control @error('meta_desc') is-invalid @enderror" name='meta_desc' value="{{isset($meta_desc) ? $blog->meta_desc:''}}">
                    @error('meta_desc')
                    <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label">Meta Keywords </label>
                    <input type="text" class="form-control @error('meta_keyword') is-invalid @enderror" name='meta_keyword' value="{{isset($meta_keyword) ? $blog->meta_keyword:''}}">
                    @error('meta_keyword')
                    <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                    @enderror
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Blog Pic </h3>
            </div>
            <div class="card-body ">
                <input type="file" id="image" class="btn btn-outline-primary mb-1 @error('blogpic') is-invalid @enderror" name='blogpic' accept="image/*" >
                    <i data-feather="file"></i> Click me to select files
               
                <div class="container dropzone dropzone-area" >
                    <img id="preview-image-before-upload" class="img-fluid m-auto mt-2"  src="{{isset($blogpic) ? $blog->blogpic:''}}">
                    @error('blogpic')
                    <span id="basic-default-name-error" class="error text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-xl-12 col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <input type="hidden" name="long_desc" id="quill-html">
                    <h3>Long Description</h3>
                </div>
                <div class="card-body ">
                    <div id="toolbar"></div>
                    <div id="editor"  class='editor' style="min-height: 350px;">
                        {{isset($blog) ? $blog->title:''}}
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 d-grid gap-2">
            <input type="button" class="btn btn-info btn-lg btn-block" value="Add New Blog" id="btn-submit">
        </div>
    </div>
   
</form>


    {{-- <script src="{{asset('BackEnd/assets/js/scripts/forms/form-quill-editor.js')}}"></script> --}}
   
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js" type="text/javascript"></script>
<script>
   var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],

  ['clean'],   
  ['link'],
  ['image'],                                      // remove formatting button
];
var quill = new Quill('#editor', {
    modules: {
    toolbar: toolbarOptions
  },
    
    theme: 'snow'
});

</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
      
      $(document).ready(function (e) {
       
         
         $('#image').change(function(){
                  
          let reader = new FileReader();
       
          reader.onload = (e) => { 
       
            $('#preview-image-before-upload').attr('src', e.target.result); 
          }
       
          reader.readAsDataURL(this.files[0]); 
         
         });
         
      });
       

      $('#btn-submit').on('click', () => { 
    // Get HTML content
    var html = quill.root.innerHTML;

    // Copy HTML content in hidden form
    $('#quill-html').val( html )

    // Post form
    myForm.submit();
})

      </script>
<script src="{{asset('BackEnd/assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection