@extends('layouts.master')
@section('title', 'About the company')
@section('content')
    <p>Important information for our visitors about the company products.</p>
    <p>This page contains different advantages of Blade template system.</p>
    <h2>The products list with Blade directives.</h2>
    <div style="color: darkblue;">
        <?php $productCounts = array(6,27,10,13,56,77); ?>
        @for ($i = 0; $i < count($productCounts); $i++)
            Product count {{$productCounts[$i]}} <br>
        @endfor
        @if (count($productCounts) === 5)
            We have exactly 5 products. <br>
        @elseif (count($productCounts) === 0)
            We have no products. <br>
        @else
            We have a different number of products than 5. <br>
        @endif
        <?php $productPrices = array("computer" => 778, "laptop" => 335, "monitor" => 128); ?>
        @foreach ($productPrices as $key => $price)
            Product: {{$key}} Price: {{$price}} <br>
        @endforeach
        <?php $productCounts = array(); ?>
        @forelse ($productCounts as $count)
            Product count {{$count}} <br>
        @empty
            List is empty <br>
        @endforelse

        <table border="1">
            <tr>
                <th>Car Brand</th>
                <th>Description</th>
                <th>Items in Shop</th>
            </tr>
            <tr>
                <td>Toyota</td>
                <td>Japanese car manufacturer</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Ford</td>
                <td>American multinational automaker</td>
                <td>20</td>
            </tr>
            <tr>
                <td>BMW</td>
                <td>German luxury vehicle manufacturer</td>
                <td>15</td>
            </tr>
        </table>
    </div>
@endsection
@section('footerScripts')
    Footer section for JavaScript and other footer info.
    <script></script>
@endsection
