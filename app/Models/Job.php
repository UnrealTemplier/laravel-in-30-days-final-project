<?php

namespace App\Models;

use Database\Factories\JobFactory;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin Builder
 *
 * @property int id
 * @property int employer_id
 * @property string title
 * @property string salary
 * @property string location
 * @property string schedule
 * @property string url
 * @property bool featured
 * @property DateTime created_at
 * @property DateTime updated_at
 */
class Job extends Model
{
    /** @use HasFactory<JobFactory> */
    use HasFactory;

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
