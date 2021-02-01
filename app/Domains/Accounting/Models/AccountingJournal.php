<?php

namespace App\Domains\Accounting\Models;

use App\Domains\Core\Models\Concerns\HasUlid;
use App\Domains\Core\Models\TenantModel;

class AccountingJournal extends TenantModel
{
    use HasUlid;
}
