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
    @foreach ($persembahanling as $persembahanling)       
    <h4>Data Persembahan Lingkungan</h4>
    <P>Gereja Santa Maria Assumpta Gamping</P>
    <p>Data terupdate per Tangggal : {{$persembahanling->updated_at}}</p>
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>Tanggal</th>
            <th>Tahun</th> 
            <th>Nama Lingkungan</th> 
            <th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
            <tr>
            <td>{{$persembahanling->tanggal}}</td>   
            <td>{{$persembahanling->tahun}}</td> 
            <td>{{$persembahanling->nama_ling}}</td> 
            <td>Rp.{{$persembahanling->jumlah}}</td>
			</tr>
		</tbody>
        
	</table>
    @endforeach
</body>
</html>










