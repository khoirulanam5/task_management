@extends('theme.index')
@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">

        <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <div class="bg-primary text-white d-flex justify-content-center align-items-center rounded p-2"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-list-task" style="font-size: 1rem;"></i>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Total Task</span>
                    <h3 class="card-title mb-2 text-dark">{{ $totalTask }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <div class="bg-warning text-dark d-flex justify-content-center align-items-center rounded p-2"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-hourglass-split" style="font-size: 1rem;"></i>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">To Do</span>
                    <h3 class="card-title mb-2 text-dark">{{ $taskTodo }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <div class="bg-info text-white d-flex justify-content-center align-items-center rounded p-2"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-arrow-repeat" style="font-size: 1rem;"></i>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">In Progress</span>
                    <h3 class="card-title mb-2 text-dark">{{ $taskProgress }}</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <div class="bg-success text-white d-flex justify-content-center align-items-center rounded p-2"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-check2-circle" style="font-size: 1rem;"></i>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Done</span>
                    <h3 class="card-title mb-2 text-dark">{{ $taskDone }}</h3>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
