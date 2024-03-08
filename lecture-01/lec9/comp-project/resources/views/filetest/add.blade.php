<x-main.app >
    <form action="{{ route('filemanager.store') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input name="image_path" class="form-control" type="file" id="formFile">
            </div>
            @error('image_path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating">
                <textarea name="image_description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
            @error('image_description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <x-btn name='submit' id="test" class="btn btn-info" />
    </form>
</x-main.app>
