<?php

use Yamanjamal\BlogPost\BlogPost;

it('can test  sdfsdf', function () {
    expect(true)->toBeTrue();
});

it('can test  s', function () {
    $s = new BlogPost();
    $g = $s->getHelloWorld();
    expect($g)->toBe('hello world');
});