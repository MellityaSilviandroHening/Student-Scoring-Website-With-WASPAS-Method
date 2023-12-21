@extends('layouts.admin')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: #000;">Data Alternatif</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content px-5">

            <table class="table table-hover">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Kode</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                        <th scope="col">C8</th>
                        <th scope="col">C9</th>
                        <th scope="col">C10</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td scope="row">{{ $student->code }}</td>
                            <td>
                                {{ $student->NISN }}
                            </td>
                            <td>
                                {{ $student->name }}
                            </td>
                            <td>
                                {{ $student->gender }}
                            </td>
                            <td>
                                {{ $student->birthplace_and_date }}
                            </td>
                            <td>
                                {{ $student->Umur_Tahun }}

                            </td>
                            <td>{{ $student->Afirmasi_Perpindahan_Orang_Tua }}</td>
                            <td>{{ $student->Potensi_Kecerdasan }}</td>
                            <td>{{ $student->Penghasilan_Orang_Tua_Rupiah }}</td>
                            <td>{{ $student->Kemampuan_Komunikasi }}</td>
                            <td>{{ $student->Ketaatan_Beragama }}</td>
                            <td>{{ $student->Prestasi }}</td>
                            <td>{{ $student->Kedisiplinan }}</td>
                            <td>{{ $student->Kepedulian }}</td>
                            <td>{{ $student->Jarak }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </section>

        <!-- /.content -->
    </div>
@endsection
