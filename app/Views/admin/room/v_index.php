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
              <div class="col-md-2"><a href="<?= base_url('Room/tambah')?>"class="btn btn-success">
              <i class="bi bi-plus-circle">Tambah</i>
            </a>
              </div>
          
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col" width="300px">Photo Room</th>
                    <th scope="col">Room</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col"width="150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($room as $key => $value) { ?>

                        <tr>
                            <th scope="row"><?=$no++ ?></th>
                            <td><img src="<?= base_url('rooms/' . $value['photo_room'])?>" alt="" class="d-block w-100"></td>
                            <td><b><?= $value['nama_roomtype'] ?></b> <br>
                            Rp. <b><?= number_format($value['harga'],0, '.', '.') ?></b> <br>
                          </td>

                            <td>Bintang : <b><?= $value['star'] ?></b> <br>
                           Bed  : <?= $value['jml_bed'] ?><br>
                           Bath : <?= $value['jml_bath'] ?></td>
                            <td> <?= $value['ket_room'] ?> </td>
                            <td>
                                <a href="<?= base_url('room/edit/' . $value['id_room'])?>" class = "btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                
                                <button class = "btn btn-danger"data-bs-toggle="modal" data-bs-target="#deleteModal<?=$value['id_room']?>"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                   <?php } ?>
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>

              <!-- Modal Delete-->
        <?php foreach ($room as $key => $value) { ?>

             <div class="modal fade" id="deleteModal<?= $value['id_room'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Delete Data Service</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Akan Menghapus Data <b><?=$value['id_room']?></b> 
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <a href="<?= base_url('Room/delete/' . $value['id_room'])?>" type="submit" class="btn btn-danger">Hapus</a>
               </div>
               </div>
              </div>
              </div>
            </div>
        <?php } ?>