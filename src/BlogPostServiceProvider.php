<?php

namespace Yamanjamal\BlogPost;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yamanjamal\BlogPost\Commands\BlogPostCommand;

class BlogPostServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blog-post')
            ->hasConfigFile()
            ->hasCommand(BlogPostCommand::class);
    }
}
