<div class="mb-3">
    <label for="edit-activity-id">Activity</label>
    <select class="form-control" name="activity_id" id="edit-activity-id">
        <option>- Select -</option>
        @foreach ($activities as $activity)
            <option {{ $score->activity_id == $activity->id ? 'selected' : '' }} value="{{ $activity->id }}">
                {{ $activity->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="edit-user-id">User id</label>
    <select class="form-control" name="user_id" id="edit-user-id" value="{{ $score->user_id }}">
        <option>- Select -</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ $score->user_id == $user->id ? 'selected' : '' }}>
                {{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="edit-score_date">Score date</label>
    <input class="form-control" name="score_date" id="edit-score-date" type="date"
        value="{{ $score->score_date }}" />
</div>
<div class="mb-3">
    <label for="edit-score">Score</label>
    <input class="form-control" name="score" id="edit-score" value="{{ $score->score }}" />
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
