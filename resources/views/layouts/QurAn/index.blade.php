@include('components.admin.header')
@include('components.admin.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Qur'an Database</h3>
                  </div>
                    <div class="card-body">
                      <table id="tbl_qurAn" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>No Surah</th>
                            <th>Nama Surah</th>
                            <th>Nama Surah ( Latin )</th>
                            <th>Jumlah Ayat</th>
                            <th><i class="fas fa-cog"></i></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data_surah as $item_surah)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item_surah->nomor }}</td>
                              <td>{{ $item_surah->nama }}</td>
                              <td>{{ $item_surah->nama_latin }}</td>
                              <td>{{ $item_surah->jumlah_ayat }}</td>
                              <td>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-flat" data-toggle="dropdown">
                                      <span class="sr-only">Toggle Dropdown</span>
                                      <i class="fas fa-ellipsis-v"></i>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                      <button type="button" class="dropdown-item" title="Show Data" data-toggle="modal">
                                      {{-- <button type="button" class="dropdown-item" title="Show Data" data-toggle="modal" data-target="#modal_user_show" id="getUser" data-url="{{ route('show_users',['id'=>$item_user->id])}}"> --}}
                                          View
                                      </button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>
</div>
@include('components.admin.footer')
<script>
  $(function () {
      // Datatables
      $("#tbl_qurAn").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tbl_qurAn_wrapper .col-md-6:eq(0)');
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
      theme: 'bootstrap4'
      })
  });
</script>