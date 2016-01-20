{{--@if (session('info'))--}}
{{--<div class="am-panel am-panel-default">--}}
{{--<div class="am-panel-bd">--}}
{{--<div class="am-alert am-alert-info">--}}
{{--{{ session('info') }}--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endif--}}

@if (count($errors) > 0)
    <div class="box box-alert mb20">
        <h3 class="h3 icon icon-alert-lg text-alert">输入错误</h3>
        @foreach ($errors->all() as $error)
            <p class="ml40">{{ $error }}</p>
        @endforeach
    </div>
@endif
