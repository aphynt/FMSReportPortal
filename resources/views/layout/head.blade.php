<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Dashboard - {{ config('app.name') }}</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="{{ asset('logo.png') }}" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<link href="{{ asset('dashboard') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('dashboard') }}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
    type="text/css" />
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
<body id="kt_body" class="aside-enabled">
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
        <div class="page d-flex flex-row flex-column-fluid">
