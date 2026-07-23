@include('layout.head')
@include('layout.sidebar')
@include('layout.header')

<style>
    #kt_content {
        padding: 5px !important;
    }

    #kt_post {
        padding: 0 !important;
    }

    #kt_content_container {
        padding: 0 !important;
        max-width: 100%;
    }

    .ssrs-card {
        height: 850px;
        border-radius: 10px;
        overflow: hidden;
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

            <div class="card shadow-sm ssrs-card">

                <iframe
                    class="ssrs-frame"
                    src="/ReportServer?/Portal/Dashboard%20Production&rs:Command=Render&rs:Embed=true">
                </iframe>

            </div>

        </div>
    </div>
</div>

@include('layout.footer')
