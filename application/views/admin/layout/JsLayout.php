<!--

 Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 Since Mar 31, 2016
 Time 4:30:57 PM
 Encoding UTF-8
 Project SPK-SAW
 Package Expression package is undefined on line 9, column 12 in Templates/Scripting/EmptyPHPWebPage.php.

-->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/nprogress.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#calonsiswa').DataTable();
        $('#kriteria').DataTable({
            'order': [[2, 'asc']]
        });
        $('#normalisasi').DataTable({
            'order': [[7, 'desc']]
        });
    });
</script>
