<x-app-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <!-- normal date -->
            <h1 class="text-3xl py-4">Date Created at: {{ $note->created_at}}... {{ $note->created_at->diffForHumans()}}</h1>

             <!-- human readable, created xx minutes ago -->
             <h1 class="text-3xl py-4">Note Created at: {{ $note->created_at->diffForHumans()}}</h1>

             <p>Current date and time: {{ date('Y-m-d H:i:s') }}</p>

             <p>12Created At: {{ $note->created_at->format('l, F j, Y \a\t g:i A') }}</p>

             <p>24Created At: {{ $note->created_at->format('l, F j, Y \a\t H:i') }}</p>


            @php
                $userTimezone = 'America/New_York'; // Example timezone
                $createdAt = $note->created_at->timezone($userTimezone);
            @endphp

            <p>Created At ({{ $userTimezone }}): {{ $createdAt->format('F j, Y g:i A') }}</p>





            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>
