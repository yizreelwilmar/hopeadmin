<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

    <h2>Admin Hope | Data User</h2>
	<table class="users table table-bordered ">
    <]
    <tr>
    <div>
        
</div>

                    <th>ID</th>
                      <th>Nama</th>
                      <th>Nomor Telfon</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Provinsi</th>
                      <th>Agama</th>
                      <th>Kategori Doa</th>
                      <th>Notes</th>
                      <th>Bible Study</th>
                      
     
      
    </tr>

  <tbody>
    <script>
      const datadoa = [];
    </script>
     @if(!empty($datadoa) && $datadoa->count())
     @foreach ($datadoa as $item)
      <tr>
      <script>
          datadoa.push({!! $datadoa->toJson()!!});
        </script>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->no_tlp }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->provinsi }}</td>
        <td>{{ $item->agama }}</td>
        <td>{{ $item->kat_doa }}</td>
        <td>>{{ $item->note }}</td>
        <td>{{ $item->bible_study }}</td>
        <td>{{ $item->status }}</td>
        
       
          </form>
        </td>
      </tr>
    @endforeach
    @else
            <tr>
                <td colspan="10" >There are no data.</td>
            </tr>
        @endif
</tbody>
</table> 
 
</body>
</html>