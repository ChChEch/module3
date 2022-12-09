@extends('layouts.app')
@section('content')

    <div class="bg-darkblue h-fit pt-12">
        <div class="container flex justify-center mx-auto">
            <a href="{{ url()->previous() }}" class="p-2 text-center text-white font-medium
            text-xl leading-normal uppercase shadow-md hover:text-pink hover:shadow-lg transition duration-200 ease-in-out">Back</a>
            <div style="width:740px" class="inline-block text-white bg-purple text-center p-5">
                <p class="text-2xl font-bold bg-black p-1">Id:  {{$product->id}}</p>
                <p class="text-2xl font-bold bg-black p-1">Code:  {{$product->code}}</p>
                <p class="mt-3 font-bold bg-black p-1">Created at:  {{$product->created_at}}</p>
                <p class="mt-3 font-bold bg-black p-1">Updated at:  {{$product->updated_at}}</p>

                <p class="text-xl font-bold bg-black mb-4 mt-10 p-1">Name:  {{$product->name}}</p>
                <p class="mt-3 font-bold bg-black p-1">Platform:  {{$product->platform}}</p>
                <p class="mt-3 font-bold bg-black p-1">Company:  {{$product->company}}</p>
                <p class="mt-3 font-bold bg-black p-1">Price:  {{$product->price}}€</p>
                <p class="mt-3 mb-10 font-bold bg-black p-1">Description:  {{$product->description}}</p>
            <div class="inline-block"><img style="width:540px" src="{{$product->image}}" alt="Product"></div>
        </div>
            <a href="{{route('products.edit', ['product' => $product->id])}}" class="p-2 text-center text-white font-medium
            text-xl leading-normal uppercase shadow-md hover:text-pink hover:shadow-lg transition duration-200 ease-in-out">Edit</a>
    </div>

@endsection
