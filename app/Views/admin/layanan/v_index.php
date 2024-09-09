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
                    <th scope="col">Icon</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Keterangan Layanan</th>
                    <th scope="col"width="150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($layanan as $key => $value) { ?>

                        <tr>
                            <th scope="row"><?=$no++ ?></th>
                            <td><?= $value['icon_layanan'] ?></td>
                            <td><?= $value['nama_layanan'] ?></td>
                            <td><?= $value['ket_layanan'] ?></td>
                            <td>
                                <button class = "btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?=$value['id_layanan']?>"><i class="bi bi-pencil-fill"></i></button>
                                <button class = "btn btn-danger"data-bs-toggle="modal" data-bs-target="#deleteModal<?=$value['id_layanan']?>"><i class="bi bi-trash-fill"></i></button>
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
                    <form action="<?= base_url('Layanan/simpan')?>" method="post">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Service</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <label class="col-sm-6 col-form-label">Icon Layanan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="icon_layanan">
                    </div>
                    </div>
                    <div class="modal-body">
                        <label class="col-sm-6 col-form-label">Nama Layanan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_layanan">
                    </div>
                    </div>
                    <div class="modal-body">
                    <label class="col-sm-6 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"name="ket_layanan"></textarea>
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
        <?php foreach ($layanan as $key => $value) { ?>

           <div class="modal fade" id="editModal<?= $value['id_layanan'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
               <form action="<?= base_url('Layanan/update')?>" method="post">
               <input type="text" class="form-control" name="id_layanan" value="<?= $value['id_layanan'] ?>" hidden>
               <div class="modal-header">
               <h5 class="modal-title">Update Data Service</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <label class="col-sm-6 col-form-label">Icon Layanan</label>
                   <div class="col-sm-10">
                   <input type="text" class="form-control" name="icon_layanan" value="<?= $value['icon_layanan'] ?>">
               </div>
               </div>
               <div class="modal-body">
                   <label class="col-sm-6 col-form-label">Nama Layanan</label>
                   <div class="col-sm-10">
                   <input type="text" class="form-control" name="nama_layanan" value="<?= $value['nama_layanan'] ?>">
               </div>
               </div>
               <div class="modal-body">
               <label class="col-sm-6 col-form-label">Keterangan</label>
             <div class="col-sm-10">
               <textarea class="form-control" style="height: 100px" name="ket_layanan"><?= $value['ket_layanan'] ?></textarea>
             </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Update</button>
               </div>
               </div>
              </div>
            </div>
               </form>
            
             

<!-- Modal Delete-->
             <div class="modal fade" id="deleteModal<?= $value['id_layanan'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Delete Data Service</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Akan Menghapus Data <b><?=$value['nama_layanan']?></b> 
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <a href="<?= base_url('Layanan/delete/' . $value['id_layanan'])?>" type="submit" class="btn btn-danger">Hapus</a>
               </div>
               </div>
              </div>
              </div>
            </div>
        <?php } ?>