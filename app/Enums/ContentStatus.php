<?php

namespace App\Enums;

enum ContentStatus: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Approved = 'approved';
    case Published = 'published';
    case Rejected = 'rejected';
}
