<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pendaftaran - PMB UPJ</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid py-2 text-center ">
    <a class="navbar-brand" href="#">
      <img src="https://cms.sevima.com//uploads/logoaplikasi/864.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
        <a class="nav-link active" aria-current="page" href="" style="text-white">Seleksi Penerimaan Mahasiswa Baru</a>
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-6">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#tugas1.html"></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#tentang">Beranda</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#tentang">Jalur seleksi</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Informasi
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="prodi_informatika.html">Program Studi</a></li>
                      <li><a class="dropdown-item" href="prodi_akuntansi.html">Pengumuman</a></li>
                      <li><a class="dropdown-item" href="prodi_akuntansi.html">Informasi Pendaftaran</a></li>
                  </ul>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </nav>
    <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">

                <form method="post" action="konfirmasipmb.php">            
                    <h5 class="mt-5 bg-primary p-2 text-white">Jalur Pendaftaran</h5>
                    <div class="form-group mt-5">
                        <select class="form-select" name="jalur_pendaftaran" required>
                            <option>PMB - Reguler Rapor</option>
                            <option>PMB - Reguler Peringkat Kelas</option>
                            <option>PMB - Reguler Ujian Saringan Masuk</option>
                        </select>
                    </div>
                    <h5 class="mt-5 bg-primary p-2 text-white">Identitas Diri</h5>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="first">Nama Lengkap*</label>
                            <input type="text" class="form-control form-control-sm" placeholder="" id="first" name="nama" required>
                            </div>
                        </div>

                        <div class="col-md-6">   
                            <div class="form-group">
                                <label>Jenis Kelamin*</label>                               
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
                                    </label>
                                    
                                    <label class="ms-1">
                                        <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nohp">No. HP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nohp" name="no_hp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Alamat Email*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir*</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                <input type="date" class="form-control form-control-sm" placeholder="" id="tgl_lahir" name="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="kewarganegaraan" name="kewarganegaraan" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK/No. KTP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nik" name="nik" required>
                            </div>
                        </div>
                    </div>

                    
                    <h5 class="mt-5 bg-primary p-2 text-white">Asal Sekolah</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="provinsi">Tahun Lulus*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="provinsi" name="tahun_lulus" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="npsn">NPSN*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="npsn" name="npsn" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="jurusan">Jurusan Sekolah*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="jurusan" name="jurusan" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-5 bg-primary p-2 text-white">Pilih Program Studi yang Diinginkan</h5>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="prodi" required>
                                    <option selected="true" disabled="disabled">Pilih Program Studi</option>
                                    <option>Manajemen</option>
                                    <option>Psikologi</option>
                                    <option>Akuntansi</option>
                                    <option>Ilmu Komunikasi</option>
                                    <option>Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Desain Komunikasi Visual</option>
                                    <option>Desain Produk</option>
                                    <option>Teknik Sipil</option>
                                    <option>Arsitektur</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-5">Submit</button>
                </form>


            </div>
        </div>
    </div>
</div>
    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>