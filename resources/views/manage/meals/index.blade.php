@extends('manage.master')

@section('title', '- Meals')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Meals</h4>
                @include('manage.inc.messages')
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Meal Name</th>
                                <th>Meal Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meals as $meal)
                            <tr>
                                <td>{{$meal->name}}</td>
                                <td>{{$meal->description}}</td>
                                <td>
                                    <a href="{{route('manage.meals.edit', $meal->id)}}" class="btn btn-info mx-2">Edit</a>
                                    <form class="d-inline-block" action="{{route('manage.meals.destroy', $meal->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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