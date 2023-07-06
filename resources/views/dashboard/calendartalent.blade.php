@extends('dashboard/master') @section('title', 'Calendar Talent') @section('content')
<!-- Content Wrapper. Contains page content -->
<style>
    .calendar-sidebar,
    .calendar-sidebar #sidebarToggler,
    #eventListToggler {
        background-color: #212529 !important;
    }
    .calendar-sidebar .month-list .calendar-months #active-month {
        background-color: white !important;
    }

     .event-indicator{
         display: block !important;
        background: black !important;
        position: absolute !important;
        text-shadow: 1px 1px 1px white;
        width: 50px !important;
        height: 50px;
        z-index: -9999999 !important;
        color: white !important;
        /* top: 0px !important */
    }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Calendar Talent</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Calendar Talent</li>
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

              
              <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
              <link rel="stylesheet" href="{{ asset('assets/dist/css/evo-calendar.css') }}">
  
    <br>
    <br>
    <div id="calendar"></div>
    <br>
    <br>
    <br>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script rel="stylesheet" href="{{ asset('assets/dist/css/evo-calendar.js') }}"></script>
    <script>

// addCalendarEvent

$("#calendar").evoCalendar({
    calendarEvents: [
    <?php
    foreach($talent as $k) {
      
        echo '{
        
        name:  "'.$k->nama.'",
        date: "'.$k->tanggalshootterakhir.'",
        description: "'.$k->ket.'",
        badge:"'.$k->shoot.'",
        
        
        
        },';


    }
    ?>
    ],
    theme: 'Orange Coral'
  });
  $(document).ready( function () {
$('#example1').DataTable();
} );
    </script> 
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
                      <th>Take Shoot</th>
                      <th>Tanggal Shoot Terakhir</th>
                      
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
                      <td>{{ $item->shoot }}</td>
                      <td>{{ $item->tanggalshootterakhir }}</td>
                      
                      <td>
                        <div class="text-center">
                          <a type="button" class="badge btn-outline-success " data-toggle="modal" data-target="#modalDetail-{{ $item->id }}">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
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
<!-- Add jQuery library (required) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

@endsection