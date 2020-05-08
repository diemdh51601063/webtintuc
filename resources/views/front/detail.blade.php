@extends('front.layout')


@section('content')
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="upload\tintuc\{{$tin->hinhdaidien}}" alt="$tin->mota">
                  </div>
                  <div class="blog_details">
                     <h2>{{$tin->tieude}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4 ">
                        <li><a href="{{$tin->loaitin->loaitinseo}}.html"><i class="fa fa-user"></i>{{$tin->loaitin->tenloaitin}}</a></li>
                    
                     </ul>
                     <p class="excert"><?php echo $tin->noidung; ?></p>
                   
                  </div>
               </div>
        
               <div class="comments-area">
                  <h4>1 Comments</h4>
                
                  
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                         
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                      
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
           
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
                       @endsection

                       @section('content2')
<div class="card mb-3" style="max-width: 720px; border-bottom: 0px;border-right: 0px; border-left: 0px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="assets/img/news/whatNews1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <p class="card-text">28-04-2020 06:25:29</p>
      </div>
    </div>
  </div>
</div>
@endsection