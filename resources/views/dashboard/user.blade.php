@extends('dashboard/master') @section('title', 'Data User') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
     
        <div class="col-sm-6">
          <h1>Data User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
 
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card">
            <div class="card-header">

            
              <!-- /.card-header -->
              <div class="card-body" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                  <i class="fas fa-plus"></i>  Tambah Data </button>
                <!-- End Button Tambah -->
                <!-- Modal Tambah -->
                <table id="example1" class="table  table-bordered table-striped table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Name</th>
                      <th>Level</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> @foreach ($user as $item) <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->level }}</td>
                      <td>{{ $item->email }}</td>

                      <td>
                        <div class="text-center">
                          <!-- Button -->
                          <a type="button" class="badge btn-outline-warning " data-toggle="modal" data-target="#modalEdit-{{ $item->id }}">
                            <i class="fas fa-edit"></i>
                          </a>
                          <!-- <a type="button" class="badge btn-outline-danger " data-toggle="modal" data-target="#modalHapus-{{ $item->id }}">
                            <i class="fas fa-times"></i>
                          </a> -->
                          <a type="button" class="badge btn-outline-success " data-toggle="modal" data-target="#modalDetail-{{ $item->id }}">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>


                        <!-- Modal Edit -->
                        <form method="POST" action="/dashboard/user/{{ $item->id }}/update" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="modal fade" id="modalEdit-{{ $item->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Data : {{ $item->name }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" id="name" name="name" value="{{ $item->name }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                  <label for="level" >Level</label>
                                    <select  id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ $item->level }}">
                                    <option value="guest">Guest</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="superadmin">Super Admin</option>
                                 </select>
                                 </div>
                                  <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="text" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" value="{{ $item->email }}" placeholder="">
                                  </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-warning">Update Data</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </form>
                        <!-- Modal Edit End -->
                       
                        <!-- Modal Hapus -->
                        <form method="POST" action="/dashboard/user/{{ $item->id }}/destroy" enctype="multipart/form-data">
                          {{ csrf_field() }} @method('delete') <div class="modal fade" id="modalHapus-{{ $item->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Hapus Data : {{ $item->name }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Anda yakin akan menghapus data : {{ $item->name }}</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-danger">Hapus Data</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                        </form>
                        <!-- Modal Hapus End -->
                        </td>
                      <div class="modal fade" id="modalDetail-{{ $item->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Detail Data : {{ $item->name }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="name">Nama :</label>
                                    <a>{{ $item->name }} </a>
                                  </div>
                                  <div class="form-group">
                                    <label for="level">Level :</label>
                                    <a>{{ $item->level }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email :</label>
                                    <a>{{ $item->email }}</a>                                  
                                  </div>
                                </div>
                   
                      <script>
                        elements = document.getElementsByTagName("td")
                        for (var i = elements.length; i--;) {
                          if (elements[i].innerHTML === "superadmin") {
                            elements[i].style.color = "red";
                            elements[i].style.fontWeight = "1000";
                          } else if (elements[i].innerHTML === "admin") {
                            elements[i].style.color = "green";
                            elements[i].style.fontWeight = "1000";
                          }
                          else if (elements[i].innerHTML === "user") {
                            elements[i].style.color = "blue";
                            elements[i].style.fontWeight = "1000";
                          }
                         
                        }

                      </script>
                    </tr> @endforeach </tbody>
                  <tfoot>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Level</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper --> @endsection @section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"> @endsection @section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> @endsection