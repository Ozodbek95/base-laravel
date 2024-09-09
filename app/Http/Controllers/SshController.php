<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SshController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sshFromGitLaravel2()
    {
        return '';
    }

    public function sshFromLaravel1()
    {
        return '';
    }
}
