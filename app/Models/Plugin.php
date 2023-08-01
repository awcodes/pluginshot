<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Plugin extends Model
{
    use Orbital;

    public static function schema(Blueprint $table): void
    {
        $table->string('title');
        $table->string('slug');
        $table->string('featured_image');
        $table->string('secondary_image')->nullable();
        $table->string('description')->nullable();
        $table->string('template')->default('standard');
    }

    public function getKeyName(): string
    {
        return 'slug';
    }

    public function getIncrementing(): bool
    {
        return false;
    }
}
