<?php

namespace App\Http\Controllers;
use Sunra\PhpSimple\HtmlDomParser;
use Symfony\Component\DomCrawler\Crawler;
use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;
use Illuminate\Support\Facades\Http;
//use GuzzleHttp\Client;
use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\Console\Helper\TableStyle;

use function Laravel\Prompts\table;

//use Illuminate\Routing\PendingResourceRegistration;

class LaravelController extends Controller
{
  public function Fetch()
  {

        $client = new Client();
          $url = 'https://www.moneycontrol.com/stocks/company_info/print_financials.php?sc_did=W&type=balance_VI';
        // Request the URL
        $crawler = $client->request('GET', $url);
        $tables = $crawler->filter('table.table4');//  from class name table4
        if ($tables->count() >= 1) {
        $secondTable = $tables->eq(1);
        $rows = $secondTable->filter('tr');
      foreach ($rows as $row)
              {
                // Convert the row to a Crawler object
                $rowCrawler = new Crawler($row);
                // Get the HTML content of each row
                $htmlContent = $rowCrawler->html();
                 print_r ($htmlContent);
              }
    }
    else {
        // Handle the case when the required tables are not found
        echo 'tables not found';
    }
  } 
  }