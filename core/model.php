<?php
class Model
{
    private $id;

    public function __construct(array $data = array())
    {
        $this->set($data);
    }

    public function set(array $data)
    {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }
}
