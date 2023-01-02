<?php

namespace ComyoMedia\Shipcloud\Api;

class Shipments extends Api
{
    public function create($body, $parameters = [])
    {
        return $this->post('shipments', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("shipments/{$id}");
    }

    public function delete($id, $parameters = [], $body = [])
    {
        return $this->delete("shipments/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('shipments', $parameters);
    }
}
