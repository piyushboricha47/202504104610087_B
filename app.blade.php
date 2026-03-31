<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Expense Tracker')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .container {
            max-width: 860px;
            margin: 40px auto;
            padding: 0 16px;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        }

        h1, h2 {
            margin-top: 0;
        }

        .actions {
            display: flex;
            gap: 12px;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .button,
        button {
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 14px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .button.secondary {
            background: #6b7280;
        }

        .button.danger,
        button.danger {
            background: #dc2626;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            box-sizing: border-box;
        }

        .field {
            margin-bottom: 16px;
        }

        .error-list {
            background: #fef2f2;
            color: #991b1b;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 16px;
        }

        .success {
            background: #ecfdf5;
            color: #065f46;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 16px;
        }

        .muted {
            color: #6b7280;
        }

        .row-actions {
            display: flex;
            gap: 8px;
        }

        .inline {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            @if (session('success'))
                <div class="success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
