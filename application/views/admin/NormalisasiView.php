<!DOCTYPE html>
<!--

    @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
    @Since Apr 22, 2016
    @Time 9:05:23 PM
    @Encoding UTF-8
    @Project Metode-SAW
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
                                <h3>Data Nilai Calon Siswa</h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">

                                        <a href="<?php echo base_url(); ?>index.php/admin/NormalisasiController/prosesNormalisasi">
                                            <button class="btn btn-primary">Proses Normalisasi</button>
                                        </a>

                                        <p></p>

                                        <table id="normalisasi" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>NISN</th>
                                                    <th>Nama</th>
                                                    <th>Nilai Peminatan</th>
                                                    <th>Nilai Hasil Pendekatan Psikotest</th>
                                                    <th>Nilai Placementtes</th>
                                                    <th>Nilai Raport</th>
                                                    <th>Nilai UN</th>
                                                    <th>Total Nilai</th>
                                                    <th>Rangking</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0;
                                                foreach ($normalisasi as $n) {
                                                    ++$i;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $n->nisn; ?></td>
                                                        <td><?php echo $n->nama; ?></td>
                                                        <td><?php echo $n->nilai_c1; ?></td>
                                                        <td><?php echo $n->nilai_c2; ?></td>
                                                        <td><?php echo $n->nilai_c3; ?></td>
                                                        <td><?php echo $n->nilai_c4; ?></td>
                                                        <td><?php echo $n->nilai_c5; ?></td>
                                                        <td><?php echo $n->total_nilai; ?></td>
                                                        <td><?php echo $i; ?></td>
                                                    </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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