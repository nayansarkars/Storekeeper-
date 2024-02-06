<!-- resources/views/transaction/history.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Transaction History</h2>

        <!-- Display Sale Transaction History Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>${{ $transaction->price }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
