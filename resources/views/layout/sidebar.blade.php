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
                                        <i class="ki-duotone ki-setting-2 text-muted fs-1"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo"
                                                        src="{{ asset('dashboard') }}/assets/media/avatars/300-1.jpg" />
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
                    <div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i></span><span
                                        class="menu-title">Dashboards</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link active"
                                            href="{{ route('dashboard.production') }}"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Production</span></a></div>
                                    <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Fleet Performance</span></a></div>
                                    <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Hanging VS Waiting</span></a></div>
                                    <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Shift Performance</span></a></div>
                                    <div class="menu-item"><a class="menu-link" href="#"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Unit Status</span></a></div>
                                    <div class="menu-inner flex-column collapse "
                                        id="kt_app_sidebar_menu_dashboards_collapse">
                                        <div class="menu-item"><a class="menu-link" href="#"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Cycle Time</span></a></div>
                                        <div class="menu-item"><a class="menu-link" href="#"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Unit Breakdown</span></a></div>

                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                                data-bs-toggle="collapse"
                                                href="#kt_app_sidebar_menu_dashboards_collapse"
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
                                <div class="menu-content"><span
                                        class="menu-heading fw-bold text-uppercase fs-7">Pages</span></div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-address-book fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i></span><span
                                        class="menu-title">User Profile</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe0f9.html?page=pages/user-profile/overview"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Overview</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd0c8.html?page=pages/user-profile/projects"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Projects</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe6a0.html?page=pages/user-profile/campaigns"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Campaigns</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index30d7.html?page=pages/user-profile/documents"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Documents</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index1142.html?page=pages/user-profile/followers"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Followers</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexa35e.html?page=pages/user-profile/activity"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Activity</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i></span><span
                                        class="menu-title">Account</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index3164.html?page=account/overview"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Overview</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index1477.html?page=account/settings"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexbbde.html?page=account/security"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Security</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index6330.html?page=account/activity"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Activity</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index93d4.html?page=account/billing"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Billing</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index28ff.html?page=account/statements"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Statements</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe638.html?page=account/referrals"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Referrals</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index93a9.html?page=account/api-keys"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span class="menu-title">API
                                                Keys</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexcf4a.html?page=account/logs"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Logs</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-user fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Authentication</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Corporate Layout</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index205a.html?page=authentication/layouts/corporate/sign-in"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-in</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index63bb.html?page=authentication/layouts/corporate/sign-up"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-up</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index20c3.html?page=authentication/layouts/corporate/two-factor"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Two-Factor</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index6e50.html?page=authentication/layouts/corporate/reset-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reset Password</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index8d98.html?page=authentication/layouts/corporate/new-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">New Password</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Overlay Layout</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index4830.html?page=authentication/layouts/overlay/sign-in"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-in</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index847e.html?page=authentication/layouts/overlay/sign-up"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-up</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index5e73.html?page=authentication/layouts/overlay/two-factor"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Two-Factor</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index3438.html?page=authentication/layouts/overlay/reset-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reset Password</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexd8a0.html?page=authentication/layouts/overlay/new-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">New Password</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Creative Layout</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index8500.html?page=authentication/layouts/creative/sign-in"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-in</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexee93.html?page=authentication/layouts/creative/sign-up"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-up</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index9433.html?page=authentication/layouts/creative/two-factor"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Two-Factor</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index76d3.html?page=authentication/layouts/creative/reset-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reset Password</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexa9ba.html?page=authentication/layouts/creative/new-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">New Password</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Fancy Layout</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index6c31.html?page=authentication/layouts/fancy/sign-in"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-in</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index7ebb.html?page=authentication/layouts/fancy/sign-up"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sign-up</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexcab9.html?page=authentication/layouts/fancy/two-factor"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Two-Factor</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexa99b.html?page=authentication/layouts/fancy/reset-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reset Password</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index31a1.html?page=authentication/layouts/fancy/new-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">New Password</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Email Templates</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index5f9e.html?page=authentication/email/welcome-message"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Welcome Message</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index42a2.html?page=authentication/email/reset-password"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reset Password</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexbbd7.html?page=authentication/email/subscription-confirmed"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Subscription Confirmed</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index66c8.html?page=authentication/email/card-declined"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Credit Card Declined</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index4274.html?page=authentication/email/promo-1"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Promo 1</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index8d42.html?page=authentication/email/promo-2"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Promo 2</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index49fa.html?page=authentication/email/promo-3"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Promo 3</span></a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index48a8.html?page=authentication/extended/multi-steps-sign-up"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Multi-steps Sign-up</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index33bb.html?page=authentication/general/welcome"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Welcome Message</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd381.html?page=authentication/general/verify-email"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Verify Email</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexdcf9.html?page=authentication/general/coming-soon"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Coming Soon</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index0340.html?page=authentication/general/password-confirmation"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Password Confirmation</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index7ea0.html?page=authentication/general/account-deactivated"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Account Deactivation</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index6407.html?page=authentication/general/error-404"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Error 404</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index6147.html?page=authentication/general/error-500"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Error 500</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start"
                                class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-file fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Corporate</span><span class="menu-arrow"></span></span>
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe720.html?page=pages/about"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">About</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index5804.html?page=pages/team"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span class="menu-title">Our
                                                Team</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index11bd.html?page=pages/contact"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Contact Us</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexcc30.html?page=pages/licenses"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Licenses</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index1be0.html?page=pages/sitemap"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sitemap</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-39 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Social</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index6bb4.html?page=pages/social/feeds"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Feeds</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index89e4.html?page=pages/social/activity"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Activty</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index28cf.html?page=pages/social/followers"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Followers</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index3ea5.html?page=pages/social/settings"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-bank fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Blog</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index4496.html?page=pages/blog/home"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Blog Home</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index59af.html?page=pages/blog/post"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Blog Post</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-chart-pie-3 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i></span><span
                                        class="menu-title">FAQ</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index130b.html?page=pages/faq/classic"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span class="menu-title">FAQ
                                                Classic</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index2259.html?page=pages/faq/extended"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">FAQ Extended</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-bucket fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i></span><span
                                        class="menu-title">Pricing</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index2ab2.html?page=pages/pricing"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Column Pricing</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexb98f.html?page=pages/pricing/table"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Table Pricing</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-call fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span><span class="path6"></span><span
                                                class="path7"></span><span class="path8"></span></i></span><span
                                        class="menu-title">Careers</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexef10.html?page=pages/careers/list"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Careers List</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd3f9.html?page=pages/careers/apply"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Careers Apply</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-color-swatch fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span><span class="path11"></span><span
                                                class="path12"></span><span class="path13"></span><span
                                                class="path14"></span><span class="path15"></span><span
                                                class="path16"></span><span class="path17"></span><span
                                                class="path18"></span><span class="path19"></span><span
                                                class="path20"></span><span class="path21"></span></i></span><span
                                        class="menu-title">Utilities</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Modals</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">General</span><span
                                                        class="menu-arrow"></span></span>
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="indexcbca.html?page=utilities/modals/general/invite-friends"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Invite Friends</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index6d1e.html?page=utilities/modals/general/view-users"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View Users</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index1eca.html?page=utilities/modals/general/select-users"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Select Users</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index7025.html?page=utilities/modals/general/upgrade-plan"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Upgrade Plan</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index90cb.html?page=utilities/modals/general/share-earn"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Share & Earn</span></a></div>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Forms</span><span
                                                        class="menu-arrow"></span></span>
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index6c59.html?page=utilities/modals/forms/new-target"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">New Target</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="indexbb84.html?page=utilities/modals/forms/new-card"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">New Card</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index40d2.html?page=utilities/modals/forms/new-address"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">New Address</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index2b78.html?page=utilities/modals/forms/create-api-key"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create API Key</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index9b2f.html?page=utilities/modals/forms/bidding"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Bidding</span></a></div>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Wizards</span><span
                                                        class="menu-arrow"></span></span>
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index1226.html?page=utilities/modals/wizards/create-app"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create App</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index3d8e.html?page=utilities/modals/wizards/create-campaign"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create Campaign</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index7814.html?page=utilities/modals/wizards/create-account"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create Business Acc</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="indexde37.html?page=utilities/modals/wizards/create-project"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create Project</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index898b.html?page=utilities/modals/wizards/top-up-wallet"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Top Up Wallet</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index37df.html?page=utilities/modals/wizards/offer-a-deal"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Offer a Deal</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index8e77.html?page=utilities/modals/wizards/two-factor-authentication"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Two Factor Auth</span></a></div>
                                                </div>
                                            </div>
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Search</span><span
                                                        class="menu-arrow"></span></span>
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="indexe83e.html?page=utilities/modals/search/users"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Users</span></a></div>
                                                    <div class="menu-item"><a class="menu-link"
                                                            href="index2018.html?page=utilities/modals/search/select-location"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Select Location</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Search</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexded4.html?page=utilities/search/horizontal"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Horizontal</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexb6a8.html?page=utilities/search/vertical"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Vertical</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index7e26.html?page=utilities/search/users"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexe4b5.html?page=utilities/search/select-location"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Location</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Wizards</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index4f6e.html?page=utilities/wizards/horizontal"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Horizontal</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexee7d.html?page=utilities/wizards/vertical"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Vertical</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexc10a.html?page=utilities/wizards/two-factor-authentication"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Two Factor Auth</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index0e95.html?page=utilities/wizards/create-app"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Create App</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexb058.html?page=utilities/wizards/create-campaign"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Create Campaign</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index8fbd.html?page=utilities/wizards/create-account"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Create Account</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexbd20.html?page=utilities/wizards/create-project"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Create Project</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index898b.html?page=utilities/modals/wizards/top-up-wallet"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Top Up Wallet</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index16b7.html?page=utilities/wizards/offer-a-deal"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Offer a Deal</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-document fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Forms</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Editors</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index62cc.html?page=forms/editors/ckeditor-classic"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">CKEditor Classic</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexf690.html?page=forms/editors/ckeditor-balloon"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">CKEditor Balloon</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexfd32.html?page=forms/editors/ckeditor-balloon-block"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">CKEditor Balloon Block</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index64b5.html?page=forms/editors/ckeditor-inline"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">CKEditor Inline</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index1265.html?page=forms/editors/ckeditor-document"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">CKEditor Document</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Widgets</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index990a.html?page=widgets/lists"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Lists</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index3373.html?page=widgets/statistics"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Statistics</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index3c0a.html?page=widgets/charts"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Charts</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index0afd.html?page=widgets/mixed"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Mixed</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd38d.html?page=widgets/tables"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Tables</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexa8b9.html?page=widgets/feeds"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Feeds</span></a></div>
                                </div>
                            </div>
                            <div class="menu-item pt-5">
                                <div class="menu-content"><span
                                        class="menu-heading fw-bold text-uppercase fs-7">Apps</span></div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-41 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Projects</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index99a6.html?page=apps/projects/list"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">My Projects</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexb27d.html?page=apps/projects/project"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View Project</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexc4f8.html?page=apps/projects/targets"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Targets</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index0a67.html?page=apps/projects/budget"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Budget</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexf4d7.html?page=apps/projects/users"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Users</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexec50.html?page=apps/projects/files"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Files</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index26e9.html?page=apps/projects/activity"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Activity</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index962a.html?page=apps/projects/settings"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-basket fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i></span><span
                                        class="menu-title">eCommerce</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Catalog</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexf9c0.html?page=apps/ecommerce/catalog/products"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index49f3.html?page=apps/ecommerce/catalog/categories"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Categories</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index5b94.html?page=apps/ecommerce/catalog/add-product"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add Product</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexde00.html?page=apps/ecommerce/catalog/edit-product"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit Product</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexc8ee.html?page=apps/ecommerce/catalog/add-category"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add Category</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index3e3f.html?page=apps/ecommerce/catalog/edit-category"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit Category</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sales</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index1522.html?page=apps/ecommerce/sales/listing"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Orders Listing</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index8e13.html?page=apps/ecommerce/sales/details"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Order Details</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexa335.html?page=apps/ecommerce/sales/add-order"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add Order</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index938f.html?page=apps/ecommerce/sales/edit-order"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit Order</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customers</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexe97a.html?page=apps/ecommerce/customers/listing"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer Listing</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index36f3.html?page=apps/ecommerce/customers/details"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer Details</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Reports</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index63f3.html?page=apps/ecommerce/reports/view"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Products Viewed</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index735a.html?page=apps/ecommerce/reports/sales"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sales</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index2735.html?page=apps/ecommerce/reports/returns"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Returns</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexb2eb.html?page=apps/ecommerce/reports/customer-orders"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer Orders</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index1e64.html?page=apps/ecommerce/reports/shipping"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Shipping</span></a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexc1d8.html?page=apps/ecommerce/settings"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-25 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Contacts</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexb92f.html?page=apps/contacts/getting-started"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting Started</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd0c9.html?page=apps/contacts/add-contact"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Add Contact</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index44ef.html?page=apps/contacts/edit-contact"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Edit Contact</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index1ac8.html?page=apps/contacts/view-contact"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View Contact</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-chart fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Support Center</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexd822.html?page=apps/support-center/overview"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Overview</span></a></div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Tickets</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexd6de.html?page=apps/support-center/tickets/list"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tickets List</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index9749.html?page=apps/support-center/tickets/view"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View Ticket</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Tutorials</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index31a3.html?page=apps/support-center/tutorials/list"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tutorials List</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index45a3.html?page=apps/support-center/tutorials/post"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tutorial Post</span></a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index647d.html?page=apps/support-center/faq"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">FAQ</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexde93.html?page=apps/support-center/licenses"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Licenses</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index49b9.html?page=apps/support-center/contact"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Contact Us</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">User
                                        Management</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Users</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexcde1.html?page=apps/user-management/users/list"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users List</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index0081.html?page=apps/user-management/users/view"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View User</span></a></div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Roles</span><span class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="indexc93f.html?page=apps/user-management/roles/list"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles List</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index5fae.html?page=apps/user-management/roles/view"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View Role</span></a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index2c45.html?page=apps/user-management/permissions"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Permissions</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-38 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Customers</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index3e08.html?page=apps/customers/getting-started"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting Started</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexebfd.html?page=apps/customers/list"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer Listing</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index74af.html?page=apps/customers/view"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Customer Details</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-map fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span><span
                                        class="menu-title">Subscription</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index1938.html?page=apps/subscriptions/getting-started"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Getting Started</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe9b6.html?page=apps/subscriptions/list"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Subscription List</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index2234.html?page=apps/subscriptions/add"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Add Subscription</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index17f1.html?page=apps/subscriptions/view"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View Subscription</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">Invoice
                                        Manager</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                            class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View Invoices</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index77c6.html?page=apps/invoices/view/invoice-1"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice 1</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index6493.html?page=apps/invoices/view/invoice-2"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice 2</span></a></div>
                                            <div class="menu-item"><a class="menu-link"
                                                    href="index1193.html?page=apps/invoices/view/invoice-3"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Invoice 3</span></a></div>
                                        </div>
                                    </div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index7b32.html?page=apps/invoices/create"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Create Invoice</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">File Manager</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexbbc2.html?page=apps/file-manager/folders"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Folders</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index0e13.html?page=apps/file-manager/files"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Files</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexdf47.html?page=apps/file-manager/blank"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Blank Directory</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index95ea.html?page=apps/file-manager/settings"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Settings</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-sms fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Inbox</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index9eca.html?page=apps/inbox/listing"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Messages</span><span class="menu-badge"><span
                                                    class="badge badge-success">3</span></span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="index645d.html?page=apps/inbox/compose"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Compose</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexe489.html?page=apps/inbox/reply"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">View & Reply</span></a></div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span
                                    class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i></span><span
                                        class="menu-title">Chat</span><span class="menu-arrow"></span></span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item"><a class="menu-link"
                                            href="index97cc.html?page=apps/chat/private"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Private Chat</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexaf8d.html?page=apps/chat/group"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Group Chat</span></a></div>
                                    <div class="menu-item"><a class="menu-link"
                                            href="indexadf9.html?page=apps/chat/drawer"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Drawer Chat</span></a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a class="menu-link" href="indexb037.html?page=apps/calendar"><span
                                        class="menu-icon"><i class="ki-duotone ki-calendar-8 fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span><span
                                                class="path5"></span><span class="path6"></span></i></span><span
                                        class="menu-title">Calendar</span></a></div>
                            <div class="menu-item pt-5">
                                <div class="menu-content"><span
                                        class="menu-heading fw-bold text-uppercase fs-7">Help</span></div>
                            </div>
                            <div class="menu-item"><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                    target="_blank"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Components</span></a></div>
                            <div class="menu-item"><a class="menu-link" href="indexa048.html?page=layout-builder"><span
                                        class="menu-icon"><i class="ki-duotone ki-abstract-13 fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Layout Builder</span></a></div>
                            <div class="menu-item"><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"><span
                                        class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Documentation</span></a></div>
                            <div class="menu-item"><a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                    target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i></span><span
                                        class="menu-title">Changelog v8.3.3</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                        class="btn btn-flex btn-custom btn-primary w-100" data-bs-toggle="tooltip"
                        data-bs-trigger="hover" data-bs-dismiss-="click"
                        title="200+ in-house components and 3rd-party plugins">
                        <span class="btn-label">
                            Docs & Components
                        </span>
                        <i class="ki-duotone ki-document ms-2 fs-2"><span class="path1"></span><span
                                class="path2"></span></i> </a>
                </div>
            </div>
