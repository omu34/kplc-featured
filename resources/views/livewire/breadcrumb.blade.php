<div>
    <div class="bg-gray-50 dark:bg-gray-950 border-b border-gray-300 dark:border-gray-800">
        <div class="mx-auto max-w-7xl">
          <nav class="flex md:justify-start justify-center py-5" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4 text-center">
                @foreach ($breadcrumbs as $breadcrumb)

                <li data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <a href="/" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">
                        {{ $breadcrumb->breadcrumb1 }}
                        {{--  Home  --}}

                    </a>

                </div>
              </li>
              {{--  <li data-aos="fade-left" data-aos-duration="2000">
                <div class="flex items-center">
                  <svg class="h-5 w-5 flex-shrink-0 text-black dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                  <a href="/" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">
                    {{ $page->main_page_name27 }}
                    Main Page

                </a>
                </div>
              </li>  --}}
              <li data-aos="fade-left" data-aos-duration="3000">
                <div class="flex items-center">
                  <svg class="h-5 w-5 flex-shrink-0 text-black dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                  </svg>
                  <a href="/single-blog" class="ml-4 text-base font-medium text-black dark:text-white hover:text-gray-700">
                    {{ $breadcrumb->breadcrumb2 }}

                    {{--  Single Page  --}}

                </a>
                </div>
              </li>
              @endforeach
            </ol>
          </nav>
        </div>
      </div>
    </div>
