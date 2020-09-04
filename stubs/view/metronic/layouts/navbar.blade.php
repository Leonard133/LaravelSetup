<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('admin.dashboard') }}" class="brand-logo">
            <span class="text-white tw-text-xl">{{ config('app.name') }}</span>
{{--            <img alt="Logo" src="{{ asset('assets/media/logos/logo-light.png') }}"/>--}}
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none"
                                                                                          fill-rule="evenodd"><path
                                    d="M0 0h24v24H0z"/><path
                                    d="M12.707 6.707a1 1 0 00-1.414-1.414l-6 6a1 1 0 00-.03 1.383l5.5 6a1 1 0 001.474-1.352L7.384 12.03l5.323-5.323z"
                                    fill="#000" fill-rule="nonzero"/><path
                                    d="M19.707 6.707a1 1 0 10-1.414-1.414l-6 6a1 1 0 00-.03 1.383l5.5 6a1 1 0 101.474-1.352l-4.853-5.294 5.323-5.323z"
                                    fill="#000" fill-rule="nonzero" opacity=".3"/></g></svg>
                                <!--end::Svg Icon-->
							</span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
             data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item {{ activeRoute('admin.dashboard') }}"
                    aria-haspopup="true">
                    <a href="{{ route('admin.dashboard') }}" class="menu-link">
                        <i class="menu-icon fas fa-home"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item {{ activeRoute('admin.admin', true) }}"
                    aria-haspopup="true">
                    <a href="{{ route('admin.admin.index') }}" class="menu-link">
                        <i class="menu-icon fas fa-user-shield"></i>
                        <span class="menu-text">Admin List</span>
                    </a>
                </li>
                <li class="menu-item {{ activeRoute('admin.branch', true) }}"
                    aria-haspopup="true">
                    <a href="{{ route('admin.branch.index') }}" class="menu-link">
                        <i class="menu-icon fas fa-map-marker-alt"></i>
                        <span class="menu-text">Branch List</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu {{ activeRoute('admin.company', true) ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-building"></i>
                        <span class="menu-text">Company</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Company</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('admin.company.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Company List</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('admin.company.pending.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Pending List</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('admin.company.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">User List</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Pricing</span>
                                </a>
                            </li>
                            {{--                            <li class="menu-item" aria-haspopup="true">--}}
                            {{--                                <a href="#" class="menu-link">--}}
                            {{--                                    <i class="menu-bullet menu-bullet-dot">--}}
                            {{--                                        <span></span>--}}
                            {{--                                    </i>--}}
                            {{--                                    <span class="menu-text">Billing</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="menu-item" aria-haspopup="true">--}}
                            {{--                                <a href="#" class="menu-link">--}}
                            {{--                                    <i class="menu-bullet menu-bullet-dot">--}}
                            {{--                                        <span></span>--}}
                            {{--                                    </i>--}}
                            {{--                                    <span class="menu-text">Ordering</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="menu-item" aria-haspopup="true">--}}
                            {{--                                <a href="#" class="menu-link">--}}
                            {{--                                    <i class="menu-bullet menu-bullet-dot">--}}
                            {{--                                        <span></span>--}}
                            {{--                                    </i>--}}
                            {{--                                    <span class="menu-text">Balance</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.order.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-shopping-cart"></i>
                        <span class="menu-text">Order</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Order</span>
												</span>
                            </li>
                            <li class="menu-item {{ Route::is('admin.order.index')? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('admin.order.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Order List</span>
                                </a>
                            </li>

                            <li class="menu-item {{ Route::is('admin.orderLog.index')? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('admin.order.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Order Log</span>
                                </a>
                            </li>
                            <li class="menu-item {{ Route::is('admin.admin.index')? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('admin.order.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Order Pending</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.parcel.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-box-open"></i>
                        <span class="menu-text">Parcel</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Parcel</span>
												</span>
                            </li>
                            <li class="menu-item {{ Route::is('admin.parcel.index') && request()->query('type') == ''  ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('admin.parcel.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Parcel List</span>
                                </a>
                            </li>
                            <li class="menu-item {{ Route::is('admin.parcel.index') && request()->query('type') == 1  ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('admin.parcel.index',['type'=>1])}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Parcel Pending</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.bill.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-file-invoice-dollar"></i>
                        <span class="menu-text">Bill</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Bill</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Bill List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ (activeRoute('admin.warehouse', true) || activeRoute('admin.warehouse.staff', true)) ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-warehouse"></i>
                        <span class="menu-text">Warehouse</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Warehouse</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('admin.warehouse.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Warehouse List</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('admin.warehouse.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Staff List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.driver.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-user-tie"></i>
                        <span class="menu-text">Driver</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Driver</span>
												</span>
                            </li>
                            <li class="menu-item {{ Route::is('admin.driver.*')  ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('admin.driver.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Driver List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.vehicle.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-truck"></i>
                        <span class="menu-text">Vehicle</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Vehicle</span>
												</span>
                            </li>
                            <li class="menu-item {{ Route::is('admin.vehicle.*')  ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('admin.vehicle.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Vehicle List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.tracking.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-file-alt"></i>
                        <span class="menu-text">Tracking</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Tracking</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tracking List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.report.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-graph-1"></i>
                        <span class="menu-text">Report</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Report</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Report List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu {{ Route::is('admin.permission.*') ? 'menu-item-open menu-item-here' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-lock"></i>
                        <span class="menu-text">Permission / Role</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Permission / Role</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Permission List</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="layout/general/fluid-content.html" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Role List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
