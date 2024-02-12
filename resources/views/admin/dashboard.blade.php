@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="mb-3">
      <a href="{{ route('admin.export') }}" class="btn btn-success mr-1">Export Data Audien</a>
      <a href="{{ route('admin.exportaudienanswers') }}" class="btn btn-success ml-1">Export Data Jawaban Audien</a>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Nama dan Email pengisi survey
              <p>{{ $totalAudiens }} response</p>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>nama</th>
                  <th>email</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($audiens as $audien)
                  <tr>
                    <td>{{ $audien->nama }}</td>
                    <td>{{ $audien->email }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

      <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Usia</h3>
            </div>
            <div class="card-body">
                <canvas id="usiaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
      </div>
      
      <!-- Tambahkan elemen canvas untuk menampilkan diagram jenis kelamin -->
      <div class="col-md-6">
          <div class="card card-info">
              <div class="card-header">
                  <h3 class="card-title">Jenis Kelamin</h3>
              </div>
              <div class="card-body">
                  <canvas id="jenisKelaminChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
          </div>
      </div>
      
      <!-- Tambahkan elemen canvas untuk menampilkan doughnut chart tingkat pendidikan -->
      <div class="col-md-6">
          <div class="card card-success">
              <div class="card-header">
                  <h3 class="card-title">Tingkat Pendidikan</h3>
              </div>
              <div class="card-body">
                  <canvas id="pendidikanChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
          </div>
      </div>
      
      <!-- Tambahkan elemen canvas untuk menampilkan doughnut chart masa kerja -->
      <div class="col-md-6">
          <div class="card card-warning">
              <div class="card-header">
                  <h3 class="card-title">Masa Kerja</h3>
              </div>
              <div class="card-body">
                  <canvas id="masaKerjaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
          </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</section>
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
      var usiaData = @json($usiaData);
      var usiaChartCanvas = document.getElementById('usiaChart').getContext('2d');
      var usiaOptions = {
          maintainAspectRatio: false,
          responsive: true,
      };
      new Chart(usiaChartCanvas, {
          type: 'doughnut',
          data: {
              labels: usiaData.map(item => item.usia),
              datasets: [{
                  data: usiaData.map(item => item.total),
                  backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
              }]
          },
          options: usiaOptions
      });

      var jenisKelaminData = @json($jenisKelaminData);
        var tingkatPendidikanData = @json($tingkatPendidikanData);
        var masaKerjaData = @json($masaKerjaData);

        // Inisialisasi grafik doughnut chart untuk jenis kelamin
        var jenisKelaminChartCanvas = document.getElementById('jenisKelaminChart').getContext('2d');
        var jenisKelaminOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };
        new Chart(jenisKelaminChartCanvas, {
            type: 'doughnut',
            data: {
                labels: jenisKelaminData.map(item => item.jenis_kelamin),
                datasets: [{
                    data: jenisKelaminData.map(item => item.total),
                    backgroundColor: ['#3c8dbc', '#f56954'],
                }]
            },
            options: jenisKelaminOptions
        });

        var pendidikanChartCanvas = document.getElementById('pendidikanChart').getContext('2d');
        var pendidikanOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };
        new Chart(pendidikanChartCanvas, {
            type: 'doughnut',
            data: {
                labels: tingkatPendidikanData.map(item => item.tingkat_pendidikan),
                datasets: [{
                    data: tingkatPendidikanData.map(item => item.total),
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }]
            },
            options: pendidikanOptions
        });

        var masaKerjaChartCanvas = document.getElementById('masaKerjaChart').getContext('2d');
        var masaKerjaOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };
        new Chart(masaKerjaChartCanvas, {
            type: 'doughnut',
            data: {
                labels: masaKerjaData.map(item => item.masa_kerja),
                datasets: [{
                    data: masaKerjaData.map(item => item.total),
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                }]
            },
            options: masaKerjaOptions
        });
  });
</script>
@endpush