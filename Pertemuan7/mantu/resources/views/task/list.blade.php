@extends('template')

@section('content')

    <div class="container">
        <h1>Daftar Tabel Tugas</h1>

        <div class="card">
            <div class="card-header">
                <h4>Data Tabel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{route(tasks/create)}}" class="btn btn-primary btn-sm">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $loop->literation}}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm"></a>
                                    <a href="" class="btn btn-danger btn-sm"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection