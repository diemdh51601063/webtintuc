<!DOCTYPE html>
<html lang="en">
<head>
<title>Tin Tức 2525</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<base href="{{asset('')}}">
<link rel="stylesheet" href="admin_asset/css/bootstrap.min.css" />
<link rel="stylesheet" href="admin_asset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="admin_asset/css/matrix-style.css" />
<link rel="stylesheet" href="admin_asset/css/matrix-media.css" />



<link rel="stylesheet" href="admin_asset/css/uniform.css" />
<link rel="stylesheet" href="admin_asset/css/select2.css" />



<link rel="stylesheet" href="admin_asset/css/colorpicker.css" />
<link rel="stylesheet" href="admin_asset/css/datepicker.css" />

<link rel="stylesheet" href="admin_asset/css/bootstrap-wysihtml5.css" />


<link href="admin_asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Tin Tức 2525</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <!--<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="admin/logout.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>-->
    <li class=""><a title="" href="admin/logout.html"><i class="icon icon-share-alt"></i> <span class="text">Đăng xuất</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<!--<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>-->
<!--close-top-serch--> 

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-info-sign"></i> Error</a>
  <ul>
   
    <li><a href="admin/trangchu.html"><i class="icon icon-fullscreen"></i> <span>Trang chủ</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Nhóm tin</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="admin/nhomtin/danhsach.html">Danh sách</a></li>
        <li><a href="admin/nhomtin/them.html">Thêm nhóm tin</a></li>
        
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Loại tin</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="admin/loaitin/danhsach.html">Danh sách</a></li>
        <li><a href="admin/loaitin/them.html">Thêm loại tin</a></li>
        
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Tin</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="admin/tin/danhsach.html">Danh sách</a></li>
        <li><a href="admin/tin/them.html">Thêm tin</a></li>
       
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Bình luận</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="admin/binhluan/danhsach.html">Danh sách chưa duyệt</a></li>
        <li><a href="admin/binhluan/danhsach1.html">Danh sách đã duyệt</a></li>
       
      </ul>
    </li>
 
 
  
  </ul>
</div>
          
@yield('content')


<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; Tin Tức 2525 <!--Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a>--> </div>
</div>
<!--end-Footer-part-->
<script src="admin_asset/js/jquery.min.js"></script> 
<script src="admin_asset/js/jquery.ui.custom.js"></script> 
<script src="admin_asset/js/bootstrap.min.js"></script> 
<script src="admin_asset/js/maruti.js"></script>
<script src="admin_asset/js/matrix.js"></script> 
<script src="admin_asset/js/ckeditor/ckeditor.js"></script>


@yield('script')

</body>
</html>
