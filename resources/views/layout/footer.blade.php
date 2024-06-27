<?php
$navMenu = array(
  [
    'img' => 'assets/images/facebook.svg',
  ],
  [
    'img' => 'assets/images/tiwter.svg',

  ],
  [

    'img' => 'assets/images/tiktok.svg',
  ],
  [
    'img' => 'assets/images/youtube.svg',

  ]
);
?>

<nav class=" bg-slate-200 flex justify-between items-center px-5 mt-5 rounded-md">
  <div class=" flex items-center ml-8 cursor-pointer">
    <amp-img class=" text-blue-700" src="{{asset("assets/images/logo.svg")}}" width="100" height="100"></amp-img>
  </div>
  <ul class=" w-6/12 flex justify-end gap-5">
    <?php foreach ($navMenu as $items) { ?>
    <amp-img class="cursor-pointer" src="{{asset($items['img'])}}" width="25" height="25"></amp-img>
    <?php }?>
  </ul>
</nav>