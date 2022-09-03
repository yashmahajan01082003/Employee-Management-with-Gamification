<div class="mb-3">
    <label for="edit-name">Name</label>
    <input class="form-control" name="name" id="edit-name" value="{{ $product->name }}" />
</div>
<div class="mb-3">
    <label for="edit-description">Points</label>
    <input class="form-control" type="number" name="points" id="edit-points" value="{{ $product->points }}" />
</div>
<div class="mb-3">
    <label for="edit-min_score">Quantity</label>
    <input class="form-control" name="quantity" id="edit-quantity" value="{{ $product->quantity }}" />
</div>
<div class="mb-3">
    <label for="edit-min_score">Image Path</label>
    <input class="form-control" name="img" id="edit-img" value="{{ $product->img }}" />
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
