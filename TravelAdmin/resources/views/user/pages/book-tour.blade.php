@extends('user.layouts.index')
@section('content')
    <!-- /.container -->

    <div class="container marketing mb-5 mt-5 text-dark">
        <h3 class="pb-4 mb-4 fst-italic border-bottom ">
            THÔNG TIN ĐẶT TOUR
        </h3>
        <form class="row g-3" action="{{ route('thanhtoan.index') }}" method="POST">
            @csrf
            <div class="form-group col-md-12 row">
                {{-- <label class="col-sm-3 col-form-label"><i class="fas fa-barcode"></i></label> --}}
                <div class="col-sm-12">
                    <input type="text" readonly class="form-control-plaintext" name="tour_name" value="{{ $tour->name }}">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"><i class="fas fa-barcode"></i> <strong>Mã Tour:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="tour_id" value="{{ $tour->id }}">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"><i class="fas fa-calendar-alt"></i> <strong>Ngày Đi:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="departed" value=" @php
                        $t = $tour->departed;
                        echo date('d-m-Y \L\ú\c H:i', strtotime($t));
                    @endphp">
                </div>
            </div>
            {{-- <div class="form-group col-md-6 row">
        <label class="col-sm-3 col-form-label"><i class="fas fa-map-marker-alt"></i> <strong>Nơi Khởi Hành:</strong></label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="T-2904202015442375">
        </div>
      </div> --}}
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"><i class="fas fa-money-bill-alt"></i> <strong>Giá:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="price_tour"
                        value="{{number_format($tour->price) }}">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label class="col-sm-3 col-form-label"><i class="fas fa-calendar-alt"></i> <strong> Số
                        Ngày:</strong></label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" name="duration"
                        value="{{ $tour->duration }}">
                </div>
            </div>
            <div class="form-group col-md-6 row">
                <label class="col-sm-6 col-form-label"><i class="fas fa-calendar-alt"></i> <strong> Số Điện
                        thoại</strong></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
            <div class="form-group col-md-3 row">
                <label class="col-sm-6 col-form-label"><i class="fas fa-calendar-alt"></i> <strong> Số người
                        lớn</strong></label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="staticEmail" name="Nguoilon">
                </div>
            </div>
            <div class="form-group col-md-3 row">
                <label class="col-sm-6 col-form-label"><i class="fas fa-calendar-alt"></i> <strong> Số trẻ
                        em</strong></label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="staticEmail" name="treem">
                </div>
            </div>
            {{-- <div class=" form-group col-12">
                <label for="inputAddress" class="form-label">Dịch vụ thuê xe đi kèm</label>
                <input class="form-check-input" type="checkbox" id="show" name="vehicle1" value="Bike">
                <label class="form-check-label" for="flexCheckIndeterminate">Thuê xe đi kèm</label>

                <div class="menu" style="display: none;">
                    <div>
                        <!--dropdown list options-->
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            @foreach ($categoryCar as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                             @endforeach


                        </select>
                            
                    </div>
                    <!--divs that hide and show-->
                    @foreach ($categoryCar as $item)
                    <div class="{{$item->id}} box">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label">
                            {{optional($item->cars)->name}}
                        </label>
                        </div>

                    </div>
                    @endforeach


                </div>
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-lg btn-primary">Đặt tour</button>
                {{-- <button type="submit" class="btn btn-lg btn-primary">Hủy đặt tour</button> --}}
                <a href="{{ route('trangchu.index') }}" class="btn btn-lg btn-primary">Hủy đặt tour</a>
            </div>

        </form>
    </div>


    
@endsection
@section('js')
<script src=
        "https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <script>
        // jQuery functions to hide and show the div
        $(document).ready(function () {
            $("select").change(function () {
                $(this).find("option:selected")
                       .each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });
        $(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});
    </script>
@endsection