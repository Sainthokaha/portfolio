<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,               
            'image' => asset('/storage/'. $this->image),               
        ];
    }
}

// namespace App\Http\Resources;

// use Illuminate\Http\Request;
// use Illuminate\Http\Resources\Json\JsonResource;

// class SkillResource extends JsonResource
// {
//     /**
//      * Transform the resource into an array.
//      *
//      * @param \Illuminate\Http\Request $request
//      <!-- * @return array<string, mixed> -->
//      * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
//      */
//     public function toArray($request)
//     {
//         return [
//             'id' => $this->id,
//             'name' => $this->name,               
//             'image' => asset('/storage/'. $this->image),               
//         ];
//     }
// }
