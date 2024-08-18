@extends('jadwal.layout')
  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jadwal.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('jadwal.update',$jadwal->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PUT')
    
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
        <h1 style="text-align: center">Halaman Edit </h1>
     <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{$jadwal->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hari:</strong>
                <input type="text" name="hari" class="form-control" placeholder="Hari" value="{{$jadwal->hari}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tugas:</strong>
                <input type="text" name="jenis" class="form-control" placeholder="Tugas" value="{{$jadwal->jenis}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penanggung Jawab:</strong>
                <input type="text" name="jawab" class="form-control" placeholder="Penanggung Jawab" value="{{$jadwal->jawab}}">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="radio" name="ket" value="Hadir" {{$student->ket == 'Hadir'? 'checked' : ''}}> Hadir
                <input type="radio" name="ket" value="Sakit" {{$student->ket == 'Sakit'? 'checked' : ''}}> Sakit
                <input type="radio" name="ket" value="Ijin" {{$student->ket == 'Ijin'? 'checked' : ''}}> Ijin
                <input type="radio" name="ket" value="Alfa" {{$student->ket == 'Alfa'? 'checked' : ''}}> Alfa
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</div>
</div>
     
</form>
@endsection