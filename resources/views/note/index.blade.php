<x-layout>
    <div class="note-container">
        <a href=" {{ route('note.create') }} " class="new-note-btn">
           <h1>New Note heading</h1>
           <p>a para for notes index view</p>
        </a>
        <div class="notes">
            @foreach($notes as $note)
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note-> note, 30) }}
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>