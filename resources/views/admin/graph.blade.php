@extends('admin.layouts.main')

@section('title', 'Grafik Jawaban')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="container">
            @foreach($questionChunks as $title => $chunk)
            <h1>{{ $title }}</h1>
            <div class="row">
              @foreach($chunk as $question)
              <div class="col-md-6">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="far fa-chart-bar"></i>
                      {{ $question['question_text'] }}
                    </h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="chart_{{ $question['id'] }}" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            @endforeach
          </div>            
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    @foreach($questions as $question)
        var ctx{{ $question['id'] }} = document.getElementById("chart_{{ $question['id'] }}").getContext('2d');
        var myChart{{ $question['id'] }} = new Chart(ctx{{ $question['id'] }}, {
            type: 'bar',
            data: {
                labels: {!! json_encode($question->chartLabels()) !!},
                datasets: [{
                    label: 'Jumlah Jawaban',
                    data: {!! json_encode($question->chartData()) !!},
                    backgroundColor: '#3c8dbc'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    @endforeach
});
</script>
@endpush
