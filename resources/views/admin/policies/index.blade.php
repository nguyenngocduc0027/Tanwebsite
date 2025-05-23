@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý Danh Sách Chính sách</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin Chính sách</h6>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">


                                <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Slug</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($policies as $policy)
                                        <tr>
                                            <td>{{ $policy->title }}</td>
                                            <td>{{ $policy->slug }}</td>
                                            <td>
                                                <!-- Nút xem chi tiết -->
                                                <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#policyModal{{ $policy->id }}">
                                                    Xem
                                                </button>

                                                <!-- Nút sửa -->
                                                <a href="{{ route('admin.policies.edit', $policy) }}"
                                                    class="btn btn-sm btn-warning">Sửa</a>

                                                <!-- Nút xóa -->
                                                <form action="{{ route('admin.policies.destroy', $policy) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Xóa?')">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Modal chi tiết chính sách -->
                                        <div class="modal fade" id="policyModal{{ $policy->id }}" tabindex="-1"
                                            aria-labelledby="policyModalLabel{{ $policy->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="policyModalLabel{{ $policy->id }}">
                                                            {{ $policy->title }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Đóng"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $policy->content !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Jquery js CDN -->
