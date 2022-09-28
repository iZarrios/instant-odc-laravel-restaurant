@extends('manage.master')

@section('title', '- Meals')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Meal</h4>
                @include('manage.inc.messages')
                <form class="forms-sample" action="{{route('manage.meals.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Meal Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" value="{{old('description')}}" id="description" placeholder="Meal Description">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Add</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection