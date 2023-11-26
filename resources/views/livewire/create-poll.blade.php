<div>
    <form action="">
        <label for="">Poll title</label>
        <input type="text" wire:model.live="title">
{{--wire:model.live.depounce.0ms='title'--}}
        Current Title: {{ $title }}
        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add option</button>
        </div>

        @foreach($options as $index => $option)
            <div class="mb-4">
                {{$index}} - {{$option}}
            </div>
        @endforeach

    </form>
</div>
