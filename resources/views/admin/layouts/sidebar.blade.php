<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset(auth()->user()->avatar) }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Portto</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setSidebarActive(['dashboard']) }}"><a class="nav-link" href="{{ route('dashboard') }}"><i
                        class="fas fa-fire"></i>General
                    Dashboard</a>
            </li>

            <li class="menu-header">Starter</li>

            {{--  <li class="dropdown">
                <a class="nav-link" href="{{ route('admin.projects.index') }}"><i class="fas fa-stream"></i>
                    <span>Projects</span>
                </a>
            </li>  --}}
            <li
                class="nav-item dropdown {{ setSidebarActive(['admin.small-title.*', 'admin.hero.*', 'admin.hero-running-logo.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Hero</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.small-title.*']) }}"><a class="nav-link"
                            href="{{ route('admin.small-title.index') }}">Small Title</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.hero.*']) }}"><a class="nav-link"
                            href="{{ route('admin.hero.index') }}">Hero section</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.hero-running-logo.*']) }}"><a class="nav-link"
                            href="{{ route('admin.hero-running-logo.index') }}">Hero Company Logo</a>
                    </li>
                </ul>
            </li>

            <li class="{{ setSidebarActive(['admin.about.*']) }}">
                <a class="nav-link" href="{{ route('admin.about.index') }}"><i class="fas fa-address-card"></i>
                    <span>About</span>
                </a>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.service-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-headphones"></i>
                    <span>Services</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.services.*']) }}">
                        <a class="nav-link" href="{{ route('admin.services.index') }}">
                            Service
                        </a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.service-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.service-section-setting.index') }}">
                            Section Setting
                        </a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.projects-category.*', 'admin.projects.*', 'admin.projects-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-laptop"></i>
                    <span>Projects</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.projects-category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.projects-category.index') }}">
                            Project Category
                        </a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.projects.*']) }}">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">
                            Project
                        </a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.projects-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.projects-section-setting.index') }}">
                            Section Setting
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ setSidebarActive(['admin.tools.*']) }}">
                <a class="nav-link" href="{{ route('admin.tools.index') }}"><i class="fas fa-wrench"></i>
                    <span>Tools</span>
                </a>
            </li>

            <li class="{{ setSidebarActive(['admin.projects-orders.*']) }}">
                <a class="nav-link" href="{{ route('admin.projects-orders.index') }}"><i
                        class="fas fa-money-bill-wave"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.workflow-section-setting.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-map-signs"></i>
                    <span>Workflow</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.workflow-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.workflow-section-setting.index') }}">
                            Section Setting
                        </a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.testimonial-section-setting.*', 'admin.testimonial.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-star"></i>
                    <span>Testimonial</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.testimonial.*']) }}">
                        <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                            Testimonial
                        </a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.testimonial-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.testimonial-section-setting.index') }}">
                            Section Setting
                        </a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.faq-section-setting.*', 'admin.faq-question.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-comments"></i>
                    <span>FAQ</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.faq-question.*']) }}">
                        <a class="nav-link" href="{{ route('admin.faq-question.index') }}">
                            FAQ Questions
                        </a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.faq-section-setting.*']) }}">
                        <a class="nav-link" href="{{ route('admin.faq-section-setting.index') }}">
                            Section Setting
                        </a>
                    </li>
                </ul>
            </li>

            <li
                class="dropdown {{ setSidebarActive(['admin.footer-info.*', 'admin.footer-grid-one.*', 'admin.footer-grid-two.*', 'admin.footer-grid-three.*', 'admin.footer-grid-four.*', 'admin.footer-social.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-stream"></i>
                    <span>Footer Setting</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.footer-social.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-social.index') }}">Social Links</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.footer-info.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-info.index') }}">Footer Info</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-one.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-grid-one.index') }}">Footer Grid One</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-two.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-grid-two.index') }}">Footer Grid Two</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-three.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-grid-three.index') }}">Footer Grid Three</a>
                    </li>
                    <li class="{{ setSidebarActive(['admin.footer-grid-four.*']) }}">
                        <a class="nav-link" href="{{ route('admin.footer-grid-four.index') }}">Footer Grid Four</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Settings</li>
            <li class="{{ setSidebarActive(['admin.settings.*']) }}">
                <a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
