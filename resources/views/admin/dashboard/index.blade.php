@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">
        <i class="fas fa-tachometer-alt me-2 text-primary"></i> Dashboard Overview
    </h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-start border-primary border-4">
                <div class="card-body">
                    <h6 class="text-muted">Total Users</h6>
                    <h3>{{ $totalUsers }}</h3>
                    <i class="fas fa-users text-primary fa-2x"></i>
                </div>
            </div>
        </div>

    
        <div class="col-md-3">
            <div class="card shadow-sm border-start border-success border-4">
                <div class="card-body">
                    <h6 class="text-muted">Avg Rating</h6>
                    <h3>{{ $averageRating }}/5</h3>
                    <i class="fas fa-star text-success fa-2x"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-start border-danger border-4">
                <div class="card-body">
                    <h6 class="text-muted">Total Testimoni</h6>
                    <h3>{{ $totalTestimoni }}</h3>
                    <i class="fas fa-comment-dots text-danger fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
