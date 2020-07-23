@extends('layouts.master')

@section('title')

  Register-Edit Role | By Alzahraa Products
@endsection

@section('content')

	
	<div class="container">
		<div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title">Edit Role For Registered User</h4>
	            </div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
		        			<form action="/role-register-update/{{ $users->id}}" method="POST">

		        				{{ csrf_field() }}
		        				{{ method_field('PUT') }}

		        				<div class="form-group row">
		                        <label>Name</label>
		                         <input type="text" name="username" value="{{ $users->name}}" class="form-control">
			                    </div>

			                    <div class="form-group row">
			                        <label>Give Role</label>
			                        <select name="usertype" class="form-control">
			                        	<option value ="admin">Admin</option>
			                        	<option value="user">Vendor</option>
			                        </select>
			                    </div>
			                    
			                    <button type="submit" class="btn btn-success">Edit</button>
			                    <button type="/role-register" class="btn btn-danger">Cancel</button>
	        			    </form>
		        		</div>
		        	</div>	
		        </div>
	   		</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection