<?php
namespace App\Traits;

trait ApiResource
{
public function toApiArray(): array
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'active' => $this->active,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}}

?>