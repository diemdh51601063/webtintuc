@extends('front.layout')

@section('trend')

<!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="upload\tintuc\{{$data[0]->hinhdaidien}}" alt="{{$data[0]->mota}}">
                                <div class="trend-top-cap">
                                    <span>{{$data[0]->loaitin->tenloaitin}}</span>
                                    <h2><a href="{{$data[0]->tieudeseo}}-post{{$data[0]->id}}.html">{{$data[0]->tieude}}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img style="width: 120px;height: 100px;" src="upload\tintuc\{{$data[1]->hinhdaidien}}" alt="{{$data[1]->mota}}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$data[1]->loaitin->tenloaitin}}</span>
                                <h4><a href="{{$data[1]->tieudeseo}}-post{{$data[1]->id}}.html">{{$data[1]->tieude}}</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img style="width: 120px;height: 100px;" src="upload\tintuc\{{$data[2]->hinhdaidien}}" alt="{{$data[2]->mota}}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$data[2]->loaitin->tenloaitin}}</span>
                                <h4><a href="{{$data[2]->tieudeseo}}-post{{$data[2]->id}}.html">{{$data[2]->tieude}}</a></h4>
                            </div>
                        </div>
                        
                      
                    </div> 


            <div class="col-lg-6">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img style="width: 120px;height: 100px;" src="upload\tintuc\{{$data[3]->hinhdaidien}}" alt="{{$data[3]->mota}}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$data[3]->loaitin->tenloaitin}}</span>
                                <h4><a href="{{$data[3]->tieudeseo}}-post{{$data[3]->id}}.html">{{$data[3]->tieude}}</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img style="width: 120px;height: 100px;" src="upload\tintuc\{{$data[4]->hinhdaidien}}" alt="{{$data[4]->mota}}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$data[4]->loaitin->tenloaitin}}</span>
                                <h4><a href="{{$data[4]->tieudeseo}}-post{{$data[4]->id}}.html">{{$data[4]->tieude}}</a></h4>
                            </div>
                        </div>
                        
                      
                    </div>
                </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">

        @foreach($data as $key => $val)
            @if($key>4&&$key<10)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                               <img style="width: 130px;height: 120px;" src="upload\tintuc\{{$val->hinhdaidien}}" alt="{{$val->mota}}">
                            </div>
                            <div class="trand-right-cap">
                               <span class="color1">{{$data[$key]->loaitin->tenloaitin}}</span>
                                <h4><a href="{{$val->tieudeseo}}-post{{$val->id}}.html">{{$val->tieude}}</a></h4>
                            </div>
                        </div>
             @endif
                        
        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
@endsection




@section('content')


                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Whats New</h3>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">

    <div class="row">
    <div class="col-sm-12">
        <div id="content">



 @foreach($data as $key => $val)
            @if($key>10)

            <div class="card mb-3" style="max-width: 720px; border-bottom: 0px;border-right: 0px; border-left: 0px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img style="width: 240px;height: 223px;" class="card-img" src="upload\tintuc\{{$val->hinhdaidien}}" alt="{{$val->mota}}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href="{{$val->tieudeseo}}-post{{$val->id}}.html">{{$val->tieude}}</a></h5>
         <span class="color4" ><a style=" color: black;" href="{{$data[$key]->loaitin->loaitinseo}}.html">{{$data[$key]->loaitin->tenloaitin}}</a></span>
        <p class="card-text">No</p>
       
        <p class="card-text">{{$val->ngaydangtin}}</p>
      </div>
    </div>
  </div>
</div>

   @endif
                        
        @endforeach



        </div>
    </div> 
</div>               
                    </div>
                </div>
            

@endsection

