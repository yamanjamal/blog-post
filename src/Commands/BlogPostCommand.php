<?php

namespace Yamanjamal\BlogPost\Commands;

use Illuminate\Console\Command;

class BlogPostCommand extends Command
{
    public $signature = 'blog-post';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
