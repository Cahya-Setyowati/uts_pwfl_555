  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io">Pemrograman Web Lanjut</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url ('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url ('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url ('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url ('assets/dist/js/demo.js') ?>"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url ('assets/plugins/flot/jquery.flot.js') ?>"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url ('assets//plugins/flot-old/jquery.flot.resize.min.js') ?>"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url ('assets/plugins/flot-old/jquery.flot.pie.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<script>
  $(function () {
    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Laki-laki',
        data : <?=$lk ?>,
        // data : 22,
        color: '#3c8dbc'
      },
      {
        label: 'Perempuan',
        data : <?=$pr ?>,
        color: '#0073b7'
      },
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0,
          label      : {
            show     : true,
            radius   : 1 / 2,
            formatter: labelFormatter,
            threshold: 0
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */



  });

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + series.data[0][1] + '</div>'
  }
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</body>
</html>