<div class="mb-3">
    <label for="edit-name">Name</label>
    <input class="form-control" name="name" id="edit-name" value="{{ $activity->name }}" />
</div>
<div class="mb-3">
    <label for="edit-description">Description</label>
    <input class="form-control" name="description" id="edit-description" value="{{ $activity->description }}" />
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
