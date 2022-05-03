<?php

namespace Database\Factories;

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
        $targetUrl = $this->faker->url();
        $sourceUrl = $this->faker->url();

        return [
            'mention_id' => hash('sha256', $sourceUrl . $targetUrl);
            'source_url' => $sourceUrl,
            'target_url' => $targetUrl,
            'data' => [],
        ];
    }
}
