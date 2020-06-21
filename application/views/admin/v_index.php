<div class="container">
  <div class="text-center">
    <h1><b>Sistem Informasi Perpustakaan</b></h1>
      <br><img src="assets/img/perpus1.jpg" height="170" width="990">
    <div class="col-sm-8 mx-auto">
      <br><h2>Selamat Datang</h2>
      <!-- <p>Ini merupakan contoh sistem informasi perpustakaan hasil dari tutorial <b>ebook tutorial codeigniter lengkap dengan studi kasus membuat sistem informasi perpustakaan</b>.</p> -->
      <h5>
        Anda telah login sebagai <b>[<?php echo $this->session->userdata('username'); ?>]</b>.
      </h5>
    </div>
  </div>
<br>

  <div class="row">
    <div class="col-md-3">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h1>
            <?php echo $this->m_data->get_data('buku')->num_rows(); ?>
            <div class="pull-right">
              
            <i class="fa fa-book"></i>
            </div>
          </h1>
          Jumlah Buku
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-danger text-white">
        <div class="card-body">
          <h1>
            <?php echo $this->m_data->get_data('anggota')->num_rows(); ?>
            <div class="pull-right">
              
            <i class="fa fa-users"></i>
            </div>
          </h1>
          Jumlah Anggota
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-warning text-white">
        <div class="card-body">
          <h1>
            <?php echo $this->m_data->get_data('peminjaman')->num_rows(); ?>
            <div class="pull-right">
              
            <i class="fa fa-book"></i>
            </div>
          </h1>
          Jumlah Total Peminjaman
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h1>
            <?php echo $this->m_data->get_data('petugas')->num_rows(); ?>
            <div class="pull-right">
              
            <i class="fa fa-user"></i>
            </div>
          </h1>
          Jumlah Petugas
        </div>
      </div>
    </div>

  </div>
  
  
</div>