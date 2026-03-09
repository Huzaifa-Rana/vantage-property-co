<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function welcome()
    {
        $featuredProperties = \App\Models\Property::with('category', 'agent')
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        $categories = \App\Models\Category::all();

        return view('welcome', compact('featuredProperties', 'categories'));
    }

    public function index(\Illuminate\Http\Request $request)
    {
        $query = \App\Models\Property::with('category', 'agent');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        if ($request->has('city') && $request->city != '') {
            $query->where('city', 'like', '%' . $request->city . '%');
        }

        if (($request->has('category') && $request->category != '') || ($request->has('type') && $request->type != '')) {
            $catSlug = $request->category ?? $request->type;
            $query->whereHas('category', function($q) use ($catSlug) {
                $q->where('slug', $catSlug);
            });
        }

        if ($request->has('price') && $request->price != '') {
            $priceRange = explode('-', $request->price);
            if (count($priceRange) == 2) {
                $query->whereBetween('price', [$priceRange[0], $priceRange[1]]);
            } elseif (strpos($request->price, '+') !== false) {
                $query->where('price', '>=', (int)$request->price);
            }
        }

        if ($request->has('listing_type') && $request->listing_type != '') {
            $query->where('type', $request->listing_type);
        }

        $properties = $query->latest()->paginate(9);
        $categories = \App\Models\Category::all();

        return view('properties.index', compact('properties', 'categories'));
    }

    public function show($slug)
    {
        $property = \App\Models\Property::with('category', 'agent', 'category.properties')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('properties.show', compact('property'));
    }

    public function agents()
    {
        $agents = \App\Models\Agent::with('properties')->get();
        return view('agents', compact('agents'));
    }

    public function about()
    {
        return view('about');
    }
}
