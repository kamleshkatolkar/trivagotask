<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
              'name'=> 'Skyna Luanda',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/autemnecessitatibusquae.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Sakkara Inn',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/corruptiquibusdamaut.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Sea Gull Hurghada',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/doloremquerecusandaeneque.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Grand Oasis',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quamoditdolores.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Tranquility Bay',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/ipsautet.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Accra',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/oditquoseos.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Sunshine Suites',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/etnequeullam.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'East Winds Inn',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/sapientevelitmolestiae.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'The Buccaneer',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/autlaboriosamcorporis.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Posada Viena',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/illoveniamsint.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Robin\'s Nest',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/doloribusdignissimosblanditiis.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Reefs',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/recusandaeveniamquia.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Edgewater',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/doloresestnam.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Deerwood Inn',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/praesentiumreiciendisnobis.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Red Roof Inn Chicago Downtown Magnificent Mile',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/pariaturconsequunturipsum.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'French Market Inn',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/natussitvoluptatibus.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Best Western Inn West Monroe',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/autemfacereplaceat.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Crowne Plaza Chengdu City Centre',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/harumutadipisci.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Jumeirah at Etihad Towers Residence',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/doloresquilabore.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Jumeirah Zabeel Saray',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/vitaeconsequaturmaxime.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Victoria Gate',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quiadolornam.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Batty Langley\'s',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/enimquosfugiat.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Mere Cottage',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/nullaeligendiinventore.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Renaissance London Heathrow',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/illumreiciendissed.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Boston Court',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/harumaccusantiumdolor.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'The Wyche',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/molestiaenonipsa.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'The Connaught Inn',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/veniamvoluptasomnis.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Runggnerhof',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/undevoluptasmaxime.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Castello di Monte Antico',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/harumdolorex.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Figueira',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/commodirerumut.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'PortoBay Marquês',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/expeditaanimivitae.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Cinquentenário',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/aperiamanimiqui.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Cascais Miragem',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/earumdoloresaccusantium.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Dighton',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quidemaliasmollitia.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Boavista Palace',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/ullamcommodiipsa.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Santo André',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/distinctiofugain.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Vidago Palace',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quiavoluptatumdeleniti.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Balaia Plaza',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/sequiipsaquis.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Tiles Madeira',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/sedinventorevoluptates.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Angra Marina',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/utnonconsequatur.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Alpenblick',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/voluptatemnonautem.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Vorderronach',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/minimaestblanditiis.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Arkadenhof Kurtz',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quiquoullam.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Haus Dabaklamm',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/cumesseid.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Mirabeau',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/cupiditaterepellatin.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Fontana',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/advelet.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Keller',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/utconsequaturdolores.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'B&D',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/magniutea.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Heide-Camp',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/cumquiaut.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'B&B Hamm',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/dolorumarchitectoillum.jpg',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Bleckmanns Hof',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quiaharumfacilis.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Freuschle',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/eligendienimmagni.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Bienvenue',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/aspernatursedqui.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Boronali',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/veniamexvelit.png',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ],
            [
              'name'=> 'Mana Island',
              'rating'=> $this->getRating(),
              'category'=> $this->getCategory(),
              'location'=> '',
              'image'=> 'https=>//robohash.org/quaemagnamvelit.bmp',
              'reputation'=> '',
              'reputationBadge'=> '',
               'price'=> $this->getPrice(),
              'availability'=> ''
            ]
            ];

            foreach ($hotels as $hotel){

                DB::table('hotels')->insert($hotel);
             }
    
    
    
    
        }

    public function getCategory(){
        $arrX = array('hotel', 'alternative', 'hostel', 'lodge', 'resort', 'guest-house');

        return array_rand($arrX);
    }

    public function getRating(){
         return rand(0,5);
    }

    public function getReputation(){
        return rand(0,15000);
    }

    public function getAvailability(){
        return rand(0,15);
    }

   public function getReputationBadge($reputation){
    switch ($reputation) {
        case ($reputation <= 500):
            return 'red';
            break;
            
        case ($reputation >= 501 && $reputation <= 799):
            return 'yellow';
            break;     
        
        case ($reputation >= 800):
            return 'green';
            break;         
        
        default:
        return 'green';
            break;
    }
    }

    public function getPrice(){
        return rand(0,1500);
    }

   
}
