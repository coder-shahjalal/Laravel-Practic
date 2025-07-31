@props(['type' => 'info'])

<div class="alert alert-{{ $type }}">
    <strong>{{ ucfirst($type) }}:</strong> {{ $slot }}
</div>