<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slider as $sliders)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ $sliders->image_path }}" alt="">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <div class="position-absolute top-50 start-50 translate-middle bg-dark" style="width: 100%; height: 100%; opacity: 0.5;"></div>
    <div class="position-absolute top-50 start-50 translate-middle" style="width: 60%; height: 100px;">
      <div role="tabpanel" style="width:100%">
        <!-- List group -->
        <div class="list-group d-flex flex-row bd-highlight" id="myList" role="tablist">
          <a class="list-group-item list-group-item-action list-group-item-warning active p-2 bd-highlight" data-bs-toggle="list" href="#home" role="tab" style="width: 80px;">TOUR</a>
          <a class="list-group-item list-group-item-action list-group-item-warning p-2 bd-highlight" data-bs-toggle="list" href="#profile" role="tab" style="width: 140px;">PHƯƠNG TIỆN</a>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active " id="home" role="tabpanel">
            <form class="input-group" style="width: 100%; height: 50px;"  type="GET" action="{{route('timkiemtour.index')}}">
              <input type="text" name="search_tour" class="form-control" placeholder="Nhập từ khóa để tìm kiếm tour" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <button class="btn btn-outline-warning btn-dark" type="submit">TÌM KIẾM</button>
            </form>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel">
            <form class="input-group" style="width: 100%; height: 50px;" type="GET" action="{{route('timkiemxe.index')}}">
              <input type="text" name="search_car" class="form-control" placeholder="Nhập từ khóa để tìm kiếm phương tiện" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <button class="btn btn-outline-warning btn-dark" type="submit">TÌM KIẾM</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
