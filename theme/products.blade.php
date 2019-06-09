@extends('frontEnd.layouts.master')

@section('title','List Products')
@section('header')
   <link href="/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css">
@endsection
@section('footer')
   <script src="/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
   <script src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
   
@endsection
@section('css','homePageOne teamPage shop-page')
@section('content')
    <section class="header-title section-padding">
            <div class="container">
                <?php
                                    if($byCate!=""){
                                        $products=$list_product;
                                        echo '<h2 class="title">'.$byCate->name.'</h2>';
                                    }else{
                                        echo ' <h2 class="title">Our Shop</h2>';
                                    }
                                ?>
               
                <span class="sub-title">Home / Categories / 
                    <?php
                                    if($byCate!=""){
                                        $products=$list_product;
                                        echo '<span class="text-color">'.$byCate->name.'</span>';
                                    }else{
                                        echo '<span class="text-color">Shop</span>';
                                    }
                                ?>
                    
                </span>
            </div>
        </section> <!-- header-title -->



        <section class="shop-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="left-bar">
                            <div class="wrapper-contant">
                                <h4>CATEGORY</h4>
                                @include('frontEnd.layouts.category_menu')

                                
                            </div> 

                        </div> <!-- left-bar -->
                    </div>

                    <div class="col-md-9">
                        <div class="right-bar">
                            <div class="product-selection">
                                <div class="row">
                                
                                
                                @foreach($products as $product)
                                    @if($product->category->status==1)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-wrapper">
                                            <img src="{{url('products/small/',$product->image)}}" alt="">

                                            <div class="product-detail"><a href="{{url('/product-detail',$product->id)}}">
                                                <h5>{{$product->p_name}}</h5>
                                                <div class="gia">{{number_format($product->price,0,',','.')}} đ</div>
                                                <span class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> xem chi tiết</span>

                                               
                                            </a></div> 
                                        </div> 
                                    </div>
                                    @endif
                                @endforeach
                                    
                                </div>
                                <div class="row">
                                    {{$products->links()}}
                                    
                                </div>
                            </div> <!-- product-selection -->
                        </div> <!-- right-bar -->
                    </div>
                </div>
            </div>
        </section> <!-- shop-page -->
@endsection