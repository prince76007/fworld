 <!-- /.content-wrapper -->
 
   <!-- /.content -->
  </div>
  <footer class="main-footer">
    
      <div class="pull-right hidden-xs">
         <b>   Version</b> 2.3.2
      </div>
      <strong>Copyright &copy; 2020-2021 <a href="#">ksbm  </a>.</strong> All rights
      reserved. 
    
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->




<!-- jQuery 2.2.3 -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $base_path; ?>/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="<?php echo $base_path; ?>/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_path; ?>/assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --><!-- 
<script src="<?php echo $base_path; ?>/assets/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $base_path; ?>/assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo $base_path; ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_path; ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo $base_path; ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo $base_path; ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- select2 -->
<script src="<?php echo $base_path; ?>/assets/plugins/select2/select2.full.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

  })
 

 //Date picker
    $('.datepickers').datepicker({
      autoclose: true
    });

 $(".getmsgbtn").click(function(){  
             var nmsg=$(this).attr('lang');
               
                    $('.notimsg').html('');
                    $('.notimsg').append(nmsg);
    }); 

</script>
</body>
</html>

