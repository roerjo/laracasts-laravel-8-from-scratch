<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function __construct(
        public $slug,
        public $title,
        public $excerpt,
        public $date,
        public $body
    ) {}

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function all()
    {
        return collect(File::files(resource_path('posts')))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Post(
                $document->slug,
                $document->title,
                $document->except,
                $document->date,
                $document->body(),
            ));
    }
}
