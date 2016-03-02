<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status 
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    -->
                </div>
            </div>
        @endif

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">General</li>
            <!-- Optionally, you can add icons to the links -->
            <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                <a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a>
            </li>
            @if(auth()->check())
                <li class="header">View</li>
                @can('view-companies')
                    <li {{ (Request::is('*company') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('company.index') }}"><i class="fa fa-link"></i> <span>Companies</span></a>
                    </li>
                @endcan
                @can('view-office365-projects')
                    <li {{ (Request::is('*office365') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('office365.index') }}"><i class="fa fa-link"></i> <span>Office 365 projects</span></a>
                    </li>
                @endcan
                @can('view-offsitebackup-projects')
                    <li {{ (Request::is('*offsitebackup') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('offsitebackup.index') }}"><i class="fa fa-link"></i> <span>Offsite backup projects</span></a>
                    </li>
                @endcan
                @can('view-offsitestorage-projects')
                    <li {{ (Request::is('*offsitestorage') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('offsitestorage.index') }}"><i class="fa fa-link"></i> <span>Offsite storage projects</span></a>
                    </li>
                @endcan
                @can('view-vcontainer-projects')
                    <li {{ (Request::is('*vcontainer') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('vcontainer.index') }}"><i class="fa fa-link"></i> <span>vContainer projects</span></a>
                    </li>
                @endcan
                @can('view-products')
                    <li {{ (Request::is('product.index') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('product.index') }}"><i class="fa fa-link"></i> <span>Products</span></a>
                    </li>
                @endcan
                <li class="header">Create</li>
                @can('edit-project')
                    <li {{ (Request::is('project.create') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('project.create') }}"><i class="fa fa-link"></i> <span>Project</span></a>
                    </li>
                @endcan
                @can('edit-product')
                    <li {{ (Request::is('product.create') ? 'class="active"' : '') }}>
                        <a href="{{ URL::route('product.create') }}"><i class="fa fa-link"></i> <span>Product</span></a>
                    </li>
                @endcan
                @can('edit-vcontainer-infrastructure')
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>vContainer Infrastructure</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ URL::route('vcontainer.create') }}">vContainer</a></li>
                            <li><a href="{{ URL::route('vdc.create') }}">vDc</a></li>
                            <li><a href="{{ URL::route('storagepool.create') }}">Storagepool</a></li>
                            <li><a href="{{ URL::route('vapp.create') }}">vApp</a></li>
                        </ul>
                    </li>
                @endcan
                <li class="header">Reports</li>
                @can('view-office365-reports')
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>Office365</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ URL::route('reports.office365.stats') }}">Statistics</li>
                            <li><a href="{{ URL::route('reports.office365.expire') }}">Expirations</a></li>
                        </ul>
                    </li>
                @endcan
                @can('view-company-cost')
                    <li><a href="{{ URL::route('reports.company.cost') }}"><i class="fa fa-link"></i> <span>Company cost</span></a></li>
                @endcan
                @can('view-changes')
                    <li><a href="{{ URL::route('reports.changes') }}"><i class="fa fa-link"></i> <span>Changes</a></span></li>
                @endcan
            @endif
            @if(auth()->check() && auth()->user()->hasAnyRole('admin'))
                <li class="header">Admin</li>
                <li {{ (Request::is('admin.home') ? 'class="active"' : '') }}>
                    <a href="{{ URL::route('admin.home') }}"><i class="fa fa-link"></i> <span>Home</span></a>
                </li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>