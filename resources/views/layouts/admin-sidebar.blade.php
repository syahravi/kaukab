<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/home" class="text-nowrap logo-img">
            <img src="{{asset('images/logos/WhatsApp Image 2024-05-19 at 20.10.07_12bba774.jpg')}}" width="150"  alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Beranda</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.santri.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-article"></i>
                    </span>
                    <span class="hide-menu">Data Santri</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.criteria.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-receipt"></i>
                    </span>
                    <span class="hide-menu">Data Kriteria</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.normalisasi.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-files"></i>
                    </span>
                    <span class="hide-menu">Nilai Normalisasi</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.nilai-akhir.index') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-cards"></i>
                    </span>
                    <span class="hide-menu">Nilai Akhir</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
