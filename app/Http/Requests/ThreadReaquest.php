<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Channel;
use App\Thread;

class ThreadReaquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'title'      => 'required',
           'channel_id' => 'required|exists:channels,id',
           'body'       => 'required'
        ];
    }
    public function formThread()
    {
        return [
            'user_id'    => auth()->id(),
            'channel_id' => $this->channel_id,
            'title'      => $this->title,
            'body'       => $this->body
        ];
    }
}
