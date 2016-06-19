<!DOCTYPE html>
<!--

    @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
    @Since Apr 21, 2016
    @Time 10:18:45 PM
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

                                        <table id="calonsiswa" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>NISN</th>
                                                    <th>Nama</th>
                                                    <th>Nilai Peminatan</th>
                                                    <th>Nilai Hasil Pendekatan Psikotest</th>
                                                    <th>Nilai Placementtes</th>
                                                    <th>Nilai Raport</th>
                                                    <th>Nilai UN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($nilai_calon_siswa as $n) { ?>
                                                    <tr>
                                                        <td><?php echo $n->nisn; ?></td>
                                                        <td><?php echo $n->nama; ?></td>
                                                        <td><?php echo $n->c1; ?></td>
                                                        <td><?php echo $n->c2; ?></td>
                                                        <td><?php echo $n->c3; ?></td>
                                                        <td><?php echo $n->c4; ?></td>
                                                        <td><?php echo $n->c5; ?></td>
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