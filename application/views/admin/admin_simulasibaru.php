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
                    <h2 class="section-title"><i class="fa fa-book"></i> Buat Simulasi Baru </h2>
                </div>
                <div class="card" style="background-color:#fff">
                    <div class="row" style="padding:3%">
                        <div class="col-md-3">
                            <h7>Tingkat Sekolah</h7>
                            <br>
                            <select class="form-control">
                                <option value="bootstrap">Bootstrap</option>
                                <option value="bootstrap-marketplace">Bootstrap Marketplace</option>
                                <option value="bootstrap-theme">Bootstrap Theme</option>
                                <option value="html">HTML</option>
                                <option value="html-template">HTML Template</option>
                                <option value="wp-marketplace">WordPress Marketplace</option>
                                <option value="wp-plugin">WordPress Plugin</option>
                                <option value="wp-theme">WordPress Theme</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <h7>Judul Simulasi</h7>
                            <br>
                            <input type="text" class="form-control" placeholder="Nama Simulasi">
                        </div>

                        <div class="col-md-3">
                            <h7>Instansi Pelaksana</h7>
                            <br>
                            <input type="text" class="form-control" placeholder="Nama Instansi">
                        </div>

                        <div class="col-md-3">
                            <h7>Harga</h7>
                            <br>
                            <input type="number" class="form-control" placeholder="harga">
                        </div>
                    </div>
                    <div class="row" style="padding-left:3%; padding-right:3%; padding-bottom:2%">
                        <div class="col-md-3">
                            <h7>Jenis Simulasi</h7>
                            <br>
                            <select class="form-control">
                                <option value="bootstrap">Bootstrap</option>
                                <option value="bootstrap-marketplace">Bootstrap Marketplace</option>
                                <option value="bootstrap-theme">Bootstrap Theme</option>
                                <option value="html">HTML</option>
                                <option value="html-template">HTML Template</option>
                                <option value="wp-marketplace">WordPress Marketplace</option>
                                <option value="wp-plugin">WordPress Plugin</option>
                                <option value="wp-theme">WordPress Theme</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <h7>Tanggal Pelaksanaan</h7>
                            <br>
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h7>Tempat Pelaksanaan</h7>
                            <br>
                            <input type="text" class="form-control" placeholder="Nama Tempat">
                        </div>

                        <div class="col-md-3">
                            <h7>Tanggal Penguguman</h7>
                            <br>
                            <div class="input-group date" data-date-autoclose="true" data-provide="datepicker">
                                <input type="text" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="padding-left:3%; padding-right:3%; padding-bottom:1%">
                            <div class="panel-content">
                                <h7>Upload Foto</h7>
                                <input type="file" class="dropify">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:4%; padding-right:3%; padding-bottom:3%">
                        <button type="submit" class="btn btn-primary">Simpan Simulasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "application/views/Source/sidebarFooter.php" ?>
    <script>
        $(function() {

            // Masked Inputs
            $('#phone').mask('(999) 999-9999');
            $('#phone-ex').mask('(999) 999-9999? x99999');
            $('#tax-id').mask('99-9999999');
            $('#ssn').mask('999-99-9999');
            $('#product-key').mask('a*-999-a999');


            // Multiselect
            $('#multiselect1, #multiselect2, #single-selection, #multiselect5, #multiselect6').multiselect({
                maxHeight: 300
            });

            $('#multiselect3-all').multiselect({
                includeSelectAllOption: true,
            });

            $('#multiselect4-filter').multiselect({
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                maxHeight: 200
            });

            $('#multiselect-size').multiselect({
                buttonClass: 'btn btn-default btn-sm'
            });

            $('#multiselect-link').multiselect({
                buttonClass: 'btn btn-link'
            });

            $('#multiselect-color').multiselect({
                buttonClass: 'btn btn-primary'
            });

            $('#multiselect-color2').multiselect({
                buttonClass: 'btn btn-success'
            });


            // Date picker
            $('.inline-datepicker').datepicker({
                todayHighlight: true
            });

            $('.dropify').dropify();

            var drEvent = $('#dropify-event').dropify();
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

        });

    </script>
</body>

</html>
