

       
    <body class="adminlte2 hold-transition skin-blue sidebar-mini pendaftaran_pemain-index">
        <div class="wrapper">
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Pemain</h1>
                    <ol class="breadcrumb">
                                                    <li class="">
                                <a href="http://app.pssi.org/pendaftaran_pemain">Pemain</a>
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
                    <a href="http://app.pssi.org/pendaftaran_pemain/add" class="btn btn-success addAccess">Tambah</a>                    
                    <!-- <button type="button" class="btn btn-danger delete-record delAccess" id="delete-record">Cancel</button> -->
                </div>
            </div>
    
            <form action="http://app.pssi.org/pendaftaran_pemain" role="form" method="post" accept-charset="utf-8">
<input type="hidden" name="xmsfatoken" value="755f3f892f2e4daa213808d538e4a396" id="no-dis" />                                                                             
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_pertandingan">Nama Kompetisi <span class="text-danger">*</span></label>
                            <select name="id_pertandingan" id="id_pertandingan" class="form-control selectpicker" data-live-search="true">
                                <option value="">--Pilih--</option>
                                <option value='_c7e1249ffc03eb9ded908c236bd1996d'  >Piala Soeratin U17 2018  JAWA TIMUR</option><option value='_c0e190d8267e36708f955d7ab048990d'  >SOERATIN U17 2019 JAWA TIMUR</option>                            </select>
                        </div>
                                            </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_ref_status">Status<span class="text-danger">*</span></label>
                            <select name="id_ref_status" id="id_ref_status" class="form-control selectpicker" data-live-search="true">
                                <option value="">--Pilih--</option>
                                <option value='1'  >Belum Lengkap</option><option value='2'  >Dikembalikan</option><option value='3'  >Lengkap</option><option value='4'  >Cek</option><option value='5'  >Sah</option><option value='6'  >Permintaan Dicabut</option><option value='7'  >Dicabut</option><option value='8'  >Ditolak</option>                            </select>
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
                        <th data-name="tgl_lahir">Tanggal Lahir</th>
                        <th data-name="nama_pertandingan">Nama Kompetisi</th>
                                                <th data-name="no_punggung">NPG</th>
                        <th data-name="posisi_pemain">Posisi</th>
                        <th data-name="nama_lookup">Status</th>
                        <th data-name="created_date" data-searchable="false">Create Date</th>
                        
                    </tr>
                </thead>
            </table>

            <br/><br/>
            <input type="hidden" id="delete-record-field"/>
            <div class="row">
                <div class="col-md-4 col-md-offset-8 text-right">
                    <a href="http://app.pssi.org/pendaftaran_pemain/add" class="btn btn-success addAccess">Tambah</a>
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
    <form action="http://app.pssi.org/pendaftaran_pemain/delete/" role="form" enctype="multipart/form-data" id="form-hapus-pemain" method="post" accept-charset="utf-8">
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

        

       
      

    </body>

