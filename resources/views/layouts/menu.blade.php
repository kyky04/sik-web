<li class="{{ Request::is('universitas*') ? 'active' : '' }}">
    <a href="{!! route('universitas.index') !!}"><i class="fa fa-edit"></i><span>Universitas</span></a>
</li>

<li class="{{ Request::is('fakultas*') ? 'active' : '' }}">
    <a href="{!! route('fakultas.index') !!}"><i class="fa fa-edit"></i><span>Fakultas</span></a>
</li>

<li class="{{ Request::is('jurusans*') ? 'active' : '' }}">
    <a href="{!! route('jurusans.index') !!}"><i class="fa fa-edit"></i><span>Jurusans</span></a>
</li>


<li class="{{ Request::is('dataBeritaUnivs*') ? 'active' : '' }}">
    <a href="{!! route('dataBeritaUnivs.index') !!}"><i class="fa fa-edit"></i><span>DataBeritaUnivs</span></a>
</li>

<li class="{{ Request::is('dataBeritaFaks*') ? 'active' : '' }}">
    <a href="{!! route('dataBeritaFaks.index') !!}"><i class="fa fa-edit"></i><span>DataBeritaFaks</span></a>
</li>

<li class="{{ Request::is('dataBeritaJurs*') ? 'active' : '' }}">
    <a href="{!! route('dataBeritaJurs.index') !!}"><i class="fa fa-edit"></i><span>DataBeritaJurs</span></a>
</li>


<li class="{{ Request::is('pendaftars*') ? 'active' : '' }}">
    <a href="{!! route('pendaftars.index') !!}"><i class="fa fa-edit"></i><span>Pendaftars</span></a>
</li>

<li class="{{ Request::is('mahasiswas*') ? 'active' : '' }}">
    <a href="{!! route('mahasiswas.index') !!}"><i class="fa fa-edit"></i><span>Mahasiswas</span></a>
</li>

<li class="{{ Request::is('beasiswas*') ? 'active' : '' }}">
    <a href="{!! route('beasiswas.index') !!}"><i class="fa fa-edit"></i><span>Beasiswas</span></a>
</li>

