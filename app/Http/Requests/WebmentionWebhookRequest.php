<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WebmentionWebhookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'wm-property' => [
                'string', 'required',
                Rule::in(['in-reply-to', 'like-of', 'repost-of', 'bookmark-of', 'mention-of', 'rsvp'])
            ],
            'source' => ['string', 'required', 'url'],
            'target' => ['string', 'required', 'url'],
            'post' => ['array'],
        ];
    }
}
