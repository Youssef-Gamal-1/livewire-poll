<div>
    <form action="">
        <label for="">Poll title</label>
        <input type="text" wire:model.live="title">
{{--wire:model.live.depounce.0ms='title'--}}
        Current Title: {{ $title }}
    </form>
</div>
