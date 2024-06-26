<!DOCTYPE html>
<html>
  <head>
  @include('layouts/header')
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/skins/_all-skins.min.css')}}">
    
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="{{asset('lte/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" href="{{asset('lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    
    
  </head>
  <body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
      @include('layouts/leftside')
      <div class="content-wrapper"><br>
        <section class="content-header">
          <h1>
            View
          </h1>
        </section>
       
        <section class="content">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                  <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                <?php $c = 1; ?>
                @if($product)
                    <tr>
                      <td>{{$product->name}}</td>
                      <td>{{$product->description}}</td>
                      <td>@if($product->image)<img src="{{URL::asset($product->image)}}" id="photo" class="photo" alt="" width="150" height="200">>@else<span>No Image</span>@endif</td>
                    </tr>
                @endif
                </tbody>
              </table>
            </div>
          
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

  <!-- iCheck 1.0.1 -->
<script src="{{asset('lte/plugins/iCheck/icheck.min.js')}}"></script>

<!-- DataTables -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{asset('lte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="{{asset('lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
</body>


</script>
</html>
