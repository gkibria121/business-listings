@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header create-listings text-center"><h5>View Listing</h5></div>
                <div class="container">
                        <form >
                        <div class="mb-3 mt-2">
                            <label class="form-label">Name</label>
                            <input readonly  value="{{$listing->name}}" type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input readonly value="{{$listing->email}}" name="email"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                            <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website</label>
                            <input readonly value="{{$listing->website}}"  type="text" class="form-control" name="website" placeholder="Enter Your Website">
              
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input readonly value="{{$listing->phone}}"  type="text" name="phone" class="form-control" placeholder="Contact Phone Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input readonly value="{{$listing->address}}"  type="text" name="address" class="form-control" placeholder="Business Address">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Bio</label>
                            <input readonly value="{{$listing->bio}}" type="textarea" name="bio" class="form-control" placeholder="Bio">
                        </div>

                        <a href="/" class="btn btn-secondary mb-3">GO BACK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection