@if ($errors->any())
    <div class="error-list">
        <strong>Please fix the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ $action }}">
    @csrf

    <div class="field">
        <label for="title">Title</label>
        <input
            id="title"
            name="title"
            type="text"
            value="{{ old('title', $expense->title ?? '') }}"
            placeholder="e.g. Groceries"
            required
        >
    </div>

    <div class="field">
        <label for="amount">Amount</label>
        <input
            id="amount"
            name="amount"
            type="number"
            step="0.01"
            min="0"
            value="{{ old('amount', $expense->amount ?? '') }}"
            placeholder="0.00"
            required
        >
    </div>

    <div class="actions">
        <button type="submit">{{ $buttonText }}</button>
        <a class="button secondary" href="{{ url('/') }}">Back</a>
    </div>
</form>
