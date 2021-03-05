
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="CMS - Sistem Informasi dan Admininstrasi PSSI (SIAP)"/>
        <meta name="author" content="Ivan Lubis"/>
        <meta name="creator" content="Ivan Lubis"/>
        <meta name="robots" content="noindex" />
        
        <title>Sistem Informasi dan Admininstrasi PSSI (SIAP) : Verifikasi Pemain Asing</title>
        <link rel="icon" type="image/png" href="/assets/default/img/favicon.png">
        <!-- Bootstrap Core CSS -->
        <link href="/assets/adminlte2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Font Awesome -->
        <link href="/assets/adminlte2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!-- Ionicons -->
        <link href="/assets/adminlte2/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

        <!-- DataTables -->
        <link href="/assets/default/vendor/datatables/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- DataTables Responsive CSS -->
        <link href="/assets/default/vendor/datatables/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css"/>

        <!-- Theme style -->
        <link href="/assets/adminlte2/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/adminlte2/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css"/>

        <!-- iCheck -->
        <link href="/assets/adminlte2/vendor/iCheck/all.css" rel="stylesheet" type="text/css"/>

        <!-- Date Picker -->
        <link rel="stylesheet" href="/assets/adminlte2/vendor/datepicker/datepicker3.css">

        <!-- Daterange picker -->
        <link rel="stylesheet" href="/assets/adminlte2/vendor/daterangepicker/daterangepicker-bs3.css">

        <!-- Jasny Bootstrap -->
        <link href="/assets/adminlte2/vendor/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet"/>

        <!-- Custom CSS -->
        <link href="/assets/default/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/default/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="/assets/default/js/jquery.min.js"></script>
        
        <!-- DataTables JavaScript -->
        <script type="text/javascript" charset="utf8" src="/assets/default/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="/assets/default/vendor/datatables/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- global var js -->
        <script type="text/javascript">
            var base_url         = 'http://app.pssi.org/';
            var current_ctrl     = 'http://app.pssi.org/verifikasi_pemain_asing/';
            var current_url      = 'http://app.pssi.org/verifikasi_pemain_asing';
            var assets_url       = '/assets/adminlte2/';
            var token_name       = 'xmsfatoken';
            var token_key        = '755f3f892f2e4daa213808d538e4a396';
            var objToken         = {};
            objToken[token_name] = token_key;

            var add = '1';
            var edit = '1';
            var del = '1';
            var preview = '1';
        </script>
        <script src="/assets/adminlte2/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        
        <!-- Editor -->
        <script type="text/javascript" src="/assets/default/vendor/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                'selector': '.editorable',
                plugins: [
                    "code", 
                    "paste", 
                    "charmap", 
                    "link", 
                    "image",
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
                ],
                relative_urls: false,
                toolbar1: "undo redo | styleselect | bold italic | link image | alignleft aligncenter alignright alignjustify | bullist numlist charmap code",
                toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
                image_advtab: true,
                external_filemanager_path: "/assets/default/vendor/filemanager/",
                filemanager_title: "Filemanager",
                external_plugins: { "filemanager" : "/assets/default/vendor/filemanager/plugin.min.js"},
                paste_as_text: true,
                filemanager_access_key: 'bL!sn00pYbad-religion-back-!#_#!',
            });
        </script>

        <script src="/assets/default/js/custom.js"></script>
    </head>    
    <body class="adminlte2 hold-transition skin-blue sidebar-mini verifikasi_pemain_asing-index">
        <div class="wrapper">
            <header class="main-header">
                <a href="http://app.pssi.org/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>PSSI</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>PSSI</b></span>
                </a>
                <!--/.logo-->

                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!--/.sidebar-toggle-->

                    <div class="navbar-custom-menu">
                        <span class="app-title">PSSI</span>
                                                    <ul class="nav navbar-nav">
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                                <span class="hidden-xs">Hai! U17 PERSEMA 1953</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="user-header">
                                                                                        <p>
                                                U17 PERSEMA 1953                                                <small>Member since: June, 2018</small>
                                                <small>Last login: 24-08-2020 16:14</small>
                                            </p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="http://app.pssi.org/profile" class="btn btn-default btn-flat">Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="http://app.pssi.org/logout" class="btn btn-default btn-flat">Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--/.dropdown-menu-->
                                </li>
                                <!--/.user-menu-->
                            </ul>
                                                
                        <!--/.nav-->
                    </div>
                    <!--/.navbar-custom-menu-->

                </nav>
                <!--/.navbar-->
            </header>
            <!--/.main-header-->

            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <!-- <li><a href="http://app.pssi.org/Buku Panduan Sistem Registrasi.pdf"><span>BUKU PANDUAN</span></a></li> -->
                        <li><a href="http://app.pssi.org/dashboard"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
                        <li class="treeview"><a href="http://app.pssi.org/profile_klub"  ><i class="fa fa-bars"></i><span>Profile Klub</span></a></li><li class="treeview"><a href="#"  ><i class="fa fa-bars"></i><span>Transfer & Alih Status</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li class=""><a href="http://app.pssi.org/req_alih_status"  ><i class="fa fa-bars"></i><span>Permohonan Alih Status</span></a></li></ul></li><li class="treeview active"><a href="#"   active><i class="fa fa-bars"></i><span>Pendaftaran</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li class=""><a href="http://app.pssi.org/pendaftaran_pemain"  ><i class="fa fa-bars"></i><span>Pemain</span></a></li><li class=""><a href="http://app.pssi.org/pendaftaran_official"  ><i class="fa fa-bars"></i><span>Official</span></a></li><li class=" active"><a href="http://app.pssi.org/verifikasi_pemain_asing"   active><i class="fa fa-bars"></i><span>Verifikasi Pemain Asing</span></a></li></ul></li><li class="treeview"><a href="#"  ><i class="fa fa-bars"></i><span>Laporan</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li class=""><a href="#"  ><i class="fa fa-bars"></i><span>Pendaftaran</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li class=""><a href="http://app.pssi.org/report_reg_pemain"  ><i class="fa fa-bars"></i><span>Pemain</span></a></li><li class=""><a href="http://app.pssi.org/report_reg_official"  ><i class="fa fa-bars"></i><span>Official</span></a></li></ul></li><li class=""><a href="#"  ><i class="fa fa-bars"></i><span>Pengesahan</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu"><li class=""><a href="http://app.pssi.org/report_sah_pemain"  ><i class="fa fa-bars"></i><span>Pemain</span></a></li><li class=""><a href="http://app.pssi.org/report_sah_official"  ><i class="fa fa-bars"></i><span>Official</span></a></li></ul></li></ul></li>                    </ul>
                    <!--/.sidebar-menu-->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!--/.main-sidebar-->

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Verifikasi Pemain Asing</h1>
                    <ol class="breadcrumb">
                                                    <li class="">
                                <a href="http://app.pssi.org/verifikasi_pemain_asing">Verifikasi Pemain Asing</a>
                            </li>
                                                    <li class="">
                                <a href="#">Pendaftaran</a>
                            </li>
                                                    <li class="">
                                <a href="http://app.pssi.org/dashboard"><i class="fa fa-dashboard"></i> Beranda</a>
                            </li>
                                            </ol>
                    <!--/.breadcrumb-->
                </section>
                <!--/.content-header-->

                <section class="content">
                    <div class="flash-message persistent-message">
                                                                    </div>
                    <!--/.flash-message.persistent-message-->

                    <div class="row">
    <div class="col-xs-12">
        <div class="box box-dttables box-info">
            <div class="row top-cursor">
                <div class="col-md-4 col-md-offset-8 text-right">
                    <a href="http://app.pssi.org/verifikasi_pemain_asing/add" class="btn btn-success addAccess">Tambah</a>                    
                    <!-- <button type="button" class="btn btn-danger delete-record delAccess" id="delete-record">Cancel</button> -->
                </div>
            </div>
    
            <form action="http://app.pssi.org/verifikasi_pemain_asing" role="form" method="post" accept-charset="utf-8">
                                             <input type="hidden" name="xmsfatoken" value="755f3f892f2e4daa213808d538e4a396" id="no-dis" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_pertandingan">Nama Kompetisi <span class="text-danger">*</span></label>
                            <select name="id_pertandingan" id="id_pertandingan" class="form-control selectpicker" data-live-search="true">
                                <option value="">--Pilih--</option>
                                                            </select>
                        </div>
                                            </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_ref_status">Status<span class="text-danger">*</span></label>
                            <select name="id_ref_status" id="id_ref_status" class="form-control selectpicker" data-live-search="true">
                                <option value="">--Pilih--</option>
                                <option value='1'  >Belum Lengkap</option><option value='2'  >Dikembalikan</option><option value='3'  >Lengkap</option><option value='4'  >Proses Verifikasi</option><option value='5'  >Sah</option><option value='6'  >Cek</option><option value='7'  >Dicabut</option><option value='8'  >Ditolak</option><option value='9'  >Menunggu Pengesahan</option>                            </select>
                        </div>
                    </div>
                </div>
                <div class="row button-row">
                    <div class="col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Pencarian</button>

                    </div>
                </div>
                <!-- /.row (nested) -->
            </form>            <br>
            <hr>
            <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                <thead>
                    <tr>
                        <th data-searchable="false" data-orderable="false" data-name="actions" data-classname="text-center"></th>
                        <th data-name="nama_pemain">Nama Pemain</th>
                        <th data-name="no_id">NO ID</th>
                        <th data-name="tgl_lahir">Tanggal Lahir</th>
                        <th data-name="nama_negara">Kewarganegaraan</th>
                        <th data-name="klub_asal">Klub Asal</th>
                        <th data-name="fa_negara">FA Asal</th>
                        <th data-name="nama_pertandingan">Nama Kompetisi</th>
                                                <th data-name="nama_lookup">Status</th>
                        <th data-name="created_date" data-searchable="false">Create Date</th>
                        
                    </tr>
                </thead>
            </table>

            <br/><br/>
            <input type="hidden" id="delete-record-field"/>
            <div class="row">
                <div class="col-md-4 col-md-offset-8 text-right">
                    <a href="http://app.pssi.org/verifikasi_pemain_asing/add" class="btn btn-success addAccess">Tambah</a>
                    <!-- <button type="button" class="btn btn-danger delAccess" id="delete-record">Cancel</button> -->
                </div>
            </div>
        </div>
        <!--/.box-dttables-->
    </div>
</div>
<!--/.row-->
<br/><br/>

<!-- Start Modal Req Hapus Pemain-->
<div class="modal fade" id="myModalHapusPemain" tabindex="-1" role="dialog" aria-labelledby="myModalHapusPemainLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="http://app.pssi.org/verifikasi_pemain_asing/delete/" role="form" enctype="multipart/form-data" id="form-hapus-pemain" method="post" accept-charset="utf-8">
                                                                <input type="hidden" name="xmsfatoken" value="755f3f892f2e4daa213808d538e4a396" id="no-dis" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalHapusPemainLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="table-responsive">
                <table width="75%" class="table table-bordered" id="table-hapus-pemain">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Dokumen</th>
                            <th style="text-align: center;">Keterangan</th>
                            <th style="text-align: center;">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="input_hapus_pemain" id="row-1">
                            <td><input type="file" class="form-control" name="nama_file[]"></td>
                            <td><input type="text" class="form-control" name="caption_file[]"></td>
                            <td></td>
                        </tr>
                        <tr id="tambah-dokument">
                            <td colspan="2" align="center">
                                <a class="btn btn-primary" href="#" id="add_file" ><i class="icon-plus-sign "></i> Tambah Dokumen</a>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
            <div class="form-group alasan">
                    <label for="alasan" id="label-alasan">Alasan <span class="text-danger">*</span></label>
                    <input type="hidden" name="id_reg_pemain" id="id_reg_pemain" value=""></input>
                    <textarea id="alasan" name="alasan" class="form-control"></textarea>
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btn_save">Save </button>
      </div>
    </div>
  </div>
  </form></div>
<!-- End Modal Req Hapus Pemain-->

<!-- Start Modal Lihat Hapus Pemain-->
<div class="modal fade" id="myModalLihatHapusPemain" tabindex="-1" role="dialog" aria-labelledby="myModalLihatHapusPemainLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLihatHapusPemainLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="form-group deleted_by">
                <label for="deleted_by" id="label-deleted_by">Dihapus Oleh</label>
                <input type="text" name="deleted_by" id="deleted_by" value="" class="form-control" readonly="readonly"></input>
            </div>
            <div class="form-group deleted_date">
                <label for="deleted_date" id="label-deleted_date">Dihapus Tanggal</label>
                <input type="text" name="deleted_date" id="deleted_date" value="" class="form-control" readonly="readonly"></input>
            </div>
            <div class="form-group alasan" id="area-alesan">
                
                
            </div>
            <div class="form-group" id="area-tabel">
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- End Modal Req Lihat Pemain-->
<script type="text/javascript">
    $(function() {
        
        $('#dataTables-list').on('click', '.btn_lihat_hapus_reg', function() {
    
            var self = $(this);
            var id   = self.attr('data-id');
            var type = self.attr('data-type');
            var nama = self.attr('data-nama');

            // $('#id_reg_pemain').val(id);
            $('#myModalLihatHapusPemainLabel').html('Hapus Pemain '+nama);

            var data = [
                        {'name': 'id_registrasi_pemain', 'value': id}
                    ];
            submit_ajax('http://app.pssi.org/verifikasi_pemain_asing/lihat_hapus', data)
                .done(function(data) {                      
                    
                    $('#area-alesan').html(data['alasan_hapus']);$('#deleted_by').val(data['deleted_by']);
                    $('#deleted_date').val(data['deleted_date']);
                    $('#area-tabel').html(data['print_dokumen']);
            }); 
            $('#myModalLihatHapusPemain').modal('show');
            
        });

        $('#dataTables-list').on('click', '.btn_hapus_reg', function() {
    
            var self = $(this);
            var id   = self.attr('data-id');
            var type = self.attr('data-type');
            var nama = self.attr('data-nama');
        
            if(type == 1){
                var conf = confirm('Anda Yakin Akan Menghapus Pemain '+nama+'?');
                var url = 'http://app.pssi.org/verifikasi_pemain_asing/delete/'+id;
                if (conf) {
                    window.location = url;
                }
            }else{
                $('#id_reg_pemain').val(id);
                $('#myModalHapusPemainLabel').html('Hapus Pemain '+nama);
                $('#myModalHapusPemain').modal('show');
            }
        });
        
        $('#add_file').click(function(){
            var no = $(".input_hapus_pemain").length;
            no = no + 1;
            html = '<tr class="input_hapus_pemain" id="baris-' + no + '"><td><input type="file" class="form-control" name="nama_file[]"></td><td><input type="text" class="form-control" name="caption_file[]"></td><td><button type="button" class="btn btn-danger hapus_dok" data-id="' + no + '">Hapus</button></td></tr>';
            // $('.').iCheck('created');
            $(html).insertBefore('#tambah-dokument');
            
        });

        $('#table-hapus-pemain').on('click', '.hapus_dok', function() {
            var no_baris = $(this).data("id");
            var id = '#baris-'+no_baris;
            $(id).remove();
        });

        list_dataTables('#dataTables-list', 'http://app.pssi.org/verifikasi_pemain_asing/list_data');


    });
    
</script>
                </section>
                <!--/.content-->

            </div>
            <!--/.content-wrapper-->

            <footer class="main-footer text-center">
                © Copyright 2017            </footer>
            <!--/.main-footer-->

        </div>
        <!--/.wrapper-->
        
        <!-- /#dynamic-modal -->
        <div class="modal fade" id="dynamic-modal" tabindex="-1" role="dialog" aria-labelledby="dynamicModalLabel" aria-hidden="true">
           
        </div><!-- /#dynamic-modal -->

        <!-- modal view dokumen -->
        <div class="modal fade" id="modal-view-doc" tabindex="-1" role="dialog" aria-labelledby="modal-view-docModalLabel" aria-hidden="true">
            <!-- Modal Dialog -->
            <div class="modal-dialog">
                <!-- Modal Content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        Upload Foto
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true" type="button">Cancel</button>
                    </div>
                </div><!-- Modal Content -->
            </div><!-- Modal Dialog -->
        </div><!-- modal view dokumen -->

        <!-- Modal Upload Dokumen Hasil Pertandingan-->
        <div class="modal fade" id="UploadDokumenHasilPertandinganModal" tabindex="-1" role="dialog" aria-labelledby="UploadDokumenHasilPertandinganModalLabel" aria-hidden="true">
            <!-- Modal Dialog -->
            <div class="modal-dialog">
                <!-- Modal Content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        Upload Foto
                    </div>
                    <!-- <form action="http://app.pssi.org/data/upload_hasil_pertandingan" method="post" id="upload_hasil_pertandingan_form" name="upload_hasil_pertandingan_form" enctype="multipart/form-data"> -->
                    <form action="http://app.pssi.org/data/upload_hasil_pertandingan" role="form" enctype="multipart/form-data" id="upload_hasil_pertandingan_form" name="upload_hasil_pertandingan_form" method="post" accept-charset="utf-8">
                                                                                        <input type="hidden" name="xmsfatoken" value="755f3f892f2e4daa213808d538e4a396" id="no-dis" />
                        <div class="modal-body">
                            <div id="print-msg" class="error"></div>
                            <div class="form-group">
                                <label for="kategory_upload_hp" class="control-label">PILIH SECTION FOTO:</label>
                                <input type="hidden" name="id_upload_hp" id="id_upload_hp"></input>
                                <input type="hidden" name="url_upload_hp" id="url_upload_hp"></input>
                                <select name="kategory_upload_hp" id="kategory_upload_hp" class="form-control selectpicker cuma-baca">
                                    <option value=""></option>
                                    <option value="" disabled="disabled">------------------ H-2 ------------------</option>
                                    <option value="std-panorama">Panorama Stadion</option>
                                    <option value="std-rmedis">Stadion - Ruang Medis</option>
                                    <option value="std-rdoping">Stadion - Ruang Doping</option>
                                    <option value="std-rmedia">Stadion - Ruang Media</option>
                                    <option value="std-rgantipemain">Stadion - Ruang Ganti Pemain</option>
                                    <option value="std-rgantiwasit">Stadion - Ruang Ganti Wasit</option>
                                    <option value="std-rkonpers">Stadion - Ruang Konferensi Pers</option>
                                    <option value="std-tvip">Stadion - Tribun VIP</option>
                                    <option value="std-tmedia">Stadion - Tribun Media</option>
                                    <option value="std-loket">Stadion - Loket Penjualan Tiket</option>
                                    <option value="std-parkir">Stadion - Parkir</option>
                                    <option value="std-ruangmc">Stadion - Ruang Match Coordinator</option>
                                    <option value="" disabled="disabled">------------------ H-1 ------------------</option>
                                    <option value="mcm">Match Coordination Meeting</option>
                                    <option value="pre-mpc">Pre Match Press Conference</option>
                                    <option value="gladi">Gladi Bersih</option>
                                    <option value="ot">Official Training</option>
                                    <option value="masalah">Masalah</option>
                                    <option value="" disabled="disabled">---------------- Match ----------------</option>
                                    <option value="match-data">Match Data</option>
                                    <option value="incident">Time Incident</option> 
                                    <option value="" disabled="disabled">------------- Post Match -------------</option>
                                    <option value="post-mpc">Post Match Press Conference</option>           
                                    <option value="post-lapsus">Laporan Khusus</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file_upload" class="control-label">File:</label>
                                <div class="areauploadfile">
                                    <input type="file" name="file_upload[]">
                                </div>  
                                <a class="btn btn-primary" style="margin-top:5px;" onclick="$('.areauploadfile').append('<input type=\'file\' name=\'file_upload[]\'>');">+</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" id="save_upload_hasil_pertandingan" type="submit">Save</button>
                            <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true" type="button">Cancel</button>
                        </div>
                    </form>
                </div><!-- Modal Content -->
            </div><!-- Modal Dialog -->
        </div>
        <!-- Modal Upload Dokumen Hasil Pertandingan-->

        <!-- Bootstrap Core JavaScript -->
        <script src="/assets/adminlte2/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- jQuery UI 1.11.4 --
        <script src="/assets/adminlte2/js/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        -->

        <!-- daterangepicker -->
        <script src="/assets/adminlte2/vendor/daterangepicker/moment.min.js"></script>
        <script src="/assets/adminlte2/vendor/daterangepicker/daterangepicker.js"></script>

        <!-- datetimepicker -->
        <link href="/assets/adminlte2/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <script src="/assets/adminlte2/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

        <!-- datepicker -->
        <script src="/assets/adminlte2/vendor/datepicker/bootstrap-datepicker.js"></script>

        <!-- Slimscroll -->
        <script src="/assets/adminlte2/vendor/slimScroll/jquery.slimscroll.min.js"></script>

        <!-- FastClick -->
        <script src="/assets/adminlte2/vendor/fastclick/fastclick.min.js"></script>

        <!-- AdminLTE App -->
        <script src="/assets/adminlte2/js/app.min.js"></script>
        
        <!-- Numeric -->
        <script src="/assets/default/js/jquery.numeric.min.js"></script>
        
        <!-- selectpicker -->
        <link href="/assets/default/vendor/bootstrap-selectpicker/css/bootstrap-select.min.css" rel="stylesheet"/>
        <script type="text/javascript" src="/assets/default/vendor/bootstrap-selectpicker/js/bootstrap-select.min.js"></script>

        <!-- iCheck 1.0.1 -->
        <script src="/assets/adminlte2/vendor/iCheck/icheck.min.js"></script>
        
        <script type="text/javascript">
            $(function() {
                $('.delete-picture-mc').click(function() {
                    $('.flash-message').empty();
                    var self = $(this);
                    var type = self.attr('data-type');
                    var data = [
                        {'name': 'type', 'value': type}
                    ];
                    submit_ajax(base_url+'data/delete_picture_mc', data, self)
                        .done(function(data) {
                            if (data['error'])  {
                                $('.flash-message').html(data['error']);
                            }
                            if (data['success']) {
                                $('.flash-message').html(data['success']);
                                $('.foto-mc-'+ type).remove();
                                self.remove();
                            }
                        });
                });

                $(".upload_foto_hasil_pertandingan").click(function() {
                    var self = $(this);
                    var id   = self.attr('data-id');
                    var type = self.attr('data-type');
                    var url = self.attr('data-url');

                    $('#kategory_upload_hp').val(type);
                    $("#kategory_upload_hp").selectpicker("refresh");
                    $('#id_upload_hp').val(id);
                    $('#url_upload_hp').val(url);
                    $('#UploadDokumenHasilPertandinganModal').modal('show');
                });

                $("#no-dis").removeAttr('disabled');
                // tabs
                $('#tabster ul a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });

                // dynamic modal
                $("#dynamic-modal").on('hidden.bs.modal', function(e) {
                    e.preventDefault();
                    $("#dynamic-modal").empty();
                });

                // date picker
                $('.datepicker, .input-group.date').datepicker({
                    keyboardNavigation: false,
                    autoclose: true,
                    todayHighlight: true,
                    format: "yyyy-mm-dd"
                });

                // date range picker
                $(' .daterangepicker, .daterangepicker input, .daterangepicker .input-group.date').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    format: "YYYY/MM/DD"
                });

                $('.datetimepicker').datetimepicker({
                    'ignoreReadonly':true,
                    'format':'YYYY-MM-DD HH:mm'
                });

                $('.timepicker').datetimepicker({
                    'ignoreReadonly':true,
                    'format':'HH.mm'
                });
                // select picker
                $('.selectpicker').selectpicker();

      
                //Flat color scheme for iCheck
                $('.iCheckBox, input[type=checkbox]').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    // checkboxClass: 'icheckbox_flat-green',
                    // radioClass: 'iradio_flat-green'
                });
                $('input[type=checkbox].no-icheckbox').iCheck('destroy');

                // number only
                $(document).on('keyup change', '.number-only', function() {
                    $(this).numeric();
                });
            });
            $(document).ajaxSuccess(function( event, request, settings, data) {
                if (typeof data['redirect_auth'] !== 'undefined') {
                    window.location = base_url + data['redirect_auth'];
                    return;
                }
            });
        </script>

    </body>

</html>
