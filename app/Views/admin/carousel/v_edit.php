<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$judul?></h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Carousel/update')?>" method="post"enctype="multipart/form-data">
              <input type="text" class="form-control" name="id_carousel"value="<?= $carousel['id_carousel'] ?>"hidden>
              <div class ="row">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ganti Photo</label>
                    <div class ="col-sm-4"><img src="<?=base_url('sliders/'. $carousel['photo']) ?>" alt="" class ="img-fluid rounded-start"></div>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="photo">
                  </div>
                </div>
              </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="judul_carousel"value="<?= $carousel['judul_carousel'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="ket_carousel"value="<?= $carousel['ket_carousel'] ?>">
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