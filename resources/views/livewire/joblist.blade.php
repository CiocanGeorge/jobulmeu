<div class="max-w-10xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($jobs as $job)
    @php
    $isDisabled = $job->status == 'inactive';
    @endphp

    <a href="{{ route('job-show', $job->id) }}"
        class="block bg-white rounded-lg shadow p-6 flex flex-col justify-between transition-shadow duration-300
   {{ $isDisabled ? 'pointer-events-none opacity-50 cursor-not-allowed' : 'hover:shadow-lg' }}"
        @if($isDisabled)
        aria-disabled="true" tabindex="-1"
        @endif>
        <div>
            <div class="flex justify-between items-start mb-2">
                <h2 class="text-xl font-semibold text-gray-900">{{ $job->title }}</h2>
                <span class="text-xs font-medium text-white bg-blue-500 rounded-full px-3 py-1">
                    {{ ucfirst($job->type) ?? 'Full-time' }}
                </span>
            </div>

            <div class="flex items-center space-x-3 text-sm text-gray-500 mb-4">
                <div class="flex items-center space-x-1">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>

                    <span>{{ $job->location }}</span>
                </div>
            </div>

            <p class="text-gray-700 mb-4 line-clamp-3">{{ $job->description }}</p>

            <div class="flex flex-wrap gap-2 text-xs">
                @foreach($job->skills ?? [] as $skill)
                <span class="bg-gray-200 text-gray-700 px-2 py-1 rounded-full">{{ $skill }}</span>
                @endforeach
            </div>
        </div>

        <div class="mt-4 text-right text-gray-400 text-xs">
            Expire:
            {{ \Carbon\Carbon::parse($job->expirationDate)->format('d.m.Y') }}
        </div>
    </a>
    @endforeach
</div>