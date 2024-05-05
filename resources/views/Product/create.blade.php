<!DOCTYPE html>
<html>
<head>
  @include('layouts/title')
  

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/AdminLTE.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('lte/dist/css/skins/_all-skins.min.css')}}">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
  
  @include('layouts/header')
  @include('layouts/leftside')
  <div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create 
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home.index')}}"><i class="fa fa-dashboard"></i> products</a></li>
            <li class="active">create</li>
        </ol>
    </section>

    @if(Session::has('exist')) 
        <div class="box-header with-border">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Already Exist...
            </div>
        </div>
    @endif


      <section class="content">
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="row">
                <div class="col-md-12">
            <div class="nav-tabs-custom">
            
            <div class="tab-content">

                <div>
                    <div class="box-header">
                        <h3 class="box-title">New Product</h3>
                    </div>
                    <form class="form-horizontal" action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <div class="box-body">
                            <br>
                            <div class="form-group" style="margin-left: 160px;">
                                <label for="inputcategory" class="col-md-3 control-label">Product Name<i style="color: red">*</i></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="product" placeholder="Enter" required>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 160px;">
                                <label for="inputcategory" class="col-md-3 control-label">Product Description</label>
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="description" placeholder="Enter"></textarea>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 160px;" >
                                <label class="col-md-3 control-label">Upload Image:</label>
                                <div class="col-md-6">
                                    <img src="" id="photo" class="photo" alt="" width="150" height="100">
                                    <input type="file" name="img" id="photo" class="photo_view" accept="image/jpeg, image/png" onchange="readURL(this)">
                                    <br><a id="delete_photo" class="btn btn-default fa fa-trash" style="color: red;"> Delete Image</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                            <button type="reset" class="btn btn-default">Refresh</button>
                            <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </section>
          
        </div>

      </section>
    </div>
  
  <div class="control-sidebar-bg"></div>
</div>

  <!-- jQuery 3 -->
  <script src="{{asset('lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('lte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('lte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  
  <!-- Sparkline -->
  <script src="{{asset('lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('lte/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>
  
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('lte/dist/js/demo.js')}}"></script>

  <script src="{{asset('lte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

</body>
</html>

<script type="text/javascript">
  

  function readURL(input){
    if(input.files){
      var reader = new FileReader();
      document.getElementById('photo').style.display = 'block';
      reader.onload = function(e){
        $('#photo').attr('src', e.target.result).width(150).height(100);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

 

  $(document).on("click","#delete_photo", function(event) {
      $('.photo').attr('src','');
      $('.photo_view').val("");
      
  });

</script>