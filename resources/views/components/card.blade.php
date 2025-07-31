<!-- resources/views/components/card.blade.php -->

@props([
'title' => 'Default Title',
'description' => 'This is a default description.',
])

<div
    style="border: 1px solid #ddd; padding: 15px; background:goldenrod; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>