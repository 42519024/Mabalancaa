<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world' ,['data'=> 'Ayo beli produk kami karena yang lain belum tentu berkualitas']);
	}
}
