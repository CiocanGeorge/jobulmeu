<div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="md:col-span-2 bg-white p-6 rounded-lg shadow">
        <a href="/" class="inline-flex items-center text-gray-600 hover:text-gray-900 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back
        </a>

        <h1 class="text-3xl font-bold mb-2">{{ $job->title }}</h1>

        <div class="flex items-center text-gray-600 space-x-4 mb-6">

            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414 9.172 16.657a8 8 0 1111.314-11.314z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>{{ $job->location }}</span>
            </div>
            <span class="ml-auto inline-block bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                {{ ucfirst($job->type) ?? 'Full-time' }}
            </span>
        </div>

        <div class="mb-6">
            <h2 class="text-lg font-semibold mb-2">Job Description</h2>
            <p class="text-gray-700">{{ $job->description }}</p>
        </div>


    </div>

    <div class="bg-white p-6 rounded-lg shadow space-y-6">


        <div>
            <h3 class="font-semibold text-gray-700 mb-2 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z" />
                </svg>
                Details
            </h3>
            <ul class="text-sm text-gray-600 space-y-1">
                <li><strong>Type:</strong> {{ ucfirst($job->type) }}</li>
                <li><strong>Created:</strong> {{ \Carbon\Carbon::parse($job->created_at)->format('d.m.Y') }}</li>
                <li><strong>Updated:</strong> {{ \Carbon\Carbon::parse($job->updated_at)->format('d.m.Y') }}</li>
            </ul>
        </div>

        <button class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">
            Apply
        </button>

    </div>
</div>