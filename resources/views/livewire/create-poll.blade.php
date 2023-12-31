<div>
    <form wire:submit.prevent="createPoll">
        <label>Poll title</label>
        <input type="text" wire:model.live="title">
{{--wire:model.live.depounce.0ms='title'--}}
        @error('title')
            <div class="text-red-500">
                {{$message}}
            </div>
        @enderror
        Current Title: {{ $title }}
        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add option</button>
        </div>

        @foreach($options as $index => $option)
            <div class="mb-4">
                Option {{$index + 1}}
                <div class="flex gap-4">
                    <input type="text" wire:model="options.{{$index}}"/>
                    <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
                </div>
                @error("options.{$index}")
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
        @endforeach
        <button type="submit" class="btn">Create Poll</button>
    </form>
</div>
