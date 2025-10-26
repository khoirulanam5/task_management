@extends('theme.index')
@section('title', 'Task Management')
@section('content')

<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb fw-semibold fs-5 text-white">
        <li class="breadcrumb-item">
            <a href="{{ route('task.index') }}" class="text-white text-decoration-none">Data Task</a>
        </li>
    </ol>
</nav>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <span class="fw-semibold" style="color: #000000 !important">
            {{ session('pesan') }}
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <p class="fw-semibold text-dark fs-4 mb-0">Data Task</p>
        <div class="d-flex gap-2">
            <form action="{{ route('task.index') }}" method="GET">
                <select name="status" class="form-select" style="background-color: #ffffff; min-width: 160px;" onchange="this.form.submit()">
                    <option value=""> Filter Status </option>
                    @foreach ($status as $val)
                        <option value="{{ $val }}" {{ request('status') == $val ? 'selected' : '' }}>
                            {{ $val }}
                        </option>
                    @endforeach
                </select>
            </form>
            <a href="{{ route('task.create') }}" class="btn btn-primary fw-semibold">Tambah</a>
        </div>
    </div>


        <div class="table-responsive text-nowrap rounded">
            <table class="table table-hover shadow-sm" id="dataTable">
                <thead class="bg-primary rounded">
                    <tr>
                        <th class="text-white" width="5%">No</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Description</th>
                        <th class=" text-white">Status</th>
                        <th class=" text-white">Deadline</th>
                        <th class=" text-white">Created By</th>
                        <th class="text-white" width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                        @foreach ($tasks as $val)
                        <tr class="text-dark">
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $val->title }}</td>
                            <td>{{ $val->description }}</td>
                            <td>
                                @if ($val->status === 'To Do')
                                    <span class="badge bg-warning text-dark">To Do</span>
                                @elseif ($val->status === 'In Progress')
                                    <span class="badge bg-primary">In Progress</span>
                                @elseif ($val->status === 'Done')
                                    <span class="badge bg-success">Done</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($val->deadline)->format('d M Y') }}</td>
                            <td>{{ $val->created_by }}</td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('task.edit', $val->task_id) }}" class="btn btn-info btn-sm">
                                    <i class="bx bx-pencil" style="font-size: 1rem"></i>
                                </a>
                                <form action="{{ route('task.destroy', $val->task_id) }}" method="POST" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class=" bx bx-trash" style="font-size: 1rem"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            pageLength: 25,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            columnDefs: [{
                targets: -1,
                orderable: false
            }]
        });
    });
</script>
@endsection