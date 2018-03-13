@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Phone</th>
                                <th scope="col" class="text-center">Edit</th>
                                <th scope="col" class="text-right">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{ $customer->id }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->code }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td class="text-center">
                                    <a href="{{ route('customer.edit',$customer->id) }}" type="button" class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-right">
                                    <form action="{{ route('customer.delete',$customer->id) }}" method="post">
                                        <input name="_method" type="hidden" value="delete">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                    </form>
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
