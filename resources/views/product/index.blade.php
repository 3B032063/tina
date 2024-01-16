@extends('layouts.app')
@section('content')
    <h1>所有餐點</h1>
    <div class="card-deck">
        @forelse($products as $product)
            <div class="card mb-4">
                <a href="product/{{$product->id}}">
                    <img src="{{ assert('$products/img'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="product/{{ $product->id}}">{{$product->name}}}</a>
                    </h5>
                </div>

                <div class="card-footer ">
                    ${{ $product->price }}
                    <a href="{{route('product.index')}}" class="btn btn-primary">加入購物車</a>
                </div>
            </div>

            @if($loop->iteration % 2 == 0)
                <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
            @endif
            @if($loop->iteration % 3 == 0)
                <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
            @endif
            @if($loop->iteration % 4 == 0)
                <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
            @endif
            @if($loop->iteration % 5 == 0)
                <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
            @endif
        @empty
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">目前無任何菜單</h1>
                </div>
            </div>
        @endforelse
    </div>
@endsection
