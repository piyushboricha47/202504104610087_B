@extends('layouts.app')

@section('title', 'Edit Expense')

@section('content')
    <h1>Edit Expense</h1>
    <p class="muted">Update the selected expense below.</p>

    @include('expenses._form', [
        'action' => url('/edit/' . $expense->id),
        'buttonText' => 'Update Expense',
        'expense' => $expense,
    ])
@endsection
