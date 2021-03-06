<!DOCTYPE html>
<!--
    
    @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
    @Since May 28, 2016
    @Time 6:23:17 PM
    @Encoding UTF-8
    @Project SPK-SAW
    @Package Expression package is undefined on line 9, column 16 in Templates/Scripting/EmptyPHPWebPage.php.

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
                                <h3>Edit Kriteria</h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php foreach ($kriteria as $k) { ?>
                                    <form method="post" action="<?php echo base_url(); ?>index.php/admin/KriteriaController/updateKriteria">

                                        <div class="form-group">
                                            <label>ID Kriteria</label>
                                            <input type="text" value="<?php echo $k->id_kriteria; ?>" class="form-control" disabled>
                                            <input type="hidden" name="id_kriteria" value="<?php echo $k->id_kriteria; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Kriteria</label>
                                            <input name="kriteria" type="text" value="<?php echo $k->kriteria; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Bobot</label>
                                            <input type="text" name="bobot" value="<?php echo $k->bobot; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" value="<?php echo $k->keterangan; ?>" class="form-control">
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