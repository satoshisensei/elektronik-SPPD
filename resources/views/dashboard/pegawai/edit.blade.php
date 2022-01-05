@extends('dashboard.layouts.app')

@section('container')
    <div class="container container-fluid mb-3 d-flex justify-content-center">
        <h2 class="h3 text-uppercase">Edit Data</h2>
    </div>
    <div class="container container-fluid d-flex justify-content-center">
        <div class="col-md-8 ">
            <div class="portlet light bordered">
                    <div class="form-body">
                        <form action="/pegawai/{{ $pegawais[0]->id }}" method="post">
                        @method('put')
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama')
                                is-invalid
                            @enderror" id="nama" name="nama" placeholder="Masukan Nama..." autofocus required value="{{ old('nama', $pegawais[0]->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">Nip</label>
                            <input type="text" class="form-control @error('nip')
                                is-invalid
                            @enderror" id="nip" name="nip" placeholder="Masukan Nip..." required value="{{ old('nip', $pegawais[0]->nip) }}">
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pangkat_id" class="form-label">Pangkat : </label>
                            <select class="form-select" name="pangkat_id">
                                @foreach($pangkats as $pangkat)
                                    @if(old('pangkat_id',$pegawais[0]->pangkat_id) == $pangkat->id)
                                        <option value="{{ $pangkat->id }}" selected>{{ $pangkat->golongan }}/{{ $pangkat->ruang }}</option>
                                    @else
                                        <option value="{{ $pangkat->id }}">{{ $pangkat->golongan }}/{{ $pangkat->ruang }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('pangkat_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jabatan_id" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan_id">
                                @foreach($jabatans as $jabatan)
                                    @if(old('jabatan_id',$pegawais[0]->jabatan_id) == $jabatan->id)
                                        <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama }}</option>
                                    @else
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat',$pegawais[0]->alamat) }}">
                            <trix-editor input="alamat"></trix-editor>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
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
