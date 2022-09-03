<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCreditPoints()
    {
        $record = DB::table('points')->where([
            'user_id' => auth()->user()->id,
            'transaction_type' => 'C'
        ])
            ->selectRaw('SUM(points) as points')
            ->first();

        return $record->points ? $record->points : 0;
    }

    public function getDebitPoints()
    {
        $record = DB::table('points')->where([
            'user_id' => auth()->user()->id,
            'transaction_type' => 'D'
        ])
            ->selectRaw('SUM(points) as points')
            ->first();
        return $record->points ? $record->points : 0;
    }

    public function getBalancePoints()
    {
        return $this->getCreditPoints() - $this->getDebitPoints();
    }

    public function getLeaderboard()
    {
        $query = "SELECT * FROM ( ";
        $query .= "SELECT SUM(IF(p.transaction_type = 'C', p.points, 0)) as points, u.name ";
        $query .= "FROM users u ";
        $query .= "LEFT JOIN points p ON u.id = p.user_id GROUP BY p.user_id, u.name) as leaderboard ";
        $query .= "ORDER BY points DESC";
        $records = DB::select(DB::raw($query));
        return $records;
    }

    public function points()
    {
        return $this->hasMany(Point::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
