@extends('layouts.main')

@section('title', 'Registro de Tensión')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <form action="{{ route('bpr.update', $record->id) }}" method="POST" class="w-full max-w-lg p-6 bg-white rounded shadow-lg">
        @csrf
        @method('PUT')
        <h2 class="mb-4 text-2xl font-bold text-center">Registrar Tensión Arterial</h2>

        <div class="mb-4">
            <label for="systolic" class="block text-sm font-medium text-gray-700">Tensión Sistólica</label>
            <input type="number" value="{{ $record->systolic }}" name="systolic" id="systolic" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="diastolic" class="block text-sm font-medium text-gray-700">Tensión Diastólica</label>
            <input type="number" value="{{ $record->diastolic }}" name="diastolic" id="diastolic" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="pulse" class="block text-sm font-medium text-gray-700">Pulso</label>
            <input type="number" value="{{ $record->pulse }}" name="pulse" id="pulse" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="recorded_at" class="block text-sm font-medium text-gray-700">Fecha y Hora</label>
            <input type="datetime-local" value="{{ $record->recorded_at }}" name="recorded_at" id="recorded_at" required class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Registrar</button>
    </form>
</div>
@endsection
