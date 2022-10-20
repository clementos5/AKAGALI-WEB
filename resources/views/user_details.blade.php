@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User details</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Names</th>
                                <td>:{{ $user->first_name }} {{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone number</th>
                                <td>:{{ $user->phone_number }}</td>
                            </tr>
                            <tr>
                                <th>Cell </th>
                                <td>:{{ Akagari\Cell::cellName($user->cell_id) }}</td>
                            </tr>
                            <tr>
                                <th>User type</th>
                                <td>{{ $user->user_type }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="/users/{{$user->id}}/details" class="btn btn-xs btn-primary" title="Details">
                                        <i class="fa fa-list"></i> Details
                                    </a>
                                    <a href="/users/edit/{{$user->id}}" class="btn btn-xs btn-warning" title="Edit">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                    <a onclick="return confirm('Are you sure you want to delete this user?');" href="/users/destroy/{{$user->id}}" class="btn btn-xs btn-danger" title="Delete">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
