<footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Rumah Sakit Borneo Citra Medika </span>
                </div>
              </footer>
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="/assets/vendors/chart.js/chart.umd.js"></script>
        <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="/assets/js/off-canvas.js"></script>
        <script src="/assets/js/misc.js"></script>
        <script src="/assets/js/settings.js"></script>
        <script src="/assets/js/todolist.js"></script>
        <script src="/assets/js/jquery.cookie.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="/assets/js/dashboard.js"></script>
        <!-- <script src="/assets/js/jquery.dataTables.min.js"></script>
        <script src="/assets/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/js/select2.min.js"></script> -->
        <!-- End custom js for this page -->
         <script>
          function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
      
              return false;
            return true;
          }
          
          function hanyaHuruf(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            // Izinkan huruf (A-Z, a-z), spasi (32), titik (46), koma (44), dan petik satu (39)
            if (charCode > 31 && 
              !(charCode >= 65 && charCode <= 90) &&  // A-Z
              !(charCode >= 97 && charCode <= 122) && // a-z
              charCode !== 32 && // spasi
              charCode !== 46 && // titik (.)
              charCode !== 44 && // koma (,)
              charCode !== 39) { // petik satu (')
              return false;
            }
            return true;
          }
         </script>
</body>

</html>