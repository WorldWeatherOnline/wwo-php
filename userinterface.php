
<?php
   class Api
   {
    

      public $api_key = '*****************'; // Your API key

      public function request($link,$data) { // REQUEST AI CALL
        $post = array_merge(array('key' => $this->api_key), $data);
        return json_decode($this->connect($post,$link));
      }

    


      private function connect($post,$link) {
        $_post = Array();
        if (is_array($post)) {
          foreach ($post as $name => $value) {
            $_post[] = $name.'='.urlencode($value);
          }
        }
		
		   if (is_array($post))
        {
          $url_complete = join('&', $_post);
        }
		
			$url = $link.$url_complete;
			//Initialize cURL.
			$ch = curl_init();
			//Set the URL that you want to GET by using the CURLOPT_URL option.
			curl_setopt($ch, CURLOPT_URL, $url);
			//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

			//Execute the request.
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
      }
   }

   // Examples
   $api = new Api();
   //Local Weather api call Request 
   
   //========================================//
   $LocalWeather = $api->request('http://api.worldweatheronline.com/premium/v1/weather.ashx?',
   array(
   'q' => 'London',
   'format' => 'json',
   'includelocation' => 'yes'
   ));
   
	
  //=========================================//
  
 //Marine Weather api call Request   
   
  //=========================================// 
   $MarineWeather = $api->request('http://api.worldweatheronline.com/premium/v1/marine.ashx?',
   array(
   'q' => '31.50,-12.50',
   'format' => 'json',
   'includelocation' => 'yes'
   ));
   

 $MarineWeather= (array)  $MarineWeather;


 //  echo '<pre>';
 //  print_r($MarineWeather);
 //  exit;
   
  ?>

 <h2>Request Data</h2> 
<table border='2' style='width:100%'>  
<tr>

<td>
<h2>
Type 
</h2>
</td>
<td>
<h2>
Query 
</h2>
</td>
</tr>

<tr>

<td>
<h2>
 <?php echo $MarineWeather['data']->request['0']->type; ?>
</h2>
</td>
<td>
<h2>
 <?php echo $MarineWeather['data']->request['0']->query; ?>
</h2>
</td>
</tr>
</table>  

<br><br>
 <h2>Nearest Area Data</h2> 
<table border='2'  style='width:100%'>  
<tr>

<td>
<h2>
latitude 
</h2>
</td>
<td>
<h2>
longitude 
</h2>
</td>
<td>
<h2>
distance_miles 
</h2>
</td>
</tr>

<tr>

<td>
<h2>
 <?php echo $MarineWeather['data']->nearest_area['0']->latitude; ?>
</h2>
</td>
<td>
<h2>
 <?php echo $MarineWeather['data']->nearest_area['0']->longitude; ?>
</h2>
</td>
<td>
<h2>
 <?php echo $MarineWeather['data']->nearest_area['0']->distance_miles; ?>
</h2>
</td>
</tr>
</table>


<br><br>
 <h2>Weather Data</h2> 
 
<?php foreach($MarineWeather['data']->weather as $data=>$val)
{

?>	
<table border='2'  style='width:100%'>  
<tr>

<td>
<h2>date</h2></td>
<td><h2>astronomy</h2></td>
<td><h2>maxtempC</h2></td>
<td><h2>maxtempF</h2></td>
<td><h2>mintempC</h2></td>
<td><h2>mintempF</h2></td>
</tr>

<tr>

<td>
<h2>
 <?php echo $val->date; ?>
</h2>
</td>
<td>
<h2>
<table border='2'  style='width:100%'>  
<tr>
<td>Sunrise</td>
<td>sunset</td>
<td>moonrise</td>
<td>moonset</td>
</tr>
<tr>
<?php foreach($val->astronomy as $datanew=>$value)
{

?>
<td><?php echo $value->sunrise; ?></td>
<td><?php echo $value->sunset; ?></td>
<td><?php echo $value->moonrise; ?></td>
<td><?php echo $value->moonset; ?></td>
<?php
}
?>
</tr>
</table> 
</h2>
</td>
<td><h2><?php print_r($val->maxtempC); ?></h2></td>
<td><h2><?php print_r($val->maxtempF); ?></h2></td>
<td><h2><?php print_r($val->mintempC); ?></h2></td>
<td><h2><?php print_r($val->mintempF); ?></h2></td>
</tr>
</table>
<br>
<br>
<h2> hourly</h2>
 

<table border='2'  style='width:100%'>  
<?php
// Top row
echo '<tr>';
foreach($val->hourly as $key => $val1 )
{

foreach($val1 as $key => $value )
{
   
  
        echo '<th >'.$key.'</th>';
    
}
BREAK;

}
echo '</tr>';
foreach($val->hourly as $key => $val2 )
{

$val2=(array)$val2;
echo '<tr>';
foreach( $val2 as $key => $value1 )
{ 


    if( is_array($value1) ) 
    { 
        foreach($value1 as $key => $column) {
            echo '<td>'.$column->value.'</td>';
        }
    }
    else 
    {
        echo '<td>'.$value1.'</td>';
    }
}
echo '</tr>';
}
?>

</table> 
<br><br>
<?php  
}   
   //=========================================//
   
    //Time Zone  api call Request   
   
  //=========================================// 
   $TimeZone = $api->request('http://api.worldweatheronline.com/premium/v1/tz.ashx?',
   array(
   'q' => 'Paris',
   'format' => 'json',
   'includelocation' => 'yes'
   ));
   //=========================================//
   
   
   //Search  api call Request   
   
  //=========================================// 
   $Search = $api->request('http://api.worldweatheronline.com/premium/v1/search.ashx?',
   array(
   'q' => 'London',
   'format' => 'json'
   ));
   //=========================================//
   
    //Historical Local  api call Request   
   
  //=========================================// 
   $HistoricalLocal = $api->request('http://api.worldweatheronline.com/premium/v1/past-weather.ashx?',
   array(
   'q' => 'Paris',
   'format' => 'json',
   'includelocation' => 'yes',
   'date' => '2017-08-15',
   'enddate' => '2017-09-10'
   ));
   //=========================================//
   
   
    //Historical  Marine api call Request   
   
  //=========================================// 
   $HistoricalMarine = $api->request('http://api.worldweatheronline.com/premium/v1/past-marine.ashx?',
   array(
   'q' => '31.50,-12.50',
   'format' => 'json',
   'includelocation' => 'yes',
   'date' => '2017-08-15',
   'enddate' => '2017-09-10'
   ));
   //=========================================//
   
   
   
   //Ski Weather   api call Request   
   
  //=========================================// 
   $SkiWeather = $api->request('http://api.worldweatheronline.com/premium/v1/ski.ashx?',
   array(
   'q' => '52.233,-90.75',
   'format' => 'json',
   'includelocation' => 'yes'
   
   ));
   
   //=========================================//
   
  
  

?>
