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

    /* Make label bold */
    .required-field {
        font-weight: bold;
    }

    /* Reduce the font size of the placeholder text */
    .form-control::placeholder {
        font-size: 14px;
    }
</style>

<!-- New Fields for Menu -->
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="menuName" class="required-field">Menu Name</label>
            <input class="form-control" id="menuName" placeholder="Menu Name" name="name"
                value="{{ old('name', $item->name) }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="menuPrice" class="required-field">Price</label>
            <input type="number" step="0.01" class="form-control" id="menuPrice" placeholder="Price" name="price"
                value="{{ old('price', $item->price) }}">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="menuCategory" class="required-field">Category</label>
            <select class="form-control" id="menuCategory" name="category_id">
                @foreach($menuCategories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $item->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <label for="menuDescription" class="required-field">Description</label>
            <textarea class="form-control" id="menuDescription" name="description" rows="3"
                placeholder="Enter menu description"
                maxlength="100">{{ old('description', $item->description) }}</textarea>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="foodImage" class="required-field">Food Image</label>
            <input type="file" class="form-control" id="foodImage" name="food_image">
            @if($item->getFirstMediaUrl('food_images'))
                <img src="{{ $item->getFirstMediaUrl('food_images') }}" alt="Food Image" width="30%">
            @endif
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            <label for="bannerImage" class="required-field">Banner Image</label>
            <input type="file" class="form-control" id="bannerImage" name="banner_image">
            @if($item->getFirstMediaUrl('banner_images'))
                <img src="{{ $item->getFirstMediaUrl('banner_images') }}" alt="Banner Image" width="30%">
            @endif
        </div>
    </div>

    <!-- Special Menu Checkbox -->
    <div class="col-lg-12">
        <div class="form-group">
            <label for="specialMenu">Special Menu</label>
            <input type="checkbox" id="specialMenu" name="special_menu" value="1" {{ old('special_menu', $item->special_menu) ? 'checked' : '' }}>
        </div>
    </div>
</div>