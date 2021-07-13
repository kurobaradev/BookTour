@extends('user.layouts.index')
@section('content')
<div class="row" style="margin-top: 100px;">
  <div class="col-4" style=" width: 200px;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Thông tin cá nhân</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Chỉnh sửa</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Lịch sử đặt tour</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Tour đang đợi</a>
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
		      	<div class="col-8">Nguyễn Minh Trung</div>
		      </div>
		      <div class="row mb-4">
		      	<div class="col-4">Email: </div>
		      	<div class="col-8">nguyenminhtrung@gmail.com</div>
		      </div>
		      <div class="row mb-4">
		      	<div class="col-4">Số điện thoại: </div>
		      	<div class="col-8">0122778546</div>
		      </div>
		      <div class="row mb-4">
		      	<div class="col-4">Địa chỉ: </div>
		      	<div class="col-8">117 Lý Thánh Tông</div>
		      </div>
		    </div>
		  </div>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      	<form class="row g-3">
				  <div class="col-md-6">
				    <label class="form-label">Họ và tên: </label>
				    <input class="form-control" placeholder="Nguyễn Minh Trung">
				  </div>
				  <div class="col-md-6">
				    <label class="form-label">Email: </label>
				    <input class="form-control" placeholder="nguyenminhtrung@gmail.com">
				  </div>
				  <div class="col-md-6">
				    <label class="form-label">Số điện thoại: </label>
				    <input class="form-control" placeholder="0122778546">
				  </div>
				  <div class="col-md-6">
				    <label class="form-label">Địa chỉ: </label>
				    <input class="form-control" placeholder="117 Lý Thánh Tông">
				  </div>
				  <div class="col-md-6">
				    <label for="inputPassword4" class="form-label">Password</label>
				    <input type="password" class="form-control" id="inputPassword4" placeholder="*********">
				  </div>
				  <div class="col-12">
				    <button type="submit" class="btn btn-primary">Lưu chỉnh sửa</button>
				    <button type="submit" class="btn btn-primary"><a href="use.html" class="text-white text-decoration-none">Hủy chỉnh sửa</a></button>
				  </div>
				</form>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      		<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Handle</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td colspan="2">Larry the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      	<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
				      <th scope="col">Handle</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>	
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td colspan="2">Larry the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
      </div>
    </div>
  </div>
</div>
@endsection