@extends('layouts.app')
<div class="flex-1 p-4">
    <form action="{{ route('settings.update') }}" method="post">
        @csrf
        <label for="language">Idioma:</label>
        <select name="language" id="language">
            <option value="en" {{ session('language') == 'en' ? 'selected' : '' }}>Inglês</option>
            <option value="pt-BR" {{ session('language') == 'pt-BR' ? 'selected' : '' }}>Português</option>
            <option value="es" {{ session('language') == 'es' ? 'selected' : '' }}>Espanhol</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
    @yield('content')
</div>
