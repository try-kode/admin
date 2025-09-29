  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
      </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
          Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }} "></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

  <!-- Toastr -->
  <script src="{{ asset('admin/plugins/toastr/toastr.min.js') }} "></script>

  <!-- Select2 -->
  <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}  "></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="{{ asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}  "></script>



  <!-- DataTables  & Plugins -->
  <script src="https://cdn.viheakode.online/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/jszip/jszip.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="https://cdn.viheakode.online/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.min.js') }} "></script>

  <script src="{{ asset('admin/js/useriii.js') }} "></script>


  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });

          $('#example3').DataTable({
              "paging": false,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": false,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>

  </body>

  </html>
