@extends('template')
@section('header')
@section('footer')

<section class="pt-16 pb-3 bg-white dark:bg-white-900 flex justify-center items-center min-h-screen">
    <div class="flex flex-col items-center w-full p-8 pt-0 lg:w-1/2 lg:px-12 xl:px-24">
        <h2 class="section-title text-center text-xl font-bold mb-6">Tinggalkan Pesan Untuk Shera!</h2> <!-- Heading yang dipusatkan -->

        <form action="{{ url('posts') }}"  method="POST" class="w-full">
            @csrf
        @if (session('success'))
        <div class="alert-success text-blue-400">
            <p>{{ session('success') }}</p>
        </div>
        @endif
        @if ($errors->any())
        <div>
            <ul>
            @foreach ($errors->all() as $error)
            <li class="text-red-500 p-2">{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
            <!-- Full Name -->
            <div class="mb-4">
                <label class="block mb-2 text-sm text-black-600 dark:text-black-200">Masukkan Nama anda</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Shera" 
                    class="block w-full px-5 py-3 mt-2 text-black-700 placeholder-black-400 bg-white border border-black-200 rounded-md dark:placeholder-black-600 dark:bg-black-900 dark:text-black-300 dark:border-black-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 
                    @error('title') border-red-500 @enderror" />
            </div>


            <!-- Message -->
            <div class="w-full mt-4">
                <label class="block mb-2 text-sm text-black-600 dark:text-black-200">Pesan Anda</label>
                <textarea name="body" placeholder="ketik disini"
                    class="block w-full h-32 px-5 py-3 mt-2 text-black-700 placeholder-black-400 bg-white border border-black-200 rounded-md md:h-56 dark:placeholder-black-600 dark:bg-black-900 dark:text-black-300 dark:border-black-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 
                    @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>


            <!-- Submit Button -->
            <button type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-amber-700 rounded-md hover:bg-amber-600 focus:outline-none focus:ring focus:ring-amber-300 focus:ring-opacity-50">
                Kirim Pesan Anda
            </button>
        </form>
    </div>
</section>
