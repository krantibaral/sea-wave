<style>
    .required-field::after {
        content: "*";
        color: red;
        margin-left: 5px;
    }

    .form-group {
        width: 100%;
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .required-field {
        font-weight: bold;
    }

    .form-control::placeholder {
        font-size: 14px;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="location" class="required-field">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Location"
                value="{{ old('location', $item->location ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="phone_number" class="required-field">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number"
                value="{{ old('phone_number', $item->phone_number ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="map_link">Map Link</label>
            <input type="url" class="form-control" id="map_link" name="map_link" placeholder="Map Link"
                value="{{ old('map_link', $item->map_link ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="youtube_link">YouTube Link</label>
            <input type="url" class="form-control" id="youtube_link" name="youtube_link" placeholder="YouTube Link"
                value="{{ old('youtube_link', $item->youtube_link ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="insta_link">Instagram Link</label>
            <input type="url" class="form-control" id="insta_link" name="insta_link" placeholder="Instagram Link"
                value="{{ old('insta_link', $item->insta_link ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="tiktok_link">TikTok Link</label>
            <input type="url" class="form-control" id="tiktok_link" name="tiktok_link" placeholder="TikTok Link"
                value="{{ old('tiktok_link', $item->tiktok_link ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="facebook_link">Facebook Link</label>
            <input type="url" class="form-control" id="facebook_link" name="facebook_link" placeholder="Facebook Link"
                value="{{ old('facebook_link', $item->facebook_link ?? '') }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="catering_image">Catering Image</label>
            <input type="file" class="form-control" id="catering_image" name="catering_image" accept="image/*">
            @if(!empty($item) && $item->getFirstMediaUrl('catering_images'))
                <img src="{{ $item->getFirstMediaUrl('catering_images') }}" alt="Catering Image" style="height: 80px; margin-top: 10px;">
            @endif
        </div>
    </div>
</div>
