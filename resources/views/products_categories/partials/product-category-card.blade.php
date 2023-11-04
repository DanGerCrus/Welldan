@props([
    'maxWidth' => 'xs'
])
@php
    $maxWidth = [
        'xs' => 'max-w-xs',
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ][$maxWidth];
@endphp
<div
    class="{{$maxWidth}} overflow-hidden bg-white mx-auto lg:mx-0 rounded-lg shadow-lg flex flex-col justify-between"
>
    <div
        class="px-4 py-2"
    >
        <a href="{{route('categories.show', $category->id)}}">
            <h1
                class="text-xl font-bold text-gray-800 uppercase"
            >
                {{$category->name}}
            </h1>
        </a>
    </div>

    <div
        class="flex items-center justify-between px-4 py-2 bg-gray-900"
    >
        <div class="flex flex-row justify-between items-center">
            @can('category-edit')
                <a
                    class="mx-2 px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors
                duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none"
                    href="{{route('categories.edit', $category->id)}}"
                >
                    Редактировать
                </a>
            @endcan
        </div>
    </div>
</div>
