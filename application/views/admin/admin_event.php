<!doctype html>
<html lang="en">

<head>
    <style>
        link rel="stylesheet"type="text/css"href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/

    </style>
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
                    <h2 class="section-title"><i class="fa fa-book"></i> Event </h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div align="left" style="padding-top:3%; padding-bottom:2%">
                            <button type="button" class="btn btn-primary btn-fill "> + Buat Simulasi Baru</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Judul Simulasi</th>
                                        <th>Tingkat Sekolah</th>
                                        <th>Pelaksanaan</th>
                                        <th>Harga</th>
                                        <th>Peserta</th>
                                        <th>Publish</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>System Architect</td>
                                        <td>Tiger Nixon</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><span class="sr-only">Delete</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-xs" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Judul Simulasi</th>
                                        <th>Tingkat Sekolah</th>
                                        <th>Pelaksanaan</th>
                                        <th>Harga</th>
                                        <th>Peserta</th>
                                        <th>Publish</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
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

</script>

</html>
