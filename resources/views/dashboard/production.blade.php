@include('layout.head')
@include('layout.sidebar')
@include('layout.header')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="post d-flex flex-column-fluid" id="kt_post">

        <div id="kt_content_container" class="container-fluid h-100">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-header">
                    <h3 class="card-title">
                        Dashboard Production
                    </h3>
                </div>

                <div class="card-body p-0">

                    <iframe
                        src="{{ config('ssrs.url') . '/ReportServer?/Portal/Dashboard%20Production&rs:Command=Render&rs:Embed=true' }}"
                        width="100%"
                        height="900"
                        frameborder="0"
                        style="border:none;">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</div>

@include('layout.footer')
