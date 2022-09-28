@extends('manage.master')

@section('title', '- Dishes')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Dish</h4>
                @include('manage.inc.messages')
                <form class="forms-sample" action="{{route('manage.dishes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Dish Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" value="{{old('description')}}" id="description" placeholder="Dish Description">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" value="{{old('price')}}" id="price" placeholder="Dish Price">
                    </div>
                    <div class="form-group">
                        <label for="meal_id">Assign Meal</label>
                        <select class="form-control" name="meal_id" id="meal_id">
                            <option selected disabled>-----</option>
                            @foreach ($meals as $meal)
                                <option value="{{$meal->id}}">{{$meal->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Add</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection