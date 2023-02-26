<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Misa</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* \Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">
  <!-- Avatar image in top left corner -->
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>DAFTAR</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-phone w3-xxlarge"></i>
    <p>KONTAK</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h3 class="w3-jumbo"><span class="w3-hide-small">Pendaftaran Misa</span></h3>
    <h4>Selamat datang di Gereja St. Maria Assumpta Gamping</h4>
    <img src="asset\images\GerejaGer.png" alt="gereja" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black w3-padding-64" id="about">
    <h2 class="w3-text-light-black">Ayo Daftar Misa</h2> 
    <hr style="width:240px" class="w3-opacity">
    <p>Silahkan isi form dibawah ini : </p>
    <p>Sebelum mengikuti misa, seluruh umat diwajibkan untuk mengisi segala bentuk informasi yang dibutuhkan secara <b>JUJUR dan AKURAT</b>. 
        Seluruh informasi dalam proses pendaftaran akan menjadi database yang dimiliki dan dikelola oleh pihak gereja.</p>
      
  <header class="w3-container">
    <div class="modal-body">
        <form action="/addpendaftaran" method="POST">
          {{csrf_field()}}
           <div class="form-group">
                 <label for="jadwalmisa">Pilih Jadwal </label>
                 <select class="selectpicker form-control" name="jadwal">
                 <option>Silahkan Pilih Jadwal</option>
                 <option>Minggu Pukul 08:00</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Lengkap (Sesuai KTP)</label>
              <input name="nama"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No Handphone</label>
              <input name="no_hp"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Alamat Lengkap (Sesuai domisili saat ini)</label>
              <input name="alamat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin </label>
                 <select class="selectpicker form-control" name="jns_klmn">
                 <option>Silahkan Pilih Jenis Kelamin</option>
                 <option>Laki-Laki</option>
                 <option>Perempuan</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Usia </label>
                 <select class="selectpicker form-control" name="usia">
                 <option>Silahkan Pilih Usia</option>
                 <option>Bawah 13 Tahun</option>
                 <option>13-17 Tahun</option>
                 <option>18-30 Tahun</option>
                 <option>31-50 Tahun</option>
                 <option>51-60 Tahun</option>
                 <option>Di atas 60 Tahun Tahun</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Pilih Asal Lingkungan </label>
                 <select class="selectpicker form-control" name="lingkungan">
                 <option>Silahkan Pilih Lingkungan</option>
                 <option>St. Yohanes Pemandi Gamping lor</option>
                 <option>St. Agatha Gamping Tengah</option>
                 <option>St. Agustinus Gamping</option>
                 <option>St. Yusuf Gamping</option>
                 <option>St. Maria Fatimmah Demak Ijo</option>
                 <option>St. Ignatius Loyola Kaliabu</option>
                 <option>St. Caecilia Onggobayan</option>
                 <option>St. Antonius Mejing</option>
                 <option>St. Gregorius Mejing</option>
                 <option>St. Stefanus Mejing</option>
                 <option>St. Monica Mejing</option>
                 <option>St. Mateus Mejing</option>
                 <option>St. Paulus Sidoarum</option>
                 <option>St. Thomas Aquinas Sidoarum</option>
                 <option>St. Yustinus Martir Sidoarum</option>
                 <option>St. Anna Gesikan</option>
                 <option>St. Yoakim Gesikan</option>
                 <option>St. Hieronimus Gesikan</option>
                 <option>St. Fransiscus Asisi Pelem Hijau</option>
                 <option>St. Lucia Ngawen</option>
                 <option>St. Veronica Bantulan</option>
                 <option>St. Agustinus Gancahan</option>
                 <option>St. Petrus Gancahan</option>
                 <option>St. Tarcisius Semboh (Perak Bulus)</option>
                 <option>St. Maria Gancahan</option>
                 <option>St. Yohanes Pembaptis Sidokarto</option>
                 <option>St. Yusuf Gejawan Pasekan</option>
                 <option>St. Margareta Gejawan Puri</option>
                 <option>St. Georgius Nyamplung</option>
                 <option>St. Ludoviskus Nyamplung</option>
                 <option>St. Frans. Xaverius Sumber Gamol</option>
                 <option>St. Theodorikus Jatimas</option>
                 <option>St. Antonius Padua Jatisawit</option>
                 <option>St. Kristoforus Baleasri</option>
                 </select>
            </div>
      </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">DAFTAR</button>
      </form>
    </div>
  </header>
</div>
    
  <!-- Contact Section -->

  <!-- End Contact Section -->
  
  <div class="w3-row"id="contact">
  <div class="w3-half w3-container w3-white">
  <h2 class="w3-text-light-black" style="margin-left: 220px">Kontak dan Alamat</h2> 
  <div class="w3-section" style="margin-left: 150px">
      <p><i class="fa fa-map-marker fa-fw w3-text-red w3-xxlarge w3-margin-right"></i> Jl. Gereja No.1, Gamping Lor, Ambarketawang, Kec. Gamping, </p>
      <p><i class="fa fa- fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294</p>
      <p><i class="fa fa-phone fa-fw w3-text-green w3-xxlarge w3-margin-right"></i> Phone: (0274) 798748</p>
      <p><i class="fa fa-instagram fa-fw w3-text-pink w3-xxlarge w3-margin-right"></i><a href="https://www.instagram.com/gerejagamping/?hl=id" target="" class="w3-hover-text-blue">Instagram Gereja</a></p>
      <p><i class="fa fa-facebook fa-fw w3-text-blue w3-xxlarge w3-margin-right"></i><a href="https://www.facebook.com/gerejagamping" target="" class="w3-hover-text-blue">Facebook Gereja</a></p>
      <p><i class="fa fa-youtube fa-fw w3-text-red w3-xxlarge w3-margin-right"> </i><a href="https://www.youtube.com/channel/UCQMDYrFcZiKIGsIElaQvxvQ" target="" class="w3-hover-text-blue">Komsos Gamping</a></p>
      <p><i class="fa fa-twitter fa-fw w3-text-blue w3-xxlarge w3-margin-right"> </i><a href="https://twitter.com/gerejagamping" target="" class="w3-hover-text-blue">Twitter Gereja</a></p>
    </div>
  </div>
  <div class="w3-half w3-container w3-white">
  <h2 class="w3-text-light-black">Jadwal Misa Mingguan</h2> 
    <p>Sabtu Pukul 17:00</p>
    <p>Minggu Pukul 06:00, 08:00 & 17:00</p> 

  <h2 class="w3-text-light-black">Data Persembahan Mingguan</h2>   
  <!-- Trigger the modal with a button -->
  <button type="button" class="w3-button w3-block w3-orange" style="width:69%" data-toggle="modal" data-target="#myModal">Lihat</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header w3-orange">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Berikut merupakan data persembahan mingguan</h4>
        </div>
          <div class="modal-body">
          <header>
          <div class="w3-row">
          </div>
            <table class="table ">
            <tr>
            <th>Tahun</th>
            <th>Bulan</th> 
            <th>Minggu Ke</th> 
            <th>Persembahan 1</th>
            <th>Persembahan 2</th>
            </tr>
            @foreach ($persembahan as $persembahan)
            <tr>
            <td>{{$persembahan->tahun}}</td>   
            <td>{{$persembahan->bulan}}</td> 
            <td>{{$persembahan->minggu}}</td> 
            <td>{{$persembahan->jumlah}}</td> 
            <td>{{$persembahan->jumlah2}}</td>
            @endforeach
            </tr>
            </div>
           </div>
          </header>
        </div>
      </div>
    </div>
  </div> 
  
</div>

</body>
</html>
