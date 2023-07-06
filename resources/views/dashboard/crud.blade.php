@extends('dashboard/master') @section('title', 'Data Doa') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Doa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Data Doa</li>
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
                <form method="POST" action="{{ route('crud_tambah') }}" enctype="multipart/form-data">
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
                           <label>Nama</label>
                           <select class="form-control" name="nama">
                          <option value="">-Pilih Nama- </option>
                          @foreach($permintaan as $permintaan)
                          <option value="{{ $permintaan->nama }}">
                          {{ $permintaan->nama }}
                          </option>
                          @endforeach
                        </select>

                          </div>
                          <div class="form-group">
                            <label for="no_tlp">Nomor Telfon</label>
                            <input type="text" class="form-control rounded-0 @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="" placeholder="Nomor Telfon....">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" value="" placeholder="Email....">
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control rounded-0 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="" placeholder="Alamat...">
                          </div>
                          <div class="form-group">
                            <label for="agama">Agama</label>
                            <select id="agama" class="form-control rounded-0 @error('agama') is-invalid @enderror" name="agama" placeholder="Agama...">
                              <option value="">-Pilih Agama-</option>
                              <option value="Kristen Advent">Kristen Advent</option>
                              <option value="Kristen Non Advent">Kristen Non Advent</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Non Kristen">Non Kristen</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="kat_doa">Kategori Permintaan Doa</label>
                            <select id="kat_doa" class="form-control rounded-0 @error('kat_doa') is-invalid @enderror" name="kat_doa" placeholder="Kategori Permintaan Doa...">
                              <option value="">-Pilih Kategori Permintaan Doa-</option>
                              <option value="Kesehatan">Kesehatan</option>
                              <option value="Keuangan">Keuangan </option>
                              <option value="Rumah Tangga">Rumah Tangga</option>
                              <option value="Pasangan Hidup">Pasangan Hidup</option>
                              <option value="Permintaan Buku">Permintaan Buku</option>
                              <option value="Lain-lain">Lain-lain</option>
                            </select>
                          </div>
                          <div class="form-group">
                           <label>Acara</label>
                           <select class="form-control" name="acara_id">
                          <option value="">Pilih Acara Yang Sedang Berlangsung </option>
                          @foreach($acaras as $acaras)
                          <option value="{{ $acaras->id }}">
                          {{ $acaras->acara_name }}
                          </option>
                          @endforeach
                        </select>

                          </div>
                          <div class="form-group">
                            <label for="note">Notes</label>
                            <textarea type="text" class="form-control rounded-0 @error('note') is-invalid @enderror" id="note" name="note" value="" placeholder="Notes..."></textarea>
                          </div>
                          <div class="form-group">
                            <label for="bible_study">Bible Study</label>
                            <select id="bible_study" class="form-control rounded-0 @error('bible_study') is-invalid @enderror" name="bible_study" placeholder="Bible Study...">
                              <option value="">--</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control rounded-0 @error('status') is-invalid @enderror" name="status" placeholder="Status...">
                              <option value="">--</option>
                              <option value="Selesai">Selesai</option>
                              <option value="Follow Up">Follow Up</option>
                            </select>
                          </div>
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
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nomor Telfon</th>
                      <th>Agama</th>
                      <th>Kategori Doa</th>
                      <th>Acara</th>
                      <th>Notes</th>
                      <th>Bible Study</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody> @foreach ($datadoa as $item)  <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->no_tlp }}</td>
                      <td>{{ $item->agama }}</td>
                      <td>{{ $item->kat_doa }}</td>
                      <td>{{ $item->acara->acara_name }}</td>
                      <td><textarea type="text" readonly cols="14" rows="3">{{ $item->note }}</textarea></td>
                      <td>{{ $item->bible_study }}</td>
                      <td>{{ $item->status }}</td>
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
                        <form method="POST" action="/dashboard/crud/{{ $item->id }}/update" enctype="multipart/form-data">
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
                                    <label for="no_tlp">Nomor Telfon</label>
                                    <input type="text" class="form-control rounded-0 @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ $item->no_tlp }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" value="{{ $item->email }}" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control rounded-0 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $item->alamat }}" placeholder="">
                                  </div>
                                 
                                  <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select id="agama" class="form-control rounded-0 @error('agama') is-invalid @enderror" name="agama" id="kat_doa" value="{{ $item->agama }}" >
                                      <option>{{ $item->agama }}</option>
                                      <option value="Kristen Advent">Kristen Advent</option>
                                      <option value="Kristen Non Advent">Kristen Non Advent</option>
                                      <option value="Katolik">Katolik</option>
                                      <option value="Non Kristen">Non Kristen</option>
                                      <option value="Lainnya">Lainnya</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="kat_doa">Kategori Doa</label>
                                    <select id="kat_doa" class="form-control rounded-0 @error('kat_doa') is-invalid @enderror" id="kat_doa" name="kat_doa" value="{{ $item->kat_doa }}" placeholder="">
                                      <option>{{ $item->kat_doa }}</option>
                                      <option value="Kesehatan">Kesehatan</option>
                                      <option value="Keuangan">Keuangan </option>
                                      <option value="Rumah Tangga">Rumah Tangga</option>
                                      <option value="Pasangan Hidup">Pasangan Hidup</option>
                                      <option value="Permintaan Buku">Permintaan Buku</option>
                                      <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                  </div>


                                  <div class="form-group">
                                    <label for="note">Notes</label>
                                    <input type="text" class="form-control rounded-0 @error('note') is-invalid @enderror" id="note" name="note" value="{{ $item->note }}"></input>
                                  </div>
                                  <div class="form-group">
                                    <label for="bible_study">Bible Study</label>
                                    <select id="bible_study" class="form-control rounded-0 @error('bible_study') is-invalid @enderror" id="bible_study" name="bible_study" value="{{ $item->bible_study }}" placeholder="">
                                      <option>{{ $item->bible_study }}</option>
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" class="form-control rounded-0 @error('status') is-invalid @enderror" id="status" name="status" value="{{ $item->status }}" placeholder="">
                                      <option>{{ $item->status }}</option>  
                                      <option value="Selesai">Selesai</option>
                                      <option value="Follow Up">Follow Up</option>
                                    </select>
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
                        <form method="POST" action="/dashboard/crud/{{ $item->id }}/destroy" enctype="multipart/form-data">
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
                                    <label for="no_tlp">Nomor Telfon :</label>
                                    <a>{{ $item->no_tlp }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email :</label>
                                    <a>{{ $item->email }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <a>{{ $item->alamat }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="provinsi">Provinsi :</label>
                                    <a>{{ $item->provinsi }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="agama">Agama :</label>
                                    <a>{{ $item->agama }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="kat_doa">Kategori Doa :</label>
                                    <a>{{ $item->kat_doa }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="note">Notes :</label>
                                    <a>{{ $item->note }}</a>                                 
                                   </div>
                                  <div class="form-group">
                                    <label for="bible_study">Bible Study :</label>
                                    <a>{{ $item->bible_study }}</a>                                      
                                  </div>
                                  <div class="form-group">
                                    <label for="status">Status :</label>
                                    <a>{{ $item->status }}</a>                                  
                                  </div>
                                  <div class="form-group">
                                    <label for="ket">Tanggal Permintaan :</label>
                                    <a>{{ $item->created_at }}</a>                                     
                                </div>
                      <script>
                        elements = document.getElementsByTagName("td")
                        for (var i = elements.length; i--;) {
                          if (elements[i].innerHTML === "Follow Up") {
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

                        elements = document.getElementsByTagName("a")
                        for (var i = elements.length; i--;) {
                          if (elements[i].innerHTML === "Follow Up") {
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
                      </script>
                    </tr> @endforeach </tbody>
                  <tfoot>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nomor Telfon</th>
                      <th>Agama</th>
                      <th>Kategori Doa</th>
                      <th>Acara</th>
                      <th>Notes</th>
                      <th>Bible Study</th>
                      <th>Status</th>
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