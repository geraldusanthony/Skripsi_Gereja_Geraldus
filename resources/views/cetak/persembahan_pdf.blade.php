<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Persembahan Kolekte Gereja St. Maria Assumpta Gamping</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table {
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

h4{
    text-align: center;
}

p{
    text-align: center;
}
	</style>
    @foreach($persembahan as $persembahan)    
    <h4>Data Kolekte Persembahan Umat</h4>
    <P>Gereja Santa Maria Assumpta Gamping</P>
    <p>Data terupdate per Tanggal : {{$persembahan->updated_at}} oleh Admin</p>
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>Tahun</th>
            <th>Bulan</th> 
            <th>Minggu Ke</th> 
            <th>Kolekte 1</th>
            <th>Kolekte 2</th>
            <th>Total</th>
			</tr>
		</thead>
		<tbody>
            <tr>
            <td>{{$persembahan->tahun}}</td>   
            <td>{{$persembahan->bulan}}</td> 
            <td>{{$persembahan->minggu}}</td> 
            <td>Rp.{{$persembahan->jumlah}}</td> 
            <td>Rp.{{$persembahan->jumlah2}}</td>
            <td>Rp.{{$persembahan->jumlah + $persembahan->jumlah2}}</td>
			</tr>	
		</tbody>
	</table>
    @endforeach
</body>
</html>










