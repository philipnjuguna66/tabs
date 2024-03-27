<?php

namespace Appsorigin\FilamentTabs;

use Filament\Widgets\Widget;
use Illuminate\Support\Str;

class TabsWidget extends Widget
{
    public array $widgets = [];

    protected static string $view = 'tabs-widget::tabs-widget';

    public int $currentWidget = 0;

    protected int|string|array $columnSpan = 5;

    public function selectWidget(int $index): void
    {
        $this->currentWidget = $index;

        $this->emit('currentWidget', $index);
    }

    /**
     * Get the display name for a widget.
     *
     * @param  string  $widget  The fully qualified class name of the widget.
     * @return string The display name of the widget.
     */
    public function getWidgetDisplayName($widget): string
    {
        $widget = new $widget;

        return Str::of($widget::class)
            ->afterLast('\\')
            ->kebab()
            ->replace('-', ' ')
            ->replace('widget', ' ')
            ->title();
    }
}
