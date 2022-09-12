<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page',
            'modules' => $this->getModuleList(),
            'pakets' => $this->getPaketsList()
        ];
        return view('landing', $data);
    }

    private function getModuleList()
    {
        return [
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
        ];
    }
    private function getPaketsList()
    {
        $paketList = [
            [
                'nama' => 'Bayi',
                'harga_asli' => 19900,
                'harga_promo' => 14900,
                'jumlah_pengguna' => 938,
                'fitur' => [
                    '<strong>0.5X RESOURCE POWER</strong>',
                    '<strong>500 MB</strong> Disk Space',
                    '<strong>Unlimited</strong> Domain',
                    '<strong>Unlimited</strong> Datbases',
                    '<strong>1</strong> Domain',
                    '<strong>Instant</strong> Backup',
                    '<strong>Unlimited SSL</strong> Gratis Selamanya'
                ]
            ],
            [
                'nama' => 'Pelajar',
                'harga_asli' => 46900,
                'harga_promo' => 23450,
                'jumlah_pengguna' => 4168,
                'fitur' => [
                    '<strong>1X RESOURCE POWER</strong>',
                    '<strong>Unlimited</strong> Disk Space',
                    '<strong>Unlimited</strong> Bandwidth',
                    '<strong>Unlimited</strong> POP3 Email',
                    '<strong>Unlimited</strong> Datbases',
                    '<strong>10</strong> Addon Domain',
                    '<strong>Instant</strong> Backup',
                    '<strong>Domain Gratis</strong> Selamanya',
                    '<strong>Unlimited SSL</strong> Gratis Selamanya'
                ],
            ],
            [
                'nama' => 'Personal',
                'harga_asli' => 59900,
                'harga_promo' => 38900,
                'jumlah_pengguna' => 10017,
                'fitur' => [
                    '<strong>2X RESOURCE POWER</strong>',
                    '<strong>Unlimited</strong> Disk Space',
                    '<strong>Unlimited</strong> Bandwidth',
                    '<strong>Unlimited</strong> POP3 Email',
                    '<strong>Unlimited</strong> Datbases',
                    '<strong>Unlimited</strong> Addon Domain',
                    '<strong>Instant</strong> Backup',
                    '<strong>Domain Gratis</strong> Selamanya',
                    '<strong>Unlimited SSL</strong> Gratis Selamanya',
                    '<strong>Private</strong> Name Server',
                    '<strong>SpamAssassin</strong> Mail Protection',
                ],
            ],
            [
                'nama' => 'Bisnis',
                'harga_asli' => 109900,
                'harga_promo' => 65900,
                'jumlah_pengguna' => 3552,
                'fitur' => [
                    '<strong>3X RESOURCE POWER</strong>',
                    '<strong>Unlimited</strong> Disk Space',
                    '<strong>Unlimited</strong> Bandwidth',
                    '<strong>Unlimited</strong> POP3 Email',
                    '<strong>Unlimited</strong> Datbases',
                    '<strong>Unlimited</strong> Addon Domain',
                    '<strong>Magic Auto</strong> Backup & Restore',
                    '<strong>Domain Gratis</strong> Selamanya',
                    '<strong>Unlimited SSL</strong> Gratis Selamanya',
                    '<strong>Private</strong> Name Server',
                    '<strong>Prioritas</strong> Layanan Support',
                    '<span class="material-icons text-primary">
                    star
                    </span>
                    <span class="material-icons text-primary">
                    star
                    </span>
                    <span class="material-icons text-primary">
                    star
                    </span>
                    <span class="material-icons text-primary">
                    star
                    </span>
                    <span class="material-icons text-primary">
                    star
                    </span>',
                    '<strong>SpamAssassin</strong> Mail Protection',
                ],
            ],
        ];
        $nilaiTerbesar = 0;
        for ($i = 0; $i < count($paketList); $i++) {
            $paketList[$i]['best_seller'] = false;
            if ($nilaiTerbesar < $paketList[$i]['jumlah_pengguna']) {
                $paketList[$i]['best_seller'] = true;
                $nilaiTerbesar = $paketList[$i]['jumlah_pengguna'];
                if ($i != 0) {
                    $paketList[$i - 1]['best_seller'] = false;
                }
            }
        }
        return json_decode(json_encode($paketList));
    }
}
