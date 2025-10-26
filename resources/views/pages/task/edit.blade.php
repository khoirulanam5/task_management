@extends('theme.index')
@section('title', 'Edit Task')
@section('content')

<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb fw-semibold fs-5 text-white">
        <li class="breadcrumb-item">
            <a href="{{ route('task.index') }}" class="text-white text-decoration-none">Data Task</a>
        </li>
        <li class="breadcrumb-item active text-white" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="fw-semibold text-dark text-uppercase mb-0">Edit Task</h5>
            </div>
            <div>
                <a href="{{ route('task.index') }}" class="btn btn-secondary">
                    <i class="bx bx-arrow-back"></i> Kembali
                </a>
            </div>
        </div>

        <form action="{{ route('task.update', $task->task_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row mb-3">
                <label class="control-label col-sm-2 align-self-center mb-0 text-uppercase text-dark"
                    style="font-weight: 600; font-size: 14px" for="title">Title <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="title" id="title"
                        class="form-control text-dark @error('title') is-invalid @enderror"
                        value="{{ old('title', $task->title) }}"
                        placeholder="Masukkan Title" required autofocus>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="control-label col-sm-2 align-self-center mb-0 text-uppercase text-dark"
                    style="font-weight: 600; font-size: 14px" for="description">Description <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" name="description" id="description"
                        class="form-control text-dark @error('description') is-invalid @enderror"
                        value="{{ old('description', $task->description) }}"
                        placeholder="Masukkan Description" required>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="status" class="col-sm-2 col-form-label text-dark"
                    style="font-weight: 600; font-size: 14px">Status <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <select id="status" name="status"
                        class="form-control text-dark @error('status') is-invalid @enderror">
                        <option value="">Pilih Status</option>
                        <option value="To Do" {{ old('status', $task->status) == 'To Do' ? 'selected' : '' }}>To Do</option>
                        <option value="In Progress" {{ old('status', $task->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Done" {{ old('status', $task->status) == 'Done' ? 'selected' : '' }}>Done</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="control-label col-sm-2 align-self-center mb-0 text-uppercase text-dark"
                    style="font-weight: 600; font-size: 14px" for="deadline">Deadline <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="date" name="deadline" id="deadline"
                        class="form-control text-dark @error('deadline') is-invalid @enderror"
                        value="{{ old('deadline', $task->deadline) }}"
                        placeholder="Masukkan Deadline" required>
                    @error('deadline')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex mt-4 gap-2">
                <button type="submit" class="btn btn-primary fw-bold" style="width: 25%">Update</button>
                <a href="{{ route('task.index') }}" class="btn btn-outline-secondary text-dark">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('.select2').select2({
        theme: 'bootstrap-5',
        width: '100%',
        placeholder: 'Select an option',
    });
</script>
@endsection
