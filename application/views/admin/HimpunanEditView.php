<!DOCTYPE html>
<!--
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
    @Since Jun 19, 2016
    @Time 8:28:32 AM
    @Encoding UTF-8
    @Project SPK-SAW
    @Package Expression package is undefined on line 8, column 16 in Templates/Scripting/EmptyPHPWebPage.php.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SPK SAW</title>

        <?php $this->load->view('admin/layout/CssLayout') ?>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                <?php $this->load->view('admin/layout/HeaderLayout') ?>

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Edit Himpunan</h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php foreach ($himpunan as $h) { ?>
                                    <form method="post" action="<?php echo base_url(); ?>index.php/admin/HimpunanController/updateHimpunan">

                                        <div class="form-group">
                                            <label>ID Himpunan</label>
                                            <input type="text" value="<?php echo $h->id_himpunan; ?>" class="form-control" disabled>
                                            <input type="hidden" name="id_himpunan" value="<?php echo $h->id_himpunan; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Batas Atas</label>
                                            <input name="batas_atas" type="number" value="<?php echo $h->batas_atas; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Batas Bawah</label>
                                            <input type="number" name="batas_bawah" value="<?php echo $h->batas_bawah; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Nilai</label>
                                            <input type="text" name="nilai" value="<?php echo $h->nilai; ?>" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <?php $this->load->view('admin/layout/JsLayout') ?>
    </body>
</html>
