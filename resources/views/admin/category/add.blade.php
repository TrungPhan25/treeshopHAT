@extends('admin.main')
@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label >Tên danh mục</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label >Tiêu đề phụ</label>
                <input type="text" name="sub" class="form-control" placeholder="Nhập tiêu đề phụ">
            </div>

            <div class="form-group">
                <label >Danh mục</label>
                <select class="form-control" name="list_id">
                    <option value="0"> Danh mục cha</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="active" value="1" checked="">
                    <label class="form-check-label">Có</label>
                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="status" id="no_active" value="0" >
                    <label class="form-check-label">Không</label>
                </div>
            </div>

        </div>


        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
        </div>
        @csrf
    </form>
@endsection
