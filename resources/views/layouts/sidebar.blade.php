<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/dashboard" class="site_title"><img class="px-1 mx-1" src="{{asset('img/biceps.svg')}}"
                    alt="" width="40">
                <span>ISport!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('img/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fas fa-user"></i> 會員管理 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/project_01/dashboard/axios_user_list.php">會員列表</a></li>
                            <li><a href="/project_01/dashboard/user_create.php">會員新增</a></li>
                        </ul>
                    </li>
                    <li><a><i class="far fa-list-alt"></i> 訂單管理 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="user_order.php">訂單列表</a></li>
                            <li><a href="user_order_create.php">新增訂單</a></li>
                        </ul>
                    </li>
                    <li><a><i class="far fa-newspaper"></i> 文章管理 <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="article_list.php">文章列表</a></li>
                            <li><a href="article_create.php">新增文章</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-shopping-bag"></i> 商品管理 <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/project_01/dashboard/product_list.php">商品列表</a></li>
                            <li><a href="/project_01/dashboard/product_creat.php">新增商品</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fab fa-youtube"></i> 影片管理 <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="showVideoList.php">影片列表</a></li>
                            <li><a href="uploadVideoFile.php">影片上傳</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->


    </div>
</div>