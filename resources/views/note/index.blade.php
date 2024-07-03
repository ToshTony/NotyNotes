<x-layout>
    <div class="note-container">
        <!-- new note btn -->
        <a href=" {{ route('note.create') }} " class="new-note-btn">
           <h1><b>New Note btn</b></h1>
        </a>

        <!-- note div -->
        <div class="notes">
            @foreach($notes as $note)
            <!-- note body -->
            <div class="note">
                <div class="note-body">
                    {{ Str::words($note-> note, 30) }}
                </div>
                <br>
                <!-- note action buttons -->
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            @endforeach
        </div>
    </div>
</x-layout>