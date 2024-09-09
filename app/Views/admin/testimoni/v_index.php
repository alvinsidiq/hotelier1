<div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $judul ?></h5>
              <?php if(session()->getFlashdata('pesan_berhasil')){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo session()->getFlashdata('pesan_berhasil');
                echo'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }?>
              <?php if(session()->getFlashdata('pesan_gagal')){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo session()->getFlashdata('pesan_gagal');
                echo'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
              }?>
              <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2"><a href="<?= base_url('Testimoni/tambah')?>"class="btn btn-success">
              <i class="bi bi-plus-circle">Tambah</i>
            </a>
              </div>
          
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col"width="150px">Photo</th>
                    <th scope="col"width="250px">Nama</th>
                    <th scope="col">Testimoni</th>
                    <th scope="col"width="150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($testimoni as $key => $value) { ?>

                        <tr>
                            <th scope="row"><?=$no++ ?></th>
                            <td><img src="<?= base_url('Testimoni/' . $value['photo_testimoni'])?>" alt="" class="d-block w-50"></td>
                            <td>Nama: <b><?= $value['nama_testimoni'] ?></b><br>
                            Jabatan : <?= $value['jabatan_testimoni'] ?></td>
                            <td><?= $value['testimoni'] ?></td>
                            <td>
                                <a href="<?= base_url('Testimoni/edit/' . $value['id_testimoni'])?>" class = "btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                
                                <button class = "btn btn-danger"data-bs-toggle="modal" data-bs-target="#deleteModal<?=$value['id_testimoni']?>"><i class="bi bi-trash-fill"></i></button>
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
        <?php foreach ($testimoni as $key => $value) { ?>

             <div class="modal fade" id="deleteModal<?= $value['id_testimoni'] ?>" tabindex="-1">
           <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">Delete Data Service</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   Apakah Anda Yakin Akan Menghapus Data <b><?=$value['testimoni']?></b> 
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <a href="<?= base_url('Testimoni/delete/' . $value['id_testimoni'])?>" type="submit" class="btn btn-danger">Hapus</a>
               </div>
               </div>
              </div>
              </div>
            </div>
        <?php } ?>