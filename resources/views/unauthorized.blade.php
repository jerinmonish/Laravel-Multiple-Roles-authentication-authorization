@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(@Auth::user()->user_role) }} - Dashboard</div>

                <div class="card-body">
                    You cannot access this page! This is for only '{{$role}}'
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
