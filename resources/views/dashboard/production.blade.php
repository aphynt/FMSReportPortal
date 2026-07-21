@include('layout.head')
@include('layout.sidebar')
@include('layout.header')

<div class="card-body p-0">

    <iframe
        src="{{ config('ssrs.url') . '/ReportServer?/Portal/Dashboard%20Production&rs:Command=Render&rs:Embed=true' }}"
        width="100%" height="900" frameborder="0" style="border:none;">
    </iframe>

</div>

@include('layout.footer')
