<?php

namespace App\Http\Controllers;

use App\Models\Clint;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClintController extends Controller
{
    public function index()
    {
        $date = Carbon::today()->subDays(7);
        $models = Clint::where('active', 1)->where('created_at', '>=', $date)
            ->inRandomOrder()->limit(1)->groupBy('tel')->selectRaw('count(*) as total, tel')
            ->having('total', '>=', 2)
            ->first();
        return view('welcome', ['models' => $models]);
    }
    public function active($tel)
    {
        $date = Carbon::today()->subDays(7);
        $model = Clint::where('active', 1)->where('tel', $tel)
            ->where('created_at', '>=', $date)->update(['active' => 2]);

        return redirect()->back();
    }
    public function winners()
    {
        $date = Carbon::today()->subDays(7);

        $winners = Clint::where('active', 2)->where('created_at', '>=', $date)
            ->groupBy('tel')->selectRaw('count(*) as total, tel')->get();

        return view('winners', ['winners' => $winners]);
    }
    public function mijoz()
    {
        $models = Clint::orderBy('id', 'DESC')->paginate(10);
        return view('mijoz', ['models' => $models]);
    }
    public function mijozadd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tel' => 'required',
        ]);
        $model = new Clint();
        $model->name = $request->name;
        $model->tel = $request->tel;
        $model->active = 1;
        $model->save();
        return redirect()->back();
    }
    public function delete(Clint $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
