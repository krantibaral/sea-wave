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
            <label for="menuCategoryName" class="required-field">Menu Category Name</label>
            <input class="form-control" id="menuCategoryName" placeholder="Menu Category Name" name="category_name"
                value="{{ old('category_name', $item->category_name) }}">
        </div>
    </div>
</div>