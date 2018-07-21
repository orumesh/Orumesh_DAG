<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

require_once('Blockchain.php');

/*
Set up a simple chain and mine two blocks.
*/

class Chain extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


//    HOME PAGE
    function mineBlock(){


        $testCoin = new BlockChain();

        echo "mining block 1...\n";
        $testCoin->push(new Block(1, strtotime("now"), "Data of First Block Minned"));

//        echo "mining block 2...\n";
//        $testCoin->push(new Block(2, strtotime("now"), "Data of Second Block Minned"));
//
//echo "mining block 3...\n";
//$testCoin->push(new Block(3, strtotime("now"), "Data of Third Block Minned"));



        echo $testCoin = json_encode($testCoin, JSON_PRETTY_PRINT);


        return view('chain', with(compact('testCoin',$testCoin)));


    }
}

