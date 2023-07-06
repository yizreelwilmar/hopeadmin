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

    <th class="row-1 row-ID">ID</th>
    <th class="row-2 row-name">Nama</th>
      <th class="row-4 row-email">Level</th>
      <th class="row-4 row-level">Email</th>
     
      
    </tr>

  <tbody>
    <script>
      const user = [];
    </script>
     @if(!empty($user) && $user->count())
    @foreach ($user as $key => $user)
      <tr>
      <script>
          user.push({!! $user->toJson()!!});
        </script>
        <td>{{ $loop->index + 1 }}</td>
        <td id="name">{{$user->name}}</td>
        <td id="level">{{$user->level}}</td>
        <td id="email">{{$user->email}}</td>
       
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