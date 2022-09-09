<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page',
            'modules' => [
                'IcePHP', 'http', 'nd_pdo_mysql', 'stats',
                'apc', 'huffman', 'oauth', 'stem',
                'apcu', 'idn', 'oci8', 'stopm',
                'apm', 'igbinary', 'odbc', 'suhosin',
                'ares', 'imagick', 'opcache', 'sybase_ct',
                'bcmath', 'imap', 'pdf', 'sysvmsg',
                'bcompiler', 'include', 'pdo', 'sysvsem',
                'big_int', 'inotify', 'pdo_dblib', 'sysvshm',
                'bitset', 'interbase', 'pdo_firebird', 'tidy',
                'bloomy', 'intl', 'pdo_mysql', 'timezonedb',
                'bs2_filter', 'ioncube_loader', 'pdo_odbc', 'trader',
                'clamav', 'ioncube_loader_4', 'pdo_pgsql', 'translit',
                'coin_acceptor', 'jsmin', 'pdo_sqlite', 'uploadprogress',
                'crack', 'json', 'pgsql', 'uri_template',
                'dba', 'ldap', 'phalcon', 'uuid'
            ],
        ];
        return view('landing', $data);
    }
}
