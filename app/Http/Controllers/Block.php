<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Block extends BaseController
{
    public $nonce;

    public function __construct($index, $timestamp, $data, $previousHash = null)
    {
        $this->index = $index;
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->previousHash = $previousHash;
        $this->hash = $this->calculateHash();
        $this->nonce = 0;
    }

    public function calculateHash()
    {
        return hash("sha256", $this->index.$this->previousHash.$this->timestamp.((string)$this->data).$this->nonce);
    }
}
