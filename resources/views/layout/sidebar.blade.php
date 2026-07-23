<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
            <div class="symbol symbol-50px">
                <img src="{{ asset('dashboard') }}/assets/media/avatars/300-1.jpg" alt="" />
            </div>
            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <div class="d-flex">
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="text-white text-hover-primary fs-6 fw-bold">Ahmad Fadillah</a>
                        <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">FMS Engineer</span>
                        <div class="d-flex align-items-center text-success fs-9">
                            <span class="bullet bullet-dot bg-success me-1"></span>online
                        </div>
                    </div>
                    <div class="me-n2">
                        <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-setting-2 text-muted fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{ asset('dashboard') }}/assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            Ahmad Fadillah <span
                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span>
                                        </div>
                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                            ahmadfadillah502@gmail.com </a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="index3164.html?page=account/overview" class="menu-link px-5">
                                    My Profile
                                </a>
                            </div>

                            <div class="menu-item px-5">
                                <a href="index205a.html?page=authentication/layouts/corporate/sign-in"
                                    class="menu-link px-5">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion"><span
                        class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span><span
                                    class="path4"></span></i></span><span class="menu-title">Dashboards</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item"><a class="menu-link active"
                                href="{{ route('dashboard.production') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Production</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Fleet
                                    Performance</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Hanging VS
                                    Waiting</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Shift
                                    Performance</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Unit
                                    Status</span></a></div>
                        <div class="menu-inner flex-column collapse " id="kt_app_sidebar_menu_dashboards_collapse">
                            <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span class="menu-title">Cycle
                                        Time</span></a></div>
                            <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                            class="bullet bullet-dot"></span></span><span class="menu-title">Unit
                                        Breakdown</span></a></div>

                        </div>

                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                    data-kt-toggle-text="Show Less">
                                    <span data-kt-toggle-text-target="true">Show More</span> <i
                                        class="ki-duotone ki-minus-square toggle-on fs-2 me-0"><span
                                            class="path1"></span><span class="path2"></span></i><i
                                        class="ki-duotone ki-plus-square toggle-off fs-2 me-0"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span class="menu-link"><span
                            class="menu-icon"><i class="ki-duotone ki-address-book fs-2"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i></span><span class="menu-title">Realtime</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Activity
                                    Duration</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Status
                                    Duration</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Standby &
                                    Delay</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Payload &
                                    Ritation</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Operational
                                    Problem</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Matching
                                    Fleet</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Setting
                                    Fleet</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">HD Over Speed</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span class="menu-title">Availability</span></a></div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet">
                            <span class="bullet bullet-dot"></span></span><span class="menu-title">Hour Meter</span></a>
                        </div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet">
                            <span class="bullet bullet-dot"></span></span><span class="menu-title">Hour Meter</span></a>
                        </div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet">
                            <span class="bullet bullet-dot"></span></span><span class="menu-title">Pre Start Check</span></a>
                        </div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet">
                            <span class="bullet bullet-dot"></span></span><span class="menu-title">Hour Meter</span></a>
                        </div>
                        <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet">
                            <span class="bullet bullet-dot"></span></span><span class="menu-title">Hour Meter</span></a>
                        </div>

                    </div>
                </div>

                <div class="menu-item"><a class="menu-link" href="indexb037.html?page=apps/calendar"><span
                            class="menu-icon"><i class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></i></span><span
                            class="menu-title">Calendar</span></a></div>
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
        <a href="https://poka.ptsims.co.id" class="btn btn-flex btn-custom btn-primary w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">
                SATU SIMS
            </span>
            <i class="ki-duotone ki-document ms-2 fs-2"><span class="path1"></span><span class="path2"></span></i> </a>
    </div>
</div>
