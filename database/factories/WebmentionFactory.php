<?php

namespace Database\Factories;

use App\DTOs\MentionMetadata;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Webmention>
 */
class WebmentionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mention = MentionMetadata::from(
            source: $this->faker->url(),
            target: $this->faker->url(),
        );

        return [
            'mention_id' => $mention->id,
            'source_url' => $mention->source,
            'target_url' => $mention->target,
            'storage_path' => "{$mention->id}.json"
        ];
    }
}
