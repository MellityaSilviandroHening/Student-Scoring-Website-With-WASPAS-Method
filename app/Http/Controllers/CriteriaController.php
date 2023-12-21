<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Models\Criteria;


class CriteriaController extends Controller
{
    public function index()
    {
        $criteria = Criteria::all();
        $jumlahSiswa = student::count();
        return view('activities.index', compact('$jumlahSiswa'));
    }
    public function getMinAndMaxValue()
    {
        $maxMinValues = [];
        $finalvalue=0;
        $finalvaluename=0;


        // Kolom Umur_Tahun
        $maxMinValues['Umur_Tahun']['max'] = student::orderBy('Umur_Tahun', 'desc')->first()['Umur_Tahun'];
        $maxMinValues['Umur_Tahun']['min'] = student::orderBy('Umur_Tahun', 'asc')->first()['Umur_Tahun'];

        // Kolom Afirmasi_Perpindahan_Orang_Tua
        $maxMinValues['Afirmasi_Perpindahan_Orang_Tua']['max'] = student::orderBy('Afirmasi_Perpindahan_Orang_Tua', 'desc')->first()['Afirmasi_Perpindahan_Orang_Tua'];
        $maxMinValues['Afirmasi_Perpindahan_Orang_Tua']['min'] = student::orderBy('Afirmasi_Perpindahan_Orang_Tua', 'asc')->first()['Afirmasi_Perpindahan_Orang_Tua'];

        // Kolom Potensi_Kecerdasan
        $maxMinValues['Potensi_Kecerdasan']['max'] = student::orderBy('Potensi_Kecerdasan', 'desc')->first()['Potensi_Kecerdasan'];
        $maxMinValues['Potensi_Kecerdasan']['min'] = student::orderBy('Potensi_Kecerdasan', 'asc')->first()['Potensi_Kecerdasan'];

        // Kolom Penghasilan_Orang_Tua_Rupiah
        $maxMinValues['Penghasilan_Orang_Tua_Rupiah']['max'] = student::orderBy('Penghasilan_Orang_Tua_Rupiah', 'desc')->first()['Penghasilan_Orang_Tua_Rupiah'];
        $maxMinValues['Penghasilan_Orang_Tua_Rupiah']['min'] = student::orderBy('Penghasilan_Orang_Tua_Rupiah', 'asc')->first()['Penghasilan_Orang_Tua_Rupiah'];

        // Kolom Kemampuan_Komunikasi
        $maxMinValues['Kemampuan_Komunikasi']['max'] = student::orderBy('Kemampuan_Komunikasi', 'desc')->first()['Kemampuan_Komunikasi'];
        $maxMinValues['Kemampuan_Komunikasi']['min'] = student::orderBy('Kemampuan_Komunikasi', 'asc')->first()['Kemampuan_Komunikasi'];

        // Kolom Ketaatan_Beragama
        $maxMinValues['Ketaatan_Beragama']['max'] = student::orderBy('Ketaatan_Beragama', 'desc')->first()['Ketaatan_Beragama'];
        $maxMinValues['Ketaatan_Beragama']['min'] = student::orderBy('Ketaatan_Beragama', 'asc')->first()['Ketaatan_Beragama'];

        // Kolom Prestasi
        $maxMinValues['Prestasi']['max'] = student::orderBy('Prestasi', 'desc')->first()['Prestasi'];
        $maxMinValues['Prestasi']['min'] = student::orderBy('Prestasi', 'asc')->first()['Prestasi'];

        // Kolom Kedisiplinan
        $maxMinValues['Kedisiplinan']['max'] = student::orderBy('Kedisiplinan', 'desc')->first()['Kedisiplinan'];
        $maxMinValues['Kedisiplinan']['min'] = student::orderBy('Kedisiplinan', 'asc')->first()['Kedisiplinan'];

        // Kolom Kepedulian
        $maxMinValues['Kepedulian']['max'] = student::orderBy('Kepedulian', 'desc')->first()['Kepedulian'];
        $maxMinValues['Kepedulian']['min'] = student::orderBy('Kepedulian', 'asc')->first()['Kepedulian'];

        // Kolom Jarak
        $maxMinValues['Jarak']['max'] = student::orderBy('Jarak', 'desc')->first()['Jarak'];
        $maxMinValues['Jarak']['min'] = student::orderBy('Jarak', 'asc')->first()['Jarak'];

        $criteriaName = array_keys($maxMinValues);
        $criteriaMaxMinValue = array_values($maxMinValues);


        // dd($maxMinValues);


        // $valuesAtIndexOne = array_values($maxMinValues)[1]['max'];

        // var_dump($valuesAtIndexOne);
        // // $value= array_values($maxMinValues)[1]['max'];
        // // $value_4 = $value[0];
        // // var_dump($value_4);

        $value = array_keys($maxMinValues);
        // dd($value);
        // $value_4 = $value[0];
        // var_dump($value_4);
        $dataStudents=[];
        $dataFinalOutput = [];
        $i=0;

        $students = student::all();
        foreach ($students as $student) {
            $student_name = $student->name;

            $C1_criteria = Criteria::where('name', '=', $value[0])->first();

            if ($C1_criteria->category == 'Benefit') {
                $C1_value = $student->Umur_Tahun / array_values($maxMinValues)[0]['max'];
            } else {
                $C1_value = array_values($maxMinValues)[0]['min'] / $student->Umur_Tahun;
            }

            $C2_criteria = Criteria::where('name', '=', $value[1])->first();
            if ($C2_criteria->category == 'Benefit') {
                $C2_value = $student->Afirmasi_Perpindahan_Orang_Tua / array_values($maxMinValues)[1]['max'];
            } else {
                $C2_value = array_values($maxMinValues)[1]['min'] / $student->Afirmasi_Perpindahan_Orang_Tua;
            }

            $C3_criteria = Criteria::where('name', '=', $value[2])->first();
            if ($C3_criteria->category == 'Benefit') {
                $C3_value = $student->Potensi_Kecerdasan / array_values($maxMinValues)[2]['max'];
            } else {
                $C3_value = array_values($maxMinValues)[2]['min'] / $student->Potensi_Kecerdasan;
            }

            $C4_criteria = Criteria::where('name', '=', $value[3])->first();
            if ($C4_criteria->category == 'Benefit') {
                $C4_value = $student->Penghasilan_Orang_Tua_Rupiah / array_values($maxMinValues)[3]['max'];
            } else {
                $C4_value = array_values($maxMinValues)[3]['min'] / $student->Penghasilan_Orang_Tua_Rupiah;
            }

            $C5_criteria = Criteria::where('name', '=', $value[4])->first();
            if ($C5_criteria->category == 'Benefit') {
                $C5_value = $student->Kemampuan_Komunikasi / array_values($maxMinValues)[4]['max'];
            } else {
                $C5_value = array_values($maxMinValues)[4]['min'] / $student->Kemampuan_Komunikasi;
            }

            $C6_criteria = Criteria::where('name', '=', $value[5])->first();
            if ($C6_criteria->category == 'Benefit') {
                $C6_value = $student->Ketaatan_Beragama / array_values($maxMinValues)[5]['max'];
            } else {
                $C6_value = array_values($maxMinValues)[5]['min'] / $student->Ketaatan_Beragama;
            }

            $C7_criteria = Criteria::where('name', '=', $value[6])->first();
            if ($C7_criteria->category == 'Benefit') {
                $C7_value = $student->Prestasi / array_values($maxMinValues)[6]['max'];
            } else {
                $C7_value = array_values($maxMinValues)[6]['min'] / $student->Prestasi;
            }

            $C8_criteria = Criteria::where('name', '=', $value[7])->first();
            if ($C8_criteria->category == 'Benefit') {
                $C8_value = $student->Kedisiplinan / array_values($maxMinValues)[7]['max'];
            } else {
                $C8_value = array_values($maxMinValues)[7]['min'] / $student->Kedisiplinan;
            }

            $C9_criteria = Criteria::where('name', '=', $value[8])->first();
            if ($C9_criteria->category == 'Benefit') {
                $C9_value = $student->Kepedulian / array_values($maxMinValues)[8]['max'];
            } else {
                $C9_value = array_values($maxMinValues)[8]['min'] / $student->Kepedulian;
            }

            $C10_criteria = Criteria::where('name', '=', $value[9])->first();
            if ($C10_criteria->category == 'Cost') {
                $C10_value = array_values($maxMinValues)[9]['min'] / $student->Jarak;
            } else {
                $C10_value = $student->Jarak / array_values($maxMinValues)[9]['max'];
            }



            $tempOperand1 =pow($C1_value, $C1_criteria->weight);
            $tempOperand2 =pow($C2_value, $C2_criteria->weight);
            $tempOperand3 =pow($C3_value, $C3_criteria->weight);
            $tempOperand4 =pow($C4_value, $C4_criteria->weight);
            $tempOperand5 =pow($C5_value, $C5_criteria->weight);
            $tempOperand6 =pow($C6_value, $C6_criteria->weight);
            $tempOperand7 =pow($C7_value, $C7_criteria->weight);
            $tempOperand8 =pow($C8_value, $C8_criteria->weight);
            $tempOperand9 =pow($C9_value, $C9_criteria->weight);
            $tempOperand10 =pow($C10_value, $C10_criteria->weight);
            $tempValue = 0.5 * (($C1_value * $C1_criteria->weight) + ($C2_value * $C2_criteria->weight) + ($C3_value * $C3_criteria->weight) + ($C4_value * $C4_criteria->weight) + ($C5_value * $C5_criteria->weight) + ($C6_value * $C6_criteria->weight) + ($C7_value * $C7_criteria->weight) + ($C8_value * $C8_criteria->weight) + ($C9_value * $C9_criteria->weight) + ($C10_value * $C10_criteria->weight))
                                + 0.5 * ($tempOperand1 * $tempOperand2 * $tempOperand3 * $tempOperand4 * $tempOperand5 * $tempOperand6 * $tempOperand7 * $tempOperand8 * $tempOperand9 * $tempOperand10);


            $dataStudents[$i][0]= $C1_value ;
            $dataStudents[$i][1]= $C2_value ;
            $dataStudents[$i][2]= $C3_value ;
            $dataStudents[$i][3]= $C4_value ;
            $dataStudents[$i][4]= $C5_value ;
            $dataStudents[$i][5]= $C6_value ;
            $dataStudents[$i][6]= $C7_value ;
            $dataStudents[$i][7]= $C8_value ;
            $dataStudents[$i][8]= $C9_value ;
            $dataStudents[$i][9]= $C10_value;

            $dataFinalOutput[$i][0] = $student->name;
            $dataFinalOutput[$i][1] = $tempValue;

            $i++;


            if ($finalvalue < $tempValue) {
                $finalvalue = $tempValue;
                $finalvaluename = $student_name;
            } else {
                continue;
            }

        }
        // Urutkan array berdasarkan kolom kedua secara ascending
        usort($dataFinalOutput, function($a, $b) {
            return $b[1] <=> $a[1];
        });



        return view('ui.hasilHitung', compact('finalvalue','finalvaluename', 'criteriaName', 'criteriaMaxMinValue', 'dataStudents', 'dataFinalOutput'));

    }
}