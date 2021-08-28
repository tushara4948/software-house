<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallMeeting extends Model
{
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const CELLNUMBER = 'cellnumber';
    public const LOGO = 'logo';
    public const NOTE = 'note';
    public const DATE = 'date';
    public const TIME = 'time';

    const RULES = [
            self::NAME => 'required|min:2|max:50',
            self::EMAIL => 'required|email',
            self::CELLNUMBER => 'required|numeric|digits:10',
            self::LOGO => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,gif,svg',
            self::DATE => 'required|date',
            self::TIME => 'required'
        ];

    protected $fillable = [
        self::NAME,
        self::EMAIL,
        self::CELLNUMBER,
        self::LOGO,
        self::NOTE,
        self::DATE,
        self::TIME
    ];
}
