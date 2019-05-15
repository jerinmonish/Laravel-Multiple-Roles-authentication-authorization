@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(@Auth::user()->user_role) }} - Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(@Auth::user()->user_role == 'student')
                        <a href="{{ route('list-teacher') }}" class="btn btn-primary">View Teacher</a>
                    @elseif(@Auth::user()->user_role == 'teacher')
                        <a href="{{ route('list-student') }}" class="btn btn-primary">View Student</a>
                    @elseif(@Auth::user()->user_role == 'admin')
                        <a href="{{ route('list-user') }}" class="btn btn-primary">View Users</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
