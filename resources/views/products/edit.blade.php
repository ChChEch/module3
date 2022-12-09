@extends('layouts.app')
@section('content')
    <div class="bg-darkblue">
        <div style="height: 90vh" class="container mx-auto bg-darkblue">
            <div class="text-center text-white font-bold">Edit product</div>
            <form action="{{route('products.update', ['product' => $product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="p-12">
                    @error('name')
                    <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    @error('code')
                    <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="flex gap-4">
                        <input name="name" class=" form-control mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-purple sm:text-sm"
                               placeholder="Title" value="{{old('name', $product->name)}}"/>
                        <input name="code" class="form-control mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 sm:text-sm placeholder-purple"
                               placeholder="Product Code" value="{{old('Code', $product->code)}}" />

                    </div>
                    @error('company')
                    <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    @error('platform')
                    <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                    <div class="my-6 flex gap-4">
                        <input name="company" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-purple sm:text-sm"
                               placeholder="Distributor" value="{{old('company', $product->company)}}"/>
                        <select name="platform" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white placeholder-purple sm:text-sm">
                            <option  class="font-semibold">PC</option>
                            <option  class="font-semibold">PlayStation</option>
                            <option  class="font-semibold">Switch</option>
                            <option  class="font-semibold">Xbox</option>
                        </select>
                    </div>
                    @error('price')
                    <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="my-6 flex gap-4">
                        <input  class="form-control mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-purple sm:text-sm"
                                placeholder="Price" name="price" value="{{old('price', $product->price)}}"/>
                        @error('image')
                        <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <input class="form-control mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 sm:text-sm"
                               name="image" type="file" id="image" placeholder="Choose image"/>
                    </div>
                    <div class="">
                        @error('description')
                        <span class="text-orange text-xs italic" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <textarea name="description" cols="30" rows="10" class="mb-10 h-40 w-full resize-none rounded-md border bg-white border-slate-300 p-5 font-semibold">{{Request::old('description', $product->description)}}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="cursor-pointer rounded-lg bg-orange px-8 py-5 text-sm font-semibold text-white">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
@endsection
