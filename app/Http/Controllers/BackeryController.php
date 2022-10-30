<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackeryController extends Controller {
    public function insertAll() {
        DB::table("products")->insert([
            ["name" => "Kakaóscsiga", "price" => 400, "type_id" => 2],
            ["name" => "Pizzáscsiga", "price" => 350, "type_id" => 1],
            ["name" => "Pogácsa", "price" => 100, "type_id" => 1],
            ["name" => "Kifli", "price" => 50, "type_id" => 1],
            ["name" => "Fánk", "price" => 150, "type_id" => 3]
        ]);
        DB::table("types")->insert([
            ["type" => "Sós"],
            ["type" => "Édes"],
            ["type" => "Speciális"]
        ]);
        echo "<h1>Adatok feltoltve</h1>";
    }

    public function newProducts() {

        return view("new_products");
    }

    public function submitProduct( Request $request) {
        print_r($request->all());
    }

    // public function selectAll() {
    //     $products = Product::all();

    //     echo"<pre>";
    //     print_r($products);
    // }

    // public function selectProduct() {
    //     $products = DB::table("products")->select(
    //         "name", "price", "type_id"
    //     )->get();

    //     echo "<pre>";
    //     print_r($products);
    // }

    public function selectProduct() {
        $products = DB::table("products")
            ->join("types", "types.id", "=", "types.id")->get();
        echo "<pre>";
        print_r($products);
    }

    public function listProduct() {
        $products = DB::table("products")->where("products.id", 3)
            ->join("types", "types.id", "=", "types.id")->get();
        echo "<pre>";
        print_r($products);
    }
}