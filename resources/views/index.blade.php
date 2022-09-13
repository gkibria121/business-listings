@extends('layouts.app')

@section('content')
<div class="container dashboard-container">  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h5>View Listings</h5>
                </div>
                @if (count($listings)>0)
                <table class="table table-striped">
                    <thead>
                        <th>Company</th>
                    </thead>

                    @foreach ($listings as $listing)
                    <tr>
                        <td colspan="8">
                            {{$listing->name}}
                        </td>
                        <td><a href="/listings/{{$listing->id}}" class="btn btn-primary">View</a></td>
                        @endforeach

                </table>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection