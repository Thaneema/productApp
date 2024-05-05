<!DOCTYPE html>
<html>
<head>
  @include('layouts/title')
  

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/skins/_all-skins.min.css')}}">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('lte/bower_components/select2/dist/css/select2.min.css')}}">
  
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
  
  @include('layouts/header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts/leftside')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="{{ route('home.index') }}"><i class="fa fa-dashboard"></i> products</a></li>
          <li class="active">update</li>
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

             @if(Session::has('save')) 
             <div class="box-header with-border">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Saved Successfully.
              </div>
              </div>
             @endif
             
             @if(Session::has('Update')) 
             <div class="box-header with-border">
               <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Updated Successfully.
               </div>
            </div>
             @endif

         
          <!-- /.modal -->

      <!-- Main content -->
      <section class="content">
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <div class="row">
      
          <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            
            <div class="tab-content">

              <div class="tab-pane active" class="tab-pane" id="tab_2-2">
                <div class="box-header">
                  <h3 class="box-title">Update Product</h3>
                </div>
                  <!-- form start -->
                <form class="form-horizontal" action="{{ route('home.update', ['home' => $product->id]) }}" id="product_add_form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <input type="hidden" name="prd_id" value="{{$product->id}}">
              
                  <div class="box-body">
                  <br>
                    
                    <div class="form-group" style="margin-left: 160px;">
                      <label for="inputcategory" class="col-md-3 control-label">Product Name<i style="color: red">*</i></label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="product" value="{{$product->name}}" required>
                      </div>
                    </div>

                    <div class="form-group" style="margin-left: 160px;">
                      <label for="inputcategory" class="col-md-3 control-label">Product Description<i style="color: red">*</i></label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="description" value="{{$product->description}}" required>
                      </div>
                    </div>
                   
                    <div class="form-group" style="margin-left: 160px;">
                      <label class="col-md-3 control-label">Upload Image:</label>
                      <div class="col-md-6">
                        <img src="{{URL::asset($product->image)}}" id="photo" class="photo" alt="" width="150" height="200">
                        <input type="file" name="img" id="photo" class="photo_view" accept="image/jpeg, image/png" onchange="readURL(this)">
                        <br><a id="delete_photo" class="btn btn-default fa fa-trash" style="color: red;"> Delete Image</a>
                        <br>
                      </div>
                    </div>

                  

                  </div>
                  
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="pull-left">
                      <button type="reset" class="btn btn-default">Refresh</button>
                      <button type="submit" class="btn btn-info">Update</button>
                    </div>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
          </section>
          <!-- /.Left col -->
          
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
<!-- Select2 -->
<script src="{{asset('lte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

  
</body>
</html>

<script type="text/javascript">

function readURL(input){
    if(input.files){
      var reader = new FileReader();
      document.getElementById('photo').style.display = 'block';
      reader.onload = function(e){
        $('#photo').attr('src', e.target.result).width(150).height(200);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).on("click","#delete_photo", function(event) {
      $('.photo').attr('src','');
      $('.photo_view').val("");
      $('#product_add_form').append('<input type="hidden" class="delphoto" name="delete_product" value="1">');
      
  });




</script>