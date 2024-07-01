<div class="bg-white dark:bg-gray-950">
    @foreach ($footers as $footer)
    <div class="bg-[#FACA21] py-5">
        <div class="lg:px-0 px-10 mx-auto max-w-7xl">
            <div class="py-2 px-6 sm:flex sm:justify-between items-center">
                <!-- 1/3 Section (Quick Links) -->
                <div class="sm:w-1/4">
                    <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-[#163466] sm:text-4xl">
                        {{ $footer->footer1 }}
                    </h2>
                </div>

                <!-- 2/3 Section (Navigation with Icons) -->

                <nav class="sm:w-3/4 flex flex-col sm:flex-row sm:justify-between sm:items-center">


                    <div class="hidden lg:flex lg:gap-x-12">


                        @foreach ($quicklinks as $index => $link)
                        @if ($link->url)
                        <a href="{{ $link->url }}" target="_blank" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                            @if ($link->file_path)
                            <img src="{{ asset('storage/' . $link->file_path) }}" class="w-12 h-12 mr-3" alt="{{ $link->name . ' Image' }}">
                            @else
                            <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3" alt="Placeholder Image">
                            @endif
                            {{ $link->name }}
                            @if ($link->description)
                            <span class="text-sm text-gray-600 ml-2">{{ $link->description }}</span>
                            @endif
                        </a>
                        @endif
                        @endforeach
                        {{-- @foreach ($quicklinks = \App\Models\QuickLinks::limit(4)->orderBy('created_at', 'desc')->get() as $index => $link)
                                  @if ($quicklink->link)
                                      <a href="{{ $quicklink->link }}" target='_blank'
                        class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                        {{ $quicklink->name }}
                        @if ($quicklink->description)
                        <span class="text-sm text-gray-600 ml-2">{{ $link->description }}</span>
                        @endif

                        @if ($quicklink->file_path)
                        <img src="{{ asset('storage/' . $quicklink->file_path) }}" class="w-12 h-12 mr-3" alt="{{ $quicklink->name . ' Image' }}">
                        @else
                        <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3" alt="Placeholder Image">
                        @endif
                        </a>
                        @endif
                        @endforeach --}}
                    </div>






                    {{-- @foreach ($quicklink->take(4) as $link)
                          @if ($link->url)
                              <a href="{{ $link->url }}" target="_blank"
                    class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                    @if ($link->file_path)
                    <img src="{{ asset('storage/' . $link->file_path) }}" class="w-12 h-12 mr-3" alt="{{ $link->name . ' Image' }}">
                    @else
                    <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3" alt="Placeholder Image">
                    @endif
                    {{ $link->name }}
                    @if ($link->description)
                    <span class="text-sm text-gray-600 ml-2">{{ $link->description }}</span>
                    @endif
                    </a>
                    @endif
                    @endforeach --}}
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-[#163466]">
        <div class="mx-auto lg:px-0 px-20 max-w-6xl p-6">
            <div class="grid grid-cols-2 mx-auto text-center sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
                @foreach ($socials as $index => $social)
                @if ($social->url)
                <a href="https://www.{{ $social->url }}" class="flex text-base items-center text-gray-800 font-bold hover:text-gray-900 py-2 px-3">
                    @if ($social->file_path)
                    <img src="{{ asset('storage/' . $social->file_path) }}" class="w-12 h-12 mr-3" alt="{{ $social->name . ' Image' }}">
                    @else
                    <img src="{{ asset('placeholder-image.png') }}" class="w-12 h-12 mr-3" alt="Placeholder Image">
                    @endif
                    <h3 class="text-base dark:text-white text-white font-semibold mb-1">
                        {{ $social->name }}
                    </h3>
                    @if ($social->description)
                    <span class="text-sm text-gray-600 ml-2">{{ $social->description }}</span>
                    @endif
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-6xl lg:px-0 px-10 py-6">
        <div class="flex flex-row justify-center gap-x-20">
            <!-- Left Column -->

            <div class="w-full sm:w-1/2">
                @foreach ($column->take(4) as $column)
                <h3 class="text-lg text-[#163466] dark:text-[#FACA21] font-semibold mb-4">
                    {{ $column->column1 }}
                </h3>

                <nav class="flex flex-col sm:flex-row justify-between">
                    @foreach ($column->navItems as $nav)
                    <a href="{{ $nav->link }}" target="_blank" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 px-2 py-1">
                        {{ $nav->name }}
                    </a>
                    @endforeach
                </nav>
                @endforeach
            </div>
            <!-- Right Column -->
            <div class="w-full sm:w-1/2 sm:mt-0">
                @foreach ($columns as $column)
                <h3 class="text-lg text-[#163466] dark:text-[#FACA21] font-semibold mb-4">
                    {{ $column->column2 }}
                </h3>

                <nav class="flex flex-col sm:flex-row text-start justify-between">
                    @foreach ($column->navItems as $nav)
                    <a href="{{ $nav->link }}" target="_blank" class="text-gray-800 dark:text-white hover:underline hover:underline-offset-4 px-2 py-1">
                        {{ $nav->name2 }}
                    </a>
                    @endforeach
                </nav>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 dark:border-white">

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach ($currencies as $currency)
            <div class="flex items-start text-left p-4">
                <img src="{{ asset('storage/' . $currency->file_path) }}" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-base dark:text-white font-semibold mb-1">
                        {{ $currency->name }}
                    </h3>
                    <p class="text-base text-[#163466]">
                        {{ $currency->code }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center py-4 dark:text-white text-gray-600">
        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} - {{ $footer->footer2 }}</p>
    </div>
    @endforeach
</div>
</div>

