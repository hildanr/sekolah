@extends('layouts.add');

@section('AddMurid');
                    <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 md:p-8 custom-shadow"
                >
                    <form class="space-y-8" action="/murid" method="POST">
                        <!-- Profile Photo Upload -->
                        <!-- Input Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="flex flex-col space-y-2 md:col-span-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >Nama Lengkap</label
                                >
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline"
                                        >person</span
                                    >
                                    <input
                                        class="w-full pl-12 pr-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-body-md text-body-md outline-none"
                                        placeholder="Contoh: Budi Santoso"
                                        type="text"
                                        name="nama"
                                    />
                                </div>
                            </div>
                            <!-- NIS -->
                            <div class="flex flex-col space-y-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >alamat</label
                                >
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline"
                                        >badge</span
                                    >
                                    <input
                                        class="w-full pl-12 pr-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-body-md text-body-md outline-none"
                                        placeholder="jl......."
                                        type="text"
                                        name="alamat"
                                    />
                                </div>
                            </div>
                            <!-- Class Selection -->
                            <div class="flex flex-col space-y-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >Kelas</label
                                >
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline"
                                        >groups</span
                                    >
                                    <select name="kelas"
                                        class="w-full pl-12 pr-10 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-body-md text-body-md outline-none appearance-none"
                                    >
                                        <option
                                            disabled=""
                                            selected=""
                                            value=""
                                        >
                                            Pilih Kelas
                                        </option>
                                        <option>Kelas 10 - IPA 1</option>
                                        <option>Kelas 10 - IPA 2</option>
                                        <option>Kelas 10 - IPS 1</option>
                                        <option>Kelas 11 - IPA 1</option>
                                        <option>Kelas 11 - IPA 2</option>
                                    </select>
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline pointer-events-none"
                                        >expand_more</span
                                    >
                                </div>
                            </div>
                            <!-- Date of Birth -->
                            <div class="flex flex-col space-y-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >umur</label
                                >
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-outline"
                                        >cake</span
                                    >
                                    <input
                                        class="w-full pl-12 pr-4 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-body-md text-body-md outline-none"
                                        type="number"
                                        name="umur"
                                    />
                                </div>
                            </div>
                            <!-- Gender -->
                            <div class="flex flex-col space-y-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant"
                                    >Jenis Kelamin</label
                                >
                                <div class="grid grid-cols-2 gap-4">
                                    <label
                                        class="relative flex items-center justify-center p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container"
                                    >
                                        <input
                                            checked=""
                                            class="hidden"
                                            name="gender"
                                            value="Laki-laki"
                                            type="radio"
                                        />
                                        <span
                                            class="font-label-md text-label-md"
                                            >Laki-laki</span
                                        >
                                    </label>
                                    <label
                                        class="relative flex items-center justify-center p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container"
                                    >
                                        <input
                                            value="Perempuan"
                                            class="hidden"
                                            name="gender"
                                            type="radio"
                                        />
                                        <span
                                            class="font-label-md text-label-md"
                                            >Perempuan</span
                                        >
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Action Button -->
                        <div class="pt-6">
                            <button
                                class="w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-lg flex items-center justify-center gap-2 hover:opacity-90 active:scale-[0.98] transition-all shadow-md"
                                type="submit"
                            >
                                <span class="material-symbols-outlined"
                                    >save</span
                                >
                                Simpan Data
                            </button>
                            <p
                                class="text-center mt-4 font-body-sm text-body-sm text-outline"
                            >
                                Data akan langsung tersimpan ke sistem pusat.
                            </p>
                        </div>
                    </form>
                </div>
@endsection