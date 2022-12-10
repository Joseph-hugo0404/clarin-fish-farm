@extends('layouts.admin')
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
            <tr>
                <th>Fisp Pond Name</th>
                <td>
                    {{$data->title}}
                </td>
            </tr>

            <tr>
                <th>Fisp Name</th>
                <td>
                    {{$data->fish_name}}
                </td>
            </tr>

            <tr>
                <th>Fisp Pond Size</th>
                <td>
                    {{$data->pond_size}}
                </td>
            </tr>

            <tr>
                <th>Date Created</th>
                <td>
                    {{$data->date_added}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection