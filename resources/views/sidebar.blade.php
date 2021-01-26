<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Website Collapse Menu -->
    <li class="nav-item">
        <a href="#" data-toggle="collapse" data-target="#collapseWebsite" aria-expanded="true" aria-controls="collapseWebsite" class="nav-link collapsed">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Websites</span>
        </a>
        <div id="collapseWebsite" class="collapse" aria-labelledby="Websites">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="/site">{{ __('List') }}</a>
                <a class="collapse-item" href="/site/add">{{ __('Add') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Website Collapse Menu -->

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">

        <a href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser" class="nav-link collapsed">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>{{ __('Users') }}</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="collapseUser">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="/user">{{ __('List') }}</a>
                <a class="collapse-item" href="/user/add">{{ __('Add') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Users Collapse Menu -->

</ul>
<!-- End of Sidebar -->
