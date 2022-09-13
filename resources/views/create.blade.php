@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header create-listings text-center"><h5>Create Listings</h5></div>
                <div class="container">
                    <form action="/listings" method="POST">
                        @csrf
                        {{method_field('POST')}}
                        <div class="mb-3 mt-2">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
                            <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website</label>
                            <input type="text" class="form-control" name="website" placeholder="Enter Your Website">
              
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Contact Phone Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Business Address">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Bio</label>
                            <input type="textarea" name="bio" class="form-control" placeholder="Bio">
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection