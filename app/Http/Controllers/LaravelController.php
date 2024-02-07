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

    // Find the tables with class name 'table4'
    $tables = $crawler->filter('table.table4');
    
    // Check if the required tables are present
    if ($tables->count() >= 1) {
        // Extract data from the second table
        $secondTable = $tables->eq(2);
        
        // Get all rows from the second table
        $rows = $secondTable->filter('tr');
        
        // Loop through each row
        $i = 0;
        
        foreach ($rows as $row) {
            // Convert the row to a Crawler object
            $rowCrawler = new Crawler($row);
           
            // Get the HTML content of each row
            $htmlContent = $rowCrawler->html();

            // Process or display the HTML content of the row
            //echo $i.' ';
            //$formattedContent = _replace(' ', ', ', $htmlContent);
          //print_r($formattedContent);
        
          // Replace spaces with commas in the HTML content
          $formattedContent = str_replace(' ', ', ', $htmlContent);
  
          // Replace integers with a specific string (e.g., "IntegerValue"
          print_r($formattedContent);
          echo '<br/>';
        
             
        }
       } else {
        echo 'Required tables not found';
        }
  }
}