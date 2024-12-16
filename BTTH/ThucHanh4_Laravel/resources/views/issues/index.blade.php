@extends('layouts.app')

@section('title', 'Danh sách vấn đề')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Danh sách vấn đề</h1>

        <!-- Button thêm mới -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('issues.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Thêm vấn đề mới
            </a>
        </div>

        <!-- Thông báo -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Bảng danh sách -->
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên máy tính</th>
                        <th scope="col">Tên phiên bản</th>
                        <th scope="col">Người báo cáo</th>
                        <th scope="col">Thời gian báo cáo</th>
                        <th scope="col">Mức độ</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($issues as $issue)
                        <tr>
                            <th scope="row">{{ $issue->id }}</th>
                            <td>{{ $issue->computer->computer_name }}</td>
                            <td>{{ $issue->computer->model }}</td>
                            <td>{{ $issue->reported_by }}</td>
                            <td>{{ \Carbon\Carbon::parse($issue->reported_date)->format('d/m/Y H:i') }}</td>
                            <td>
                                <span class="badge 
                                    {{ $issue->urgency == 'Cao' ? 'bg-danger' : ($issue->urgency == 'Trung bình' ? 'bg-warning text-dark' : 'bg-success') }}">
                                    {{ $issue->urgency }}
                                </span>
                            </td>
                            <td>
                                <span class="badge 
                                    {{ $issue->status == 'Đang xử lý' ? 'bg-primary' : ($issue->status == 'Hoàn thành' ? 'bg-success' : 'bg-secondary') }}">
                                    {{ $issue->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Sửa
                                </a>
                                <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                        <i class="bi bi-trash"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Không có vấn đề nào!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
