<!DOCTYPE html>
<html>

<head>
    <title>Chi Tiết tour</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }

        body {
            font-size: 10px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            vertical-align: middle;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .hinhSanPham {
            width: 100px;
            height: 100px;
        }

        .companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        .companyImg {
            width: 200px;
            height: 200px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="row">
        <h1>{{ $chitiettour->tour_name }}</h1>
        <br />
        <p style="font-size: 16px"><strong>Tên khách hàng : </strong>{{ $chitiettour->user_name }}</p>
        <p style="font-size: 16px"><strong>Số điện thoại: </strong>{{ $chitiettour->phone }}</p>
        <p style="font-size: 16px"><strong>Email khách hàng : </strong>{{ $chitiettour->user_mail }}</p>
        <p style="font-size: 16px"><strong>Ngày khởi hành : </strong>{{ $chitiettour->departed }}</p>
        <p style="font-size: 16px"><strong>Số ngày : </strong>{{ $chitiettour->duration }}</p>
        <p style="font-size: 16px"><strong>Số người lớn : </strong>{{ $chitiettour->Nguoilon }}</p><p style="font-size: 16px"><strong>Số trẻ em : </strong>{{ $chitiettour->treem }}</p>
        <p style="font-size: 16px"><strong>Tổng tiền: </strong>{{number_format( $chitiettour->price) }} VND</p>
    </div>
</body>

</html>