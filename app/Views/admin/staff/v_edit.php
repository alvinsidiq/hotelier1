<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$judul?></h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Staff/update')?>" method="post"enctype="multipart/form-data">
              <input type="text" class="form-control" name="id_staff"value="<?= $staff['id_staff'] ?>"hidden>     
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama Staff</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama_staff"value="<?= $staff['nama_staff'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="jabatan_staff"value="<?= $staff['jabatan_staff'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="fb_staff"value="<?= $staff['fb_staff'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="x_staff"value="<?= $staff['x_staff'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="ig_staff"value="<?= $staff['ig_staff'] ?>">
                  </div>
                </div>
                <div class ="row">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ganti Photo</label>
                    <div class ="col-sm-4"><img src="<?=base_url('staff/'. $staff['photo_staff']) ?>" alt="" class ="img-fluid rounded-start"></div>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="photo_staff">
                  </div>
                </div>
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form>
            </div> 
        </div> 
    </div> 
  </div>
</section>
