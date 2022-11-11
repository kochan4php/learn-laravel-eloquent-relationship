@extends('layouts.app')

@section('container')
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="font-bold text-center">One to One</h2>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-nowrap">No</th>
                                <th class="text-nowrap">Nama User</th>
                                <th class="text-nowrap">Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-nowrap">{{ $loop->iteration }}</td>
                                    <td class="text-nowrap">{{ $user->nama }}</td>
                                    <td class="text-nowrap">{{ $user->phone->no_telp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
