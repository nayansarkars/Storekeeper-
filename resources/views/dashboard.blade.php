<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dashboard</h2>

        <!-- Display Sales Figures Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Today's Sales</h5>
                        <p class="card-text">Total sales for today: ${{ $todaySales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yesterday's Sales</h5>
                        <p class="card-text">Total sales for yesterday: ${{ $yesterdaySales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">This Month's Sales</h5>
                        <p class="card-text">Total sales for this month: ${{ $thisMonthSales }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Last Month's Sales</h5>
                        <p class="card-text">Total sales for last month: ${{ $lastMonthSales }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
