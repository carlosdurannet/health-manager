@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
<div class="flex items-center justify-center min-h-screen">
    <form action="#" method="POST" class="w-full max-w-lg p-6 bg-white rounded shadow-lg">
        @csrf

        <h2 class="mb-4 text-2xl font-bold text-center">Registrar Actividad</h2>

        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Fecha</label>
            <input type="date" name="date" id="date" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <div id="quill-editor" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" style="min-height: 150px;"></div>
            <input type="hidden" name="description" id="description" >
        </div>

        <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            Guardar Actividad
        </button>
    </form>
</div>
@endsection
