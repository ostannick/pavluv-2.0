<?php

if (! function_exists('computePavluvFee')) {
  function computePavluvFee($breeder_set_price){
    $gross = $breeder_set_price +
                  (($breeder_set_price + config('services.pavluv.base'))
                  * config('services.pavluv.percent'))
                  + config('services.pavluv.addon');

    $net = $gross - $breeder_set_price;

    return [
      'gross' => $gross,
      'net'   => $net,
    ];

  }
}

?>
