<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
    <div class="app-sidebar-wrapper py-8 py-lg-10" id="kt_app_sidebar_wrapper">
        <div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column px-8 px-lg-10 hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}" data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_wrapper" data-kt-scroll-offset="{default: '10px', lg: '40px'}">
            <div class="mb-0">
                <h3 class="text-gray-800 fw-bold mb-8">Accès rapide</h3>
                <div class="row g-5" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                    <div class="col-6">
                        <a href="{{ route('index') }}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <span class="mb-2">
                                <i class="ki-outline ki-home fs-1"></i>
                            </span>
                            <span class="fs-7 fw-bold">Accueil</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('about') }}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <span class="mb-2">
                                <i class="ki-outline ki-file fs-1"></i>
                            </span>
                            <span class="fs-7 fw-bold">A propos</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('clients.index') }}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <span class="mb-2">
                                <i class="ki-outline ki-user fs-1"></i>
                            </span>
                            <span class="fs-7 fw-bold">Clients</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('articles.index') }}" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200" data-kt-button="true">
                            <span class="mb-2">
                                <i class="ki-outline ki-file fs-1"></i>
                            </span>
                            <span class="fs-7 fw-bold">Articles</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
