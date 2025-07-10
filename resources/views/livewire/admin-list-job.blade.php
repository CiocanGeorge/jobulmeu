<div> {{-- elementul root unic --}}

    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
            <tr class="border border-gray-300 md:border-none block md:table-row">
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">ID</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Title</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Type</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Location</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Status</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Expiration Date</th>
                <th class="p-2 text-left font-medium text-gray-700 block md:table-cell">Actions</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach($jobs as $job)
            <tr class="border border-gray-300 md:border-none block md:table-row">
                <td class="p-2 block md:table-cell">{{ $job->id }}</td>
                <td class="p-2 block md:table-cell">{{ $job->title }}</td>
                <td class="p-2 block md:table-cell">{{ $job->type }}</td>
                <td class="p-2 block md:table-cell">{{ $job->location }}</td>
                <td class="p-2 block md:table-cell">{{ $job->status }}</td>
                <td class="p-2 block md:table-cell">{{ $job->expirationDate }}</td>
                <td class="p-2 block md:table-cell">
                    <a href="{{ url('/create-job?id=' . $job->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                    <button
                        wire:click="delete({{ $job->id }})"
                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        class="text-red-600 hover:text-red-900">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $jobs->links() }}
    </div>

</div>