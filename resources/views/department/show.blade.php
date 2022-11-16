@extends('dashboard')
@section('title','View Department')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Department
        <a href="{{url('depart')}}" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            @foreach ($data as $d)
           
            <tr>
                <th>Title</th>
                <td>
                    {{$data->title}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection