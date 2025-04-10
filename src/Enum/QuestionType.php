<?php

namespace App\Enum;

enum QuestionType: string
{
    case MULTIPLE = 'multiple';
    case BOOLEAN = 'boolean';
    case SHORT = 'short';
}