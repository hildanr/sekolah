@extends('layouts.master')

@section('daftar')
            <div class="space-y-3">
                <!-- Student Item 1 -->
                @foreach ($data_murid as $item)
                    
                <div
                    class="group flex items-center p-4 bg-surface-container-lowest border border-outline-variant rounded-xl hover:shadow-sm hover:border-primary/30 transition-all duration-200"
                >
                    <div
                        class="relative h-14 w-14 rounded-full overflow-hidden mr-4 border-2 border-surface-container"
                    >
                        <img
                            class="h-full w-full object-cover"
                            data-alt="A professional studio portrait of a young Indonesian elementary school boy with short black hair, wearing a clean white school uniform shirt against a soft blue studio background. The lighting is bright and cheerful, typical of high-quality school photography, with a warm and encouraging atmosphere."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2cOVnA9sXCWoZj1F_W2XMgwGLzYlPpwUztrgcd6obUei3orwc20EQgCuD6phHvVM0-n0VJxadDUh0qg5lsrkM_l87vZiUMzuXbwI79N47N-W1MNRdHEW_jh8xGOoF4znreNi3RMGUHW197YGlxx3uXYBUTOpVMQcpz5lcTy6mWSEd1JlCAAlJ7w5a06rzIsD3e6ogZBdoohfwlcFk5Zp_jYVg4VudIjZA95Z8GZCnwwvhzmffttaC5JXhzOeRsv_DlAa2oq2IRAQT"
                        />
                    </div>
                    <div class="flex-1">
                        <h3 class="font-label-md text-label-md text-on-surface">
                            {{$item->nama}}
                        </h3>
                        <p
                            class="font-body-sm text-body-sm text-on-surface-variant"
                        >
                            {{$item -> kelas}}
                        </p class="font-body-sm text-body-sm text-on-surface-variant"
                            >{{$item -> gender}}
                        </p>
                    </div>
                    <div class="flex-1">
                        <span class="hidden md:inline-flex px-3 py-1 rounded-full bg-primary-fixed text-on-tertiary-fixed font-label-sm text-label-sm"
                            >alamat</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            {{$item -> alamat}}
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span
                            class="hidden md:inline-flex px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm"
                            >{{$item -> hadir ? 'Hadir' : 'Tidak Hadir'}}</span
                        >
                        <button
                            class="p-2 rounded-full text-on-surface-variant hover:bg-surface-container transition-colors active:scale-90"
                        >
                            <span class="material-symbols-outlined"
                                >more_vert</span
                            >
                        </button>
                    </div>
                </div>
                @endforeach

            </div>
@endsection