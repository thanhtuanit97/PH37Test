<script src="assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/admin/js/toastr.min.js"></script>
 
  @if(session('thongbao'))
  <script type="text/javascript">
    toastr.success('{{session('thongbao')}}', 'Thông Báo', {timeOut: 5000});
  </script>
  @endif