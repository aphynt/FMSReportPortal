@include('layout.head')
@include('layout.sidebar')
@include('layout.header')

<style>
    #kt_content {
        padding: 0 !important;
    }

    #kt_post {
        padding: 0 !important;
    }

    #kt_content_container {
        padding: 0 !important;
        margin: 0 !important;
        height: calc(100vh - 70px);
    }

    .ssrs-frame {
        width: 100%;
        height: 100%;
        border: none;
        display: block;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-fluid">

            <iframe
                class="ssrs-frame"
                src="{{ config('ssrs.url') }}/ReportServer?/Portal/Dashboard%20Production&rs:Command=Render&rs:Embed=true">
            </iframe>

        </div>
    </div>
</div>

@include('layout.footer')
