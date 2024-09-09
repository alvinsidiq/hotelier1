<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$judul?></h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Testimoni/update')?>" method="post"enctype="multipart/form-data">
              <input type="text" class="form-control" name="id_testimoni"value="<?= $testimoni['id_testimoni'] ?>"hidden>     
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama_testimoni"value="<?= $testimoni['nama_testimoni'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="jabatan_testimoni"value="<?= $testimoni['jabatan_testimoni'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Testimoni</label>
                  <div class="col-sm-12">
                    <textarea class="form-control" style="height: 100px" name="testimoni"><?= $testimoni['testimoni'] ?>"></textarea>
                  </div>
                </div>
                <div class ="row">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ganti Photo</label>
                    <div class ="col-sm-4"><img src="<?=base_url('testimoni/'. $testimoni['photo_testimoni']) ?>" alt="" class ="img-fluid rounded-start"></div>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="photo_testimoni">
                  </div>
                </div>
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form>
            </div> 
        </div> 
    </div> 
  </div>
</section>
