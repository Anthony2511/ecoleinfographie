@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <!-- Item Media Manager -->
          <li>
            <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}">
              <i class="fa fa-files-o"></i>
              <span>Gestionnaire de médias</span>
            </a>
          </li>

          <!-- Item LangFileManager -->
          <li class="treeview">
            <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
            </ul>
          </li>

          <!-- item PagesManager -->
          <li>
            <a href="{{ url(config('backpack.base.route_prefix').'/page') }}">
              <i class="fa fa-file-o"></i>
              <span>Pages</span>
            </a>
          </li>

          <!-- News -->
          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper-o"></i> <span>Actualités</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
              <li><a href="{{ url('admin/commentnews') }}"><i class="fa fa-comments-o"></i> <span>Commentaires</span></a></li>
            </ul>
          </li>

          <!-- blog -->
          <li class="treeview">
            <a href="#"><i class="fa fa-rss"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
              <li><a href="{{ url('admin/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
              <li><a href="{{ url('admin/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
              <li><a href="{{ url('admin/author') }}"><i class="fa fa-pencil"></i> <span>Auteurs externe</span></a></li>
              <li><a href="{{ url('admin/comment') }}"><i class="fa fa-comments-o"></i> <span>Commentaires</span></a></li>
            </ul>
          </li>

          <!-- professeurs -->
          <li>
            <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/teacher') }}"><i class="fa fa-address-card"></i><span>Professeurs</span></a></li>

          <!-- cours -->
          <li>
            <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/cours') }}"><i class="fa fa-puzzle-piece"></i><span>Liste des cours</span></a></li>

          <!-- étudiants -->
          <li>
            <a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/student') }}"><i class="fa fa-graduation-cap"></i><span>Étudiants et anciens</span></a></li>

          <!-- réalisations -->
          <li class="treeview">
            <a href="#"><i class="fa fa-briefcase"></i> <span>Réalisations des étudiants</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/work') }}"><i class="fa fa-paint-brush"></i> <span>Travaux</span></a></li>
              <li><a href="{{ url('admin/skill') }}"><i class="fa fa-cogs"></i> <span>Compétences technique</span></a></li>
              <li><a href="{{ url('admin/type') }}"><i class="fa fa-folder"></i> <span>Type de projet</span></a></li>
            </ul>
          </li>

          <!-- item MenuCRUD -->
          <li><a href="{{ url('admin/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>

          <!-- settings website -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}"><i class="fa fa-cog"></i> <span>Options</span></a></li>

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
