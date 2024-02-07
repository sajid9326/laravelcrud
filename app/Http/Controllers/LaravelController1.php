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
  if ($tables->count() >= 2) {
      // Extract data from the second table
      $secondTable = $tables->eq(2);
      
      // Get the HTML content of the second table
      $htmlContent = $secondTable->html();

      // Now you can further process or display the HTML content
      dd($htmlContent);
  } else {
      // Handle the case when the required tables are not found
      echo 'Required tables not found.';
  }

    exit;





  $tableClassName = 'table4';
  $tables = $crawler->filter("table[class*='$tableClassName']");
  dd($tables);
  //$tables= $crawler->filter('table4')->second();
  //$data =DB::('table4')->get();
  $data=($tables);
  dd($data);
  //print_r($tables);
  //dd($tables);
  $columnIndex = 4;
    $columnData = $tables->filter('tr')->each(function (Crawler $row) use ($columnIndex) {
            return $row->filter('td')->eq($columnIndex)->text();
       });
  //dd($tables);     
//print_r($columnIndex);
//dd($columnIndex);
//dd($columnData);
//print_r($columnData);
        // Print the extracted column data
   //  dd($columnData);
    // return view('Fetch', ['columnData' => $columnData]);     
        // Pass the data to a view for display
      //     $response = Http::get($url);
      // // // Check if the request was successful
      //  if ($response->successful()) {
      // //     // Get the content of the response
      //     $url = $response->body();    
      // //     // Parse the HTML using Simple HTML DOM Parser
      //     $dom = HtmlDomParser::str_get_html($url);
      // //     // Find the table element (modify this based on your HTML structure)
      //    $table = $dom->find('table')[0];
  //dd($table);
          // Get rows from the table
       } 
       
 
        // Make an HTTP GET request to the URL
        // $response = Http::get($url);

        // // Check if the request was successful
        // if ($response->successful()) {
        //     // Get the content of the response
        //     $data = $response->body();

        //     // Pass the data to a view for display
        //     return view('About', ['data' => $data]);
        // } else {
        //     // Handle the case where the request was not successful
        //     return view('Fetch');
        // }
//         $crawler = new Crawler($url);

// $tableClassName = 'tableizer-table';
// $tables = $crawler->filter("table[class*='$tableClassName']");
// print_r($tables);

       //------------------------------end the ---------------------------------
   // }
  // $tables->each(function (Crawler $table, $tableIndex) {
  //   // Loop through each row (tr) in the table
  //   $table->filter('tr')->each(function (Crawler $row, $rowIndex) {
  //     //  Loop through each cell (td) in the row
  //       $row->filter('td')->each(function (Crawler $cell, $cellIndex) {
  //           // Print or process the data in each cell
  //           echo $cell->text() . ' | ';
  //       });

  //       // Move to the next line after processing each row
  //       echo PHP_EOL;
  //   });

//     // Separate tables with a line break
 //return view('table.show', compact('table'))}

 
  public function About (){
    // $dom = new Dom;
    // $dom->loadStr('<a href="google.com">click here for manupulating data, for execute data</a>');
    // $a = $dom->find('a',0);
    // echo $a->text; // "click her
//-----------------------------------------------------------------
   // $data = file_get_contents('https://www.moneycontrol.com/stocks/company_info/print_financials.php?sc_did=W&type=balance_VI');
   // $sarkari = file_get_contents('https://www.sarkariresult.com/');
   // $data = file_get_contents('https://www.worldometers.info/coronavirus/country/india/');
  //   $data = file_get_contents('https://www.worldometers.info/coronavirus/country/india/');
  //   $data = file_get_contents('https://www.worldometers.info/coronavirus/country/india/');
  //echo '<pre>'; print_r($data);
  //  echo '<pre>'; print_r($data);
  //  echo '<pre>'; print_r($data);
  //  echo '<pre>'; print_r($data);
  //  echo '<pre>'; print_r($data);
  // echo '<pre>'; print_r($sarkari);

   //print_r($data);
   //exit;
  // }

// $dom = new Dom;
// $dom->loadFromUrl('http://yahoo.com');
//$html = $dom->outerHtml;
//-----------------
// $dom = new Dom;
// $dom->loadStr('<div class="all"><p>Hey bro, <a href="google.com">click here</a><br /> :)</p></div>');
// $a   = $dom->find('a',0);
// $tag = $a->getTag();
// $tag->setAttribute('class', 'hiii');
// echo $a->getAttribute('class'); 
// //--------------------------------
//   $dom = new Dom;

//   $dom->loadFromUrl('http://google.com');
// $html = $dom->outerHtml;
// echo $dom->text;
// // -----------------------
//   $dom->loadStr('<a href="google.com">click here</a>');
//   //$a = $dom->find('a')[0];)
//   $a = $dom->find('a',0);
//   echo $a->text; // "click here"
  //$dom = new Dom;
// $dom->loadFromFile('var/www/html/laravel-project/resources');
// $contents = $dom->find('.content-border');
// echo count($contents); // 10

// foreach ($contents as $content)
// {
// 	// get the class attr
// 	$class = $content->getAttribute('class');
	
// 	// do something with the html
// 	$html = $content->innerHtml;

	// or refine the find some more
	// $child   = $content->firstChild();
	// $sibling = $child->nextSibling();
//   $dom = new Dom;
// $dom->loadStr('<div class="all"><p>Hey bro, <a href="google.com">click here</a><br /> :)</p></div>');
// $a   = $dom->find('a',0);
// $a->firstChild()->setText('biz baz');
// echo $dom;
//----------------------------
// $dom = new Dom;
// $dom->loadStr('<html>String</html>');
// $html = $dom->outerHtml;
}}