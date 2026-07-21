<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" style="" class="header  align-items-stretch">
        <div class="header-brand">
            <a href="#">
                <img alt="Logo" src="{{ asset('logo2.png') }}" class="h-125px h-lg-125px" />
            </a>
            <div id="kt_aside_toggle"
                class="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize
                                                                                                                                                                                                                                                                                                                                                                                                                                                                "
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="aside-minimize">
                <i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default"><span class="path1"></span><span
                        class="path2"></span></i>
                <i class="ki-duotone ki-entrance-left fs-1 minimize-active"><span class="path1"></span><span
                        class="path2"></span></i> </div>
            <div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
        </div>
        <div class="toolbar d-flex align-items-stretch">
            <div
                class=" container-xxl  py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                <div class="page-title d-flex justify-content-center flex-column me-5">
                    <h1 class="d-flex flex-column text-gray-900 fw-bold fs-3 mb-0">
                        Dashboard </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index708f.html?page=index" class="text-muted text-hover-primary">
                                Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Dashboards </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-gray-900">
                            Default </li>
                    </ul>
                </div>
                <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                    <div class="d-flex align-items-center">
                        <span class="fs-7 fw-bold text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort
                            By:</span>
                        <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px"
                            data-control="select2" data-placeholder="Latest" data-hide-search="true">
                            <option value=""></option>
                            <option value="1" selected>Latest</option>
                            <option value="2">In Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                        <span class="fs-7 text-gray-700 fw-bold d-none d-sm-block">Impact <span
                                class="d-none d-xxl-inline">Level</span>:</span>
                        <div class="d-flex align-items-center ps-4" id="kt_toolbar">
                            <div id="kt_toolbar_slider"
                                class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm"></div>
                            <span id="kt_toolbar_slider_value"
                                class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bold text-primary"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Set impact level">
                            </span>
                        </div>
                        <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-xxl-block">Quick Tools:</span>
                        <div class="d-flex">
                            <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-file fs-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                            <div class="d-flex align-items-center">
                                <a href="index2234.html?page=apps/subscriptions/add"
                                    class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary">
                                    <i class="ki-duotone ki-add-files fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </a>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="indexbbc2.html?page=apps/file-manager/folders"
                                    class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary">
                                    <i class="ki-duotone ki-file-up fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                            data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                    class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i
                                class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                    class="path2"></span></i></a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span></i>
                                    </span>
                                    <span class="menu-title">
                                        Light
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <span class="menu-title">
                                        Dark
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i> </span>
                                    <span class="menu-title">
                                        System
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
