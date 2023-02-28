<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\FilmDevelopOrder;

class FilmDevelopOrderController extends Controller
{
    public function index (): View
    {
        return view('filmDevelopOrder.index');
    }
    public function form (): View
    {
        return view('filmDevelopOrder.form');
    }
    public function save (Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "reference_film" => "required",
            "price" => "required",
            "observation" => "required",
        ]);
        FilmDevelopOrder::create($request->only(["reference_film","price","observation"]));

        return back()->with('successMsg', '¡Element created successfully!');

    }
    public function list(): View
    {
        $viewData = [];
        $viewData["title"] = "Order's list";
        $viewData["order"] = FilmDevelopOrder::all();
        return view('filmDevelopOrder.list')->with("viewData", $viewData);
 
    }
    public function show(string $id): View
    {
        $viewData = [];
        $order = FilmDevelopOrder::findOrFail($id);
        $viewData["title"] = $order["reference_film"];
        $viewData["price"] = $order["price"];
        $viewData["order"] = $order;
        return view('filmDevelopOrder.show')->with("viewData", $viewData);
    }
}