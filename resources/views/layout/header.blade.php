<?php
$navMenu = [
  'Trang chủ',
  'Giỏ hàng',
  'Thông báo',
  'Tài khoản'
];
?>

<nav class=" bg-slate-200 flex justify-between items-center px-5 rounded-md">
  <div class=" flex items-center sm:ml-8 cursor-pointer">
    <amp-img class=" text-blue-700" src="{{asset("assets/images/logo.svg")}}" width="100" height="100"></amp-img>
  </div>
  <ul class=" w-6/12 hidden md:block md:flex justify-end gap-5">
    <?php foreach ($navMenu as $items) { ?>
    <li class=" text-red-600 hover:bg-blue-300 cursor-pointer hover:rounded-md p-1 "> <?php  echo $items ?></li>
    <?php }?>
  </ul>
  <button class="md:hidden ">
    <amp-img class=" text-blue-700" src="{{asset("assets/images/bar.svg")}}" width="40" height="40"></amp-img>
  </button>
</nav>