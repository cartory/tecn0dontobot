@extends('layouts.app')

@section('template_title')
    Create Tratamiento
@endsection

<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.5.1,npm/fullcalendar@5.5.1/locales-all.min.js,npm/fullcalendar@5.5.1/locales-all.min.js,npm/fullcalendar@5.5.1/main.min.js,npm/chart.js@2.9.4"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.5.1/main.min.css,npm/fullcalendar@5.5.1/main.min.css">


@section('content')
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var mapeo=<?php echo json_encode( $results, JSON_HEX_TAG); ?> ;
console.log(mapeo);
var labelNombre=[];
var datas=[];
for (const unMes of mapeo) {
    labelNombre.push(unMes.nombre)
   datas.push(unMes.count)
}

// fetch({{url('consultasPorMesJSON')}})
//   .then(response => console.log(response.json());)
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: labelNombre,
        datasets: [{
            label: labelNombre,
            data: datas,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
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
</script>
@endsection
