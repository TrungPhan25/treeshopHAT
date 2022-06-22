@extends('admin.main')

@section('content')
    <form action="" method="POST">
    <div class="customer mt-3">
        <ul>
            <li>Tên khách hàng: <strong>{{ $customer->name }}</strong></li>
            <li>Số điện thoại: <strong>{{ $customer->phone }}</strong></li>
            <li>Địa chỉ: <strong>{{ $customer->address }}</strong></li>
            <li>Email: <strong>{{ $customer->email }}</strong></li>
            <li>Ghi chú: <strong>{{ $customer->content }}</strong></li>
        </ul>

        <div class="form-group ml16">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active1" name="status"
                    {{ $customer->status == 1 ? ' checked=""' : '' }}>
                <label for="active1" class="custom-control-label">Chưa Xác Nhận</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="2" type="radio" id="active2" name="status"
                    {{ $customer->status == 2 ? ' checked=""' : '' }} >
                <label for="active2" class="custom-control-label">Đã Xác Nhận</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="3" type="radio" id="active3" name="status"
                    {{ $customer->status == 3 ? ' checked=""' : '' }} >
                <label for="active3" class="custom-control-label">Đang Giao</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="4" type="radio" id="active4" name="status"
                    {{ $customer->status == 4 ? ' checked=""' : '' }} >
                <label for="active4" class="custom-control-label">Đã Giao</label>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Trạng Thái</button>
        </div>

    </div>
        @csrf
    </form>

    <div class="carts">
        @php $total = 0; @endphp
        <table class="table">
            <tbody>
            <tr class="table_head">
                <th class="column-1">IMG</th>
                <th class="column-2">Product</th>
                <th class="column-3">Price</th>
                <th class="column-4">Quantity</th>
                <th class="column-5">Total</th>
            </tr>

            @foreach($carts as $key => $cart)
                @php
                    $price = $cart->price * $cart->pty;
                    $total += $price;
                @endphp
                <tr>
                    <td class="column-1">
                        <div class="how-itemcart1">
                            <img src="{{ $cart->product->avatar }}" alt="IMG" style="width: 100px">
                        </div>
                    </td>
                    <td class="column-2">{{ $cart->product->name }}</td>
                    <td class="column-3">{{ number_format($cart->price, 0, '', '.') }}</td>
                    <td class="column-4">{{ $cart->pty }}</td>
                    <td class="column-5">{{ number_format($price, 0, '', '.') }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-right">Tổng Tiền</td>
                <td>{{ number_format($total, 0, '', '.') }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection


