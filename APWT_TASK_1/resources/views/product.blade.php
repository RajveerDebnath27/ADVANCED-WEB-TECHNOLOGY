@extends ('layouts.app')
@section('content')


<h1>Our Products</h1>
<p style="width: 450px; text_align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

@foreach($product as $product)
    <li style="margin: 20px; front-weight: bold;">{{$product}}</li>
@endforeach

@endsection
