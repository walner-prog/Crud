<!-- resources/views/livewire/sitio-turistico.blade.php -->
<!-- resources/views/livewire/turismo/sitio-turistico.blade.php -->

<div>
    <h1>Sitios Turísticos</h1>

    <ul>
        @foreach($sitiosTuristicos as $sitioTuristico)
            <li>{{ $sitioTuristico->nombre }}</li>
            <!-- Puedes personalizar cómo se muestran otros detalles del sitio turístico -->
        @endforeach
    </ul>
</div>
