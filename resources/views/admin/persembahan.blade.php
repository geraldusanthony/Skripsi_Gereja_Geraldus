<!DOCTYPE html>
<html>
<head>
<title>Gereja Santa Maria Assumpta Gamping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

th{
  background-color: orange;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

tr:hover {background-color: rgba(255, 99, 71, 0.5);}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-white w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">
     <img src="asset\images\logo2.jpg" class="w3-circle" style="width:70px">
     <span class="w3-bar-item w3-right">Data Umat St Maria Assumpta Gamping</span>
  </span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="asset\images\user.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Berkah dalem, Selamat Datang <strong>Admin</strong></span><br>
      <a href="home" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i></a>
      <a href="loginpage" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    
    <a href="tambahumat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-plus fa-fw"></i>  Tambah Umat</a>
    <a href="daftarumat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
    <a href="jadwalmisa" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-calendar fa-fw"></i>  Tambah Jadwal Misa</a>
    <a href="pendaftaran" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-square fa-fw"></i>  Jadwal Misa Mingguan</a>
    <a href="persembahan" class="w3-bar-item w3-button w3-padding w3-orange"><i class="	fa fa-credit-card fa-fw"></i>  Data Persembahan</a>
    <a href="datamisaumat" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-database fa-fw"></i>  Data Misa</a>
    <a href="jadwalkegiatan" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Tambah Jadwal Kegiatan</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Silahkan Tambah Data Persembahan</b></h2>
    <div class="modal-body">
        <form action="/addpersembahan" method="POST">
          {{csrf_field()}}
          <div class="form-group">
                 <label for="exampleInputEmail1">Tahun </label>
                 <select class="selectpicker form-control" name="tahun">
                 <option>Pilih Tahun</option>
                 <option>2020</option>
                 <option>2021</option>
                 <option>2022</option>
                 <option>2023</option>
                 </select>
            </div> 
        <div class="form-group">
                 <label for="exampleInputEmail1">Input Bulan </label>
                 <select class="selectpicker form-control" name="bulan">
                 <option>Pilih Bulan</option>
                 <option>Januari</option>
                 <option>Februari</option>
                 <option>Maret</option>
                 <option>April</option>
                 <option>Mei</option>
                 <option>Juni</option>
                 <option>Juli</option>
                 <option>Agustus</option>
                 <option>September</option>
                 <option>Oktober</option>
                 <option>November</option>
                 <option>Desember</option>
                 </select>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Input Minggu </label>
                 <select class="selectpicker form-control" name="minggu">
                 <option>Minggu Ke</option>
                 <option>Minggu Ke 1</option>
                 <option>Minggu Ke 2</option>
                 <option>Minggu ke 3</option>
                 <option>Minggu ke 4</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Persembahan 1</label>
              <input name="jumlah"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Rp.">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Persembahan 2</label>
              <input name="jumlah2"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Rp.">
           </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Tambah</button>
    </form>
    </div> 
    <header class="w3-container" style="padding-top:22px">
    <h2><b>Data Persembahan Mingguan</b></h2>
    </header>
    <div class="w3-row">
    </div>
        <table class="table, center">
        <tr>
        <th>Tahun</th>
        <th>Bulan</th> 
        <th>Minggu Ke</th> 
        <th>Persembahan 1</th>
        <th>Persembahan 2</th>
        <th>Edit</th>
        <th>Hapus</th>
        </tr>
        @foreach ($persembahan as $persembahan)
        <tr>
        <td>{{$persembahan->tahun}}</td>   
        <td>{{$persembahan->bulan}}</td> 
        <td>{{$persembahan->minggu}}</td> 
        <td>{{$persembahan->jumlah}}</td> 
        <td>{{$persembahan->jumlah2}}</td> 
        <td><a href="/viewdatapersembahan/{{$persembahan->id}}" class="btn fa fa-edit w3-orange"></a></td>
        <td><a href="/deletepersembahan/{{$persembahan->id}}" class="btn fa fa-trash w3-orange"></a></td>
        @endforeach
        </tr>
        </div>
      </div>
  </header>
  

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
