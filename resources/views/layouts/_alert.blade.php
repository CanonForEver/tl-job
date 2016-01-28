@if (count($errors) > 0)
    <div class="alert_b mar_b_15">
        <strong>您的填写有误。</strong>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
@endif