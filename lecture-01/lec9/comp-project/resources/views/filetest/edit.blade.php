<x-main.app >

    <form action="{{ route('filemanager.update' ,['filemanager' => $fileManager->id] ) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <img src="{{ asset('storage/' . $fileManager->image_path) }}" id="image-prv" width="250" alt="">
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input name="image_path" onchange="showPreview(event)" class="form-control" type="file" id="formFile">
            </div>
            @error('image_path')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating">
                <textarea name="image_description" class="form-control"
                 placeholder="Leave a comment here" id="floatingTextarea">

                {{ $fileManager->image_description }}
                </textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
            @error('image_description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <x-btn name='submit' id="test" class="btn btn-info" />
    </form>

    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                let src = URL.createObjectURL(event.target.files[0]);
                let pv = document.getElementById('image-prv');
                pv.src = src
            }
        }
    </script>
</x-main.app>



