<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <?php include 'app.php'; ?>

<!-- Start Content -->
<div class="content">
  <div class="container justify-content-center ">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="profile-card" style="background-color: #A6A6A6;">
          <div class="container" style="background-color: #D9D9D9;"> 
                  <!--Start Tabel prestasi -->
            <div class="container p-4" >
              <h2 class="modal-title justify-content-center fw-bold mb-4" >PRESTASI</h2>
              <table class="table table-bordered" style="background-color: #FFFFFF; border: 2px;">
                <thead>
                  <tr style="background-color: #FFF455; text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Nama Ekskul</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Persetujuan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pramuka</td>
                    <td>Andriana</td>
                    <td>11</td>
                    <td>TBSM</td>
                    <td>Pria</td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">            
                         <a class="btn" style="background-color: #0094FF; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#ubahDataPopup">
                          LIHAT PRESTASI</a>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Pramuka</td>
                    <td>Diana</td>
                    <td>10</td>
                    <td>APAT</td>
                    <td>Wanita</td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">            
                         <a href="#" class="btn" style="background-color: #0094FF; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#ubahDataPopup">
                         LIHAT PRESTASI</a>
                      </div>
                    
                  </tr>
                  
                </tbody>
              </table>      
              </div>
            <!--Finish Tabel prestasi -->
          </div>
            <div class="modal-footer">
              <a href="anggotaNilai.php" class="btn px-4 mt-4" style="background-color: #007F73; color: #ffffff; border-radius: 7px;">
               Lihat Anggota</a>
            </div>
           
        </div>
      </div>
    </div> 
  </div>      
</div>      
<!-- Finish Content -->

<!-- Start Popup 1 -->
<div id="ubahDataPopup" class="modal fade" tabindex="-1" aria-labelledby="ubahDataPopupLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <div class="modal-header">
        <div class="col-md-3"></div>
        <h5 class="modal-title justify-content-center fw-bold col-md-6">PRESTASI</h5>
        <button type="button" class="btn-close col-md-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- start content -->
      <div class="d-flex justify-content-center">
        <div class="col-md-4 m-2 p-6">
          <div class="container">
            <div class="row">
              <div class="square-column">
                <img src="../img/userprofil.png" alt="image profile" style="width: 70%; height:98%;">
              </div>
            </div>
          </div>
        </div>
        <!-- tabel -->
        <div class="square-column" style="font-size: 136%;">
          <table>
            <tbody>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Andriana</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Pria</td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>TBSM</td>
              </tr>
              <tr>
                <td>Ekstrakulikuler</td>
                <td>:</td>
                <td>Pramuka</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!--Start Tabel prestasi -->
      <div class="container p-4">
        <table class="table table-bordered border-2" style="background-color: #FFF455; border: 2px;">
          <thead>
            <tr style="background-color: #0094FF; text-align: center;">
              <th scope="col">#</th>
              <th scope="col">Kegiatan</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Tingkat</th>
              <th scope="col">Dskripsi</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pionering</td>
              <td>27/4/2024</td>
              <td>Kabupaten</td>
              <td>Meraih juara 1 dalam Lomba Pionering Tingkat Kabupaten dengan membangun jembatan gantung yang kuat dan inovatif menggunakan bahan-bahan alami. </td>
              <td>
                <div class="container d-flex justify-content-center align-items-center">           
                    <a href="#" class="btn" style="background-color: #FFC700; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#ubah">
                    <img src="../img/editPutih.png" alt="img-edit" width="18" height="20"></a>
                </div>
              </td>
              <td>
                  <div class="container d-flex justify-content-center align-items-center">            
                      <a href="#" class="btn" style="background-color: #AF0B00; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#hapus">
                      <img src="../img/hapus.png" alt="img-edit" width="18" height="20"></a>
                  </div>
                </td>
            </tr>

          </tbody>
          <div class="modal-footer">
              <button class="btn btn-primary border-0 px-4 m-3" style="background-color: #009521; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#tambahkan">
                <b>Tambahkan</b>
              </button>
            </div> 
        </table>      
      </div>
      <!--Finish Tabel prestasi -->
      <!-- finish content -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="background-color: #007F73;" data-bs-dismiss="modal">Selesai</button>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup -->

<!-- Start Popup 2 -->
<div id="tambahkan" class="modal fade" tabindex="-1" aria-labelledby="dataDisimpan" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content px-4">
      <div class="modal-header">
        <div class="col-md-3"></div>
        <h5 class="modal-title justify-content-between fw-bold col-lg-8 text-center">TAMBAHKAN PRESTASI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="namaEkskul" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="namaEkskul">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="tingkat" class="form-label">Tingkat</label>
            <input type="text" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Deskripsi</label>
            <textarea class="form-control" placeholder="ketik deskripsi kegiatan disini" id="floatingTextarea2" style="height: 200px"></textarea>
          </div>
          <div class="modal-footer d-flex">
            <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;"  data-bs-toggle="modal" data-bs-target="#konfirmasiModal1">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->
<!-- Start Popup 2 -->
<div id="ubah" class="modal fade" tabindex="-1" aria-labelledby="dataDisimpan" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content px-4">
      <div class="modal-header">
        <div class="col-md-3"></div>
        <h5 class="modal-title justify-content-between fw-bold col-lg-8 text-center">UBAH PRESTASI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="namaEkskul" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="namaEkskul">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="tingkat" class="form-label">Tingkat</label>
            <input type="text" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Deskripsi</label>
            <textarea class="form-control" placeholder="ketik deskripsi kegiatan disini" id="floatingTextarea2" style="height: 200px"></textarea>
          </div>
          <div class="modal-footer d-flex">
            <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->

<!-- Start Popup 2 -->
<div id="konfirmasiModal1" class="modal fade" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="konfirmasiModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center my-5">
        Apakah Anda yakin ingin menambahkan kegiatan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
        <a href="prestasi.php" type="submit" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->
<!-- Start Popup 2 -->
<div id="konfirmasiModal" class="modal fade" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="konfirmasiModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center my-5">
        Apakah Anda yakin ingin menyimpan perubahan?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
        <a href="prestasi.php" type="submit" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->
<!-- Start Popup 2 -->
<div id="hapus" class="modal fade" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="konfirmasiModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center my-5">
        Apakah Anda yakin ingin menghapus ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
        <a href="prestasi.php" type="submit" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->

</body>
</html>
