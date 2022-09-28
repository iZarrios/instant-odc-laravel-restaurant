@extends('manage.master')

@section('title', '- meals')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Dish</h4>
                @include('manage.inc.messages')
                <form class="forms-sample" action="{{route('manage.dishes.update', $dish->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$dish->name}}" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$dish->description}}" id="description" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" value="{{$dish->price}}" id="price" >
                    </div>
                    <div class="form-group">
                        <label for="meal_id">Assign Meal</label>
                        <select class="form-control" name="meal_id" id="meal_id">
                            <option disabled>-----</option>
                            @foreach ($meals as $meal)
                                <option value="{{$meal->id}}" {{($meal->id == $dish->meal->id) ? "selected" : ""}}>{{$meal->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection