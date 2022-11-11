<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class NotebookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fullName' => $this->full_name,
            'companyName' => $this->company_name,
            'telephoneNumber' => $this->telephone_number,
            'email' => $this->email,
            'dateOfBirth' => $this->date_of_birth,
            'photo' => $this->photo,
        ];
    }
}
