@extends('layouts.app')

@section('title', 'Expense Tracker')

@section('content')
    @php($total = $expenses->sum('amount'))

    <div class="actions">
        <div>
            <h1>Expense Tracker</h1>
            <p class="muted">A Laravel version of your Flask app with add, edit, and delete actions.</p>
        </div>

        <a class="button" href="{{ url('/add') }}">Add Expense</a>
    </div>

    <p><strong>Total:</strong> ${{ number_format((float) $total, 2) }}</p>

    @if ($expenses->isEmpty())
        <p class="muted">No expenses added yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->title }}</td>
                        <td>${{ number_format((float) $expense->amount, 2) }}</td>
                        <td>
                            <div class="row-actions">
                                <a class="button secondary" href="{{ url('/edit/' . $expense->id) }}">Edit</a>

                                <form class="inline" method="POST" action="{{ url('/delete/' . $expense->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
