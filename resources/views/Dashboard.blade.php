@extends('layouts.app')

@section('content')
<div class="container dashboard-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h5>Your Listings</h5> <a href="/listings/create" class="btn btn-success btn-add">Add</a></div>            
                @if (count($listings)>0)
                <table class="table table-striped">
                    <thead>
                        <th>Company</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </thead>
                    
                        @foreach ($listings as $listing)
                            <tr><td colspan="8">
                                {{$listing->name}}
                            </td>
                            <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td><form action="/listings/{{$listing->id}}" method="POST" onsubmit="confirm('Do You Want to Remove this!!');">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                              </form></td>
                        @endforeach
                
                </table>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

