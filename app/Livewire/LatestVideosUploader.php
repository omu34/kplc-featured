<?php

// namespace App\Livewire;

// use Livewire\Component;
// use Livewire\WithFileUploads;
// use App\Models\LatestVideos as Videos;

// class LatestVideosUploader extends Component
// {
//     use WithFileUploads;

//     public $videos;
//     public $title;
//     public $description;
//     public $link;
//     public $videoFile;
//     public $youtube_id;

//     protected $listeners = ['refreshVideos' => '$refresh'];

//     public function mount()
//     {
//         $this->videos = Videos::all();
//     }

//     public function saveVideo()
//     {
//         $this->validate([
//             'title' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'link' => 'nullable|url',
//             'videoFile' => 'nullable|file|mimes:mp4,mpeg,ogg,qt,webm,wmv,avi|max:10240', // max 10MB
//             'youtube_id' => 'nullable|string|max:255'
//         ]);

//         $filePath = $this->videoFile ? $this->videoFile->store('videos', 'public') : null;

//         Videos::create([
//             'title' => $this->title,
//             'description' => $this->description,
//             'link' => $this->link,
//             'file_path' => $filePath,
//             'youtube_id' => $this->youtube_id
//         ]);

//         $this->reset(['title', 'description', 'link', 'videoFile', 'youtube_id']);
//         $this->videos = Videos::all();
//     }

//     public function toggleFeatured($videoId)
//     {
//         $video = Videos::find($videoId);
//         $video->is_featured = !$video->is_featured;
//         $video->save();

//         $this->videos = Videos::all();
//         $this->emit('refreshVideos');
//     }

//     public function render()
//     {
//         return view('livewire.latest-videos-uploader', ['videos' => $this->videos]);
//     }
// }

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\LatestVideos as Videos;

class LatestVideosUploader extends Component
{
    use WithFileUploads;

    public $videos;
    public $title;
    public $description;
    public $link;
    public $videoFile;
    public $youtube_id;

    protected $listeners = ['refreshVideos' => '$refresh'];

    public function mount()
    {
        $this->videos = Videos::all();
    }

    public function saveVideo()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'videoFile' => 'nullable|file|mimes:mp4,mpeg,ogg,qt,webm,wmv,avi|max:10240', // max 10MB
            'youtube_id' => 'nullable|string|max:255'
        ]);

        $filePath = $this->videoFile ? $this->videoFile->store('videos', 'public') : null;

        Videos::create([
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'file_path' => $filePath,
            'youtube_id' => $this->youtube_id
        ]);

        $this->reset(['title', 'description', 'link', 'videoFile', 'youtube_id']);
        $this->videos = Videos::all();
    }

    public function toggleFeatured($videoId)
    {
        $video = Videos::find($videoId);
        $video->is_featured = !$video->is_featured;
        $video->save();

        $this->videos = Videos::all();
        $this->emit('refreshVideos');
    }

    public function render()
    {
        return view('livewire.latest-videos-uploader', ['videos' => $this->videos]);
    }
}

