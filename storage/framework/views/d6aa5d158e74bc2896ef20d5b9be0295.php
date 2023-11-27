<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>

    <script src="https://cdn.tailwindcss.com"></script>

    
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }
        label {
            @apply block uppercase text-slate-700 mb-2
        }
        input,
        textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }
        .error {
            @apply text-red-500 text-sm
        }
    </style>
    

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    <div>
        <h2 class="mb-4 mt-4 text-2xl">Create Poll</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-poll');

$__html = app('livewire')->mount($__name, $__params, '69OoBbQ', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

    <div>
        <h2 class="mb-4 mt-4 text-2xl">Available Polls</h2>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('polls');

$__html = app('livewire')->mount($__name, $__params, 'MqzWS4W', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
</body>

</html>
<?php /**PATH E:\laravel\Livewire-poll\resources\views/app.blade.php ENDPATH**/ ?>