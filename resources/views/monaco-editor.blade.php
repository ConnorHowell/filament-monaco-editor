<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        wire:ignore
        x-ignore
        ax-load
        ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-monaco-editor', 'connorhowell/filament-monaco-editor') }}"
        x-data="filamentMonacoEditor({
            state: $wire.entangle('{{ $getStatePath() }}'),
            theme: '{{ $getTheme() }}',
            language: '{{ $getLanguage() }}'
        })"
    >

        <div x-ref="element" style="height: {{ $getHeight() }};"></div>
    </div>
</x-dynamic-component>
