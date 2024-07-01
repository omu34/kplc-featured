<div>
    {{-- Page Titles with Dropdowns --}}
    <div class="page-titles">
        @foreach($pages as $pageItem)
        <div class="relative inline-block" x-data="{ open: false }">
            <a href="#" class="page-title text-blue-600 hover:underline" @click.prevent="open = !open">{{ $pageItem->title }}</a>
            <div class="absolute bg-gray-100 min-w-max shadow-lg z-10 mt-2 rounded-lg" x-show="open" @click.away="open = false" x-cloak>
                @foreach($pageItem->pagesections as $section)
                <a href="{{ route('section.show', $section->id) }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ $section->title }}</a>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    {{-- Header Section --}}
    @if($header)
    <div class="header-section">
        <h1 class="text-2xl font-bold">{{ $header->title }}</h1>
        {{-- Additional header content --}}
    </div>
    @endif

    {{-- Features Section --}}
    <div class="features-section">
        @foreach($features as $feature)
        <div class="feature-item my-4">
            <h2 class="text-xl font-semibold">{{ $feature->title }}</h2>
            {{-- Render Feature Content --}}
        </div>
        @endforeach
    </div>

    {{-- Videos Section --}}
    <!-- <div class="videos-section">
        @foreach($videos as $video)
            <div class="video-item my-4">
                @if ($video->youtube_id)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
                @else
                    @php
                        $mimeType = Storage::disk('public')->mimeType($video->file_path);
                    @endphp
                    @if (Str::startsWith($mimeType, 'video'))
                        <video controls class="w-full">
                            <source src="{{ Storage::url($video->file_path) }}" type="{{ $mimeType }}">
                            Your browser does not support the video tag.
                        </video>
                    @elseif (Str::startsWith($mimeType, 'audio'))
                        <audio controls class="w-full">
                            <source src="{{ Storage::url($video->file_path) }}" type="{{ $mimeType }}">
                            Your browser does not support the audio element.
                        </audio>
                    @elseif (Str::startsWith($mimeType, 'image'))
                        <img src="{{ Storage::url($video->file_path) }}" alt="Video thumbnail" class="w-full">
                    @endif
                @endif
                <h3 class="text-lg font-semibold">{{ $video->title }}</h3>
                <p class="text-gray-600">{{ $video->description }}</p>
            </div>
        @endforeach
    </div> -->

    <div class="videos-section">
  <h2>Videos</h2>
  @if (count($videos) > 0)
    <ul class="list-none p-0">
      @foreach ($videos as $video)
        <li class="mb-4">
          @if ($video->youtube_id)
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->youtube_id }}" frameborder="0" allowfullscreen></iframe>
          @else
            @if ($video->file_path)
              @php
                $mimeType = Storage::disk('public')->mimeType($video->file_path);
              @endphp
              @if (Str::startsWith($mimeType, 'video/'))
                <video controls class="w-full">
                  <source src="{{ Storage::url($video->file_path) }}" type="{{ $mimeType }}">
                  Your browser does not support the video tag.
                </video>
              @elseif (Str::startsWith($mimeType, 'audio'))
                <audio controls class="w-full">
                  <source src="{{ Storage::url($video->file_path) }}" type="{{ $mimeType }}">
                  Your browser does not support the audio element.
                </audio>
              @elseif (Str::startsWith($mimeType, 'image'))
                <img src="{{ Storage::url($video->file_path) }}" alt="Video thumbnail" class="w-full">
              @endif
            @endif
          @endif
          <h3 class="text-lg font-semibold">{{ $video->title }}</h3>
          <p class="text-gray-600">{{ $video->description }}</p>
        </li>
      @endforeach
    </ul>
  @else
    <p>No videos added yet.</p>
  @endif
</div>






    {{-- Gallery Section --}}
    <div class="gallery-section my-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($gallery as $image)
        <div class="gallery-item">
            <img src="{{ Storage::url($image->media) }}" alt="{{ $image->title }}" class="w-full h-auto rounded-lg">
            <h3 class="text-lg font-semibold mt-2">{{ $image->title }}</h3>
            <p class="text-gray-600">{{ $image->description }}</p>
        </div>
        @endforeach
    </div>

    {{-- News Section --}}
    <div class="news-section my-4">
        @foreach($news as $newsItem)
        <div class="news-item my-2">
            <h3 class="text-lg font-semibold">{{ $newsItem->title }}</h3>
            <p class="text-gray-600">{{ $newsItem->description }}</p>
        </div>
        @endforeach
    </div>

    {{-- Footer Section --}}
    @if($footer)
    <div class="footer-section mt-8">
        <h1 class="text-2xl font-bold">{{ $footer->title }}</h1>
        {{-- Additional footer content --}}
    </div>
    @endif
</div>