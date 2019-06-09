@extends('frontEnd.layouts.master')
@section('title','List Products')
@section('header')
   <link href="/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css">
@endsection
@section('footer')
   <script src="/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
   <script src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
   
@endsection
@section('css','homePageOne single-servicePage')
@section('content')
    <section class="header-title section-padding">
        <div class="container">
            
             <h2 class="title">{{$detail_product->p_name}}</h2>
           
            <span class="sub-title">Home / Product / 
               <span class="text-color">{{$detail_product->p_name}}</span>
            </span>
        </div>
    </section> <!-- header-title -->

    <section class="single-service section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 padding-right right-bar">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
        <div class="product-details row"><!--product-details-->

            <div class="col-md-5">
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="{{url('products/large',$detail_product->image)}}">
                        <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage"/>
                    </a>
                </div>

                <ul class="thumbnails" style="margin-left: -10px;">
                    <li>
                        @foreach($imagesGalleries as $imagesGallery)
                            <a href="{{url('products/large',$imagesGallery->image)}}" data-standard="{{url('products/small',$imagesGallery->image)}}">
                                <img src="{{url('products/small',$imagesGallery->image)}}" alt="" width="75" style="padding: 8px;">
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <form action="" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="products_id" value="{{$detail_product->id}}">
                    <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                    <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                    <input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
                    <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                    <div class="product-information"><!--/product-information-->
                        <!-- <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" /> -->
                        <h2>{{$detail_product->p_name}}</h2>
                         <div class="control-group">
                         <label>Mã sản phẩm:</label> {{$detail_product->p_code}}
                        </div>
                        <!-- <span>
                            <select name="size" id="idSize" class="form-control">
                            <option value="">Select Size</option>
                            @foreach($detail_product->attributes as $attrs)
                                <option value="{{$detail_product->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
                            @endforeach
                        </select>
                        </span><br> -->
                        <div class="control-group">
                            <label>Giá:</label>
                            <span class="price">{{number_format($detail_product->price,0,',','.')}} đ</span>
                        </div>
                        <div class="control-group">
                            <label>Số lượng:</label>
                            <input type="number" name="quantity" class="input-text qty text" step="1" min="1" max="" value="1" id="inputStock" size="2" inputmode="numeric"/>
                            
                            <button type="button" class="btn btn-primary add-to-cart" data-toggle="modal" data-target="#exampleModalLong">Mua Nhanh</button>
                           
                        </div>
                        
                        <div class="control-group"><label>Tình trạng:</label>
                            @if($totalStock>0)
                                <span id="availableStock">Còn hàng</span>
                            @else
                                <span id="availableStock">Còn hàng</span>
                            @endif
                        </div>
                        <div class="control-group"><label>Xuất xứ:</label>
                            
                                <span id="brand">{{$detail_product->p_brand}}</span>
                           
                        </div>
                        <!-- <div class="control-group"><label>Condition:</label> New</div> -->
                        <div class="control-group">
                            <a href=""><img src="{{asset('frontEnd/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                        </div>
                    </div><!--/product-information-->
                </form>

            </div>
        </div><!--/product-details-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Đăng ký mua hàng</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('muanhanh')}}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="product" value="{{$detail_product->p_name}}">
                    <input type="hidden" name="price" value="{{$detail_product->price}}">
                    
                    <input type="hidden" name="order_status" value="Chờ xử lý">
                
                    <div class="form-group" style="height: 70px">
                        <div class="col-md-2 col-xs-4">
                        <img src="{{url('products/small',$detail_product->image)}}" alt="" height="70" />
                        </div>
                        <div class="col-md-10 col-xs-8">
                            <div class="form-group">
                            <span class="product-title">{{$detail_product->p_name}}</span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Số lượng:</label>
                        <input type="number" step="1" min="1" max="" name="qty" value="1" placeholder="Số lượng*" required>
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="" name="name" placeholder="Họ Tên*" required>
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="" name="mobile" placeholder="Số Điện Thoại*" required>
                    </div>
                    <div class="form-group">
                        
                        <input type="text" class="form-control" id="" name="address" placeholder="Địa chỉ nhận hàng tại nhà*" required>
                    </div>
                    <div class="form-group">
                        
                        <textarea name="note" id="input" class="form-control" rows="3" placeholder="Ghi chú của bạn"></textarea>
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary">Đăng ký mua</button>
                    <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Hủy</button>
                   
                    
                </form>
              </div>
              
            </div>
          </div>
        </div>

    </div>
</div>
</div>
</section>
 <section class="single-service">
    <div class="container">
        <div class="right-bar">
        <div class="priceing-section">
            <div class="priceing-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-one" role="tab" data-toggle="tab" aria-expanded="true">
                        Chi tiết sản phẩm
                    </a></li>

                    <li role="presentation" class=""><a href="#tab-two" role="tab" data-toggle="tab" aria-expanded="false">
                        Reviews
                    </a></li>

                    <li role="presentation" class=""><a href="#tab-three" role="tab" data-toggle="tab" aria-expanded="false">
                        Contact
                    </a></li>
                </ul>

                <div class="tab-content text-center">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab-one">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-description">
                                    {!!$detail_product->description!!}
                                </div> <!-- priceing-table -->
                            </div>

                            
                        </div>
                    </div> <!-- tab-one -->

                    <div role="tabpanel" class="tab-pane tab-story fade" id="tab-two">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="priceing-table">
                                    <h4>Premium</h4>
                                    <h5 class="amount">$65</h5>
                                    <p>Basic garden maintenance service includes the following procedures:</p>

                                    <ul class="option">
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Lawn mowing</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Weeding</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Hedge trimming</li>

                                        <li><i class="fa fa-times" aria-hidden="true"></i>Leaf clearance</li>

                                        <li><i class="fa fa-times" aria-hidden="true"></i>vy and removal</li>
                                    </ul> <!-- option -->

                                    <a href="#" class="btn btn-primary">Select</a>
                                </div> <!-- priceing-table -->
                            </div>

                            <div class="col-sm-6">
                                <div class="priceing-table">
                                    <h4>Basic</h4>
                                    <h5 class="amount">$55</h5>
                                    <p>Basic garden maintenance service includes the following procedures:</p>

                                    <ul class="option">
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Lawn mowing</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Weeding</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Hedge trimming</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Leaf clearance</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>vy and removal</li>
                                    </ul> <!-- option -->

                                    <a href="#" class="btn btn-primary">Select</a>
                                </div> <!-- priceing-table -->
                            </div>
                        </div>
                    </div> <!-- tab-two -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-three">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="priceing-table">
                                    <h4>Basic</h4>
                                    <h5 class="amount">$55</h5>
                                    <p>Basic garden maintenance service includes the following procedures:</p>

                                    <ul class="option">
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Lawn mowing</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Weeding</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Hedge trimming</li>

                                        <li><i class="fa fa-times" aria-hidden="true"></i>Leaf clearance</li>

                                        <li><i class="fa fa-times" aria-hidden="true"></i>vy and removal</li>
                                    </ul> <!-- option -->

                                    <a href="#" class="btn btn-primary">Select</a>
                                </div> <!-- priceing-table -->
                            </div>

                            <div class="col-sm-6">
                                <div class="priceing-table">
                                    <h4>Premium</h4>
                                    <h5 class="amount">$95</h5>
                                    <p>Basic garden maintenance service includes the following procedures:</p>

                                    <ul class="option">
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Lawn mowing</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Weeding</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Hedge trimming</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>Leaf clearance</li>

                                        <li><i class="fa fa-check" aria-hidden="true"></i>vy and removal</li>
                                    </ul> <!-- option -->

                                    <a href="#" class="btn btn-primary">Select</a>
                                </div> <!-- priceing-table -->
                            </div>
                        </div>
                    </div> <!-- tab-three -->
                </div> <!-- tab-content -->
            </div> <!-- priceing-wrapper -->
        </div>

        

    </div>
    </div>
    
    </section> <!-- shop-page -->
    <section class="blog-section section-padding worker-section">
        <div class="container">
        <div class="recommended_items worker-wrapper text-center"><!--recommended_items-->
            
            <div class="section-title text-center">
                    <h2>Sản phẩm liên quan</h2>
            </div>

            <div id="recommended-item-carousel" class="tab-content carousel slide" data-ride="carousel">
                <div class="worker-carousel owl-carousel owl-theme">
                   
                    @foreach($relateProducts as $product)
                        
                        <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                    @endforeach
                </div>
                
            </div>
        </div><!--/recommended_items-->
        </div>
    </section>
@endsection