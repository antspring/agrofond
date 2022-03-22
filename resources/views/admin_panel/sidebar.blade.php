<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a id="contacts" href="{{ asset('admin/contacts') }}" class="nav-link contacts-link">
                        <i class="fas fa-address-book nav-icon"></i>
                        <p>Контакты</p>
                    </a>
                </li>
                <li id="home-slider" class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Главная
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('admin/home-slider') }}" class="nav-link home-slider-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Контент для слайдера</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a  id="news" href="{{ asset('admin/news') }}" class="nav-link">
                        <i class="far fa-newspaper"></i>
                        <p>Новости</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout" class="nav-link contacts-link">Выйти</a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
