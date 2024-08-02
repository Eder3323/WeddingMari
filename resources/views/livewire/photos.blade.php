<div>
    <div class="container mt-5">
        <h2 class="mb-4">Upload Your Photos</h2>

        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="photos" class="form-label">Select Photos</label>
                <input type="file" wire:model="photos" multiple class="form-control @error('photos.*') is-invalid @enderror">
                @error('photos.*')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div wire:loading wire:target="photos" class="text-info mb-3">
                Uploading...
            </div>

            <div class="mb-3">
                @if ($photos)
                    <h5>Preview:</h5>
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-md-3 mb-3">
                                <img src="{{ $photo->temporaryUrl() }}" class="img-thumbnail" alt="Preview Image">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <script>
            window.addEventListener('showSuccessMessage', event => {
                Swal.fire({
                    title: 'Uploaded!',
                    text: "Your photos have been uploaded successfully.",
                    icon: 'success',
                    confirmButtonColor: "#88957b"
                });
            });
        </script>
    </div>


</div>
