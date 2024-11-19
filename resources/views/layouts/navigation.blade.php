<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('clients.index')" :active="request()->routeIs('clients.index')">
                        {{ __('Clientes') }}
                    </x-nav-link>
                    <x-nav-link :href="route('employees.index')" :active="request()->routeIs('employees.index')">
                        {{ __('Empleados') }}
                    </x-nav-link>
                    <x-nav-link :href="route('orders.index')" :active="request()->routeIs('orders.index')">
                        {{ __('Pedidos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('branches.index')" :active="request()->routeIs('branches.index')">
                        {{ __('Sucursales') }}
                    </x-nav-link>
                    <x-nav-link :href="route('suppliers.index')" :active="request()->routeIs('suppliers.index')">
                        {{ __('Proveedores') }}
                    </x-nav-link>
                    <x-nav-link :href="route('raw_materials.index')" :active="request()->routeIs('raw_materials.index')">
                        {{ __('Materias Primas') }}
                    </x-nav-link>
                </div>
            </div>
            <!-- Dropdown y otras partes del menú -->
        </div>
    </div>
</nav>
