<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class YoutubeController extends Controller
{

    public function index()
    {
        $lists = $this->_listVideos();
        // dd($lists);
        return view('index', compact('lists'));
    }

    public function results()
    {
        return view('results');
    }

    public function watch(Request $request)
    {
        $video = $this->_singleVideo($request->get('id'))->items[0];
        // dd($video);
        return view('watch', compact('video'));
    }

    protected function _listVideos()
    {
        $part = 'snippet';
        $channelID = 'UCrhzFVV9Su4oEMf_dANIsrg';
        $apiKey = config('services.youtube.key');
        $youtubeEndpoint = config('services.youtube.endpoint');
        $maxResults = 12;
        $type = 'video';

        $url = "{$youtubeEndpoint}search?part={$part}&channelId={$channelID}&maxResults={$maxResults}&type={$type}&key={$apiKey}";
        $response = Http::get($url);
        $result = json_decode($response);
        File::put(storage_path().'/app/public/results.json', $response->body());
        return $result;
    }

    protected function _singleVideo($id)
    {
        $part = 'snippet,statistics';
        $apiKey = config('services.youtube.key');
        $youtubeEndpoint = config('services.youtube.endpoint');
        $fields = 'items(id,snippet,statistics)';

        $url = "{$youtubeEndpoint}videos?part={$part}&fields={$fields}&key={$apiKey}&id={$id}";
        $response = Http::get($url);
        $result = json_decode($response);
        File::put(storage_path().'/app/public/single.json', $response->body());
        return $result;
    }

}
