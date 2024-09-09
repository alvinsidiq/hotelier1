<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?=$judul?></h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('Room/update')?>" method="post"enctype="multipart/form-data">
              <input type="text" class="form-control" name="id_room"value="<?= $room['id_room'] ?>"hidden>
              <div class ="row">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ganti Photo Room</label>
                    <div class ="col-sm-4"><img src="<?=base_url('rooms/'. $room['photo_room']) ?>" alt="" class ="img-fluid rounded-start"></div>
                  <div class="col-sm-12">
                    <input type="file" class="form-control" name="photo_room">
                  </div>
                </div>
              </div>
              <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nama Room Type</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_roomtype">
                      <option value=" <?= $room['id_roomtype'] ?>" selected>Data Tidak Diubah</option>
                      <?php foreach ($allroom as $key => $value) { ?>
                       <option value="<?= $value['id_roomtype'] ?>"><?= $value['nama_roomtype'] ?></option>
                      <?php }?>
                    </select>
                  </div>

                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Bintang</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="star">
                      <option value="<?= $room['star'] ?>" selected><?= $room['star'] ?></option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                      <option value="5">Five</option>
                    </select>
                  </div>

                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Fasilitas</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="jml_bed" value="<?= $room['jml_bed'] ?>">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="jml_bath" value="<?= $room['jml_bath'] ?>">
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Keterangan Room</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="ket_room" value="<?= $room['ket_room'] ?>">
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