@extends('jadwal.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Piket Rayon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jadwal.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Hari</th>
            <th>Tugas</th>
            <th>Penanggung Jawab</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jadwal as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->hari }}</td>
            <td>{{ $data->jenis }}</td>
            <td>{{ $data->jawab }}</td>
            <td>
                <form action="{{ route('jadwal.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin??')" >
           
                    <a class="btn btn-primary" href="{{ route('jadwal.edit',$data->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $jadwal->links() !!}
        
@endsection