@extends('dashboard/master') @section('title', 'Data Talent') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Talent</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Data Talent</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card">
              <div class="card-header">
                <!-- Button Tambah -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                  <i class="fas fa-plus"></i>  Tambah Data </button>
                <!-- End Button Tambah -->
                <!-- Modal Tambah -->
                <form method="POST" action="{{ route('talent_tambah') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="modal fade" id="modalTambah">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Tambah Data Baru</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control rounded-0 @error('nama') is-invalid @enderror" id="nama" name="nama" value="" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control rounded-0 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="" placeholder="Alamat">
                          </div>
                          <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control rounded-0 @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="" placeholder="Tempat Tanggal Lahir">
                          </div>
                          <div class="form-group">
                            <label for="sosmed">Sosial Media</label>
                            <input type="text" class="form-control rounded-0 @error('sosmed') is-invalid @enderror" id="sosmed" name="sosmed" value="" placeholder="Sosial Media">
                          </div>
                          <div class="form-group">
                            <label for="no_tlp">Nomor Telfon</label>
                            <input type="no_tlp" class="form-control rounded-0 @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="" placeholder="Nomor Telfon">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="foto" class="form-label">Foto Pribadi</label>
                            <img class="img-preview img-fluid ">
                            <input class="form-control rounded-0 @error('foto') is-invalid @enderror" type="file" id="foto" name="foto" onchange="previewImage()">
                          </div>
                          <div class="form-group">
                            <label for="ktp">Foto KTP</label>
                            <img class="img-preview1 img-fluid ">
                            <input type="file" id="ktp" class="form-control rounded-0 @error('ktp') is-invalid @enderror" name="ktp" placeholder="ktp" onchange="previewImage1()">
                          </div>
                          <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <img class="img-preview2 img-fluid">
                            <input type="file" class="form-control rounded-0 @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="" placeholder="NPWP" onchange="previewImage2()">
                          </div>
                          <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control rounded-0 @error('ket') is-invalid @enderror" id="ket" name="ket" value="" placeholder="Keterangan">                       
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </form>
                <!-- Modal Tambah End -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example1" class="table  table-bordered table-striped table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Sosial Media</th>
                      <th>Nomor Telfon</th>
                      <th>Email</th>
                      <th>Foto</th>
                      <th>Keterangan</th>
                      
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> @foreach ($talent as $item) <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->sosmed }}</td>
                      <td>{{ $item->no_tlp }}</td>
                      <td>{{ $item->email }}</td>
                      <td><img src="{{ asset('fototalent/'.$item->foto) }}" alt="" style="width:100px;"> </td>
                      <td>{{ $item->ket }}</td>
                      
                      <td>
                        <div class="text-center">
                          <!-- Button -->
                          <a type="button" class="badge btn-outline-warning " data-toggle="modal" data-target="#modalEdit-{{ $item->id }}">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a type="button" class="badge btn-outline-danger " data-toggle="modal" data-target="#modalHapus-{{ $item->id }}">
                            <i class="fas fa-times"></i>
                          </a>
                          <a type="button" class="badge btn-outline-success " data-toggle="modal" data-target="#modalDetail-{{ $item->id }}">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                        <!-- Modal Edit -->
                        <form method="POST" action="/dashboard/talent/{{ $item->id }}/update" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="modal fade" id="modalEdit-{{ $item->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Data : {{ $item->nama }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control rounded-0 @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $item->nama }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Nomor Telfon</label>
                                    <input type="text" class="form-control rounded-0 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $item->alamat }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="ttl">Tempat Tanggal Lahir </label>
                                    <input type="text" class="form-control rounded-0 @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ $item->ttl }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="sosmed">Sosial Media</label>
                                    <input type="text" class="form-control rounded-0 @error('sosmed') is-invalid @enderror" id="sosmed" name="sosmed" value="{{ $item->sosmed }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="no_tlp">Nomor Telfon</label>
                                    <input type="text" class="form-control rounded-0 @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ $item->no_tlp }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" value="{{ $item->email }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="foto">Foto Pribadi</label>
                                    <img src="{{ asset('fototalent/'.$item->foto) }}" class="  img-preview img-fluid mb-3 col-sm-5 d-block ">
                                    <input type="file"  class="form-control rounded-0 @error('foto') is-invalid @enderror" id="foto" name="foto"value="{{ $item->foto }}" >
                                  </div>
                                  <div class="form-group">
                                    <label  for="ktp">Foto KTP</label>
                                    <img src="{{ asset('fotoktptalent/'.$item->ktp) }}" class=" img-preview1 img-fluid mb-3 col-sm-5 d-block ">
                                    <input type="file"  class="form-control rounded-0 @error('ktp') is-invalid @enderror" id="ktp" name="ktp" value="{{ $item->ktp }}">
                                  </div>
                                  <div class="form-group">
                                    <label for="npwp">Foto NPWP</label>
                                    <img src="{{ asset('fotonpwptalent/'.$item->npwp) }}" class=" img-preview2 img-fluid mb-3 col-sm-5 d-block ">
                                    <input type="file" class="form-control rounded-0 @error('npwp') is-invalid @enderror" id="npwp" name="npwp" value="{{ $item->npwp }}">
                                  </div>  
                                  <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <input type="text" class="form-control rounded-0 @error('ket') is-invalid @enderror" id="ket" name="ket" value="{{ $item->ket }}" >                                                           
                                  </div>
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
                        <form method="POST" action="/dashboard/talent/{{ $item->id }}/destroy" enctype="multipart/form-data">
                          {{ csrf_field() }} @method('delete') <div class="modal fade" id="modalHapus-{{ $item->id }}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Hapus Data : {{ $item->nama }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Anda yakin akan menghapus data : {{ $item->nama }}</p>
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
                                  <h4 class="modal-title">Detail Data : {{ $item->nama }}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="nama">Nama :</label>
                                    <a>{{ $item->nama }} </a>
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <a>{{ $item->alamat }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="ttl">Tempat Tanggal Lahir :</label>
                                    <a>{{ $item->ttl }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="sosmed">Sosial Media :</label>
                                    <a>{{ $item->sosmed }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="no_tlp">Nomor Telfon :</label>
                                    <a>{{ $item->no_tlp }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email :</label>
                                    <a>{{ $item->email }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="ktp">Foto :</label> 
                                    <img src="{{ asset('fototalent/'.$item->foto) }}" alt="" style="width:200px;"> 
                                  </div>
                                  <div class="form-group">
                                    <label for="ktp">Foto KTP :</label>
                                    <img src="{{ asset('fotoktptalent/'.$item->ktp) }}" alt="" style="width:200px;">                                 
                                  </div>
                                  <div class="form-group">
                                    <label for="npwp">Foto NPWP :</label>
                                    <img src="{{ asset('fotonpwptalent/'.$item->npwp) }}" alt="" style=" width:200px;">                                 
                                   </div>
                                  <div class="form-group">
                                    <label for="shoot">Take Shoot :</label>
                                    <a>{{ $item->shoot }}</a>                                      
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggalshoot">Tanggal Shoot :</label>
                                    <a>{{ $item->tanggalshoot }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggalshootterakhir">Tanggal Shoot Terakhir :</label>
                                    <a>{{ $item->tanggalshootterakhir }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="ket">Keterangan :</label>
                                    <a>{{ $item->ket }}</a>                                     
                                  </div>
                                  

                      <script>
                        elements = document.getElementsByTagName("td")
                        for (var i = elements.length; i--;) {
                          if (elements[i].innerHTML === "Belum Selesai") {
                            elements[i].style.color = "red";
                            elements[i].style.fontWeight = "1000";
                          } else if (elements[i].innerHTML === "Selesai") {
                            elements[i].style.color = "green";
                            elements[i].style.fontWeight = "1000";
                          }
                          else if (elements[i].innerHTML === "Yes") {
                            elements[i].style.color = "Green";
                            elements[i].style.fontWeight = "1000";
                          }
                          else if (elements[i].innerHTML === "No") {
                            elements[i].style.color = "Red";
                            elements[i].style.fontWeight = "1000";
                          }
                         
                        }
                        elements = document.getElementsByTagName("a")
                        for (var i = elements.length; i--;) {
                          if (elements[i].innerHTML === "Belum Selesai") {
                            elements[i].style.color = "red";
                            elements[i].style.fontWeight = "1000";
                          } else if (elements[i].innerHTML === "Selesai") {
                            elements[i].style.color = "green";
                            elements[i].style.fontWeight = "1000";
                          }
                          else if (elements[i].innerHTML === "Yes") {
                            elements[i].style.color = "green";
                            elements[i].style.fontWeight = "1000";
                          }
                          else if (elements[i].innerHTML === "No") {
                            elements[i].style.color = "Red";
                            elements[i].style.fontWeight = "1000";
                          }
                        }

                        function previewImage(){

                        const image = document.querySelector('#foto');
                        const imgPreview = document.querySelector('.img-preview')

                        imgPreview.style.display ='block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(image.files[0]);

                        oFReader.onload = function(oFREvent){
                          imgPreview.src = oFREvent.target.result;

                        }
                      }

                      function previewImage1(){

                        const image = document.querySelector('#ktp');
                        const imgPreview = document.querySelector('.img-preview1')

                        imgPreview.style.display ='block';

                        const oFReader = new FileReader();
                        oFReader.readAsDataURL(image.files[0]);

                        oFReader.onload = function(oFREvent){
                          imgPreview.src = oFREvent.target.result;

                        }
                        }

                        function previewImage2(){

                          const image = document.querySelector('#npwp');
                          const imgPreview = document.querySelector('.img-preview2')

                          imgPreview.style.display ='block';

                          const oFReader = new FileReader();
                          oFReader.readAsDataURL(image.files[0]);

                          oFReader.onload = function(oFREvent){
                            imgPreview.src = oFREvent.target.result;

                          }
                          }
                      
                         

                  
                      </script>
                    </tr> @endforeach </tbody>
                  <tfoot>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Sosial Media</th>
                      <th>Nomor Telfon</th>
                      <th>Email</th>
                      <th>Take Shoot</th>
                      <th>Tanggal Shoot Terakhir</th>
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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