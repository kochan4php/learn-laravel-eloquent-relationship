@extends('layouts.app')

@section('container')
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">One to Many</h2>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-nowrap">No</th>
                                <th class="text-nowrap">Nama User</th>
                                <th class="text-nowrap">Judul Postingan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-nowrap">
                                        {{ $user->nama }}
                                    </td>
                                    <td class="text-nowrap">
                                        @foreach ($user->posts as $post)
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                    {{ $loop->iteration }}. {{ $post->judul }}
                                                </div>
                                            </div>
                                        @endforeach
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
