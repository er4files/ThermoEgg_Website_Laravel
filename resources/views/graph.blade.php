<!DOCTYPE html>
<html>
    <head>
        <title>ThermoEgg - Egg Sensor Monitoring Chart</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo-digimedia-v2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/datagraph.css')}}">
        <!-- Panggil file bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
        <!--suhu realtime-->
        <!-- Panggil file jquery untuk proses realtime -->
        <script type="text/javascript" src="{{('jquery/jquery.min.js')}}"></script>

        <!-- Ajak untuk realtime-->
        <script type="text/javascript">
            $(document).ready(function(){
            setInterval(function(){
                    $("#suhu").load("{{url('bacasuhu')}}");
                    $("#kelembaban").load("{{url('bacakelembaban')}}");
            },1000); //100ms = 1s
            });
        </script>
    </head>
    <body>

        <!-- Tempat untuk tampilan grafik -->
        <div class="container" style="text-align: center;">
            <div class="section-heading">
            <br>
            <h4>Grafik <em>Suhu </em>Dan <em>Kelembaban </em></h4>
            <h6>Data yang ditampilkan adalah 50 data terakhir</h6>
            </div>
       

        <!-- Div untuk grafik -->
        
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div><a class="btn btn-danger" href="home#graphic">Back</a> <a class="btn btn-primary"href="datagraph">Data Grafik</a></div>
                </div>
                <div class="panel-body">
                    <!-- Siapkan canvas untuk grafik -->
                    <canvas id="myChart"></canvas>
                    <!-- Gambar grafik -->
                    <script type="text/javascript">
                        // Baca ID canvas tempat grafik diletakkan
                        var canvas = document.getElementById('myChart');
                        // Siapkan data untuk grafik
                        var data = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [
                                {
                                    label: "suhu",
                                    fill: true,
                                    backgroundColor: "rgba(52, 231, 43, 0.2)",
                                    borderColor: "rgba(52, 231, 43, 1)",
                                    lineTension: 0.5,
                                    pointRadius: 5,
                                    data: {!! json_encode($suhu) !!}
                                },
                                {
                                    label: "kelembaban",
                                    fill: true,
                                    backgroundColor: "rgba(239, 82, 93, 0.2)",
                                    borderColor: "rgba(239, 82, 93, 1)",
                                    lineTension: 0.5,
                                    pointRadius: 5,
                                    data: {!! json_encode($kelembaban) !!}
                                }
                            ]
                        };

                        // Option grafik
                        var option = {
                            showLines: true,
                            animation: { duration: 0 }
                        };

                        // Cetak ke dalam canvas
                        var myLineChart = new Chart(canvas, {
                            type : 'line',
                            data : data,
                            options : option
                        });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>
