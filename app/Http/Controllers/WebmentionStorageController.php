<?php

namespace App\Http\Controllers;

use App\DTOs\MentionMetadata;
use App\Http\Requests\WebmentionWebhookRequest;
use App\Models\Webmention;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class WebmentionStorageController
{
    public function __invoke(WebmentionWebhookRequest $request)
    {
        $metadata = MentionMetadata::from(
            source: $request->input('source'),
            target: $request->input('target'),
        );

        $mention = Webmention::query()->make([
            'mention_id' => $metadata->id,
            'source_url' => $metadata->source,
            'target_url' => $metadata->target,
            'storage_path' => $metadata->filename,
        ]);

        abort_unless(
            Response::HTTP_BAD_REQUEST,
            Storage::disk(config('morris.storage_disk'))->put($mention->filename, json_encode($request->input('post')))
        );

        abort_unless(
            Response::HTTP_BAD_REQUEST,
            $mention->save()
        );

        return response()->noContent(Response::HTTP_CREATED);
    }
}
