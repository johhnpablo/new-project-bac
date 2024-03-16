<x-app-layout>
    <x-slot name="header">
        <h3>Header</h3>
    </x-slot>
    <ol class="text-white">
        <li>Nome: {{auth()->user()->name}}</li>
        <li>Documento: {{\App\Models\Client::where('user_id', auth()->user()->id)->first()->document}}</li>
        <li>Status da Assinatura: {{auth()->user()->client->signatures->first()->status->name}}</li>
    </ol>
</x-app-layout>