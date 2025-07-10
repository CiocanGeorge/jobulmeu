<div class="max-w-7xl mx-auto p-6 mt-3 bg-white shadow rounded-lg">
    <h2 class="text-xl font-semibold mb-4">Creează un Job</h2>

    @if (session()->has('message'))
    <div class="mb-4 text-green-600 font-medium">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" wire:model="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Type</label>
            <select
                wire:model="type"
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                <option value="">Job type</option>
                @foreach ($jobTypes as $jobType)
                <option value="{{ $jobType }}">{{ $jobType }}</option>
                @endforeach
            </select>

            @error('type')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>


        <div>
            <label class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" wire:model="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('location') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea wire:model="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" wire:model="slug" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Expiry Date</label>
            <input type="date" wire:model="expirationDate" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('expirationDate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select wire:model="status"
                class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                <option value="">Select status</option>
                <option value="active">Activ</option>
                <option value="inactive">Inactiv</option>
            </select>

            @error('status')
            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                Salvează Jobul
            </button>
        </div>
    </form>
</div>