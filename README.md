 <h4 class="m-t-md">Method <strong>Local Weather API:</strong></h4>
			<br>
			http://api.worldweatheronline.com/premium/v1/weather.ashx?key=API_KEY&q=London&format=json&includelocation=yes

   
   <h3>Parameters</h3>
     key:Your API key<br>
     q:Location Name<br>
     format:Type of format Ex. Json<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     <p><strong>Example response</strong></p>
 <div style='height:100px;overflow:scroll;'>    
<pre>
{
  "data": {
    "request": [
      {
        "type": "City",
        "query": "London, United Kingdom"
      }
    ],
    "nearest_area": [
      {
        "areaName": [
          {
            "value": "London"
          }
        ],
        "country": [
          {
            "value": "United Kingdom"
          }
        ],
        "region": [
          {
            "value": "City of London, Greater London"
          }
        ],
        "latitude": "51.517",
        "longitude": "-0.106"
      }
    ],
    "current_condition": [
      {
        "observation_time": "07:15 AM",
        "temp_C": "16",
        "temp_F": "61",
        "weatherCode": "116",
        "weatherIconUrl": [
          {
            "value": "http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0002_sunny_intervals.png"
          }
        ],
        "weatherDesc": [
          {
            "value": "Partly cloudy"
          }
        ],
        "windspeedMiles": "21",
        "windspeedKmph": "33",
        "winddirDegree": "250",
        "winddir16Point": "WSW",
        "precipMM": "0.0",
        "humidity": "82",
        "visibility": "10",
        "pressure": "1011",
        "cloudcover": "75",
        "FeelsLikeC": "16",
        "FeelsLikeF": "61"
      }
    ],
    "weather": [
      {
        "date": "2017-10-05",
        "astronomy": [
          {
            "sunrise": "07:08 AM",
            "sunset": "06:29 PM",
            "moonrise": "06:47 PM",
            "moonset": "06:21 AM"
          }
        ],
        "maxtempC": "17",
        "maxtempF": "62",
        "mintempC": "10",
        "mintempF": "51",
        "totalSnow_cm": "0.0",
        "sunHour": "3.0",
        "uvIndex": "3",
        "hourly": [
          {
            "time": "0",
            "tempC": "13",
            "tempF": "56",
            "windspeedMiles": "17",
            "windspeedKmph": "28",
            "winddirDegree": "246",
            "winddir16Point": "WSW",
            "weatherCode": "122",
            "weatherIconUrl": [
              {
                "value": "http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0004_black_low_cloud.png"
              }
            ],
            "weatherDesc": [
              {
                "value": "Overcast"
              }
            ],
            "precipMM": "0.0",
            "humidity": "76",
            "visibility": "20",
            "pressure": "1016",
            "cloudcover": "100",
            "HeatIndexC": "13",
            "HeatIndexF": "56",
            "DewPointC": "9",
            "DewPointF": "48",
            "WindChillC": "11",
            "WindChillF": "51",
            "WindGustMiles": "26",
            "WindGustKmph": "41",
            "FeelsLikeC": "11",
            "FeelsLikeF": "51",
            "chanceofrain": "0",
            "chanceofremdry": "0",
            "chanceofwindy": "0",
            "chanceofovercast": "68",
            "chanceofsunshine": "0",
            "chanceoffrost": "0",
            "chanceofhightemp": "0",
            "chanceoffog": "0",
            "chanceofsnow": "0",
            "chanceofthunder": "0"
          }
        ]
      }
    ],
    "ClimateAverages": [
      {
        "month": [
          {
            "index": "1",
            "name": "January",
            "avgMinTemp": "2.1",
            "avgMinTemp_F": "35.8",
            "absMaxTemp": "8.4",
            "absMaxTemp_F": "47.1",
            "avgDailyRainfall": "2.46"
          }
        ]
      }
    ]
  }
} 

</pre>
 </div>
<br>
<br>
 <h4 class="m-t-md">Method <strong>Marine Weather API:</strong></h4>
		http://api.worldweatheronline.com/premium/v1/marine.ashx?key=API_KEY&q=31.50,-12.50&format=json&includelocation=yes
    <h3>Parameters</h3>
     key:Your API key<br>
     q:Lat , Long Ex. 31.50,-12<br>
     format:Type of format Ex. Json<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     <p><strong>Example response</strong></p>
   <div style='height:100px;overflow:scroll;'>    

<pre>
 
  "data": {
    "request": [
      {
        "type": "LatLon",
        "query": "Lat 31.50 and Lon -12.50"
      }
    ],
    "nearest_area": [
      {
        "latitude": "31.500",
        "longitude": "-12.500",
        "distance_miles": "-999.0"
      }
    ],
    "weather": [
      {
        "date": "2017-10-05",
        "astronomy": [
          {
            "sunrise": "07:47 AM",
            "sunset": "07:30 PM",
            "moonrise": "07:42 PM",
            "moonset": "07:16 AM"
          }
        ],
        "maxtempC": "24",
        "maxtempF": "75",
        "mintempC": "23",
        "mintempF": "73",
        "hourly": [
          {
            "time": "0",
            "tempC": "23",
            "tempF": "74",
            "windspeedMiles": "12",
            "windspeedKmph": "19",
            "winddirDegree": "83",
            "winddir16Point": "E",
            "weatherCode": "113",
            "weatherIconUrl": [
              {
                "value": "http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0008_clear_sky_night.png"
              }
            ],
            "weatherDesc": [
              {
                "value": "Clear"
              }
            ],
            "precipMM": "0.0",
            "humidity": "82",
            "visibility": "10",
            "pressure": "1015",
            "cloudcover": "0",
            "HeatIndexC": "25",
            "HeatIndexF": "78",
            "DewPointC": "20",
            "DewPointF": "68",
            "WindChillC": "23",
            "WindChillF": "74",
            "WindGustMiles": "17",
            "WindGustKmph": "27",
            "FeelsLikeC": "25",
            "FeelsLikeF": "78",
            "sigHeight_m": "1.3",
            "swellHeight_m": "0.9",
            "swellHeight_ft": "3.0",
            "swellDir": "40",
            "swellDir16Point": "NE",
            "swellPeriod_secs": "6.9",
            "waterTemp_C": "23",
            "waterTemp_F": "73"
          }
        ]
      }
    ]
  }
}
</pre>
</div>
<br><br>

   <h4 class="m-t-md">Method <strong>Time Zone API::</strong></h4>
		http://api.worldweatheronline.com/premium/v1/tz.ashx?key=API_KEY&q=Paris&format=json&includelocation=yes
    <h3>Parameters</h3>
     key:Your API key<br>
     q:City Name<br>
     format:Type of format Ex. Json<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     <p><strong>Example response</strong></p>
  <div style='height:100px;overflow:scroll;'>     
   <pre>
  "data": {
    "request": [
      {
        "type": "City",
        "query": "Paris"
      }
    ],
    "nearest_area": [
      {
        "areaName": [
          {
            "value": "Paris"
          }
        ],
        "country": [
          {
            "value": "France"
          }
        ],
        "region": [
          {
            "value": "Ile-de-France"
          }
        ],
        "latitude": "48.867",
        "longitude": "2.333",
        "population": "2110694",
        "weatherUrl": [
          {
            "value": "http://api.worldweatheronline.com/paris-weather/ile-de-france/fr.aspx"
          }
        ]
      }
    ],
    "time_zone": [
      {
        "localtime": "2017-10-05 09:52",
        "utcOffset": "2.0"
      }
    ]
  }
}
</pre>  
 </div>    
     <br><br>

   <h4 class="m-t-md">Method <strong>Search API:</strong></h4>
	http://api.worldweatheronline.com/premium/v1/search.ashx?key=API_KEY&q=London&format=json
    <h3>Parameters</h3>
     key:Your API key<br>
     q:AreaName<br>
     format:Type of format Ex. Json<br>
     <p><strong>Example response</strong></p>
 <div style='height:100px;overflow:scroll;'>      
   <pre>
   {
  "search_api": {
    "result": [
      {
        "areaName": [
          {
            "value": "London Borough Of Wandsworth"
          }
        ],
        "country": [
          {
            "value": "Großbritannien"
          }
        ],
        "region": [
          {
            "value": "Wandsworth, Greater London"
          }
        ],
        "latitude": "51.465",
        "longitude": "-0.195",
        "population": "0",
        "weatherUrl": [
          {
            "value": "http://api.worldweatheronline.com/v2/weather.aspx?q=51.4646,-0.1948"
          }
        ]
      }
    ]
  }
}
</pre>
</div>
  <br><br>

   <h4 class="m-t-md">Historical Local Weather API:</strong></h4>
			http://api.worldweatheronline.com/premium/v1/past-weather.ashx?key=API_KEY&q=Paris&format=json&includelocation=yes&date=2017-08-15&enddate=2017-09-10
			<h3>Parameters</h3>
     key:Your API key<br>
     q:AreaName<br>
     format:Type of format Ex. Json<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     Date:Exa. 2017-08-15<br>
    End Date:Exa. Exa. 2017-09-10<br>
    <p><strong>Example response</strong></p>
  <div style='height:100px;overflow:scroll;'>    
   <pre>
{
  "data": {
    "request": [
      {
        "type": "City",
        "query": "Paris, France"
      }
    ],
    "nearest_area": [
      {
        "areaName": [
          {
            "value": "Paris"
          }
        ],
        "country": [
          {
            "value": "France"
          }
        ],
        "region": [
          {
            "value": "Ile-de-France"
          }
        ],
        "latitude": "48.867",
        "longitude": "2.333"
      }
    ],
    "weather": [
      {
        "date": "2017-08-15",
        "astronomy": [
          {
            "sunrise": "06:43 AM",
            "sunset": "09:06 PM",
            "moonrise": "12:36 AM",
            "moonset": "03:18 PM"
          }
        ],
        "maxtempC": "27",
        "maxtempF": "80",
        "mintempC": "23",
        "mintempF": "73",
        "totalSnow_cm": "0.0",
        "sunHour": "3.8",
        "uvIndex": "0",
        "hourly": [          
          {
            "time": "2100",
            "tempC": "17",
            "tempF": "62",
            "windspeedMiles": "15",
            "windspeedKmph": "23",
            "winddirDegree": "219",
            "winddir16Point": "SW",
            "weatherCode": "119",
            "weatherIconUrl": [
              {
                "value": "http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0004_black_low_cloud.png"
              }
            ],
            "weatherDesc": [
              {
                "value": "Cloudy"
              }
            ],
            "precipMM": "0.7",
            "humidity": "67",
            "visibility": "9",
            "pressure": "1003",
            "cloudcover": "95",
            "HeatIndexC": "17",
            "HeatIndexF": "62",
            "DewPointC": "11",
            "DewPointF": "51",
            "WindChillC": "17",
            "WindChillF": "62",
            "WindGustMiles": "20",
            "WindGustKmph": "32",
            "FeelsLikeC": "17",
            "FeelsLikeF": "62"
          }
        ]
      }
    ]
  }
}
</pre>
</div>
<br><br>

  <h4 class="m-t-md">Historical Marine Weather API:</strong></h4>
		http://api.worldweatheronline.com/premium/v1/past-marine.ashx?key=API_KEY&q=31.50,-12.50&format=json&includelocation=yes&date=2017-08-15&enddate=2017-09-10
				<h3>Parameters</h3>
     key:Your API key<br>
     q:Lat Long  Exa. 31.50,-12.50<br>
     format:Type of format Ex. Json<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     Date:Exa. 2017-08-15<br>
    End Date:Exa. Exa. 2017-09-10<br>
   <div style='height:100px;overflow:scroll;'>   
    
     <p><strong>Example response</strong></p>

<pre>{
  "data": {
    "request": [
      {
        "type": "LatLon",
        "query": "Lat 31.50 and Lon -12.50"
      }
    ],
    "nearest_area": [
      {
        "latitude": "31.500",
        "longitude": "-12.500",
        "distance_miles": "-999.0"
      }
    ],
    "weather": [
          {
            "time": "2100",
            "tempC": "22",
            "tempF": "72",
            "windspeedMiles": "25",
            "windspeedKmph": "40",
            "winddirDegree": "18",
            "winddir16Point": "NNE",
            "weatherCode": "119",
            "weatherIconUrl": [
              {
                "value": "http://cdn.worldweatheronline.net/images/wsymbols01_png_64/wsymbol_0004_black_low_cloud.png"
              }
            ],
            "weatherDesc": [
              {
                "value": "Cloudy"
              }
            ],
            "precipMM": "0.0",
            "humidity": "81",
            "visibility": "10",
            "pressure": "1016",
            "cloudcover": "74",
            "HeatIndexC": "25",
            "HeatIndexF": "76",
            "DewPointC": "19",
            "DewPointF": "66",
            "WindChillC": "22",
            "WindChillF": "72",
            "WindGustMiles": "34",
            "WindGustKmph": "55",
            "FeelsLikeC": "25",
            "FeelsLikeF": "76",
            "sigHeight_m": "2.1",
            "swellHeight_m": "1.8",
            "swellHeight_ft": "5.9",
            "swellDir": "10",
            "swellDir16Point": "N",
            "swellPeriod_secs": "10.0",
            "waterTemp_C": "22",
            "waterTemp_F": "72"
          }
        ]
      }
    ]
  }
}
</pre>
</div>
<br>
<h4 class="m-t-md">Ski Weather API:</strong></h4>
	http://api.worldweatheronline.com/premium/v1/ski.ashx?key=API_KEY&q=52.233,-90.75&format=json&includelocation=yes
						<h3>Parameters</h3>
     key:Your API key<br>
     q:Lat Long  Exa. 31.50,-12.50<br>
     includelocation:With Location or Not Ex. Yes or no<br>
     <p><strong>Example response</strong></p>
  <div style='height:100px;overflow:scroll;'>     
<pre>
{
  "data": {
    "nearest_area": [
      {
        "areaName": [
          {
            "value": "Horseshoe"
          }
        ],
        "country": [
          {
            "value": "Canada"
          }
        ],
        "distance_miles": "0.0",
        "latitude": "52.233",
        "longitude": "-90.750",
        "region": [
          {
            "value": "Ontario"
          }
        ]
      }
    ],
    "request": [
      {
        "query": "Lat 52.23 and Lon -90.75",
        "type": "LatLon"
      }
    ],
    "weather": [
      {
        "astronomy": [
          {
            "moonrise": "06:56 PM",
            "moonset": "06:42 AM",
            "sunrise": "07:12 AM",
            "sunset": "06:30 PM"
          }
        ],
        "bottom": [
          {
            "maxtempC": "9",
            "maxtempF": "47",
            "mintempC": "-1",
            "mintempF": "31"
          }
        ],
        "chanceofsnow": "0",
        "date": "2017-10-05",
        "hourly": [
          
          {
            "bottom": [
              {
                "tempC": "3",
                "tempF": "37",
                "weatherCode": "122",
                "weatherDesc": [
                  {
                    "value": "Overcast"
                  }
                ],
                "weatherIconUrl": [
                  {
                    "value": "http:\/\/cdn.worldweatheronline.net\/images\/wsymbols01_png_64\/wsymbol_0004_black_low_cloud.png"
                  }
                ],
                "winddir16Point": "SSW",
                "winddirDegree": "209",
                "windspeedKmph": "16",
                "windspeedMiles": "10"
              }
            ],
            "chanceoffog": "0",
            "chanceoffrost": "4",
            "chanceofhightemp": "0",
            "chanceofovercast": "21",
            "chanceofrain": "7",
            "chanceofremdry": "0",
            "chanceofsnow": "0",
            "chanceofsunshine": "38",
            "chanceofthunder": "0",
            "chanceofwindy": "0",
            "cloudcover": "95",
            "freezeLevel": "780",
            "humidity": "65",
            "mid": [
              {
                "tempC": "4",
                "tempF": "38",
                "weatherCode": "122",
                "weatherDesc": [
                  {
                    "value": "Overcast"
                  }
                ],
                "weatherIconUrl": [
                  {
                    "value": "http:\/\/cdn.worldweatheronline.net\/images\/wsymbols01_png_64\/wsymbol_0004_black_low_cloud.png"
                  }
                ],
                "winddir16Point": "SSW",
                "winddirDegree": "211",
                "windspeedKmph": "20",
                "windspeedMiles": "13"
              }
            ],
            "precipMM": "0.0",
            "pressure": "1018",
            "snowfall_cm": "0.0",
            "time": "2100",
            "top": [
              {
                "tempC": "3",
                "tempF": "38",
                "weatherCode": "122",
                "weatherDesc": [
                  {
                    "value": "Overcast"
                  }
                ],
                "weatherIconUrl": [
                  {
                    "value": "http:\/\/cdn.worldweatheronline.net\/images\/wsymbols01_png_64\/wsymbol_0004_black_low_cloud.png"
                  }
                ],
                "winddir16Point": "SSW",
                "winddirDegree": "211",
                "windspeedKmph": "20",
                "windspeedMiles": "13"
              }
            ],
            "visibility": "10"
          }
        ],
        "mid": [
          {
            "maxtempC": "5",
            "maxtempF": "40",
            "mintempC": "3",
            "mintempF": "37"
          }
        ],
        "top": [
          {
            "maxtempC": "4",
            "maxtempF": "40",
            "mintempC": "3",
            "mintempF": "37"
          }
        ],
        "totalSnowfall_cm": "0.0"
      }
    ]
  }
}
</pre>
</div>
