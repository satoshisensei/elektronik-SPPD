{{-- @dd($surats) --}}
@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Edit Data</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/surat/{{ $surats[0]->id }}" method="post">
                        @method('put')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="pegawai_id" class="form-label">Pegawai</label>
                            <select class="form-select" name="pegawai_id">
                                @foreach($pegawais as $pegawai)
                                    @if(old('pegawai_id', $surats[0]->pegawai_id) == $pegawai->id)
                                        <option value="{{ $pegawai->id }}" selected>{{ $pegawai->nama }}</option>
                                    @else
                                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('perjalanan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div
                        <div class="mb-3">
                            <label for="perjalanan_id" class="form-label">Tempat Tujuan Perjalanan Dinas</label>
                            <select class="form-select" name="perjalanan_id">
                                @foreach($perjalanans as $perjalanan)
                                    @if(old('perjalanan_id',$surats[0]->perjalanan_id) == $perjalanan->id)
                                        <option value="{{ $perjalanan->id }}" selected>{{ $perjalanan->tempat_tujuan }}</option>
                                    @else
                                        <option value="{{ $perjalanan->id }}">{{ $perjalanan->tempat_tujuan }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('perjalanan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor SPPD</label>
                            <input type="text" class="form-control @error('nomor')
                                is-invalid
                            @enderror" id="nomor" name="nomor" placeholder="Masukan Nomor SPPD..." autofocus required value="{{ old('nomor', $surats[0]->nomor) }}">
                            @error('nomor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="uraian" class="form-label">Uraian</label>
                            <input id="uraian" type="hidden" name="uraian" value="{{ old('uraian',$surats[0]->uraian) }}">
                            <trix-editor input="uraian"></trix-editor>
                            @error('uraian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url()->previous() }}" class="btn btn-primary me-md-2">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
