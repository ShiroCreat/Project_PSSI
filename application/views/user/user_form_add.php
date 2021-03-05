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
          <h3 class="box-title">Add Pemain</h3>
          <div class="text-right">
            <a href="<?=base_url('user')?>" class="btn btn-warning">
              <i class="fa fa-undo"></i>
              Back
            </a>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
          	<div class="col-md-4">
          		<form>
          			<div class="form-group">
						<label>Name *</label>
						<input type="text" name="fullname" class="form-control">          				
          				<label>Password *</label>
						<input type="password" name="password" class="form-control">
						<label>Adress *</label>
						<textarea type="text" name="adress" class="form-control"></textarea>
						<label>Level *</label>
						<select type="text" name="level" class="form-control"></select>
							<option value=""> Pilih </option>
							<option value="1"> Admin </option>
							<option value="2"> User </option>       	           		
          			</div>
          			<div class="form-group">
          				<div class="btn ">
          					
          				</div>
          			</div>
          		</form>
          	</div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>