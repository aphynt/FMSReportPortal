@include('layout.head')
@include('layout.sidebar')
@include('layout.header')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="post d-flex flex-column-fluid" id="kt_post">

        <div id="kt_content_container" class="container-fluid">

            <div class="card shadow-sm border-0">

                <div class="card-header">
                    <h3 class="card-title">
                        Dashboard Production
                    </h3>
                </div>

                <div class="card-body p-0">

                    <iframe
                        src="http://10.10.2.6:82/ReportServer?/Portal/Dashboard%20Production&rs:Command=Render&rs:Embed=true"
                        width="100%"
                        height="900"
                        frameborder="0"
                        style="border:0; overflow:hidden;"
                    >
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</div>

@include('layout.footer')
