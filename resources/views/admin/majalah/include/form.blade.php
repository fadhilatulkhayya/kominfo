<div class="row">
    <div class="mb-3 col-md-12">
        <label for="name" class="form-label">Judul E-Magazine <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
            value="{{ isset($majalah) ? $majalah->name : old('name') }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="row">
        @isset($majalah)
            <div class="mb-3 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @if ($majalah->file == null)
                            <label for="e-magazine" class="form-label">E-Magazine Lama : </label>
                            <img src="https://via.placeholder.com/350?text=No+Image+Avaiable" alt="e-magazine"
                                class="rounded mb-2 mt-2" alt="cover" width="200" height="150"
                                style="object-fit: cover">
                        @else
                            <label for="e-magazine" class="form-label">E-Magazine Lama :</label> <a
                                href="{{ url('storage/upload/majalah/' . $majalah->file) }}">{{ $majalah->name }}</a>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="e-magazine" class="form-label">E-Magazine Baru<span class="text-danger">
                                    &#42;</span> :</label>
                            <input class="form-control  @error('file') is-invalid @enderror" type="file"
                                name="file" />
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="mb-3 col-md-12">
                <label for="E-Magazine" class="form-label">E-Magazine Baru <span class="text-danger"> &#42;</span>
                    :</label>
                <input class="form-control  @error('file') is-invalid @enderror" type="file" name="file" />
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @endisset
        @isset($majalah)
            <div class="mb-3 col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        @if ($majalah->cover == null)
                            <label for="cover" class="form-label">Cover Lama</label>
                            <img src="https://via.placeholder.com/350?text=No+Image+Avaiable" alt="cover"
                                class="rounded mb-2 mt-2" alt="cover" width="200" height="150"
                                style="object-fit: cover">
                        @else
                            <label for="cover" class="form-label">Cover Lama</label>
                            <img src="{{ asset('storage/upload/majalah/cover/' . $majalah->cover) }}" alt="cover"
                                class="rounded mb-2 mt-2" width="200" height="150" style="object-fit: cover">
                        @endif
                    </div>
                    <div class="col-md-9">
                        <div class="form-group ms-3">
                            <label for="cover" class="form-label">Cover Baru <span class="text-danger">
                                    &#42;</span> :</label>
                            <input class="form-control  @error('cover') is-invalid @enderror" type="file"
                                name="cover" />
                            @error('cover')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="mb-3 col-md-12">
                <label for="cover" class="form-label">Cover Baru <span class="text-danger"> &#42;</span> :</label>
                <input class="form-control  @error('cover') is-invalid @enderror" type="file" name="cover" />
                @error('cover')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @endisset

    </div>
