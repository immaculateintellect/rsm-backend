<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brewery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $breweries = [
          [
              "id"=>"5-seasons-brewing-co-westside-atlanta",
              "name"=>"5 Seasons Brewing Co - Westside",
              "brewery_type"=>"brewpub",
              "street"=>"1000 Marietta St NW Ste 204",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30318-0683",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"4048753232",
              "website_url"=>"http://www.5seasonsbrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"eurobevs-atlanta",
              "name"=>"EuroBevs",
              "brewery_type"=>"contract",
              "street"=>"2255 Cumberland Pkwy SE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30339-4515",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"7704371285",
              "website_url"=>"http://www.eurobevs.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"eventide-brewing-co-atlanta",
              "name"=>"Eventide Brewing Co",
              "brewery_type"=>"micro",
              "street"=>"1015 Grant St SE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30315-2014",
              "country"=>"United States",
              "longitude"=>"-84.37706291",
              "latitude"=>"33.72670205",
              "phone"=>"4049074543",
              "website_url"=>"http://www.eventidebrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"fire-maker-brewing-company-atlanta",
              "name"=>"Fire Maker Brewing Company",
              "brewery_type"=>"micro",
              "street"=>"975 Chattahoochee Ave NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>"Fulton",
              "postal_code"=>"30318",
              "country"=>"United States",
              "longitude"=>"-84.41943924",
              "latitude"=>"33.80024037",
              "phone"=>"6787058777",
              "website_url"=>"https://www.firemakerbeer.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"gordon-biersch-brewery-restaurant-atlanta-atlanta",
              "name"=>"Gordon Biersch Brewery Restaurant - Atlanta",
              "brewery_type"=>"brewpub",
              "street"=>"3242 Peachtree Rd NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30305-2425",
              "country"=>"United States",
              "longitude"=>"-84.3620936",
              "latitude"=>"33.8503143",
              "phone"=>"4042640253",
              "website_url"=>"http://www.craftworksrestaurants.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"max-lagers-wood-fired-grill-and-brewery-atlanta",
              "name"=>"Max Lager's Wood Fired Grill & Brewery",
              "brewery_type"=>"brewpub",
              "street"=>"320 Peachtree St NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30308-3210",
              "country"=>"United States",
              "longitude"=>"-84.38706074",
              "latitude"=>"33.76333225",
              "phone"=>"4045254400",
              "website_url"=>"http://www.maxlagers.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"monday-night-brewing-atlanta",
              "name"=>"Monday Night Brewing",
              "brewery_type"=>"micro",
              "street"=>"670 Trabert Ave NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30318-4230",
              "country"=>"United States",
              "longitude"=>"-84.40989212",
              "latitude"=>"33.79480405",
              "phone"=>"4043527703",
              "website_url"=>"http://www.mondaynightbrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"monday-night-brewing-garage-atlanta",
              "name"=>"Monday Night Brewing - Garage",
              "brewery_type"=>"micro",
              "street"=>"933 Lee St SW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30310",
              "country"=>"United States",
              "longitude"=>"-84.41617724",
              "latitude"=>"33.72906429",
              "phone"=>null,
              "website_url"=>null,
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"new-realm-brewing-atlanta",
              "name"=>"New Realm Brewing",
              "brewery_type"=>"brewpub",
              "street"=>"550 Somerset Ter NE Unit 101",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30306-4317",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"4049682778",
              "website_url"=>"http://www.newrealmbrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"odempseys-brewing-co-atlanta",
              "name"=>"O'Dempsey's Brewing Co",
              "brewery_type"=>"contract",
              "street"=>"205 Grosvenor Place, Nw",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30328",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"4048450059",
              "website_url"=>"http://www.odempseys.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"orpheus-brewing-atlanta",
              "name"=>"Orpheus Brewing",
              "brewery_type"=>"micro",
              "street"=>"1440 Dutch Valley Pl NE Ste 2001",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30324-5366",
              "country"=>"United States",
              "longitude"=>"-84.36858051",
              "latitude"=>"33.79314935",
              "phone"=>"4043471777",
              "website_url"=>"http://www.orpheusbrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"park-tavern-brewery-atlanta",
              "name"=>"Park Tavern Brewery",
              "brewery_type"=>"brewpub",
              "street"=>"500 10th St NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30309-4272",
              "country"=>"United States",
              "longitude"=>"-84.377744",
              "latitude"=>"33.781867",
              "phone"=>"4042490001",
              "website_url"=>"http://www.parktavern.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"perfect-fool-brewing-company-atlanta",
              "name"=>"Perfect Fool Brewing Company",
              "brewery_type"=>"planning",
              "street"=>null,
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30319",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>null,
              "website_url"=>null,
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"red-brick-brewing-co-atlanta-brewing-co-atlanta",
              "name"=>"Red Brick Brewing Co / Atlanta Brewing Co",
              "brewery_type"=>"micro",
              "street"=>"2323 Defoor Hills Rd NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30318-2207",
              "country"=>"United States",
              "longitude"=>"-84.43454138",
              "latitude"=>"33.81830375",
              "phone"=>"4043555558",
              "website_url"=>"http://www.atlantabrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"sabbath-brewing-atlanta",
              "name"=>"Sabbath Brewing",
              "brewery_type"=>"planning",
              "street"=>null,
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30316",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>null,
              "website_url"=>null,
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"scofflaw-brewing-co-atlanta",
              "name"=>"Scofflaw Brewing Co",
              "brewery_type"=>"micro",
              "street"=>"1738 Macarthur Blvd NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30318-2022",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"4049153392",
              "website_url"=>"http://www.scofflawbeer.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"second-self-brewing-atlanta",
              "name"=>"Second Self Brewing",
              "brewery_type"=>"micro",
              "street"=>"1311 Logan Cir NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30318-2858",
              "country"=>"United States",
              "longitude"=>"-84.43006194",
              "latitude"=>"33.8055922",
              "phone"=>"6789168035",
              "website_url"=>"http://secondselfbeer.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"stats-brewpub-atlanta",
              "name"=>"Stats Brewpub",
              "brewery_type"=>"brewpub",
              "street"=>"300 Marietta St NW",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30313-1632",
              "country"=>"United States",
              "longitude"=>"-84.3964736",
              "latitude"=>"33.7615549",
              "phone"=>"7705700160",
              "website_url"=>"http://StatsATL.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"sweetwater-brewing-co-atlanta",
              "name"=>"SweetWater Brewing Co",
              "brewery_type"=>"regional",
              "street"=>"195 Ottley Dr NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30324-3924",
              "country"=>"United States",
              "longitude"=>"-84.38107219",
              "latitude"=>"33.80802235",
              "phone"=>"4046912537",
              "website_url"=>"http://www.sweetwaterbrew.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"the-lost-druid-atlanta",
              "name"=>"The Lost Druid",
              "brewery_type"=>"planning",
              "street"=>null,
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30307-2758",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>null,
              "website_url"=>null,
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"the-woodlands-at-sweetwater-atlanta",
              "name"=>"The Woodlands At SweetWater",
              "brewery_type"=>"micro",
              "street"=>"215 Ottley Dr",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30324-3924",
              "country"=>"United States",
              "longitude"=>null,
              "latitude"=>null,
              "phone"=>"4046912537",
              "website_url"=>null,
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"the-wrecking-bar-brewpub-atlanta",
              "name"=>"The Wrecking Bar Brewpub",
              "brewery_type"=>"brewpub",
              "street"=>"292 Moreland Ave NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30307-1953",
              "country"=>"United States",
              "longitude"=>"-84.3496422",
              "latitude"=>"33.762309",
              "phone"=>"4042212600",
              "website_url"=>"http://www.wreckingbarbrewpub.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ],[
              "id"=>"torched-hop-brewing-company-atlanta",
              "name"=>"Torched Hop Brewing Company",
              "brewery_type"=>"brewpub",
              "street"=>"249 Ponce de Leon Ave NE",
              "address_2"=>null,
              "address_3"=>null,
              "city"=>"Atlanta",
              "state"=>"Georgia",
              "county_province"=>null,
              "postal_code"=>"30308-1937",
              "country"=>"United States",
              "longitude"=>"-84.37929776",
              "latitude"=>"33.77232605",
              "phone"=>"4048352040",
              "website_url"=>"http://www.Torchedhopbrewing.com",
              "updated_at"=>"2022-11-11T05:07:58.723Z",
              "created_at"=>"2022-11-11T05:07:58.723Z"
          ]
        ];

      foreach($breweries as $brew){
        $b = Brewery::create($brew);
        $b->save();
      }

    }
}
