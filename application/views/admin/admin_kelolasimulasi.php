<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | Admin - Senedu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php include "application/views/Source//adminSources.php" ?>
</head>

<body>
    <div id="wrapper">
        <?php include "application/views/admin/admin_sidebar.php" ?>
        <div id="main-content" style="background-color:#edf1f4">
            <div class="container-fluid">
                <div class="section-heading clearfix">
                    <h2 class="section-title"><i class="fa fa-book"></i> Kelola Simulasi </h2>
                </div>

                <div class="card" style="background-color:#fff" style="">
                    <div class="row">
                        <div align="center" class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="card-body" style="padding:5%">
                                            <p class="card-text">Jumlah peserta yang mendaftar adalah <b>150 Peserta</b> lihat peserta</p>
                                            <button type="submit" class="btn btn-primary">Tutup Pendaftaran</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="card-img-bottom" style="width:100%" src="<?php echo base_url()?>assets/images/elearning.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:1%">
                    <div class="col-md-6 btn-group">
                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-plus-square"></i>Tiket (500)</button>
                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> lihat Sementara</button>
                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Pasca Simulasi</button>
                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</button>
                    </div>
                </div>
                <div class="card" style="background-color:#fff; padding:2%">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="heading">Informasi Simulasi <div class="btn btn-success btn-xs">Online</div>
                            </h4>
                            <div class="row" style="margin-top:1%">
                                <div class="col-md-4">
                                    <h7>Judul Simulasi</h7>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nama Simulasi">
                                </div>
                                <div class="col-md-4">
                                    <h7>Judul Ujian Simulasi</h7>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nama Ujian">
                                </div>
                                <div class="col-md-4">
                                    <h7>Instansi Penyelenggara</h7>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nama Penyelenggara">
                                </div>
                            </div>
                            <div class="row" style="margin-top:1%">
                                <div class="col-md-4">
                                    <h7>Tempat Pelaksanaan</h7>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Lokasi Simulasi">
                                </div>
                                <div class="col-md-4">
                                    <h7>Tanggal Pelaksanaan</h7>
                                    <br>
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h7>Tanggal Pengunguman</h7>
                                    <br>
                                    <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:1%">
                                <div class="col-md-4">
                                    <h7>Harga</h7>
                                    <br>
                                    <input type="number" class="form-control" placeholder="harga">
                                </div>
                                <div class="col-md-4">
                                    <h7>Judul Simulasi</h7>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nama Simulasi">
                                </div>
                            </div>
                            <div class="row" style="padding-left:2%; padding-top:2%; padding-bottom:2%">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i>Simpan Perubahan</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputFile" class="control-label">Pilih Gambar</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block"><em>Pilih gambar untuk dijadikan cover</em></p>
                            </div>
                            <img class="card-img-bottom" style="width:140px" src="<?php echo base_url()?>assets/images/elearning.jpg">
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-left:2%">
                    <div class="col-md-6" style="padding-top:2%">
                        <div class="row" style="background-color:#fff; margin-bottom:2%">
                            <div class="card">
                                <div class="row" style="margin-top:2%; margin-left:2%; margin-right:2%">
                                    <button type="submit" class="btn btn-default btn-sm"> + Tambah Kegiatan</button>
                                    <hr style="border-top:1px solid grey">
                                    <h5 align="center"><b>KEGIATAN</b></h5>
                                    <hr style="border-top:1px solid grey">
                                </div>
                                <div class="row" style="margin-left:2%; margin-right:2%">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Waktu & Tempat</th>
                                                <th>Tempat</th>
                                                <th>Agenda</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="background-color:#fff;padding-top:2%">
                            <div class="card">
                                <div class="row" style="margin-top:2%; margin-left:2%; margin-right:2%">
                                    <button type="submit" class="btn btn-default btn-sm"> + Tambah jadwal Online</button>
                                    <button type="submit" class="btn btn-default btn-sm"> + Atur Peserta Online</button>
                                    <hr style="border-top:1px solid grey">
                                    <h5 align="center"><b>JADWAL TRY OUT ONLINE</b></h5>
                                    <hr style="border-top:1px solid grey">
                                </div>
                                <div class="row" style="margin-left:2%; margin-right:2%">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Waktu</th>
                                                <th>Kuota Peserta</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>19 september 2019</td>
                                                <td>
                                                    <div class="progress ">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                            75%
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button> <button type="button" class="btn btn-success btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-download"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding:2%">
                        <div class="row">
                             <div align="center" class="col-md-6">
                                <div class="card-body"  style="background-color:#fff; padding:2%";>
                                     <img class="card-img-bottom" style="width:10%; padding-top:10%" src="<?php echo base_url()?>assets/images/note.png">
                                    <h6 class="card-title" style="margin:4%">JAWABAN & SOAL BELUM DIBUAT</h6>
                                    <a href="#" class="btn btn-warning btn-xs" style="margin:2%; margin-bottom:10%">BUAT SOAL & KUNCI JAWABAN</a>
                                </div>
                            </div>
                            <div align="center" class="col-md-6">
                                <div class="card-body"  style="background-color:#fff; padding:2%";>
                                     <img class="card-img-bottom" style="width:10%; padding-top:10%" src="<?php echo base_url()?>assets/images/phonebook.png">
                                    <h6 class="card-title" style="margin:4%">BELUM ADA PENGAWAS</h6>
                                    <a href="#" class="btn btn-warning btn-xs" style="margin:2%; margin-bottom:10%">TAMBAH PENGAWAS</a>
                                </div>
                            </div>
                            
                        </div>
                         <div align="center" class="row" style="padding-top:5%">
                              <div align="center" class="col-md-6">
                                <div class="card-body"  style="background-color:#fff; padding:2%";>
                                     <img class="card-img-bottom" style="width:10%; padding-top:10%" src="<?php echo base_url()?>assets/images/whatsapp.png">
                                    <h6 class="card-title" style="margin:4%">GROUP CHAT WHATSAPP</h6>
                                    <a href="#" class="btn btn-default btn-xs" style="margin:2%; margin-bottom:10%">KELOLA GROUP</a>
                                </div>
                            </div>
                              <div align="center" class="col-md-6">
                                <div class="card-body"  style="background-color:#fff; padding:2%";>
                                     <img class="card-img-bottom" style="width:10%; padding-top:10%" src="<?php echo base_url()?>assets/images/scanner.png">
                                    <h6 class="card-title" style="margin:4%">UPLOAD SCAN JAWABAN</h6>
                                    <a href="#" class="btn btn-default btn-xs" style="margin:2%; margin-bottom:10%">UPLOAD JAWABAN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <?php include "application/views/Source/sidebarFooter.php" ?>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
</body>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    $('#progress-format1 .progress-bar').progressbar({
        display_text: 'fill'
    });

    $('#progress-format2 .progress-bar').progressbar({
        display_text: 'fill',
        use_percentage: false
    });

    $('#progress-custom-format .progress-bar').progressbar({
        display_text: 'fill',
        use_percentage: false,
        amount_format: function(p, t) {
            return p + ' of ' + t;
        }
    });

    $('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
        display_text: 'fill'
    });

    $('.progress.vertical .progress-bar').progressbar();
    $('.progress.vertical.wide .progress-bar').progressbar({
        display_text: 'fill'
    });

</script>

</html>
