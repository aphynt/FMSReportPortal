<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Login - {{ config('app.name') }}</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="index8500.html?page=authentication/layouts/creative/sign-in" />
    <link rel="shortcut icon" href="logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('dashboard') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');

    </script>
    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }

    </script>
</head>

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }

    </script>
    <div class="d-flex flex-column flex-root">
        <style>
            body {
                background-image: url('{{ asset('dashboard') }}/assets/media/auth/bg4.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('{{ asset('dashboard') }}/assets/media/auth/bg4-dark.jpg');
            }

        </style>
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="#" >
                        <img alt="Logo" src="logo.png" style="max-width: 400px" />
                    </a>
                    <h2 class="text-white fw-normal m-0">
                        <i>FLEET OPTIMIZATION CONTROL UBIQUITOUS SYSTEM</i>
                    </h2>
                </div>
            </div>
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                            data-kt-redirect-url="/metronic8/demo8/?page=index" action="#">
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Masuk
                                </h1>

                                <div class="text-gray-500 fw-semibold fs-6">
                                    Silakan masuk ke akun Anda
                                </div>
                            </div>
                            <div class="fv-row mb-8">

                                <input type="text" placeholder="Username" name="username" autocomplete="off"
                                    class="form-control bg-transparent" />

                            </div>

                            <div class="fv-row mb-3">

                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control bg-transparent" />

                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="#" id="forgotPassword" class="link-primary">
                                    Lupa Kata Sandi?
                                </a>

                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                                    <span class="indicator-label">
                                        Masuk
                                    </span>

                                    <span class="indicator-progress">
                                        Mohon tunggu...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>

                    </div>
                    <a href="#" target="_blank">
                        Syarat & Ketentuan
                    </a>

                    <a href="#" target="_blank">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "{{ asset('dashboard') }}/assets/index.html";

    </script>
    <script src="{{ asset('dashboard') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts.bundle.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/custom/authentication/sign-in/general.js"></script>
    <script>
        document.getElementById('forgotPassword').addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                icon: 'info',
                title: 'Lupa Kata Sandi',
                html: `
                    <div style="font-size:15px">
                        Silakan hubungi <b>Tim IT</b> untuk mengetahui password.<br><br>
                        <i class="ki-duotone ki-profile-user fs-2 text-primary"></i>
                    </div>
                `,
                confirmButtonText: 'Mengerti',
                confirmButtonColor: '#0d6efd'
            });
        });
    </script>
</body>

</html>
