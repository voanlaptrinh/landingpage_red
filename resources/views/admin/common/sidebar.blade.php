<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Request::route()->getName() == 'landingpage.admin' || Request::route()->getName() == 'block.admin' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('landingpage.admin') }}">
                <i class="bi bi-grid"></i>
                <span>Landingpage</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li
            class="nav-item {{ Request::route()->getName() == 'subcription.admin' || Request::route()->getName() == 'subcription.detail' || Request::route()->getName() == 'subcription.create' || Request::route()->getName() == 'subcription.edit' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('subcription.admin') }}">
                <i class="ri-settings-2-line"></i>
                <span>Subcription</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li
            class="nav-item {{ Request::route()->getName() == 'news.admin' ? 'active-sidebar' : '' }}{{ Request::route()->getName() == 'news.create' ? 'active-sidebar' : '' }}{{ Request::route()->getName() == 'news.edit' ? 'active-sidebar' : '' }}{{ Request::route()->getName() == 'news.detail' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('news.admin') }}">
                <i class="bi bi-newspaper"></i>
                <span>Tin tức</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item {{ Request::route()->getName() == 'webconfig.admin' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('webconfig.admin') }}">
                <i class="ri-settings-2-line"></i>
                <span>Web setting</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item {{ Request::route()->getName() == 'contact.admin' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('contact.admin') }}">
                <i class="bx bx-mail-send"></i>
                <span>Liên hệ</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item {{ Request::route()->getName() == 'email.index' ? 'active-sidebar' : '' }}">
            <a class="nav-link " href="{{ route('email.index') }}">
                <i class="bx bx-mail-send"></i>
                <span>Email Liên hệ</span>
            </a>
        </li><!-- End Dashboard Nav -->




    </ul>

</aside><!-- End Sidebar-->
