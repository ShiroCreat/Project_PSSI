<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>user</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <a href="#">user</a>
              </li>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Pemain</h3>
          <div class="text-right">
            <a href="<?=base_url('user/add')?>" class="btn btn-primary">
              <i class="fa fa-user-plus"></i>
              Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Calling</th>
                <th>Image</th>
                <th>Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach($row->result() as $key => $data)
              { ?>
               <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->name ?></td>
                <td><?= $data->email ?></td>
                <td><?= $data->address ?></td>
                <td><?= $data->calling ?></td>
                <td><?= $data->image ?></td>
                <td><?= $data->level == 1 ? "Admin" : "User" ?></td>
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
        </div>
      </div>
      <!-- /.card -->

    </section>