<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use QuickChart;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    //
    public function search(Request $request)
    {
        $search = $request->input('search');
        // dd($search);
        // $results = Product::where('name', 'like', "%$search%")->get();
        // return view('products.index', ['results' => $results]);
        // test
        $chart = new QuickChart(array(
            'width' => 500,
            'height' => 300,
        ));

        $count = 0;
        $no = 0;
        $R1 = 0;
        $I1 = 0;
        $A1 = 0;
        $S1 = 0;
        $E1 = 0;
        $C1 = 0;
        $R2 = 0;
        $I2 = 0;
        $A2 = 0;
        $S2 = 0;
        $E2 = 0;
        $C2 = 0;
        $R3 = 0;
        $I3 = 0;
        $A3 = 0;
        $S3 = 0;
        $E3 = 0;
        $C3 = 0;
        $RT = 0;
        $IT = 0;
        $AT = 0;
        $ST = 0;
        $ET = 0;
        $CT = 0;
        $nama = "";
        $nisn = "";
        $sekolah = "";
        $tgl_lahir = "";
        $riasec = [];

        $sheetdb = DB::table('test_minat')->get();
        $sheetdb2 = DB::table('penjelasan')->get();

        // dd($sheetdb);
        foreach ($sheetdb as $key => $value) {
            if ($value->nisn == $search) {
                // dd($value->nama);
                $nama = $value->nama;
                $nisn = $value->nisn;
                $sekolah = $value->sekolah;
                $tgl_lahir = $value->tgl_lahir;
                $timestamp = $value->timestamp;

                $count++;
                foreach ($value as $key => $value1) {
                    $no++;

                    //Bagian I
                    if ($no > 8 && $no < 19 && $value1 == "Sesuai") {
                        $R1++;
                    }
                    if ($no > 18 && $no < 29 && $value1 == "Sesuai") {
                        $I1++;
                    }
                    if ($no > 28 && $no < 41 && $value1 == "Sesuai") {
                        $A1++;
                    }
                    if ($no > 40 && $no < 52 && $value1 == "Sesuai") {
                        $S1++;
                    }
                    if ($no > 51 && $no < 63 && $value1 == "Sesuai") {
                        $E1++;
                    }
                    if ($no > 62 && $no < 73 && $value1 == "Sesuai") {
                        $C1++;
                    }

                    //Bagian II
                    if ($no > 72 && $no < 84 && $value1 == "Ya") {
                        $R2++;
                    }
                    if ($no > 83 && $no < 95 && $value1 == "Ya") {
                        $I2++;
                    }
                    if ($no > 94 && $no < 105 && $value1 == "Ya") {
                        $A2++;
                    }
                    if ($no > 104 && $no < 116 && $value1 == "Ya") {
                        $S2++;
                    }
                    if ($no > 115 && $no < 127 && $value1 == "Ya") {
                        $E2++;
                    }
                    if ($no > 126 && $no < 137 && $value1 == "Ya") {
                        $C2++;
                    }

                    //Bagian III
                    if ($no > 136 && $no < 149 && $value1 == "Ya") {
                        $R3++;
                    }
                    if ($no > 148 && $no < 163 && $value1 == "Ya") {
                        $I3++;
                    }
                    if ($no > 162 && $no < 177 && $value1 == "Ya") {
                        $A3++;
                    }
                    if ($no > 176 && $no < 189 && $value1 == "Ya") {
                        $S3++;
                    }
                    if ($no > 188 && $no < 204 && $value1 == "Ya") {
                        $E3++;
                    }
                    if ($no > 203 && $no < 216 && $value1 == "Ya") {
                        $C3++;
                    }

                }

                // echo "R" . "    ||";
                // echo "I" . "    ||";
                // echo "A" . "    ||";
                // echo "S" . "    ||";
                // echo "E" . "    ||";
                // echo "C" . "    ||";

                // echo "<br>";
                // echo $R1 . "    ||";
                // echo $I1 . "    ||";
                // echo $A1 . "    ||";
                // echo $S1 . "    ||";
                // echo $E1 . "    ||";
                // echo $C1 . "    ||";

                // echo "<br>";
                // echo $R2 . "    ||";
                // echo $I2 . "    ||";
                // echo $A2 . "    ||";
                // echo $S2 . "    ||";
                // echo $E2 . "    ||";
                // echo $C2 . "    ||";

                // echo "<br>";
                // echo $R3 . "    ||";
                // echo $I3 . "    ||";
                // echo $A3 . "    ||";
                // echo $S3 . "    ||";
                // echo $E3 . "    ||";
                // echo $C3 . "    ||";

                echo "<br>";
                $RT = $R3 + $R2 + $R1;
                $IT = $I3 + $I2 + $I1;
                $AT = $A3 + $A2 + $A1;
                $ST = $S3 + $S2 + $S1;
                $ET = $E3 + $E2 + $E1;
                $CT = $C3 + $C1 + $C1;

                // echo $RT . "  ||";
                // echo $IT . "  ||";
                // echo $AT . "  ||";
                // echo $ST . "  ||";
                // echo $ET . "  ||";
                // echo $CT . "  ||";

                $riasec = [
                    "Realistic" => $RT,
                    "Investigative" => $IT,
                    "Artistic" => $AT,
                    "Social" => $ST,
                    "Enterprising" => $ET,
                    "Conventional" => $CT,
                ];
                $i = 0;
                $riasec_sort = collect($riasec)->sort()->reverse()->toArray();
                // foreach ($riasec as $x => $x_value) {
                //     $i++;
                //     if ($i <= 3) {
                //         # code...
                //         echo "Key=" . $x . ", Value=" . $x_value;
                //         echo "<br>";
                //     }
                // }
            }
        }

        // dd($riasec);
        // Replace this with your actual data retrieval logic
        // $data = ['labels' => ['Realistis', 'Investigatif', 'Artistik', 'Sosial', 'Enterprising', 'Conventional'],
        //     'data' => [$RT, $IT, $AT, $ST, $ET, $CT],
        // ];

        if ($count > 0) {
            // $chart = "https://quickchart.io/chart?width=50&height=30&c=
            // {
            //     type: 'radar',
            //     data: {
            //       labels: ['Realistic','Investigative','Artistic','Social','Enterprising','Conventional'],
            //       datasets: [
            //         { label: 'SDS Holand', data: [" . $RT . ", " . $IT . ", " . $AT . ", " . $ST . ", " . $ET . "," . $CT . "] },
            //       ],
            //     },
            //      options: {
            //       scale: {
            //         ticks: {
            //           min: 0,
            //           max: " . max($riasec) . ",
            //           stepSize: " . floor(max($riasec) / 5) . ",
            //         },
            //       }
            //     }
            //   }
            //   ";
            $chart = "https://quickchart.io/chart?width=500&height=300&c=
              {
                type: 'radar',
                data: {
                   labels: ['Realistic','Investigative','Artistic','Social','Enterprising','Conventional'],
                  datasets: [
                     { label: 'SDS Holand', data: [" . $RT . ", " . $IT . ", " . $AT . ", " . $ST . ", " . $ET . "," . $CT . "] },
                  ],
                },
                options: {
                         scale: {
                          ticks: {
                            min: 0,
                             max: " . (max($riasec) + 1) . ",
                             stepSize: " . floor(max($riasec) / 5) . ",
                           },
                          }
                        }
              }";
            # code...
            // return view('radar-chart', [
            //     'chart' => $chart,
            //     'riasec' => $riasec,
            //     'sheetdb2' => $sheetdb2,
            //     'sum_riasec' => array_sum($riasec),
            //     'riasec_sort' => $riasec_sort,
            //     'nama' => $nama,
            //     'nisn' => $nisn,
            //     'sekolah' => $sekolah,
            //     'tgl_lahir' => $tgl_lahir,
            // ]);
            $customPaper = [0, 0, 609.4488, 935.433];
            $pdf = Pdf::loadView('radar-chart', [
                'chart' => $chart,
                'riasec' => $riasec,
                'sheetdb2' => $sheetdb2,
                'sum_riasec' => array_sum($riasec),
                'riasec_sort' => $riasec_sort,
                'nama' => $nama,
                'nisn' => $nisn,
                'sekolah' => $sekolah,
                'tgl_lahir' => $tgl_lahir,
                'timestamp' => $timestamp,
                'url' => 'http://sds.smkn2malinau.sch.id/search?search=' . $search,
            ])->setPaper($customPaper, 'potrait');

            return $pdf->stream('Hasil Tes SDS ' . $nama . '.pdf');
            // return $pdf->download();
        } else {
            return view('error');
        }

    }

    public function get()
    {
        $no = 0;
        $R1 = 0;
        $I1 = 0;
        $A1 = 0;
        $S1 = 0;
        $E1 = 0;
        $C1 = 0;
        $R2 = 0;
        $I2 = 0;
        $A2 = 0;
        $S2 = 0;
        $E2 = 0;
        $C2 = 0;
        $R3 = 0;
        $I3 = 0;
        $A3 = 0;
        $S3 = 0;
        $E3 = 0;
        $C3 = 0;

        $sheetdb = new SheetDB('t6avrn4t730yz');
        // dd($sheetdb->get());
        foreach ($sheetdb->get() as $key => $value) {
            if ($value->NISN == "0062559419") {
                // dd($value);
                foreach ($value as $key => $value1) {
                    $no++;

                    //Bagian I
                    if ($no > 8 && $no < 19 && $value1 == "Sesuai") {
                        $R1++;
                    }
                    if ($no > 18 && $no < 29 && $value1 == "Sesuai") {
                        $I1++;
                    }
                    if ($no > 28 && $no < 41 && $value1 == "Sesuai") {
                        $A1++;
                    }
                    if ($no > 40 && $no < 52 && $value1 == "Sesuai") {
                        $S1++;
                    }
                    if ($no > 51 && $no < 63 && $value1 == "Sesuai") {
                        $E1++;
                    }
                    if ($no > 62 && $no < 73 && $value1 == "Sesuai") {
                        $C1++;
                    }

                    //Bagian II
                    if ($no > 72 && $no < 84 && $value1 == "Ya") {
                        $R2++;
                    }
                    if ($no > 83 && $no < 95 && $value1 == "Ya") {
                        $I2++;
                    }
                    if ($no > 94 && $no < 105 && $value1 == "Ya") {
                        $A2++;
                    }
                    if ($no > 104 && $no < 116 && $value1 == "Ya") {
                        $S2++;
                    }
                    if ($no > 115 && $no < 127 && $value1 == "Ya") {
                        $E2++;
                    }
                    if ($no > 126 && $no < 137 && $value1 == "Ya") {
                        $C2++;
                    }

                    //Bagian III
                    if ($no > 136 && $no < 149 && $value1 == "Ya") {
                        $R3++;
                    }
                    if ($no > 148 && $no < 163 && $value1 == "Ya") {
                        $I3++;
                    }
                    if ($no > 162 && $no < 177 && $value1 == "Ya") {
                        $A3++;
                    }
                    if ($no > 176 && $no < 189 && $value1 == "Ya") {
                        $S3++;
                    }
                    if ($no > 188 && $no < 204 && $value1 == "Ya") {
                        $E3++;
                    }
                    if ($no > 203 && $no < 216 && $value1 == "Ya") {
                        $C3++;
                    }

                }

                // echo "R" . "    ||";
                // echo "I" . "    ||";
                // echo "A" . "    ||";
                // echo "S" . "    ||";
                // echo "E" . "    ||";
                // echo "C" . "    ||";

                // echo "<br>";
                // echo $R1 . "    ||";
                // echo $I1 . "    ||";
                // echo $A1 . "    ||";
                // echo $S1 . "    ||";
                // echo $E1 . "    ||";
                // echo $C1 . "    ||";

                // echo "<br>";
                // echo $R2 . "    ||";
                // echo $I2 . "    ||";
                // echo $A2 . "    ||";
                // echo $S2 . "    ||";
                // echo $E2 . "    ||";
                // echo $C2 . "    ||";

                // echo "<br>";
                // echo $R3 . "    ||";
                // echo $I3 . "    ||";
                // echo $A3 . "    ||";
                // echo $S3 . "    ||";
                // echo $E3 . "    ||";
                // echo $C3 . "    ||";

                echo "<br>";
                $RT = $R3 + $R2 + $R1;
                $IT = $I3 + $I2 + $I1;
                $AT = $A3 + $A2 + $A1;
                $ST = $S3 + $S2 + $S1;
                $ET = $E3 + $E2 + $E1;
                $CT = $C3 + $C1 + $C1;

                // echo $RT . "  ||";
                // echo $IT . "  ||";
                // echo $AT . "  ||";
                // echo $ST . "  ||";
                // echo $ET . "  ||";
                // echo $CT . "  ||";

                $riasec = [
                    "R" => $RT,
                    "I" => $IT,
                    "A" => $AT,
                    "S" => $ST,
                    "E" => $ET,
                    "C" => $CT,
                ];
                $i = 0;
                $riasec = collect($riasec)->sort()->reverse()->toArray();
                foreach ($riasec as $x => $x_value) {
                    $i++;
                    if ($i <= 3) {
                        # code...
                        echo "Key=" . $x . ", Value=" . $x_value;
                        echo "<br>";
                    }
                }
                // dd();

                // Replace this with your actual data retrieval logic
                $data = ['labels' => ['Realistis', 'Investigatif', 'Artistik', 'Sosial', 'Enterprising', 'Conventional'],
                    'data' => [$RT, $IT, $AT, $ST, $ET, $CT],
                ];
                return view('radar-chart', compact('data'));
            }
        }
    }
}
