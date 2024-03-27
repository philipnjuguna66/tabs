<?php

namespace Appsorigin\FilamentTabs;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class TabsServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('tabs-widget')->hasViews();
    }

    protected array $widgets = [
        TabsWidget::class,
    ];
}
