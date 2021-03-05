<div class="content">
        <section class="content-body">
            <h1>Permohonan Alih Status</h1>
                <ol class="breadcrumb">
                    <li class="">
                        <a href="http://app.pssi.org/req_alih_status">Permohonan Alih Status</a>
                    </li>                                
                    <li class="">
                        <a href="#">Transfer & Alih Status</a>
                    </li>
                    <li class="">
                        <a href="http://app.pssi.org/dashboard"><i class="fa fa-dashboard"></i> Beranda</a>
                    </li>
                </ol>
            </section>

        <form action="http://app.pssi.org/req_alih_status" role="form" method="post" accept-charset="utf-8">

            <input type="hidden" name="xmsfatoken" value="464a7bc668505b2a57f106daa9182fc9" id="no-dis" />

                <div class="card">

                    <div class="row top-cursor">
                        <div class="col-md-4 col-md-offset-8 text-right">
                            <button href="" type="button" class="btn btn-success addAccess">Add</button>   
                            <button type="button" class="btn btn-danger delete-record delAccess" id="delete-record">Cancel</button>
                       </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type_alih_status">Type Alih Status</label>
                                    <div class="input-group">
                                        <label class="radio-inline">
                                            <input type="radio" id="type_alih_status_p" name="type_alih_status" value="Pro-Amatir"  class="iCheckBox">Pro-Amatir</input>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" id="type_alih_status_a" name="type_alih_status" value="Amatir-Pro"  class="iCheckBox">Amatir-Pro</input>
                                        </label>
                                     </div>

                                    <div class="form-group hide">
                                        <label for="id_klub_lama">Klub Lama </label>
                                            <select name="id_klub_lama" id="id_klub_lama" class="form-control selectpicker" data-live-search="true">
                                                 <option value="">Pilih</option>
                                            </select>    
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_ref_status">Status</label>
                                                <select name="id_ref_status" id="id_ref_status" class="form-control selectpicker" data-live-search="true">
                                                    <option value="">--Pilih--</option>
                                                    <option value='1'  >Draft</option>
                                                    <option value='2'  >Awaiting Confirmation Player</option>
                                                    <option value='3'  >Awaiting Verification</option>
                                                    <option value='4'  >Awaiting Delivery</option>
                                                    <option value='5'  >Closed</option>
                                                    <option value='6'  >Return</option>
                                                    <option value='7'  >Rejected</option>
                                                    <option value='8'  >Accept Rejected</option>
                                                    <option value='9'  >Dispute</option>
                                                    <option value='10'  >Cancel</option>
                                                    <option value='11'  >Awaiting</option>
                                                    <option value='12'  >Awaiting Approval</option>                            
                                                </select>
                                        </div>                         
                                    </div>

                                    <div class="row button-row">
                                        <div class="col-md-12 text-left">
                                            <button type="submit" class="btn btn-primary">Pencarian</button>

                                        </div>
                                    </div>

                            </div>

                        </div>

                    </div>

                </div>

        </form>

          <div class="card">
            <table class="table table-striped table-bordered table-hover" id="dataTables-list">
                <thead>
                    <tr>
                        <th data-searchable="false" data-orderable="false" data-name="actions" data-classname="text-center"></th>
                        <th data-name="nama_pemain">Nama Pemain</th>
                        <th data-name="no_id">No ID</th>
                        <th data-name="tgl_lahir">Tanggal Lahir</th>
                        <th data-name="nama_klub_lama">Klub Lama</th>
                        <th data-name="nama_klub_baru">Klub Baru</th>
                        <!-- <th data-name="tgl_permintaan">Tanggal Permintaan</th> -->
                        <th data-name="type_alih_status">Type Alih Status</th>
                        <th data-name="NAMA_LOOKUP">Status</th>
                        <th data-name="create_date" data-searchable="false">Create Date</th>
                        <!-- <th data-searchable="false" data-orderable="false" data-name="pesan" data-classname="text-center">Pesan</th> -->
                    </tr>
                </thead>
                 <tbody>
              <?php $no = 1;
              foreach($row->result() as $key => $data)
              { ?>
               <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->name ?></td>
                <td><?= $data->id_status ?></td>
                <td><?= $data->date_birth ?></td>
                <td><?= $data->old_club ?></td>
                <td><?= $data->new_club ?></td>
                <td><?= $data->type_status ?></td>
                <td><?= $data->status ?></td>
                <td class="text-center" width="160px">
                  <a href="<?=base_url('user/update')?>" class="btn btn-info btn-xs">
                    <i class="fa fa-pen"></i>
                    Update
                  </a>
                  <a href="<?=base_url('user/delete')?>" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i>
                    Delete
                  </a>
                </td>
              </tr>
              <?php
              } ?>
            </tbody>
            </table>
          
                <input type="hidden" id="delete-record-field"/>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8 text-right">
                            <a href="http://app.pssi.org/req_alih_status/add" class="btn btn-success addAccess">Add</a>
                            <button type="button" class="btn btn-danger delAccess" id="delete-record">Cancel</button>
                        </div>
                    </div>
            </div>        

</div>