@if (session('notif'))
    <div class="alert alert-success">
        {{ session('notif') }}
    </div>
@endif