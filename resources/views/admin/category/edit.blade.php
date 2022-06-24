@extends('admin.main')


@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Danh Mục</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control"  placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label >Tiêu đề phụ</label>
                <input type="text" name="sub" value="{{ $category->sub }}" class="form-control" placeholder="Nhập tiêu đề phụ">
            </div>

            <div class="form-group">
                <label>Danh Mục</label>
                <select class="form-control" name="list_id">

                    <option value="0" {{ $category->list_id == 0 ? 'selected' : '' }} > Danh Mục Cha </option>

                    @foreach($categories as $categoryParent)
                        <option value="{{ $categoryParent->id }}"
                            {{ $category->list_id == $categoryParent->id ? 'selected' : '' }}>
                            {{ $categoryParent->name }}
                        </option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active"
                           name="status" {{ $category->status == 1 ? 'checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active"
                           name="status" {{ $category->status == 0 ? 'checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
        </div>
        @csrf
    </form>
@endsection

