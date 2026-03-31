@extends('layouts.app')

@section('title', 'Add Expense')

@section('content')
    <h1>Add Expense</h1>
    <p class="muted">This matches the Flask `/add` page in Laravel.</p>

    @include('expenses._form', [
        'action' => url('/add'),
        'buttonText' => 'Save Expense',
    ])
@endsection
