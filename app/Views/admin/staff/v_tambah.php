<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$judul?></h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Staff/simpan')?>" method="post"enctype="multipart/form-data">
              
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama_staff">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="jabatan_staff">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Faceboook</label>
                  <div class="col-sm-12">
                  <input type="text" class="form-control" name="fb_staff">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-12">
                  <input type="text" class="form-control" name="x_staff">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-12">
                  <input type="text" class="form-control" name="ig_staff">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Photo</label>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="photo_staff">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form>
            </div> 
        </div> 
    </div> 
    </div>
</section>