<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="text-center brand-link">Kino CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>
                        Пост
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Категория
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Тэги
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.film.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-film"></i>
                    <p>
                        Фильмы
                    </p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
