<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Graph</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo-digimedia-v2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/datagraph.css')}}">
    </head>
    <body>
        <!-- Tempat untuk tampilan grafik -->
        <div class="container" style="text-align: center;">
            <div class="section-heading">
            <br>
            <h4>Data Grafik Suhu Dan <em>Kelembaban </em></h4>
            </div>
        <!-- Div untuk grafik -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div><a class="btn btn-danger" href="graph">Back</a> </div>
                </div>
                <div class="panel-body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Suhu</th>
                                <th>Kelembaban</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->suhu }}</td>
                                    <td>{{ $item->kelembaban }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
