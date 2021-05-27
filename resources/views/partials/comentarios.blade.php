@forelse($centros as $centro)
<li class="link-group-item border-0 mb-3 shadow-sm bg-white">
    <a class="d-flex justify-content-between align-items-center p-3"
        href="{{ route('centros.show', $centro) }}">
        <span class="text-secondary font-weight-bold">{{ $centro->denominacion_especifica }} @lang('from') {{ $centro->localidad }}</span>
        <span class="text-black-50">{{ $centro->codigo }}</span>
    </a>
</li>
@empty
<li class="link-group-item border-0 mb-3 shadow-sm bg-white p-3 text-secondary font-weight-bold">
    @lang('0result')
</li>
@endforelse
