<x-app-layout>
    <x-slot name="header">
        <h3>Header</h3>
    </x-slot>
    <ol class="text-white">
        <li>Nome: {{$name}}</li>
        <li>Documento: {{$document}}</li>
        <li>Status da Assinatura: {{$status}}</li>
        <li>Bebida: {{$params}}</li>
    </ol>
</x-app-layout>