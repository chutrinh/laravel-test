<?php
$products = array(
  [
    "id" => 0,
    "name" => "iphone 12",
    "price" => "15.000.000 đ",
    "img" => "assets/images/iphone16.png"
  ],
  [
    "id" => 1,
    "name" => "iphone 13",
    "price" => "15.1230.000 đ",
    "img" => "assets/images/iphone16.png"
  ],
  [
    "id" => 2,
    "name" => "iphone 14",
    "price" => "15.000.990 đ",
    "img" => "assets/images/iphone16.png"
  ],
  [
    "id" => 2,
    "name" => "iphone 14",
    "price" => "15.000.990 đ",
    "img" => "assets/images/iphone16.png"
  ],
  [
    "id" => 3,
    "name" => "iphone 14",
    "price" => "15.000.990 đ",
    "img" => "assets/images/iphone16.png"
  ],
  [
    "id" => 4,
    "name" => "iphone 14",
    "price" => "15.000.990 đ",
    "img" => "assets/images/iphone16.png"
  ],
);
?>

<div class=" mt-5">
  <h1 class=" text-2xl my-3 px-4 rounded-md ">Iphone hôm nay
  </h1>
  <hr class=" mb-6">
  <ul class=" flex justify-around flex-wrap">
    <?php foreach ($products as $items) { ?>
    <li class=" flex justify-center flex-col items-center gap-1 mr-4 mb-8">
      <amp-img class=" rounded-md" src="{{asset($items['img'])}}" width="250" height="400"></amp-img>
      <p class=" font-bold">{{$items['name']}}</p>
      <p class=" bg-yellow-500 px-3 rounded-lg">{{$items['price']}}</p>
      <button class=" bg-blue-800 px-2 rounded-lg text-yellow-50">mua ngay</button>
    </li>
    <?php } ?>
  </ul>
</div>