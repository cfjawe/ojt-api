<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class fortnite extends Controller
{
    //

function getallnews()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/news/api/get_all_news.php')->json();

return view('index', ['data'=>$data]);

}
function getentertainmentnewscontent()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/news/api/entertainment_news_content.php')->json();

return view('entertainmentnewscontent', ['data'=>$data]);

}
function getgovernment()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/news/api/government_news_content.php')->json();

return view('governmentcontent', ['data'=>$data]);

}
function getlotto()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/get_lotto_content.php')->json();

return view('lottocontent', ['data'=>$data]);

}
// https://api.cdu.com.ph/infocenter/news/api/tabloid_news_content.php
function gettabloid()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/news/api/tabloid_news_content.php')->json();

return view('tabloidcontent', ['data'=>$data]);
}
// https://api.cdu.com.ph/infocenter/promotional_banner.php
function getpromotional()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/promotional_banner.php')->json();

return view('promotionalbanner', ['data'=>$data]);
}
//https://api.cdu.com.ph/infocenter/ads_banner.php
function getadsbanner()
{

$data = Http::get('https://api.cdu.com.ph/infocenter/ads_banner.php')->json();

return view('adsbanner', ['data'=>$data]);
}
}
