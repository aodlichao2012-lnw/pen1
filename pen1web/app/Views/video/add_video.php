<div class="container mt-4">
    <div class="row">
        <h1>Add Video</h1>
        <hr>
        <div class="mt-3">
            <form action="<?= site_url('/VideoInsert'); ?>" method="post" name="add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="video_name">Video Name</label>
                    <input type="text" name="video_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="videot_link">Video Link</label>
                    <input type="text" name="videot_link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="video_pic">Video Picture</label>
                    <input type="file" name="video_pic" class="form-control" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="video_detail">Video Detail</label>
                    <textarea name="video_detail" class="form-control" id="editor" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-2" value="Add Data">
                    <a href="<?php echo site_url('/Video') ?>" class="btn btn-danger mt-2">Backward</a>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; PenNueng Holding 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo site_url('/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>





<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('vendor/chart.js/Chart.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>