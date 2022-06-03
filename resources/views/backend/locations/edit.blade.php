@extends('backend.layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update location</h2>
        <div class="lead">
            Edit location.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('locations.update', $location->id) }}">
                @method('patch')
                @csrf

                <input value="{{ $location->id}}" 
                        type="hidden" 
                        class="form-control" 
                        name="id" 
                        placeholder="Business Name" >

                <div class="mb-3">
                    <label for="name" class="form-label">Business Name</label>
                    <input value="{{ $location->name}}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Business Name" >

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input value="{{ $location->address }}" 
                        type="text" 
                        class="form-control" 
                        name="address" 
                        placeholder="Address" >

                    @if ($errors->has('address'))
                        <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="virtual_number" class="form-label">Mobile</label>
                    <textarea
                        type="text" 
                        class="form-control" 
                        name="virtual_number" 
                        placeholder="Mobile" >{{ $location->virtual_number }}</textarea>

                    @if ($errors->has('virtual_number'))
                        <span class="text-danger text-left">{{ $errors->first('virtual_number') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="website_url" class="form-label">Website</label>
                    <textarea
                        type="text" 
                        class="form-control" 
                        name="website_url" 
                        placeholder="Website" >{{ $location->website_url }}</textarea>

                    @if ($errors->has('website_url'))
                        <span class="text-danger text-left">{{ $errors->first('website_url') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="display_name" class="form-label">Display Name</label>
                    <textarea
                        type="text" 
                        class="form-control" 
                        name="display_name" 
                        placeholder="Website" >{{ $location->display_name }}</textarea>

                    @if ($errors->has('display_name'))
                        <span class="text-danger text-left">{{ $errors->first('display_name') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('location.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection