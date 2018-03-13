@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Customer</div>

                <div class="panel-body">
                    
                    <form action="{{ route('customer.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group col-md-12">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" required id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Code</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Code">                          
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nif">Nif</label>
                            <input type="text" class="form-control" id="nif" name="nif" placeholder="Nif">                          
                        </div>   
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" required class="form-control" id="email" name="email" placeholder="Email">                          
                        </div>            
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">                          
                        </div>
                        <div class="form-group col-md-12">
                            <label for="observation">Observation</label>
                            <textarea class="form-control" id="observation" name="observation" rows="3"></textarea>                          
                        </div>
                        @if ($errors->any())
                            <div class="form-group col-md-12">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
