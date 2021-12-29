</div>
</div>
<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                2015 - <script>
                    document.write(new Date().getFullYear())
                </script> &copy; UBold theme by <a href="layouts-horizontal.html">Coderthemes</a>
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>




 <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script> 
<script src="/assets/libs/jquery-toast-plugin/jquery.toast.min.js"></script>
<!--<script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>-->
<script src="/assets/js/sweetalert2.all.min.js"></script>

<!-- App js -->
<script src="/assets/js/app.min.js"></script>
<script src="/assets/libs/dropify/js/dropify.min.js"></script>
<script src="/assets/js/sysapp.js?v=<?php echo microtime() ?>"></script>
<script src="/assets/js/datatable.js?v=<?php echo microtime() ?>"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<?php if ($isJsFile) : ?><script>
        <?php $this->load->view('pages/' . $viewFolder . '/js/' . $jsFile);    ?>
    </script>
<?php endif;

if ($isModal) :

?>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
        <div class="modal-dialog <?php echo $modalSize . ' ' . $modalScrollable . ' ' . $modalPosition; ?>" role="document">
            <div class="modal-content">
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endif; ?>


</body>

</html>