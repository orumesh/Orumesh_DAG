<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

require_once("Block.php");


 class Blockchain extends BaseController
 {

     /**
      * Instantiates a new Blockchain.
      */
     public function __construct()
     {
         $this->chain = [$this->createGenesisBlock()];
         $this->difficulty = 4;
     }

     /**
      * Creates the genesis block.
      */
     private function createGenesisBlock()
     {
         return new Block(0, strtotime("2017-01-01"), "Genesis Block");
     }

     /**
      * Gets the last block of the chain.
      */
     public function getLastBlock()
     {
         return $this->chain[count($this->chain)-1];
     }

     /**
      * Pushes a new block onto the chain.
      */
     public function push($block)
     {
         $block->previousHash = $this->getLastBlock()->hash;
         $this->mine($block);
         array_push($this->chain, $block);
     }

     /**
      * Mines a block.
      */
     public function mine($block)
     {
         while (substr($block->hash, 0, $this->difficulty) !== str_repeat("0", $this->difficulty)) {
             $block->nonce++;
             $block->hash = $block->calculateHash();
         }

         echo "Block mined: ".$block->hash."\n";
     }

 }