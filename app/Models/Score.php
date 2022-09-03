<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'activity_rule_id',
        'user_id',
        'score_date',
        'score',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }


    public function activityRule()
    {
        return $this->belongsTo(ActivityRule::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function points()
    {
        return $this->morphMany(Point::class, 'pointable');
    }

    public function creditPoints()
    {
        $points = 0;
        $activityRules = ActivityRule::where(['activity_id' => $this->activity_id])->get();
        foreach ($activityRules as $activityRule) {
            switch ($activityRule->operator) {
                case 'EQUALS':
                    if ($this->isScoreEquals($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
                case 'BETWEEN':
                    if ($this->isScoreBetween($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
                case 'GREATER_THAN':
                    if ($this->isScoreGreaterThan($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
                case 'LESS_THAN':
                    if ($this->isScoreLessThan($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
                case 'GREATER_THAN_EQUALS':
                    if ($this->isScoreGreaterThanEquals($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
                case 'LESS_THAN_EQUALS':
                    if ($this->isScoreLessThanEquals($activityRule, $this->score)) {
                        $points = $activityRule->points;
                        $this->activity_rule_id = $activityRule->id;
                    }
                    break;
            }

            $this->save();
        }


        $pointsObject = Point::where([
            'pointable_id' => $this->id,
            'pointable_type' => get_class($this),
        ])->first();

        if ($pointsObject) {
            $pointsObject->fill([
                'points' => $points,
                'user_id' => $this->user_id,
            ])->save();
        } else {
            $pointsObject = Point::create([
                'pointable_id' => $this->id,
                'pointable_type' => get_class($this),
                'transaction_type' => 'C',
                'points' => $points,
                'user_id' => $this->user_id,
            ]);
        }
    }

    protected function isScoreEquals($activityRule, $score)
    {
        return $score == $activityRule->min_score;
    }

    protected function isScoreBetween($activityRule, $score)
    {
        return $score >= $activityRule->min_score && $score <= $activityRule->max_score;
    }

    protected function isScoreGreaterThan($activityRule, $score)
    {
        return $score > $activityRule->min_score;
    }

    protected function isScoreLessThan($activityRule, $score)
    {
        return $score < $activityRule->min_score;
    }

    protected function isScoreGreaterThanEquals($activityRule, $score)
    {
        return $score >= $activityRule->min_score;
    }

    protected function isScoreLessThanEquals($activityRule, $score)
    {
        return $score <= $activityRule->min_score;
    }
}
