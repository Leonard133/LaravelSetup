<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                <!--begin:Form-->
                <form method="get" class="quick-search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M14.293 16.707a1 1 0 011.414-1.414l4 4a1 1 0 01-1.414 1.414l-4-4z" fill="#000" fill-rule="nonzero" opacity=".3"/><path d="M11 16a5 5 0 100-10 5 5 0 000 10zm0 2a7 7 0 110-14 7 7 0 010 14z" fill="#000" fill-rule="nonzero"/></g></svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search..." />
                        <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                    </span>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
                <!--begin::Scroll-->
                <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                <!--end::Scroll-->
            </div>
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Notifications-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M2.56 10.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm12 0l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121z" fill="#000" opacity=".3"/><path d="M8.56 16.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm0-12l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0L8.561 6.803a1.5 1.5 0 010-2.121z" fill="#000"/></g></svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }}">
                            <!--begin::Title-->
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">User Notifications</span>
                                <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="tab-content">
                            <!--begin::Tabpane-->
                            <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                <!--begin::Scroll-->
                                <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light-primary mr-5">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5 3h1a1 1 0 011 1v16a1 1 0 01-1 1H5a1 1 0 01-1-1V4a1 1 0 011-1zm5 0h1a1 1 0 011 1v16a1 1 0 01-1 1h-1a1 1 0 01-1-1V4a1 1 0 011-1z" fill="#000"/><rect fill="#000" opacity=".3" transform="rotate(-19 17.826 11.946)" x="16.326" y="2.946" width="3" height="18" rx="1"/></g></svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
                                            <span class="text-muted">Marketing campaign planning</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Scroll-->
                                <!--begin::Action-->
                                <div class="d-flex flex-center pt-7">
                                    <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-line-chart text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New report has been received</div>
                                                <div class="text-muted">23 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                                <br />No new notifications.</div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                        </div>
                        <!--end::Content-->
                    </form>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm" src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt=""/>
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <i class="fas fa-code-branch tw-text-indigo-500"></i>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            @if(admin('type') !== 2)
                                <a href="{{ route('admin.branch.choose', ['branch' => 'all']) }}" class="navi-link">
                                    <span class="navi-text">All Branch</span>
                                </a>
                            @endif
                            @foreach(admin('activeBranches') as $branch)
                                <a href="{{ route('admin.branch.choose', ['branch' => $branch->code, 'name' => $branch->name, 'id' => $branch->id]) }}"
                                   class="navi-link">
                                    <span class="navi-text">{{ $branch->name }}</span>
                                </a>
                            @endforeach
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span
                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ admin('username')  }}</span>
                    <span class="symbol symbol-35 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">{{ admin('first_letter')  }}</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
