<nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Livewire Admin</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                    {{__('sidebar.admin.header.dashboard')}}
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">{{__('sidebar.admin.dashboard')}}</span>
                        </a>
                    </li>
                    @can('manage_user|manage_role')        
                    <li class="sidebar-header">
                        {{__('sidebar.admin.header.system')}}
                    </li>
                    @endcan
                    @can('manage_user')                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.user.index')}}">
                            <i class="align-middle" data-feather="users"></i> <span
                                class="align-middle">{{__('sidebar.admin.user')}}</span>
                        </a>
                    </li>
                    @endcan

                    @can('manage_role')      
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.role.index')}}">
                            <i class="align-middle" data-feather="user-check"></i> <span
                                class="align-middle">{{__('sidebar.admin.role')}}</span>
                        </a>
                    </li>
                    @endcan

                    <li class="sidebar-header">
                        {{__('sidebar.admin.header.report')}}
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Livewire admin 2021</strong>
                        <div class="mb-3 text-sm">
                            Thank you very much!
                        </div>
                        <div class="d-grid">
                            <a href="https://hau.xyz" class="btn btn-primary">Go to me</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
