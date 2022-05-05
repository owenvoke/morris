<?php

declare(strict_types=1);

namespace App\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

final class MentionMetadata extends DataTransferObject
{
    public static function from(string $source, string $target): self
    {
        $id = hash('sha256', $source.$target);

        return new self(
            id: $id,
            source: $source,
            target: $target,
            filename: "{$id}.json",
        );
    }

    public string $id;
    public string $source;
    public string $target;
    public string $filename;
}
