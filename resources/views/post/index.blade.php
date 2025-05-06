@extends('template')
@section('header')


<div class="mt-20 mb-5 pl-5 pr-5 m-auto">
       
        <div class="pt-8 max-w-3xl mx-auto w-full flex justify-between">
            <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-2xl">Post <span class="underline underline-offset-3 decoration-4 decoration-red-400 dark:decoration-red-600">Control</span></h1>

            <a href="{{route('posts.create')}}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Tambah Post</a>
        </div>  
        @if (session('success'))
        <div class="alert-success text-blue-400 pt-2 max-w-3xl max-w-3xl mx-auto w-full ">
            <p>{{ session('success') }}</p>
        </div>
        @endif
<div class="mt-5 overflow-x-auto">
    <table class="max-w-3xl mb-8 mx-auto w-full text-sm text-left rtl:text-right text-gray-500 rounded-lg shadow-lg">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Body
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{ $post->title}}
                </th>
                <td class="px-6 py-4">
                {{ $post->body}}
                </td>
                <td class="px-6 py-4 flex space-x-2 ">
                    
                <a href="{{route('posts.edit',$post->id)}}" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-5">Edit</a>

                <form method="POST" action="{{ url('posts', $post->id ) }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hapus</button>
                </form>
               
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
</div>
</div>
