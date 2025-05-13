@extends('layouts.app')

@section('content')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/superadmin/karyawan/edit/{{$data->id}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label class="floating-label" for="Email">NIK Karyawan</label>
                            <input type="text" class="form-control" name="nik" value="{{$data->nik}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">NAMA Karyawan</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Perusahaan</label>
                            <select class="form-control" name="perusahaan_id">
                                <option value="">-</option>
                                @foreach ($perusahaan as $item)
                                <option value="{{$item->id}}" {{$data->perusahaan_id == $item->id ?
                                    'selected':''}}>{{$item->nama_usaha}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Alamat</label>
                            <input type="text" class="form-control" name="alamat" required value="{{$data->alamat}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Telp</label>
                            <input type="text" class="form-control" name="telp" required value="{{$data->telp}}">
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Jkel</label>
                            <select class="form-control" name="jkel">
                                <option value="L" {{$data->jkel == 'L' ?
                                    'selected':''}}>Laki-Laki</option>
                                <option value="P" {{$data->jkel == 'P' ?
                                    'selected':''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Pendidikan</label>
                            <select class="form-control" name="pendidikan">
                                <option value="SD" {{$data->pendidikan == 'SD' ?
                                    'selected':''}}>SD</option>
                                <option value="SMP" {{$data->pendidikan == 'SMP' ?
                                    'selected':''}}>SMP</option>
                                <option value="SMA"> {{$data->pendidikan == 'SMA' ?
                                    'selected':''}}SMA</option>
                                <option value="D3" {{$data->pendidikan == 'D3' ?
                                    'selected':''}}>D3</option>
                                <option value="S1"> {{$data->pendidikan == 'S1' ?
                                    'selected':''}}S1</option>
                                <option value="S2" {{$data->pendidikan == 'S2' ?
                                    'selected':''}}>S2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Jurusan (kosongkan jika tidak ada)</label>
                            <input type="text" class="form-control" name="jurusan" value="{{$data->jurusan}}" required>
                        </div>
                        <div class="form-group">
                            <label class="floating-label" for="Email">Tanggal Bekerja</label>
                            <input type="date" class="form-control" name="tanggal_bekerja"
                                value="{{$data->tanggal_bekerja}}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/superadmin/karyawan" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush