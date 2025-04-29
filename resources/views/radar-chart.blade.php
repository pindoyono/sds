<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Tes SDS Riasec Holland</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <style>
        .header {
            height: 150px;
            background-color: lightblue;
            margin-bottom: 20px;
        }

        .header img {
            height: 150px;
            float: left;
            margin-right: 50px;
            background-color: white;
        }

        .nisn {
            margin-left: 185px;
        }

        .wrap {
            padding: 5;
        }

        /* Progress Bar */
        .wrapper {
            width: 400px;
            font-family: 'Roboto', sans-serif;
            margin: 0 auto;
        }

        .skill {
            margin-bottom: 35px;
            position: relative;
            overflow-x: hidden;
        }

        .skill>p {
            font-size: 18px;
            font-weight: 700;
            color: #1a1716;
            margin: 0;
        }

        .skill:before {
            width: 100%;
            height: 10px;
            content: "";
            display: block;
            position: absolute;
            background: #959595;
            bottom: 0;
        }

        .skill-bar {
            width: 100%;
            height: 10px;
            background: #f4392f;
            display: block;
            position: relative;
        }

        .skill-bar span {
            position: absolute;
            border-top: 5px solid #f4392f;
            top: -30px;
            padding: 0;
            font-size: 18px;
            padding: 3px 0;
            font-weight: 500;
        }

        .skill-bar {
            position: relative;
        }

        .skill1 .skill-count1 {
            right: 0;
        }

        .skill1 {
            width: 95%;
        }

        .skill2 {
            width: 85%;
        }

        .skill2 .skill-count2 {
            right: 0;
        }

        .skill3 {
            width: 75%;
        }

        .skill3 .skill-count3 {
            right: 0;
        }

        /* Table */
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #eceeef;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #eceeef;
        }

        .table tbody+tbody {
            border-top: 2px solid #eceeef;
        }

        .table .table {
            background-color: #fff;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #eceeef;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #eceeef;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #dff0d8;
        }

        .table-hover .table-success:hover {
            background-color: #d0e9c6;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #d0e9c6;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #d9edf7;
        }

        .table-hover .table-info:hover {
            background-color: #c4e3f3;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #c4e3f3;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #fcf8e3;
        }

        .table-hover .table-warning:hover {
            background-color: #faf2cc;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #faf2cc;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f2dede;
        }

        .table-hover .table-danger:hover {
            background-color: #ebcccc;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #ebcccc;
        }

        .thead-inverse th {
            color: #fff;
            background-color: #292b2c;
        }

        .thead-default th {
            color: #464a4c;
            background-color: #eceeef;
        }

        .table-inverse {
            color: #fff;
            background-color: #292b2c;
        }

        .table-inverse th,
        .table-inverse td,
        .table-inverse thead th {
            border-color: #fff;
        }

        .table-inverse.table-bordered {
            border: 0;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive.table-bordered {
            border: 0;
        }


        /*Table  */
        /* .header-table {
            background-color: blue
        } */

        /* Prgress Bar*/
        .progress {
            /* margin: 0px auto; */
            margin-bottom: -10px;
            padding: 0;
            width: 90%;
            height: 15px;
            overflow: hidden;
            background: #e5e5e5;
            border-radius: 6px;
        }

        .bar {
            position: relative;
            float: left;
            min-width: 1%;
            height: 100%;
            background: cornflowerblue;
        }

        .percent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            font-family: tahoma, arial, helvetica;
            font-size: 12px;
            color: white;
        }

        tab {
            display: inline-block;
            margin-left: 40px;
        }
    </style>
</head>

<body style="font-family: 'Raleway', sans-serif; ">

    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> --}}
    </head>

    <div class="wrap">
        <div class="header">
            <div>
                <img src="{{ url('/storage/images/riasec.png') }}" alt="Image" />
            </div>
            <div class="tengah">
                <b>
                    <h2 style="margin-bottom: -40px">Hasil Assesmen Bakat Minat SDS </h2>
                    <h3>
                        <table style="margin-left: 192px;">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $nama }}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td>{{ $nisn }}</td>
                            </tr>
                            <tr>
                                <td>Sekolah</td>
                                <td>:</td>
                                <td>{{ $sekolah }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $tgl_lahir }}</td>
                            </tr>
                        </table>
                    </h3>
                </b>
            </div>
        </div>
        <div style="font-size: 11px;margin-top:-20px">

            <h2>
                SDS Assesment Test
            </h2>
            {{-- <h3>
                Apa itu SDS ?
            </h3> --}}
            SDS adalah singkatan dari Self Directed Search. Ini adalah instrumen terkini yang dikembangkan dari teori
            vokasional dan karir John Holland. SDS adalah instrumen penilaian karir dan eksplorasi minat yang akan
            memetakan
            aspirasi, aktifitas, dan bakat anda dengan beragam pilihan karir dan peluang pendidikan yang paling cocok
            untuk
            anda tekuni.
            {{-- <h3>
                Bagaimana Cara Kerjanya ?
            </h3>
            SDS didasarkan pada teori yang dikembangkan oleh Profesor John Holland, yang dikenal sebagai teori RIASEC, bahwa
            orang dan lingkungan kerja dapat diklasifikasikan menurut enam tipe utama, yani : Realistis, Investigatif,
            Artistik, Sosial, Enterpreneur, dan Konvensional. Tipe kepribadian ini dikenal dengan akronim RIASEC.(Realistic,
            I,Artistic, Social, Enterprising, Conventional --}}
        </div>
        <h2 style="margin-top:-10px;margin-bottom:-10x">
            Ringkasan Profil Bakat Minat Anda
        </h2>
        <div class="table-responsive-sm" style="font-size: 10px">
            <table class="table table-bordered">
                <thead>
                    <tr class="header-table">
                        <th width="10%">RIASEC</th>
                        <th width="5%">Skor</th>
                        <th width="50%">Presentase</th>
                        <th>Grafik</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd(array_sum($riasec)) }} --}}
                    @foreach ($riasec as $x => $x_value)
                        @if ($x == 'Realistic')
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $x_value }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="bar" style="width:{{ floor(($x_value / $sum_riasec) * 100) }}%">
                                            <p class="percent">{{ floor(($x_value / $sum_riasec) * 100) }}%</p>
                                        </div>
                                    </div>
                                </td>
                                <td rowspan="6">
                                    <div>
                                        {{-- <canvas id="radarChart"></canvas> --}}
                                        {{-- <img src="https://quickchart.io/chart?c={type:'radar',data:{labels:['Realistic','Investigative','Artistic','Social','Enterprising','Conventional'],datasets:[{label:'RIASEC',data:[50,60,70,180,190,102]}]}}"> --}}
                                        <img style="height:200px; margin-bottom:-100px;margin-left:-30px;"
                                            src="{{ $chart }}">
                                        {{-- {{ dd($chart) }} --}}


                                    </div>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $x_value }}</td>
                                <td>
                                    <div class="progress">
                                        <div class="bar" style="width:{{ floor(($x_value / $sum_riasec) * 100) }}%">
                                            <p class="percent">{{ floor(($x_value / $sum_riasec) * 100) }}%</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="table-responsive-sm" style="font-size: 10px">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>RIASEC</th>
                        <th>Penjelasan</th>
                        <th>Rekomendasi Profesi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($riasec_sort as $x => $x_value)
                        @php
                            $i++;
                        @endphp
                        @if ($i <= 3)
                            <tr>
                                <td>{{ $x }}</td>
                                {{-- <td>{{ $x_value }}</td> --}}
                                @foreach ($sheetdb2 as $x1 => $x_value1)
                                    @if ($x_value1->riasec == $x)
                                        <td>{{ $x_value1->penjelasan }}</td>
                                        <td>{{ $x_value1->profesi }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <br>
        {{-- <img width="130px" src="{{ url('/storage/images/riasec.png') }}" alt="Image" /> --}}
        {{-- <img width="100px" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->generate($url)) !!} "> --}}
        <b style="font-size: 10">
            <br>
            {{ $timestamp }}
        </b>
    </div>
</body>

</html>
