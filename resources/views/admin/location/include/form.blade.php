<div class="row">
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label">Nama Lokasi <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
            value="{{ isset($location) ? $location->name : old('name') }}" />
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label for="category" class="form-label">Kategori <span class="text-danger"> &#42;</span></label>
        <select class="form-select @error('category') is-invalid @enderror" name="category">
            <option disabled selected>-- Pilih Kategori --</option>
            <option value="1"
                {{ isset($location) && $location->category == '1' ? 'selected' : (old('category') == '1' ? 'selected' : '') }}>
                CCTV</option>
            <option value="2"
                {{ isset($location) && $location->category == '2' ? 'selected' : (old('category') == '2' ? 'selected' : '') }}>
                Wifi Publik</option>
            <option value="3"
                {{ isset($location) && $location->category == '3' ? 'selected' : (old('category') == '3' ? 'selected' : '') }}>
                Wifi OPD</option>
            <option value="4"
                {{ isset($location) && $location->category == '4' ? 'selected' : (old('category') == '4' ? 'selected' : '') }}>
                Videotron</option>
            <option value="5"
                {{ isset($location) && $location->category == '5' ? 'selected' : (old('category') == '5' ? 'selected' : '') }}>
                Tiang Internet</option>
        </select>
        @error('category')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label for="latitude" class="form-label">Latitude <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('latitude') is-invalid @enderror" type="text" name="latitude"
            value="{{ isset($location) ? $location->latitude : old('latitude') }}" />
        @error('latitude')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-6">
        <label for="longitude" class="form-label">Longitude <span class="text-danger"> &#42;</span></label>
        <input class="form-control @error('longitude') is-invalid @enderror" type="text" name="longitude"
            value="{{ isset($location) ? $location->longitude : old('longitude') }}" />
        @error('longitude')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 col-md-12">
        <label for="explanation" class="form-label">Keterangan</label>
        <textarea class="form-control @error('explanation') is-invalid @enderror" name="explanation" cols="20"
            rows="7">{{ isset($location) ? $location->explanation : old('explanation') }}</textarea>
        @error('explanation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    @isset($location)
        <div class="mb-3 col-md-12">
            <div class="row">
                <div class="col-md-3">
                    @if ($location->image == null)
                        <label for="image" class="form-label">Gambar Lama</label>
                        <img src="https://via.placeholder.com/350?text=No+Image+Avaiable" alt="image"
                            class="rounded mb-2 mt-2" alt="image" width="200" height="150"
                            style="object-fit: cover">
                    @else
                        <label for="image" class="form-label">Gambar Lama</label>
                        <img src="{{ asset('storage/upload/lokasi/' . $location->image) }}" alt="image"
                            class="rounded mb-2 mt-2" width="200" height="150" style="object-fit: cover">
                    @endif
                </div>
                <div class="col-md-9">
                    <div class="form-group ms-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input class="form-control  @error('image') is-invalid @enderror" type="file" name="image" />
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="mb-3 col-md-12">
            <label for="image" class="form-label">Gambar </label>
            <input class="form-control  @error('image') is-invalid @enderror" type="file" name="image" />
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    @endisset
</div>
