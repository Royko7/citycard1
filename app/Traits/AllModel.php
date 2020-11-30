<?php

namespace App\Traits;
use App\Models\City;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait AllModel
{
    protected static function search()
    {

    }
//    public function ticket(Request $request)
//    {
//
//        $resultTicket = new Ticket();
//        $resultTicket->ticket_type = $request->get('ticket_type');
//        $resultTicket = DB::table('ticket')
//            ->select('ticket_type')
//            ->get();
////        dd($resultTicket);
//        return view('admin.admin', ['ticket' => $resultTicket ]);
//
//    }
//    public function element(Request $request)
//    {
////        $resultCity = new City();
//////        $resultCity->cyti_name = $request->get('city_name');
//////        DB::table('city')->insert(['city_name' => $resultCity->city_name]);
//////        return view('admin.admin', ['city' => $resultCity ]);
////        $city = City::create(['city_name' => $resultCity->city_name]);
////        $city->save();
////        return redirect(route('city.element'));
////
//////        $resultCity->save(['city_name']);
//
//        $city = new City;
//        $city->city_name = $request->get('city_name');
//        $city = DB::table('city')->insert(['city_name' => $city->city_name]);
//        $city = DB::table('city')
//            ->select('city_name')
//            ->get();
//        return view('admin.admin', ['city' => $city ]);
//    }
}
