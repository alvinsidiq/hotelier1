<div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $judul ?></h5>
              <?php if(session()->getFlashdata('pesan_berhasil')){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo session()->getFlashdata('pesan_berhasil');
                echo'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }?>
              <?php if(session()->getFlashdata('pesan_hapus')){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo session()->getFlashdata('pesan_hapus');
                echo'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }?>
              <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">
              <i class="bi bi-plus-circle">Tambah</i>
              </button>
              </div>
          
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Room TYpe</th>
                    <th scope="col">Harga</th>
                    <th scope="col"width="150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($roomtype as $key => $value) { ?>

                        <tr>
                            <th scope="row"><?=$no++ ?></th>
                            <td><?= $value['nama_roomtype'] ?></td>
                            <td><?= $value['harga'] ?></td>
                            <td>
                                <button class = "btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?=$value['id_roomtype']?>"><i class="bi bi-pencil-fill"></i></button>
                                <button class = "btn btn-danger"data-bs-toggle="modal" data-bs-target="#deleteModal<?=$value['id_roomtype']?>"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                   <?php } ?>
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>

          <!-- Modal Tambah-->
          <div class="modal fade" id="tambahModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form action="<?= base_url('RoomType/simpan')?>" method="post">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Service</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <label class="col-sm-6 col-form-label">Nama Room Type</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_roomtype">
                    </div>
                    </div>
                    <div class="modal-body">
                        <label class="col-sm-6 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga">
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

        
        
              <!-- Modal Edit-->
        <?php foreach ($roomtype as $key => $value) { ?>

           <div class="modal fade" id="editModal<?= $value['id_roomtype'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
               <form action="<?= base_url('RoomType/update')?>" method="post">
               <input type="text" class="form-control" name="id_roomtype" value="<?= $value['id_roomtype'] ?>" hidden>
               <div class="modal-header">
               <h5 class="modal-title">Update Data Room Type</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <label class="col-sm-6 col-form-label">Nama Room Type</label>
                   <div class="col-sm-10">
                   <input type="text" class="form-control" name="nama_roomtype" value="<?= $value['nama_roomtype'] ?>">
                 </div>
               </div>
               <div class="modal-body">

                    <label class="col-sm-6 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga" value="<?= $value['harga'] ?>">
                  </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Update</button>
              </div>
          </form>
      </div>
   </div>
</div>
            
             

<!-- Modal Delete-->
             <div class="modal fade" id="deleteModal<?= $value['id_roomtype'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Delete Data Room Type</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Akan Menghapus Data <b><?=$value['nama_roomtype']?></b> 
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <a href="<?= base_url('RoomType/delete/' . $value['id_roomtype'])?>" type="submit" class="btn btn-danger">Hapus</a>
               </div>
               </div>
              </div>
              </div>
            </div>
        <?php } ?>