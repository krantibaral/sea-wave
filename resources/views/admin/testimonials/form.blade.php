<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for="name" class="required-field" style="font-weight: bold;">Name</label>
                <input type="text" required class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name" value="{{ old('name', $item->name) }}" placeholder="John Smith">
                @if($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label for="image" class="required-field" style="font-weight: bold;">Image</label>
        <input type="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" accept="image/*"
            name="image">
        @if($errors->has('image'))
            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
        @endif
        @if($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" width="30%">
        @endif
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        <label for="comment" class="required-field" style="font-weight: bold;">Comment</label>
        <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" id="comment" name="comment"
            rows="4" placeholder="Enter comment">{{ old('comment', $item->comment) }}</textarea>
        @if($errors->has('comment'))
            <div class="invalid-feedback">{{ $errors->first('comment') }}</div>
        @endif
    </div>
</div>
<style>
    .required-field::after {
        content: "*";
        color: red;
        margin-left: 5px;
    }

    .form-group {
        width: 100%;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>