<div class="container mt-5">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
      </div>
    </div>
     
    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">          
          <div class="input-group mt-3">
            <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
         <h3>Daftar Mahasiswa</h3>
         <ul class="list-group">
         <?php foreach( $data['mhs'] as $mhs ) : ?>
         <li class="list-group-item">
             <?= $mhs['nama']; ?>
             <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs ['id']?>" class="badge bg-danger float-end me-1" 
                onclick="return confirm('Yakin?')">hapus</a>
             <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs ['id']?>" class="badge bg-success float-end me-1 tampilModalEdit"  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
             <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs ['id']?>" class="badge bg-primary float-end me-1">detail</a>
         </li>
         <?php endforeach; ?>
         </ul>
       
        </div>
    </div>

</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
       <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
       <input type="hidden" name="id" id="id">
       <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" placeholder="NRP" name="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <select class="form-select" aria-label="jurusan" name="jurusan">
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Esports">Esports</option> 
                        <option value="Perhutanan">Perhutanan</option>
                        <option value="Pertambangan">Pertambangan</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>