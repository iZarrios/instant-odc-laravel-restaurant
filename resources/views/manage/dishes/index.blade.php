@extends('manage.master')

@section('title', '- Dishes')

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
                                    <th>Dish Name</th>
                                    <th>Dish Description</th>
                                    <th>Dish Price</th>
                                    <th>Assigned Meal</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dishes as $dish)
                                    <tr>
                                        <td>{{ $dish->name }}</td>
                                        <td>{{ $dish->description }}</td>
                                        <td>{{ $dish->price }}</td>
                                        <td>{{ $dish->meal->name }}</td>
                                        <td>
                                            <a href="{{ route('manage.dishes.edit', $dish->id) }}"
                                                class="btn btn-info mx-2">Edit</a>
                                            <form class="d-inline-block"
                                                action="{{ route('manage.dishes.destroy', $dish->id) }}" method="POST">
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
