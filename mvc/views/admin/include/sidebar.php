
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                <?php if($this->isAdmin == 1){?><li><a href="<?=base?>admin/home"><i class="fa fa-dashboard"></i> Bảng Điều Khiển</a>
                  </li><?php }?>
                  <?php if($this->isAdmin == 1){?><li><a href="<?=base?>admin/useraccount"><i class="fa fa-users"></i>Quản Lý Khách Hàng</a></li><?php }?>
                  <?php if($this->isAdmin == 1){?><li><a href="<?=base."admin/showpersonnel"?>"><i class="fa fa-graduation-cap"></i>Quản Lý Nhân Viên</a></li><?php }?>
                  <?php if($this->isAdmin == 1){?><li><a href="<?=base."admin/showadmin"?>"><i class="fa fa-flag"></i>Quản Lý Quản Trị Viên</a></li><?php }?>
                  <li><a href="<?=base?>admin/order"><i class="fa fa-shopping-cart"></i>Quản Lý Đơn Hàng</a></li>
                  <li><a href="<?=base."admin/showcategory"?>"><i class="fa fa-list"></i>Quản Lý Danh Mục</a></li>
                  <li><a href="<?=base."admin/showproduct"?>"><i class="fa fa-archive"></i>Quản Lý Sản Phẩm</a></li>
                  <?php if($this->isAdmin == 1){?><li><a href="<?=base."admin/showslider"?>"><i class="fa fa-slideshare"></i>Quản Lý Slider</a></li><?php }?>
                  <li><a href="admin/ChangePass"><i class="fa fa-cog"></i>Đổi Mật Khẩu</a></li>
                  <li><a onclick="logout('<?=base.'logout/admin'?>')" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-sign-out pull-left"></i>Đăng Xuất</a></li>
                </ul>
              </div>
            </div>