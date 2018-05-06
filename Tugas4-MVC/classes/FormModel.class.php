<?php

class FormModel
{
    private $data;
    private $file;
    private $fakultas = ['Fakultas Ilmu Komputer','Fakultas Ilmu Budaya','Fakultas Kedokteran', 'Fakultas Hukum'];
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setFile($file)
    {
        $this->file = $file;
    }
    public function getFile()
    {
        return $this->file;
    }
    public function getFakultas()
    {
        $index = array_rand($this->fakultas);
        return $this->fakultas [$index];
    }
}
