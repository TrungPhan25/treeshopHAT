@extends('admin.main')

@section('content')


    <div class="row">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$statisticalOrder}} </h3>

                    <p>Đơn Đặt Hàng Thành Công</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$statisticalWaitOrder}}</h3>

                    <p>Đơn Đã Xác Nhận</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$statisticalNoOrder}}</h3>

                    <p>Đơn Chưa Xác Nhận</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">

                    <h3>{{ number_format($statisticalPrice, 0, '', '.') }} vnđ</h3>
                    {{--                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                    <p>Tổng doanh thu</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>

            </div>
        </div>
<!-- ./col -->

    </div>


    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt hàng</th>
            <th>Trạng Thái</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>



        @foreach($customers as $key => $customer)


            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->created_at }}</td>
                <td> {!! \App\Helpers\Helper::statusCustomer($customer->status) !!}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/treeshopHAT/public/admin/customers/view/{{ $customer->id }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $customer->id }}, '/treeshopHAT/public/admin/customers/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
        {!! $customers->links() !!}
    </div>
@endsection


