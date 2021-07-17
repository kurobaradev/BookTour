 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fab fa-scribd"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Super </div>
     </a>
     <!-- Divider -->
     <hr class="sidebar-divider my-0">
     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{ route('admin.dashboard') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">
     <!-- Nav Item - Pages Collapse Menu -->
     {{-- loại tour --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseabout" aria-expanded="true"
             aria-controls="collapseabout">
             <i class="fas fa-fw fa-table"></i>
             <span>thông tin giới thiệu</span>
         </a>
         <div id="collapseabout" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('introduce.index') }}">Thông tin giới thiệu</a>
                 <a class="collapse-item" href="{{ route('slider.index') }}">Chỉnh sửa slider</a>
             </div>
         </div>
     </li>
     {{-- end loại tour --}}
     {{-- loại tour --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
             aria-controls="collapse1">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí loại tour</span>
         </a>
         <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('categoriestour.index') }}">Danh sách loại tour</a>
                 <a class="collapse-item" href="{{ route('categoriestour.create') }}">Thêm loại tour</a>
             </div>
         </div>
     </li>
     {{-- end loại tour --}}
     {{-- tour --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
             aria-controls="collapse2">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí tour</span>
         </a>
         <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('tour.index') }}">Danh sách tour</a>
                 <a class="collapse-item" href="{{ route('tour.create') }}">Thêm tour</a>
             </div>
         </div>
     </li>
     {{-- end tour --}}
     {{-- loại xe --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
             aria-controls="collapse3">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí loại xe</span>
         </a>
         <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('categorycar.index') }}">Danh sách loại xe</a>
                 <a class="collapse-item" href="{{ route('categorycar.create') }}">Thêm loại xe</a>
             </div>
         </div>
     </li>
     {{-- end loại xe --}}
     {{-- xe --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
             aria-controls="collapse4">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí xe</span>
         </a>
         <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('car.index') }}">Danh sách xe</a>
                 <a class="collapse-item" href="{{ route('car.create') }}">Thêm xe</a>
             </div>
         </div>
     </li>
     {{-- end loại xe --}}
     {{-- loại tin tức --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
             aria-controls="collapse5">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí loại tin tức</span>
         </a>
         <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('categoryblog.index') }}">Danh sách loại tin tức</a>
                 <a class="collapse-item" href="{{ route('categoryblog.create') }}">Thêm loại tin tức</a>
             </div>
         </div>
     </li>
     {{-- end loại tin tức --}}
     {{-- tin tức --}}
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
             aria-controls="collapse6">
             <i class="fas fa-fw fa-table"></i>
             <span>Quản lí tin tức</span>
         </a>
         <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ route('blog.index') }}">Danh sách tin tức</a>
                 <a class="collapse-item" href="{{ route('blog.create') }}">Thêm tin tức</a>
             </div>
         </div>
     </li>
     {{-- end tin tức --}}
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">
     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
     <!-- Sidebar Message -->
 </ul>
 <!-- End of Sidebar -->
