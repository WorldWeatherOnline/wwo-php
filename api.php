<?php
   class Api
   {
    

      public $api_key = '*********************'; // Your API key

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
