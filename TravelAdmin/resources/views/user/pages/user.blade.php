@extends('user.layouts.index')
@section('content')
    <div class="row" style="margin-top: 30px; height: 450px;">
        <div class="col-4" style=" width: 200px;">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list"
                    href="#list-home" role="tab" aria-controls="list-home">Thông tin cá nhân</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                    href="#list-profile" role="tab" aria-controls="list-profile">Chỉnh sửa</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                    href="#list-messages" role="tab" aria-controls="list-messages">Lịch sử đặt tour</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                    href="#list-settings" role="tab" aria-controls="list-settings">Tour đang đợi</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="row g-5">
                        <div class="col-md-12">
                            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                                Thông tin cá nhân
                            </h3>
                            <div class="row mb-4">
                                <div class="col-4">Họ và tên: </div>
                                <div class="col-8">{{ $user->name }}</div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">Email: </div>
                                <div class="col-8">{{ $user->email }}</div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">Số điện thoại: </div>
                                <div class="col-8">{{ $user->phone }}</div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">Địa chỉ: </div>
                                <div class="col-8">{{ $user->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        Chỉnh sữa thông tin cá nhân
                    </h3>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Họ và tên: </label>
                            <input class="form-control" placeholder="Họ và tên" value="{{ $user->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email: </label>
                            <input class="form-control" placeholder="Email" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Số điện thoại: </label>
                            <input class="form-control" placeholder="Phone" value="{{ $user->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Địa chỉ: </label>
                            <input class="form-control" placeholder="Address" value="{{ $user->address }}">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button>
                            <button type="submit" class="btn btn-primary"><a href="use.html"
                                    class="text-white text-decoration-none">Hủy chỉnh sửa</a></button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        Lịch sử đặt tour
                    </h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã tour</th>
                                <th scope="col">Tên tour</th>
                                <th scope="col">Giờ khởi hành</th>
                                <th scope="col">Số ngày</th>
                                <th scope="col">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tourconfirm as $item)

                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td class=" text-truncate" style="max-width: 200px;">{{ $item->tour_name }}</td>
                                    <td>{{ $item->departed }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        Tour đang đợi
                    </h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã tour</th>
                                <th scope="col">Tên tour</th>
                                <th scope="col">Giờ khởi hành</th>
                                <th scope="col">Số ngày</th>
                                <th scope="col">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tourwat as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td class=" text-truncate" style="max-width: 200px;">{{ $item->tour_name }}</td>
                                    <td>{{ $item->departed }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
