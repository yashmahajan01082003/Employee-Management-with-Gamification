<div class="mb-3">
    <label for="edit-name">Name</label>
    <input class="form-control" name="name" id="edit-name" value="{{ $activityRule->name }}" />
</div>
<div class="mb-3">
    <label for="edit-description">Activity</label>
    <select class="form-control" name="activity_id" id="edit-activity_id">
        <option>- Select -</option>
        @foreach ($activities as $activity)
            <option value="{{ $activity->id }}" {{ $activity->id == $activityRule->activity_id ? 'selected' : '' }}>
                {{ $activity->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="edit-min_score">Minimum Score</label>
    <input class="form-control" name="min_score" id="edit-min-score" value="{{ $activityRule->min_score }}" />
</div>
<div class="mb-3">
    <label for="edit-max_score">Maximum Score</label>
    <input class="form-control" name="max_score" id="edit-max-score" value="{{ $activityRule->max_score }}" />
</div>
<div class="mb-3">
    <label for="edit-operator">Operator</label>
    <select class="form-control" name="operator" id="edit-operator" value="{{ $activityRule->operator }}">
        <option>- Select -</option>
        @foreach ($operators as $operator => $label)
            <option value="{{ $operator }}" {{ $operator == $activityRule->operator ? 'selected' : '' }}>
                {{ $label }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="edit-points">Points</label>
    <input class="form-control" name="points" id="edit-points" value="{{ $activityRule->points }}" />
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
