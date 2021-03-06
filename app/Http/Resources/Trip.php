<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Trip extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'refId' => $this->id,
          'from' => $this->from,
          'to' => $this->to,
        ];
    }

    public function with($request) {
        return [
          'version' => '1.0.0',
          'author_url' => url('https://github.com/phuhwei')
        ];
    }
}

