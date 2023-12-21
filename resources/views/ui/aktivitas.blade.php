@extends('layouts.admin')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: #000;">Data Kategori</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

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
                        <th scope="col">Code</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Beban</th>
                            {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                        <!-- Memeriksa apakah pengguna memiliki peran 'admin' -->
                        <!-- Tampilkan konten khusus untuk pengguna dengan peran 'admin' -->
                            <ul>
                                @foreach ($Criterias as $Criteria)
                                    <tr>
                                        <td>
                                            {{ $Criteria->code }}
                                        </td>
                                        <td>{{ $Criteria->name }}</td>
                                        <td> {{ $Criteria->category }}</td>
                                        <td> {{ $Criteria->weight }}</td>
                                        {{-- <td>
                                            <form method="POST" action="{{ route('destroyActivity', $Criteria->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td> --}}


                                    </tr>
                                @endforeach
                            </ul>



                </tbody>
            </table>
        </section>

        <!-- /.content -->
    </div>
@endsection
