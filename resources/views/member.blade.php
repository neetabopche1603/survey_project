@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-primary">All Members</h3>
            <a href="javascript:void(0)" onclick="history.back()" class="btn btn-warning float-lg-left"><i class="fa fa-backward"></i> Back</a>
        </div>
        <div class="card-body mt-2">
        <div class="row justify-content-center">
            
        <div class="col-xl-11 col-lg-12 col-md-12 col-11">
            <div class="mr-2">
                <h5 class="mr-4 fw-bold">Name : {{$head->family_head_name}}</h5>
                <h5 class="fw-bold">Mobile : {{$head->mobile}}</h5>
                <h5 class="fw-bold">Ward No : {{$head->ward_no}}</h5>
                <h5 class="fw-bold">Vidhan Sabha Name : {{$head->vidhan_name}}</h5>
                <h5 class="fw-bold">Address : {{$head->address}}</h5>
            </div>

            <table id="survey" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Age</th>
                        <th>Citizenship</th>
                        <th>Voter Card</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $key=>$row)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->relation }}</td>
                        <td>{{ $row->age}}</td>
                        <td>{{ $row->citizenship }}</td>
                        <td>{{ $row->voter }}</td>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </div>
   
   
    </div>
</div>
@endsection