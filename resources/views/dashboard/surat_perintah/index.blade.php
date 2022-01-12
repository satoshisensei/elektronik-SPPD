
@extends('dashboard.layouts.app')

@section('container')
    @if(session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container container-fluid d-flex justify-content-beetwen">
        <a href="/surat/create" class="btn btn-success mb-3 me-lg-3"><i class="fas fa-plus-square"></i></a>
    </div>
        <div class="container container-fluid">
            <table class="table table-responsive table-striped" id="myTable">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pegawai yang ditugaskan</th>
                    <th scope="col">Tujuan Perjalanan</th>
                    <th scope="col">Nomor SPPD</th>
                    <th scope="col">Status SPPD</th>
                    <th scope="col">Uraian</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($surats as $surat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $surat->pegawai->nama }}</td>
                    <td>{{ $surat->perjalanan->tempat_tujuan }}</td>
                    <td>{{ $surat->nomor }}</td>
                    <td>{{ $surat->status->status }}</td>
                    <td>{!! $surat->uraian !!}</td>
                    <td>
                    @if($surat->status->status == 'Disetujui')
                        <a href="/surat/cetak/{{ $surat->id }}" class="btn btn-secondary" target="_blank"><i class="fas fa-print"></i></a>|
                    @else
                        <a class="btn btn-info" target="_blank"><i class="fas fa-clock"></i></a>|
                    @endif
                        {{-- <a href="/surat/pdf/{{ $surat->id }}" class="btn btn-dark" target="_blank"><i class="fas fa-file-pdf"></i></a>| --}}
                        <a href="/surat/{{ $surat->id }}/edit" class="btn btn-warning"><i class="fas fa-table"></i></a>|
                        <form action="/surat/{{ $surat->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger border-0" onclick="confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @push('scripts')
        <script>
        $(function() {
            $('#surats-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('surat-data') !!}',
                columns: [
                    { data: 'nomor', name: 'nomor' },
                    { data: 'uraian', name: 'uraian' },
                    { data: 'status', name: 'status' },
                ]
            });
        });
        </script>
        @endpush
@endsection
