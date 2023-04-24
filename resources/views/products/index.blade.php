@extends('layouts.app')

@section('content')
<div class="table table-bordered list">
    <div>
        @foreach($products as $product)
            <div class="mx-3 p-3 rounded shadow-lg flex justify-between dark:bg-gray-800">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="" style="width: 14.3%;">
                        <span><img src="{{ asset('img/dummy.png')}}" class="img-thumbnail"></span>
                    </div>
                    <div class="fs-4 fw-bold" style="width: 30%;">
                        {{$product->name}}
                    </div>
                    <div class="" style="width: 10%;">
                        単品価格￥{{$product->price}}
                    </div>
                    <div class="text-center" style="width: 10%;">
                        ご注文数量
                        <select name="get_all_record type=" value="" class="get_all_record">
                            <option value="list1" selected="selected">1</option>
                            <option value="list2">2</option>
                            <option value="list3">3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger fw-bold">
                        追加
                    </button>
                </div>
            </div>
        @endforeach

        {{ $products->links() }}
    </div>
</div>
@endsection