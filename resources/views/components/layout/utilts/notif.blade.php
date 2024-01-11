@foreach (['success', 'warning', 'danger', 'primary'] as $status)
    @if (session($status))
        <div class="notif card card-{{ $status }} card-outline">
            <div class="card-header">
                <h2>{{ session($status) }}</h2>
            </div>
        </div>
    @endif
@endforeach
<script>
    setTimeout(() => {
        $('.notif').hide('slow')
    }, 2000);
</script>
