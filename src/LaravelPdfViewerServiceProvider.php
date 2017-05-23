<?php

/*
 * This file is part of the Laravel PDF VIEWER package.
 *
 * (c) Gooodness Kayode <gtkbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Goodnesskay\LaravelPdfViewer;

use Illuminate\Support\ServiceProvider;

class LaravelPdfViewerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'../laraview' => public_path('public'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
