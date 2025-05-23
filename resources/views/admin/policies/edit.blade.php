@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Chỉnh sửa Chính sahcs</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-success btn-round text-uppercase btn-update-blog">
                    <i class="fas fa-save me-2"></i>Lưu
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-body row">
                <form method="POST" action="{{ route('admin.policies.update', $policy) }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label>Tiêu đề</label>
                        <input type="text" name="title" class="form-control" required
                            value="{{ old('title', $policy->title) }}">
                    </div>
                    <div class="mb-3">
                        <label>Nội dung</label>
                        <textarea name="content" class="form-control tyni" rows="8" required>{{ old('content', $policy->content) }}</textarea>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
